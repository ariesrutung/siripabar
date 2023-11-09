<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?= $title; ?></title>

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
                <!-- /# row -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-title">
                                <h4>Unduh Laporan Pengaduan</h4>
                            </div>
                            <div class="card-body">
                                <div class="horizontal-form">
                                    <form class="form-horizontal">
                                        <p class="mt-4">Filter data laporan pengaduan yang akan diunduh</p>
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <div class="form-group px-o py-0 mt-0 mb-0">
                                                    <label class="py-0 mt-0 mb-0 control-label">Pilih Kab/Kota</label>
                                                    <div class="col-sm-12 px-0">
                                                        <select class="form-control" name="kabupaten" id="kabupaten">
                                                            <option value="Semua">- Semua Kabupaten/Kota -</option>
                                                            <option value="92.02">KAB. MANOKWARI</option>
                                                            <option value="92.71">KOTA SORONG</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group px-o py-0 mt-0 mb-0">
                                                    <label class="py-0 mt-0 mb-0 control-label">Pilih Tanggal Mulai</label>
                                                    <div class="col-sm-12 px-0">
                                                        <input type="date" class="form-control" name="startdate">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group px-o py-0 mt-0 mb-0">
                                                    <label class="py-0 mt-0 mb-0 control-label">Pilih Tanggal Akhir</label>
                                                    <div class="col-sm-12 px-0">
                                                        <input type="date" class="form-control" name="todate">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row mt-4">
                                            <div class="col-lg-3">
                                                <div class="form-group  px-o py-0 mt-0 mb-0">
                                                    <label class="py-0 mt-0 mb-2 control-label">Pilih Format Laporan</label><br>
                                                    <label class="radio-inline col-sm-4 px-4">
                                                        <input class="form-check-input" type="radio" name="formatcetak" id="pilihinfra" value="cetakpdf"> PDF</label>
                                                    <label class="radio-inline col-sm-4 px-4">
                                                        <input class="form-check-input" type="radio" name="formatcetak" id="pilihinfra" value="cetakexcel"> Excel</label>
                                                </div>
                                            </div>

                                            <div class="col-lg-5">
                                                <div class="form-group  px-o py-0 mt-0 mb-0">
                                                    <label class="py-0 mt-0 mb-2 control-label">Pilih Status Laporan</label><br>
                                                    <label class="radio-inline col-sm-3 px-4">
                                                        <input class="form-check-input" type="radio" name="statuslaporan" value="Menunggu"> Menunggu
                                                    </label>
                                                    <label class="radio-inline col-sm-3 px-4">
                                                        <input class="form-check-input" type="radio" name="statuslaporan" value="Diterima"> Diterima</label>
                                                    <label class="radio-inline col-sm-3 px-4">
                                                        <input class="form-check-input" type="radio" name="statuslaporan" value="Ditolak"> Ditolak</label>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group  px-o py-0 mt-0 mb-0">
                                                    <label class="py-0 mt-0 mb-2 control-label">Gambar Dokumentasi</label><br>
                                                    <label class="radio-inline col-sm-3 px-4">
                                                        <input class="form-check-input" type="radio" name="pilihangambar" value="1"> Ya
                                                    </label>
                                                    <label class="radio-inline col-sm-3 px-4">
                                                        <input class="form-check-input" type="radio" name="pilihangambar" value="0"> Tidak</label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group px-o py-0 mt-0 mb-0">
                                            <div class="col-sm-offset-2 col-sm-10 px-2">
                                                <button type="submit" class="btn btn-default btn-primary">Unduh Laporan</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div id="extra-area-chart"></div>
                            <div id="morris-line-chart"></div>
                            <div class="footer">
                                <p>2018 © Admin Board. - <a href="#">example.com</a></p>
                            </div>
                        </div>
                    </div>
                </div>
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

    <script src="<?php echo base_url(); ?>public/focus-theme/vendor/global/global.min.js"></script>
    <script src="<?php echo base_url(); ?>public/focus-theme/js/quixnav-init.js"></script>
    <script src="<?php echo base_url(); ?>public/focus-theme/js/custom.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#menuunduhlaporan').last().addClass("active");
        });
    </script>
</body>

</html>