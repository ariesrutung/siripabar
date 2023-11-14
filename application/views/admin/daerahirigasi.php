<style>
    #lapIrigasi {
        padding: 10px;
    }

    #lapIrigasi * {
        color: #000;
    }

    hr {
        margin-top: 0px;
        margin-bottom: 1rem;
    }

    .table-responsive * {
        color: #000;
    }

    section {
        margin: 15px;
    }

    .form-group {
        margin-left: 10px;
        margin-right: 10px;
    }

    .modal.fade.modalSkema.show * {
        color: #000;
    }

    .modalSkema .gb {
        height: auto !important;
        padding: 0 !important;
        border: 0 !important;
    }

    .form-control:disabled,
    .form-control[readonly] {
        background: #d3d3d3;
        opacity: 1;
    }

    .modalTambahDaerahIrigasi label {
        color: #000;
    }

    table.table.table-borderless.student-data-table.m-t-20 tr td {
        vertical-align: middle;
        border-color: #eaeaea;
        padding: 5px 0;
    }
</style>
<div class="content-body">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Data Daerah Irigasi</h4>
                        <a href="#" data-toggle="modal" data-backdrop="static" data-target=".modalTambahDaerahIrigasi" class="btn btn-info btn-sm text-white">
                            <span class="icon text-white-50">
                                <i class="fa fa-plus"></i>
                            </span>
                            <span class="text">Tambah Data</span>
                        </a>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table student-data-table m-t-20">
                                <thead>
                                    <tr class="text-center">
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
                                        <tr class="text-center">
                                            <td><?php echo $di->provinsi; ?></td>
                                            <td><?php echo $di->kabupaten; ?></td>
                                            <td><?php echo $di->kode_di; ?></td>
                                            <td><?php echo $di->nama_di; ?></td>
                                            <td><?php echo $di->jenis_di; ?></td>
                                            <td><?php echo $di->luas_fungsional; ?></td>
                                            <td>
                                                <div class="aksi">
                                                    <a href="#" class="btn btn-primary viewDetailDaerahIrigasi" data-backdrop="static" data-iddaerahirigasi="<?php echo $di->id; ?>">
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
                                                <a href="#" data-toggle="modal" data-backdrop="static" data-target=".ModalDetailDaerahIrigasi" class="btn btn-sm btn-info text-white"><i class="fa fa-eye text-white"></i> Lihat</a>
                                                <a href="#" data-toggle="modal" data-target=".modalEditDaerahIrigasi" class="btn btn-sm btn-success"><i class="fa fa-edit text-white"></i> Edit</a>
                                                <a href="#" data-toggle="modal" data-target=".modalLaporan" class="btn btn-sm btn-danger"><i class="fa fa-trash text-white"></i> Hapus</a>
                                            </td>
                                        </tr>
                                    <?php } ?>
                                </tbody>

                            </table>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>
</div>


