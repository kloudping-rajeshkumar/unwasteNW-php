<!DOCTYPE html>
<?php
$test = "Test";
if (isset($_POST['login'])) {
    $username = "YBUCKET";
    $hash = "a9510ebc5dXX";
    $test = "1";
    $entity = "1201159543060917386";
    $temp = "1207161729866691748";
    $name = $_POST['name'];
    $sender = "OTPBLK"; // This is who the message appears to be from.
    $numbers = $_POST['phone']; // A single number or a comma-seperated list of numbers
    $otp = mt_rand(100000, 999999);
    $pass = $otp;
    $salt = substr(base_convert(sha1(uniqid(mt_rand())), 16, 36), 0, 14);
    $hashed = crypt($pass, $salt);
    setcookie("otp", $hashed);
    $message = "Dear Customer, Your OTP is " . $otp . " Please do not share this OTP. Regards";
    $message = urlencode($message);

    $URL = "http://sms.bulkssms.com/submitsms.jsp?" . "user=" . $username . "&key=" . $hash . "&mobile=" . $numbers . "&message=" . $message . "&senderid=" . $sender . "&accusage=" . $test . "&entityid=" . $entity . "&tempid=" . $temp;

    $ch = curl_init($URL);
    curl_setopt($ch, CURLOPT_HEADER, 0);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    $output = curl_exec($ch);
    echo 'alert("OTP sent successfully");';
    curl_close($ch);
}

// print_r($output);
?>

