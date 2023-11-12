<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.2/dropzone.min.css">

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
                                        <th>Nama Galeri</th>
                                        <th>Gambar</th>
                                        <th class="text-center" width="160px">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>

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

            <?php echo form_open_multipart('admin/galeri'); ?>
            <div class="modal-body">
                <div class="row modal-content-scrollable">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="form-group">
                            <label class="text-label">Nama Galeri</label>
                            <input type="text" class="form-control" name="nama_galeri" required>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="form-group">
                            <label class="text-label">Gambar Slider</label><br>
                            <div id="dropzone" class="dropzone"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <input class="btn btn-primary text-white" type="submit" value="Tambah Galeri">
            </div>
            <?php echo form_close(); ?>
        </div>
    </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.2/dropzone.min.js"></script>
<script>
    Dropzone.autoDiscover = false;

    var myDropzone = new Dropzone("#dropzone", {
        url: "<?php echo base_url('admin/galeri'); ?>",
        paramName: "file",
        maxFilesize: 10,
        acceptedFiles: "image/*",
        addRemoveLinks: true
    });
</script>