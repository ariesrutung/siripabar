<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>SIRIPABAR - HEADER</title>


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
    <link rel="shortcut icon" href="<?php echo base_url(); ?>public/frontend2/images/favicon.png" type="image/x-icon">
    <link rel="icon" href="<?php echo base_url(); ?>public/frontend2/images/favicon.png" type="image/x-icon">

    <style>
        .d-flex.justify-content-start {
            flex-direction: column;
        }

        #slick-slide00 {
            background-image: url(public/frontend2/images/banner/banner-1.jpg) !important;
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }

        #slick-slide02 {
            background-image: url(public/frontend2/images/banner/banner-2.jpg) !important;
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }

        #slick-slide03 {
            background-image: url(public/frontend2/images/banner/banner-3.jpg) !important;
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }

        #slick-slide04 {
            background-image: url(public/frontend2/images/banner/banner-4.jpg) !important;
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
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
        <!-- top header -->
        <div class="top-header">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <ul class="list-inline text-lg-right text-center">
                            <li class="list-inline-item">
                                <a href="mailto:info@companyname.com">info@companyname.com</a>
                            </li>
                            <li class="list-inline-item">
                                <a href="callto:1234565523">Call Us Now:
                                    <span class="ml-2"> 123 456 5523</span>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#" id="searchOpen">
                                    <i class="ti-search"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- nav bar -->
        <div class="navigation">
            <div class="container">
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <div class="d-flex justify-content-start">
                        <h3 class="m-0">SIRIPABAR</h3>
                        <p class="m-0">Sistem Informasi Infrastruktur Irigasi Papua Barat</p>
                    </div>
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
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo base_url('galeri'); ?>">Galeri</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo base_url('lapor'); ?>">Lapor</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo base_url('kontak'); ?>">Kontak</a>
                            </li>

                            <!-- <li class="nav-item dropdown active">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Beranda
                                </a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    About Us
                                </a>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="about.html">About page</a>
                                    <a class="dropdown-item" href="about-2.html">About page-2</a>
                                </div>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Service
                                </a>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="service.html">Service page</a>
                                    <a class="dropdown-item" href="service-2.html">Service page-2</a>
                                    <a class="dropdown-item" href="service-single.html">Service Single</a>
                                </div>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Pages
                                </a>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="team.html">Team Page</a>
                                    <a class="dropdown-item" href="pricing.html">Pricing Page</a>
                                    <a class="dropdown-item" href="project.html">project Page</a>
                                    <a class="dropdown-item" href="faqs.html">FAQs Page</a>
                                    <a class="dropdown-item" href="project-single.html">Project Single</a>
                                    <a class="dropdown-item" href="team-single.html">Team Single</a>
                                    <a class="dropdown-item" href="404.html">404 Page</a>
                                    <a class="dropdown-item" href="signup.html">Sign Up Page</a>
                                    <a class="dropdown-item" href="login.html">Login Page</a>
                                    <a class="dropdown-item" href="comming-soon.html">Comming Soon Page</a>
                                </div>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Blog
                                </a>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="blog.html">Blog Page</a>
                                    <a class="dropdown-item" href="blog-sidebar.html">Blog with Sidebar</a>
                                    <a class="dropdown-item" href="blog-single.html">Blog Single</a>
                                </div>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Elements
                                </a>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="components/buttons.html">Buttons</a>
                                    <a class="dropdown-item" href="components/icons.html">Icons</a>
                                    <a class="dropdown-item" href="components/typography.html">Typography</a>
                                    <a class="dropdown-item" href="components/accordions.html">Accordions</a>
                                    <a class="dropdown-item" href="components/blog-contents.html">Blog Contents</a>
                                    <a class="dropdown-item" href="components/service-contents.html">Service Contents</a>
                                    <a class="dropdown-item" href="components/team-contents.html">Team Contents</a>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="contact.html">Contact</a>
                            </li> -->
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