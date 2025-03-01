<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Razorpay Payment</title>
    <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>

    <h2>Payment</h2>
    
    <label>Enter Amount:</label>
    <input type="number" id="amount" placeholder="Enter amount" required>

    <button id="pay-button">Pay with Razorpay</button>

    <!-- <script>
        $("#pay-button").click(function () {
            var amount = $("#amount").val();
            if (!amount) {
                alert("Enter a valid amount!");
                return;
            }

            $.post('/razorpay/payment', {amount: amount, _token: "{{ csrf_token() }}"}, function (data) {
                if (data.error) {
                    alert(data.error);
                    return;
                }

                var options = {
                    "key": data.key,
                    "amount": amount * 100,
                    "currency": "INR",
                    "order_id": data.orderId,
                    "name": "Your Company",
                    "description": "Purchase Description",
                    "handler": function (response) {
                        $.post('/razorpay/success', {
                            razorpay_payment_id: response.razorpay_payment_id,
                            _token: "{{ csrf_token() }}"
                        }, function (successData) {
                            alert(successData.message);
                            window.location.reload();
                        }).fail(function (xhr) {
                            alert("Payment Failed: " + xhr.responseJSON.error);
                        });
                    },
                    "theme": {
                        "color": "#3399cc"
                    }
                };

                var rzp1 = new Razorpay(options);
                rzp1.open();
            }).fail(function (xhr) {
                alert("Error: " + xhr.responseJSON.error);
            });
        });
    </script> -->

</body>
</html>
