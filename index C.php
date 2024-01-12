<?php include('include/config.php'); ?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- All CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!-- Owl-Carosel CSS -->
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <!-- Theme Default CSS -->
    <link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <!-- Magnific Popup CSS -->
    <link rel="stylesheet" href="assets/css/magnific-popup.min.css">
    <!-- Meanmenu CSS -->
    <link rel="stylesheet" href="assets/css/meanmenu.min.css">
    <!-- Flat Icon CSS -->
    <link rel="stylesheet" href="assets/css/flaticon.css">
    <!--  Nice Select CSS -->
    <link rel="stylesheet" href="assets/css/nice-select.min.css">
    <!--  Animate CSS -->
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <!--  Slick CSS -->
    <link rel="stylesheet" href="assets/css/slick.min.css">
    <!-- Style CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="assets/css/responsive.css">
    <link rel="stylesheet" href="assets/css/corner-popup.min.css">

    <!-- Title -->
    <title>Mukesh Hyundai - Your one stop for best HYUNDAI Cars</title>
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="assets/img/favicon.pngs">

    <style type="text/css">
        .error {
            color: red;
        }

        .particles-js-canvas-el {
            position: absolute;
            top: 0;
        }

        .image img {
            max-height: 157px;
            object-fit: contain;
        }

        @media screen and (max-width: 1200px) {
            .particles-js-canvas-el {
                display: none;
            }

            #onlythis .carousel-item .banner-item-wrapper {
                padding-top: 0 !important;
            }
        }

        .book_service,
        .test_drive {
            background-color: #002c5f;
            color: #fff;
            padding: 10px 20px;
            margin-right: 20px;
        }

        .slider_home .carousel-control-next-icon,
        .slider_home .carousel-control-prev-icon {
            height: 2.5rem;
            width: 1.5rem;
            background-color: #E0AA3E !important;
            border: inherit !important;
            color: #fff !important;
            top: 40px;
            position: relative;
        }

        #onlythis .carousel-item {
            z-index: 2;
        }

        #onlythis .carousel-item .banner-item-wrapper {
            padding-top: 90px;
        }

        .main-image-box {
            text-align: center;
        }

        #corner-popup,
        #corner-popup .p-col {
            padding: 0;
        }

        .main-image-box a {
            text-align: center;
            background-color: #002c5f;
            color: #fff;
            padding: 10px 20px;
        }

        .main-image-box img {
            width: 100%;
            float: left;
            margin-bottom: 25px;
        }

        .about-img {
            float: right;
        }

        .search_form i {
            position: relative;
            top: 57px;
            left: -90px;
        }

        #newss.news-section button.owl-prev,
        #newss.news-section button.owl-next,
        #testimonialss .testimonial-slider button.owl-prev,
        #testimonialss .testimonial-slider button.owl-next {
            position: absolute !important;
            background-color: #E0AA3E !important;
            border: inherit !important;
            color: #fff !important;
            padding: 10px 12px !important;
        }

        #onlythis .carousel-control-next,
        #onlythis .carousel-control-prev {
            top: 101px;
            width: 17%;
            color: #000;
            opacity: 1;
            z-index: 5;
        }

        .news-section button.owl-prev {
            font-size: 15px !important;

            left: -45px;
            top: 220px;
        }

        .recent-add-section .owl-carousel .owl-nav button.owl-next,
        .recent-add-section .owl-carousel .owl-nav button.owl-prev,
        .recent-add-section .owl-carousel button.owl-dot {
            background-color: #E0AA3E !important;
            border: inherit !important;
            color: #fff !important;
        }

        .owl-carousel .owl-dots.disabled,
        .owl-carousel .owl-nav.disabled {
            display: block;
        }

        .news-section button.owl-next {
            font-size: 15px !important;
            right: -45px;
            top: 220px;
        }

        .carousel-indicators {
            z-index: 30;
            bottom: -65px;
        }

        .carousel-indicators [data-bs-target] {
            background-color: #E0AA3E;
        }

        .testimonial-slider button.owl-prev {


            left: -45px;
            top: 74px;
        }

        .testimonial-slider button.owl-next {

            right: -45px;
            top: 74px;
        }

        #onlythis .carousel-control-next {
            right: 50px;
        }

        #onlythis .carousel-control-prev {
            left: 50px;
        }

        .book_service:hover,
        .test_drive:hover {
            color: #fff;
        }

        .test_drive {
            margin-right: 0px;
        }

        .new_cars_section .single-add-box {
            background-color: #fff;
        }

        .mobile-nav img {
            max-width: 235px;
        }

        .appoinment-section .appoinment-bg {
            background-image: url(https://www.hyundai.com/content/dam/hyundai/in/en/data/hyundai-story/membership/Main-inner-kv-pc.jpg);
            background-position: 33%;
        }

        .perches-form-wrapper .form-wrap,
        .new_cars_section .owl-nav.disabled {
            display: none !important;
        }

        .perches-wrap2 .perhes-form-wrapper2::before,
        .perches-wrap2 .perhes-form-wrapper2::after {
            display: none;
        }

        @media screen and (max-width: 991px) {

            #newss.news-section button.owl-prev,
            #newss.news-section button.owl-next,
            #testimonialss .testimonial-slider button.owl-prev,
            #testimonialss .testimonial-slider button.owl-next {
                position: inherit !important;
            }
        }
    </style>
<!-- Meta Pixel Code -->
<script>
!function(f,b,e,v,n,t,s)
{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};
if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];
s.parentNode.insertBefore(t,s)}(window, document,'script',
'https://connect.facebook.net/en_US/fbevents.js');
fbq('init', '302096206151000');
fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=302096206151000&ev=PageView&noscript=1"
/></noscript>
<!-- End Meta Pixel Code -->
</head>

