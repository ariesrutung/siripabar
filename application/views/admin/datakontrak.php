<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?=$title;?></title>

    <!-- ================= Favicon ================== -->
    <!-- Standard -->
    <link rel="shortcut icon" href="http://placehold.it/64.png/000/fff">
    <!-- Retina iPad Touch Icon-->
    <link rel="apple-touch-icon" sizes="144x144" href="http://placehold.it/144.png/000/fff">
    <!-- Retina iPhone Touch Icon-->
    <link rel="apple-touch-icon" sizes="114x114" href="http://placehold.it/114.png/000/fff">
    <!-- Standard iPad Touch Icon-->
    <link rel="apple-touch-icon" sizes="72x72" href="http://placehold.it/72.png/000/fff">
    <!-- Standard iPhone Touch Icon-->
    <link rel="apple-touch-icon" sizes="57x57" href="http://placehold.it/57.png/000/fff">

    <!-- Styles -->
    <link href="<?php echo base_url(); ?>public/focus-theme/assets/css/lib/font-awesome.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>public/focus-theme/assets/css/lib/themify-icons.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>public/focus-theme/assets/css/lib/menubar/sidebar.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>public/focus-theme/assets/css/lib/bootstrap.min.css" rel="stylesheet">

    <link href="<?php echo base_url(); ?>public/focus-theme/assets/css/lib/helper.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>public/focus-theme/assets/css/style.css" rel="stylesheet">
</head>

<body>

    <?php
    if (isset($menu) && $menu)
        $this->load->view($menu);
    ?>


    <div class="content-wrap">
        <div class="main">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-8 p-r-0 title-margin-right">
                        <div class="page-header">
                            <div class="page-title">
                                <h1>Hello, <span>Welcome Here</span></h1>
                            </div>
                        </div>
                    </div>
                    <!-- /# column -->
                    <div class="col-lg-4 p-l-0 title-margin-left">
                        <div class="page-header">
                            <div class="page-title">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                                    <li class="breadcrumb-item active">UI-Blank</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                    <!-- /# column -->
                </div>
                <!-- /# row -->
                <section id="main-content">
                    <div class="row">
                        <div class="col-lg-12">
                            <div id="extra-area-chart"></div>
                            <div id="morris-line-chart"></div>
                            <div class="footer">
                                <p>2018 © Admin Board. - <a href="#">example.com</a></p>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>



    <div id="search">
        <button type="button" class="close">×</button>
        <form>
            <input type="search" value="" placeholder="type keyword(s) here" />
            <button type="submit" class="btn btn-primary">Search</button>
        </form>
    </div>
    <!-- jquery vendor -->
    <script src="<?php echo base_url(); ?>public/focus-theme/assets/js/lib/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>public/focus-theme/assets/js/lib/jquery.nanoscroller.min.js"></script>
    <!-- nano scroller -->
    <script src="<?php echo base_url(); ?>public/focus-theme/assets/js/lib/menubar/sidebar.js"></script>
    <script src="<?php echo base_url(); ?>public/focus-theme/assets/js/lib/preloader/pace.min.js"></script>
    <!-- sidebar -->
    <script src="<?php echo base_url(); ?>public/focus-theme/assets/js/lib/bootstrap.min.js">


    </script>
    <!-- bootstrap -->

    <script src="<?php echo base_url(); ?>public/focus-theme/assets/js/lib/morris-chart/raphael-min.js"></script>
    <script src="<?php echo base_url(); ?>public/focus-theme/assets/js/lib/morris-chart/morris.js"></script>
    <script src="<?php echo base_url(); ?>public/focus-theme/assets/js/lib/morris-chart/morris-init.js"></script>


    <script src="<?php echo base_url(); ?>public/focus-theme/assets/js/scripts.js"></script>
    <!-- scripit init-->

    <script src="<?php echo base_url(); ?>public/focus-theme/vendor/global/global.min.js"></script>
    <script src="<?php echo base_url(); ?>public/focus-theme/js/quixnav-init.js"></script>
    <script src="<?php echo base_url(); ?>public/focus-theme/js/custom.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#menudatakontrak').last().addClass("active");
        });
    </script>
</body>

</html>