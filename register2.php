<!DOCTYPE html>
<html lang="en">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

</head>
<?php include 'head.php';?>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        var loc = localStorage.getItem('3eab60ec988c461f0cfc0e6ed6ed');

        if (loc == null) {
            // Redirect to another URL
            window.location.href = 'register.php';
        }
        });
</script>

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
            <div class="request-a-pickup__tab-box tabs-box">
                <ul class="tab-buttons clearfix list-unstyled" id="servicetype">
                    <li data-tab="#single" data-type="Single" id="servicetype1" class="tab-btn active-btn ">
                        <span>Individual</span>
                    </li>
                    <li data-tab="#appartment" data-type="Appartment" id="servicetype2" class="tab-btn ">
                        <span>Appartments</span>
                    </li>
                    <li data-tab="#commercial" data-type="Commercial" id="servicetype3" class="tab-btn ">
                        <span>Commercial</span>
                    </li>
                </ul>
                <div class="tabs-content">
                    <!--tab-->
                    <div class="tab active-tab" id="single">

                        <div class="request-a-pickup__tab-content">
                            <div class="request-a-pickup__tab-content-form-box">
                                <form class="request-a-pickup__tab-content-form" method="post" action="register4.php">
                                    <div class="row">
                                        <p class="request-a-pickup__tab-content-text-box" style="padding-bottom:10px;">
                                            New Users can fill in the form and register for the service.</p>
                                        <div class="col-xl-6">
                                            <div class="request-a-pickup__tab-content-form-left">
                                                <div class="row">
                                                    <div class="col-xl-6">
                                                        <div class="request-a-pickup__tab-content-input-box">
                                                            <input id="firstname_single" type="text"
                                                                placeholder="First Name*" name="firstname" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-6">
                                                        <div class="request-a-pickup__tab-content-input-box">
                                                            <input id="lastname_single" type="text"
                                                                placeholder="Last Name*" name="lname" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-12">
                                                        <div class="request-a-pickup__tab-content-input-box">
                                                            <input id="emailAddress_single" type="email"
                                                                placeholder="Email Address*" name="email" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-12">
                                                        <div class="request-a-pickup__tab-content-input-box">
                                                            <input id="mobileNumber_single" type="text"
                                                                placeholder="Secondary Phone No*" maxlength="10" minlength="10" name="number" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-12">
                                                        <div class="request-a-pickup__tab-content-size-box">
                                                            <label id="message1">Select the categories of waste to be handled in your
                                                                service</label>
                                                            <ul
                                                                class="list-unstyled request-a-pickup__tab-content-size-list ">

                                                                <li>
                                                                    <input type="checkbox" name="myCheck" value="wet"
                                                                        id="option_5" class="checked">
                                                                    <label for="option_5"><span></span>Wet</label>
                                                                </li>
                                                                <li>
                                                                    <input type="checkbox" name="myCheck1" value="dry"
                                                                        id="option_6" class="checked">
                                                                    <label for="option_6"><span></span>Dry</label>
                                                                </li>
                                                                <!-- <label id="message" style="padding-left:10px;color:"></label> -->
                                                                <!-- <div id="demo"></div> -->
                                                            </ul>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-6">
                                            <div class="request-a-pickup__tab-content-form-right">
                                                <div class="row">
                                                    <div class="col-xl-12">
                                                        <div class="request-a-pickup__tab-content-input-box request-a-pickup__tab-content-brief-box"
                                                            style="height: 156px;">
                                                            <textarea id="address_single" placeholder="Full Address"
                                                                name="address" required></textarea>
                                                        </div>
                                                    </div>

                                                    <div class="col-xl-12">
                                                        <div class="request-a-pickup__tab-content-input-box">
                                                            <input id="postCode_single" type="text" maxlength="6" minlength="6"
                                                                placeholder="Post Code*" name="pincode" required>
                                                        </div>
                                                    </div>
                                                    <!-- <div class="col-xl-12">
                                                        <div class="request-a-pickup__tab-content-input-box">
                                                            <p id="amount_single"></p>
                                                        </div>
                                                    </div> -->
                                                    <!-- <div class="col-xl-12"
                                                        style="margin-top: -31px;margin-bottom: 20px;">

                                                        <div style="text-align:right;">
                                                            <button type="button"
                                                                class="thm-btn request-a-pickup__tab-content-btn" style="padding: 0px;padding-left: 3px;padding-right: 3px;
                                                                font-weight: 300; font-size: 13px;"><span
                                                                    class="icon-placeholder"></span> Get
                                                                Location</button>
                                                        </div>
                                                    </div> -->

                                                    <div class="request-a-pickup__tab-content-extra">
                                                        <ul
                                                            class="list-unstyled request-a-pickup__tab-content-extra-list">
                                                            <li>
                                                                <input type="checkbox" name="declare"
                                                                    id="extra_weight_2" required>
                                                                <label for="extra_weight_2"><span></span>I here by
                                                                    declare all the details are valid, and wish to
                                                                    proceed.</label>
                                                            </li>
                                                            <li style="text-align: right;">
                                                                <label id="check2" for="extra_weight_2" style="font-size: 28px;color: #0076a1;font-weight: bold;"><span></span>Total : ₹0/-<br><span style="font-weight: 600;font-size: 14px;color: #7c7c7c;">Inclusive of 18% GST</span></label>
                                                            </li>
                                                            <input type="hidden" id="total_amount2" name="total_amount" value="0">
                                                            <input type="hidden" name="servicetype" value="Individual">
                                                        </ul>
                                                    </div>
                                                    <div class="col-xl-12">

                                                        <div class="request-a-pickup__tab-content-btn-box"
                                                            style="text-align:right;">
                                                            <button type="submit" id="btn-proceed"
                                                                class="thm-btn request-a-pickup__tab-content-btn"
                                                                onclick="Postdata()">Proceed ></button>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>

                    </div>
                    <!--tab-->
                    <div class="tab" id="appartment">

                        <div class="request-a-pickup__tab-content">
                            <div class="request-a-pickup__tab-content-form-box">
                                <form class="request-a-pickup__tab-content-form" method="post" action="register4.php">
                                    <div class="row">
                                        <p class="request-a-pickup__tab-content-text-box" style="padding-bottom:10px;">
                                            New Users can fill in the form and register for the service.</p>
                                        <div class="col-xl-6">
                                            <div class="request-a-pickup__tab-content-form-left">
                                                <div class="row">
                                                    <div class="col-xl-12">
                                                        <div class="request-a-pickup__tab-content-input-box">
                                                            <input id="fullname_appartment" type="text"
                                                                placeholder="Your Full Name*" name="fname" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-12">
                                                        <div class="request-a-pickup__tab-content-input-box">
                                                            <input id="name_appartment" type="text"
                                                                placeholder="Appartments/Community Name*" name="cname"
                                                                required>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-12">
                                                        <div class="request-a-pickup__tab-content-input-box">
                                                            <input id="designation_appartment" type="text"
                                                                placeholder="Your Designation in the community*"
                                                                name="dname" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-12">
                                                        <div class="request-a-pickup__tab-content-input-box">
                                                            <input id="emailAddress_appartment" type="email"
                                                                placeholder="Email Address*" name="email" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-6">
                                                        <div class="request-a-pickup__tab-content-input-box">
                                                            <input id="noofHouse_appartment" type="text" maxlength="3"
                                                                placeholder="No of houses*" name="number" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-6">
                                                        <div class="request-a-pickup__tab-content-size-box">
                                                            <label style="line-height: 16px;" id="message2">Select the categories of
                                                                waste to be handled in your service</label>
                                                            <ul
                                                                class="list-unstyled request-a-pickup__tab-content-size-list">

                                                                <li>
                                                                    <input type="checkbox" name="myCheck" value="Wet"
                                                                        id="option_7" class=checked
                                                                        ">
                                                                    <label for="option_7"><span></span>Wet</label>
                                                                </li>
                                                                <li>
                                                                    <input type="checkbox" name="myCheck1" value="Dry"
                                                                        id="option_8" class=checked
                                                                        ">
                                                                    <label for="option_8"><span></span>Dry</label>
                                                                </li>
                                                                <!-- <div id="demo"></div> -->
                                                            </ul>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-6">
                                            <div class="request-a-pickup__tab-content-form-right">
                                                <div class="row">
                                                    <div class="col-xl-12">
                                                        <div class="request-a-pickup__tab-content-input-box request-a-pickup__tab-content-brief-box"
                                                            style="height: 156px;">
                                                            <textarea id="address_appartment" placeholder="Full Address"
                                                                name="address" required></textarea>
                                                        </div>
                                                    </div>

                                                    <div class="col-xl-12">
                                                        <div class="request-a-pickup__tab-content-input-box">
                                                            <input id="postCode_appartment" type="text"
                                                                placeholder="Post Code*" name="pincode" maxlength="6" minlength="6" required>
                                                        </div>
                                                    </div>
                                                    <!-- <div class="col-xl-12">
                                                        <div class="request-a-pickup__tab-content-input-box">
                                                            <p id="amount_appartments"></p>
                                                        </div>
                                                    </div> -->
                                                    <!-- <div class="col-xl-12"
                                                        style="margin-top: -31px;margin-bottom: 20px;">

                                                        <div style="text-align:right;">
                                                            <button type="button"
                                                                class="thm-btn request-a-pickup__tab-content-btn" style="padding: 0px;padding-left: 3px;padding-right: 3px;
                                                                font-weight: 300; font-size: 13px;"><span
                                                                    class="icon-placeholder"></span> Get
                                                                Location</button>
                                                        </div>
                                                    </div> -->

                                                    <div class="request-a-pickup__tab-content-extra">
                                                        <ul
                                                            class="list-unstyled request-a-pickup__tab-content-extra-list">
                                                            <li>
                                                                <input type="checkbox" name="declareapp"
                                                                    id="app_extra_weight" required>
                                                                <label for="app_extra_weight"><span></span>I here by
                                                                    declare all the details are valid, and wish to
                                                                    proceed.</label>
                                                            </li>
                                                            <li style="text-align: right;">
                                                                <label id="check1" for="extra_weight_2" style="font-size: 28px;color: #0076a1;font-weight: bold;"><span></span>Total : ₹0/-<br><span style="font-weight: 600;font-size: 14px;color: #7c7c7c;">Inclusive of 18% GST</span></label>
                                                            </li>
                                                            <input type="hidden" id="total_amount1" name="total_amount" value="0">
                                                            <input type="hidden" name="servicetype" value="Appartments">
                                                        </ul>
                                                    </div>
                                                    <div class="col-xl-12">

                                                        <div class="request-a-pickup__tab-content-btn-box"
                                                            style="text-align:right;">
                                                            <button type="submit"
                                                                class="thm-btn request-a-pickup__tab-content-btn"
                                                                onclick="Postdata()">Proceed ></button>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>

                    </div>
                    <!--tab-->
                    <div class="tab" id="commercial">

                        <div class="request-a-pickup__tab-content">
                            <div class="request-a-pickup__tab-content-form-box">
                                <form class="request-a-pickup__tab-content-form" method="post" action="register4.php">
                                    <div class="row">
                                        <p class="request-a-pickup__tab-content-text-box" style="padding-bottom:10px;">
                                            New Users can fill in the form and register for the service.</p>
                                        <div class="col-xl-6">
                                            <div class="request-a-pickup__tab-content-form-left">
                                                <div class="row">
                                                    <div class="col-xl-12">
                                                        <div class="request-a-pickup__tab-content-input-box">
                                                            <input id="fullname_commercial" type="text"
                                                                placeholder="Your Full Name*" name="fname" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-12">
                                                        <div class="request-a-pickup__tab-content-input-box">
                                                            <input id="name_commercial" type="text"
                                                                placeholder="Name of your organisation*" name="cname"
                                                                required>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-12">
                                                        <div class="request-a-pickup__tab-content-input-box">
                                                            <input id="designation_commercial" type="text"
                                                                placeholder="Your Designation*" name="dname" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-12">
                                                        <div class="request-a-pickup__tab-content-input-box">
                                                            <input id="emailAddress_commercial" type="email"
                                                                placeholder="Email Address*" name="email" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-12">
                                                        <div class="request-a-pickup__tab-content-size-box">
                                                            <label style="line-height: 16px;" id="message3">Select the categories of
                                                                waste to be handled in your service</label>
                                                            <ul
                                                                class="list-unstyled request-a-pickup__tab-content-size-list">

                                                                <li>
                                                                    <input type="checkbox" id="option_9" name="myCheck" value="Organic">
                                                                    <label for="option_9"><span></span>Organic</label>
                                                                    <p style="font-size: 12px;line-height: 14px;">Organic per bin <b style="color: #0076a1;">Rs.100/- + 18% GST</b> (60 liter Green bin)</p>
                                                                </li>
                                                                <li>
                                                                    <input type="checkbox" id="option_10" name="myCheck1" value="Dry">
                                                                    <label for="option_10"><span></span>Dry</label>
                                                                    <p style="font-size: 12px;line-height: 14px;">Dry per bag <b style="color: #0076a1;">Rs.50/- + 18% GST</b> (100 liter White/Blue bag)</p>
                                                                </li>
                                                                <!-- <div id="demo"></div> -->
                                                            </ul>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-6">
                                            <div class="request-a-pickup__tab-content-form-right">
                                                <div class="row">
                                                    <div class="col-xl-12">
                                                        <div class="request-a-pickup__tab-content-input-box request-a-pickup__tab-content-brief-box"
                                                            style="height: 156px;">
                                                            <textarea id="address_commercial" placeholder="Full Address"
                                                                name="address" required></textarea>
                                                        </div>
                                                    </div>

                                                    <div class="col-xl-12">
                                                        <div class="request-a-pickup__tab-content-input-box">
                                                            <input id="postCode_commercial" type="text"
                                                                placeholder="Post Code*" name="pincode" maxlength="6" minlength="6" required>
                                                        </div>
                                                    </div>
                                                    <!-- <div class="col-xl-12">
                                                        <div class="request-a-pickup__tab-content-input-box">
                                                            <p id="amount_commercial"></p>
                                                        </div>
                                                    </div> -->
                                                    <!-- <div class="col-xl-12"
                                                        style="margin-top: -31px;margin-bottom: 20px;">

                                                        <div style="text-align:right;">
                                                            <button type="button"
                                                                class="thm-btn request-a-pickup__tab-content-btn" style="padding: 0px;padding-left: 3px;padding-right: 3px;
                                                                font-weight: 300; font-size: 13px;"><span
                                                                    class="icon-placeholder"></span> Get
                                                                Location</button>
                                                        </div>
                                                    </div> -->

                                                    <div class="request-a-pickup__tab-content-extra">
                                                        <ul
                                                            class="list-unstyled request-a-pickup__tab-content-extra-list">
                                                            <li>
                                                                <input type="checkbox" name="declarecomm"
                                                                    id="comm_extra_weight" required>
                                                                <label for="comm_extra_weight"><span></span>I here by
                                                                    declare all the details are valid, and wish to
                                                                    proceed.</label>
                                                            </li>
                                                            <li style="text-align: right;">
                                                                <label id="total_label" for="extra_weight_2" style="font-size: 28px;color: #0076a1;font-weight: bold;"><span></span>Total : ₹0/-<br><span style="font-weight: 600;font-size: 14px;color: #7c7c7c;">Inclusive of 18% GST</span></label>
                                                            </li>
                                                            <input type="hidden" id="total_amount" name="total_amount" value="0">
                                                            <input type="hidden" name="servicetype" value="Commercial">
                                                        </ul>
                                                    </div>
                                                    <div class="col-xl-12">

                                                        <div class="request-a-pickup__tab-content-btn-box"
                                                            style="text-align:right;">
                                                            <button type="submit"
                                                                class="thm-btn request-a-pickup__tab-content-btn"
                                                                onclick="Postdata()">Proceed ></button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
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
<script>

    

    // function myFunction() {

    //     var checkboxes = document.querySelectorAll('input[name="myCheck"]:checked'),
    //         values = [],
    //         len = checkboxes.length, i;

    //     for (i = 0; i < len; i++) {
    //         values.push(checkboxes[i].value);
    //     }

    //     document.getElementById("demo").innerHTML = values.join(',');
    // }
