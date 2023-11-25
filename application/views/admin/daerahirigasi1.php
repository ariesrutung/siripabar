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

    .table-responsive th,
    .table-responsive td {
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

    @media (min-width: 992px) {

        .modal-lg,
        .modal-xl {
            max-width: 1000px;
        }
    }

    div#Skema label,
    div#daerahIrigasi label {
        color: #000;
    }

    h5 span {
        font-weight: bold;
        color: #17a2b8;
    }

    #modalTambahDaerahIrigasi label {
        color: #000;
    }

    #modalTambahDaerahIrigasi col-lg-12 {
        padding: 0 10px;
    }

    .Gb .form-control,
    .dokDI .form-control {
        background: #fff;
        border: 0;
        color: #454545;
        padding: 0 2px;
    }

    #ModalDetailDaerahIrigasi table tr td {
        vertical-align: top;
        border-color: #eaeaea;
        padding: 5px 0;
    }

    #ModalDetailDaerahIrigasi table tr td:nth-child(2) {
        width: 10px;
    }

    #ModalDetailDaerahIrigasi table tr td:nth-child(3) {
        font-weight: bold;
    }

    #ModalDetailDaerahIrigasi table {
        margin: 0;
    }

    .col-lg-6.px-0.py-0.edit_gbrPreviewDI .form-control {
        background: transparent;
        border: 0;
        color: #454545;
        padding: 0;
    }
