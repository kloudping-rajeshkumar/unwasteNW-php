<!DOCTYPE html>
<html lang="en">

<?php include 'head.php'; ?>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        var loc = localStorage.getItem('3eab60ec988c461f0cfc0e6ed6ed');

        if (loc == null) {
            // Redirect to another URL
            window.location.href = 'register.php';
        }
        });
</script>

<head>
    <style>
        .main-header-three {
            background: #04a9fb !important;
        }

        .form-copy {
            height: 63px;
            width: 100%;
            border: none;
            background-color: var(--wostin-extra);
            font-size: 14px;
            font-weight: 500;
            color: var(--wostin-gray);
            padding: 0 30px;
            outline: none;
        }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script>
        var loc = localStorage.getItem('3eab60ec988c461f0cfc0e6ed6ed');
        var cache = JSON.parse(atob(loc));
        $(document).ready(function () {
            
            $("#firstname").text(cache.firstname);
            $("#lastname").text(cache.lastname);
            $("#address").text(cache.address);
            $("#firstname1").text(cache.firstname);
            $("#lastname1").text(cache.lastname);
            $("#addres1s").text(cache.address);
            $("#firstname2").text(cache.firstname);
            $("#lastname2").text(cache.lastname);
            $("#pincode").text(cache.postCode);
            $("#amount").text(cache.amount);
        }); 
    </script>
</head>
<?php include 'preloader.php'; 
$currentDate = date('Y-m-d');
if (isset($_COOKIE['fname'])) {
    $fname = $_COOKIE['fname'];
    $pincode = $_COOKIE['pincode'];
    $address = $_COOKIE['address'];
}
if (isset($_COOKIE['lname'])) {
    $lname = $_COOKIE['lname'];
}
?>

