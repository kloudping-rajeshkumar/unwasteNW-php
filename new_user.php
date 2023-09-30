<title>Razorpay Payment Gateway Integration in PHP</title>
<script>
    var loc = localStorage.getItem('3eab60ec988c461f0cfc0e6ed6ed');
    var cache = JSON.parse(atob(loc));
    var orderIdss = cache;
    // console.log(orderIdss);
    document.addEventListener('DOMContentLoaded', function() {
        var loc = localStorage.getItem('3eab60ec988c461f0cfc0e6ed6ed');

        if (loc == null) {
            // Redirect to another URL
            window.location.href = 'register.php';
        }
        var loc1 = localStorage.getItem('3eab60ec988c461f0cfc0e6ed6ed1');
        var cache1 = JSON.parse(atob(loc1));
        var page = cache1.page;
        // console.log(page);
        // if (page !== 3) {
        //     window.location.href = 'register.php';
        // }
        var model1 = {
            page: 4,
        };
        let encoded1 = window.btoa(JSON.stringify(model1));
        localStorage.setItem('3eab60ec988c461f0cfc0e6ed6ed1', encoded1);
        // console.log(page);
        });

</script>
<?php

require('config.php');
require('razorpay-php/Razorpay.php');
session_start();
use Razorpay\Api\Api;

$amount = $_COOKIE['amount'];
$fname = $_COOKIE['fname'];
$email = $_COOKIE['email'];
$orderId = $_COOKIE['orderId'];
$address = $_COOKIE['address'];

setcookie($amount, '', time() - 3600);
?>
<script>
//     var loc = localStorage.getItem('3eab60ec988c461f0cfc0e6ed6ed');
// var cache = JSON.parse(atob(loc));
// var phonenum = cache.mobileNumber;
//     console.log(cache.mobileNumber);
//     console.log(phonenum);
</script>
<?php
$mobile = $_COOKIE['mobile'];
$api = new Api($keyId, $keySecret);

$orderData = [
    'receipt' => 3456,
    'amount' => $amount*100,
    'currency' => "INR",
    'payment_capture' => 1

];

$razorpayOrder = $api->order->create($orderData);
$razorpayOrderId = $razorpayOrder['id'];
$_SESSION['razorpay_order_id'] = $razorpayOrderId;
$displayAmount = $amount = $orderData['amount'];
if ($displayCurrency !== 'INR') {
    $url = "https://api.fixer.io/latest?symbols=$displayCurrency&base=INR";
    $exchange = json_decode(file_get_contents($url), true);

    $displayAmount = $exchange['rates'][$displayCurrency] * $amount / 100;
}



$data = [
    "key" => $keyId,
    "amount" => $amount,
    "name" => "UnwasteNetwork",
    "description" => "UnwasteNetwork",
    "image" => "https://yellowbucket.in/unwastenetwork/assets/images/resources/why-choose-two-founder-img.jpg",
    "prefill" => [
        "name" => $fname,
        "email" => $email,
        "contact" => $mobile,
    ],
    "notes" => [
        "address" => $address,
        "merchant_order_id" => $orderId,
    ],
    "theme" => [
        "color" => "#3399cc"
    ],
    "order_id" => $razorpayOrderId,
];

if ($displayCurrency !== 'INR') {
    $data['display_currency'] = $displayCurrency;
    $data['display_amount'] = $displayAmount;
}

$json = json_encode($data);

include('./checkout/manual.php');
//require("checkout/manual.php?firstname=rajesh");

?>