<html lang="en">
<?php include 'head.php'; ?>
<style>
    .main-header-three {
        background: #04a9fb !important;
    }

    .error {
        color: red;
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
</head>

<?php include 'preloader.php'; ?>
<div class="page-wrapper">
    <?php include 'header.php'; ?>

    <!--Page Header Start-->
    <!--Page Header End-->

    <!--Request A Pickup Top Start-->
    <section class="request-a-pickup-top" style="text-align: center;padding-top: 160px;">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="request-a-pickup-top__inner">
                        <h2 class="request-a-pickup-top__title">Interested in the Service?</h2>
                        <p class="request-a-pickup-top__text">Register in the below form and proceed</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Request A Pickup Top End-->

    <!--Request A Pickup Start-->

    <section class="request-a-pickup">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-lg-3">

                </div>
                <div class="col-xl-6 col-lg-6">
                    <div class="contact-one__right">
                        <form method="post" action="register.php" class="contact-one__form contact-form-validated"
                            novalidate="novalidate">
                            <div class="row">
                                <div class="col-xl-12 col-lg-12 col-md-12">
                                    <div class="contact-one__form-input-box">
                                        <input type="text" id="name" placeholder="Your name" name="name" required
                                            style="text-align:center;" required title="Please enter your name">
                                    </div>
                                </div>

                                <div class="col-xl-12 col-lg-12 col-md-12">
                                    <div class="contact-one__form-input-box">
                                        <input type="text" id="phone" placeholder="Phone number" name="phone" required
                                            style="text-align:center;" required title="Please enter your phone">
                                    </div>

                                </div>
                                <div class="col-xl-12">

                                    <div class="request-a-pickup__tab-content-btn-box" style="text-align:center;">
                                        <button id="getotp" name="login"
                                            class="thm-btn request-a-pickup__tab-content-btn" onclick="myFunction()">Get
                                            OTP </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Request A Pickup End-->

    <!--Site Footer Start-->
    <footer class="site-footer">
        <div class="site-footer-bg" style="background-image: url(assets/images/backgrounds/site-footer-bg.jpg);">
        </div>
        <div class="site-footer__top">
            <div class="container">
                <div class="site-footer__top-inner">
                    <div class="site-footer__top-logo">
                        <a href="index.html"><img src="assets/images/resources/footer-logo.png" alt=""></a>
                    </div>
                    <div class="site-footer__top-right">
                        <p class="site-footer__top-right-text">Waste Disposal Management & Pickup Services</p>
                        <div class="site-footer__social">
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-facebook"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                            <a href="#"><i class="fab fa-pinterest-p"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="site-footer__middle">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                        <div class="footer-widget__column footer-widget__about">
                            <h3 class="footer-widget__title">About</h3>
                            <div class="footer-widget__about-text-box">
                                <p class="footer-widget__about-text">Lorem ipsum dolor sited ame etur adi pisicing
                                    elit tempor labore.</p>
                            </div>
                            <form class="footer-widget__newsletter-form">
                                <div class="footer-widget__newsletter-input-box">
                                    <input type="email" placeholder="Email Address" name="email">
                                    <button type="submit" class="footer-widget__newsletter-btn"><i
                                            class="far fa-paper-plane"></i></button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                        <div class="footer-widget__column footer-widget__links clearfix">
                            <h3 class="footer-widget__title">Links</h3>
                            <ul class="footer-widget__links-list list-unstyled clearfix">
                                <li><a href="about.html">About</a></li>
                                <li><a href="request-pickup.html">Request Pickup</a></li>
                                <li><a href="about.html">Management</a></li>
                                <li><a href="services.html">Start Service</a></li>
                                <li><a href="contact.html">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="300ms">
                        <div class="footer-widget__column footer-widget__services clearfix">
                            <h3 class="footer-widget__title">Services</h3>
                            <ul class="footer-widget__services-list list-unstyled clearfix">
                                <li><a href="dumpster-rental.html">Dumpster Rentals</a></li>
                                <li><a href="about.html">Bulk Trash Pickup</a></li>
                                <li><a href="about.html">Waste Removal</a></li>
                                <li><a href="zero-waste.html">Zero Waste</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="400ms">
                        <div class="footer-widget__column footer-widget__contact clearfix">
                            <h3 class="footer-widget__title">Contact</h3>
                            <p class="footer-widget__contact-text">880 Broklyn Road Street, New Town DC 5002, New
                                York. USA</p>
                            <div class="footer-widget__contact-info">
                                <div class="footer-widget__contact-icon">
                                    <span class="icon-contact"></span>
                                </div>
                                <div class="footer-widget__contact-content">
                                    <p class="footer-widget__contact-mail-phone">
                                        <a href="mailto:needhelp@wostin.com"
                                            class="footer-widget__contact-mail">needhelp@wostin.com</a>
                                        <a href="tel:2463330088" class="footer-widget__contact-phone">+ 1- (246)
                                            333-0088</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="site-footer__bottom">
            <div class="site-footer-bottom-shape"
                style="background-image: url(assets/images/shapes/site-footer-bottom-shape.png);"></div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="site-footer__bottom-inner">
                            <p class="site-footer__bottom-text">© Copyright 2022 by <a href="#">Layerdrops.com</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--Site Footer End-->


</div><!-- /.page-wrapper -->


<div class="mobile-nav__wrapper">
    <div class="mobile-nav__overlay mobile-nav__toggler"></div>
    <!-- /.mobile-nav__overlay -->
    <div class="mobile-nav__content">
        <span class="mobile-nav__close mobile-nav__toggler"><i class="fa fa-times"></i></span>

        <div class="logo-box">
            <a href="index.html" aria-label="logo image"><img src="assets/images/resources/footer-logo.png" width="155"
                    alt="" /></a>
        </div>
        <!-- /.logo-box -->
        <div class="mobile-nav__container"></div>
        <!-- /.mobile-nav__container -->

        <ul class="mobile-nav__contact list-unstyled">
            <li>
                <i class="fa fa-envelope"></i>
                <a href="mailto:needhelp@packageName__.com">needhelp@wostin.com</a>
            </li>
            <li>
                <i class="fa fa-phone-alt"></i>
                <a href="tel:666-888-0000">666 888 0000</a>
            </li>
        </ul><!-- /.mobile-nav__contact -->
        <div class="mobile-nav__top">
            <div class="mobile-nav__social">
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-facebook-square"></a>
                <a href="#" class="fab fa-pinterest-p"></a>
                <a href="#" class="fab fa-instagram"></a>
            </div><!-- /.mobile-nav__social -->
        </div><!-- /.mobile-nav__top -->



    </div>
    <!-- /.mobile-nav__content -->
</div>
<!-- /.mobile-nav__wrapper -->

<div class="search-popup">
    <div class="search-popup__overlay search-toggler"></div>
    <!-- /.search-popup__overlay -->
    <div class="search-popup__content">
        <form action="#">
            <label for="search" class="sr-only">search here</label><!-- /.sr-only -->
            <input type="text" id="search" placeholder="Search Here..." />
            <button type="submit" aria-label="search submit" class="thm-btn">
                <i class="icon-magnifying-glass"></i>
            </button>
        </form>
    </div>
    <!-- /.search-popup__content -->
</div>
<!-- /.search-popup -->

<a href="#" data-target="html" class="scroll-to-target scroll-to-top"><i class="fa fa-angle-up"></i></a>


<script src="assets/vendors/jquery/jquery-3.6.0.min.js"></script>
<script src="assets/vendors/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendors/jarallax/jarallax.min.js"></script>
<script src="assets/vendors/jquery-ajaxchimp/jquery.ajaxchimp.min.js"></script>
<script src="assets/vendors/jquery-appear/jquery.appear.min.js"></script>
<script src="assets/vendors/jquery-circle-progress/jquery.circle-progress.min.js"></script>
<script src="assets/vendors/jquery-magnific-popup/jquery.magnific-popup.min.js"></script>
<script src="assets/vendors/jquery-validate/jquery.validate.min.js"></script>
<script src="assets/vendors/nouislider/nouislider.min.js"></script>
<script src="assets/vendors/odometer/odometer.min.js"></script>
<script src="assets/vendors/swiper/swiper.min.js"></script>
<script src="assets/vendors/tiny-slider/tiny-slider.min.js"></script>
<script src="assets/vendors/wnumb/wNumb.min.js"></script>
<script src="assets/vendors/wow/wow.js"></script>
<script src="assets/vendors/isotope/isotope.js"></script>
<script src="assets/vendors/countdown/countdown.min.js"></script>
<script src="assets/vendors/owl-carousel/owl.carousel.min.js"></script>
<script src="assets/vendors/bxslider/jquery.bxslider.min.js"></script>
<script src="assets/vendors/bootstrap-select/js/bootstrap-select.min.js"></script>
<script src="assets/vendors/vegas/vegas.min.js"></script>
<script src="assets/vendors/jquery-ui/jquery-ui.js"></script>
<script src="assets/vendors/timepicker/timePicker.js"></script>




<!-- template js -->
<script src="assets/js/wostin.js"></script>
</body>
<script src="https://cdn.jsdelivr.net/npm/js-cookie@2/src/js.cookie.min.js"></script>
<script>
    function myFunction() {
        var username = document.getElementById('name').value;
        var passowrd = document.getElementById('phone').value;

        if (!username == "" && !passowrd == '') {
            location.replace("register1.php")
        } else {

            return false;
        }
    }
    // function myFunction() {
    //     location.replace("register1.php")
    // }
</script>

<!-- <script>
    $(document).ready(function () {
         localStorage.removeItem('userdata');
        $("#getotp").click(function () {
            debugger;
            var model=  {
                    name:$('#name').val(),
                    phone:$('#phone').val(),
                    otp:"123456"
                };
            if(model.name!='' && model.phone!='')
            {
                
                let encoded = window.btoa(JSON.stringify(model));    
                
                localStorage.setItem('userdata',encoded);
                
                window.location.href = "register1.php";
            }
            else if(localStorage.name=="false" && filename != 'register.php')
            {
                window.location.href = "register.php";
            }  
        });
    });
    

</script> -->


</html>