<body>
    <!-- Start Preloader -->
    <div class="preloader">
        <div class="loader">
            <div class="spinner">
                <div class="double-bounce1"></div>
                <div class="double-bounce2"></div>
            </div>
        </div>
    </div>
    <!-- End Preloader -->

    <!-- Start Navbar Area -->
    <div class="navbar-area">
        <!-- Menu For Mobile Device -->
        <div class="mobile-nav">
            <a href="/" class="logo">
                <img src="https://i.postimg.cc/rmxW5CVS/mukeshwhite.png" alt="Image">
            </a>
        </div>
        <!-- Menu For Desktop Device -->
        <div class="main-nav main-nav2">
            <div class="container">
                <nav class="navbar navbar-expand-md navbar-light">
                    <div class="logo logo2">
                        <a class="navbar-brand" href="/">
                            <img src="https://i.postimg.cc/GtbRqdCX/mukeshlogonew.png" class="logo-2" alt="Logo">
                        </a>
                        <a class="navbar-brand2" href="/">
                            <img src="https://i.postimg.cc/rmxW5CVS/mukeshwhite.png" class="logo-2" alt="Logo" width="190px">
                        </a>
                    </div>
                    <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                        <ul class="navbar-nav navbar-nav2 m-auto">
                            <li class="nav-item">
                                <a href="/" class="nav-link">Home</a>
                            </li>
                            <li class="nav-item">
                                <a href="/cars.html" class="nav-link dropdown-toggle">New Cars</a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item">
                                        <a href="Hyundai-I20-NLine-details.html" class="nav-link">Hyundai I20 N Line</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="Alcazar.html" class="nav-link">Hyundai Alcazar</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="new-i20.html" class="nav-link">Hyundai I20</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="creta.html" class="nav-link">Hyundai Creta</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="grand-i10.html" class="nav-link">Hyundai Grand I10 NIOS</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="aura.html" class="nav-link">Hyundai Aura</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="venue.html" class="nav-link">Hyundai Venue</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="verna.html" class="nav-link">Hyundai Verna</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="tucson.html" class="nav-link">Hyundai Tucson</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="VenueNline.html" class="nav-link">Hyundai Venue N Line</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="kona.html" class="nav-link">Hyundai Kona Electric</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a href="/buyers-guide.html" class="nav-link dropdown-toggle">Buyer’s guide</a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item">
                                        <a href="/buyers-guide.html#outlet_locator" class="nav-link">Outlet Locator</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="/buyers-guide.html#insurance" class="nav-link">Insurance</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="/accessories" class="nav-link">Accessories</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a href="/hyundaipromise" class="nav-link">Hyundai Promise</a>
                            </li>
                            <li class="nav-item">
                                <a href="/booknow" class="nav-link dropdown-toggle">Service</a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item">
                                        <a href="/booknow" class="nav-link">Book service</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="/rsa.html" class="nav-link">Road side assistance</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a href="/finance.html" class="nav-link dropdown-toggle">Finance</a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item">
                                        <a href="/finance.html#emicalculaor" class="nav-link">EMI Calculator</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="/finance.html#documentation" class="nav-link">Documentation</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="/finance.html#Loanenquiry" class="nav-link">Loan enquiry</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a href="/contactus.html" class="nav-link dropdown-toggle">Contact us</a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item">
                                        <a href="/contactus.html#about_us" class="nav-link">About us</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="/contactus.html#Careers" class="nav-link">Careers</a>
                                    </li>

                                    <li class="nav-item">
                                        <a href="/contactus.html#contact_information" class="nav-link">Contact information</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        <!--  <ul class="navbar-nav navbar-nav2">
                                <li class="nav-item">
                                    <a class="nav-link search-ico" href="#"><i class="fa fa-search"></i></a>
                                </li>  
                                <li class="nav-item ">
                                    <a class="nav-link cart-ico" href="#"><i class="flaticon-add-to-cart"></i></a>
                                </li>
                            </ul>-->
                        <a class="book_service" href="booknow">Book Service</a>
                        <a class="test_drive" href="/#book_drive">Test Drive</a>
                    </div>
                </nav>
            </div>
        </div>
    </div>
    <!-- End Navbar Area -->

    <!-- Start SearchBox Modal -->
    <!-- <div class="search">
            <button type="button" class="close">×</button>
            <form>
                <input type="search" value="" class="form-control" placeholder="Type Here..." />
                <button type="submit" class="btn theme-btn"><i class="fa fa-search"></i> Search</button>
            </form>
        </div> -->
    <!-- End SearchBox Modal -->

    <!-- Start Main Banner -->
    <section class="main-banner" id="elements-custom">
        <div id="demo" class="carousel slider_home slide" data-bs-ride="carousel">
            <div id="onlythis" class="container">
                <div class="row">
                    <div class="col-sm-11 mx-auto">
                        <!-- Indicators/dots -->
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
                            <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
                            <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
                            <button type="button" data-bs-target="#demo" data-bs-slide-to="3"></button>
                            <button type="button" data-bs-target="#demo" data-bs-slide-to="4"></button>
                            <button type="button" data-bs-target="#demo" data-bs-slide-to="5"></button>
                            <button type="button" data-bs-target="#demo" data-bs-slide-to="6"></button>
                        </div>

                        <!-- The slideshow/carousel -->
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="banner-item-wrapper">
                                    <div class="row align-items-center m-0">
                                        <div class="col-lg-6 p-0">
                                            <div class="single-banner">
                                                <h1>Find Your Next CAR at Mukesh Hyundai</h1>
                                                <span>Kolkata's First Hyundai Dealership est. 1998</span>
                                                <div class="slider-button">
                                                    <a href="testdrive" class="custom-btn1 banner-btn1">Test Drive</a>
                                                    <a href="booknow" class="custom-btn2 banner-btn2">Book Service</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 p-0">
                                            <div class="single-banner right-item">
                                                <div class="shape">
                                                    <img src="https://i.postimg.cc/fTD5zM5Z/28.jpg" alt="Image">
                                                </div>
                                                <div class="shape3">

                                                    <div class="play-video">
                                                        <a class="popup-youtube play-video wow zoomIn" data-wow-duration=".80s" data-wow-delay=".15s" href="/assets/Render-HomePage.mp4">
                                                            <i class="flaticon-play"></i>
                                                        </a><br>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="shape2">
                                        <img src="assets/img/slider/shape2.png" alt="Image">
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="banner-item-wrapper">
                                    <div class="row align-items-center m-0">
                                        <div class="col-lg-12 p-0">
                                            <img src="/assets/banner.jpeg">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="banner-item-wrapper">
                                    <div class="row align-items-center m-0">
                                        <div class="col-lg-12 p-0">
                                            <img src="assets/img/slider/venue-n-line-homepage-top-image-pc1.jpeg">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="banner-item-wrapper">
                                    <div class="row align-items-center m-0">
                                        <div class="col-lg-12 p-0">
                                            <img src="assets/img/slider/Hyundai-kona-homepage-pc.jpeg">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="banner-item-wrapper">
                                    <div class="row align-items-center m-0">
                                        <div class="col-lg-12 p-0">
                                            <a href="https://clicktobuy.hyundai.co.in/IONIQ/#/selectacar">
                                                <img src="https://i.postimg.cc/yNr4mYJn/Banner-Image-Mukesh-Butotn.jpg">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="banner-item-wrapper">
                                    <div class="row align-items-center m-0">
                                        <div class="col-lg-12 p-0">
                                            <img src="https://i.postimg.cc/Wbxcqh39/homepage-revised-tucson-banner-pc.jpg">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="banner-item-wrapper">
                                    <div class="row align-items-center m-0">
                                        <div class="col-lg-12 p-0">
                                            <img src="https://i.postimg.cc/9FDjfGWR/venue-home-orignal-pc.jpg">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Left and right controls/icons -->

                    </div>
                </div>
            </div>
        </div>

        <!-- Perches Section -->
        <div class="perches-section perches-wrap2">
            <div class="container">
                <div class="perches-form-wrapper perhes-form-wrapper2">
                    <form>
                        <div class="form-wrap">
                            <div class="single-select">
                                <h3>make</h3>
                                <select class="form-control">
                                    <option data-display="any">any</option>
                                    <option value="1">one</option>
                                    <option value="2">two</option>
                                    <option value="3">three</option>
                                    <option value="4">four</option>
                                </select>
                            </div>
                            <div class="single-select">
                                <h3>model</h3>
                                <select class="form-control">
                                    <option data-display="select">select</option>
                                    <option value="1">model</option>
                                    <option value="2">two</option>
                                    <option value="3">three</option>
                                    <option value="4">four</option>
                                </select>
                            </div>
                            <div class="single-select">
                                <h3>price</h3>
                                <select class="form-control">
                                    <option data-display="Rs. 3200-Rs. 82000">Rs. 3200-Rs. 82000</option>
                                    <option value="1">Rs. 3200-Rs. 32000</option>
                                    <option value="2">Rs. 3400-Rs. 56000</option>
                                    <option value="2">Rs. 1200-Rs. 12000</option>
                                    <option value="2">Rs. 0500-Rs. 90000</option>
                                </select>
                            </div>
                            <div class="submit-button">
                                <button type="submit" class="search-button">search</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- End Perches Section -->
    </section>
    <!-- End Main Slider -->

    <!-- Start Offer Section -->
    <section class="offer-section pt-100 pb-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="single-offer single-offer-2">
                        <i class="flaticon-seat"></i>
                        <h3>Trusted Car Dealer</h3>
                        <p>Mukesh Hyundai is the largest and oldest automobile dealership in eastern India. It started its journey in 1998 in Kolkata as West Bengal's first Hyundai dealership.</p>
                        <div class="offer-shape">
                            <i class="flaticon-seat"></i>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-offer single-offer-2">
                        <i class="flaticon-steering-wheel"></i>
                        <h3>Service & Maintenance</h3>
                        <p>Today we have multiple workshops at multiple locations across Assam & West Bengal. It won the ‘Best Overall Service Performance Award’ in 2020 by Hyundai India.</p>
                        <div class="offer-shape">
                            <i class="flaticon-steering-wheel"></i>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6  offset-md-3 offset-lg-0">
                    <div class="single-offer single-offer-2">
                        <i class="flaticon-technical-support"></i>
                        <h3>Customer Service</h3>
                        <p>Our team consist of highly qualified and motivated individuals to make your car purchasing process as hassle free as possible.</p>
                        <div class="offer-shape">
                            <i class="flaticon-technical-support"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Section -->

    <!-- Start About Section -->
    <section class="about-section pb-100">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="ab-left">
                        <div class="section-title">
                            <h2>about the Company</h2>
                            <p>We are Trusted Name in Car Sales & Services</p>
                            <span>Company</span>
                        </div>
                        <div class="single-about">
                            <div class="text">
                                <p>Mukesh Hyundai is the oldest and largest Hyundai dealer of Eastern India with operations in West Bengal and Assam. Our journey started in 1998 in Kolkata and today we have more than 20 outlets including showrooms and workshops at multiple locations across the two states. Our dealership is one of the most awarded dealerships in India having twice bagged the national award for the best dealership. The success of our dealership in due the customer centric approach we adopt in all our operations. We are sure you will have a memorable experience dealing with us. </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-img">
                        <img src="assets/img/about/about-us-content.jpg" alt="Image">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End About Section -->

    <!-- Start Recently Added -->
    <section class="recent-add-section pt-100 pb-70 new_cars_section">
        <div class="container">
            <div class="section-title text-left">
                <h2>New Cars</h2>
                <span>new</span>
            </div>
            <div class="add-slider owl-carousel owl-theme">
                <div class="row">
                    <div class="col-md-6 col-lg-4">
                        <div class="single-add-box">
                            <div class="image">
                                <a href="Hyundai-I20-NLine-details.html">
                                    <img src="https://i.postimg.cc/HxM19M23/BACKGROUND-i20-N-Line.png" alt="Image">
                                </a>
                            </div>
                            <div class="image-caption-wrapper">
                                <div class="add-box-content">
                                    <a href="Hyundai-I20-NLine-details.html">
                                        <h3>Hyundai i20 N Line</h3>
                                    </a>
                                    <div class="info-list">
                                        <ul>
                                            <li><i class="flaticon-car"></i>new</li>
                                            <li><i class="flaticon-shifter"></i>Manual</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="add-box-bottom">
                                    <a href="Hyundai-I20-NLine-details.html">
                                        <h5>Rs.9.96 - 12.02 Lakh</h5>
                                    </a>
                                    <ul class="react">
                                        <li><i class="flaticon-heart"></i></li>
                                        <li><i class="flaticon-speed-meter"></i></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="single-add-box">
                            <div class="image">
                                <a href="Alcazar.html">
                                    <img src="https://i.postimg.cc/zGPmm720/BACKGROUND-ALCAZAR.png" alt="Image">
                                </a>
                            </div>
                            <div class="image-caption-wrapper">
                                <div class="add-box-content">
                                    <a href="Alcazar.html">
                                        <h3>alcazar</h3>
                                    </a>
                                    <div class="info-list">
                                        <ul>
                                            <li><i class="flaticon-car"></i>new</li>
                                            <li><i class="flaticon-shifter"></i>Manual</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="add-box-bottom">
                                    <a href="Alcazar.html">
                                        <h5>Rs.15.89 - 20.25 Lakh</h5>
                                    </a>
                                    <ul class="react">
                                        <li><i class="flaticon-heart"></i></li>
                                        <li><i class="flaticon-speed-meter"></i></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="single-add-box">
                            <div class="image">
                                <a href="new-i20.html">
                                    <img src="https://i.postimg.cc/gjBycw9F/BACKGROUND-i20.png" alt="Image">
                                </a>
                            </div>
                            <div class="image-caption-wrapper">
                                <div class="add-box-content">
                                    <a href="new-i20.html">
                                        <h3>Hyundai i20</h3>
                                    </a>
                                    <div class="info-list">
                                        <ul>
                                            <li><i class="flaticon-car"></i>new</li>
                                            <li><i class="flaticon-shifter"></i>Manual</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="add-box-bottom">
                                    <a href="new-i20.html">
                                        <h5>Rs. 7.07 - 11.62 Lakh</h5>
                                    </a>
                                    <ul class="react">
                                        <li><i class="flaticon-heart"></i></li>
                                        <li><i class="flaticon-speed-meter"></i></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="single-add-box">
                            <div class="image">
                                <a href="creta.html">
                                    <img src="https://i.postimg.cc/1RjRfxQD/BACKGROUND-CRETA.png" alt="Image">
                                </a>
                            </div>
                            <div class="image-caption-wrapper">
                                <div class="add-box-content">
                                    <a href="creta.html">
                                        <h3>Hyundai Creta</h3>
                                    </a>
                                    <div class="info-list">
                                        <ul>
                                            <li><i class="flaticon-car"></i>new</li>
                                            <li><i class="flaticon-shifter"></i>Manual</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="add-box-bottom">
                                    <a href="creta.html">
                                        <h5>Rs.10.44 - 18.18 Lakh</h5>
                                    </a>
                                    <ul class="react">
                                        <li><i class="flaticon-heart"></i></li>
                                        <li><i class="flaticon-speed-meter"></i></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="single-add-box">
                            <div class="image">
                                <a href="grand-i10.html">
                                    <img src="./assets/img/gallery/nios.png" alt="Image">
                                </a>
                            </div>
                            <div class="image-caption-wrapper">
                                <div class="add-box-content">
                                    <a href="grand-i10.html">
                                        <h3>Hyundai Grand i10 NIOS</h3>
                                    </a>
                                    <div class="info-list">
                                        <ul>
                                            <li><i class="flaticon-car"></i>new</li>
                                            <li><i class="flaticon-shifter"></i>Manual</li>

                                        </ul>
                                    </div>
                                </div>
                                <div class="add-box-bottom">
                                    <a href="grand-i10.html">
                                        <h5>Rs.5.68 - 8.46 Lakh</h5>
                                    </a>
                                    <ul class="react">
                                        <li><i class="flaticon-heart"></i></li>
                                        <li><i class="flaticon-speed-meter"></i></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="single-add-box">
                            <div class="image">
                                <a href="aura.html">
                                    <img src="./assets/img/gallery/aura.png" alt="Image">
                                </a>
                            </div>
                            <div class="image-caption-wrapper">
                                <div class="add-box-content">
                                    <a href="aura.html">
                                        <h3>Hyundai Aura</h3>
                                    </a>
                                    <div class="info-list">
                                        <ul>
                                            <li><i class="flaticon-car"></i>new</li>
                                            <li><i class="flaticon-shifter"></i>Manual</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="add-box-bottom">
                                    <a href="aura.html">
                                        <h5>Rs. 6.29 - 8.57 Lakh</h5>
                                    </a>
                                    <ul class="react">
                                        <li><i class="flaticon-heart"></i></li>
                                        <li><i class="flaticon-speed-meter"></i></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="single-add-box">
                            <div class="image">
                                <a href="venue.html">
                                    <img src="https://i.postimg.cc/hjnsL3Rr/BACKGROUND-VENUE.png" alt="Image">
                                </a>
                            </div>
                            <div class="image-caption-wrapper">
                                <div class="add-box-content">
                                    <a href="venue.html">
                                        <h3>Hyundai Venue</h3>
                                    </a>
                                    <div class="info-list">
                                        <ul>
                                            <li><i class="flaticon-car"></i>new</li>
                                            <li><i class="flaticon-shifter"></i>Manual</li>

                                        </ul>
                                    </div>
                                </div>
                                <div class="add-box-bottom">
                                    <a href="venue.html">
                                        <h5>Rs. 7.53 - 12.72 Lakh</h5>
                                    </a>
                                    <ul class="react">
                                        <li><i class="flaticon-heart"></i></li>
                                        <li><i class="flaticon-speed-meter"></i></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="single-add-box">
                            <div class="image">
                                <a href="verna.html">
                                    <img src="./assets/img/verna/HOME PAGE - VERNA.png" alt="Image">
                                </a>
                            </div>
                            <div class="image-caption-wrapper">
                                <div class="add-box-content">
                                    <a href="verna.html">
                                        <h3>Hyundai Verna</h3>
                                    </a>
                                    <div class="info-list">
                                        <ul>
                                            <li><i class="flaticon-car"></i>new</li>
                                            <li><i class="flaticon-shifter"></i>Manual</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="add-box-bottom">
                                    <a href="verna.html">
                                        <h5>Rs. 9.44 - 15.53 Lakh</h5>
                                    </a>
                                    <ul class="react">
                                        <li><i class="flaticon-heart"></i></li>
                                        <li><i class="flaticon-speed-meter"></i></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="single-add-box">
                            <div class="image">
                                <a href="tucson.html">
                                    <img src="https://i.postimg.cc/RFPtWPSq/BACKGROUND-TUCSON.png" alt="Image">
                                </a>
                            </div>
                            <div class="image-caption-wrapper">
                                <div class="add-box-content">
                                    <a href="tucson.html">
                                        <h3>Hyundai Tucson</h3>
                                    </a>
                                    <div class="info-list">
                                        <ul>
                                            <li><i class="flaticon-car"></i>new</li>
                                            <li><i class="flaticon-shifter"></i>Manual</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="add-box-bottom">
                                    <a href="tucson.html">
                                        <h5>Rs.27.70 - 34.54 Lakh</h5>
                                    </a>
                                    <ul class="react">
                                        <li><i class="flaticon-heart"></i></li>
                                        <li><i class="flaticon-speed-meter"></i></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="single-add-box">
                            <div class="image">
                                <a href="VenueNline.html">
                                    <img src="https://i.postimg.cc/CKScyLc0/BACKGROUND-VENUE-N-LINE.png" alt="Image">
                                </a>
                            </div>
                            <div class="image-caption-wrapper">
                                <div class="add-box-content">
                                    <a href="VenueNline.html">
                                        <h3>Hyundai Venue N Line</h3>
                                    </a>
                                    <div class="info-list">
                                        <ul>
                                            <li><i class="flaticon-car"></i>new</li>
                                            <li><i class="flaticon-shifter"></i>Manual</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="add-box-bottom">
                                    <a href="VenueNline.html">
                                        <h5>Rs. 12.16 - 13.30 Lakh</h5>
                                    </a>
                                    <ul class="react">
                                        <li><i class="flaticon-heart"></i></li>
                                        <li><i class="flaticon-speed-meter"></i></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="single-add-box">
                            <div class="image">
                                <a href="kona.html">
                                    <img src="https://i.postimg.cc/m2Q3JD9B/BACKGROUND-KONA.png" alt="Image">
                                </a>
                            </div>
                            <div class="image-caption-wrapper">
                                <div class="add-box-content">
                                    <a href="kona.html">
                                        <h3>Hyundai Kona Electric</h3>
                                    </a>
                                    <div class="info-list">
                                        <ul>
                                            <li><i class="flaticon-car"></i>new</li>
                                            <li><i class="flaticon-shifter"></i>Manual</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="add-box-bottom">
                                    <a href="kona.html">
                                        <h5>Rs. 23.84 - 24.03 Lakh*</h5>
                                    </a>
                                    <ul class="react">
                                        <li><i class="flaticon-heart"></i></li>
                                        <li><i class="flaticon-speed-meter"></i></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="single-add-box">
                            <div class="image">
                                <a href="exter.html">
                                    <img src="/assets/img/exter-images/smallimageexter2_5-removebg-preview.png" alt="Image">
                                </a>
                            </div>
                            <div class="image-caption-wrapper">
                                <div class="add-box-content">
                                    <a href="exter.html">
                                        <h3>Hyundai EXTER</h3>
                                    </a>
                                    <div class="info-list">
                                        <ul>
                                            <li><i class="flaticon-car"></i>new</li>
                                            <li><i class="flaticon-shifter"></i>Manual</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="add-box-bottom">
                                    <a href="exter.html">
                                        <h5>Rs. 5,99,900 - 10,14,990 Lakh*</h5>
                                    </a>
                                    <ul class="react">
                                        <li><i class="flaticon-heart"></i></li>
                                        <li><i class="flaticon-speed-meter"></i></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
    </section>
    <!-- End Recently Added -->

    <!-- Start Latest Motors -->
    <!-- End Latest Motors -->

    <!-- Start Services Section -->
    <section class="services-section2 pb-5">
        <div class="container">
            <div class="section-title text-center">
                <h2>services</h2>
                <span>services</span>
            </div>
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="single-services-img">
                        <img src="assets/img/services.jpg" alt="Image">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="single-services">
                        <!-- <h3>Our Offerings</h3> -->
                        <p>Today we have multiple workshops at multiple locations across Assam & West Bengal. It won the ‘Best Overall Service Performance Award’ in 2020 by Hyundai India. We offer the following:
                        </p>

                        <div class="service-list">
                            <ul>
                                <li><i class="fa fa-check-circle-o" aria-hidden="true"></i>Road side assistance</li>
                                <li><i class="fa fa-check-circle-o" aria-hidden="true"></i>Car service</li>
                                <li><i class="fa fa-check-circle-o" aria-hidden="true"></i>Pick and drop service</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Services Section  -->

    <!-- Start Mission Section  -->
    <section class="mission-section ptb-100">
        <div class="container">
            <div class="section-title text-center">
                <h2>Our Mission</h2>
                <span>mission</span>
            </div>
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="single-mission">
                        <h3 class="mission-title">Mukesh Hyundai Provides Best Automotive Experience</h3>
                        <p>To become a trusted lifetime partner of our customers, we will bring a new perspective to automobiles through innovative mobility solutions based on human-centric, eco-friendly technologies and services.</p>

                        <div class="mission-service">
                            <i class="flaticon-money"></i>
                            <div class="text">
                                <h3>In House Financing</h3>
                            </div>
                        </div>
                        <div class="mission-service">
                            <i class="flaticon-like"></i>
                            <div class="text">
                                <h3>Trusted Car Dealer</h3>
                            </div>
                        </div>
                        <div class="mission-service">
                            <i class="flaticon-settings"></i>
                            <div class="text">
                                <h3>Service & Maintenance</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="single-mission-img">
                        <img src="assets/img/ourmission.jpg" alt="Shape Image">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Mission Section  -->

    <!-- Start Counter Section -->
    <section class="counter-section ptb-100" id="particles-js">
        <div class="container">
            <div class="counter-title text-center">
                <span>Are you looking </span>
                <h2>To Buy A Car?</h2>
                <p>Browse through our wide range of cars, engineered to move the human spirit.</p>
                <!-- <form class="search_form">
                       <i class="fa fa-search"></i> <input type="text" class="form-control" placeholder="Search Your Car">
                    </form> -->
            </div>
            <div class="row">
                <div class="col-sm-6 col-md-6 col-lg-4">
                    <div class="single-counter media">
                        <i class="flaticon-support"></i>
                        <div class="average">
                            <h2>
                                <span class="counter">10,0000</span>
                                +
                            </h2>
                            <h6>Happy Customer</h6>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-4">
                    <div class="single-counter media">
                        <i class="flaticon-delivery-truck"></i>
                        <div class="average">
                            <h2>
                                <span class="counter">29,000</span>
                                +
                            </h2>
                            <h6>Vehicles We Have Done</h6>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6 offset-sm-3 offset-lg-0 col-lg-4">
                    <div class="single-counter media">
                        <i class="flaticon-technical-support"></i>
                        <div class="average">
                            <h2>
                                <span class="counter">52,870</span>
                                +
                            </h2>
                            <h6>Vehicles Done</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Counter Section -->

    <!-- Start Inventory Section -->
    <!-- <section class="inventory-section pt-100 pb-70">
            <div class="container">
                <div class="section-title text-center">
                    <h2>Certified Used Cars</h2>
                    <p>Discover Mukesh Hyundai Premium Cars</p>
                    <span>Inventory</span>
                </div>
                 <div class="row">
                    <div class="col-md-6 col-lg-3">
                        <div class="single-add-box">    
                            <div class="image">
                                <a href="#">
                                    <img src="assets/img/latest-motors/1.jpg" alt="Image">
                                </a>
                            </div> 
                            <div class="image-caption-wrapper border-caption">
                                <div class="add-box-content">
                                    <a href="#"><h3>Alfa Romeo12C GTS</h3></a>
                                    <div class="info-list">
                                        <ul>
                                            <li><i class="flaticon-car"></i>new</li>
                                            <li><i class="flaticon-shifter"></i> Manual</li>
                                            <li><i class="flaticon-facebook-placeholder-for-locate-places-on-maps"></i>Australia</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="add-box-bottom">
                                    <h5>Rs. 22,000</h5>
                                    <ul class="react">
                                        <li><a href="#"><i class="flaticon-heart"></i></a></li>
                                        <li><a href="#"><i class="flaticon-speed-meter"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="single-add-box">    
                            <div class="image">
                                <a href="#">
                                    <img src="assets/img/latest-motors/2.jpg" alt="Image">
                                </a>
                            </div>
                            <div class="image-caption-wrapper border-caption">
                                <div class="add-box-content">
                                    <a href="#"><h3>Jaguar XE SV Project8</h3></a>
                                    <div class="info-list">
                                        <ul>
                                            <li><i class="flaticon-car"></i>new</li>
                                            <li><i class="flaticon-shifter"></i> Manual</li>
                                            <li><i class="flaticon-facebook-placeholder-for-locate-places-on-maps"></i>australia</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="add-box-bottom">
                                    <h5>Rs. 20,000</h5>
                                    <ul class="react">
                                        <li><a href="#"><i class="flaticon-heart"></i></a></li>
                                        <li><a href="#"><i class="flaticon-speed-meter"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="single-add-box">    
                            <div class="image">
                                <a href="#">
                                    <img src="assets/img/latest-motors/3.jpg" alt="Image">
                                </a>
                            </div>
                            <div class="image-caption-wrapper border-caption">
                                <div class="add-box-content">
                                    <a href="#"><h3>2019 BMW M2 Competition</h3></a>
                                    <div class="info-list">
                                        <ul>
                                            <li><i class="flaticon-car"></i>new</li>
                                            <li><i class="flaticon-shifter"></i> Manual</li>
                                            <li><i class="flaticon-facebook-placeholder-for-locate-places-on-maps"></i>australia</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="add-box-bottom">
                                    <h5>Rs. 25,000</h5>
                                    <ul class="react">
                                        <li><a href="#"><i class="flaticon-heart"></i></a></li>
                                        <li><a href="#"><i class="flaticon-speed-meter"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="single-add-box">    
                            <div class="image">
                                <a href="#">
                                    <img src="assets/img/latest-motors/4.jpg" alt="Image">
                                </a>
                            </div>
                            <div class="image-caption-wrapper border-caption">
                                <div class="add-box-content">
                                    <a href="#"><h3>Alfa Romeo 12C GTS</h3></a>
                                    <div class="info-list">
                                        <ul>
                                            <li><i class="flaticon-car"></i>new</li>
                                            <li><i class="flaticon-shifter"></i>Manual</li>
                                            <li><i class="flaticon-facebook-placeholder-for-locate-places-on-maps"></i>australia</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="add-box-bottom">
                                    <h5>Rs. 28,000</h5>
                                    <ul class="react">
                                        <li><a href="#"><i class="flaticon-heart"></i></a></li>
                                        <li><a href="#"><i class="flaticon-speed-meter"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->
    <!-- End Inventory Section -->

    <!-- Start Gallery Section -->
    <!-- End Gallery Section -->

    <!-- Start Testimonial Section -->
    <section id="testimonialss" class="testimonial-section testimonial-2 pt-100">
        <div class="container">
            <div class="section-title text-center">
                <h2>testimonials</h2>
                <p>What Customers Say About Us</p>
                <span>testimonials</span>
            </div>
            <div class="testimonial-slider owl-carousel owl-theme">
                <div class="testimonial-single-item text-center">
                    <i class="flaticon-quote"></i>
                    <p>Bought our new i20 Asta (O) from Mukesh Hyundai VIP showroom. Sales executive Shounak Pandit guided us really well and made our buying experience really amazing! Thank you Shounak and team!!!
                    </p>
                    <div class="profile">
                        <h3>Roshni Talukdar</h3>
                    </div>
                </div>
                <div class="testimonial-single-item text-center">
                    <i class="flaticon-quote"></i>
                    <p>We are extremely satisfied with the services of Mukesh Hyundai. We purchased i20 just because of one person who is Mr Anupam Tewari (sales person). His politeness and professionalism is really appreciable.
                    </p>
                    <div class="profile">
                        <h3>Bikash Saha</h3>
                    </div>
                </div>
                <div class="testimonial-single-item text-center">
                    <i class="flaticon-quote"></i>
                    <p>I had a great experience at Mukesh Hyundai Hazra .The sales consultant Deepraj Dutta was super helpful in helping me choose the right car, guide me on finances, arrange all paperwork and deliver the car before time. Everything was so hassle-free.
                    </p>
                    <div class="profile">
                        <h3>Jaydip Sengupta</h3>
                    </div>
                </div>
                <div class="testimonial-single-item text-center">
                    <i class="flaticon-quote"></i>
                    <p>Abdul Samad has been helpful in getting the Creta car delivered within 15 days of making the booking. He is an asset to Mukesh Hyundai and will help to add sales numbers in future.
                    </p>
                    <div class="profile">
                        <h3>Rajesh Singh</h3>
                    </div>
                </div>
                <div class="testimonial-single-item text-center">
                    <i class="flaticon-quote"></i>
                    <p>We purchased Verna from Mukesh Hyundai Hazra and would like to mention Mrs. Munmun Das, who was dealing with our car, was very helpful. She responded every time and resolve our query whenever we required. Thanks for the great experience!
                    </p>
                    <div class="profile">
                        <h3>Anirban Banik</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Testimonial Section -->

    <!-- Start Appointment Section -->
    <section id="book_drive" class="appoinment-section pt-100">
        <div class="container">
            <div class="section-title text-center">
                <h2>Book a Test Drive</h2>
                <p>Book test drive of your favourite car</p>
                <span>Appointment</span>
            </div>
            <div class="appoinment-wrapper">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="appoinment-bg">
                            <div class="d-table">

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="appoinment-form">
                            <form action="process.php" method="POST" id="booknow">
                                <input type="hidden" name="action" value="testdrive">
                                <div class="form-group">
                                    <input type="text" name="names" class="form-control" placeholder="name *" required>
                                </div>
                                <div class="form-group">
                                    <input type="email" name="email" class="form-control" placeholder="email *" required>
                                </div>
                                <div class="form-group">
                                    <input type="text" name="phone" class="form-control" placeholder="phone *" required>
                                </div>
                                <div class="form-group">
                                    <input type="text" name="address" class="form-control" placeholder="Address *" required>
                                </div>
                                <div class="form-group">
                                    <label>Select Date *</label>
                                    <input style="width: 100%; padding: 10px 10px 10px 14px;" type="date" id="cars" name="date" required>
                                </div>
                                <div class="form-group">
                                    <label>Select Time *</label>
                                    <input style="width: 100%; padding: 10px 10px 10px 14px;" type="time" id="carsti" name="time" required>
                                </div>
                                <div class="form-group">
                                    <select class="form-control" name="preferred_outlet" required>
                                        <option data-display="Preferred Outlet *">Preferred Outlet</option>
                                        <option value="VIP">Mukesh Hyundai VIP Showroom</option>
                                        <option value="Khardah">Mukesh Hyundai Khardah Showroom</option>
                                        <option value="SERAMPORE">Mukesh Hyundai SERAMPORE Showroom</option>
                                        <option value="Birati">Mukesh Hyundai Birati Showroom</option>
                                        <option value="HAZRA">Mukesh Hyundai HAZRA Showroom</option>
                                        <option value="Guwahati">Mukesh Hyundai Guwahati Showroom</option>
                                        <option value="Bijoynagar">Mukesh Hyundai Bijoynagar Showroom</option>
                                        <option value="Rangia">Mukesh Hyundai Rangia Showroom</option>
                                        <option value="Barpeta">Mukesh Hyundai Barpeta Showroom</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <select class="form-control" name="car" required>
                                        <option data-display="Car Model *">Car</option>
                                        <option value="Hyundai i20 N Line">Hyundai i20 N Line</option>
                                        <option value="Alcazar">Hyundai Alcazar</option>
                                        <option value="Hyundai i20">Hyundai i20</option>
                                        <option value="Hyundai Creta">Hyundai Creta</option>
                                        <option value="Hyundai Grand i10 NIOS">Hyundai Grand i10 NIOS</option>
                                        <option value="Hyundai Aura">Hyundai Aura</option>
                                        <option value="Hyundai Venue">Hyundai Venue</option>
                                        <option value="Hyundai Verna">Hyundai Verna</option>
                                        <option value="Hyundai Tucson">Hyundai Tucson</option>
                                        <option value="Hyundai Tucson">Hyundai Venue N Line</option>
                                        <option value="Hyundai Tucson">Hyundai Kona Electric</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <input type="text" name="pincode" class="form-control" placeholder="Test Drive Pincode *" required>
                                </div>
                                <div class="form-group">
                                    <textarea class="form-control" name="message" id="exampleFormControlTextarea1" rows="3" placeholder="message" required></textarea>
                                </div>
                                <button type="submit" class="custom-btn2">send message</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Appointment Section -->

    <!-- Start Choose Section -->
    <section class="choose-section pb-70 pt-100">
        <div class="container">
            <div class="section-title text-center">
                <h2>Why Choose Us</h2>
                <p>We really do treat you like we would like to be treated and because of that, our customers freely and happily tell the world about us.</p>
                <span>Choose Us</span>
            </div>
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="row">
                        <div class="col-md-6 col-lg-6 choose">
                            <div class="single-choose">
                                <i class="flaticon-shifter"></i>
                                <div class="text">
                                    <h3>Affordable</h3>
                                    <p>Get the best prices and offers on the New/ Certified cars.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6 choose">
                            <div class="single-choose">
                                <i class="flaticon-car-1"></i>
                                <div class="text">
                                    <h3>Car Service</h3>
                                    <p>For the best overall service, you can trust us.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6 choose">
                            <div class="single-choose">
                                <i class="flaticon-support"></i>
                                <div class="text">
                                    <h3>Loyalty</h3>
                                    <p>Our service doesn’t end with a car purchase, It starts there.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6 choose">
                            <div class="single-choose">
                                <i class="flaticon-gears"></i>
                                <div class="text">
                                    <h3>Experience</h3>
                                    <p>We are the oldest Hyundai dealership in eastern India.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="single-choose-image">
                        <img src="assets/img/whychooseus.jpg" alt="Image">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Choose Section -->

    <!-- Start News Section -->
    <section id="newss" class="news-section ptb-100">
        <div class="container">
            <div class="section-title text-center">
                <h2>news</h2>
                <span>latest news</span>
            </div>
            <div class="news-slider owl-carousel owl-theme">
                <div class="single-news">
                    <div class="image">
                        <a href="https://auto.hindustantimes.com/auto/cars/hyundai-venue-n-line-to-launch-in-india-tomorrow-price-expectations-41662348034435.html">
                            <img src="https://www.hanshyundai.com/assets/uploads/hyundai-color7143.png" alt="Image">
                        </a>
                    </div>
                    <div class="image-cap">
                        <span>
                            <i class="fa fa-calendar"></i>
                            05 Sep 2022
                        </span>
                        <a href="https://auto.hindustantimes.com/auto/cars/hyundai-venue-n-line-to-launch-in-india-tomorrow-price-expectations-41662348034435.html">
                            <h3>Hyundai Venue N Line to launch in India tomorrow: Price expectations</h3>
                        </a>
                        <p>Hyundai Venue N Line will be based on the standard Venue SUV which received a major update a few weeks ago. The N Line version of Venue will get cosmetic updates and a tweaked transmission to offer a sportier ride.</p>
                        <a href="https://auto.hindustantimes.com/auto/cars/hyundai-venue-n-line-to-launch-in-india-tomorrow-price-expectations-41662348034435.html" class="read-more">read more</a>
                    </div>
                </div>
                <div class="single-news">
                    <div class="image">
                        <a href="https://www.financialexpress.com/auto/car-news/2022-hyundai-venue-n-line-launch-expected-price-specs-features/2656202/">
                            <img src="https://www.financialexpress.com/wp-content/uploads/2022/08/Hyundai-Venue-N-Line-1.jpg" alt="Image">
                        </a>
                    </div>
                    <div class="image-cap">
                        <span>
                            <i class="fa fa-calendar"></i>
                            06 Sep 2022
                        </span>
                        <a href="https://www.financialexpress.com/auto/car-news/2022-hyundai-venue-n-line-launch-expected-price-specs-features/2656202/">
                            <h3>2022 Hyundai Venue N Line launch today: Expected price, specs, features</h3>
                        </a>
                        <p>The new 2022 Hyundai Venue N Line will be launched in India today, i.e. on September 6. Check out the expected price, specifications, and features of the sporty sub-compact SUV here.</p>
                        <a href="https://www.financialexpress.com/auto/car-news/2022-hyundai-venue-n-line-launch-expected-price-specs-features/2656202/" class="read-more">read more</a>
                    </div>
                </div>
                <div class="single-news">
                    <div class="image">
                        <a href="https://timesofindia.indiatimes.com/auto/cars/2022-hyundai-venue-n-line-launch-tomorrow-key-changes-in-this-sportier-suv/articleshow/93998377.cms">
                            <img src="https://static.toiimg.com/thumb/msid-93998534,imgsize-367336,width-400,resizemode-4/93998534.jpg" alt="Image">
                        </a>
                    </div>
                    <div class="image-cap">
                        <span>
                            <i class="fa fa-calendar"></i>
                            05 Sep 2022
                        </span>
                        <a href="https://timesofindia.indiatimes.com/auto/cars/2022-hyundai-venue-n-line-launch-tomorrow-key-changes-in-this-sportier-suv/articleshow/93998377.cms">
                            <h3>2022 Hyundai Venue N-Line launch tomorrow: Key changes in this Sportier SUV</h3>
                        </a>
                        <p>Hyundai India is all set to launch the sportier version of the Venue sub-compact SUV, Venue N-Line to the Indian market tomorrow.</p>
                        <a href="https://timesofindia.indiatimes.com/auto/cars/2022-hyundai-venue-n-line-launch-tomorrow-key-changes-in-this-sportier-suv/articleshow/93998377.cms" class="read-more">read more</a>
                    </div>
                </div>
                <div class="single-news">
                    <div class="image">
                        <a href="https://www.autocarindia.com/car-news/why-hyundai-axed-plans-for-a-7-seater-tucson-for-india-425348">
                            <img src="https://cdni.autocarindia.com/Utils/ImageResizer.ashx?n=https://cdni.autocarindia.com/ExtraImages/20220818030350_Tucson.jpg&w=700&q=90&c=1" alt="Image">
                        </a>
                    </div>
                    <div class="image-cap">
                        <span>
                            <i class="fa fa-calendar"></i>
                            Aug 20, 2022
                        </span>
                        <a href="https://www.autocarindia.com/car-news/why-hyundai-axed-plans-for-a-7-seater-tucson-for-india-425348">
                            <h3>Why Hyundai axed plans for a 7-seater Tucson for India</h3>
                        </a>
                        <p>Hyundai has launched the all-new, fourth-generation Tucson as the brand’s flagship SUV for India at Rs 27.7 lakh (ex-showroom).</p>
                        <a href="https://www.autocarindia.com/car-news/why-hyundai-axed-plans-for-a-7-seater-tucson-for-india-425348" class="read-more">read more</a>
                    </div>
                </div>
                <div class="single-news">
                    <div class="image">
                        <a href="https://auto.hindustantimes.com/auto/cars/hyundai-tucson-to-buy-or-not-five-positives-and-negatives-41660538494974.html">
                            <img src="https://images.hindustantimes.com/auto/img/2022/08/15/600x338/Hyundai_Tucson_201_1660540835766_1660540845240_1660540845240.jpg" alt="Image">
                        </a>
                    </div>
                    <div class="image-cap">
                        <span>
                            <i class="fa fa-calendar"></i>
                            15 Aug 2022
                        </span>
                        <a href="https://auto.hindustantimes.com/auto/cars/hyundai-tucson-to-buy-or-not-five-positives-and-negatives-41660538494974.html">
                            <h3>Hyundai Tucson, to buy or not: Five positives and negatives</h3>
                        </a>
                        <p>Hyundai Tucson has been launched at an introductory starting price of ₹27.69 lakh ex showroom and the top-end is priced at ₹34.39 lakh ex showroom.</p>
                        <a href="https://auto.hindustantimes.com/auto/cars/hyundai-tucson-to-buy-or-not-five-positives-and-negatives-41660538494974.html" class="read-more">read more</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End News Section -->

    <!-- Start Logo Section -->

    <!-- Start End Logo Section -->

    <!-- Start Subscribe Section -->
    <section class="subscribe-section pb-70">
        <div class="container">
            <div class="subscribe-content">
                <p>Get the latest news from Mukesh Hyundai</p>
                <h2>Subscribe To Our Newsletter</h2>
                <form class="newsletter-form" data-toggle="validator">
                    <input type="email" class="form-control" placeholder="Enter Your Email" name="EMAIL" required autocomplete="off">

                    <button class="default-btn" type="submit">
                        <i class="fa fa-paper-plane"></i>
                    </button>

                    <div id="validator-newsletter" class="form-result"></div>
                </form>
            </div>
        </div>
    </section>
    <!-- End Subscribe Section -->

    <!-- Start Top Footer -->
    <footer id="contact_information" class="footer-top">
    <div class="container">
                <div class="row">
                    <div class="col-md-6 col-lg-2">
                        <div class="single-widget">
                            <div class="logo-image">
                                <a href="#">
                                    <img src="https://i.postimg.cc/rmxW5CVS/mukeshwhite.png" alt="Logo" style="width:190px !important;">
                                </a>
                            </div>
                            <p>The success of our dealership is due to the customer centric approach we adopt in all our operations. We are sure you will have a memorable experience dealing with us.</p>
                            <!-- <div class="social-icon">
                                <ul>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-facebook"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-twitter"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-instagram"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="flaticon-paypal-logo"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-google-plus"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div> -->
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-2">
                        <div class="single-widget">
                            <h3>quick links</h3>
                            <div class="page-list">
                                <ul>
                                    <li>
                                        <a href="/">
                                            Home
                                        </a>
                                    </li>
                                    <li>
                                         <a href="/cars.html">
                                             New Cars
                                        </a>
                                    </li>
                                    <li>
                                        <a href="buyers-guide.html">
                                            Buyers Guide
                                        </a>
                                    </li>
                                    <li>
                                        <a href="accessories">
                                            accessories
                                        </a>
                                    </li>
                                       <li>
                                        <a href="hyundaipromise">
                                            Hyundai Promise
                                        </a>
                                    </li>
                                    <li>
                                        <a href="booknow">
                                            Services
                                        </a>
                                    </li>
                                    <li>
                                        <a href="finance.html">
                                            Finance
                                        </a>
                                    </li>
                                    <li>
                                        <a href="contactus.html">
                                            Contact Us
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
       <div class="single-widget">
                            <h3>Mukesh Hyundai VIP Service Centre</h3>
                            <div class="information">
                                <ul>
                                    <li>
                                        <a href="#">
                                            <i class="flaticon-facebook-placeholder-for-locate-places-on-maps"></i>
                                            PP 101, Bangaon - Kulpi Rd, Nazrul Islam Avenue, Kestopur, Kolkata, West Bengal 700059
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="flaticon-smartphone-call"></i>
                                            +919270090099
                                        </a>
                                    </li>
                                     <li>
                                        <a href="#">
                                            <i class="flaticon-whatsapp"></i>
                                           9147108242
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="flaticon-close-envelope"></i>
                                            <span>mukeshhyundai@karini.in</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
    </div>
    <div class="carousel-item">
       <div class="single-widget">
                            <h3>Mukesh Hyundai Serampore Service Center</h3>
                            <div class="information">
                                <ul>
                                    <li>
                                        <a href="#">
                                            <i class="flaticon-facebook-placeholder-for-locate-places-on-maps"></i>
                                            Bangihati More, Old, Delhi Roadnear Bhusan Steel, SeramporeHooghly, West Bengal 712203
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="flaticon-smartphone-call"></i>
                                            +919270090099
                                        </a>
                                    </li>
                                     <li>
                                        <a href="#">
                                            <i class="flaticon-whatsapp"></i>
                                           9147108242
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="flaticon-close-envelope"></i>
                                            <span>mukeshhyundai@karini.in</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
    </div>
    <div class="carousel-item">
        <div class="single-widget">
                            <h3>Mukesh Hyundai Service Center Khidirpur</h3>
                            <div class="information">
                                <ul>
                                    <li>
                                        <a href="#">
                                            <i class="flaticon-facebook-placeholder-for-locate-places-on-maps"></i>
                                            96 CGR KARL MARX SARANIOPPOSIT KHIDIRPUR RAILWAY STATIONKOLKATA, West Bengal 700023
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="flaticon-smartphone-call"></i>
                                            +919270090099
                                        </a>
                                    </li>
                                     <li>
                                        <a href="#">
                                            <i class="flaticon-whatsapp"></i>
                                           9147108242
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="flaticon-close-envelope"></i>
                                            <span>mukeshhyundai@karini.in</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
    </div>
      <div class="carousel-item">
        <div class="single-widget">
                            <h3>Mukesh Hyundai Service Center - Gouripur, Birati</h3>
                            <div class="information">
                                <ul>
                                    <li>
                                        <a href="#">
                                            <i class="flaticon-facebook-placeholder-for-locate-places-on-maps"></i>
                                            Bus Stand, Gouripur 30B & 45, Mahajati Nagar, Madhyamgram, BanubankraKolkata, West Bengal 700051
                                        </a>
                                    </li>
                                     <li>
                                        <a href="#">
                                            <i class="flaticon-whatsapp"></i>
                                           9147108242
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="flaticon-close-envelope"></i>
                                            <span>mukeshhyundai@karini.in</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
    </div>
      <div class="carousel-item">
        <div class="single-widget">
                            <h3>Mukesh Hyundai Service Center Chetla</h3>
                            <div class="information">
                                <ul>
                                    <li>
                                        <a href="#">
                                            <i class="flaticon-facebook-placeholder-for-locate-places-on-maps"></i>
                                            82 CHETLA ROAD NEAR RUPANTAR CLUBKOLKATA, West Bengal 700027
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="flaticon-smartphone-call"></i>
                                            +919270090099
                                        </a>
                                    </li>
                                     <li>
                                        <a href="#">
                                            <i class="flaticon-whatsapp"></i>
                                           9147108242
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="flaticon-close-envelope"></i>
                                            <span>mukeshhyundai@karini.in</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
    </div>
       <div class="carousel-item">
        <div class="single-widget">
                            <h3>Mukesh Hyundai Khardah Service Centre</h3>
                            <div class="information">
                                <ul>
                                    <li>
                                        <a href="#">
                                            <i class="flaticon-facebook-placeholder-for-locate-places-on-maps"></i>
                                            16/16, Parmanand Bhawan Lichu Bagan, Lane, Khardah, Kolkata, West Bengal 700118
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="flaticon-smartphone-call"></i>
                                            +919874180802
                                        </a>
                                    </li>
                                     <li>
                                        <a href="#">
                                            <i class="flaticon-whatsapp"></i>
                                           9147108242
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="flaticon-close-envelope"></i>
                                            <span>khardahservice@karini.in</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
    </div>
      <div class="carousel-item">
        <div class="single-widget">
                            <h3>Mukesh Hyundai Guwahati Service Centre</h3>
                            <div class="information">
                                <ul>
                                    <li>
                                        <a href="#">
                                            <i class="flaticon-facebook-placeholder-for-locate-places-on-maps"></i>
                                            House No-1, Dearm Land Apartments, Basistha Road, Naharani path, Guwahati,Assam – 781006
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="flaticon-smartphone-call"></i>
                                            +919874180802
                                        </a>
                                    </li>
                                     <li>
                                        <a href="#">
                                            <i class="flaticon-whatsapp"></i>
                                           9147108242
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
    </div>
      <div class="carousel-item">
        <div class="single-widget">
                            <h3>Mukesh Hyundai Rangia Service Centre</h3>
                            <div class="information">
                                <ul>
                                    <li>
                                        <a href="#">
                                            <i class="flaticon-facebook-placeholder-for-locate-places-on-maps"></i>
                                            Rangia IOC Gopal Nagar, PO/PS: Rangia , Near Kerosene Oil Depot, Kamrup,Assam – 781354
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="flaticon-smartphone-call"></i>
                                            +919874180802
                                        </a>
                                    </li>
                                     <li>
                                        <a href="#">
                                            <i class="flaticon-whatsapp"></i>
                                           9147108242
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
    </div>
     <div class="carousel-item">
        <div class="single-widget">
                            <h3>Mukesh Hyundai Bijoynagar Service Centre</h3>
                            <div class="information">
                                <ul>
                                    <li>
                                        <a href="#">
                                            <i class="flaticon-facebook-placeholder-for-locate-places-on-maps"></i>
                                            Vill/PO: Uparhali, PS: Palashbari, Dist: Kamrup , Near Axis Bank, Bijoynagar,Assam – 781122
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="flaticon-smartphone-call"></i>
                                            +919874180802
                                        </a>
                                    </li>
                                     <li>
                                        <a href="#">
                                            <i class="flaticon-whatsapp"></i>
                                           9147108242
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
    </div>
     <div class="carousel-item">
        <div class="single-widget">
                            <h3>Mukesh Hyundai Guwahati Service Centre</h3>
                            <div class="information">
                                <ul>
                                    <li>
                                        <a href="#">
                                            <i class="flaticon-facebook-placeholder-for-locate-places-on-maps"></i>
                                            CERAGEM COMPLEX, Near LIC Dispur Branch , Ganeshguri Chariali, Guwahati,Assam - 781005
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="flaticon-smartphone-call"></i>
                                            +919874180802
                                        </a>
                                    </li>
                                     <li>
                                        <a href="#">
                                            <i class="flaticon-whatsapp"></i>
                                           9147108242
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
    </div>
    <div class="carousel-item">
        <div class="single-widget">
                            <h3>Mukesh Hyundai Arambagh Service Centre</h3>
                            <div class="information">
                                <ul>
                                    <li>
                                        <a href="#">
                                            <i class="flaticon-facebook-placeholder-for-locate-places-on-maps"></i>
                                            Ward-2, Arambagh, Near-BSNL office
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="flaticon-smartphone-call"></i>
                                            9270090099
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="flaticon-whatsapp"></i>
                                           9147108242
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="flaticon-close-envelope"></i>
                                            <span>mukeshhyundai@karini.in</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
    </div>
    <div class="carousel-item">
        <div class="single-widget">
                            <h3>Mukesh Hyundai Chandannagar Service Centre</h3>
                            <div class="information">
                                <ul>
                                    <li>
                                        <a href="#">
                                            <i class="flaticon-facebook-placeholder-for-locate-places-on-maps"></i>
                                            Noapara, On Delhi Road Beside Intercity Dhaba, Chandannagar
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="flaticon-smartphone-call"></i>
                                            9270090099
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="flaticon-whatsapp"></i>
                                           9147108242
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="flaticon-close-envelope"></i>
                                            <span>mukeshhyundai@karini.in</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div id="carouselExampleControls2" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
       <div class="single-widget">
                            <h3>Mukesh Hyundai Showroom Birati</h3>
                            <div class="information">
                                <ul>
                                    <li>
                                        <a href="#">
                                            <i class="flaticon-facebook-placeholder-for-locate-places-on-maps"></i>
                                            Address: 157, Jessore road, sukanta nagarKolkata, West Bengal 700133
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="flaticon-smartphone-call"></i>
                                            +919270090099
                                        </a>
                                    </li>
                                     <li>
                                        <a href="#">
                                            <i class="flaticon-whatsapp"></i>
                                           9147108242
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="flaticon-close-envelope"></i>
                                            <span>mukeshhyundai@karini.in</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
    </div>
    <div class="carousel-item">
        <div class="single-widget">
                            <h3>Mukesh Hyundai Showroom, Serampore</h3>
                            <div class="information">
                                <ul>
                                    <li>
                                        <a href="#">
                                            <i class="flaticon-facebook-placeholder-for-locate-places-on-maps"></i>
                                            Old DelhiRoad.Bangihati More P.O Mullick Para, P.S, Serampore Dist, West Bengal 712203
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="flaticon-smartphone-call"></i>
                                            9270090099
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="flaticon-whatsapp"></i>
                                           9147108242
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="flaticon-close-envelope"></i>
                                            <span>mukeshhyundai@karini.in</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
    </div>
        <div class="carousel-item">
        <div class="single-widget">
                            <h3>Mukesh Hyundai VIP Showroom</h3>
                            <div class="information">
                                <ul>
                                    <li>
                                        <a href="#">
                                            <i class="flaticon-facebook-placeholder-for-locate-places-on-maps"></i>
                                            Nazrul Islam Avenue, PP 101 Nazrul, Bangaon - Kulpi Rd, Kestopur, Kolkata, West Bengal 700059
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="flaticon-smartphone-call"></i>
                                            9270090099
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="flaticon-whatsapp"></i>
                                           9147108242
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="flaticon-close-envelope"></i>
                                            <span>mukeshhyundai@karini.in</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
    </div>
      <div class="carousel-item">
        <div class="single-widget">
                            <h3>Mukesh Hyundai Khardah Showroom</h3>
                            <div class="information">
                                <ul>
                                    <li>
                                        <a href="#">
                                            <i class="flaticon-facebook-placeholder-for-locate-places-on-maps"></i>
                                            16/16, Parmanand Bhawan Lichu Bagan, Lane, Khardah, Kolkata, West Bengal 700118
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="flaticon-smartphone-call"></i>
                                            9270090099
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="flaticon-whatsapp"></i>
                                           9147108242
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="flaticon-close-envelope"></i>
                                            <span>mukeshhyundai@karini.in</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
    </div>
     <div class="carousel-item">
        <div class="single-widget">
                            <h3>Mukesh Hyundai HAZRA Showroom</h3>
                            <div class="information">
                                <ul>
                                    <li>
                                        <a href="#">
                                            <i class="flaticon-facebook-placeholder-for-locate-places-on-maps"></i>
                                            44/4B, Hazra Rd, Ballygunge, Kolkata, West Bengal 700019
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="flaticon-smartphone-call"></i>
                                            9270090099
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="flaticon-whatsapp"></i>
                                           9147108242
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="flaticon-close-envelope"></i>
                                            <span>mukeshhyundai@karini.in</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
    </div>
      <div class="carousel-item">
        <div class="single-widget">
                            <h3>Mukesh Hyundai Guwahati Showroom</h3>
                            <div class="information">
                                <ul>
                                    <li>
                                        <a href="#">
                                            <i class="flaticon-facebook-placeholder-for-locate-places-on-maps"></i>
                                           Kushan Plaza, GS Road,Dispur, Guwahati,Assam - 781006
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="flaticon-smartphone-call"></i>
                                            9270090099
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="flaticon-whatsapp"></i>
                                           9147108242
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="flaticon-close-envelope"></i>
                                            <span>mukeshhyundai@karini.in</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
    </div>
     <div class="carousel-item">
        <div class="single-widget">
                            <h3>Mukesh Hyundai Bijoynagar Showroom</h3>
                            <div class="information">
                                <ul>
                                    <li>
                                        <a href="#">
                                            <i class="flaticon-facebook-placeholder-for-locate-places-on-maps"></i>
                                           Vill/PO: Uparhali, PS: Palashbari, Dist: Kamrup , Near Axis Bank, Bijoynagar,Assam - 781122
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="flaticon-smartphone-call"></i>
                                            9270090099
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="flaticon-whatsapp"></i>
                                           9147108242
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="flaticon-close-envelope"></i>
                                            <span>mukeshhyundai@karini.in</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
    </div>
    <div class="carousel-item">
        <div class="single-widget">
                            <h3>Mukesh Hyundai Rangia Showroom</h3>
                            <div class="information">
                                <ul>
                                    <li>
                                        <a href="#">
                                            <i class="flaticon-facebook-placeholder-for-locate-places-on-maps"></i>
                                           Rangia IOC Gopal Nagar, PO/PS: Rangia , Near Kerosene Oil Depot, Kamrup,Assam – 781354
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="flaticon-smartphone-call"></i>
                                            9270090099
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="flaticon-whatsapp"></i>
                                           9147108242
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="flaticon-close-envelope"></i>
                                            <span>mukeshhyundai@karini.in</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
    </div>
      <div class="carousel-item">
        <div class="single-widget">
                            <h3>Mukesh Hyundai Barpeta Showroom</h3>
                            <div class="information">
                                <ul>
                                    <li>
                                        <a href="#">
                                            <i class="flaticon-facebook-placeholder-for-locate-places-on-maps"></i>
                                           Barpeta Sundaridia Kalayahati , Near PWD office, Barpeta,Assam - 781301
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="flaticon-smartphone-call"></i>
                                            9270090099
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="flaticon-whatsapp"></i>
                                           9147108242
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="flaticon-close-envelope"></i>
                                            <span>mukeshhyundai@karini.in</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
    </div>
    <div class="carousel-item">
        <div class="single-widget">
                            <h3>Mukesh Hyundai Arambagh Showroom</h3>
                            <div class="information">
                                <ul>
                                    <li>
                                        <a href="#">
                                            <i class="flaticon-facebook-placeholder-for-locate-places-on-maps"></i>
                                            Ward-2, Arambagh, Near-BSNL office
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="flaticon-smartphone-call"></i>
                                            9270090099
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="flaticon-whatsapp"></i>
                                           9147108242
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="flaticon-close-envelope"></i>
                                            <span>mukeshhyundai@karini.in</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
    </div>
    <div class="carousel-item">
        <div class="single-widget">
                            <h3>Mukesh Hyundai Chandannagar Showroom</h3>
                            <div class="information">
                                <ul>
                                    <li>
                                        <a href="#">
                                            <i class="flaticon-facebook-placeholder-for-locate-places-on-maps"></i>
                                            Noapara, On Delhi Road Beside Intercity Dhaba, Chandannagar
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="flaticon-smartphone-call"></i>
                                            9270090099
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="flaticon-whatsapp"></i>
                                           9147108242
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="flaticon-close-envelope"></i>
                                            <span>mukeshhyundai@karini.in</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls2" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls2" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
                    </div>
                </div>
            </div>
    </footer>
    <!-- End Top Footer -->

    <!-- Start Bottom Footer -->
    <footer class="footer-bottom">
        <div class="container">
            <p class="envytheme-link">Copyright ©️ 2022 | Frostees India Pvt. Ltd.</p>
        </div>
    </footer>
    <!-- End Bottom Footer -->
    <!-- GetButton.io widget -->
    <script type="text/javascript">
        (function() {
            var options = {
                whatsapp: "919147108242", // WhatsApp number
                call_to_action: "Message us", // Call to action
                button_color: "#FF6550", // Color of button
                position: "left", // Position may be 'right' or 'left'
            };
            var proto = 'https:',
                host = "getbutton.io",
                url = proto + '//static.' + host;
            var s = document.createElement('script');
            s.type = 'text/javascript';
            s.async = true;
            s.src = url + '/widget-send-button/js/init.js';
            s.onload = function() {
                WhWidgetSendButton.init(host, proto, options);
            };
            var x = document.getElementsByTagName('script')[0];
            x.parentNode.insertBefore(s, x);
        })();
    </script>
    <!-- /GetButton.io widget -->

    <!-- Jquery Min Js -->
    <script src="assets/js/jquery.min.js"></script>

    <!-- Bootstrap Min Js -->
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <!-- Owl.Carousel Min Js -->
    <script src="assets/js/owl.carousel.min.js"></script>
    <!-- Nice Select Js -->
    <script src="assets/js/nice-select.min.js"></script>
    <!-- Meanmenu Min Js -->
    <script src="assets/js/meanmenu.min.js"></script>
    <!-- Popup Magnific -->
    <script src="assets/js/magnific-popup.min.js"></script>
    <!-- Slick Js -->
    <script src="assets/js/slick.min.js"></script>

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
    <!-- WOW Js -->
    <script src="assets/js/wow.min.js"></script>
    <!-- Counter Js -->
    <script src="assets/js/counterup.min.js"></script>
    <!-- Waypoints Js -->
    <script src="assets/js/waypoints.min.js"></script>
    <!-- Form Ajaxchimp JS -->
    <script src="assets/js/ajaxchimp.min.js"></script>
    <script src="assets/js/corner-popup.min.js"></script>
    <!-- Form Validator JS -->
    <script src="assets/js/form-validator.min.js"></script>
    <!-- Contact JS -->
    <script src="assets/js/contact-form-script.js"></script>
    <!-- Active Js -->
    <script src="assets/js/active.js"></script>
    <script src="js/custom.js"></script>
