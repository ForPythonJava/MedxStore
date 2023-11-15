<?php
session_start();
$uid = $_SESSION['uid'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MEDXSTORE - Medical HTML Template</title>


    <!-- stylesheet -->

    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@100;200;300;400;500;531;600;700;800;900&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300;0,400;0,500;0,700;0,900;1,300;1,400;1,500;1,700;1,900&amp;display=swap" rel="stylesheet">
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
                        <a class="navbar-brand" href="#">
                            <h2 style="font-family: 'Lobster', cursive;"><b>MED</b><span style="color: red;">X</span><b>STORE</b></h2>
                        </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <i class="fas fa-bars"></i>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav mr-xl-auto ml-lg-auto">
                                <li class="nav-item">
                                    <a class="nav-link" href="shopHome.php">Home</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Add
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="addMedicine.php">Medicine</a>
                                    </div>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        View
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="viewMedicine.php">Medicine</a>
                                        <a class="dropdown-item" href="shopViewOrders.php">Orders</a>
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
                                    <a href="../COMMON/login.php" class="btn btn-primary p-2" id="rounded">LOGOUT</a>
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
                            <a href="shop.html" class="btn btn-Shop">Shop Now<i class="fas fa-long-arrow-alt-right"></i></a>
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
                                    <a href="shop.html" class="btn btn-Shop">Shop Now<i class="fas fa-long-arrow-alt-right"></i></a>
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
                                    <a href="shop.html" class="btn btn-Shop">Shop Now<i class="fas fa-long-arrow-alt-right"></i></a>
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


    <!-- -blog-section -->
    <div class="blog-section">
        <div class="container">
            <div class="row justify-content-md-center">
                <div class="col-md-12">
                    <div class="inner-header-top style-two">
                        <div class="header-title">
                            <!-- <h3 class="title">Latest Blog Posts</h3> -->
                        </div>
                        <!-- <div class="header-button">
                            <a href="#" class="btn btn-product"><i class="fas fa-chevron-left"></i></a>
                            <a href="#" class="btn btn-product active"><i class="fas fa-chevron-right"></i></a>
                        </div> -->
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
                                    <p>&copy;2023 CopyRight <a href="#"> LCC</a>. All rights reserved</p>
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