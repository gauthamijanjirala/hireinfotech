<?php

namespace App\Http\Controllers;
use Razorpay\Api\Api;
use App\Models\Payment;
use Exception;
use Illuminate\Http\Request;

class RazorpayController extends Controller
{
    public function processPayment(Request $request)
    {
        // Simulate payment processing
        $request->validate([
            'name' => 'required',
            'card_number' => 'required|digits:16',
            'expiry' => 'required|date_format:Y-m',
            'cvv' => 'required|digits:3',
        ]);
        Payment::create([
            'name' => $request->name,
            'card_number' => $request->card_number,
            'expiry' => $request->expiry,
            'cvv' => $request->cvv
        ]);


        return redirect()->back()->with('success', 'Payment Successful!');
    }}
