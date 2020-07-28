<!DOCTYPE html>
<html lang="fr" class="no-js">
<head>
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
    <meta name="description" content="Abdel Madraz - Resume / CV"/>
    <meta name="keywords" content="Abdel, Madraz, resposnive, resume, css3, bootstrap, portfolio"/>
    <meta name="author" content="Abdel Madraz"/>

    <base href="https://madraz.fr/">

    <link rel="shortcut icon" href="assets/img/favicon.ico">

    <link rel="stylesheet" href="assets/css/reset.css" type="text/css">
    <link rel="stylesheet" href="assets/lib/bootstrap/bootstrap-grid.min.css" type="text/css">
    <link rel="stylesheet" href="assets/lib/animation/animations.css" type="text/css">
    <link rel="stylesheet" href="assets/lib/scrollbar/perfect-scrollbar.css" type="text/css">
    <link rel="stylesheet" href="assets/lib/carousel/owl.carousel.css" type="text/css">
    <link rel="stylesheet" href="assets/lib/bootstrap/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="assets/lib/leaflet/leaflet.css">


    <link rel="stylesheet" href="assets/css/main.css" type="text/css">

    <title>Abdel Madraz - Resume / CV</title>

    <script src="assets/lib/modernizr/modernizr.custom.js"></script>
</head>

<body>
<!-- Animated Background -->
<div class="lm-animated-bg" style="background-image: url(assets/img/main_bg.png);"></div>
<!-- /Animated Background -->

<!-- Loading animation -->
<div class="preloader">
    <div class="preloader-animation">
        <div class="preloader-spinner">
        </div>
    </div>
</div>
<!-- /Loading animation -->

<div class="page">
    <div class="page-content">

        <?php include "template/menu.php"; ?>

        <!-- Mobile Navigation -->
        <div class="menu-toggle">
            <span></span>
            <span></span>
            <span></span>
        </div>
        <!-- End Mobile Navigation -->

        <!-- Arrows Nav -->
        <div class="lmpixels-arrows-nav">
            <div class="lmpixels-arrow-right"><i class="lnr lnr-chevron-right"></i></div>
            <div class="lmpixels-arrow-left"><i class="lnr lnr-chevron-left"></i></div>
        </div>
        <!-- End Arrows Nav -->

        <div class="content-area">
            <div class="animated-sections">
                <!-- Home Subpage -->
                <?php include "pages/home.php"; ?>
                <!-- End of Home Subpage -->

                <!-- About Me Subpage -->
                <?php include "pages/about.php"; ?>
                <!-- End of About Me Subpage -->

                <!-- Resume Subpage -->
                <?php include "pages/resume.php"; ?>
                <!-- End of Resume Subpage -->

                <!-- Portfolio Subpage -->
                <?php include "pages/portfolio.php"; ?>
                <!-- End of Portfolio Subpage -->

                <!-- Contact Subpage -->
                <?php include "pages/contact.php"; ?>
                <!-- End of Contact Subpage -->
            </div>
        </div>

    </div>
</div>

<script src="assets/lib/jquery/jquery-2.1.3.min.js"></script>
<script src="assets/lib/modernizr/modernizr.custom.js"></script>
<script src="assets/lib/animation/animating.js"></script>

<script src="assets/lib/imageLoader/imagesloaded.pkgd.min.js"></script>
<script src='https://www.google.com/recaptcha/api.js?render=6LeR2LAZAAAAAA6CymXn45X55tUZKC5bC6WKox3p'></script>

<script src='assets/lib/scrollbar/perfect-scrollbar.min.js'></script>
<script src='assets/lib/jquery/jquery.shuffle.min.js'></script>
<script src='assets/lib/masonry/masonry.pkgd.min.js'></script>
<script src='assets/lib/carousel/owl.carousel.min.js'></script>
<script src="assets/lib/jquery/jquery.magnific-popup.min.js"></script>

<script src="assets/lib/leaflet/leaflet.js"></script>
<script src="assets/lib/validator/validator.js"></script>
<script src="assets/js/main.js"></script>
</body>
</html>
