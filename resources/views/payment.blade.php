<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Payment</title>
</head>
<body>
    <form action="thankyou.html" method='POST'>
        <script
                src="https://checkout.razorpay.com/v1/checkout.js"
                data-key="rzp_test_S5rUPdTshyLWiX"
                data-amount="10000"
                data-buttontext="Pay Now"
                data-name="NVRage"
                data-description="NVRage"
                data-image="https://www.2checkout.com/resources/e..."
                data-prefill.name=""
                data-prefill.email=""
                data-theme.color="#F37254">
        </script>
        <input type="hidden" value='hidden' name='hidden'>
    </form>
</body>
</html>