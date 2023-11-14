<script src="https://cdn.ckeditor.com/ckeditor5/11.0.1/classic/ckeditor.js"></script>

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

    table.table td,
    table.table th {
        color: #000;
    }

    .ck.ck-editor__main .ck-content {
        height: 239px;
    }

    #More {
        color: #000;
        font-weight: bold;
        margin-top: 10px;
        text-align: right;
    }

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

    .aksi {
        width: 143px;
        display: flex;
        justify-content: space-around;
    }

    a.btn {
        display: flex;
        justify-content: center;
        align-items: center;
        margin: 5px;
    }

    .text-white-50 {
        color: rgba(255, 255, 255, 0.5) !important;
        margin: 2px 4px;
        display: flex;
        justify-content: center;
        align-items: center;
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
                        <a data-toggle="modal" data-target=".modalTambahBerita" data-backdrop="static" class="btn btn-info btn-sm text-white">Tambah Berita</a>
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
                                        <th>Gambar Berita</th>
                                        <th>Aksi</th>
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
                                            <!-- <td><?php // echo $news->isiberita; 
                                                        ?></td> -->
                                            <td>
                                                <span class="p1"><?php echo $news->isiberita; ?></span>
                                                <a id="More" class="text-bold">Tampil Penuh</a>
                                            </td>
                                            <td>
                                                <?php if (!empty($news->gambar) && file_exists('upload/berita/' . $news->gambar)) : ?>
                                                    <img class="w-70" src="<?php echo base_url('upload/berita/' . $news->gambar); ?>" alt="">
                                                <?php else : ?>
                                                    <span>Gambar Tidak Tersedia</span>
                                                <?php endif; ?>
                                            </td>
                                            <td>
                                                <div class="aksi">
                                                    <a href="#" class="btn btn-primary editform" data-backdrop="static" data-idberita="<?php echo $news->id; ?>" data-judul="<?php echo $news->judul; ?>" data-isiberita="<?php echo $news->isiberita; ?>" data-tanggal="<?php echo $news->tanggal; ?>" data-gambar="<?php echo $news->gambar; ?>">
                                                        <span class="icon text-white-50">
                                                            <i class="fa fa-edit"></i>
                                                        </span>
                                                        <span class="text"> Edit</span>
                                                    </a>

                                                    <a href="#" class="btn btn-danger deletedata" data-idberita="<?php echo $news->id; ?>">
                                                        <span class="icon text-white-50">
                                                            <i class="fa fa-trash"></i>
                                                        </span>
                                                        <span class="text"> Hapus</span>
                                                    </a>
                                                </div>

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
                <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                </button>
            </div>
            <?php echo $this->session->flashdata('notif'); ?>
            <?php echo form_open('admin/beritanew/add_berita', array('method' => 'post', 'enctype' => 'multipart/form-data')); ?>
            <div class="modal-body">
                <div class="row modal-content-scrollable">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="form-group">
                            <label class="text-label">Judul Berita</label>
                            <input type="text" class="form-control" name="judul" required>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="form-group">
                            <label class="text-label">Isi Berita</label>
                            <textarea class="form-control" id="isiberita" name="isiberita"></textarea>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="form-group">
                            <label class="text-label">Lokasi Berita</label>
                            <input class="form-control" id="lok_berita" name="lok_berita">
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="form-group">
                            <label class="text-label">Tag Berita</label>
                            <input class="form-control" id="tag" name="tag">
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="form-group">
                            <label class="text-label">Tanggal Publikasi</label>
                            <input type="datetime-local" class="form-control" name="tanggal" required>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="form-group">
                            <label class="text-label">Gambar Berita</label><br>
                            <!-- <input type="file" class="form-control" name="gambar" required> -->
                            <input type="file" id="gambar" name="gambar" accept="image/*" onchange="loadFile(event)" required>
                            <img class="w-25" id="gbr" />
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="form-group">
                            <label class="text-label">Keterangan Gambar</label>
                            <input class="form-control" id="ket_gambar" name="ket_gambar">
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
                    <textarea type="text" class="form-control" id="edit_isiberita" name="edit_isiberita"></textarea>
                </div>
                <div class="form-group">
                    <label class="text-label">Lokasi Berita</label>
                    <input class="form-control" id="edit_lokberita" name="edit_lokberita">
                    <div class="form-group">
                        <label class="text-label">Tag Berita</label>
                        <input class="form-control" id="edit_tag" name="edit_tag">
                    </div>
                    <div class="form-group">
                        <label for="edit_tanggal">Waktu Publikasi</label>
                        <input type="datetime-local" class="form-control" id="edit_tanggal" name="edit_tanggal" required>
                    </div>
                    <div class="form-group">
                        <label for="edit_gambar">Gambar Berita</label><br>
                        <input type="file" id="edit_gambar" name="edit_gambar" accept="image/*" onchange="loadFile(event)" required>
                        <img class="w-25" id="output" />
                    </div>
                    <div class="form-group">
                        <label class="text-label">Keterangan Gambar</label>
                        <input class="form-control" id="edit_ketgambar" name="edit_ketgambar">
                    </div>
                    <!-- Tambahkan bidang lainnya sesuai kebutuhan -->
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary text-white">Simpan Perubahan</button>
                    </div>
                    <?php echo form_close(); ?>
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

    <script src="<?php echo base_url(); ?>public/focus-theme/assets/js/scripts.js"></script>
    <!-- scripit init-->
    <script src="<?php echo base_url(); ?>public/focus-theme/vendor/global/global.min.js"></script>
    <script src="<?php echo base_url(); ?>public/focus-theme/js/quixnav-init.js"></script>
    <script src="<?php echo base_url(); ?>public/focus-theme/js/custom.min.js"></script>
    <script src="https://unpkg.com/dropzone@6.0.0-beta.1/dist/dropzone-min.js"></script>

    <script src="<?php echo base_url(); ?>public/focus-theme/vendor/tinymce/tinymce.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
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

            $('.deletedata').on('click', function() {
                var idBerita = $(this).data('idberita');

                // Tampilkan konfirmasi sebelum menghapus
                if (confirm('Apakah Anda yakin ingin menghapus berita ini?')) {
                    // Kirim permintaan AJAX untuk penghapusan
                    $.ajax({
                        url: '<?php echo base_url("admin/beritanew/delete_berita"); ?>',
                        type: 'POST',
                        data: {
                            id_berita: idBerita
                        },
                        success: function(response) {
                            // Refresh halaman atau lakukan tindakan lain yang diperlukan
                            location.reload();
                        },
                        error: function(xhr, status, error) {
                            console.error(xhr.responseText);
                        }
                    });
                }
            });
        });
    </script>

    <script>
        document.querySelectorAll('#More').forEach(bttn => {
            bttn.dataset.state = 0;
            bttn.addEventListener('click', function(e) {
                let span = this.previousElementSibling;
                span.dataset.tmp = span.textContent;
                span.textContent = span.dataset.content;
                span.dataset.content = span.dataset.tmp;

                this.innerHTML = this.dataset.state == 1 ? 'Tampil Penuh' : 'Tampil Sebagian';
                this.dataset.state = 1 - this.dataset.state;
            })
        });

        document.querySelectorAll('span.p1').forEach(span => {
            span.dataset.content = span.textContent;
            span.textContent = span.textContent.substr(0, 100) + '...';
        })
    </script>


    <script>
        var loadFile = function(event) {
            var reader = new FileReader();
            reader.onload = function() {
                var output = document.getElementById('output');
                output.src = reader.result;
            };
            reader.readAsDataURL(event.target.files[0]);

            var reader = new FileReader();
            reader.onload = function() {
                var output = document.getElementById('gbr');
                output.src = reader.result;
            };
            reader.readAsDataURL(event.target.files[0]);
        };
    </script>

    <script>
        ClassicEditor
            .create(document.querySelector('#isiberita'))
            .catch(error => {
                console.error(error);
            });
    </script>
    <script>
        ClassicEditor
            .create(document.querySelector('#edit_isiberita'))
            .catch(error => {
                console.error(error);
            });
    </script>