<!-- Modal Skema -->
<div class="modal fade modalTambahDaerahIrigasi" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Skema Daerah Irigasi</h5>
                <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <?php echo form_open_multipart('admin/daerahirigasi/tambah_dataskemairigasi'); ?>
                <div class="col-md-12">
                    <div class="card">
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#daerahIrigasi">
                                    <!-- <span>
                                        <i class="ti-home"></i>
                                    </span> -->
                                    <span>Daerah Irigasi</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#Skema">
                                    <!-- <span>
                                        <i class="ti-user"></i>
                                    </span> -->
                                    <span>Skema Daerah Irigasi</span>
                                </a>
                            </li>
                        </ul>
                        <!-- Tab panes -->
                        <div class="tab-content tabcontent-border">
                            <div class="tab-pane fade show active" id="daerahIrigasi" role="tabpanel">
                                <div class="pt-4">
                                    <div class="row">
                                        <div class="col-lg-6 px-0 py-0">
                                            <div class="form-group">
                                                <label class="text-label">Nama Provinsi</label>
                                                <input type="text" name="provinsi" class="form-control" value="Prov. Papua Barat" disabled>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 px-0 py-0">
                                            <div class="form-group">
                                                <label class="text-label">Pilih Kabupaten/Kota</label>
                                                <select class="custom-select" name="kabupaten_di" id="kabupaten_di" requireda>
                                                    <div class="help-block with-errors"></div>
                                                    <option value=""><i class="fas fa-chevron-down"></i>- Pilih Kabupaten/Kota -</option>
                                                    <?php
                                                    foreach ($wil_kab as $kab) {
                                                        echo '<option value="' . $kab->kode . '">' . $kab->nama . '</option>';
                                                    }
                                                    ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 px-0 py-0">
                                            <div class="form-group">
                                                <label class="text-label">Nama Daerah Irigasi</label>
                                                <input type="text" name="nama_di" class="form-control" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 px-0 py-0">
                                            <div class="form-group">
                                                <label class="text-label">Kode Daerah Irigasi</label>
                                                <input type="text" name="kode_di" class="form-control" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 px-0 py-0">
                                            <div class="form-group">
                                                <label class="text-label">Jenis Daerah Irigasi</label>
                                                <input type="text" name="jenis_di" class="form-control" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 px-0 py-0">
                                            <div class="form-group">
                                                <label class="text-label">Luas Fungsional</label>
                                                <input type="text" name="luas_fungsional" class="form-control" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 px-0 py-0">
                                            <div class="form-group">
                                                <label class="text-label">Luas Alih Fungsi Lahan</label>
                                                <input type="text" name="luas_alih_fungsi_lahan" class="form-control" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 px-0 py-0">
                                            <div class="form-group">
                                                <label class="text-label">Gambar</label>
                                                <input type="file" name="gambar" class="form-control" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 px-0 py-0">
                                            <div class="form-group">
                                                <label class="text-label">Kewenangan</label>
                                                <input type="text" name="luas_alih_fungsi_lahan" class="form-control" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="Skema" role="tabpanel">
                                <div class="pt-4">
                                    <div class="row">
                                        <div class="col-lg-6 px-0 py-0">
                                            <div class="form-group">
                                                <label class="text-label">Jumlah Aset (PAI)</label>
                                                <input type="text" name="jumlah_aset" class="form-control" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 px-0 py-0">
                                            <div class="form-group">
                                                <label class="text-label">Jumlah Subsistem</label>
                                                <input type="text" name="jumlah_subsistem" class="form-control" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 px-0 py-0">
                                            <div class="form-group">
                                                <label class="text-label">Data AKNOP</label>
                                                <div class="input-group">
                                                    <input type="text" class="form-control" name="data_aknop" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 px-0 py-0">
                                            <div class="form-group">
                                                <label class="text-label">Panjang Saluran Induk</label>
                                                <div class="input-group">
                                                    <input type="number" name="saluran_induk" class="form-control" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 px-0 py-0">
                                            <div class="form-group">
                                                <label class="text-label">Panjang Saluran Muka</label>
                                                <input type="number" name="saluran_muka" class="form-control" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 px-0 py-0">
                                            <div class="form-group">
                                                <label class="text-label">Panjang Saluran Pengelak Banjir</label>
                                                <input type="number" name="pengelak_banjir" class="form-control" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 px-0 py-0">
                                            <div class="form-group">
                                                <label class="text-label">Panjang Saluran Pembuang (Tersier)</label>
                                                <div class="input-group">
                                                    <input name="saluran_pembuang_tersier" type="number" class="form-control gb" required>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <input class="btn btn-primary text-white" type="submit" value="Tambah Data">
                </div>

                <?php echo form_close(); ?>

            </div>
        </div>
    </div>
</div>