</script>
<script>
    
    var loc = localStorage.getItem('3eab60ec988c461f0cfc0e6ed6ed');
    var cache = JSON.parse(atob(loc));
    var phonenum = cache.phone;

    // Function to set a cookie
    if(phonenum){
        function setCookie(name, value, days) {
        var expires = "";
        if (days) {
            var date = new Date();
            date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
            expires = "; expires=" + date.toUTCString();
        }
        document.cookie = name + "=" + value + expires + "; path=/";
    }
    }

    // Set a cookie named "mobile" with the value of 'phonenum' that expires in 1 day
    setCookie("mobile", phonenum, 1);
    $(document).ready(function () {
        $("#firstname_single").val(cache.name);
        $("#fullname_appartment").val(cache.name);
        $("#fullname_commercial").val(cache.name);
        $("#mobileNumber_single").val(cache.phone);
    });
    // console.log(phonenum);
    // console.log(cache.phone);
    var phone = cache.phone;
    function Postdata() {

        if(totalvas == undefined || totalvas == 0){
            if ($("#servicetype .active-btn").attr("data-type") == "Single") {
                const inputField = document.getElementById("extra_weight_2"); // Replace with your actual input field ID
                if (inputField) {
                    inputField.checked = false;
                }
                const messageElement = document.getElementById("message1"); // Replace with your actual message element ID
                // messageElement.textContent = "Please Select Your Waste Type";
                messageElement.style.color = "red";
            }
            else if ($("#servicetype .active-btn").attr("data-type") == "Appartment") {
                const inputField = document.getElementById("app_extra_weight"); // Replace with your actual input field ID
                if (inputField) {
                    inputField.checked = false;
                }
                const messageElement = document.getElementById("message2"); // Replace with your actual message element ID
                // messageElement.textContent = "Please Select Your Waste Type";
                messageElement.style.color = "red";
            }else {
                const inputField = document.getElementById("comm_extra_weight"); // Replace with your actual input field ID
                if (inputField) {
                    inputField.checked = false;
                }
                const messageElement = document.getElementById("message3"); // Replace with your actual message element ID
                // messageElement.textContent = "Please Select Your Waste Type";
                messageElement.style.color = "red";
            }
        }

        var model = null;

        if ($("#servicetype .active-btn").attr("data-type") == "Single") {
            // 
            model = {
                firstname: document.getElementById('firstname_single').value,
                lastname: document.getElementById('lastname_single').value,
                mobileNumber: document.getElementById('mobileNumber_single').value,
                emailAddress: document.getElementById('emailAddress_single').value,
                servicetype: $("#servicetype .active-btn").attr("data-type"),
                orderid: Math.random().toString().slice(2, 11),
                amount: totalvas,
                wastetype: type1,
                address: document.getElementById('address_single').value,
                postCode: document.getElementById('postCode_single').value
            };
            
        }
        else if ($("#servicetype .active-btn").attr("data-type") == "Appartment") {
            
            model = {
                firstname: document.getElementById('fullname_appartment').value,
                name: document.getElementById('name_appartment').value,
                designation: document.getElementById('designation_appartment').value,
                mobileNumber: phone,
                noofHouse: document.getElementById('noofHouse_appartment').value,
                emailAddress: document.getElementById('emailAddress_appartment').value,
                servicetype: $("#servicetype .active-btn").attr("data-type"),
                orderid: Math.random().toString().slice(2, 11),
                amount: totalvas,
                wastetype: type1,
                address: document.getElementById('address_appartment').value,
                postCode: document.getElementById('postCode_appartment').value

            };
        }
        else {
            // 
            model = {
                firstname: document.getElementById('fullname_commercial').value,
                name: document.getElementById('name_commercial').value,
                mobileNumber: phone,
                designation: document.getElementById('designation_commercial').value,
                emailAddress: document.getElementById('emailAddress_commercial').value,
                servicetype: $("#servicetype .active-btn").attr("data-type"),
                orderid: Math.random().toString().slice(2, 11),
                amount: totalvas,
                wastetype: type1,
                address: document.getElementById('address_commercial').value,
                postCode: document.getElementById('postCode_commercial').value

            };
        }

        let encoded = window.btoa(JSON.stringify(model));
        localStorage.setItem('3eab60ec988c461f0cfc0e6ed6ed', encoded);
        var loc = localStorage.getItem('3eab60ec988c461f0cfc0e6ed6ed');
        var cache = JSON.parse(atob(loc));
        var orderIdss = cache.orderid;

        // Set the orderId as a cookie
        document.cookie = "orderId=" + orderIdss;

        
        // ... (other properties)


        // window.location.href = "new_user.php?firstname=" + model.firstname + "&email=" + model.emailAddress + "&orderid=" + model.orderid + "&address=" + model.address + "&amount=" + model.amount;
        // return false;
        // $.ajax({
        //     url:"http://localhost:7071/api/Customer/Add",
        //     type:"POST",
        //     beforeSend: function(request) {
        //         request.setRequestHeader("Authorization", "Bearer eyJhbGciOiJodHRwOi8vd3d3LnczLm9yZy8yMDAxLzA0L3htbGRzaWctbW9yZSNobWFjLXNoYTI1NiIsInR5cCI6IkpXVCJ9.eyJlbWFpbGFkZHJlc3MiOiJhZG1pbkB1bndhc3RlLm9yZyIsInJvbGUiOiJBZG1pbiIsImV4cCI6MTY4Mjc0NTEwOSwiaXNzIjoiYXBpLm15YWRtaW4uY29tIiwiYXVkIjoiYXBpLm15YWRtaW4uY29tIn0.spWYZXtkPETEHJElDoal5q--D1PEo7Ni4mnWRqNwHfs");
        //     },
        //     data:JSON.stringify(model),
        //     contentType:"application/json; charset=utf-8",
        //     dataType:"json",
        //     success: function(){
        //             
        //             alert("Data: " + model + "\nStatus: " );
        //         }
        //     });

    }
