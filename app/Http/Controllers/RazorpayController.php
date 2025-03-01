<?php

namespace App\Http\Controllers;
use Razorpay\Api\Api;
use App\Models\Payment;
use Exception;
use Illuminate\Http\Request;

class RazorpayController extends Controller
{
    public function createOrder()
    {
        return view('razorpay.payment'); // Load Razorpay form
    }

    // Create Razorpay Order
    public function makePayment(Request $request)
    {
        $api = new Api(env('RAZORPAY_KEY'), env('RAZORPAY_SECRET'));
        
        try {
            // Create order data
            $orderData = [
                'receipt'         => uniqid(),
                'amount'          => $request->amount * 100, // Convert to paisa
                'currency'        => 'INR',
                'payment_capture' => 1, // Auto capture payment
            ];

            $razorpayOrder = $api->order->create($orderData);

            return response()->json([
                'orderId' => $razorpayOrder['id'],
                'key' => env('RAZORPAY_KEY'),
            ]);

        } catch (Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    // Verify Payment & Insert into Database
    public function paymentSuccess(Request $request)
    {
        $api = new Api(env('RAZORPAY_KEY'), env('RAZORPAY_SECRET'));

        try {
            // Fetch payment details from Razorpay
            $payment = $api->payment->fetch($request->razorpay_payment_id);
            $payment->capture(['amount' => $payment['amount']]);

            // Insert into database
            Payment::create([
                'razorpay_payment_id' => $payment->id,
                'amount' => $payment->amount / 100, // Convert paisa to INR
                'status' => 'Success'
            ]);

            return response()->json(['message' => 'Payment Successful!', 'payment' => $payment]);
        } catch (Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }


        
    }
}
