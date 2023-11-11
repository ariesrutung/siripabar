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
                                        <th class="text-center" width="">Tanggal Publikasi</th>
                                        <th>Judul Berita</th>
                                        <th>Isi Berita</th>
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
                                            <td><?php echo $news->isiberita; ?></td>
                                            <td>
                                                <img src="<?php echo base_url('upload/berita/' . $news->gambar); ?>" alt="">


                                            </td>
                                            <td>
                                                <a href="#" class="btn btn-info btn-icon-split btn-sm editform" data-idberita="<?php echo $news->id; ?>" data-judul="<?php echo $news->judul; ?>" data-isiberita="<?php echo $news->isiberita; ?>" data-tanggal="<?php echo $news->tanggal; ?>" data-gambar="<?php echo $news->gambar; ?>">
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
            <?php echo form_open('admin/beritanew/add_berita', array('method' => 'post', 'enctype' => 'multipart/form-data')); ?>
            <div class="modal-body">
                <div class="row modal-content-scrollable">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="form-group mb-0">
                            <label class="text-label">Judul Berita</label>
                            <input type="text" class="form-control" name="judul" required>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="form-group mb-0">
                            <label class="text-label">Isi Berita</label>
                            <textarea class="form-control" name="isiberita" required></textarea>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="form-group mb-0">
                            <label class="text-label">Tanggal Publikasi</label>
                            <input type="date" class="form-control" name="tanggal" required>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="form-group mb-0">
                            <label class="text-label">Gambar Berita</label>
                            <input type="file" class="form-control" name="gambar" required>
                        </div>
                    </div>

                </div>
            </div>
            <div class="modal-footer">
                <input class="btn btn-primary text-white" name="submit" type="submit" value="Tambah Berita">
            </div>
            <?php echo form_close(); ?>
        </div>
    </div>
</div>

<!-- Tambahkan modal Bootstrap ke dalam view utama -->
<div class="modal fade" id="modalEditBerita" tabindex="-1" role="dialog" aria-labelledby="modalEditBeritaLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalEditBeritaLabel">Edit Berita</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <?php echo form_open('admin/beritanew/update_berita', array('id' => 'formEditBerita', 'method' => 'post', 'enctype' => 'multipart/form-data')); ?>
                <input type="hidden" id="edit_id_berita" name="id_berita">
                <div class="form-group">
                    <label for="edit_judul">Judul Berita</label>
                    <input type="text" class="form-control" id="edit_judul" name="edit_judul" required>
                </div>
                <div class="form-group">
                    <label for="edit_isiberita">Isi Berita</label>
                    <input type="text" class="form-control" id="edit_isiberita" name="edit_isiberita" required>
                </div>
                <div class="form-group">
                    <label for="edit_tanggal">Waktu Publikasi</label>
                    <input type="date" class="form-control" id="edit_tanggal" name="edit_tanggal" required>
                </div>
                <div class="form-group">
                    <label for="edit_gambar">Gambar Berita</label>
                    <input type="file" class="form-control" id="edit_gambar" name="edit_gambar" required>
                </div>
                <!-- Tambahkan bidang lainnya sesuai kebutuhan -->
                <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                <?php echo form_close(); ?>
            </div>
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
</script>

<!-- Tambahkan skrip JavaScript untuk menampilkan data berita ke dalam modal -->
<script>
    $(document).ready(function() {
        $('.editform').on('click', function() {
            var idBerita = $(this).data('idberita');
            var judul = $(this).data('judul');
            var isiberita = $(this).data('isiberita');
            var tanggal = $(this).data('tanggal');
            var gambar = $(this).data('gambar');

            // Tempatkan data berita ke dalam modal
            $('#edit_id_berita').val(idBerita);
            $('#edit_judul').val(judul);
            $('#edit_isiberita').val(isiberita);
            $('#edit_tanggal').val(tanggal);
            $('#preview_gambar').attr('src', gambar);

            // Mengosongkan input file gambar
            $('#edit_gambar').val('');

            // Buka modal
            $('#modalEditBerita').modal('show');
        });
    });
</script>


<script>
</script>