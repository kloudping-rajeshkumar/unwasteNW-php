<title>Razorpay Payment Gateway Integration in PHP</title>

<?php
require('config.php');
require('razorpay-php/Razorpay.php');
session_start();
use Razorpay\Api\Api;
$expiryTime = time() + (60 * 60 * 24);
$orderId = substr(str_shuffle('0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ'), 0, 10);
if ($_POST["servicetype"] == "Individual"){
    $amount = $_POST["total_amount"];
    $fname = $_POST["firstname"];
    $lname = $_POST["lname"];
    $email = $_POST["email"];
    $myCheck1 = $_POST["myCheck1"];
    $myCheck = $_POST["myCheck"];
    $address = $_POST["address"];
    $pincode = $_POST["pincode"];

    setcookie("amount", $amount, $expiryTime);
    setcookie("fname", $fname, $expiryTime);
    setcookie("lname", $lname, $expiryTime);
    setcookie("email", $email, $expiryTime);
    setcookie("myCheck1", $myCheck1, $expiryTime);
    setcookie("myCheck", $myCheck, $expiryTime);
    setcookie("address", $address, $expiryTime);
    setcookie("pincode", $pincode, $expiryTime);
    setcookie("orderId", $orderId, $expiryTime);
}
elseif($_POST["servicetype"] == "Appartments"){
    $amount = $_POST["total_amount"];
    $fname = $_POST["fname"];
    $cname = $_POST["cname"];
    $dname = $_POST["dname"];
    $email = $_POST["email"];
    $number = $_POST["number"];
    $myCheck1 = $_POST["myCheck1"];
    $myCheck = $_POST["myCheck"];
    $address = $_POST["address"];
    $pincode = $_POST["pincode"];

    setcookie("amount", $amount, $expiryTime);
    setcookie("fname", $fname, $expiryTime);
    setcookie("cname", $cname, $expiryTime);
    setcookie("dname", $dname, $expiryTime);
    setcookie("email", $email, $expiryTime);
    setcookie("number", $number, $expiryTime);
    setcookie("myCheck1", $myCheck1, $expiryTime);
    setcookie("myCheck", $myCheck, $expiryTime);
    setcookie("address", $address, $expiryTime);
    setcookie("pincode", $pincode, $expiryTime);
    setcookie("orderId", $orderId, $expiryTime);
}
elseif($_POST["servicetype"] == "Commercial"){
    $amount = $_POST["total_amount"];
    $fname = $_POST["fname"];
    $cname = $_POST["cname"];
    $dname = $_POST["dname"];
    $email = $_POST["email"];
    $myCheck1 = $_POST["myCheck1"];
    $myCheck = $_POST["myCheck"];
    $address = $_POST["address"];
    $pincode = $_POST["pincode"];

    setcookie("amount", $amount, $expiryTime);
    setcookie("fname", $fname, $expiryTime);
    setcookie("cname", $cname, $expiryTime);
    setcookie("dname", $dname, $expiryTime);
    setcookie("email", $email, $expiryTime);
    setcookie("myCheck1", $myCheck1, $expiryTime);
    setcookie("myCheck", $myCheck, $expiryTime);
    setcookie("address", $address, $expiryTime);
    setcookie("pincode", $pincode, $expiryTime);
    setcookie("orderId", $orderId, $expiryTime);
}


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
        "contact" => "",
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