<script src="https://cdn.tiny.cloud/1/2onuugfnc4zd46qg4zym8s946ezny033scq014mxt4usgs1q/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>

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

    .card-header {
        width: 100%;
    }

    @media (min-width: 992px) {

        .modal-lg,
        .modal-xl {
            max-width: 1000px;
        }
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
                            <a class="btn btn-info btn-sm text-white" data-toggle="modal" data-target=".modalTambahBerita" data-backdrop="static">
                                <span class="icon text-white-50">
                                    <i class="fa fa-plus"></i>
                                </span>
                                <span class="text">Tambah Berita</span>
                            </a>
                        </div>
                        <!-- <a data-toggle="modal" data-target=".modalTambahBerita" data-backdrop="static" class="btn btn-info btn-sm text-white">Tambah Berita</a> -->
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
                                                    <a href="#" class="btn btn-primary editform" data-backdrop="static" data-idberita="<?php echo $news->id; ?>" data-judul="<?php echo $news->judul; ?>" data-isiberita="<?php echo $news->isiberita; ?>" data-tanggal="<?php echo $news->tanggal; ?>" data-gambar="<?php echo $news->gambar; ?>" data-lok_berita="<?php echo $news->lok_berita; ?>" data-tag="<?php echo $news->tag; ?>" data-ket_gambar="<?php echo $news->ket_gambar; ?>">
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
<div id="modalTambahBerita" class="modal fade modalTambahBerita" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalTambahBeritaLabel">Tambah Berita</h5>
                <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                </button>
            </div>
            <?php echo $this->session->flashdata('notif'); ?>
            <?php echo form_open('admin/berita/add_berita', array('method' => 'post', 'enctype' => 'multipart/form-data')); ?>
            <div class="modal-body">
                <div class="row modal-content-scrollable">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="form-group">
                            <label class="text-label">Judul Berita</label>
                            <input type="text" class="form-control" name="judul">
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="form-group">
                            <label class="text-label">Isi Berita</label>
                            <textarea class="form-control" id="isiberita" name="isiberita"></textarea>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                        <div class="form-group">
                            <label class="text-label">Lokasi Berita</label>
                            <input class="form-control" id="lok_berita" name="lok_berita">
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                        <div class="form-group">
                            <label class="text-label">Tag Berita</label>
                            <input class="form-control" id="tag" name="tag">
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                        <div class="form-group">
                            <label class="text-label">Tanggal Publikasi</label>
                            <input type="datetime-local" class="form-control" name="tanggal">
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="form-group">
                            <label class="text-label">Gambar Berita</label><br>
                            <!-- <input type="file" class="form-control" name="gambar" required> -->
                            <input type="file" id="gambar" name="gambar" accept="image/*" onchange="loadFile(event)">
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
                <?php echo form_open('admin/berita/update_berita', array('id' => 'formEditBerita', 'method' => 'post', 'enctype' => 'multipart/form-data')); ?>
                <input type="hidden" id="edit_id_berita" name="id_berita">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label for="edit_judul">Judul Berita</label>
                            <input type="text" class="form-control" id="edit_judul" name="edit_judul">
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label for="edit_isiberita">Isi Berita</label>
                            <textarea type="text" class="form-control" id="edit_isiberita" name="edit_isiberita"></textarea>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label class="text-label">Lokasi Berita</label>
                            <input class="form-control" id="edit_lokberita" name="edit_lokberita">
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label for="edit_tanggal">Waktu Publikasi</label>
                            <input type="datetime-local" class="form-control" id="edit_tanggal" name="edit_tanggal">
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label class="text-label">Tag Berita</label>
                            <input class="form-control" id="edit_tag" name="edit_tag">
                        </div>

                    </div>
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label for="edit_gambar">Gambar Berita</label><br>
                            <input type="file" id="edit_gambar" name="edit_gambar" accept="image/*" onchange="loadFile(event)">
                            <img id="previewGambar" class="w-25" src="<?php echo base_url(); ?>upload/berita" alt="Gambar Daerah Irigasi">
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="text-label">Keterangan Gambar</label>
                            <input class="form-control" id="edit_ketgambar" name="edit_ketgambar">
                        </div>
                    </div>
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
</div>

<script src="https://unpkg.com/dropzone@6.0.0-beta.1/dist/dropzone-min.js"></script>

<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

<script>
    $(document).ready(function() {
        $('#menuberita').last().addClass("active");
    });

    tinymce.init({
        selector: '#isiberita',
        plugins: 'autoresize',
        height: 300,
        // Add other configurations as needed
    });
</script>

<!-- Tambahkan skrip JavaScript untuk menampilkan data berita ke dalam modal -->
<script>
    $(document).ready(function() {
        $('.editform').on('click', function() {
            var idBerita = $(this).data('idberita');
            var judul = $(this).data('judul');
            var isiberita = $(this).data('isiberita');
            var lok_berita = $(this).data('lok_berita');
            var tag = $(this).data('tag');
            var tanggal = $(this).data('tanggal');
            var gambar = $(this).data('gambar');
            var ket_gambar = $(this).data('ket_gambar');

            // Tempatkan data berita ke dalam modal
            $('#edit_id_berita').val(idBerita);
            $('#edit_judul').val(judul);
            // $('#edit_isiberita').val(isiberita);
            $('#edit_lokberita').val(lok_berita);
            $('#edit_tag').val(tag);
            $('#edit_tanggal').val(tanggal);
            $('#edit_ketgambar').val(ket_gambar);

            $('#previewGambar').attr('src', gambar);
            // Mengosongkan input file gambar

            // var isiberita = $(this).data('isiberita');
            // tinymce.get('#edit_isiberita').setContent(isiberita);

            // Initialize TinyMCE
            // Initialize TinyMCE
            tinymce.init({
                selector: '#edit_isiberita',
                plugins: 'autoresize',
                height: 300,
                // Add other configurations as needed
            });

            // Set the content after initialization
            var isiberita = $(this).data('isiberita');
            tinymce.get('edit_isiberita').setContent(isiberita);

            // Buka modal
            $('#modalEditBerita').modal('show');

            $.ajax({
                url: 'berita/getGambarDetail/' + idBerita, // Sesuaikan dengan URL controller dan method Anda
                type: 'GET',
                dataType: 'json',
                success: function(response) {
                    if (response.gambarPath) {
                        // Atur nilai atribut 'src' dari elemen gambar
                        $('#previewGambar').attr('src', response.gambarPath);
                    } else {
                        // Atur nilai atribut 'src' ke gambar default jika tidak ada gambar
                        $('#previewGambar').attr('src', '<?php echo base_url(); ?>upload/berita/default-image.jpg');
                    }

                    // Buka modal
                    $('#modalEditBerita').modal('show');
                },
                error: function() {
                    alert('Error fetching data. Please try again.');
                }
            });
        });

        $('.deletedata').on('click', function() {
            var idBerita = $(this).data('idberita');

            // Use SweetAlert for confirmation
            Swal.fire({
                title: 'Anda Yakin?',
                text: 'Data tidak akan kembali setelah dihapus!!',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Ya, hapus!'
            }).then((result) => {
                if (result.isConfirmed) {
                    // Send AJAX request for deletion
                    $.ajax({
                        url: '<?php echo base_url("admin/berita/delete_berita"); ?>',
                        type: 'POST',
                        data: {
                            id_berita: idBerita
                        },
                        success: function(response) {
                            // Show SweetAlert on success
                            Swal.fire({
                                title: 'Sukses!',
                                text: 'Data Anda berhasil dihapus.',
                                icon: 'success',
                                confirmButtonText: 'OK'
                            }).then((result) => {
                                // Reload the page after deletion
                                location.reload();
                            });
                        },
                        error: function(xhr, status, error) {
                            console.error(xhr.responseText);
                            // Show SweetAlert on error
                            Swal.fire({
                                title: 'Eror!',
                                text: 'Data gagal dihapus.',
                                icon: 'error',
                                confirmButtonText: 'OK'
                            });
                        }
                    });
                }
            });
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
    $(document).ready(function() {
        // Get the form element
        var formTambahBerita = $('#modalTambahBerita form');

        // Add a submit event listener to the form
        formTambahBerita.submit(function(event) {
            // Prevent the default form submission
            event.preventDefault();

            // Submit the form using AJAX
            $.ajax({
                type: formTambahBerita.attr('method'),
                url: formTambahBerita.attr('action'),
                data: new FormData(formTambahBerita[0]),
                processData: false,
                contentType: false,
                success: function(response) {
                    // Show SweetAlert on success
                    Swal.fire({
                        title: 'Sukses!',
                        text: 'Berita berhasil ditambahkan.',
                        icon: 'success',
                        confirmButtonColor: '#3085d6',
                        confirmButtonText: 'OK'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            // Close the modal
                            $('#modalTambahBerita').modal('hide');
                            // Reload the page or perform other actions if needed
                            location.reload();
                        }
                    });
                },
                error: function(xhr, status, error) {
                    console.error(xhr.responseText);
                    // Show SweetAlert on error
                    Swal.fire({
                        title: 'Error!',
                        text: 'Gagal menambahkan berita.',
                        icon: 'error',
                        confirmButtonText: 'OK'
                    });
                }
            });
        });

        var formEditBerita = $('#modalEditBerita form');

        // Add a submit event listener to the form
        formEditBerita.submit(function(event) {
            // Prevent the default form submission
            event.preventDefault();

            // Submit the form using AJAX
            $.ajax({
                type: formEditBerita.attr('method'),
                url: formEditBerita.attr('action'),
                data: new FormData(formEditBerita[0]),
                processData: false,
                contentType: false,
                success: function(response) {
                    // Show SweetAlert on success
                    Swal.fire({
                        title: 'Sukses!',
                        text: 'Berita berhasil ditambahkan.',
                        icon: 'success',
                        confirmButtonColor: '#3085d6',
                        confirmButtonText: 'OK'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            // Close the modal
                            $('#modalEditBerita').modal('hide');
                            // Reload the page or perform other actions if needed
                            location.reload();
                        }
                    });
                },
                error: function(xhr, status, error) {
                    console.error(xhr.responseText);
                    // Show SweetAlert on error
                    Swal.fire({
                        title: 'Error!',
                        text: 'Gagal menambahkan berita.',
                        icon: 'error',
                        confirmButtonText: 'OK'
                    });
                }
            });
        });
    });
</script>