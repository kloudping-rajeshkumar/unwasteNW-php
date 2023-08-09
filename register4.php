<?php 
$redirectUrl = "new_user.php";

$expiryTime = time() + (60 * 60 * 24);

?>
<!-- <script>
    var loc = localStorage.getItem('3eab60ec988c461f0cfc0e6ed6ed');
    var cache = JSON.parse(atob(loc));
    var orderIdss = cache.orderid;
    document.cookie = "orderId=" + orderIdss;
</script> -->
<?php
if ($_POST["servicetype"] == "Individual"){
    $amount = $_POST["total_amount"];
    $fname = $_POST["firstname"];
    $lname = $_POST["lname"];
    $email = $_POST["email"];
    if (isset($_POST["myCheck1"])){
        $myCheck1 = $_POST["myCheck1"];
        setcookie("myCheck1", $myCheck1, $expiryTime);
    }
    
    if (isset($_POST["myCheck"])){
        $myCheck = $_POST["myCheck"];
        setcookie("myCheck", $myCheck, $expiryTime);
    }
    $address = $_POST["address"];
    $pincode = $_POST["pincode"];

    setcookie("amount", $amount, $expiryTime);
    setcookie("fname", $fname, $expiryTime);
    setcookie("lname", $lname, $expiryTime);
    setcookie("email", $email, $expiryTime);
    setcookie("address", $address, $expiryTime);
    setcookie("pincode", $pincode, $expiryTime);
    // setcookie("orderId", $orderId, $expiryTime);
    header("Location: $redirectUrl");
}
elseif($_POST["servicetype"] == "Appartments"){
    $amount = $_POST["total_amount"];
    $fname = $_POST["fname"];
    $cname = $_POST["cname"];
    $dname = $_POST["dname"];
    $email = $_POST["email"];
    $number = $_POST["number"];
    if (isset($_POST["myCheck1"])){
        $myCheck1 = $_POST["myCheck1"];
        setcookie("myCheck1", $myCheck1, $expiryTime);
    }
    
    if (isset($_POST["myCheck"])){
        $myCheck = $_POST["myCheck"];
        setcookie("myCheck", $myCheck, $expiryTime);
    }
    $address = $_POST["address"];
    $pincode = $_POST["pincode"];

    setcookie("amount", $amount, $expiryTime);
    setcookie("fname", $fname, $expiryTime);
    setcookie("cname", $cname, $expiryTime);
    setcookie("dname", $dname, $expiryTime);
    setcookie("email", $email, $expiryTime);
    setcookie("number", $number, $expiryTime);
    setcookie("address", $address, $expiryTime);
    setcookie("pincode", $pincode, $expiryTime);
    // setcookie("orderId", $orderId, $expiryTime);
    header("Location: $redirectUrl");
}
elseif($_POST["servicetype"] == "Commercial"){
    $amount = $_POST["total_amount"];
    $fname = $_POST["fname"];
    $cname = $_POST["cname"];
    $dname = $_POST["dname"];
    $email = $_POST["email"];
    if (isset($_POST["myCheck1"])){
        $myCheck1 = $_POST["myCheck1"];
        setcookie("myCheck1", $myCheck1, $expiryTime);
    }
    
    if (isset($_POST["myCheck"])){
        $myCheck = $_POST["myCheck"];
        setcookie("myCheck", $myCheck, $expiryTime);
    }
    $address = $_POST["address"];
    $pincode = $_POST["pincode"];

    setcookie("amount", $amount, $expiryTime);
    setcookie("fname", $fname, $expiryTime);
    setcookie("cname", $cname, $expiryTime);
    setcookie("dname", $dname, $expiryTime);
    setcookie("email", $email, $expiryTime);
    setcookie("address", $address, $expiryTime);
    setcookie("pincode", $pincode, $expiryTime);
    // setcookie("orderId", $orderId, $expiryTime);
    header("Location: $redirectUrl");
}

?>