<body>
    <div class="page-wrapper">
        <?php include 'header.php'; ?>

        <!--Page Header Start-->
        <!--Page Header End-->
        <!--Request A Pickup Top End-->

        <!--Request A Pickup Start-->
        <?php /* ?> <section class="project-details" style="text-align: center;padding-top: 160px;padding-bottom:140px;">
            <div class="container">
                <div class="project-details__top">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="project-details__title-box">
                                <div class="project-details__title-left">
                                    <h2>Service Agreement</h2>
                                </div>
                            </div>
                            <div class="project-details__img-box" style="padding-bottom: 0px;">
                                <img src="assets/images/service.jpg" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="project-details__content"
                        style="padding-top:40px; padding-left: 10px; padding-right: 10px; padding-bottom: 10px; border: 1px solid #e6e6e6; margin-top: 0px; border-radius:3px;">
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="project-details__content-left">
                                    <p class="project-details__content-text-1" style="text-align:left;">The following
                                        service agreement is entered in between:</p>
                                    <p class="project-details__content-text-1" style="text-align:left;"><b>1.
                                            UnWasteNetwork</b>, 19/33, Krishnaswamy Nagar, 50 Feet Road, Ramanthapuram,
                                        Coimbatore - 641045</p>
                                    <h3>and</h3>
                                    <p class="project-details__content-text-2" style="text-align:left;"><b>2. </b>
                                    <?php if (isset($_COOKIE['fname'])) {
                                                echo "$fname";
                                            } ?>&nbsp;
                                        <?php if (isset($_COOKIE['lname'])) {
                                                echo "$lname";
                                            } ?> <span
                                            style="font-weight:400;color:#878986;">from</span>
                                            <?php if (isset($_COOKIE['address'])) {
                                                echo "$address";
                                            } ?> - <?php if (isset($_COOKIE['pincode'])) {
                                                echo "$pincode";
                                            } ?> <span
                                            style="font-weight:400;color:#878986;">on</span> <?php echo "$currentDate" ?>
                                    </p>
                                    <p class="project-details__content-text-3" style="text-align:left;">UnWasteNetwork
                                        will provide waste pickup services. This services include</p>
                                    <p class="project-details__content-text-3" style="text-align:left;">
                                    <ul style="text-align:left;">
                                        <li>Supply of Bags for pickup of wastes</li>
                                        <li>Logistics services for pick up of waste from the premises : <span
                                                style="color:var(--wostin-base);">
                                                <?php if (isset($_COOKIE['fname'])) {
                                                        echo "$fname";
                                                    } ?>&nbsp;
                                                <?php if (isset($_COOKIE['lname'])) {
                                                echo "$lname";
                                            } ?>,
                                                <?php if (isset($_COOKIE['address'])) {
                                                echo "$address";
                                            } ?>
                                                <?php if (isset($_COOKIE['amount'])) {
                                                echo $amount/100;
                                            } ?>
                                            </span></li>
                                        <li>Only on weekdays as per the logistics calendar given or based on pick up
                                            request.</li>
                                    </ul>
                                    </p>
                                    <p class="project-details__content-text-2" style="text-align:left;">
                                        <span id="firstname2"></span>&nbsp;
                                        <span id="lastname2"></span> <span
                                            style="font-weight:400;color:#878986;">responsibilities will comprise
                                            of</span>
                                    </p>
                                    <p class="project-details__content-text-3" style="text-align:left;">
                                    <ul style="text-align:left;">
                                        <li>Provide dry waste by collecting in the Blue bag provided.</li>
                                        <li>Provide loading support to the vehicle driver/staff to load the Blue Bags to
                                            the vehicle</li>
                                        <li>Prepay pickup cost with applicable taxes through Bank Transfer.</li>
                                        <li>Follow the Standard Operating Procedure on Dry waste segregation methods.
                                        </li>
                                    </ul>
                                    </p>
                                    <p class="project-details__content-text-3" style="text-align:left;"><b>></b> Quality
                                        check of the collected waste will be performed and informed in case of mixing of
                                        waste.</p>
                                    <p class="project-details__content-text-3" style="text-align:left;"><b>></b> This
                                        agreement can be terminated by either party on service of a month notice or on
                                        mutual agreement, once all dues from both sides have settled.</p>
                                    <p class="project-details__content-text-3" style="text-align:left;"><b>></b> This
                                        agreement is deemed to be extended unless any request for changes.</p>
                                    <br><br>
                                    <div class="request-a-pickup__tab-content-btn-box" style="text-align:center;">
                                        <button id="rzp-button1" type="submit"
                                            class="thm-btn request-a-pickup__tab-content-btn">Pay Now</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> <?php */ ?>
        <!--Request A Pickup End-->
        <section id="appartment" class="project-details" style="text-align: center;padding-top: 160px;padding-bottom:140px;">
            <div class="container">
                <div class="project-details__top">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="project-details__title-box">
                                <div class="project-details__title-left">
                                    <h2>Service Agreement</h2>
                                </div>
                            </div>
                            <div class="project-details__img-box" style="padding-bottom: 0px;">
                                <img src="assets/images/service.jpg" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="project-details__content"
                        style="padding-top:40px; padding-left: 10px; padding-right: 10px; padding-bottom: 10px; border: 1px solid #e6e6e6; margin-top: 0px; border-radius:3px;">
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="project-details__content-left">
                                    <p class="project-details__content-text-1" style="text-align:left;">The following service agreement is entered into between : </p>
                                    <p class="project-details__content-text-1" style="text-align:left;"><b>1.	ND Logistics Private Limited, </b>19/33, Krishnaswamy Nagar, 50 Feet Road,Ramanathapuram, Coimbatore 641 045.<br> GST No. 33AAGCN5409B1ZX,
                                    PAN No. AAGCN5409B.</p>
                                    <h3>and</h3>
                                    <p class="project-details__content-text-2" style="text-align:left;"><b>2. </b>
                                    <?php if (isset($_COOKIE['fname'])) {
                                                echo "$fname";
                                            } ?>&nbsp;
                                        <?php if (isset($_COOKIE['lname'])) {
                                                echo "$lname";
                                            } ?> <span
                                            style="font-weight:400;color:#878986;">from</span>
                                            <?php if (isset($_COOKIE['address'])) {
                                                echo "$address";
                                            } ?> - <?php if (isset($_COOKIE['pincode'])) {
                                                echo "$pincode";
                                            } ?> <span
                                            style="font-weight:400;color:#878986;">,Coimbatore.<br>on the 2023 of year.</span>
                                    </p>
                                    <p class="project-details__content-text-3" style="text-align:left;"><b>ND Logistics Private Limited (NDL)</b> will provide waste management service within the framework of</p>
                                    <p class="project-details__content-text-3" style="text-align:left;">
                                    <ul style="text-align:left;">
                                        <li>Provide logistics services to pick up segregated waste from Monday through Saturday. </li>
                                        <li>Only waste packed in bins(organic) and bags(dry) will be transported.</li>
                                        <li>ND Logistics Private Limited is committed, empanelled and authorised to handle ONLY SEGREGATED WASTE. In case of mixed waste being collected and kept for pickup, NDL will send quality reports on the matter, for first 3 instances, and if no action is taken by the community to correct the same, pickup of waste will be stopped.</li>
                                        <li>Logistics calendar will be shared with community and any unexpected break in service will be communicated. </li>
                                        <li>The pickup timing will be communicated by email, before the day of starting services. Timings may vary based on the traffic situation in the city.  Also, any change in vehicle route will also be communicated.</li>
                                    </ul>
                                    </p>
                                    <p class="project-details__content-text-2" style="text-align:left;">
										<b style="color:black"><?php if (isset($_COOKIE['fname'])) {
                                                echo "$fname";
                                            } ?>'s responsibilities will comprise of</b>
                                    </p>
									
                                    <p class="project-details__content-text-3" style="text-align:left;">
                                    <ul style="text-align:left;">
                                        <li> Ensuring source segregation at all waste generation points. </li>
                                        <li>Provide required infrastructure to facilitate segregation (green bin, red bin and blue bag) and collection (pushcarts, bins, brush, bags, gloves and mask) </li>
                                        <li>Ensure collection of waste, using collection kit, as per the guidelines given by NDL. This will avoid mixed waste being collected. </li>
                                        <li>Keep waste ready by 10 am, packed in bins(organic)(to be kept covered) and bags(dry waste)(packed and tied), at the pickup point, as close to the gate as possible. All Waste will be packed in bins and bags as required. Pickup point should be within the premises. </li>
                                        <li>Loading help to be given, to load waste, in the vehicle. </li>
                                        <li>Waste that is generated and segregated by residents must not be disposed outside the premises. </li>
                                    </ul>
                                    </p>
									<br>
                                    <p class="project-details__content-text-3" style="text-align:left;"><b>Waste Pickup Clause</b><br><b>Organic waste</b> - Food, Vegetable peels, Fruits & Flowers. Such waste has to be stored in Green Bins.<br>
									<b>Dry waste</b> - plastic, papers, wood, metal waste packed in Blue bags. Bottles has to be kept separately and given.<br>
									<b>Sanitary waste</b> - is unhygenic and bio hazardous that cannot be recycled such as Sanitary Napkins, Diapers, Hair, Blades, Injection and sharp items. These wastes has to be properly wrapped and marked X, kept  in Red bins.<br>
									The above mentioned waste should not be mixed with one another and if found mixed will not be picked.<br>
									<br><b>Financials and other terms <b><br></p>
									<br>
                                    <p class="project-details__content-text-3" style="text-align:left;"><b>></b> 1.Pickup charges  : Rs.100/- per house per month excluding GST 18%, payable as monthly advance basis. 
									i.e. Rs.100 X  100 houses  = Rs.10,000/- + GST.
									</p>
                                    <p class="project-details__content-text-3" style="text-align:left;"><b>></b>2.In case of non-receipt of payment within the due date (5th of the every month), the pickup services will be stopped.</p>
                                    <p class="project-details__content-text-3" style="text-align:left;"><b>></b> 3. The agreement can be terminated by either party on service of ONE month’s notice or on mutual agreement, once all dues from both sides have settled. This agreement is deemed to be extended unless any request for changes</p>
                                    <br><br>
									<p style="display: flex;justify-content: space-between;"><b>For ND Logistics Private Limited<br>Authorised Signatory</b><b><?php if (isset($_COOKIE['fname'])) {
                                                echo "$fname";
                                            } ?><br>Authorised Signatory</b></p><br>
                                    <div class="request-a-pickup__tab-content-btn-box" style="text-align:center;">
                                        <button id="rzp-button1" type="submit"
                                            class="thm-btn request-a-pickup__tab-content-btn">Pay Now</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
		<section id="commercial" class="project-details" style="text-align: center;padding-top: 160px;padding-bottom:140px;">
            <div class="container">
                <div class="project-details__top">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="project-details__title-box">
                                <div class="project-details__title-left">
                                    <h2>Service Agreement</h2>
                                </div>
                            </div>
                            <div class="project-details__img-box" style="padding-bottom: 0px;">
                                <img src="assets/images/service.jpg" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="project-details__content"
                        style="padding-top:40px; padding-left: 10px; padding-right: 10px; padding-bottom: 10px; border: 1px solid #e6e6e6; margin-top: 0px; border-radius:3px;">
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="project-details__content-left">
                                    <p class="project-details__content-text-1" style="text-align:left;">The following service agreement is entered into between : </p>
                                    <p class="project-details__content-text-1" style="text-align:left;"><b>1.	ND Logistics Private Limited, </b>19/33, Krishnaswamy Nagar, 50 Feet Road,Ramanathapuram, Coimbatore 641 045.<br> GST No. 33AAGCN5409B1ZX,
                                    PAN No. AAGCN5409B.</p>
                                    <h3>and</h3>
                                    <p class="project-details__content-text-2" style="text-align:left;"><b>2. </b>
                                    <?php if (isset($_COOKIE['fname'])) {
                                                echo "$fname";
                                            } ?>&nbsp;
                                        <?php if (isset($_COOKIE['lname'])) {
                                                echo "$lname";
                                            } ?> <span
                                            style="font-weight:400;color:#878986;">from</span>
                                            <?php if (isset($_COOKIE['address'])) {
                                                echo "$address";
                                            } ?> <span
                                            style="font-weight:400;color:#878986;">,Coimbatore - <?php if (isset($_COOKIE['pincode'])) {
                                                echo "$pincode";
                                            } ?>. GST No. XXXXXXXXXXXX.<br>on the 2023 of year.</span>
                                    </p>
                                    <p class="project-details__content-text-3" style="text-align:left;"><b>ND Logistics Private Limited (NDL)</b> will provide waste management service within the framework of</p>
                                    <p class="project-details__content-text-3" style="text-align:left;">
                                    <ul style="text-align:left;font-weight: 400;">
                                        <li>Provide logistics services to pick up segregated waste from Monday through Saturday. </li>
                                        <li>Only waste packed in bins(organic) and bags(dry) will be transported.</li>
                                        <li>ND Logistics Private Limited is committed, empanelled and authorised to handle ONLY SEGREGATED WASTE. In case of mixed waste being collected and kept for pickup, NDL will send quality reports on the matter, for first 3 instances, and if no action is taken by the community to correct the same, pickup of waste will be stopped.</li>
                                        <li>Logistics calendar will be shared with community and any unexpected break in service will be communicated. </li>
                                        <li>The pickup timing will be communicated by email, before the day of starting services. Timings may vary based on the traffic situation in the city.  Also, any change in vehicle route will also be communicated.</li>
                                    </ul>
                                    </p>
                                    <p class="project-details__content-text-2" style="text-align:left;">
										<b style="color:black"><?php if (isset($_COOKIE['fname'])) {
                                                echo "$fname";
                                            } ?>'s responsibilities will comprise of</b>
                                    </p>
									
                                    <p class="project-details__content-text-3" style="text-align:left;">
                                    <ul style="text-align:left;font-weight: 400;">
                                        <li>Ensuring source segregation at all waste generation points. </li>
                                        <li>Provide required infrastructure to facilitate segregation (green bin, red bin and blue bag) and collection (pushcarts, bins, brush, bags, gloves and mask) </li>
                                        <li>Ensure collection of waste, using collection kit, as per the guidelines given by NDL. This will avoid mixed waste being collected. </li>
                                        <li>Keep waste ready by 10 am, packed in bins(organic)(to be kept covered) and bags(dry waste)(packed and tied), at the pickup point, as close to the gate as possible. All Waste will be packed in bins and bags as required. Pickup point should be within the premises. </li>
                                        <li>Loading help to be given, to load waste, in the vehicle. </li>
                                        <li>Waste that is generated and segregated by residents must not be disposed outside the premises. </li>
                                    </ul>
                                    </p>
									<br>
                                    <p class="project-details__content-text-3" style="text-align:left;"><b>Waste Pickup Clause</b><br><b>Organic waste</b> - Food, Vegetable peels, Fruits & Flowers. Such waste has to be stored in Green Bins.<br>
									<b>Dry waste</b> - plastic, papers, wood, metal waste packed in Blue bags. Bottles has to be kept separately and given.<br>
									The above mentioned waste should not be mixed with one another and if found mixed will not be picked.<br>
									<br><b>Financials and other terms <b><br></p>
									<br>
                                    <p class="project-details__content-text-3" style="text-align:left;"><b>></b>1.Pickup charges  : Organic waste(60 ltr green bin) – Rs.100/- per bin plus GST. Dry waste (100 ltr bag) - Rs.50/- per bag plus GST.  
									</p>
                                    <p class="project-details__content-text-3" style="text-align:left;"><b>></b>2.Approximate monthly consumption to be maintained as advance, from which daily consumption will be reduced and invoice sent.</p>
                                    <p class="project-details__content-text-3" style="text-align:left;"><b>></b>3.The agreement can be terminated by either party on service of ONE month’s notice or on mutual agreement, once all dues from both sides have settled. This agreement is deemed to be extended unless any request for changes.</p>
                                    <br><br>
									<p style="display: flex;justify-content: space-between;"><b>For ND Logistics Private Limited<br>Authorised Signatory</b><b>For <?php if (isset($_COOKIE['fname'])) {
                                                echo "$fname";
                                            } ?><br>Authorised Signatory</b></p><br>
                                    <div class="request-a-pickup__tab-content-btn-box" style="text-align:center;">
                                        <button id="rzp-button2" type="submit"
                                            class="thm-btn request-a-pickup__tab-content-btn">Pay Now</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <?php include 'footer.php'; ?>


    </div><!-- /.page-wrapper -->