</script>

<script>
    const organicCheckbox = document.getElementById("option_9");
    const dryCheckbox = document.getElementById("option_10");
    const totalAmountInput = document.getElementById("total_amount");
    const totalLabel = document.getElementById("total_label");
    const organicCheckbox1 = document.getElementById("option_7");
    const dryCheckbox1 = document.getElementById("option_8");
    const totalLabel1 = document.getElementById("check1");
    const totalAmountInput1 = document.getElementById("total_amount1");
    const organicCheckbox2 = document.getElementById("option_5");
    const dryCheckbox2 = document.getElementById("option_6");
    const totalLabel2 = document.getElementById("check2");
    const totalAmountInput2 = document.getElementById("total_amount2");

    const organicPrice = 100; // Update with actual price
    const dryPrice = 50; // Update with actual price
    const gstRate = 0.18;
    const organicPrice1 = 50; // Update with actual price
    const dryPrice1 = 50; // Update with actual price
    const gstRate1 = 0.18;
    const organicPrice2 = 50; // Update with actual price
    const dryPrice2 = 50; // Update with actual price
    const gstRate2 = 0.18;

    organicCheckbox.addEventListener("change", updateTotal);
    dryCheckbox.addEventListener("change", updateTotal);
    organicCheckbox1.addEventListener("change", updateTotal1);
    dryCheckbox1.addEventListener("change", updateTotal1);
    organicCheckbox2.addEventListener("change", updateTotal2);
    dryCheckbox2.addEventListener("change", updateTotal2);
    var totalvas;
    var type1;
    // console.log(totalvas);
    function updateTotal() {
        let total = 0;

        if (organicCheckbox.checked) {
            total += organicPrice + organicPrice * gstRate;
            type1 = "Organic";
        }

        if (dryCheckbox.checked) {
            total += dryPrice + dryPrice * gstRate;
            type1 = "Dry";
        }

        totalAmountInput.value = total.toFixed(2);
        var totalva = total.toFixed(2);
        totalvas = parseInt(totalva) ;
        if(totalvas > 120){
            type1 = "Organic,Dry"
        }
        // console.log(type1);

        totalLabel.innerHTML = `<span></span>Total : ₹${total.toFixed(2)}/-<br><span style="font-weight: 600;font-size: 14px;color: #7c7c7c;">Inclusive of 18% GST</span>`;
    }
    function updateTotal1() {
        let total = 0;

        if (organicCheckbox1.checked) {
            total += organicPrice1 + organicPrice1 * gstRate1;
            type1 = "Wet";
        }

        if (dryCheckbox1.checked) {
            total += dryPrice1 + dryPrice1 * gstRate1;
            type1 = "Dry";
        }
        totalAmountInput1.value = total.toFixed(2);
        var totalva = total.toFixed(2);
        totalvas = parseInt(totalva) ;
        if(totalvas > 100){
            type1 = "Wet,Dry"
        }
        // console.log(type1);
        

        totalLabel1.innerHTML = `<span></span>Total : ₹${total.toFixed(2)}/-<br><span style="font-weight: 600;font-size: 14px;color: #7c7c7c;">Inclusive of 18% GST</span>`;
    }
    function updateTotal2() {
        let total = 0;

        if (organicCheckbox2.checked) {
            total += organicPrice2 + organicPrice2 * gstRate2;
            type1 = "Wet";
        }

        if (dryCheckbox2.checked) {
            total += dryPrice2 + dryPrice2 * gstRate2;
            type1 = "Dry";
        }
        var totalva = total.toFixed(2);
        totalvas = parseInt(totalva) ;
        if(totalvas > 100){
            type1 = "Wet,Dry"
        }
        // console.log(type1);
        totalAmountInput2.value = total.toFixed(2);
        // if (totalAmountInput2.value == ""){

        // }

        totalLabel2.innerHTML = `<span></span>Total : ₹${total.toFixed(2)}/-<br><span style="font-weight: 600;font-size: 14px;color: #7c7c7c;">Inclusive of 18% GST</span>`;
    }
    // console.log(orderId);

//     // Retrieve the encoded data from local storage
// var encodedData = localStorage.getItem('3eab60ec988c461f0cfc0e6ed6ed');

// // Decode the base64 encoded data
// var decodedData = window.atob(encodedData);

// // Convert the decoded JSON string back to an object
// var storedModel = JSON.parse(decodedData);

// // Now you can access the properties as needed
// // console.log(storedModel.amount);
// console.log(storedModel.orderid);


//     var loc = localStorage.getItem('3eab60ec988c461f0cfc0e6ed6ed');
//     var cache = JSON.parse(atob(loc));
//     console.log(cache.orderid)
//     var orderId = cache.orderid;
//     $.ajax({
//         url: 'new_user.php',
//         method: 'POST',
//         data: { orderId: orderId },
//         success: function(response) {
//             console.log('AJAX request successful');
//         },
//         error: function(xhr, status, error) {
//             console.error('AJAX request error:', error);
//         }
//     });
</script>


</html>