</style>
<div class="content-body">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Data Daerah Irigasi</h4>
                        <a href="#" data-toggle="modal" data-backdrop="static" data-target="#modalTambahDaerahIrigasi" class="btn btn-info btn-sm text-white">
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
                                    <?php foreach ($daerahirigasi as $ddi) { ?>
                                        <tr class="text-center">
                                            <td><?php echo $ddi->provinsi; ?></td>
                                            <td><?php echo $ddi->kabupaten; ?></td>
                                            <td><?php echo $ddi->kode_di; ?></td>
                                            <td><?php echo $ddi->nama_di; ?></td>
                                            <td><?php echo $ddi->jenis_di; ?></td>
                                            <td><?php echo $ddi->luas_fungsional; ?></td>
                                            <td>
                                                <div class="aksi">
                                                    <a href="#" class="btn btn-info text-white btn-sm viewDetailDaerahIrigasi" data-backdrop="static" data-iddaerahirigasi="<?php echo $ddi->id; ?>" data-provinsi="<?php echo $ddi->provinsi; ?>" data-di_kabupaten="<?php echo $ddi->kabupaten; ?>" data-nama_di="<?php echo $ddi->nama_di; ?>" data-kode_di="<?php echo $ddi->kode_di; ?>" data-jenis_di="<?php echo $ddi->jenis_di; ?>" data-luas_fungsional="<?php echo $ddi->luas_fungsional; ?>" data-luas_alih_fungsi_lahan="<?php echo $ddi->luas_alih_fungsi_lahan; ?>" data-gambar="<?php echo $ddi->gambar; ?>" data-kewenangan="<?php echo $ddi->kewenangan; ?>" data-jumlah_aset="<?php echo $ddi->jumlah_aset; ?>" data-jumlah_subsistem="<?php echo $ddi->jumlah_subsistem; ?>" data-data_aknop="<?php echo $ddi->data_aknop; ?>" data-saluran_induk="<?php echo $ddi->saluran_induk; ?>" data-saluran_muka="<?php echo $ddi->saluran_muka; ?>" data-pengelak_banjir="<?php echo $ddi->pengelak_banjir; ?>" data-saluran_pembuang_tersier="<?php echo $ddi->saluran_pembuang_tersier; ?>" data-saluran_sekunder="<?php echo $ddi->saluran_sekunder; ?>" data-saluran_pembuang="<?php echo $ddi->saluran_pembuang; ?>" data-saluran_tersier="<?php echo $ddi->saluran_tersier; ?>" data-saluran_suplesi="<?php echo $ddi->saluran_suplesi; ?>" data-saluran_gendong="<?php echo $ddi->saluran_gendong; ?>" data-saluran_kuarter="<?php echo $ddi->saluran_kuarter; ?>" data-dokumen="<?php echo $ddi->dokumen; ?>">
                                                        <span class="icon text-white-50">
                                                            <i class="fa fa-eye"></i>
                                                        </span>
                                                        <span class="text"> Detail</span>
                                                    </a>

                                                    <a href="#" class="btn btn-primary text-white btn-sm btnEditDaerahIrigasi" data-toggle="modal" data-id="<?php echo $ddi->id; ?>" data-provinsi="<?php echo $ddi->provinsi; ?>" data-kabupaten="<?php echo $ddi->kabupaten; ?>" data-nama_di="<?php echo $ddi->nama_di; ?>" data-kode_di="<?php echo $ddi->kode_di; ?>" data-jenis_di="<?php echo $ddi->jenis_di; ?>" data-luas_fungsional="<?php echo $ddi->luas_fungsional; ?>" data-luas_alih_fungsi_lahan="<?php echo $ddi->luas_alih_fungsi_lahan; ?>" data-gambar="<?php echo $ddi->gambar; ?>" data-kewenangan="<?php echo $ddi->kewenangan; ?>" data-jumlah_aset="<?php echo $ddi->jumlah_aset; ?>" data-jumlah_subsistem="<?php echo $ddi->jumlah_subsistem; ?>" data-data_aknop="<?php echo $ddi->data_aknop; ?>" data-saluran_induk="<?php echo $ddi->saluran_induk; ?>" data-saluran_muka="<?php echo $ddi->saluran_muka; ?>" data-pengelak_banjir="<?php echo $ddi->pengelak_banjir; ?>" data-saluran_pembuang_tersier="<?php echo $ddi->saluran_pembuang_tersier; ?>" data-saluran_sekunder="<?php echo $ddi->saluran_sekunder; ?>" data-saluran_pembuang="<?php echo $ddi->saluran_pembuang; ?>" data-saluran_tersier="<?php echo $ddi->saluran_tersier; ?>" data-saluran_suplesi="<?php echo $ddi->saluran_suplesi; ?>" data-saluran_gendong="<?php echo $ddi->saluran_gendong; ?>" data-saluran_kuarter="<?php echo $ddi->saluran_kuarter; ?>" data-dokumen="<?php echo $ddi->dokumen; ?>">
                                                        <span class="icon text-white-50">
                                                            <i class="fa fa-edit"></i>
                                                        </span>
                                                        <span class="text"> Edit</span>
                                                    </a>

                                                    <a href="#" class="btn btn-danger deleteData" data-id="<?php echo $ddi->id; ?>">
                                                        <span class="icon text-white-50">
                                                            <i class="fa fa-trash"></i>
                                                        </span>
                                                        <span class="text"> Hapus</span>
                                                    </a>
                                                </div>
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


<div class="modal fade" id="modalTambahDaerahIrigasi" tabindex="-1" role="dialog" aria-labelledby="modalTambahDaerahIrigasiLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalTambahDaerahIrigasiLabel">Tambah Data Daerah Irigasi</h5>

                <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <?php echo form_open_multipart('admin/daerahirigasi/tambah_dataskemairigasi'); ?>
                <div class="col-md-12">
                    <div class="card">
                        <div class="row">
                            <div class="col-lg-12">
                                <h4 class="mt-1">Daerah Irigasi</h4>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-lg-4 px-0 py-0">
                                <div class="form-group">
                                    <label class="text-label">Nama Provinsi</label>
                                    <input type="text" name="provinsi" class="form-control" value="Prov. Papua Barat" readonly>
                                </div>
                            </div>
                            <input type="hidden" name="kabupaten_di_nama" id="kabupaten_di_nama" value="">
                            <div class="col-lg-4 px-0 py-0">
                                <div class="form-group">
                                    <label class="text-label">Pilih Kabupaten/Kota</label>
                                    <select class="custom-select" name="kabupaten_di" id="kabupaten_di">
                                        <option value=""><i class="fas fa-chevron-down"></i>- Pilih Kabupaten/Kota -</option>
                                        <?php foreach ($wil_kab as $kab) : ?>
                                            <option value="<?= $kab->kode ?>" data-nama="<?= $kab->nama ?>"><?= $kab->nama ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-4 px-0 py-0">
                                <div class="form-group">
                                    <label class="text-label">Nama Daerah Irigasi</label>
                                    <input type="text" name="nama_di" class="form-control">
                                </div>
                            </div>
                            <div class="col-lg-4 px-0 py-0">
                                <div class="form-group">
                                    <label class="text-label">Kode Daerah Irigasi</label>
                                    <input type="text" name="kode_di" class="form-control">
                                </div>
                            </div>
                            <div class="col-lg-4 px-0 py-0">
                                <div class="form-group">
                                    <label class="text-label">Jenis Daerah Irigasi</label>
                                    <input type="text" name="jenis_di" class="form-control">
                                </div>
                            </div>
                            <div class="col-lg-4 px-0 py-0">
                                <div class="form-group">
                                    <label class="text-label">Luas Fungsional</label>
                                    <input type="text" name="luas_fungsional" class="form-control">
                                </div>
                            </div>
                            <div class="col-lg-4 px-0 py-0">
                                <div class="form-group">
                                    <label class="text-label">Luas Alih Fungsi Lahan</label>
                                    <input type="text" name="luas_alih_fungsi_lahan" class="form-control">
                                </div>
                            </div>
                            <div class="col-lg-4 px-0 py-0">
                                <div class="form-group">
                                    <label class="text-label">Kewenangan</label>
                                    <input type="text" name="kewenangan" class="form-control">
                                </div>
                            </div>
                            <div class="col-lg-4 px-0 py-0 dokDI">
                                <div class="form-group">
                                    <label class="text-label">Gambar</label>
                                    <input type="file" name="gambar_di" class="form-control">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-12">
                                <h4 class="mt-4">Skema Daerah Irigasi</h4>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-lg-4 px-0 py-0">
                                <div class="form-group">
                                    <label class="text-label">Jumlah Aset (PAI)</label>
                                    <input type="text" name="jumlah_aset" class="form-control">
                                </div>
                            </div>
                            <div class="col-lg-4 px-0 py-0">
                                <div class="form-group">
                                    <label class="text-label">Jumlah Subsistem</label>
                                    <input type="text" name="jumlah_subsistem" class="form-control">
                                </div>
                            </div>
                            <div class="col-lg-4 px-0 py-0">
                                <div class="form-group">
                                    <label class="text-label">Data AKNOP</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" name="data_aknop">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 px-0 py-0">
                                <div class="form-group">
                                    <label class="text-label">Panjang Saluran Induk</label>
                                    <div class="input-group">
                                        <input type="number" name="saluran_induk" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 px-0 py-0">
                                <div class="form-group">
                                    <label class="text-label">Panjang Saluran Muka</label>
                                    <input type="number" name="saluran_muka" class="form-control">
                                </div>
                            </div>
                            <div class="col-lg-3 px-0 py-0">
                                <div class="form-group">
                                    <label class="text-label">Panjang Saluran Pengelak Banjir</label>
                                    <input type="number" name="pengelak_banjir" class="form-control">
                                </div>
                            </div>
                            <div class="col-lg-3 px-0 py-0">
                                <div class="form-group">
                                    <label class="text-label">Panjang Saluran Pembuang (Tersier)</label>
                                    <div class="input-group">
                                        <input name="saluran_pembuang_tersier" type="number" class="form-control gb">

                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 px-0 py-0">
                                <div class="form-group">
                                    <label class="text-label">Panjang Saluran Sekunder</label>
                                    <div class="input-group">
                                        <input type="number" name="saluran_sekunder" class="form-control">

                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 px-0 py-0">
                                <div class="form-group">
                                    <label class="text-label">Panjang Saluran Pembuang</label>
                                    <input type="number" name="saluran_pembuang" class="form-control">
                                </div>
                            </div>
                            <div class="col-lg-3 px-0 py-0">
                                <div class="form-group">
                                    <label class="text-label">Panjang Saluran Tersier</label>
                                    <input type="number" name="saluran_tersier" class="form-control">
                                </div>
                            </div>
                            <div class="col-lg-3 px-0 py-0">
                                <div class="form-group">
                                    <label class="text-label">Panjang Saluran Suplesi</label>
                                    <input type="number" name="saluran_suplesi" class="form-control">
                                </div>
                            </div>
                            <div class="col-lg-3 px-0 py-0">
                                <div class="form-group">
                                    <label class="text-label">Panjang Saluran Gendong</label>
                                    <input type="number" name="saluran_gendong" class="form-control">
                                </div>
                            </div>

                            <div class="col-lg-3 px-0 py-0">
                                <div class="form-group">
                                    <label class="text-label">Panjang Saluran Kuarter</label>
                                    <input type="number" name="saluran_kuarter" class="form-control">
                                </div>
                            </div>
                            <div class="col-lg-3 px-0 py-0">
                                <div class="form-group">
                                    <label class="text-label">Kode Daerah Irigasi</label>
                                    <input type="text" name="kode_di" class="form-control">
                                </div>
                            </div>
                            <div class="col-lg-3 px-0 py-0 Gb">
                                <div class="form-group">
                                    <label class="text-label">Dokumen</label>
                                    <input type="file" name="dokumen_skema" class="form-control gb">
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


<div class="modal fade" id="ModalDetailDaerahIrigasi" tabindex="-1" role="dialog" aria-labelledby="ModalDetailDaerahIrigasiLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"></h5>
                <h5 class="modal-title" id="ModalDetailDaerahIrigasiLabel">Detail Daerah Irigasi <span id="nama_daerah_irigasi"></span> di <span id="nama_kabDI"></span></h5>
                <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="modal-content-scrollable">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="table-responsive">
                                <table class="table table-borderless student-data-table m-t-20">
                                    <tbody>
                                        <tr>
                                            <td id="idDI"></td>
                                        </tr>
                                        <tr>
                                            <td class="w-40">Provinsi</td>
                                            <td>: </td>
                                            <td id="provinsi"></td>
                                        </tr>
                                        <tr>
                                            <td>Kabupaten</td>
                                            <td>: </td>
                                            <td id="kabupaten"></td>
                                        </tr>
                                        <tr>
                                            <td>Nama Daerah Irigasi</td>
                                            <td>: </td>
                                            <td id="nama_di"></td>
                                        </tr>
                                        <tr>
                                            <td>Kode Daerah Irigasi</td>
                                            <td>: </td>
                                            <td id="kode_di"></td>
                                        </tr>
                                        <tr>
                                            <td>Jenis Irigasi</td>
                                            <td>: </td>
                                            <td id="jenis_di"></td>
                                        </tr>
                                        <tr>
                                            <td>Luas Fungsional</td>
                                            <td>: </td>
                                            <td id="luas_fungsional"></td>
                                        </tr>
                                        <tr>
                                            <td>Luas Alih Fungsi Lahan</td>
                                            <td>: </td>
                                            <td id="luas_lahan"></td>
                                        </tr>
                                        <tr>
                                            <td>Kewenangan</td>
                                            <td>: </td>
                                            <td id="kewenangan"></td>
                                        </tr>

                                        <tr>
                                            <td>Jumlah Aset</td>
                                            <td>: </td>
                                            <td id="ja"></td>
                                        </tr>
                                        <tr>
                                            <td>Jumlah Subsistem</td>
                                            <td>:</td>
                                            <td id="js"></td>
                                        </tr>
                                        <tr>
                                            <td>Data AKNOP</td>
                                            <td>:</td>
                                            <td id="da"></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="col-lg-6 zoomable-image">
                            <img id="gambarPreview" class="w-100" src="<?php echo base_url(); ?>upload/datairigasi/" alt="Gambar Daerah Irigasi">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="table-responsive">
                                <table class="table table-borderless student-data-table m-t-20">
                                    <tbody>

                                        <tr>
                                            <td class="w-40">Panjang Saluran Induk</td>
                                            <td>:</td>
                                            <td id="si"></td>
                                        </tr>
                                        <tr>
                                            <td>Panjang Saluran Muka</td>
                                            <td>:</td>
                                            <td id="sm"></td>
                                        </tr>
                                        <tr>
                                            <td>Panjang Saluran Tersier</td>
                                            <td>:</td>
                                            <td id="st"></td>
                                        </tr>
                                        <tr>
                                            <td>Panjang Saluran Suplesi</td>
                                            <td>:</td>
                                            <td id="ss"></td>
                                        </tr>
                                        <tr>
                                            <td>Panjang Saluran Gendong</td>
                                            <td>:</td>
                                            <td id="sg"></td>
                                        </tr>
                                        <tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="table-responsive">
                                <table class="table table-borderless student-data-table m-t-20">
                                    <tbody>
                                        <td>Panjang Saluran Kuarter</td>
                                        <td>:</td>
                                        <td id="sk"></td>
                                        </tr>
                                        <tr>
                                            <td class="w-50">Panjang Saluran Pengelak Banjir</td>
                                            <td>:</td>
                                            <td id="pb"></td>
                                        </tr>
                                        <tr>
                                            <td>Panjang Saluran Pembuang (Tersier)</td>
                                            <td>:</td>
                                            <td id="st"></td>
                                        </tr>
                                        <tr>
                                            <td>Panjang Saluran Sekunder</td>
                                            <td>:</td>
                                            <td id="ssk"></td>
                                        </tr>
                                        <tr>
                                            <td>Panjang Saluran Pembuang</td>
                                            <td>:</td>
                                            <td id="sp"></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

<div id="modalEditDaerahIrigasi" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Update Data Daerah Irigasi</h5>
                <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <?php echo form_open_multipart(''); ?>
                <div class="col-md-12">
                    <div class="card">
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#daerahIrigasi">
                                    <span>Daerah Irigasi</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#Skema">
                                    <span>Skema Daerah Irigasi</span>
                                </a>
                            </li>
                        </ul>
                        <!-- Tab panes -->
                        <div class="tab-content tabcontent-border">
                            <div class="tab-pane fade show active" id="daerahIrigasi" role="tabpanel">
                                <div class="pt-4">
                                    <div class="row">
                                        <div class="col-lg-12 px-0 py-0">
                                            <div class="form-group">
                                                <input class="form-control" name="edit_idDI" type="text" id="edit_idDI">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 px-0 py-0">
                                            <div class="form-group">
                                                <label class="text-label">Nama Provinsi</label>
                                                <input type="text" name="provinsi" class="form-control" value="Prov. Papua Barat" readonly>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 px-0 py-0">
                                            <div class="form-group">
                                                <label class="text-label">Pilih Kabupaten/Kota</label>
                                                <select class="custom-select" name="edit_kabupaten" id="edit_kabupaten">
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
                                                <input type="text" name="edit_nama_di" id="edit_nama_di" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 px-0 py-0">
                                            <div class="form-group">
                                                <label class="text-label">Kode Daerah Irigasi</label>
                                                <input type="text" name="edit_kode_di" id="edit_kode_di" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 px-0 py-0">
                                            <div class="form-group">
                                                <label class="text-label">Jenis Daerah Irigasi</label>
                                                <input type="text" name="edit_jenis_di" id="edit_jenis_di" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 px-0 py-0">
                                            <div class="form-group">
                                                <label class="text-label">Luas Fungsional</label>
                                                <input type="text" name="edit_luas_fungsional" id="edit_luas_fungsional" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 px-0 py-0">
                                            <div class="form-group">
                                                <label class="text-label">Luas Alih Fungsi Lahan</label>
                                                <input type="text" name="edit_luas_alih_fungsi_lahan" id="edit_luas_alih_fungsi_lahan" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 px-0 py-0">
                                            <div class="form-group">
                                                <label class="text-label">Kewenangan</label>
                                                <input type="text" name="edit_kewenangan" id="edit_kewenangan" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 px-0 py-0 edit_gbrPreviewDI">
                                            <div class="form-group">
                                                <label class="text-label">Gambar</label>
                                                <input type="file" name="gambar" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 px-0 py-0 edit_gbrPreviewDI">
                                            <div class="form-group">
                                                <img id="edit_gbrPreviewDI" class="w-25" src="<?php echo base_url(); ?>upload/datairigasi/" alt="Gambar Daerah Irigasi">
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="Skema" role="tabpanel">
                                <div class="pt-4">
                                    <div class="row">
                                        <div class="col-lg-4 px-0 py-0">
                                            <div class="form-group">
                                                <label class="text-label">Jumlah Aset (PAI)</label>
                                                <input type="text" id="edit_jumlah_aset" name="edit_jumlah_aset" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-lg-4 px-0 py-0">
                                            <div class="form-group">
                                                <label class="text-label">Jumlah Subsistem</label>
                                                <input type="text" id="edit_jumlah_subsistem" name="edit_jumlah_subsistem" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-lg-4 px-0 py-0">
                                            <div class="form-group">
                                                <label class="text-label">Data AKNOP</label>
                                                <div class="input-group">
                                                    <input type="text" id="edit_data_aknop" class="form-control" name="edit_data_aknop">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 px-0 py-0">
                                            <div class="form-group">
                                                <label class="text-label">Panjang Saluran Induk</label>
                                                <div class="input-group">
                                                    <input type="number" id="edit_saluran_induk" name="edit_saluran_induk" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 px-0 py-0">
                                            <div class="form-group">
                                                <label class="text-label">Panjang Saluran Muka</label>
                                                <input type="number" id="edit_saluran_muka" name="edit_saluran_muka" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-lg-4 px-0 py-0">
                                            <div class="form-group">
                                                <label class="text-label">Panjang Saluran Pengelak Banjir</label>
                                                <input type="number" id="edit_pengelak_banjir" name="edit_pengelak_banjir" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-lg-4 px-0 py-0">
                                            <div class="form-group">
                                                <label class="text-label">Panjang Saluran Pembuang (Tersier)</label>
                                                <div class="input-group">
                                                    <input name="edit_saluran_pembuang_tersier" type="number" id="edit_saluran_pembuang_tersier" class="form-control gb">

                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-4 px-0 py-0">
                                            <div class="form-group">
                                                <label class="text-label">Panjang Saluran Sekunder</label>
                                                <div class="input-group">
                                                    <input type="number" id="edit_saluran_sekunder" name="edit_saluran_sekunder" class="form-control">

                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 px-0 py-0">
                                            <div class="form-group">
                                                <label class="text-label">Panjang Saluran Pembuang</label>
                                                <input type="number" id="edit_saluran_pembuang" name="edit_saluran_pembuang" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-lg-4 px-0 py-0">
                                            <div class="form-group">
                                                <label class="text-label">Panjang Saluran Tersier</label>
                                                <input type="number" id="edit_saluran_tersier" name="edit_saluran_tersier" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-lg-4 px-0 py-0">
                                            <div class="form-group">
                                                <label class="text-label">Panjang Saluran Suplesi</label>
                                                <input type="number" id="edit_saluran_suplesi" name="edit_saluran_suplesi" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-lg-4 px-0 py-0">
                                            <div class="form-group">
                                                <label class="text-label">Panjang Saluran Gendong</label>
                                                <input type="number" id="edit_saluran_gendong" name="edit_saluran_gendong" class="form-control">
                                            </div>
                                        </div>

                                        <div class="col-lg-4 px-0 py-0">
                                            <div class="form-group">
                                                <label class="text-label">Panjang Saluran Kuarter</label>
                                                <input type="number" id="edit_saluran_kuarter" name="edit_saluran_kuarter" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-lg-4 px-0 py-0 Gb">
                                            <div class="form-group">
                                                <label class="text-label">Dokumen</label>
                                                <input type="file" id="edit_dokumen_skema" name="edit_dokumen_skema" class="form-control gb">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 px-0 py-0 edit_dokDI">
                                            <div class="form-group">
                                                <img id="edit_dokDI" class="w-25" src="<?php echo base_url(); ?>upload/datairigasi/" alt="Dok Daerah Irigasi">
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <input id="edit_submitBtn" class="btn btn-primary text-white" type="submit" value="Update Data">
                </div>

                <?php echo form_close(); ?>

            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script>
    $(document).ready(function() {
        $('#menudaerahirigasi').last().addClass("active");
    });
</script>

<script>
    $(document).ready(function() {
        // Menyembunyikan elemen dengan ID 'idDI'
        $('#idDI').hide();
        $('#edit_idDI').hide();

        $('.viewDetailDaerahIrigasi').on('click', function() {
            // Daerah Irigasi
            var daerahIrigasiID = $(this).data('iddaerahirigasi');
            var provinsiDI = $(this).data('provinsi');
            var kabDI = $(this).data('di_kabupaten');
            var namaDI = $(this).data('nama_di');
            var kodeDI = $(this).data('kode_di');
            var jenisDI = $(this).data('jenis_di');
            var luasFungsiDI = $(this).data('luas_fungsional');
            var luasAlihDI = $(this).data('luas_alih_fungsi_lahan');
            var gambarDI = $(this).data('gambar');
            var kewenanganDI = $(this).data('kewenangan');

            // Tempatkan data berita ke dalam modal
            $('#nama_daerah_irigasi').text(namaDI);
            $('#nama_kabDI').text(kabDI);
            $('#idDI').text(daerahIrigasiID);
            $('#provinsi').text(provinsiDI);
            $('#kabupaten').text(kabDI);
            $('#nama_di').text(namaDI);
            $('#kode_di').text(kodeDI);
            $('#jenis_di').text(jenisDI);
            $('#luas_fungsional').text(luasFungsiDI);
            $('#luas_lahan').text(luasAlihDI);
            $('#kewenangan').text(kewenanganDI);
            // Atur nilai atribut 'src' dari elemen gambar
            $('#gambarPreview').attr('src', gambarDI);

            // Skema
            var jumlahAset = $(this).data('jumlah_aset');
            var jumlahSubsistem = $(this).data('jumlah_subsistem');
            var dataAknop = $(this).data('data_aknop');
            var saluranInduk = $(this).data('saluran_induk');
            var saluranMuka = $(this).data('saluran_muka');
            var pengelakBanjir = $(this).data('pengelak_banjir');
            var pembuangTersier = $(this).data('saluran_pembuang_tersier');
            var saluranSekunder = $(this).data('saluran_sekunder');
            var saluranPembuang = $(this).data('saluran_pembuang');
            var saluranTersier = $(this).data('saluran_tersier');
            var saluranSuplesi = $(this).data('saluran_suplesi');
            var saluranGendong = $(this).data('saluran_gendong');
            var saluranKuarter = $(this).data('saluran_kuarter');
            var DokSkema = $(this).data('dokumen');

            // var dokumen = $(this).data('dokumen');

            $('#ja').text(jumlahAset);
            $('#js').text(jumlahSubsistem);
            $('#da').text(dataAknop);
            $('#si').text(saluranInduk);
            $('#sm').text(saluranMuka);
            $('#pb').text(pengelakBanjir);
            $('#pt').text(pembuangTersier);
            $('#ssk').text(saluranSekunder);
            $('#sp').text(saluranPembuang);
            $('#st').text(saluranTersier);
            $('#ssp').text(saluranSuplesi);
            $('#sg').text(saluranGendong);
            $('#sk').text(saluranKuarter);
            $('#dok_skema').attr(DokSkema);

            // // Atur nilai atribut 'src' dari elemen gambar
            // $('#gambarPreview').attr('src', gambarDI);

            // Buka modal
            $('#ModalDetailDaerahIrigasi').modal('show');

            // Panggil fungsi AJAX di dalam event click
            $.ajax({
                url: 'daerahirigasi/getGambarDetail/' + kodeDI, // Sesuaikan dengan URL controller dan method Anda
                type: 'GET',
                dataType: 'json',
                success: function(response) {
                    if (response.gambarPath) {
                        // Atur nilai atribut 'src' dari elemen gambar
                        $('#gambarPreview').attr('src', response.gambarPath);
                    } else {
                        // Atur nilai atribut 'src' ke gambar default jika tidak ada gambar
                        $('#gambarPreview').attr('src', '<?php echo base_url(); ?>public/company/img/skema/noimage.png');
                    }

                    // Buka modal
                    $('#ModalDetailDaerahIrigasi').modal('show');
                },
                error: function() {
                    alert('Error fetching data. Please try again.');
                }
            });

            // $.ajax({
            //     url: 'daerahirigasi/download_skema/' + DokSkema, // Sesuaikan dengan URL controller dan method Anda
            //     type: 'GET',
            //     dataType: 'json',
            //     success: function(response) {
            //         if (response.gambarPath) {
            //             // Atur nilai atribut 'src' dari elemen gambar
            //             $('#dok_skema').attr('src', response.gambarPath);
            //         } else {
            //             // Atur nilai atribut 'src' ke gambar default jika tidak ada gambar
            //             $('#dok_skema').attr('src', '<?php echo base_url(); ?>upload/datairigasi/dok.png');
            //         }

            //         // Buka modal
            //         $('#ModalDetailDaerahIrigasi').modal('show');
            //     },
            //     error: function() {
            //         alert('Error fetching data. Please try again.');
            //     }
            // });
        });

        $('.btnEditDaerahIrigasi').on('click', function() {
            var idDI_edit = $(this).data('id');
            var provinsiDI_edit = $(this).data('provinsi');
            var kabDI_edit = $(this).data('kabupaten');
            var namaDI_edit = $(this).data('nama_di');
            var kodeDI_edit = $(this).data('kode_di');
            var jenisDI_edit = $(this).data('jenis_di');
            var luasFungsiDI_edit = $(this).data('luas_fungsional');
            var luasAlihDI_edit = $(this).data('luas_alih_fungsi_lahan');
            var kewenanganDI_edit = $(this).data('kewenangan');
            var gambarDI_edit = $(this).data('gambar');

            var jumlah_aset = $(this).data('jumlah_aset');
            var jumlah_subsistem = $(this).data('jumlah_subsistem');
            var data_aknop = $(this).data('data_aknop');
            var saluran_induk = $(this).data('saluran_induk');
            var saluran_muka = $(this).data('saluran_muka');
            var pengelak_banjir = $(this).data('pengelak_banjir');
            var saluran_pembuang_tersier = $(this).data('saluran_pembuang_tersier');
            var saluran_sekunder = $(this).data('saluran_sekunder');
            var saluran_pembuang = $(this).data('saluran_pembuang');
            var saluran_tersier = $(this).data('saluran_tersier');
            var saluran_suplesi = $(this).data('saluran_suplesi');
            var saluran_gendong = $(this).data('saluran_gendong');
            var saluran_kuarter = $(this).data('saluran_kuarter');
            var dokumen = $(this).data('dokumen');

            // Set values in the modal
            $('#edit_provinsi').val(provinsiDI_edit);
            $('#edit_kabupaten').html(kabDI_edit);
            $('#edit_nama_di').val(namaDI_edit);
            $('#edit_kode_di').val(kodeDI_edit);
            $('#edit_jenis_di').val(jenisDI_edit);
            $('#edit_luas_fungsional').val(luasFungsiDI_edit);
            $('#edit_luas_alih_fungsi_lahan').val(luasAlihDI_edit);
            $('#edit_kewenangan').val(kewenanganDI_edit);
            $('#edit_gbrPreviewDI').attr('src', gambarDI_edit);

            // Ajax call to get additional data or perform actions
            $.ajax({
                url: 'daerahirigasi/getGambarDetail/' + kodeDI_edit,
                type: 'GET',
                dataType: 'json',
                success: function(response) {
                    if (response.gambarPath) {
                        $('#edit_gbrPreviewDI').attr('src', response.gambarPath);
                    } else {
                        $('#edit_gbrPreviewDI').attr('src', '<?php echo base_url(); ?>upload/datairigasi/noimage.png');
                    }
                    $('#modalEditDaerahIrigasi').modal('show');
                },
                error: function() {
                    alert('Error fetching data. Please try again.');
                }
            });

            // Set values for Skema tab
            $('#edit_jumlah_aset').val(jumlah_aset);
            $('#edit_jumlah_subsistem').val(jumlah_subsistem);
            $('#edit_data_aknop').val(data_aknop);
            $('#edit_saluran_induk').val(saluran_induk);
            $('#edit_saluran_muka').val(saluran_muka);
            $('#edit_pengelak_banjir').val(pengelak_banjir);
            $('#edit_saluran_pembuang_tersier').val(saluran_pembuang_tersier);
            $('#edit_saluran_sekunder').val(saluran_sekunder);
            $('#edit_saluran_pembuang').val(saluran_pembuang);
            $('#edit_saluran_tersier').val(saluran_tersier);
            $('#edit_saluran_suplesi').val(saluran_suplesi);
            $('#edit_saluran_gendong').val(saluran_gendong);
            $('#edit_saluran_kuarter').val(saluran_kuarter);
            // Assuming you have an input for dokumen on the Skema tab
            // $('#edit_dokumen_skema').val(dokumen);
            $('#edit_dokDI').attr('src', dokumen);

            // Ajax call to get additional data or perform actions
            $.ajax({
                url: 'daerahirigasi/getGambarDetail/' + kodeDI_edit,
                type: 'GET',
                dataType: 'json',
                success: function(response) {
                    if (response.gambarPath) {
                        $('#edit_dokDI').attr('src', response.gambarPath);
                    } else {
                        $('#edit_dokDI').attr('src', '<?php echo base_url(); ?>upload/datairigasi/dok.png');
                    }
                    $('#modalEditDaerahIrigasi').modal('show');
                },
                error: function() {
                    alert('Error fetching data. Please try again.');
                }
            });

            // Update button click event
            $('#edit_submitBtn').on('click', function() {
                // Implement logic for saving data here

                // Daerah Irigasi tab
                var idDI_edit = $('#idDI_edit').val();
                var kabDI = $('#edit_kabupaten').val();
                var namaDI = $('#edit_nama_di').val();
                var kodeDI = $('#edit_kode_di').val();
                var jenisDI = $('#edit_jenis_di').val();
                var luasFungsiDI = $('#edit_luas_fungsional').val();
                var luasAlihDI = $('#edit_luas_alih_fungsi_lahan').val();
                var kewenanganDI = $('#edit_kewenangan').val();
                var gambarDI = $('#edit_gambarPreview').attr('src'); // Use the correct element and attribute

                // Skema tab
                var jumlah_aset = $('#edit_jumlah_aset').val();
                var jumlah_subsistem = $('#edit_jumlah_subsistem').val();
                var data_aknop = $('#edit_data_aknop').val();
                var saluran_induk = $('#edit_saluran_induk').val();
                var saluran_muka = $('#edit_saluran_muka').val();
                var pengelak_banjir = $('#edit_pengelak_banjir').val();
                var saluran_pembuang_tersier = $('#edit_saluran_pembuang_tersier').val();
                var saluran_sekunder = $('#edit_saluran_sekunder').val();
                var saluran_pembuang = $('#edit_saluran_pembuang').val();
                var saluran_tersier = $('#edit_saluran_tersier').val();
                var saluran_suplesi = $('#edit_saluran_suplesi').val();
                var saluran_gendong = $('#edit_saluran_gendong').val();
                var saluran_kuarter = $('#edit_saluran_kuarter').val();
                var dokumen = $('#edit_dokumen_skema').val();

                // Send data to the controller for saving/update in the database
                $.ajax({
                    url: 'daerahirigasi/updateData/' + idDI_edit,
                    type: 'POST',
                    data: {
                        idDI: idDI_edit,
                        kabupaten_di: kabDI,
                        nama_di: namaDI,
                        kode_di: kodeDI,
                        jenis_di: jenisDI,
                        luas_fungsional: luasFungsiDI,
                        luas_alih_fungsi_lahan: luasAlihDI,
                        kewenangan: kewenanganDI,
                        gambar: gambarDI,
                        jumlah_aset: jumlah_aset,
                        jumlah_subsistem: jumlah_subsistem,
                        data_aknop: data_aknop,
                        saluran_induk: saluran_induk,
                        saluran_muka: saluran_muka,
                        pengelak_banjir: pengelak_banjir,
                        saluran_pembuang_tersier: saluran_pembuang_tersier,
                        saluran_sekunder: saluran_sekunder,
                        saluran_pembuang: saluran_pembuang,
                        saluran_tersier: saluran_tersier,
                        saluran_suplesi: saluran_suplesi,
                        saluran_gendong: saluran_gendong,
                        saluran_kuarter: saluran_kuarter,
                        dokumen: dokumen,
                        // Add other data as needed
                    },
                    success: function(response) {
                        alert('Data successfully updated.');
                        $('#modalEditDaerahIrigasi').modal('hide');
                        location.reload(); // Refresh the page or perform other actions
                    },
                    error: function() {
                        alert('Error updating data. Please try again.');
                    }
                });
            });


        });


        $('.deleteData').on('click', function() {
            var idIrigasi = $(this).data('id');

            // Use SweetAlert for confirmation
            Swal.fire({
                title: 'Anda Yakin?',
                text: 'Data tidak akan kembali setelah dihapus!',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Ya, Hapus!'
            }).then((result) => {
                if (result.isConfirmed) {
                    // Send AJAX request for deletion
                    $.ajax({
                        type: 'POST',
                        url: '<?php echo base_url("admin/daerahirigasi/delete_data"); ?>',
                        data: {
                            id: idIrigasi
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

        $('#kabupaten_di').change(function() {
            // Ambil nilai data-nama dari opsi yang dipilih
            var selectedNama = $('#kabupaten_di option:selected').data('nama');

            // Set nilai input tersembunyi dengan nilai data-nama
            $('#kabupaten_di_nama').val(selectedNama);
        });

        var form = $('#modalTambahDaerahIrigasi form');

        // Add a submit event listener to the form
        form.submit(function(event) {
            // Prevent the default form submission
            event.preventDefault();

            // You can perform any additional validation here if needed

            // Submit the form using AJAX
            $.ajax({
                type: form.attr('method'),
                url: form.attr('action'),
                data: new FormData(form[0]),
                processData: false,
                contentType: false,
                success: function(data) {
                    // Show SweetAlert on success
                    Swal.fire({
                        title: 'Sukses!',
                        text: 'Data berhasil disimpan.',
                        icon: 'success',
                        confirmButtonText: 'OK'
                    }).then((result) => {
                        // Check if the user clicked "OK"
                        if (result.isConfirmed) {
                            // Reload the page
                            location.reload();
                        }
                    });
                },
                error: function(error) {
                    // Handle the error if needed
                    console.error('Error:', error);
                    // Show SweetAlert on error
                    Swal.fire({
                        title: 'Eror!',
                        text: 'Data gagal disimpan.',
                        icon: 'error',
                        confirmButtonText: 'OK'
                    });
                }
            });

            // Prevent the form from being submitted in the traditional way
            return false;
        });

        $('.zoomable-image').hover(
            function() {
                $(this).find('img').css('transform', 'scale(1.3)');
            },
            function() {
                $(this).find('img').css('transform', 'scale(1)');
            }
        );

    });
</script>
</body>

</html>