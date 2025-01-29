<?php
$email = "info@equatorcommoditiesgh.com";
$phone = "+233 249 200 381";
$phone2 = "+233 240 450 999";
$address = "Chicago 12, Melborne City, Accra, Ghana";
$websiteName = "Equator Commodities";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

    <title><?php echo $websiteName; ?></title>

    <!-- Fav Icon -->
    <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&amp;display=swap" rel="stylesheet">

    <!-- Stylesheets -->
    <link href="assets/css/font-awesome-all.css" rel="stylesheet">
    <link href="assets/css/flaticon.css" rel="stylesheet">
    <link href="assets/css/owl.css" rel="stylesheet">
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <link href="assets/css/jquery.fancybox.min.css" rel="stylesheet">
    <link href="assets/css/animate.css" rel="stylesheet">
    <link href="assets/css/nice-select.css" rel="stylesheet">
    <link href="assets/css/odometer.css" rel="stylesheet">
    <link href="assets/css/elpath.css" rel="stylesheet">
    <link href="assets/css/color.css" id="jssDefault" rel="stylesheet">
    <link href="assets/css/rtl.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/dark.css" rel="stylesheet">
    <link href="assets/css/module-css/header.css" rel="stylesheet">
    <link href="assets/css/module-css/trading.css" rel="stylesheet">
    <link href="assets/css/module-css/banner.css" rel="stylesheet">
    <link href="assets/css/module-css/process.css" rel="stylesheet">
    <link href="assets/css/module-css/about.css" rel="stylesheet">
    <link href="assets/css/module-css/account.css" rel="stylesheet">
    <link href="assets/css/module-css/apps.css" rel="stylesheet">
    <link href="assets/css/module-css/award.css" rel="stylesheet">
    <link href="assets/css/module-css/pricing.css" rel="stylesheet">
    <link href="assets/css/module-css/experience.css" rel="stylesheet">
    <link href="assets/css/module-css/testimonial.css" rel="stylesheet">
    <link href="assets/css/module-css/subscribe.css" rel="stylesheet">
    <link href="assets/css/module-css/footer.css" rel="stylesheet">
    <link href="assets/css/responsive.css" rel="stylesheet">
    <link href="assets/css/module-css/contact.css" rel="stylesheet">
    <link href="assets/css/module-css/page-title.css" rel="stylesheet">
    <link href="assets/css/module-css/funfact.css" rel="stylesheet">
    <link href="assets/css/module-css/cta.css" rel="stylesheet">
    <link href="assets/css/module-css/faq.css" rel="stylesheet">
    <link href="assets/css/module-css/team.css" rel="stylesheet">
    <link href="assets/css/module-css/news.css" rel="stylesheet">
    <link href="assets/css/module-css/education-details.css" rel="stylesheet">

</head>


<!-- page wrapper -->

<body>

    <div class="boxed_wrapper home_5 ltr">

        <!-- preloader -->
        <div hidden class="loader-wrap">
            <div class="preloader">
                <div class="preloader-close"><i class="fal fa-times"></i></div>
                <div id="handle-preloader" class="handle-preloader">
                    <div class="animation-preloader">
                        <div class="spinner"></div>
                        <div class="txt-loading">
                            <span data-text-preloader="e" class="letters-loading">
                                e
                            </span>
                            <span data-text-preloader="q" class="letters-loading">
                                q
                            </span>
                            <span data-text-preloader="u" class="letters-loading">
                                u
                            </span>
                            <span data-text-preloader="a" class="letters-loading">
                                a
                            </span>
                            <span data-text-preloader="t" class="letters-loading">
                                t
                            </span>
                            <span data-text-preloader="o" class="letters-loading">
                                o
                            </span>
                            <span data-text-preloader="r" class="letters-loading">
                                r
                            </span>

                            <span data-text-preloader="r" class="letters-loading">

                            </span>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- preloader end -->


        <!-- main header -->
        <header class="main-header header-style-five">
            <!-- header-top -->
            <div class="header-top">
                <div class="large-container">
                    <div class="top-inner">
                        <div class="option-block">
                            <div class="support-box">
                                <div class="icon-box"><i class="icon-07"></i></div>
                                <a href="tel:<?php echo $phone; ?>"><?php echo $phone; ?></a>
                                <span style="padding-left: 15px;">
                                    <a href="tel:<?php echo $phone2; ?>"><?php echo $phone2; ?></a>
                                </span>
                            </div>

                        </div>
                        <ul class="info-list clearfix">
                            <li><i class="icon-27"></i><?= $address ?></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- header-lower -->
            <div class="header-lower">
                <div class="large-container">
                    <div class="outer-box">
                        <figure class="logo-box"><a href="index.php"><img src="assets/images/logo.png" alt=""></a></figure>
                        <div class="menu-area">
                            <!--Mobile Navigation Toggler-->
                            <div class="mobile-nav-toggler">
                                <i class="icon-bar"></i>
                                <i class="icon-bar"></i>
                                <i class="icon-bar"></i>
                            </div>
                            <nav class="main-menu navbar-expand-md navbar-light clearfix">
                                <div class="collapse navbar-collapse show clearfix" id="navbarSupportedContent">
                                    <ul class="navigation clearfix">
                                        <li class="<?= !empty($homePage) ? 'current' : '' ?> dropdown"><a href="index.php">Home</a></li>
                                        <li class="<?= !empty($aboutPage) ? 'current' : '' ?> dropdown"><a href="about.php">About Us</a></li>
                                        <li class="<?= !empty($servicesPage) ? 'current' : '' ?> dropdown"><a href="services.php">Services</a></li>
                                        <!-- <li class="<?= !empty($blogPage) ? 'current' : '' ?> dropdown"><a href="blog.php">Blog</a></li> -->
                                        <li class="<?= !empty($contactPage) ? 'current' : '' ?> dropdown"><a href="contact.php">Contact Us</a></li>
                                    </ul>
                                </div>
                            </nav>
                        </div>
                        <div class="menu-right-content">
                        </div>
                    </div>
                </div>
            </div>

            <!--sticky Header-->
            <div class="sticky-header">
                <div class="large-container">
                    <div class="outer-box">
                        <figure class="logo-box"><a href="index.php"><img src="assets/images/logo.png" alt=""></a></figure>
                        <div class="menu-area">
                            <nav class="main-menu clearfix">
                            </nav>
                        </div>
                        <div class="menu-right-content">
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- main-header end -->


        <!-- Mobile Menu  -->
        <div class="mobile-menu">
            <div class="menu-backdrop"></div>
            <div class="close-btn"><i class="fas fa-times"></i></div>
            <nav class="menu-box">
                <div class="nav-logo"><a href="index.php"><img src="assets/images/logo-2.png" alt="" title=""></a></div>
                <div class="menu-outer"><!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header--></div>
                <div class="contact-info">
                    <h4>Contact Info</h4>
                    <ul>
                        <li><?php echo $address; ?></li>
                        <li><a href="tel:<?php echo $phone; ?>"><?php echo $phone; ?></a></li>
                        <li><a href="mailto:<?php echo $email; ?>"><?php echo $email; ?></a></li>
                    </ul>
                </div>
                <div class="social-links">
                    <ul class="clearfix">
                    </ul>
                </div>
            </nav>
        </div>
        <!-- End Mobile Menu -->