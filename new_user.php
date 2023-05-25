<title>Razorpay Payment Gateway Integration in PHP</title>

<?php
require('config.php');
require('razorpay-php/razorpay-php/Razorpay.php');
session_start();
use Razorpay\Api\Api;

$api = new Api($keyId, $keySecret);

$orderData = [
    'receipt' => 3456,
    'amount' => intval($_GET["amount"]),
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
        "name" => $_GET["firstname"],
        "email" => $_GET["email"],
        "contact" => "",
    ],
    "notes" => [
        "address" => $_GET["address"],
        "merchant_order_id" => $_GET["orderid"],
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