</body>
<!-- <script>
    jQuery('body').cornerpopup({
        variant: 10,
        colors: "#002c5f",
        content: "<div class='main-image-box'><img src='assets/pop-up.jpeg'><a href='#book_drive'>Inquire Now</a></div>",
    });
</script> -->
<script type="text/javascript">
    /* ---- particles.js config ---- */

    particlesJS("particles-js", {
        "particles": {
            "number": {
                "value": 120,
                "density": {
                    "enable": true,
                    "value_area": 800
                }
            },
            "color": {
                "value": "#ffffff"
            },
            "shape": {
                "type": "circle",
                "stroke": {
                    "width": 0,
                    "color": "#000000"
                },
                "polygon": {
                    "nb_sides": 5
                },
                "image": {
                    "src": "img/github.svg",
                    "width": 100,
                    "height": 100
                }
            },
            "opacity": {
                "value": 0.5,
                "random": false,
                "anim": {
                    "enable": false,
                    "speed": 1,
                    "opacity_min": 0.1,
                    "sync": false
                }
            },
            "size": {
                "value": 3,
                "random": true,
                "anim": {
                    "enable": false,
                    "speed": 40,
                    "size_min": 0.1,
                    "sync": false
                }
            },
            "line_linked": {
                "enable": true,
                "distance": 150,
                "color": "#ffffff",
                "opacity": 0.4,
                "width": 1
            },
            "move": {
                "enable": true,
                "speed": 6,
                "direction": "none",
                "random": false,
                "straight": false,
                "out_mode": "out",
                "bounce": false,
                "attract": {
                    "enable": false,
                    "rotateX": 600,
                    "rotateY": 1200
                }
            }
        },
        "interactivity": {
            "detect_on": "canvas",
            "events": {
                "onhover": {
                    "enable": true,
                    "mode": "grab"
                },
                "onclick": {
                    "enable": true,
                    "mode": "push"
                },
                "resize": true
            },
            "modes": {
                "grab": {
                    "distance": 140,
                    "line_linked": {
                        "opacity": 1
                    }
                },
                "bubble": {
                    "distance": 400,
                    "size": 40,
                    "duration": 2,
                    "opacity": 8,
                    "speed": 3
                },
                "repulse": {
                    "distance": 200,
                    "duration": 0.4
                },
                "push": {
                    "particles_nb": 4
                },
                "remove": {
                    "particles_nb": 2
                }
            }
        },
        "retina_detect": true
    });



    particlesJS("elements-custom", {
        "particles": {
            "number": {
                "value": 80,
                "density": {
                    "enable": true,
                    "value_area": 800
                }
            },
            "color": {
                "value": "#000000"
            },
            "shape": {
                "type": "circle",
                "stroke": {
                    "width": 0,
                    "color": "#000000"
                },
                "polygon": {
                    "nb_sides": 5
                },
                "image": {
                    "src": "img/github.svg",
                    "width": 100,
                    "height": 100
                }
            },
            "opacity": {
                "value": 0.5,
                "random": false,
                "anim": {
                    "enable": false,
                    "speed": 1,
                    "opacity_min": 0.1,
                    "sync": false
                }
            },
            "size": {
                "value": 3,
                "random": true,
                "anim": {
                    "enable": false,
                    "speed": 40,
                    "size_min": 0.1,
                    "sync": false
                }
            },
            "line_linked": {
                "enable": true,
                "distance": 150,
                "color": "#002c5f",
                "opacity": 0.4,
                "width": 1
            },
            "move": {
                "enable": true,
                "speed": 6,
                "direction": "none",
                "random": false,
                "straight": false,
                "out_mode": "out",
                "bounce": false,
                "attract": {
                    "enable": false,
                    "rotateX": 600,
                    "rotateY": 1200
                }
            }
        },
        "interactivity": {
            "detect_on": "canvas",
            "events": {
                "onhover": {
                    "enable": true,
                    "mode": "grab"
                },
                "onclick": {
                    "enable": true,
                    "mode": "push"
                },
                "resize": true
            },
            "modes": {
                "grab": {
                    "distance": 140,
                    "line_linked": {
                        "opacity": 1
                    }
                },
                "bubble": {
                    "distance": 400,
                    "size": 40,
                    "duration": 2,
                    "opacity": 8,
                    "speed": 3
                },
                "repulse": {
                    "distance": 200,
                    "duration": 0.4
                },
                "push": {
                    "particles_nb": 4
                },
                "remove": {
                    "particles_nb": 2
                }
            }
        },
        "retina_detect": true
    });
</script>


</html>