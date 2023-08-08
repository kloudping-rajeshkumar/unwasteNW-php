<!DOCTYPE html>
<html lang="en">
<?php include 'head.php';?>
<style>
    .main-header-three{
        background:#04a9fb !important;
    }
    .form-copy{
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
<?php include 'preloader.php';?>
    <div class="page-wrapper">
        <?php include 'header.php';?>

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
                    <ul class="tab-buttons clearfix list-unstyled">
                        <li data-tab="#single" class="tab-btn active-btn"><span>Individual</span></li>
                        <li data-tab="#appartment" class="tab-btn"><span>Appartments</span></li>
                        <li data-tab="#commercial" class="tab-btn"><span>Commercial</span></li>
                    </ul>
                    <div class="tabs-content">
                        <!--tab-->
                        <div class="tab active-tab" id="single">

                            <div class="request-a-pickup__tab-content">
                                <div class="request-a-pickup__tab-content-form-box">
                                  <form class="request-a-pickup__tab-content-form" action="new_user.php" method="get">
                                    <div class="row">
                                        <p class="request-a-pickup__tab-content-text-box" style="padding-bottom:10px;">New Users can fill in the form and register for the service.</p>
                                        <div class="col-xl-6">
                                            <div class="request-a-pickup__tab-content-form-left">
                                                    <div class="row">
                                                        <div class="col-xl-6">
                                                            <div class="request-a-pickup__tab-content-input-box">
                                                                <input type="text" placeholder="First Name*" name="fname" required>
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-6">
                                                            <div class="request-a-pickup__tab-content-input-box">
                                                                <input type="text" placeholder="Last Name*" name="lname" required>
                                                            </div>
                                                        </div>
                                                         <div class="col-xl-12">
                                                            <div class="request-a-pickup__tab-content-input-box">
                                                                <input type="email" placeholder="Email Address*"
                                                                    name="email" required>
                                                            </div>
                                                        </div>
                                                         <div class="col-xl-12">
                                                            <div class="request-a-pickup__tab-content-input-box">
                                                                <input type="text" placeholder="Secondary Phone No*" maxlength="10" name="number" required>
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-12">
                                                                <div class="request-a-pickup__tab-content-size-box">
                                                                    <label>Select the categories of waste to be handled in your service</label>
                                                                    <ul class="list-unstyled request-a-pickup__tab-content-size-list">
                                                                        
                                                                        <li>
                                                                            <input type="checkbox" name="wet" id="option_5">
                                                                            <label for="option_5"><span></span>Wet</label>
                                                                        </li>
                                                                        <li>
                                                                            <input type="checkbox" name="dry" id="option_6">
                                                                            <label for="option_6"><span></span>Dry</label>
                                                                        </li>
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
                                                            <div
                                                                class="request-a-pickup__tab-content-input-box request-a-pickup__tab-content-brief-box" style="height: 156px;">
                                                                <textarea
                                                                    placeholder="Full Address"
                                                                    name="address" required></textarea>
                                                            </div>
                                                        </div>
                                                        
                                                        <div class="col-xl-12">
                                                            <div class="request-a-pickup__tab-content-input-box">
                                                                <input type="text" placeholder="Post Code*"
                                                                    name="pincode" required>
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-12" style="margin-top: -31px;margin-bottom: 20px;">
                                                            
                                                            <div style="text-align:right;">
                                                                <button type="submit" class="thm-btn request-a-pickup__tab-content-btn" style="padding: 0px;padding-left: 3px;padding-right: 3px;
                                                                font-weight: 300; font-size: 13px;"><span class="icon-placeholder"></span> Get Location</button>
                                                            </div>
                                                        </div>
                                                        
                                                        <div class="request-a-pickup__tab-content-extra">
                                                            <ul class="list-unstyled request-a-pickup__tab-content-extra-list">
                                                                <li>
                                                                    <input type="checkbox" name="declare" id="extra_weight_2" required>
                                                                    <label for="extra_weight_2"><span></span>I here by declare all the details are valid, and wish to proceed.</label>
                                                                </li>
                                                                <li style="text-align: right;">
                                                                    <label for="extra_weight_2" style="font-size: 28px;color: #0076a1;font-weight: bold;"><span></span>Total : ₹118/-<br><span style="font-weight: 600;font-size: 14px;color: #7c7c7c;">Inclusive of 18% GST</span></label>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-xl-12">
                                                            
                                                            <div class="request-a-pickup__tab-content-btn-box" style="text-align:right;">
                                                                <button type="submit"
                                                                    class="thm-btn request-a-pickup__tab-content-btn">Proceed ></button>
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
                                  <form class="request-a-pickup__tab-content-form" action="new_user.php" method="get">
                                    <div class="row">
                                        <p class="request-a-pickup__tab-content-text-box" style="padding-bottom:10px;">New Users can fill in the form and register for the service.</p>
                                        <div class="col-xl-6">
                                            <div class="request-a-pickup__tab-content-form-left">
                                                    <div class="row">
                                                        <div class="col-xl-12">
                                                            <div class="request-a-pickup__tab-content-input-box">
                                                                <input type="text" placeholder="Your Full Name*" name="fname" required>
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-12">
                                                            <div class="request-a-pickup__tab-content-input-box">
                                                                <input type="text" placeholder="Appartments/Community Name*" name="cname" required>
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-12">
                                                            <div class="request-a-pickup__tab-content-input-box">
                                                                <input type="text" placeholder="Your Designation in the community*" name="dname" required>
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-12">
                                                            <div class="request-a-pickup__tab-content-input-box">
                                                                <input type="email" placeholder="Email Address*"
                                                                    name="email" required>
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-6">
                                                            <div class="request-a-pickup__tab-content-input-box">
                                                                <input type="text" maxlength="3" placeholder="No of houses*"
                                                                    name="number" required>
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-6">
                                                                <div class="request-a-pickup__tab-content-size-box">
                                                                    <label style="line-height: 16px;">Select the categories of waste to be handled in your service</label>
                                                                    <ul class="list-unstyled request-a-pickup__tab-content-size-list">
                                                                        
                                                                        <li>
                                                                            <input type="checkbox" name="64_gallon" id="option_7">
                                                                            <label for="option_7"><span></span>Wet</label>
                                                                        </li>
                                                                        <li>
                                                                            <input type="checkbox" name="96_gallon" id="option_8">
                                                                            <label for="option_8"><span></span>Dry</label>
                                                                        </li>
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
                                                            <div
                                                                class="request-a-pickup__tab-content-input-box request-a-pickup__tab-content-brief-box" style="height: 156px;">
                                                                <textarea
                                                                    placeholder="Full Address"
                                                                    name="address" required></textarea>
                                                            </div>
                                                        </div>
                                                        
                                                        <div class="col-xl-12">
                                                            <div class="request-a-pickup__tab-content-input-box">
                                                                <input type="text" placeholder="Post Code*"
                                                                    name="pincode" required>
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-12" style="margin-top: -31px;margin-bottom: 20px;">
                                                            
                                                            <div style="text-align:right;">
                                                                <button type="submit" class="thm-btn request-a-pickup__tab-content-btn" style="padding: 0px;padding-left: 3px;padding-right: 3px;
                                                                font-weight: 300; font-size: 13px;"><span class="icon-placeholder"></span> Get Location</button>
                                                            </div>
                                                        </div>
                                                        
                                                        <div class="request-a-pickup__tab-content-extra">
                                                            <ul class="list-unstyled request-a-pickup__tab-content-extra-list">
                                                                <li>
                                                                    <input type="checkbox" name="declareapp" id="app_extra_weight" required>
                                                                    <label for="app_extra_weight"><span></span>I here by declare all the details are valid, and wish to proceed.</label>
                                                                </li>
                                                                <li style="text-align: right;">
                                                                    <label for="extra_weight_2" style="font-size: 28px;color: #0076a1;font-weight: bold;"><span></span>Total : ₹118/-<br><span style="font-weight: 600;font-size: 14px;color: #7c7c7c;">Inclusive of 18% GST</span></label>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-xl-12">
                                                            
                                                            <div class="request-a-pickup__tab-content-btn-box" style="text-align:right;">
                                                                <button type="submit"
                                                                    class="thm-btn request-a-pickup__tab-content-btn">Proceed ></button>
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
                                  <form class="request-a-pickup__tab-content-form" action="new_user.php" method="get">
                                    <div class="row">
                                        <p class="request-a-pickup__tab-content-text-box" style="padding-bottom:10px;">New Users can fill in the form and register for the service.</p>
                                        <div class="col-xl-6">
                                            <div class="request-a-pickup__tab-content-form-left">
                                                    <div class="row">
                                                        <div class="col-xl-12">
                                                            <div class="request-a-pickup__tab-content-input-box">
                                                                <input type="text" placeholder="Your Full Name*" name="fname" required>
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-12">
                                                            <div class="request-a-pickup__tab-content-input-box">
                                                                <input type="text" placeholder="Name of your organisation*" name="cname" required>
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-12">
                                                            <div class="request-a-pickup__tab-content-input-box">
                                                                <input type="text" placeholder="Your Designation*" name="dname" required>
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-12">
                                                            <div class="request-a-pickup__tab-content-input-box">
                                                                <input type="email" placeholder="Email Address*"
                                                                    name="email" required>
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-12">
                                                                <div class="request-a-pickup__tab-content-size-box">
                                                                    <label style="line-height: 16px;">Select the categories of waste to be handled in your service</label>
                                                                    <ul class="list-unstyled request-a-pickup__tab-content-size-list">
                                                                        
                                                                        <li>
                                                                            <input type="checkbox" name="64_gallon" id="option_9">
                                                                            <label for="option_9"><span></span>Organic</label>
                                                                            <p style="font-size: 12px;line-height: 14px;">Organic per bin <b style="color: #0076a1;">Rs.100/- + 18% GST</b> (60 liter Green bin)</p>
                                                                        </li>
                                                                        <li>
                                                                            <input type="checkbox" name="96_gallon" id="option_10">
                                                                            <label for="option_10"><span></span>Dry</label>
                                                                            <p style="font-size: 12px;line-height: 14px;">Dry per bag <b style="color: #0076a1;">Rs.50/- + 18% GST</b> (100 liter White/Blue bag)</p>
                                                                        </li>
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
                                                            <div
                                                                class="request-a-pickup__tab-content-input-box request-a-pickup__tab-content-brief-box" style="height: 156px;">
                                                                <textarea
                                                                    placeholder="Full Address"
                                                                    name="address" required></textarea>
                                                            </div>
                                                        </div>
                                                        
                                                        <div class="col-xl-12">
                                                            <div class="request-a-pickup__tab-content-input-box">
                                                                <input type="text" placeholder="Post Code*"
                                                                    name="pincode" required>
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-12" style="margin-top: -31px;margin-bottom: 20px;">
                                                            
                                                            <div style="text-align:right;">
                                                                <button type="submit" class="thm-btn request-a-pickup__tab-content-btn" style="padding: 0px;padding-left: 3px;padding-right: 3px;
                                                                font-weight: 300; font-size: 13px;"><span class="icon-placeholder"></span> Get Location</button>
                                                            </div>
                                                        </div>
                                                        
                                                        <div class="request-a-pickup__tab-content-extra">
                                                            <ul class="list-unstyled request-a-pickup__tab-content-extra-list">
                                                                <li>
                                                                    <input type="checkbox" name="declarecomm" id="comm_extra_weight" required>
                                                                    <label for="comm_extra_weight"><span></span>I here by declare all the details are valid, and wish to proceed.</label>
                                                                </li>
                                                                <li style="text-align: right;">
                                                                    <label for="extra_weight_2" style="font-size: 28px;color: #0076a1;font-weight: bold;"><span></span>Total : ₹177/-<br><span style="font-weight: 600;font-size: 14px;color: #7c7c7c;">Inclusive of 18% GST</span></label>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-xl-12">
                                                            
                                                            <div class="request-a-pickup__tab-content-btn-box" style="text-align:right;">
                                                                <button type="submit"
                                                                    class="thm-btn request-a-pickup__tab-content-btn">Proceed ></button>
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
                <a href="index.html" aria-label="logo image"><img src="assets/images/resources/footer-logo.png"
                        width="155" alt="" /></a>
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

</html>