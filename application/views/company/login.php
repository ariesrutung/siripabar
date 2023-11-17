<!DOCTYPE html>
<html lang="en" class="h-100">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title><?php echo $title; ?></title>
    <!-- Favicon icon -->
    <link href="<?php echo base_url(); ?>public/company/img/favicon/favicon-16x16.png" rel="icon">
    <link rel="apple-touch-icon" sizes="57x57" href="<?php echo base_url(); ?>public/company/img/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="<?php echo base_url(); ?>public/company/img/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="<?php echo base_url(); ?>public/company/img/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url(); ?>public/company/img/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="<?php echo base_url(); ?>public/company/img/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="<?php echo base_url(); ?>public/company/img/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="<?php echo base_url(); ?>public/company/img/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="<?php echo base_url(); ?>public/company/img/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo base_url(); ?>public/company/img/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="<?php echo base_url(); ?>public/company/img/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo base_url(); ?>public/company/img/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="<?php echo base_url(); ?>public/company/img/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url(); ?>public/company/img/favicon/favicon-16x16.png">
    <link rel="manifest" href="<?php echo base_url(); ?>public/company/img/favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="<?php echo base_url(); ?>public/company/img/favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

    <link href="<?php echo base_url(); ?>public/focus-theme/css/style.css" rel="stylesheet">

    <style>
        body {
            background-color: #030f27;
        }

        .logo {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        button.btn.btn-primary.btn-block {
            background-color: #fdbe33;
            color: #37398a;
            border: 0;
        }

        .form-control {
            background: #fff;
            border: 1px solid #eaeaea;
            color: #454545;
            height: 50px;
        }

        label {
            color: #37398a;
        }

        .col-xl-5.logo {
            padding: 20px 0 20px 20px;
        }

        a {
            color: #593bdb !important;
            text-decoration: none;
            background-color: transparent;
        }

        .text-center {
            text-align: center !important;
            font-weight: bold;
        }

        .alert-danger {
            color: #721c24;
            background-color: #f8d7da;
            border-color: #f5c6cb;
        }
    </style>

</head>

<body class="h-100">
    <div class="authincation h-100">
        <div class="container-fluid h-100">
            <div class="row justify-content-center h-100 align-items-center">
                <div class="col-md-6">
                    <div class="authincation-content">
                        <div class="row no-gutters">
                            <div class="col-xl-5 logo">
                                <img class="w-100" src="<?php echo base_url('/'); ?>/public/company/img/logosiripabarnew5.png" alt="Logo">
                            </div>
                            <div class="col-xl-7">
                                <div class="auth-form">
                                    <h2 class="text-center mb-4 strong">SELAMAT DATANG</h2>
                                    <!-- <?php echo $this->session->flashdata('message'); ?></p> -->
                                    <?php echo form_open("auth/login"); ?>
                                    <div class="form-group">
                                        <label class=""><strong>Email</strong></label>
                                        <input type="text" name="identity" class="form-control" id="identity" required placeholder="Ketik email Anda di sini">
                                    </div>
                                    <div class="form-group">
                                        <label><strong>Kata Sandi</strong></label>
                                        <input type="password" name="password" class="form-control" id="password" required placeholder="Ketik kata sandi Anda di sini">
                                    </div>
                                    <!-- <div class="text-center form-row d-flex justify-content-center mt-4 mb-2">
                                        <a href="page-forgot-password.html">Lupa Kata Sandi?</a>
                                    </div> -->
                                    <div class="text-center mt-5">
                                        <button type="submit" class="btn btn-primary btn-block">LOGIN</button>
                                    </div>
                                    <div class="text-center mt-5">
                                        <h5>Kembali ke <a href="<?php echo base_url('/') ?>">Beranda</a></h5>
                                    </div>
                                    <?php echo form_close(); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="<?php echo base_url(); ?>public/focus-theme/vendor/global/global.min.js"></script>
    <script src="<?php echo base_url(); ?>public/focus-theme/js/quixnav-init.js"></script>
    <script src="<?php echo base_url(); ?>public/focus-theme/js/custom.min.js"></script>
</body>

</html>