<!-- Modal Laporan -->
<div class="modal fade ModalDetailDaerahIrigasi" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Detail Daerah Irigasi</h5>
                <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="modal-content-scrollable">
                    <div class="table-responsive">
                        <table class="table table-borderless student-data-table m-t-20">
                            <tbody>
                                <tr>
                                    <td>Provinsi</td>
                                    <td>:</td>
                                    <td><?php echo $ddi->provinsi; ?></td>
                                </tr>
                                <!-- -->
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade modalEditDaerahIrigasi" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Skema Daerah Irigasi</h5>
                <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <?php echo form_open_multipart('admin/daerahirigasi/tambah_dataskemairigasi'); ?>
                <div class="col-md-12">
                    <div class="card">
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#daerahIrigasi">
                                    <!-- <span>
                                        <i class="ti-home"></i>
                                    </span> -->
                                    <span>Daerah Irigasi</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#Skema">
                                    <!-- <span>
                                        <i class="ti-user"></i>
                                    </span> -->
                                    <span>Skema Daerah Irigasi</span>
                                </a>
                            </li>
                        </ul>
                        <!-- Tab panes -->
                        <div class="tab-content tabcontent-border">
                            <div class="tab-pane fade show active" id="daerahIrigasi" role="tabpanel">
                                <div class="pt-4">
                                    <div class="row">
                                        <div class="col-lg-6 px-0 py-0">
                                            <div class="form-group">
                                                <label class="text-label">Nama Provinsi</label>
                                                <input type="text" name="provinsi" class="form-control" value="Prov. Papua Barat" disabled>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 px-0 py-0">
                                            <div class="form-group">
                                                <label class="text-label">Pilih Kabupaten/Kota</label>
                                                <select class="custom-select" name="kabupaten_di" id="kabupaten_di" requireda>
                                                    <div class="help-block with-errors"></div>
                                                    <option value=""><i class="fas fa-chevron-down"></i>- Pilih Kabupaten/Kota -</option>
                                                    <?php
                                                    foreach ($wil_kab as $kab) {
                                                        echo '<option value="' . $kab->kode . '">' . $kab->nama . '</option>';
                                                    }
                                                    ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 px-0 py-0">
                                            <div class="form-group">
                                                <label class="text-label">Nama Daerah Irigasi</label>
                                                <input type="text" name="nama_di" class="form-control" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 px-0 py-0">
                                            <div class="form-group">
                                                <label class="text-label">Kode Daerah Irigasi</label>
                                                <input type="text" name="kode_di" class="form-control" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 px-0 py-0">
                                            <div class="form-group">
                                                <label class="text-label">Jenis Daerah Irigasi</label>
                                                <input type="text" name="jenis_di" class="form-control" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 px-0 py-0">
                                            <div class="form-group">
                                                <label class="text-label">Luas Fungsional</label>
                                                <input type="text" name="luas_fungsional" class="form-control" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 px-0 py-0">
                                            <div class="form-group">
                                                <label class="text-label">Luas Alih Fungsi Lahan</label>
                                                <input type="text" name="luas_alih_fungsi_lahan" class="form-control" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 px-0 py-0">
                                            <div class="form-group">
                                                <label class="text-label">Gambar</label>
                                                <input type="file" name="gambar" class="form-control" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 px-0 py-0">
                                            <div class="form-group">
                                                <label class="text-label">Kewenangan</label>
                                                <input type="text" name="luas_alih_fungsi_lahan" class="form-control" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="Skema" role="tabpanel">
                                <div class="pt-4">
                                    <div class="row">
                                        <div class="col-lg-6 px-0 py-0">
                                            <div class="form-group">
                                                <label class="text-label">Jumlah Aset (PAI)</label>
                                                <input type="text" name="jumlah_aset" class="form-control" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 px-0 py-0">
                                            <div class="form-group">
                                                <label class="text-label">Jumlah Subsistem</label>
                                                <input type="text" name="jumlah_subsistem" class="form-control" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 px-0 py-0">
                                            <div class="form-group">
                                                <label class="text-label">Data AKNOP</label>
                                                <div class="input-group">
                                                    <input type="text" class="form-control" name="data_aknop" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 px-0 py-0">
                                            <div class="form-group">
                                                <label class="text-label">Panjang Saluran Induk</label>
                                                <div class="input-group">
                                                    <input type="number" name="saluran_induk" class="form-control" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 px-0 py-0">
                                            <div class="form-group">
                                                <label class="text-label">Panjang Saluran Muka</label>
                                                <input type="number" name="saluran_muka" class="form-control" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 px-0 py-0">
                                            <div class="form-group">
                                                <label class="text-label">Panjang Saluran Pengelak Banjir</label>
                                                <input type="number" name="pengelak_banjir" class="form-control" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 px-0 py-0">
                                            <div class="form-group">
                                                <label class="text-label">Panjang Saluran Pembuang (Tersier)</label>
                                                <div class="input-group">
                                                    <input name="saluran_pembuang_tersier" type="number" class="form-control gb" required>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <input class="btn btn-primary text-white" type="submit" value="Tambah Data">
                </div>

                <?php echo form_close(); ?>

            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function() {
        $('#menudaerahirigasi').last().addClass("active");
    });
</script>
<script>
    $(document).ready(function() {
        $('.viewDetailDaerahIrigasi').on('click', function() {
            var idBerita = $(this).data('idberita');

            // Tempatkan data berita ke dalam modal
            $('#edit_id_berita').val(idBerita);


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
                    url: '<?php echo base_url("admin/berita/delete_berita"); ?>',
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
</body>

</html>