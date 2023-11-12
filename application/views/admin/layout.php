<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title><?php echo $title; ?> | PANEL ADMIN SIRIPABAR </title>

    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo base_url(); ?>public/focus-theme/images/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo base_url(); ?>public/focus-theme/images/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url(); ?>public/focus-theme/images/favicon/favicon-16x16.png">
    <link rel="manifest" href="<?php echo base_url(); ?>public/focus-theme/images/favicon/site.webmanifest">
    <link rel="mask-icon" href="<?php echo base_url(); ?>public/focus-theme/images/favicon/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">

    <link href="<?php echo base_url(); ?>public/focus-theme/vendor/pg-calendar/css/pignose.calendar.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>public/focus-theme/vendor/chartist/css/chartist.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>public/focus-theme/css/style.css" rel="stylesheet">
    <style>
        .btn-danger {
            color: #fff !important;
            background-color: #dc3545 !important;
            border-color: #dc3545 !important;
        }

        .btn-primary {
            color: #fff !important;
            background-color: #007bff !important;
            border-color: #007bff !important;
        }

        .btn-secondary {
            color: #fff !important;
            background-color: #6c757d !important;
            border-color: #6c757d !important;
        }

        .btn-success {
            color: #fff !important;
            background-color: #28a745 !important;
            border-color: #28a745 !important;
        }

        .btn-warning {
            color: #212529 !important;
            background-color: #ffc107 !important;
            border-color: #ffc107 !important;
        }

        .btn-info {
            color: #fff !important;
            background-color: #17a2b8 !important;
            border-color: #17a2b8 !important;
        }

        .btn-dark {
            color: #fff !important;
            background-color: #343a40 !important;
            border-color: #343a40 !important;
        }
    </style>
</head>

