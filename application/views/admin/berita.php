

    <link href="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/css/bootstrap4-toggle.min.css" rel="stylesheet">

    <link href="https://unpkg.com/dropzone@6.0.0-beta.1/dist/dropzone.css" rel="stylesheet" type="text/css" />

    <style>
        .note-toolbar {
            padding: 10px 5px;
            color: #333;
            background-color: #f5f5f5;
            border-bottom: 1px solid;
            border-color: #ddd;
            border-top-left-radius: 3px;
            border-top-right-radius: 3px;
        }

        .modal-body * {
            color: #000;
        }

        .modal-content-scrollable {
            max-height: 670px;
            overflow-y: auto;
        }

        div#bootstrap-data-table-export_paginate li {
            background-color: #647dfc;
            margin: 10px;
            padding: 10px;
            color: #fff !important;
        }

        div#bootstrap-data-table-export_paginate li a {
            color: #fff;
        }
    </style>
<div class="content-body">
            <div class="container-fluid">
                <!-- /# row -->
                <div class="row">

                    <div class="col-lg-12">
                        <div class="card">

                            <div class="row judulTombol d-flex align-items-center justify-content-between">
                                <div class="card-header">
                                    <h4>Daftar Berita</h4>
                                </div>

                                <a data-toggle="modal" data-target=".modalTambahBerita" class="btn btn-info btn-sm text-white">Tambah Berita</a>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table student-data-table m-t-20">
                                        <thead>
                                            <tr>
                                                <th class="text-center" width="">No.</th>
                                                <th class="text-center" width="">Tanggal Berita</th>
                                                <th>Judul Berita</th>
                                                <th class="text-center" width="">Slider</th>
                                                <th class="text-center" width="160px">Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $no = 1;
                                            foreach ($berita as $news) :
                                            ?>
                                                <tr>
                                                    <td class="text-center"><?php echo $no++; ?></td>
                                                    <td class="text-center"><?php echo $news->tanggal; ?></td>
                                                    <td><?php echo $news->judul; ?></td>
                                                    <?php
                                                    $CI = &get_instance();
                                                    $CI->load->model('M_berita');
                                                    $sl = $CI->M_berita->get_slider_by_idberita($news->id)->row();
                                                    ?>
                                                    <td class="text-center">
                                                        <?php if ($CI->M_berita->get_slider_by_idberita($news->id)->num_rows() > 0) { ?>
                                                            <div data-sliderstatus="<?php echo $sl->slider; ?>" data-idberita="<?php echo $sl->idberita; ?>" class="toggle-btn <?php echo ($sl->slider == '1') ? 'active' : ''; ?>">
                                                                <input type="checkbox" checked data-size="sm" data-toggle="toggle">
                                                                <div class="inner-circle"></div>
                                                            </div>
                                                        <?php } ?>
                                                    </td>
                                                    <td>
                                                        <a href="<?php echo site_url('admin/berita/edit/') . $news->id; ?>" class="btn btn-info btn-icon-split btn-sm editform">
                                                            <span class="icon text-white-50">
                                                                <i class="fa fa-edit"></i>
                                                            </span>
                                                            <span class="text">Edit</span>
                                                        </a>
                                                        <a href="" class="btn btn-danger btn-icon-split btn-sm deletedata" data-idberita="<?php echo $news->id; ?>">
                                                            <span class="icon text-white-50">
                                                                <i class="fa fa-trash"></i>
                                                            </span>
                                                            <span class="text">Hapus</span>
                                                        </a>
                                                    </td>

                                                </tr>
                                            <?php endforeach; ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                   
                </div>
            </div>
        </div>
   

    <!-- Modal -->
    <div class="modal fade modalTambahBerita" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalTambahBeritaLabel">Tambah Berita</h5>
                </div>
                <?php echo $this->session->flashdata('notif'); ?>
                <?php echo form_open_multipart('berita/saveberita', array('id' => 'formInputberita')); ?>
                <!-- <form id="formInputberita" method="POST" enctype="multipart/form-data"></form> -->
                <div class="modal-body">
                    <div class="row modal-content-scrollable">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="form-group mb-0">
                                <label class="text-label">Judul Berita</label>
                                <input type="text" class="form-control" id="judulberita" name="judulberita" required>
                            </div>
                        </div>

                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <label class="text-label mb-0">Kategori Berita</label>
                            <div class="form-group mb-0">
                                <select id="kategoriberita" name="kategoriberita" aria-controls="kategoriberita" class="custom-select form-control form-select" disabled>
                                    <option value="0">- Pilih Kategori Berita - </option>
                                    <option value="Irigasi" selected>Irigasi</option>
                                    <option value="Sungai">Sungai</option>
                                    <option value="Pantai">Pantai</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="form-group mb-0">
                                <label class="text-label mb-0">Isi Berita</label>
                                <textarea type="text" class="form-control " id="isiberita" name="isiberita" required></textarea>
                            </div>
                        </div>

                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="form-group mb-0">
                                <label class="text-label">Slug Berita</label>
                                <input type="text" class="form-control" id="slugberita" name="slugberita" required>
                            </div>
                        </div>

                        <div class="col-sm-12 mb-3">
                            <label for="" class="">Tampilkan gambar berita sebagai slider di halaman beranda?</label>
                            <div class="row">
                                <div class="col-md-6 mt-3">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="slider" id="tampil_slider" checked="">
                                        <label class="form-check-label" for="tampil_slider">
                                            Ya
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-6 mt-3">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="slider" id="no_slider">
                                        <label class="form-check-label" for="no_slider">
                                            Tidak
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="form-group mb-0 mt-0">
                                <label class="text-label">Gambar Berita</label>
                                <div id="gambar_berita" class="dropzone gambar_berita" requireda>
                                    <div class="dz-message">Klik atau drop foto KTP ke sini</div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <input type="hidden" id="id" name="id">

                </div>
                <div class="modal-footer">
                    <button type="submit" name="submit" id="btnSubmit" class="btn btn-primary">Simpan</button>
                </div>
                </form>
            </div>
        </div>
    </div>
    <!-- jquery vendor -->
    <script src="<?php echo base_url(); ?>public/focus-theme/assets/js/lib/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/js/bootstrap4-toggle.min.js"></script>

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
    <script src="https://unpkg.com/dropzone@6.0.0-beta.1/dist/dropzone-min.js"></script>

    <script src="<?php echo base_url(); ?>public/focus-theme/vendor/tinymce/tinymce.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#menuberita').last().addClass("active");
        });

        tinymce.init({
            selector: '#isiberita'
        });
    </script>

    <script>
        Dropzone.autoDiscover = false;
        $(document).ready(function() {


            //untuk slide ON/OFF
            $('.toggle-btn').click(function() {
                $(this).toggleClass('active').siblings().removeClass('active');

                var idberita = $(this).attr('data-idberita');
                var sliderstatus = $(this).attr('data-sliderstatus');

                if (sliderstatus == '0') {
                    $.ajax({
                        type: "POST",
                        url: "<?php echo base_url(); ?>admin/berita/switchslider/1",
                        data: {
                            idberita: idberita,
                            sliderstatus: sliderstatus
                        },
                        success: function(data) {
                            var objData = jQuery.parseJSON(data);
                            console.log(objData.status);
                        }
                    });
                } else if (sliderstatus == '1') {
                    $.ajax({
                        type: "POST",
                        url: "<?php echo base_url(); ?>admin/berita/switchslider/0",
                        data: {
                            idberita: idberita,
                            sliderstatus: sliderstatus
                        },
                        success: function(data) {
                            var objData = jQuery.parseJSON(data);
                            console.log(objData.status);
                        }
                    });
                }
            });

            $('#formInputberita').submit(function(e) {
                e.preventDefault();
                var isiberita = $("textarea[name='isiberita']").val();
                var judulberita = $("input[name='judulberita']").val();
                var slugberita = $("input[name='slugberita']").val();
                var kategoriberita = 'Drainase'

                $.ajax({
                    url: "<?php echo site_url('admin/berita/saveberita') ?>",
                    type: "POST",
                    data: {
                        judulberita: judulberita,
                        isiberita: isiberita,
                        slugberita: slugberita,
                        kategoriberita: kategoriberita,
                    },

                    error: function() {
                        console.log('Tidak berhasil simpan data');
                    },
                    success: function(data) {
                        var objData = jQuery.parseJSON(data);

                        if (objData.status) {
                            console.log('Simpan berhasil');
                            location.reload();
                        } else {
                            console.log('Gagal simpan');
                        }
                    }
                });

            });

            var unggah_gbrberita = new Dropzone(".gambar_berita", {
                autoProcessQueue: true,
                url: "<?php echo site_url('admin/berita/uploadgbrberita') ?>",
                maxFilesize: 50,
                maxFiles: 1,
                method: "post",
                acceptedFiles: "image/*",
                paramName: "gambar_berita",
                dictInvalidFileType: "Type file ini tidak dizinkan",
                addRemoveLinks: true,
            });

            unggah_gbrberita.on("sending", function(a, b, c) {
                a.token = Math.random();
                c.append("token_foto", a.token); //Menmpersiapkan token untuk masing masing foto
                c.append("kodelaporan", $('#gambar_berita').val());
            });


            $(document).on('click', '.deletedata', function() {
                var idberita = $(this).data("idberita");
                if (confirm("Are you sure you want to delete this?")) {
                    $.ajax({
                        url: "<?php echo site_url(); ?>admin/berita/deleteberita",
                        type: "POST",
                        data: {
                            idberita: idberita
                        },
                        success: function(data) {
                            var objData = jQuery.parseJSON(data);
                            console.log(objData.status);
                            console.log(objData.info);
                            //location.reload();
                        }
                    });
                } else {
                    return false;
                }
            });

        });
    </script>
