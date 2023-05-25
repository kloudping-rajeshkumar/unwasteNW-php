<?php 
echo '

<header class="main-header-three">
            <nav class="main-menu main-menu-three">
                <div class="main-menu-three__wrapper">
                    <div class="main-menu-wrapper__logo" style="padding:5px;">
                        <a href="index.php"><img src="assets/images/resources/logo.png" alt="" style="width:150px;    background: white;
    border-radius: 3px;
    padding: 3px;"></a>
                    </div>
                    <div class="main-menu-three__main-menu">
                        <a href="#" class="mobile-nav__toggler"><i class="fa fa-bars"></i></a>
                        <ul class="main-menu__list">
                            <li>
                                <a href="index.php">Home</a>
                                
                            </li>
                            <li>
                                <a href="index.php#welcome">About</a>
                            </li>
                            <li class="dropdown megamenu">
                                <a href="#!">Our Services</a>
                                <ul>
                                    <li>
                                        <div class="service-tabs">
                                            <div class="container">
                                                <div class="service-tabs__inner tabs-box">
                                                    <div class="row">
                                                        <div class="col-md-6 col-lg-4">
                                                            <ul class="tab-buttons service-tabs__links">
                                                                <li data-tab="#service-1" class="tab-btn active-btn">
                                                                    <span>Our Process</span>
                                                                </li>
                                                                <li data-tab="#service-4" class="tab-btn">
                                                                    <span>Daily Services</span>
                                                                </li>
                                                                <li data-tab="#service-5" class="tab-btn">
                                                                    <span>Residential Pickup</span>
                                                                </li>
                                                                <li data-tab="#service-6" class="tab-btn">
                                                                    <span>Business Pickup</span>
                                                                </li>
                                                            </ul>
                                                        </div><!-- /.col-md-6 -->
                                                        <div class="col-md-6 col-lg-8">
                                                            <div class="tabs-content">
                                                                <div class="tab active-tab animated fadeInUp"
                                                                    id="service-1">
                                                                    <div class="service-tabs__content">
                                                                        <div class="service-tabs__text">
                                                                            <h3 class="service-tabs__title"><a
                                                                                    href="register.php">Our Process</a></h3>
                                                                            <p>Work process of UnWasteNetwork</p>
                                                                            <a class="service-tabs__btn"
                                                                                href="process.php">
                                                                                <i class="fa fa-arrow-right"></i>
                                                                                Know More
                                                                            </a>
                                                                            <!-- /.service-tabs__title -->
                                                                        </div><!-- /.service-tabs__text -->
                                                                        <div class="service-tabs__image">
                                                                            <img src="assets/images/resources/m1.jpg"
                                                                                alt="">
                                                                        </div><!-- /.service-tabs__image -->
                                                                    </div><!-- /.service-tabs__content -->
                                                                </div>

                                                                <div class="tab" id="service-4">
                                                                    <div class="service-tabs__content">
                                                                        <div class="service-tabs__text">
                                                                            <h3 class="service-tabs__title"><a
                                                                                    href="register.php">Daily Logistics Process</a></h3>
                                                                            <a class="service-tabs__btn"
                                                                                href="daily.php">
                                                                                <i class="fa fa-arrow-right"></i>
                                                                                Know more
                                                                            </a>
                                                                            <!-- /.service-tabs__title -->
                                                                        </div><!-- /.service-tabs__text -->
                                                                        <div class="service-tabs__image">
                                                                            <img src="assets/images/resources/m2.jpg"
                                                                                alt="">
                                                                        </div><!-- /.service-tabs__image -->
                                                                    </div><!-- /.service-tabs__content -->
                                                                </div>

                                                                <div class="tab" id="service-5">
                                                                    <div class="service-tabs__content">
                                                                        <div class="service-tabs__text">
                                                                            <h3 class="service-tabs__title"><a
                                                                                    href="register.php">Residential
                                                                                    Pickup
                                                                                    & Recycling
                                                                                    Pickup</a></h3>
                                                                            <a class="service-tabs__btn"
                                                                                href="register.php">
                                                                                <i class="fa fa-arrow-right"></i>
                                                                                Register
                                                                            </a>
                                                                            <!-- /.service-tabs__title -->
                                                                        </div><!-- /.service-tabs__text -->
                                                                        <div class="service-tabs__image">
                                                                            <img src="assets/images/resources/m3.jpg"
                                                                                alt="">
                                                                        </div><!-- /.service-tabs__image -->
                                                                    </div><!-- /.service-tabs__content -->
                                                                </div>

                                                                <div class="tab" id="service-6">
                                                                    <div class="service-tabs__content">
                                                                        <div class="service-tabs__text">
                                                                            <h3 class="service-tabs__title"><a
                                                                                    href="register.php">Business
                                                                                    Waste
                                                                                    & Recycling
                                                                                    Pickup</a></h3>
                                                                            <a class="service-tabs__btn"
                                                                                href="register.php">
                                                                                <i class="fa fa-arrow-right"></i>
                                                                                Register
                                                                            </a>
                                                                            <!-- /.service-tabs__title -->
                                                                        </div><!-- /.service-tabs__text -->
                                                                        <div class="service-tabs__image">
                                                                            <img src="assets/images/resources/m3.jpg"
                                                                                alt="">
                                                                        </div><!-- /.service-tabs__image -->
                                                                    </div><!-- /.service-tabs__content -->
                                                                </div>
                                                            </div><!-- /.tabs-content -->
                                                        </div><!-- /.col-md-6 -->
                                                    </div><!-- /.row -->
                                                </div><!-- /.service-tabs__inner -->
                                            </div><!-- /.container -->
                                        </div><!-- /.service-tabs -->
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                        <a href="#">Company</a>
                                        <ul>
                                            <li><a href="privacy_policy.php">Privacy Policy</a></li>
                                            <li><a href="faq.php">FAQ</a></li>
                                            <li><a href="guidelines.php">Guidelines</a></li>
                                        </ul>
                                    </li>
                            <li><a href="contact.php">Contact</a></li>
                        </ul>
                    </div>
                    <div class="main-menu-three__right">
                        <div class="main-menu-three__search-box">
                            <a href="#" class="main-menu-three__search search-toggler icon-magnifying-glass"></a>
                        </div>
                        <div class="main-menu-three__call">
                            <a class="r-btn" href="register.php">Register For Service</a>
                        </div>
                    </div>
                </div>
            </nav>
        </header>

        <div class="stricky-header stricked-menu main-menu main-menu-three">
            <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
        </div><!-- /.stricky-header -->

    ';
?>