<body>

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->


    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->
        <div class="nav-header">
            <a href="<?php echo base_url('admin'); ?>" class="brand-logo">
                <img class="logo-abbr" src="<?php echo base_url(); ?>public/focus-theme/images/logo/logopabar.png" alt="">
                <img class="logo-compact" src="<?php echo base_url(); ?>public/focus-theme/images/logo/logotext.png" alt="">
                <img style="max-width: 180px !important;" class="brand-title" src="<?php echo base_url(); ?>public/focus-theme/images/logo/logotext.png" alt="">
            </a>

            <div class="nav-control">
                <div class="hamburger">
                    <span class="line"></span><span class="line"></span><span class="line"></span>
                </div>
            </div>
        </div>
        <!--**********************************
            Nav header end
        ***********************************-->

        <!--**********************************
            Header start
        ***********************************-->
        <div class="header">
            <div class="header-content">
                <nav class="navbar navbar-expand">
                    <div class="collapse navbar-collapse justify-content-between">
                        <div class="header-left">
                            <div class="search_bar dropdown">
                                <span class="search_icon p-3 c-pointer" data-toggle="dropdown">
                                    <i class="mdi mdi-magnify"></i>
                                </span>
                                <div class="dropdown-menu p-0 m-0">
                                    <form>
                                        <input class="form-control" type="search" placeholder="Search" aria-label="Search">
                                    </form>
                                </div>
                            </div>
                        </div>

                        <ul class="navbar-nav header-right">
                            <li class="nav-item dropdown notification_dropdown">
                                <a class="nav-link" href="#" role="button" data-toggle="dropdown">
                                    <i class="mdi mdi-bell"></i>
                                    <div class="pulse-css"></div>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <ul class="list-unstyled">
                                        <li class="media dropdown-item">
                                            <span class="success"><i class="ti-user"></i></span>
                                            <div class="media-body">
                                                <a href="#">
                                                    <p><strong>Martin</strong> has added a <strong>customer</strong> Successfully
                                                    </p>
                                                </a>
                                            </div>
                                            <span class="notify-time">3:20 am</span>
                                        </li>
                                        <li class="media dropdown-item">
                                            <span class="primary"><i class="ti-shopping-cart"></i></span>
                                            <div class="media-body">
                                                <a href="#">
                                                    <p><strong>Jennifer</strong> purchased Light Dashboard 2.0.</p>
                                                </a>
                                            </div>
                                            <span class="notify-time">3:20 am</span>
                                        </li>
                                        <li class="media dropdown-item">
                                            <span class="danger"><i class="ti-bookmark"></i></span>
                                            <div class="media-body">
                                                <a href="#">
                                                    <p><strong>Robin</strong> marked a <strong>ticket</strong> as unsolved.
                                                    </p>
                                                </a>
                                            </div>
                                            <span class="notify-time">3:20 am</span>
                                        </li>
                                        <li class="media dropdown-item">
                                            <span class="primary"><i class="ti-heart"></i></span>
                                            <div class="media-body">
                                                <a href="#">
                                                    <p><strong>David</strong> purchased Light Dashboard 1.0.</p>
                                                </a>
                                            </div>
                                            <span class="notify-time">3:20 am</span>
                                        </li>
                                        <li class="media dropdown-item">
                                            <span class="success"><i class="ti-image"></i></span>
                                            <div class="media-body">
                                                <a href="#">
                                                    <p><strong> James.</strong> has added a<strong>customer</strong> Successfully
                                                    </p>
                                                </a>
                                            </div>
                                            <span class="notify-time">3:20 am</span>
                                        </li>
                                    </ul>
                                    <a class="all-notification" href="#">See all notifications <i class="ti-arrow-right"></i></a>
                                </div>
                            </li>
                            <li class="nav-item dropdown header-profile">
                                <a class="nav-link" href="#" role="button" data-toggle="dropdown">
                                    <i class="mdi mdi-account"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a href="#" class="dropdown-item">
                                        <i class="icon-user"></i>
                                        <span class="ml-2">Profile </span>
                                    </a>
                                    <a href="#" class="dropdown-item">
                                        <i class="icon-envelope-open"></i>
                                        <span class="ml-2">Inbox </span>
                                    </a>
                                    <a href="<?php echo base_url('auth/logout'); ?>" class="dropdown-item">
                                        <i class="icon-key"></i>
                                        <span class="ml-2">Logout </span>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
        <div class="quixnav">
            <div class="quixnav-scroll">
                <ul class="metismenu" id="menu">
                    <li id="menudashboard"><a href="<?php echo base_url('admin/dashboard'); ?>"><i class="ti-desktop"></i><span class="nav-text"> Dashboard </span> </a></li>

                    <li class="nav-label first">MANAJEMEN LAPORAN</li>
                    <li id="menupengaduan"><a href="<?php echo base_url('admin/pengaduan'); ?>"><i class="ti-user"></i><span class="nav-text"> Data Pengaduan</span></a></li>
                    <li id="menuunduhlaporan"><a href="<?php echo base_url('admin/unduhlaporan'); ?>"><i class="ti-import"></i><span class="nav-text"> Unduh Laporan Pengaduan</span></a></li>

                    <li class="nav-label first">MANAJEMEN DAERAH IRIGASI</li>
                    <li id="menudaerahirigasi"><a href="<?php echo base_url('admin/daerahirigasi'); ?>"><i class="ti-location-pin"></i><span class="nav-text"> Daerah Irigasi</span></a></li>
                    <li id="menudatakontrak"><a href="<?php echo base_url('admin/datakontrak'); ?>"><i class="ti-file"></i><span class="nav-text"> Data Kontrak</span></a></li>

                    <li class="nav-label first">MANAJEMEN WEBSITE</li>
                    <li id="menuberita"><a href="<?php echo base_url('admin/beritanew'); ?>"><i class="ti-comment-alt"></i><span class="nav-text"> Berita</span></a></li>
                    <li id="menuslider"><a href="<?php echo base_url('admin/slider'); ?>"><i class="ti-camera"></i><span class="nav-text"> Slider</span></a></li>
                    <li id="menugaleri"><a href="<?php echo base_url('admin/galeri'); ?>"><i class="ti-receipt"></i><span class="nav-text"> Galeri</span></a></li>
                </ul>
            </div>
        </div>
        <!--**********************************
            Sidebar end
        ***********************************-->

        <!--**********************************
            Content body start
        ***********************************-->
        <?php
        if (isset($_view) && $_view)
            $this->load->view($_view);
        ?>
        <!--**********************************
            Content body end
        ***********************************-->


        <!--**********************************
            Footer start
        ***********************************-->
        <div class="footer">
            <div class="copyright">
                <p>Copyright © 2023 | Sistem Informasi Infrastruktur Irigasi Papua Barat</p>
            </div>
        </div>
        <!--**********************************
            Footer end
        ***********************************-->

        <!--**********************************
           Support ticket button start
        ***********************************-->

        <!--**********************************
           Support ticket button end
        ***********************************-->


    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="<?php echo base_url(); ?>public/focus-theme/vendor/global/global.min.js"></script>
    <script src="<?php echo base_url(); ?>public/focus-theme/js/quixnav-init.js"></script>
    <script src="<?php echo base_url(); ?>public/focus-theme/js/custom.min.js"></script>

    <script src="<?php echo base_url(); ?>public/focus-theme/vendor/chartist/js/chartist.min.js"></script>

    <script src="<?php echo base_url(); ?>public/focus-theme/vendor/moment/moment.min.js"></script>
    <script src="<?php echo base_url(); ?>public/focus-theme/vendor/pg-calendar/js/pignose.calendar.min.js"></script>


    <script src="<?php echo base_url(); ?>public/focus-theme/js/dashboard/dashboard-2.js"></script>
    <!-- Circle progress -->

</body>

</html>