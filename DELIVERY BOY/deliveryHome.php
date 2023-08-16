<?php
session_start();
$uid = $_SESSION['uid'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MEDXSTORE - Medical</title>

    <!-- stylesheet -->

    <link
        href="https://fonts.googleapis.com/css2?family=Heebo:wght@100;200;300;400;500;531;600;700;800;900&amp;display=swap"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300;0,400;0,500;0,700;0,900;1,300;1,400;1,500;1,700;1,900&amp;display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="../assets/css/themify-icons.css">
    <link rel="stylesheet" href="../assets/css/all.min.css">
    <link rel="stylesheet" href="../assets/css/fontawesome.min.css">
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/style.css">


    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lobster&family=Roboto+Mono&display=swap" rel="stylesheet">

    <style>
        #rounded {
            border-radius: 20px;
            width: 100px;
        }
    </style>
</head>

<body>


    <!-- header -->
    <div class="header-section style-three">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-xl-6 col-lg-12">
                    <nav class="navbar navbar-expand-lg main-menu">
                        <a class="navbar-brand" href="index.html">
                            <h2 style="font-family: 'Lobster', cursive;"><b>MED</b><span
                                    style="color: red;">X</span><b>STORE</b></h2>
                        </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <i class="fas fa-bars"></i>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav mr-xl-auto ml-lg-auto">
                                <li class="nav-item">
                                    <a class="nav-link" href="deliveryHome.php">Home</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="index.html" id="navbarDropdown"
                                        role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        View
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="viewAssignedOrders.php">Orders</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="orderHistory.php">History</a>
                                    </div>
                                </li>

                            </ul>
                        </div>
                    </nav>
                </div>
                <div class="col-xl-6 d-none d-xl-block">
                    <div class="header-right-area">
                        <div class="header-search-area">
                            <!-- <form class="form-inline">
                                <input class="form-control header-input" type="search"
                                    placeholder="Enter Search Keyword" aria-label="Search">
                                <button class="btn btn-outline-success header-btn" type="submit">Search</button>
                            </form> -->
                        </div>
                        <div class="header-right-menu">
                            <ul>
                                <li>
                                    <a href="#"><i class="far fa-user-circle"></i></a>
                                    <span class="user-account">My Account</span>
                                </li>
                                <li class="sales-cart">
                                    <a href="#"><i class="fas fa-shopping-cart"></i> <span
                                            class="sold-item">0</span></a>
                                    <span class="sales-price">$0.00</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- header end -->

    <!-- banner -->
    <div class="banner-section pt-10">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-8 col-lg-12 col-md-12">
                    <div class="call-to-action call-to-action-large">
                        <div class="content">
                            <span class="pre-text">Premium Quality</span>
                            <h1 class="main-title">N95 Cone Style Particulate <br>
                                Respirator Mask</h1>
                            <p class="simple-content">Stay safe, stay home. Let's stop it together</p>
                            <a href="shop.html" class="btn btn-Shop">Shop Now<i
                                    class="fas fa-long-arrow-alt-right"></i></a>
                        </div>
                        <div class="banner-image">
                            <img src="../assets/images/banner-img1.png" alt="img">
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-12 col-md-12">
                    <div class="row">
                        <div class="col-xl-12 col-lg-6">
                            <div class="call-to-action layout-two">
                                <div class="content">
                                    <h2 class="main-title">Drug Buster Drug Disposal <br>
                                        System</h2>
                                    <p class="simple-content">Stay safe, stay home. Let's stop it together</p>
                                    <a href="shop.html" class="btn btn-Shop">Shop Now<i
                                            class="fas fa-long-arrow-alt-right"></i></a>
                                </div>
                                <div class="banner-image">
                                    <img src="../assets/images/banner-img2.png" alt="img">
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-12 col-lg-6">
                            <div class="call-to-action layout-two">
                                <div class="content">
                                    <h2 class="main-title">Deluxe Cut N' Crush <br>
                                        Pill Crusher</h2>
                                    <p class="simple-content">Stay safe, stay home. Let's stop it together</p>
                                    <a href="shop.html" class="btn btn-Shop">Shop Now<i
                                            class="fas fa-long-arrow-alt-right"></i></a>
                                </div>
                                <div class="banner-image">
                                    <img src="../assets/images/banner-img3.png" alt="img">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- banner end -->

    <!-- feature section -->
    <div class="feature-section">
        <div class="container-fluid">
            <div class="row justify-content-lg-center">
                <div class="col-xl-2 col-lg-3 col-md-4">
                    <div class="feature-thumbnail">
                        <div class="image">
                            <img src="../assets/images/icon1.png" alt="img">
                        </div>
                        <a href="shop.html" class="title">Pharmacy <i class="fas fa-long-arrow-alt-right"></i></a>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-3 col-md-4">
                    <div class="feature-thumbnail">
                        <div class="image">
                            <img src="../assets/images/icon2.png" alt="img">
                        </div>
                        <a href="shop.html" class="title">Blood Pressure <i class="fas fa-long-arrow-alt-right"></i></a>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-3 col-md-4">
                    <div class="feature-thumbnail">
                        <div class="image">
                            <img src="../assets/images/icon3.png" alt="img">
                        </div>
                        <a href="shop.html" class="title">Independent Living <i
                                class="fas fa-long-arrow-alt-right"></i></a>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-3 col-md-4">
                    <div class="feature-thumbnail">
                        <div class="image">
                            <img src="../assets/images/icon4.png" alt="img">
                        </div>
                        <a href="shop.html" class="title">Pharmacy <i class="fas fa-long-arrow-alt-right"></i></a>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-3 col-md-4">
                    <div class="feature-thumbnail">
                        <div class="image">
                            <img src="../assets/images/icon5.png" alt="img">
                        </div>
                        <a href="shop.html" class="title">Accessories <i class="fas fa-long-arrow-alt-right"></i></a>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-3 col-md-4">
                    <div class="feature-thumbnail">
                        <div class="image">
                            <img src="../assets/images/icon6.png" alt="img">
                        </div>
                        <a href="shop.html" class="title">Pharmacy <i class="fas fa-long-arrow-alt-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- feature section end-->

    <!-- Features Products-->
    <div class="Features-Products pt-100">
        <div class="container">
            <div class="row justify-content-lg-center">
                <div class="col-md-12">
                    <div class="inner-header-top style-three">
                        <div class="header-title">
                            <h3 class="title">Features Products</h3>
                        </div>
                        <div class="header-button">
                            <a href="#" class="btn btn-product"><i class="fas fa-arrow-left"></i></a>
                            <a href="#" class="btn btn-product active"><i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="owl-carousel features-product-carousel owl-theme">
                        <div class="item">
                            <div class="single-products style-two">
                                <div class="products-image">
                                    <img src="../assets/images/pro-img1.jpg" alt="img">
                                </div>
                                <div class="product-content">
                                    <a href="#">
                                        <h5 class="product-name">Micropore Surgical Tape</h5>
                                    </a>
                                    <span class="price">$45.00</span>
                                    <a href="single-product.html" class="btn btn-cart"><i
                                            class="fas fa-shopping-cart"></i> Add to
                                        cart</a>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="single-products style-two">
                                <div class="products-image">
                                    <img src="../assets/images/pro-img2.jpg" alt="img">
                                </div>
                                <div class="product-content">
                                    <a href="#">
                                        <h5 class="product-name">Barrier Lab Coat</h5>
                                    </a>
                                    <span class="price">$45.00</span>
                                    <a href="single-product.html" class="btn btn-cart"><i
                                            class="fas fa-shopping-cart"></i> Add to
                                        cart</a>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="single-products style-two">
                                <div class="products-image">
                                    <img src="../assets/images/pro-img3.jpg" alt="img">
                                </div>
                                <div class="product-content">
                                    <a href="#">
                                        <h5 class="product-name">Arcan Low Profile</h5>
                                    </a>
                                    <span class="price">$45.00</span>
                                    <a href="single-product.html" class="btn btn-cart"><i
                                            class="fas fa-shopping-cart"></i> Add to
                                        cart</a>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="single-products style-two">
                                <div class="products-image">
                                    <img src="../assets/images/pro-img4.jpg" alt="img">
                                </div>
                                <div class="product-content">
                                    <a href="#">
                                        <h5 class="product-name">PlusPharma Vitamin</h5>
                                    </a>
                                    <span class="price">$45.00</span>
                                    <a href="single-product.html" class="btn btn-cart"><i
                                            class="fas fa-shopping-cart"></i> Add to
                                        cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Features Products end-->

    <!-- Product offer -->
    <div class="Product-offer mt-30">
        <div class="container-fluid">
            <div class="row justify-content-md-center">
                <div class="col-lg-4 col-md-6">
                    <div class="call-to-action layout-three cta-layout-three-bg-1">
                        <div class="content">
                            <span class="pre-text">Diabetes Monitors</span>
                            <h2 class="main-title">Home Health Care</h2>
                            <span class="price">$35.00</span>
                            <a href="shop.html" class="btn btn-Shop">Shop Now <i
                                    class="fas fa-long-arrow-alt-right"></i></a>
                        </div>
                        <div class="offer">
                            <span>15% <br> off</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="call-to-action layout-three cta-layout-three-bg-2">
                        <div class="content">
                            <span class="pre-text">Baby Health & Everyday Care</span>
                            <h2 class="main-title">Mom & Baby Care</h2>
                            <span class="price">$78.00</span>
                            <a href="shop.html" class="btn btn-Shop">Shop Now <i
                                    class="fas fa-long-arrow-alt-right"></i></a>
                        </div>
                        <div class="offer">
                            <span>10% <br> off</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="call-to-action layout-three cta-layout-three-bg-3">
                        <div class="content">
                            <span class="pre-text">Medical Containers</span>
                            <h2 class="main-title">Oxygen Therapy</h2>
                            <span class="price">$235.00</span>
                            <a href="shop.html" class="btn btn-Shop">Shop Now <i
                                    class="fas fa-long-arrow-alt-right"></i></a>
                        </div>
                        <div class="offer">
                            <span>25% <br> off</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Product offer end-->

    <!-- Product -->
    <div class="product-section mb-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-12">
                    <div class="category-list">
                        <h3 class="title">Category</h3>
                        <ul>
                            <li><a href="shop.html"><i class="fas fa-long-arrow-alt-right"></i> Apparel & Protective
                                    Gear</a></li>
                            <li><a href="shop.html"><i class="fas fa-long-arrow-alt-right"></i> Diabetes Care</a></li>
                            <li><a href="shop.html"><i class="fas fa-long-arrow-alt-right"></i> First Aid</a></li>
                            <li><a href="shop.html"><i class="fas fa-long-arrow-alt-right"></i> Home Health Care</a>
                            </li>
                            <li><a href="shop.html"><i class="fas fa-long-arrow-alt-right"></i> ncontinence</a></li>
                            <li><a href="shop.html"><i class="fas fa-long-arrow-alt-right"></i> Ostomy & Urology</a>
                            </li>
                            <li><a href="shop.html"><i class="fas fa-long-arrow-alt-right"></i> Mobility</a></li>
                            <li><a href="shop.html"><i class="fas fa-long-arrow-alt-right"></i> Mom & Baby Care</a></li>
                            <li><a href="shop.html"><i class="fas fa-long-arrow-alt-right"></i> Personal Care</a></li>
                            <li><a href="shop.html"><i class="fas fa-long-arrow-alt-right"></i> Respiratory</a></li>

                        </ul>
                    </div>
                </div>
                <div class="col-lg-9 col-md-12">
                    <div class="row">
                        <div class="col-lg-4 col-md-6">
                            <div class="single-products sp-layout-two">
                                <div class="products-image">
                                    <img src="../assets/images/pro-img9.jpg" alt="img">
                                </div>
                                <div class="product-content">
                                    <span class="price">$45.00</span>
                                    <h5 class="product-name">Head Covers</h5>
                                    <a href="single-product.html" class="btn btn-cart"><i
                                            class="fas fa-shopping-cart"></i> Add to
                                        cart</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="single-products sp-layout-two">
                                <div class="products-image">
                                    <img src="../assets/images/pro-img10.jpg" alt="img">
                                </div>
                                <div class="product-content">
                                    <span class="price">$45.00</span>
                                    <h5 class="product-name">Fitness & Rehab</h5>
                                    <a href="single-product.html" class="btn btn-cart"><i
                                            class="fas fa-shopping-cart"></i> Add to
                                        cart</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="single-products sp-layout-two">
                                <div class="products-image">
                                    <img src="../assets/images/pro-img11.jpg" alt="img">
                                </div>
                                <div class="product-content">
                                    <span class="price">$45.00</span>
                                    <h5 class="product-name">Sharps Containers</h5>
                                    <a href="single-product.html" class="btn btn-cart"><i
                                            class="fas fa-shopping-cart"></i> Add to
                                        cart</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="single-products sp-layout-two">
                                <div class="products-image">
                                    <img src="../assets/images/pro-img12.jpg" alt="img">
                                </div>
                                <div class="product-content">
                                    <span class="price">$45.00</span>
                                    <h5 class="product-name">GeriCare Magnesium</h5>
                                    <a href="single-product.html" class="btn btn-cart"><i
                                            class="fas fa-shopping-cart"></i> Add to
                                        cart</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="single-products sp-layout-two">
                                <div class="products-image">
                                    <img src="../assets/images/pro-img13.jpg" alt="img">
                                </div>
                                <div class="product-content">
                                    <span class="price">$45.00</span>
                                    <h5 class="product-name">GeriCare Magnesium</h5>
                                    <a href="single-product.html" class="btn btn-cart"><i
                                            class="fas fa-shopping-cart"></i> Add to
                                        cart</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="single-products sp-layout-two">
                                <div class="products-image">
                                    <img src="../assets/images/pro-img14.png" alt="img">
                                </div>
                                <div class="product-content">
                                    <span class="price">$45.00</span>
                                    <h5 class="product-name">Lab N98 Face Mask</h5>
                                    <a href="single-product.html" class="btn btn-cart"><i
                                            class="fas fa-shopping-cart"></i> Add to
                                        cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Product end-->

    <!-- -blog-section -->
    <div class="blog-section">
        <div class="container">
            <div class="row justify-content-md-center">
                <div class="col-md-12">
                    <div class="inner-header-top style-two">
                        <div class="header-title">
                            <h3 class="title">Latest Blog Posts</h3>
                        </div>
                        <div class="header-button">
                            <a href="#" class="btn btn-product"><i class="fas fa-chevron-left"></i></a>
                            <a href="#" class="btn btn-product active"><i class="fas fa-chevron-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="owl-carousel blog-carousel owl-theme">
                        <div class="item">
                            <div class="single-blog">
                                <div class="blog-img">
                                    <img src="../assets/images/blog-img1.jpg" alt="img">
                                </div>
                                <div class="blog-info">
                                    <span class="date">February 20, 2020</span>
                                    <h4 class="title"><a href="blog-single.html"> Proof that Vitamin D is a key factor
                                            in beating
                                            Covid-19</a></h4>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="single-blog">
                                <div class="blog-img">
                                    <img src="../assets/images/blog-img2.jpg" alt="img">
                                </div>
                                <div class="blog-info">
                                    <span class="date">February 20, 2020</span>
                                    <h4 class="title"><a href="blog-single.html"> The key to Covid-19 prevention is in
                                            all of us</a></h4>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="single-blog">
                                <div class="blog-img">
                                    <img src="../assets/images/blog-img3.jpg" alt="img">
                                </div>
                                <div class="blog-info">
                                    <span class="date">February 20, 2020</span>
                                    <h4 class="title"><a href="blog-single.html">How Vitamin C can protect against the
                                            risk of
                                            coronavirus</a></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- blog end -->

    <!-- footer -->
    <div class="footer-section">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-lg-6 col-md-6">
                    <div class="widget widget-info">
                        <h3 class="title">About Us</h3>
                        <p class="content">The probability of someone needing your services or wLorem ipsum dolor sit
                            amet,
                            consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna</p>
                        <div class="social-icon">
                            <a href="#"><i class="ti-facebook"></i></a>
                            <a href="#"><i class="ti-twitter-alt"></i></a>
                            <a href="#"><i class="ti-google"></i></a>
                            <a href="#"><i class="ti-dribbble"></i></a>
                            <a href="#"><i class="ti-pinterest"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6">
                    <div class="widget widget-info">
                        <h3 class="title">Useful Links</h3>
                        <div class="footer-list">
                            <ul>
                                <li><a href="#">All properties</a></li>
                                <li><a href="#">FAQ’S</a></li>
                                <li><a href="#">Terms & Conditions</a></li>
                                <li><a href="#">Sign up</a></li>
                                <li><a href="#">Articles</a></li>
                                <li><a href="#">Popular tags</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6">
                    <div class="widget widget-info">
                        <h3 class="title">Why buy from us</h3>
                        <div class="footer-list">
                            <ul>
                                <li><a href="#">Odor Eliminators</a></li>
                                <li><a href="#">Medical Containers</a></li>
                                <li><a href="#">Eye & Ear Care</a></li>
                                <li><a href="#">Food & Beverage</a></li>
                                <li><a href="#">Face Masks</a></li>
                                <li><a href="#">Medication Aids</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6">
                    <div class="widget widget-info">
                        <h3 class="title">Get in touch</h3>
                        <div class="contact">
                            <p class="content">Contact Us</p>
                            <span>678-473-1667</span>
                            <span>Yourname@mail.com</span>
                        </div>
                        <div class="Address">
                            <p class="content">Our Address</p>
                            <span>4959 Adonais Way Duluth,</span>
                            <span>GA 30136</span>
                        </div>

                    </div>
                </div>
                <div class="col-md-12">
                    <div class="footer-bottom">
                        <div class="row">
                            <div class="col-lg-6 col-md-12 order-lg-first">
                                <div class="footer-copyright">
                                    <p>&copy;2020 CopyRight <a href="#"> ThemeLayer</a>. All rights reserved</p>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12 order-first">
                                <div class="footer-nav">
                                    <ul>
                                        <li><a href="#">home</a></li>
                                        <li><a href="#">about</a></li>
                                        <li><a href="#">blog</a></li>
                                        <li><a href="#">contact</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- footer end -->


    <!-- script -->

    <script src="../assets/js/jquery-3.5.1.slim.min.js"></script>
    <script src="../assets/js/popper.min.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>
    <script src="../assets/js/owl.carousel.min.js"></script>
    <script src="../assets/js/main.js"></script>
</body>

<!-- Mirrored from themelayer.net/html/MEDXSTORE/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 02 Aug 2023 06:02:14 GMT -->

</html>