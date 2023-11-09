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
    <link href="<?php echo base_url(); ?>public/focus-theme/vendor/datatables/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>public/focus-theme/assets/css/lib/helper.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>public/focus-theme/assets/css/style.css" rel="stylesheet">

    <style>
        .modal-body label {
            color: #000;
        }

        .modal-content-scrollable {
            max-height: 400px;
            /* Adjust the maximum height as needed */
            overflow-y: auto;
        }

        label.text-label {
            text-transform: uppercase;
        }
    </style>
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
                                            <?php foreach ($daerahirigasi as $di) { ?>
                                                <tr>
                                                    <td><?php echo $di->provinsi; ?></td>
                                                    <td><?php echo $di->kabupaten; ?></td>
                                                    <td><?php echo $di->kode_di; ?></td>
                                                    <td><?php echo $di->nama_di; ?></td>
                                                    <td><?php echo $di->jenis_di; ?></td>
                                                    <td><?php echo $di->luas_fungsional; ?></td>
                                                    <td><a href="#" data-toggle="modal" data-target=".modalSkema" class="btn btn-sm btn-primary"><i class="fa fa-map-marker"></i> Skema</a><a href="#" data-toggle="modal" data-target=".modalLaporan" class="btn btn-sm btn-success"><i class="fa fa-file"></i> Laporan</a></td>
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

        <!-- Modal Skema -->
        <div class="modal fade modalSkema" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Skema Daerah Irigasi</h5>
                        <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="#" id="step-form-horizontal" class="step-form-horizontal">
                            <div>
                                <section>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="row">
                                                <div class="col-lg-12 px-0 py-0">
                                                    <div class="form-group">
                                                        <label class="text-label">Jumlah Aset (PAI)</label>
                                                        <input type="number" name="jumlah_aset" class="form-control" required>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12 px-0 py-0">
                                                    <div class="form-group">
                                                        <label class="text-label">Jumlah Subsistem</label>
                                                        <input type="number" name="jumlah_subsistem" class="form-control" required>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12 px-0 py-0">
                                                    <div class="form-group">
                                                        <label class="text-label">Data AKNOP</label>
                                                        <div class="input-group">
                                                            <input type="text" class="form-control" name="data_aknop" required>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12 px-0 py-0">
                                                    <div class="form-group">
                                                        <label class="text-label">Panjang Saluran Induk</label>
                                                        <div class="input-group">
                                                            <input type="text" name="saluran_induk" class="form-control" required>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12 px-0 py-0">
                                                    <div class="form-group">
                                                        <label class="text-label">Panjang Saluran Muka</label>
                                                        <input type="text" name="salauran_muka" class="form-control" required>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12 px-0 py-0">
                                                    <div class="form-group">
                                                        <label class="text-label">Panjang Saluran Pengelak Banjir</label>
                                                        <input type="text" name="saluran_pengelak" class="form-control" required>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12 px-0 py-0">
                                                    <div class="form-group">
                                                        <label class="text-label">Panjang Saluran Pembuang (Tersier)</label>
                                                        <div class="input-group">
                                                            <input name="saluran_pembuang" type="text" class="form-control" id="emial1" required>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-6">
                                            <div class="row">
                                                <div class="col-lg-12 px-0 py-0">
                                                    <div class="form-group">
                                                        <label class="text-label">Panjang Saluran Sekunder</label>
                                                        <div class="input-group">
                                                            <input type="text" name="saluran_sekunder" class="form-control" required>

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12 px-0 py-0">
                                                    <div class="form-group">
                                                        <label class="text-label">Panjang Saluran Pembuang</label>
                                                        <input type="text" name="panjang_pembuang" class="form-control" required>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12 px-0 py-0">
                                                    <div class="form-group">
                                                        <label class="text-label">Panjang Saluran Tersier</label>
                                                        <input type="text" name="panjang_tersier" class="form-control" required>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12 px-0 py-0">
                                                    <div class="form-group">
                                                        <label class="text-label">Panjang Saluran Pembuang</label>
                                                        <input type="text" name="place" class="form-control" required>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12 px-0 py-0">
                                                    <div class="form-group">
                                                        <label class="text-label">Panjang Saluran Suplesi</label>
                                                        <input type="text" name="panjang_suplesi" class="form-control" required>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12 px-0 py-0">
                                                    <div class="form-group">
                                                        <label class="text-label">Panjang Saluran Gendong</label>
                                                        <input type="text" name="panjang_gendong" class="form-control" required>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12 px-0 py-0">
                                                    <div class="form-group">
                                                        <label class="text-label">Panjang Saluran Kuarter</label>
                                                        <input type="text" name="panjang_kuarter" class="form-control" required>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>

                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </div>
        </div>


        <!-- Modal Laporan -->
        <div class="modal fade modalLaporan" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Laporan Daerah Irigasi</h5>
                        <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="modal-content-scrollable">
                            <form action="#" id="step-form-horizontal" class="step-form-horizontal">
                                <div>
                                    <section>
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="row">
                                                    <div class="col-lg-12 px-0 py-0">
                                                        <div class="form-group">
                                                            <label class="text-label">Tgl SPMK Kontraktor</label>
                                                            <input type="date" name="jumlah_aset" class="form-control" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12 px-0 py-0">
                                                        <div class="form-group">
                                                            <label class="text-label">Sumber Dana Kontraktor</label>
                                                            <input type="text" name="jumlah_subsistem" class="form-control" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12 px-0 py-0">
                                                        <div class="form-group">
                                                            <label class="text-label">Nilai Kontrak Kontraktor</label>
                                                            <div class="input-group">
                                                                <input type="text" class="form-control" name="data_aknop" required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12 px-0 py-0">
                                                        <div class="form-group">
                                                            <label class="text-label">No. DPA</label>
                                                            <div class="input-group">
                                                                <input type="text" name="saluran_induk" class="form-control" required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12 px-0 py-0">
                                                        <div class="form-group">
                                                            <label class="text-label">Tanggal DPA Kontraktor</label>
                                                            <input type="date" name="salauran_muka" class="form-control" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12 px-0 py-0">
                                                        <div class="form-group">
                                                            <label class="text-label">Bulan Kontraktor</label>
                                                            <input type="text" name="saluran_pengelak" class="form-control" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12 px-0 py-0">
                                                        <div class="form-group">
                                                            <label class="text-label">Hari Kontraktor</label>
                                                            <div class="input-group">
                                                                <input name="saluran_pembuang" type="text" class="form-control" id="emial1" required>

                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-12 px-0 py-0">
                                                        <div class="form-group">
                                                            <label class="text-label">Tanggal PHO Kontraktor</label>
                                                            <div class="input-group">
                                                                <input type="date" name="saluran_sekunder" class="form-control" required>

                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12 px-0 py-0">
                                                        <div class="form-group">
                                                            <label class="text-label">Kabupaten</label>
                                                            <input type="text" name="panjang_pembuang" class="form-control" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12 px-0 py-0">
                                                        <div class="form-group">
                                                            <label class="text-label">Distrik</label>
                                                            <input type="text" name="panjang_tersier" class="form-control" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12 px-0 py-0">
                                                        <div class="form-group">
                                                            <label class="text-label">Titik Koordinat</label>
                                                            <input type="text" name="place" class="form-control" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12 px-0 py-0">
                                                        <div class="form-group">
                                                            <label class="text-label">No. Kontrak Add. I Kontraktor</label>
                                                            <input type="text" name="panjang_suplesi" class="form-control" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12 px-0 py-0">
                                                        <div class="form-group">
                                                            <label class="text-label">Tanggal Kontrak Add. I Kontraktor</label>
                                                            <input type="date" name="panjang_gendong" class="form-control" required>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-lg-6">
                                                <div class="row">

                                                    <div class="col-lg-12 px-0 py-0">
                                                        <div class="form-group">
                                                            <label class="text-label">No. Kontrak Add. II Kontraktor</label>
                                                            <input type="text" name="panjang_kuarter" class="form-control" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12 px-0 py-0">
                                                        <div class="form-group">
                                                            <label class="text-label">Tanggal Kontrak Add. II Kontraktor</label>
                                                            <input type="date" name="panjang_kuarter" class="form-control" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12 px-0 py-0">
                                                        <div class="form-group">
                                                            <label class="text-label">ADD. 1 BULAN KONTRAKTOR</label>
                                                            <input type="text" name="panjang_kuarter" class="form-control" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12 px-0 py-0">
                                                        <div class="form-group">
                                                            <label class="text-label">ADD. I HARI KONTRAKTOR</label>
                                                            <input type="text" name="panjang_kuarter" class="form-control" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12 px-0 py-0">
                                                        <div class="form-group">
                                                            <label class="text-label">ADD. I TGL PHO KONTRAKTOR</label>
                                                            <input type="text" name="panjang_kuarter" class="form-control" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12 px-0 py-0">
                                                        <div class="form-group">
                                                            <label class="text-label">ADD. II BULAN KONTRAKTOR</label>
                                                            <input type="text" name="panjang_kuarter" class="form-control" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12 px-0 py-0">
                                                        <div class="form-group">
                                                            <label class="text-label">ADD. II HARI KONTRAKTOR</label>
                                                            <input type="text" name="panjang_kuarter" class="form-control" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12 px-0 py-0">
                                                        <div class="form-group">
                                                            <label class="text-label">ADD. II TGL PHO KONTRAKTOR</label>
                                                            <input type="text" name="panjang_kuarter" class="form-control" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12 px-0 py-0">
                                                        <div class="form-group">
                                                            <label class="text-label">Dokumen Kontrak (Termasuk RAB)</label>
                                                            <input type="text" name="panjang_kuarter" class="form-control" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12 px-0 py-0">
                                                        <div class="form-group">
                                                            <label class="text-label">Gambar Rencana</label>
                                                            <input type="text" name="panjang_kuarter" class="form-control" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12 px-0 py-0">
                                                        <div class="form-group">
                                                            <label class="text-label">Gambar As Built Drawing</label>
                                                            <input type="text" name="panjang_kuarter" class="form-control" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12 px-0 py-0">
                                                        <div class="form-group">
                                                            <label class="text-label">Dokumentasi</label>
                                                            <input type="text" name="panjang_kuarter" class="form-control" required>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </section>

                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </div>
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