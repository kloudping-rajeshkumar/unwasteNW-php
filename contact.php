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
        <!--Request A Pickup Top End-->

        <!--Request A Pickup Start-->
        <section class="contact-one contact-page" style="padding-top:200px;">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-6">
                        <div class="contact-one__left">
                            <div class="section-title text-left">
                                <span class="section-title__tagline">Contact With Us</span>
                                <h2 class="section-title__title">Have Questions? Feel Free to Write Us</h2>
                            </div>
                            <ul class="list-unstyled contact-one__info">
                                <li>
                                    <div class="icon">
                                        <span class="icon-message"></span>
                                    </div>
                                    <div class="text">
                                        <p>Call Us</p>
                                        <a href="tel:+919087090830">90870 90830 / 93450 91637</a>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <span class="icon-phone-call"></span>
                                    </div>
                                    <div class="text">
                                        <p>Write Email</p>
                                        <a href="mailto:marketing@ndlogistics.co">marketing@ndlogistics.co</a>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon" style="padding-left:25px;padding-right:25px;">
                                        <span class="icon-placeholder"></span>
                                    </div>
                                    <div class="text">
                                        <p>Visit Us</p>
                                        <span>ND Logistics Pvt Ltd, 19/33, 50 feet Road, Krishnaswamy Nagar, Ramanathpuram, Coimbatore 641045</span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6">
                        <div class="contact-one__right">
                            <form action="assets/inc/sendemail.php" class="contact-one__form contact-form-validated" novalidate="novalidate">
                                <div class="row">
                                    <div class="col-xl-6 col-lg-6 col-md-6">
                                        <div class="contact-one__form-input-box">
                                            <input type="text" placeholder="Your name" name="name">
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6">
                                        <div class="contact-one__form-input-box">
                                            <input type="email" placeholder="Email address" name="email">
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6">
                                        <div class="contact-one__form-input-box">
                                            <input type="text" placeholder="Phone number" name="phone">
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6">
                                        <div class="contact-one__form-input-box">
                                            <input type="text" placeholder="Subject" name="subject">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xl-12">
                                        <div class="contact-one__form-input-box text-message-box">
                                            <textarea name="message" placeholder="Write message"></textarea>
                                        </div>
                                        <div class="contact-one__btn-box">
                                            <button type="submit" class="thm-btn contact-one__btn">Send a
                                                Message</button>
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

<?php include 'footer.php';?>


    </div><!-- /.page-wrapper -->


    <?php include 'end.php';?>