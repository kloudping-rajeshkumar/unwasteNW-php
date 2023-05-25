<title>Razorpay Payment Gateway Integration in PHP</title>
<div class="container">
	<div class="row">
	<h2>Example: Razorpay Payment Gateway Integration in PHP</h2>
	<br><br><br>
<?php
require('config.php');
require('razorpay-php/razorpay-php/Razorpay.php');
session_start();
use Razorpay\Api\Api;
$api = new Api($keyId, $keySecret);
$orderData = [
    'receipt'         => 3456,
    'amount'          => 1000 * 100,
    'currency'        => "INR",
    'payment_capture' => 1
];
$razorpayOrder = $api->order->create($orderData);
$razorpayOrderId = $razorpayOrder['id'];
$_SESSION['razorpay_order_id'] = $razorpayOrderId;
$displayAmount = $amount = $orderData['amount'];
if ($displayCurrency !== 'INR') {
    $url = "https://api.fixer.io/latest?symbols=$displayCurrency&base=INR";
    $exchange = json_decode(file_get_contents($url), true);

    $displayAmount = $exchange['rates']['INR'] * 1000/ 100;
}
$data = [
    "key"               => $keyId,
    "amount"            => 1000,
    "name"              => "rajesh",
    "description"       => "unwaste",
    "image"             => "",
    "prefill"           => [
    "name"              => "sathis",
    "email"             => "sathis@gamil.com",
    "contact"           => "9791823103",
    ],
    "notes"             => [
    "address"           => "tindivanam",
    "merchant_order_id" => "12312321",
    ],
    "theme"             => [
    "color"             => "#F37254"
    ],
    "order_id"          => $razorpayOrderId,
];

if ($displayCurrency !== 'INR')
{
    $data['display_currency']  = $displayCurrency;
    $data['display_amount']    = $displayAmount;
}

$json = json_encode($data);


require("checkout/manual.php");
?>
</div>
<?php include('include/footer.php');?>
Footer
© 2023 GitHub, Inc.
Footer navigation
Terms
Privacy
Security
Status
Docs
Contact GitHub
Pricing
API
Training
Blog
About
razorpay-integration-PHP/pay.php at main · Hrithik1122/razorpay-integration-PHP