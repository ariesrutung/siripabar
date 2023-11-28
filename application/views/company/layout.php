<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title><?php echo $title; ?> | SIRIPABAR</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Construction Company Website Template" name="keywords">
    <meta content="Construction Company Website Template" name="description">

    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo base_url(); ?>public/focus-theme/images/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo base_url(); ?>public/focus-theme/images/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url(); ?>public/focus-theme/images/favicon/favicon-16x16.png">
    <link rel="manifest" href="<?php echo base_url(); ?>public/focus-theme/images/favicon/site.webmanifest">
    <link rel="mask-icon" href="<?php echo base_url(); ?>public/focus-theme/images/favicon/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <!-- CSS Libraries -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>/public/company/lib/flaticon/font/flaticon.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>/public/company/lib/animate/animate.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>/public/company/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>/public/company/lib/lightbox/css/lightbox.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>/public/company/lib/slick/slick.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>/public/company/lib/slick/slick-theme.css" rel="stylesheet">

    <!-- bootstrap icon -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Template Stylesheet -->
    <link href="<?php echo base_url(); ?>/public/company/css/style.css" rel="stylesheet">

    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>

    <style>
        .footer {
            position: relative;
            margin-top: 30px;
            padding-top: 15px;
            background: #030f27;
            color: #ffffff;
        }

        .carousel .carousel-item::after {
            position: absolute;
            content: "";
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            /* background: rgba(0, 0, 0, .3); */
            background: none !important;
            z-index: 1;
        }

        /* .carousel .carousel-item img {
            width: 100% !important;
            height: auto !important;
        } */
        .nav-bar.nav-sticky,
        .wrapper {
            max-width: 100%;
        }

        .navbar-nav.mr-auto {
            width: 100% !important;
            justify-content: center;
        }

        /* .navbar-nav.mr-auto a {
            padding: 5px 20px !important;
            font-size: 16px;
        } */
    </style>
</head>

<body>
    <div class="wrapper">
        <!-- Top Bar Start -->
        <div class="top-bar">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-lg-4 col-md-12">

                    </div>
                    <div class="col-lg-4 col-md-12">
                        <div class="logo">
                            <a href="<?php echo base_url('/'); ?>">
                                <img class="w-100" src="<?php echo base_url('/'); ?>/public/company/img/logosiripabarnew5.png" alt="Logo">
                            </a>
                        </div>
                    </div>
                    <!-- <div class="col-lg-8 col-md-7 d-none d-lg-block">
                        <div class="row">
                            <div class="col-4">
                                <div class="top-bar-item">
                                    <div class="top-bar-icon">
                                        <i class="flaticon-calendar"></i>
                                    </div>
                                    <div class="top-bar-text">
                                        <h3>Opening Hour</h3>
                                        <p>Mon - Fri, 8:00 - 9:00</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="top-bar-item">
                                    <div class="top-bar-icon">
                                        <i class="flaticon-call"></i>
                                    </div>
                                    <div class="top-bar-text">
                                        <h3>Call Us</h3>
                                        <p>+012 345 6789</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="top-bar-item">
                                    <div class="top-bar-icon">
                                        <i class="flaticon-send-mail"></i>
                                    </div>
                                    <div class="top-bar-text">
                                        <h3>Email Us</h3>
                                        <p>info@example.com</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
        <!-- Top Bar End -->

        <!-- Nav Bar Start -->
        <div class="nav-bar">
            <div class="container-fluid">
                <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
                    <a href="#" class="navbar-brand">MENU</a>
                    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                        <div class="navbar-nav mr-auto">
                            <a id="menuberanda" href="<?php echo base_url('/'); ?>" class="nav-item nav-link">Beranda</a>
                            <a id="menuberita" href="<?php echo base_url('beritanew'); ?>" class="nav-item nav-link">Berita</a>
                            <div class="nav-item dropdown">
                                <a id="menudaerahirigasi" href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Daerah Irigasi</a>
                                <div class="dropdown-menu">
                                    <a href="<?php echo base_url('daerahirigasi/pusat'); ?>" class="dropdown-item">Kewenangan Kementerian</a>
                                    <a href="<?php echo base_url('daerahirigasi/provinsi'); ?>" class="dropdown-item">Kewenangan Provinsi</a>
                                    <a href="<?php echo base_url('daerahirigasi/kabkota'); ?>" class="dropdown-item">Kewenangan Kab/Kota</a>
                                    <a href="<?php echo base_url('daerahirigasi/nonstatus'); ?>" class="dropdown-item">Non Status</a>
                                </div>
                            </div>
                            <a id="menugaleri" href="<?php echo base_url('galeri/'); ?>" class="nav-item nav-link">Galeri</a>
                            <a id="menulapor" href="<?php echo base_url('lapor'); ?>" class="nav-item nav-link">Lapor</a>
                            <!-- Menu untuk user login -->
                            <a id="menuemonitoring" href="<?php echo base_url('emonitoring'); ?>" class="nav-item nav-link">E-monitoring Pelaksanaan</a>

                            <!-- tombol logout untuk tamu login -->
                            <?php if ($this->session->userdata('username') && !$this->ion_auth->is_admin()) { ?>
                                <a href="<?php echo base_url('auth/logout'); ?>" class="nav-item nav-link">Logout</a>
                            <?php  } ?>

                        </div>
                    </div>
                </nav>
            </div>
        </div>
        <!-- Nav Bar End -->

        <!-- isi -->

        <?php
        if (isset($_view) && $_view)
            $this->load->view($_view);
        ?>



        <!-- footer -->
        <!-- Footer Start -->
        <div class="footer wow fadeIn" data-wow-delay="0.3s">
            <div class="container copyright">
                <div class="row">
                    <div class="col-md-12">
                        <p class="text-center">Copyright &copy; 2023. Sistem Informasi Infrastruktur Irigasi Papua Parat.</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->

        <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo base_url(); ?>/public/company/lib/easing/easing.min.js"></script>
    <script src="<?php echo base_url(); ?>/public/company/lib/wow/wow.min.js"></script>
    <script src="<?php echo base_url(); ?>/public/company/lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="<?php echo base_url(); ?>/public/company/lib/isotope/isotope.pkgd.min.js"></script>
    <script src="<?php echo base_url(); ?>/public/company/lib/lightbox/js/lightbox.min.js"></script>
    <script src="<?php echo base_url(); ?>/public/company/lib/waypoints/waypoints.min.js"></script>
    <script src="<?php echo base_url(); ?>/public/company/lib/counterup/counterup.min.js"></script>
    <script src="<?php echo base_url(); ?>/public/company/lib/slick/slick.min.js"></script>

    <!-- Template Javascript -->
    <script src="<?php echo base_url(); ?>/public/company/js/main.js"></script>
</body>

</html>