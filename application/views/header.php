<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title><?php echo $title; ?></title>


    <!-- mobile responsive meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>public/frontend2/plugins/bootstrap/bootstrap.min.css">
    <!-- magnific popup -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>public/frontend2/plugins/magnific-popup/magnific-popup.css">
    <!-- Slick Carousel -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>public/frontend2/plugins/slick/slick.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>public/frontend2/plugins/slick/slick-theme.css">
    <!-- themify icon -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>public/frontend2/plugins/themify-icons/themify-icons.css">
    <!-- animate -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>public/frontend2/plugins/animate/animate.css">
    <!-- Aos -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>public/frontend2/plugins/aos/aos.css">
    <!-- swiper -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>public/frontend2/plugins/swiper/swiper.min.css">
    <!-- Stylesheets -->
    <link href="<?php echo base_url(); ?>public/frontend2/css/style.css" rel="stylesheet">

    <!--Favicon-->
    <link rel="shortcut icon" href="https://upload.wikimedia.org/wikipedia/commons/d/de/Coat_of_arms_of_West_Papua.svg" type="image/x-icon">
    <link rel="icon" href="https://upload.wikimedia.org/wikipedia/commons/d/de/Coat_of_arms_of_West_Papua.svg" type="image/x-icon">


    <style>
        .d-flex.justify-content-start {
            flex-direction: column;
        }

        .active {
            color: #030f6b;
        }

        .site_title {
            font-weight: bold;
        }

        a.btn.btn-outline.text-uppercase.fadeInDown.animated {
            background: #030f6b;
            color: #fff;
            border: 0;
        }

        .hero-slider-item.py-160.slick-slide .container {
            background-color: rgb(0 0 0 / 50%) !important;
            border-radius: 20px;
            padding: 40px 20px;
        }

        .hero-slider-item.py-160.slick-slide .container * {
            color: #fff !important;
        }

        ul.controls.list-inline {
            padding: 0;
            display: flex;
            margin-bottom: 20px;
            white-space: nowrap !important;
            /* width: 100% !important; */
            overflow-x: scroll !important;
            overflow-y: hidden !important;
            white-space: nowrap !important;
            /* -webkit-overflow-scrolling: touch !important; */
        }

        .project-menu ul li {
            /* width: 100% !important;
            min-width: 80% !important; */
            display: inline-block !important;
            border-radius: 10px;
        }

        .page-title {
            background-position: center center;
            background-repeat: no-repeat;
            background-size: cover;
            padding: 70px 0 !important;
            margin-top: 12vh;
        }

        p.m-0 {
            font-size: 12px;
        }

        .signup {
            border-radius: 5px;
            overflow: hidden;
            background: #fff;
            box-shadow: 0 10px 30px 0 rgba(0, 0, 0, 0.2);
            margin-bottom: 30px;
        }

        .navigation .navbar .dropdown-menu {
            padding: 0px 30px 20px 25px !important;
        }

        .navigation {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            background-color: #fff;
            z-index: 1000;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .page-title.overlay {
            background-position: center top -160px !important;
            background-size: 100% !important;
            height: 300px !important;
        }

        .row.filtr-container {
            padding: 0px;
            position: relative;
            width: 100%;
            display: flex;
            flex-wrap: nowrap !important;
            height: 400px;
        }

        .position-relative {
            padding: 5px;
        }

        .hero-slider-item.py-160 {
            height: 700px !important;
        }
    </style>
</head>

<body>
    <!-- preloader start -->
    <div class="preloader">
        <img src="<?php echo base_url(); ?>public/frontend2/images/preloader.gif" alt="preloader">
    </div>
    <!-- preloader end -->

    <!-- navigation -->
    <header>
        <!-- nav bar -->
        <div class="navigation">
            <div class="container">
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <a href="<?php echo base_url('/'); ?>" class="d-flex justify-content-start">
                        <!-- <h3 class="m-0 site_title text-primary">SIRIPABAR</h3>
                        <p class="m-0">Sistem Informasi Infrastruktur Irigasi Papua Barat</p> -->
                        <img src="<?php echo base_url(); ?>/public/frontend2/images/logo_siripabar.png" alt="logo" class="w-50">
                    </a>
                    <!-- <img src="<?php //echo base_url(); 
                                    ?>public/frontend2/images/logo.png" alt="logo"> -->
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo base_url('/'); ?>">Beranda</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo base_url('profil'); ?>">Profil</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo base_url('berita'); ?>">Berita</a>
                            </li>

                            <li class="nav-item dropdown active">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Daerah Irigasi</a>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="index.html">Kewenangan Kementerian</a>
                                    <a class="dropdown-item" href="<?php echo base_url('datairigasi'); ?>">Kewenangan Provinsi</a>
                                    <a class="dropdown-item" href="homepage-3.html">Kewenangan Kabupaten</a>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo base_url('galeri'); ?>">Galeri</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo base_url('lapor'); ?>">Lapor</a>
                            </li>

                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </header>

    <!-- Search Form -->
    <div class="search-form">
        <a href="#" class="close" id="searchClose">
            <i class="ti-close"></i>
        </a>
        <div class="container">
            <form action="#" class="row">
                <div class="col-lg-10 mx-auto">
                    <h3>Search Here</h3>
                    <div class="input-wrapper">
                        <input type="text" class="form-control" name="search" id="search" placeholder="Enter Keywords..." required>
                        <button>
                            <i class="ti-search"></i>
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- /navigation -->