<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Basic Page Needs
  ================================================== -->
    <meta charset="utf-8">
    <title>Novena- Health Care &amp; Medical template</title>

    <!-- Mobile Specific Metas
  ================================================== -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Health Care Medical Html5 Template">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
    <meta name="author" content="Themefisher">
    <meta name="generator" content="Themefisher Novena HTML Template v1.0">

    <!-- theme meta -->
    <meta name="theme-name" content="novena" />

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url(); ?>public/frontend/images/favicon.png" />

    <!-- 
  Essential stylesheets
  =====================================-->
    <link rel="stylesheet" href="<?php echo base_url(); ?>public/frontend/plugins/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>public/frontend/plugins/icofont/icofont.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>public/frontend/plugins/slick-carousel/slick/slick.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>public/frontend/plugins/slick-carousel/slick/slick-theme.css">

    <!-- Main Stylesheet -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>public/frontend/css/style.css">

</head>

<body id="top">

    <header>
        <!-- <div class="header-top-bar">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <ul class="top-bar-info list-inline-item pl-0 mb-0">
                            <li class="list-inline-item"><a href="mailto:support@gmail.com"><i class="icofont-support-faq mr-2"></i>support@novena.com</a></li>
                            <li class="list-inline-item"><i class="icofont-location-pin mr-2"></i>Address Ta-134/A, New York, USA </li>
                        </ul>
                    </div>
                    <div class="col-lg-6">
                        <div class="text-lg-right top-right-bar mt-2 mt-lg-0">
                            <a href="tel:+23-345-67890">
                                <span>Call Now : </span>
                                <span class="h4">823-4565-13456</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        <nav class="navbar navbar-expand-lg navigation" id="navbar">
            <div class="container">
                <a class="navbar-brand" href="<?php echo base_url('/'); ?>">
                    <h3 class="mb-0">SIRIPABAR</h3>
                    <p class="small pt-0 ">Sistem Informasi Infrastruktur Irigasi Papua Barat</p>
                </a>

                <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarmain" aria-controls="navbarmain" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="icofont-navigation-menu"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarmain">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active"><a class="nav-link" href="<?php echo base_url('/'); ?>">Beranda</a></li>
                        <li class="nav-item"><a class="nav-link" href="<?php echo base_url('profil'); ?>">Profil</a></li>
                        <li class="nav-item"><a class="nav-link" href="<?php echo base_url('berita'); ?>">Berita</a></li>
                        <li class="nav-item"><a class="nav-link" href="<?php echo base_url('galeri'); ?>">Galeri</a></li>
                        <li class="nav-item"><a class="nav-link" href="<?php echo base_url('/'); ?>">Lapor</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>