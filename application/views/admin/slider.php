<!-- Switchery CSS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/switchery/0.8.0/switchery.css" rel="stylesheet">

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

    table.table th,
    table.table td {
        color: #000;
    }

    .js-switch+.switchery>small {
        top: 0 !important;
        background: #fff;
        border-radius: 100%;
        box-shadow: 0 1px 3px rgba(0, 0, 0, 0.4);
        height: 30px;
        position: absolute;
        width: 30px;
    }

    .js-switch+.switchery {
        border: 1px solid #dfdfdf;
        border-radius: 20px;
        cursor: pointer;
        display: inline-block;
        height: 30px;
        position: relative;
        vertical-align: middle;
        width: 50px;
        margin: 0;
    }

    .image-container {
        position: relative;
        display: inline-block;
    }

    .hover-text {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        color: #fff;
        font-size: 14px;
        opacity: 0;
        transition: opacity 0.3s ease;
    }

    .image-container:hover .hover-text {
        opacity: 1;
    }

    .hover-text {
        background-color: #7e7e7e;
        color: #fff !important;
        font-size: 12px;
        width: 100% !important;
        height: 100% !important;
        display: flex;
        justify-content: center;
        align-items: center;
        padding: 10px;
        text-align: center;
    }

    td.aksi {
        display: flex;
        justify-content: center;
        align-items: center;
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
                            <h4>Daftar Slider</h4>
                        </div>
                        <a data-toggle="modal" data-target=".modalTambahSlider" data-backdrop="static" class="btn btn-primary text-white">Tambah Slider</a>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table student-data-table m-t-20">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Judul Slider</th>
                                        <th>Subjudul</th>
                                        <th>Gambar Slider</th>
                                        <th class="text-center" width="160px">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($sliders as $key => $slider) : ?>
                                        <tr>
                                            <td><?= $key + 1 ?></td>
                                            <td><?= $slider->judul ?></td>
                                            <td><?= $slider->subjudul ?></td>
                                            <td>
                                                <div class="preview-slider" data-toggle="modal" data-target=".modalPreviewSlider" data-image-url="<?= base_url('upload/slider/' . $slider->gambar) ?>">
                                                    <div class="image-container">
                                                        <img width="100" src="<?php echo base_url('upload/slider/' . $slider->gambar . '?t=' . time()); ?>" alt="Slider Image">
                                                        <div class="hover-text">Klik untuk Preview</div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="aksi">
                                                <div class="w-100">
                                                    <input type="checkbox" class="js-switch" data-id="<?= $slider->id ?>" <?= $slider->status == 1 ? 'checked' : '' ?>>
                                                </div>
                                                <a href="<?= base_url('admin/slider/hapus/' . $slider->id) ?>" class="btn btn-danger" onclick="return confirm('Anda yakin ingin menghapus slider ini?')">
                                                    <span class="icon text-white-50">
                                                        <i class="fa fa-trash"></i>
                                                    </span>
                                                    <span class="text"> Hapus</span>
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
<div class="modal fade modalTambahSlider" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalTambahSliderLabel">Tambah Slider</h5>
                <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                </button>
            </div>
            <?php if (isset($error)) {
                echo $error;
            } ?>

            <?php echo form_open_multipart('admin/slider/add_slider'); ?>
            <div class="modal-body">
                <div class="row modal-content-scrollable">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="form-group">
                            <label class="text-label">Judul Slider</label>
                            <input type="text" class="form-control" name="judul" required>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="form-group">
                            <label class="text-label">Subjudul Slider</label>
                            <input type="text" class="form-control" name="subjudul" required>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="form-group">
                            <label class="text-label">Gambar Slider</label><br>
                            <input type="file" name="gambar" accept="image/*" required>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="form-group">
                            <label class="text-label">Status</label>
                            <input type="radio" name="status" value="1" checked> Aktif
                            <input type="radio" name="status" value="0"> Nonaktif
                        </div>
                    </div>

                </div>
            </div>
            <div class="modal-footer">
                <!-- <input class="btn btn-primary text-white" name="submit" type="submit" value="Tambah Berita"> -->
                <input class="btn btn-primary text-white" type="submit" value="Tambah Slider">
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
                    <label for="edit_tanggal">Waktu Publikasi</label>
                    <input type="datetime-local" class="form-control" id="edit_tanggal" name="edit_tanggal" required>
                </div>
                <div class="form-group">
                    <label for="edit_gambar">Gambar Berita</label><br>
                    <input type="file" id="edit_gambar" name="edit_gambar" accept="image/*" onchange="loadFile(event)" required>
                    <img class="w-25" id="output" />
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
<!-- Modal Preview Slider -->
<div class="modal fade modalPreviewSlider" tabindex="-1" role="dialog" aria-labelledby="modalPreviewSliderLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalPreviewSliderLabel">Preview Slider</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body text-center">
                <img id="previewImage" src="" alt="Preview Image" class="img-fluid">
            </div>
        </div>
    </div>
</div>

<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<!-- Switchery JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/js/lightbox.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/switchery/0.8.0/switchery.js"></script>


<script>
    $(document).ready(function() {
        $('#menuslider').last().addClass("active");
    });
</script>

<script>
    $(document).ready(function() {
        $('.js-switch').each(function() {
            var switchery = new Switchery(this, {
                size: 'small'
            });

            $(this).change(function() {
                var sliderId = $(this).data('id');
                var status = this.checked ? 1 : 0;

                // Lakukan AJAX request untuk mengubah status di database
                $.ajax({
                    url: '<?= base_url('admin/slider/ubah_status') ?>',
                    type: 'POST',
                    data: {
                        id: sliderId,
                        status: status
                    },
                    success: function(response) {
                        console.log(response);
                        // Tambahkan logika atau tindakan lain setelah berhasil mengubah status
                    },
                    error: function(error) {
                        console.error(error);
                    }
                });
            });
        });
    });
</script>

<script>
    $(document).ready(function() {
        // Fungsi untuk menampilkan pratinjau gambar di modal
        $('.preview-slider').click(function() {
            var imageUrl = $(this).data('image-url');
            $('#previewImage').attr('src', imageUrl);
            $('.modalPreviewSlider').modal('show');
        });
    });
</script>