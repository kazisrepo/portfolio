<?php
session_start(); 
?>
<!doctype html>
<html class="no-js" lang="zxx">

<head>

    <!--========= Required meta tags =========-->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--====== Title ======-->
    <title>Getacleaner - Cleaning Services</title>

    <!--====== Favicon ======-->
    <link rel="shortcut icon" href="assets/images/logo/favicon.png" type="images/x-icon" />
    
    <!--====== CSS Here ======-->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/lightcase.css">
    <link rel="stylesheet" href="assets/css/meanmenu.css">
    <link rel="stylesheet" href="assets/css/nice-select.css">
    <link rel="stylesheet" href="assets/css/odometer.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/default.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
    
</head>

<body> 
    <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->

    <!-- preloader  -->
    <div id="preloader">
        <div id="ctn-preloader" class="ctn-preloader">
            <div class="animation-preloader">
                <div class="spinner"></div>
                
            </div>
            <div class="loader">
                <div class="row">
                    <div class="col-3 loader-section section-left">
                        <div class="bg"></div>
                    </div>
                    <div class="col-3 loader-section section-left">
                        <div class="bg"></div>
                    </div>
                    <div class="col-3 loader-section section-right">
                        <div class="bg"></div>
                    </div>
                    <div class="col-3 loader-section section-right">
                        <div class="bg"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- preloader end -->

    <!-- header start -->
    <header class="site-header">
        <div class="header-top-area">
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-xl-6 col-lg-8 col-md-12 custom-width-note text-center">
                        <div class="header-top-note">
                            <p><strong>Now Hiring:</strong> Work with us and earn $18+ an hour. <strong>Contact us.</strong> Need <a
                                    href="#0">Professional Cleaner?</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="nav-area">
            <div class="container-fluid">
                <div class="row align-items-lg-center align-items-start">
                    <div class="col-xl-3 col-lg-2">
                        <div class="header-info-left-wrap">
                            <div class="header-info-left">
                                <a href="index.php" class="site-logo">
                                    <img src="assets/images/logo/logo-5.png" alt="Get a cleaner" style="width:auto; height:66px">
                                </a>
                                <a href="estimate.php" class="site-btn">Estimate <span class="icon"><i class="fal fa-calendar-alt"></i></span></a>
                            </div>
                            <div class="mobile-menu"></div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-8 d-none d-xl-block d-lg-block">
                        <div class="main-menu">
                            <nav id="mobile-menu">
                                <ul>
                                    <li><a href="index.php">Home </a></li>
                                    <li><a href="estimate.php">Estimate</a></li>
                                    <li><a href="services.php">Services</a></li>
                                    <li><a href="aboutus.php">About us</a></li>
                                    <li><a href="contactus.php">Contact us</a></li>
                                    <li><a href="gallery.php">Gallery</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-my-ayto col-lg-2 d-none d-xl-block d-lg-block">
                        <div class="header-info-right">
                           
                            <div class="header-button-list">
                                <button class="btn search-trigger"><i class="fal fa-search"></i></button>

                                <?php 
                                if (!isset($_SESSION['userid'])) 
                                {
                                    echo("<a class='btn' href='login.php' title='Login'><i class='fal fa-user'></i></a>");
                                }
                                else
                                {
                                   echo("<a class='btn' href='includes/logout.inc.php'  title='Logout'><i class='fal fa-sign-out'></i></a>"); 
                                }

                                ?>
                                
                                <button class="btn hamburger-menu-trigger"><i class="fal fa-bars"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- header end -->
