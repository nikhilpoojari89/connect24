<?php $actual_link = basename($_SERVER['PHP_SELF']); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no,  user-scalable=no" />
    <meta name="author" content="connect24" />
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <title><?php echo $title; ?></title>
    <link rel="icon" href="public/images/icon/favicon.png" type="image/x-icon" sizes="16x16">
    <!-- <link rel="shortcut icon" href="public/images/icon/favicon.ico" type="image/x-icon"> -->
    <link href="public/css/app.css" rel="stylesheet" />
    <link href="assets/plugins/slick/slick.css" rel="stylesheet" />
    <script src="assets/js/font-awesome-5.js"></script>
    <link href="assets/plugins/aos/aos.css" rel="stylesheet" />
</head>

<body>

<!-- Preloader -->
<section>
    <div id="preloader">
        <div id="site-preloader" class="site-preloader">
            <div class="animation-preloader">
                <div class="spinner"></div>
                <div class="txt-loading">
                    <span data-text-preloader="L" class="letters-loading">
                        L
                    </span>
                    <span data-text-preloader="o" class="letters-loading">
                        o
                    </span>
                    <span data-text-preloader="a" class="letters-loading">
                        a
                    </span>
                    <span data-text-preloader="d" class="letters-loading">
                        d
                    </span>
                    <span data-text-preloader="i" class="letters-loading">
                        i
                    </span>
                    <span data-text-preloader="n" class="letters-loading">
                        n
                    </span>
                    <span data-text-preloader="g" class="letters-loading">
                        g
                    </span>
                    <span data-text-preloader="." class="letters-loading">
                        .
                    </span>
                    <span data-text-preloader="." class="letters-loading">
                        .
                    </span>
                    <span data-text-preloader="." class="letters-loading">
                        .
                    </span>
                </div>
            </div>	
        </div>
    </div>
</section>

<header>
    <nav class="navbar navbar-expand-xl py-xl-0" id="mainNav">
        <div class="container-fluid justify-content-xl-around aos-init aos-animate" data-aos="fade-in">

            <a class="navbar-brand d-xl-none" href="index.php">
                <img src="./public/images/png/logo.png" alt="Connect 24 Logo" width="200" title="Connect 24 Logo" />
            </a>
            <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="ham-icon"><i class="fas fa-bars"></i></span>
            </button>

            <div class="navbar-collapse collapse justify-content-start align-self-start py-2 py-xl-0" id="navbarResponsive" style="height: 80px;">
                <div class="navbar-nav gotham-book justify-content-around justify-content-lg-between h-100 w-100 flex-lg-column">
             
                    <div class="row">
                        <div class="col-md-2 d-none d-xl-block order-xl-1">
                            <!-- Logo -->
                            <a class="navbar-brand pb-2" href="index.php">
                                <img src="./public/images/png/logo.png" alt="Connect 24 Logo" width="200" title="Connect 24 Logo" />
                            </a>
                        </div>
                        <div class="col-md-6 col-lg-4 col-xl-3 d-flex order-1 order-lg-1 order-xl-2 justify-content-md-around justify-content-lg-start">
                            <!-- Explore -->
                            <div class="align-self-center">
                                <a href="javascript:void(0);" class="btn btn-se rounded-pill"><i class="fas fa-bars"></i> Explore</a>
                            </div>
    
                            <!-- Custom Select -->
                            <div class="align-self-center ml-5 ml-md-3">
                                <!-- <select class="form-control form-control-sm border-0 text-primary header-custom-select">
                                    <option>Halal Screener</option>
                                </select> -->

                                <div class="nav-item dropdown custom-dd">
                                    <a class="nav-link dropdown-toggle title-color mr-3 mr-xl-2" data-toggle="dropdown" href="#">Halal Screener</a>
                                    <div class="dropdown-menu">
                                        <a href="#" class="dropdown-item">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="etfScreenerchk">
                                                <label class="custom-control-label" for="etfScreenerchk">ETF Screener</label>
                                            </div>
                                        </a>
                                        <a href="#" class="dropdown-item">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="stockScreenerchk">
                                                <label class="custom-control-label" for="stockScreenerchk">Stock Screener</label>
                                            </div>
                                        </a>
                                        <a href="#" class="dropdown-item">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="recentlyViewedchk">
                                                <label class="custom-control-label" for="recentlyViewedchk">Recently Viewed</label>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-4 align-self-center order-3 order-lg-2 order-md-3 mt-3 mt-lg-0">
                            <!-- Search Box -->
                            <div class="form-group has-search mb-0">
                                <span class="fa fa-search form-control-feedback"></span>
                                <input type="text" class="form-control" placeholder="Search any stock globally">
                            </div>  
                        </div>
                        <div class="col-md-6 col-lg-4 col-xl-3 d-flex justify-content-md-around justify-content-lg-end order-2 order-lg-3 order-xl-4 mt-3 mt-md-0">
                            <!-- Join -->
                            <div class="align-self-center">
                                <a href="javascript:void(0);" class="btn btn-se-outline rounded-pill">Join</a>
                            </div>
    
                            <!-- Get the App -->
                            <div class="align-self-center ml-5 ml-md-2">
                                <a href="javascript:void(0);" class="btn btn-se rounded-pill">Get the App</a>
                            </div>
                        </div>
                    </div>
                        
                </div>
            </div>

        </div>
    </nav>
</header>