</body>

<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
<form name='razorpayform' action="./verify.php" method="POST">
    <input type="hidden" name="razorpay_payment_id" id="razorpay_payment_id">
    <input type="hidden" name="razorpay_signature" id="razorpay_signature">
</form>
<script>
//     var responseData = ''
//     $.ajax({
//    url: "https://api.unwastenetwork.com/api/authentication/login",
//     // url: "http://localhost:7071/api/authentication/login",
//     type: "POST",
//     data: JSON.stringify({
//         username: "admin@unwastenetwork.in",
//         password: "admin@123"
//     }),
//     contentType: "application/json; charset=utf-8",
//     dataType: "json",
//     success: function (response) {
//         // 'response' contains the data returned from the server
//         responseData = response.token;

//         // You can now use the 'responseData' variable as needed
//         // console.log("Response Data:", responseData);
//     },
//     error: function (error) {
//         // Handle error cases here
//         console.error("Error:", error);
//     }
//     });


    var options = <?php echo $json ?>;
    options.handler = function (response) {
        var loc = localStorage.getItem('3eab60ec988c461f0cfc0e6ed6ed');

        var cache = JSON.parse(atob(loc));
        console.log(cache);
        cache.pid = response.razorpay_payment_id;
        // debugger;
        $.ajax({
        //  url: "https://api.unwastenetwork.com/api/Customer/Add",
            url: "http://localhost/website/api.php",
            type: "POST",
            // beforeSend: function (request) {
            //     request.setRequestHeader("Authorization", "Bearer "+responseData);
            // },
            data: JSON.stringify(cache),
            contentType: "application/json; charset=utf-8",
            dataType: "json",
            success: function () {
              
                // alert("Data: " + cache + "\nStatus: ");
                
            }
        });
        document.getElementById('razorpay_payment_id').value = response.razorpay_payment_id;
        document.getElementById('razorpay_signature').value = response.razorpay_signature;
        document.razorpayform.submit();

    };
    options.theme.image_padding = false;
    options.modal = {
        ondismiss: function () {
            console.log("This code runs when the popup is closed");
        },
        escape: true,
        backdropclose: false
    };
    var rzp = new Razorpay(options);
    document.getElementById('rzp-button1').onclick = function (e) {
        rzp.open();
        e.preventDefault();
    }
    document.getElementById('rzp-button2').onclick = function (e) {
        rzp.open();
        e.preventDefault();
    }
</script>
<script>
    const error = document.getElementById("appartment");
    const error1 = document.getElementById("commercial");
    if(cache.servicetype == "Appartment"){
        error.style.display = 'block';
        error1.style.display = 'none';
    }else{
        error.style.display = 'none';
        error1.style.display = 'block';
    }
</script>
<!-- <script>
    var loc = localStorage.getItem('3eab60ec988c461f0cfc0e6ed6ed');
    var cache = JSON.parse(atob(loc));
        $.ajax({
        url: "./register4.php",
        type: "POST",
        data: JSON.stringify(cache),
        contentType: "application/json; charset=utf-8",
        dataType: "json",
        success: function () {
            // alert("Data: " + cache + "\nStatus: ");
        }
    });
</script> -->

<?php include 'end.php'; ?>