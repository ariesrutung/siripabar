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
    <link href="<?php echo base_url(); ?>public/focus-theme/vendor/datatables/css/jquery.dataTables.min.css" rel="stylesheet">
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
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-title pr">
                                <h4>Data Daerah Irigasi</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="example2" class="display" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>Provinsi</th>
                                                <th>Kab/Kota</th>
                                                <th>Kode D.I.</th>
                                                <th>Nama Daerah Irigasi</th>
                                                <th>Jenis Irigasi</th>
                                                <th>Luas Fungsional</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($daerahirigasi AS $di) { ?>
                                            <tr>
                                                <td><?php echo $di->provinsi;?></td>
                                                <td><?php echo $di->kabupaten;?></td>
                                                <td><?php echo $di->kode_di;?></td>
                                                <td><?php echo $di->nama_di;?></td>
                                                <td><?php echo $di->jenis_di;?></td>
                                                <td><?php echo $di->luas_fungsional;?></td>
                                                <td><a href="#" class="btn btn-sm btn-primary"><i class="fa fa-map-marker"></i> Skema</a><a href="#" class="btn btn-sm btn-success"><i class="fa fa-file"></i> Laporan</a></td>
                                            </tr>
                                           <?php } ?>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>Provinsi</th>
                                                <th>Kab/Kota</th>
                                                <th>Kode D.I.</th>
                                                <th>Nama Daerah Irigasi</th>
                                                <th>Jenis Irigasi</th>
                                                <th>Luas Fungsional</th>
                                                <th>Action</th>

                                            </tr>
                                        </tfoot>
                                    </table>
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
    <!-- Datatable -->
    <script src="<?php echo base_url(); ?>public/focus-theme/vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url(); ?>public/focus-theme/js/plugins-init/datatables.init.js"></script>

    <script>
        $(document).ready(function() {
            $('#menudaerahirigasi').last().addClass("active");
        });
    </script>
</body>

</html>