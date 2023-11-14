<?php echo $map['js']; ?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
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

    i.bi.bi-file-earmark-pdf {
        font-size: 20px;
        color: #fdbe33;
    }

    i.bi.bi-file-earmark-pdfa:hover,
    i.bi.bi-file-earmark-pdfa:active,
    i.bi.bi-file-earmark-pdf a:focus {
        color: #fdbe33;
        outline: none;
        text-decoration: none;
    }

    .dokpendukung .gb {
        height: auto !important;
        padding: 0 !important;
        border: 0 !important;
    }

    .table-responsive td {
        text-align: center;
    }

    .table-responsive td,
    .table-responsive th {
        color: #000;
        font-size: 11px;
    }

    .table-responsive th {
        text-align: center;
    }

    a:hover,
    a:focus,
    a.active {
        color: #fff;
        text-decoration: none;
    }

    @media (min-width: 992px) {

        .modal-lg,
        .modal-xl {
            max-width: 1000px;
        }
    }

    .tambahDataKontrak .card-body {
        padding: 10px;
    }

    .tambahDataKontrak label {
        color: #000;
    }

    * a:hover {
        text-decoration: none;
        color: #000;
    }

    .w-8 {
        width: 8%;
    }
</style>
<div class="content-body">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="mb-0">Data Kontrak</h4>
                        <a href="#" data-toggle="modal" data-target=".modalTambahDatakontrak" data-backdrop="static" class="btn btn-info btn-sm text-white">
                            <span class="icon text-white-50">
                                <i class="fa fa-plus"></i>
                            </span>
                            <span class="text">Tambah Data</span>
                        </a>
                        <!-- <a href="#" data-toggle="modal" data-target=".modalLaporan" data-backdrop="static" class="btn btn-primary btn-sm"><i class="fa fa-file"></i> Tambah Data</a> -->
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table-bordered table-striped text-small" style="width:100%">
                                <thead>
                                    <tr class="tex-small">
                                        <th rowspan="2">Nama Paket</th>
                                        <th rowspan="2">Nama Penyedia Jasa Konstruksi</th>
                                        <th rowspan="2">No Kontrak</th>
                                        <th rowspan="2">Tgl Kontrak</th>
                                        <th rowspan="2">Nilai Kontrak</th>
                                        <th rowspan="2">Sumber Dana</th>
                                        <th rowspan="2">Lokasi</th>
                                        <th colspan="9">Dokumen Pendukung </th>
                                        <th rowspan="2">Aksi </th>
                                    </tr>
                                    <tr>
                                        <th>Dok. Kontrak</th>
                                        <th>Gambar Rencana</th>
                                        <th>As Built Drawing</th>
                                        <th>MC 0%</th>
                                        <th>Lap. Harian</th>
                                        <th>Lap. Mingguan</th>
                                        <th>Lap. Bulanan</th>
                                        <th>MC 100%</th>
                                        <th>Dokumentasi</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <?php foreach ($datakontrak as $dk) { ?>
                                        <tr>
                                            <td class="text-left"><?php echo $dk->nama_paket; ?></td>
                                            <td><?php echo $dk->penyedia_jasa; ?></td>
                                            <td><?php echo $dk->no_kontrak; ?></td>
                                            <td><?php echo $dk->tgl_kontrak; ?></td>
                                            <td><?php echo $dk->nilai_kontrak; ?></td>
                                            <td><?php echo $dk->sumber_dana . " " . $dk->tahun_sumberdana; ?></td>
                                            <td><?php echo $dk->lok_kabupaten; ?></td>

                                            <td>
                                                <?php if ($dk->dp_dokkontrak != '') {
                                                    echo '<i class="bi bi-check"></i>';
                                                } else {
                                                    echo '<i class="bi bi-x"></i>';
                                                } ?>
                                            </td>

                                            <td>
                                                <?php if ($dk->dp_gbrrencana != '') {
                                                    echo '<i class="bi bi-check"></i>';
                                                } else {
                                                    echo '<i class="bi bi-x"></i>';
                                                } ?>
                                            </td>

                                            <td>
                                                <?php if ($dk->dp_gbrasbuild != '') {
                                                    echo '<i class="bi bi-check"></i>';
                                                } else {
                                                    echo '<i class="bi bi-x"></i>';
                                                } ?>
                                            </td>

                                            <td>
                                                <?php if ($dk->dp_mcnol != '') {
                                                    echo '<i class="bi bi-check"></i>';
                                                } else {
                                                    echo '<i class="bi bi-x"></i>';
                                                } ?>
                                            </td>

                                            <td>
                                                <?php if ($dk->dp_lapharian != '') {
                                                    echo '<i class="bi bi-check"></i>';
                                                } else {
                                                    echo '<i class="bi bi-x"></i>';
                                                } ?>
                                            </td>

                                            <td>
                                                <?php if ($dk->dp_lapmingguan != '') {
                                                    echo '<i class="bi bi-check"></i>';
                                                } else {
                                                    echo '<i class="bi bi-x"></i>';
                                                } ?>
                                            </td>

                                            <td>
                                                <?php if ($dk->dp_lapbulanan != '') {
                                                    echo '<i class="bi bi-check"></i>';
                                                } else {
                                                    echo '<i class="bi bi-x"></i>';
                                                } ?>
                                            </td>

                                            <td>
                                                <?php if ($dk->dp_mcseratus != '') {
                                                    echo '<i class="bi bi-check"></i>';
                                                } else {
                                                    echo '<i class="bi bi-x"></i>';
                                                } ?>
                                            </td>
                                            <td>
                                                <?php if ($dk->dp_dokumentasi != '') {
                                                    echo '<i class="bi bi-check"></i>';
                                                } else {
                                                    echo '<i class="bi bi-x"></i>';
                                                } ?>
                                            </td>
                                            <td class="w-8">
                                                <a data-id="<?php echo $dk->id; ?>" href="#" data-toggle="modal" class="btn btn-sm btn-info btnViewDatakontrak">
                                                    <i class="bi bi-eye"></i>
                                                </a>
                                                <a class="btn btn-sm btn-primary" href="">
                                                    <i class="bi bi-pencil"></i>
                                                </a>
                                                <a class="btn btn-sm btn-danger" href="">
                                                    <i class="bi bi-trash"></i>
                                                </a>
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
<div class="modal fade modalTambahDatakontrak" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Tambah Data Kontrak</h5>
                <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="modal-content-scrollable">
                    <!-- <form action="#" id="step-form-horizontal" class="step-form-horizontal"> -->
                    <?php echo form_open_multipart('admin/datakontrak/tambah_datakontrak'); ?>
                    <div class="tambahDataKontrak">

                        <div class="card">
                            <div class="card-body">
                                <!-- Nav tabs -->
                                <ul class="nav nav-tabs" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" data-toggle="tab" href="#datakontrak">
                                            <span>
                                                <i class="ti-home"></i>
                                            </span>
                                            <span> Data Kontrak</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="tab" href="#datalokasi">
                                            <span>
                                                <i class="ti-user"></i>
                                            </span>
                                            <span> Lokasi</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="tab" href="#progres">
                                            <span>
                                                <i class="ti-email"></i>
                                            </span>
                                            <span> Progres Pelaksanaan</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="tab" href="#dokpendukung">
                                            <span>
                                                <i class="ti-email"></i>
                                            </span>
                                            <span> Dokumen Pendukung</span>
                                        </a>
                                    </li>
                                </ul>
                                <!-- Tab panes -->
                                <div class="tab-content tabcontent-border">
                                    <div class="tab-pane fade show active" id="datakontrak" role="tabpanel">
                                        <div class="pt-4">
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="row">
                                                        <div class="col-lg-12 py-0">
                                                            <div class="form-group">
                                                                <label class="text-label">Nama Paket</label>
                                                                <input type="text" name="nama_paket" class="form-control">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-12 py-0">
                                                            <div class="form-group">
                                                                <label class="text-label">Nama Penyedia Jasa Konstruksi</label>
                                                                <input type="text" name="penyedia_jasa" class="form-control">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-12 py-0">
                                                            <div class="form-group">
                                                                <label class="text-label">Nomor Kontrak</label>
                                                                <div class="input-group">
                                                                    <input type="text" class="form-control" name="no_kontrak">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-12 py-0">
                                                            <div class="form-group">
                                                                <label class="text-label">Tanggal Kontrak</label>
                                                                <input type="date" name="tgl_kontrak" class="form-control">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-12 py-0">
                                                            <div class="form-group">
                                                                <label class="text-label">Nomor SPMK</label>
                                                                <input type="text" name="no_spmk" class="form-control">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-12 py-0">
                                                            <div class="form-group">
                                                                <label class="text-label">Tanggal SPMK</label>
                                                                <div class="input-group">
                                                                    <input name="tgl_spmk" type="date" class="form-control">

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="row">
                                                        <div class="col-lg-12 py-0">
                                                            <div class="form-group">
                                                                <label class="text-label">Nilai Kontrak</label>
                                                                <div class="input-group">
                                                                    <input type="text" name="nilai_kontrak" class="form-control">

                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-12 py-0">
                                                            <div class="form-group">
                                                                <label class="text-label">Sumber Dana</label>
                                                                <div class="input-group">
                                                                    <input type="text" name="sumber_dana" class="form-control">

                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-12 py-0">
                                                            <div class="form-group">
                                                                <label class="text-label">Tahun Sumber Dana</label>
                                                                <div class="input-group">
                                                                    <input type="text" name="tahun_sumberdana" class="form-control">

                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-12 py-0">
                                                            <div class="form-group">
                                                                <label class="text-label">Masa Pelaksanaan (Hari Kalender)</label>
                                                                <input type="text" name="masa_pelaksanaan" class="form-control">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-12 py-0">
                                                            <div class="form-group">
                                                                <label class="text-label">Tanggal Rencana PHO</label>
                                                                <input type="text" name="tgl_rencanapho" class="form-control">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-12 py-0">
                                                            <div class="form-group">
                                                                <label class="text-label">Output/Capaian/Produk Akhir</label>
                                                                <input type="text" name="output_produk" class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="datalokasi" role="tabpanel">
                                        <div class="pt-4">
                                            <div class="row">
                                                <div class="col-lg-4">
                                                    <div class="row">
                                                        <div class="col-lg-12 py-0">
                                                            <div class="form-group">
                                                                <label class="text-label">Kabupaten</label>
                                                                <select class="custom-select" name="lok_kabupaten" id="lok_kabupaten" requireda>
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
                                                        <div class="col-lg-12 py-0">
                                                            <div class="form-group">
                                                                <label class="text-label">Distrik</label>
                                                                <select class="custom-select" name="lok_distrik" id="lok_distrik" requireda>
                                                                    <option value="">Pilih Kecamatan/Distrik</option>
                                                                </select>
                                                                <div class="help-block with-errors"></div>

                                                            </div>
                                                        </div>
                                                        <div class="col-lg-12 py-0">
                                                            <div class="form-group">
                                                                <label class="text-label">Latitude</label>
                                                                <input type="text" id="latitude" name="latitude" class="form-control">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-12 py-0">
                                                            <div class="form-group">
                                                                <label class="text-label">Longitude</label>
                                                                <input type="text" id="longitude" name="longitude" class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-8">
                                                    <div class="row">
                                                        <div class="col-lg-12 py-0">
                                                            <div class="form-group">
                                                                <label class="text-label">Titik Koordinat</label>
                                                                <?php echo $map['html']; ?>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="progres" role="tabpanel">
                                        <div class="pt-4">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="row">
                                                        <div class="col-lg-3 py-0">
                                                            <div class="form-group">
                                                                <label class="text-label">Januari</label>
                                                                <input type="text" id="pk_januari" name="pk_januari" class="form-control">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-3 py-0">
                                                            <div class="form-group">
                                                                <label class="text-label">Februari</label>
                                                                <input type="text" id="pk_februari" name="pk_februari" class="form-control">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-3 py-0">
                                                            <div class="form-group">
                                                                <label class="text-label">Maret</label>
                                                                <input type="text" id="pk_maret" name="pk_maret" class="form-control">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-3 py-0">
                                                            <div class="form-group">
                                                                <label class="text-label">April</label>
                                                                <input type="text" id="pk_april" name="pk_april" class="form-control">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-3 py-0">
                                                            <div class="form-group">
                                                                <label class="text-label">Mei</label>
                                                                <input type="text" id="pk_mei" name="pk_mei" class="form-control">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-3 py-0">
                                                            <div class="form-group">
                                                                <label class="text-label">Juni</label>
                                                                <input type="text" id="pk_juni" name="pk_juni" class="form-control">
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-3 py-0">
                                                            <div class="form-group">
                                                                <label class="text-label">Juli</label>
                                                                <input type="text" id="pk_juli" name="pk_juli" class="form-control">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-3 py-0">
                                                            <div class="form-group">
                                                                <label class="text-label">Agustus</label>
                                                                <input type="text" id="pk_agustus" name="pk_agustus" class="form-control">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-3 py-0">
                                                            <div class="form-group">
                                                                <label class="text-label">September</label>
                                                                <input type="text" id="pk_september" name="pk_september" class="form-control">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-3 py-0">
                                                            <div class="form-group">
                                                                <label class="text-label">Oktober</label>
                                                                <input type="text" id="pk_oktober" name="pk_oktober" class="form-control">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-3 py-0">
                                                            <div class="form-group">
                                                                <label class="text-label">November</label>
                                                                <input type="text" id="pk_november" name="pk_november" class="form-control">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-3 py-0">
                                                            <div class="form-group">
                                                                <label class="text-label">Desember</label>
                                                                <input type="text" id="pk_desember" name="pk_desember" class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="row">
                                                <!-- <button class="btn btn-primary" id="btnUpdateKurva">Update Kurva</button> -->
                                                <div class="col-lg-12">
                                                    <canvas class="" id="myChart" style="width:100%"></canvas>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="dokpendukung" role="tabpanel">
                                        <div class="pt-4">
                                            <div class="row dokpendukung">
                                                <div class="col-lg-6">
                                                    <div class="row">
                                                        <div class="col-lg-12 py-0">
                                                            <div class="form-group">
                                                                <label class="text-label">Dokumen Kontrak (Termasuk RAB)</label>
                                                                <input type="file" name="dp_dokkontrak" class="form-control gb">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-12 py-0">
                                                            <div class="form-group">
                                                                <label class="text-label">Gambar Rencana</label>
                                                                <input type="file" name="dp_gbrrencana" class="form-control gb">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-12 py-0">
                                                            <div class="form-group">
                                                                <label class="text-label">Gambar As Built Drawing</label>
                                                                <input type="file" name="dp_gbrasbuild" class="form-control gb">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-12 py-0">
                                                            <div class="form-group">
                                                                <label class="text-label">MC 0%</label>
                                                                <input type="file" name="dp_mcnol" class="form-control gb">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-12 py-0">
                                                            <div class="form-group">
                                                                <label class="text-label">Laporan Harian</label>
                                                                <input type="file" name="dp_lapharian" class="form-control gb">
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="row">
                                                        <div class="col-lg-12 py-0">
                                                            <div class="form-group">
                                                                <label class="text-label">Laporan Mingguan</label>
                                                                <input type="file" name="dp_lapmingguan" class="form-control gb">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-12 py-0">
                                                            <div class="form-group">
                                                                <label class="text-label">Laporan Bulanan</label>
                                                                <input type="file" name="dp_lapbulanan" class="form-control gb">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-12 py-0">
                                                            <div class="form-group">
                                                                <label class="text-label">MC 100%</label>
                                                                <input type="file" name="dp_mcseratus" class="form-control gb">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-12 py-0">
                                                            <div class="form-group">
                                                                <label class="text-label">Dokumentasi</label>
                                                                <input type="file" name="dp_dokumentasi" class="form-control gb">
                                                            </div>
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
                            <input class="btn btn-primary" type="submit" value="Simpan">
                        </div>
                    </div>
                    <?php echo form_close(); ?>
                </div>
            </div>

        </div>
    </div>
</div>

<div class="modal fade modalViewDatakontrak" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Paket </h5>
                <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="modal-content-scrollable">
                    <!-- <form action="#" id="step-form-horizontal" class="step-form-horizontal"> -->
                    <?php echo form_open_multipart('admin/datakontrak/tambah_datakontrak'); ?>
                    <div class="tambahDataKontrak">

                        <div class="card">
                            <div class="card-body">
                                <!-- Nav tabs -->
                                <ul class="nav nav-tabs" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" data-toggle="tab" href="#datakontrak">
                                            <span>
                                                <i class="ti-home"></i>
                                            </span>
                                            <span> Data Kontrak</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="tab" href="#datalokasi">
                                            <span>
                                                <i class="ti-user"></i>
                                            </span>
                                            <span> Lokasi</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="tab" href="#progres">
                                            <span>
                                                <i class="ti-email"></i>
                                            </span>
                                            <span> Progres Pelaksanaan</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="tab" href="#dokpendukung">
                                            <span>
                                                <i class="ti-email"></i>
                                            </span>
                                            <span> Dokumen Pendukung</span>
                                        </a>
                                    </li>
                                </ul>
                                <!-- Tab panes -->
                                <div class="tab-content tabcontent-border">
                                    <div class="tab-pane fade show active" id="datakontrak" role="tabpanel">
                                        <div class="pt-4">
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="row">
                                                        <div class="col-lg-12 py-0">
                                                            <div class="form-group">
                                                                <label class="text-label">Nama Paket</label>
                                                                <input type="text" name="nama_paket" class="form-control">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-12 py-0">
                                                            <div class="form-group">
                                                                <label class="text-label">Nama Penyedia Jasa Konstruksi</label>
                                                                <input type="text" name="penyedia_jasa" class="form-control">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-12 py-0">
                                                            <div class="form-group">
                                                                <label class="text-label">Nomor Kontrak</label>
                                                                <div class="input-group">
                                                                    <input type="text" class="form-control" name="no_kontrak">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-12 py-0">
                                                            <div class="form-group">
                                                                <label class="text-label">Tanggal Kontrak</label>
                                                                <input type="date" name="tgl_kontrak" class="form-control">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-12 py-0">
                                                            <div class="form-group">
                                                                <label class="text-label">Nomor SPMK</label>
                                                                <input type="text" name="no_spmk" class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="row">

                                                        <div class="col-lg-12 py-0">
                                                            <div class="form-group">
                                                                <label class="text-label">Tanggal SPMK</label>
                                                                <div class="input-group">
                                                                    <input name="tgl_spmk" type="date" class="form-control">

                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-12 py-0">
                                                            <div class="form-group">
                                                                <label class="text-label">Nilai Kontrak</label>
                                                                <div class="input-group">
                                                                    <input type="text" name="nilai_kontrak" class="form-control">

                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-12 py-0">
                                                            <div class="form-group">
                                                                <label class="text-label">Sumber Dana</label>
                                                                <div class="input-group">
                                                                    <input type="text" name="sumber_dana" class="form-control">

                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-12 py-0">
                                                            <div class="form-group">
                                                                <label class="text-label">Tahun Sumber Dana</label>
                                                                <div class="input-group">
                                                                    <input type="text" name="tahun_sumberdana" class="form-control">

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="datalokasi" role="tabpanel">
                                        <div class="pt-4">
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="row">
                                                        <div class="col-lg-12 py-0">
                                                            <div class="form-group">
                                                                <label class="text-label">Kabupaten</label>
                                                                <input type="text" name="lok_kabupaten" class="form-control">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-12 py-0">
                                                            <div class="form-group">
                                                                <label class="text-label">Distrik</label>
                                                                <input type="text" name="lok_distrik" class="form-control">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-12 py-0">
                                                            <div class="form-group">
                                                                <label class="text-label">Titik Koordinat</label>
                                                                <input type="text" name="titik_koordinat" class="form-control">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-12 py-0">
                                                            <div class="form-group">
                                                                <label class="text-label">Output/Capaian/Produk Akhir</label>
                                                                <input type="text" name="output_produk" class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="row">

                                                        <div class="col-lg-12 py-0">
                                                            <div class="form-group">
                                                                <label class="text-label">Masa Pelaksanaan (Hari Kalender)</label>
                                                                <input type="text" name="masa_pelaksanaan" class="form-control">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-12 py-0">
                                                            <div class="form-group">
                                                                <label class="text-label">Tanggal Rencana PHO</label>
                                                                <input type="text" name="tgl_rencanapho" class="form-control">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-12 py-0">
                                                            <div class="form-group">
                                                                <label class="text-label">Dokumentasi</label>
                                                                <input type="file" name="dokumentasi" class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="progres" role="tabpanel">
                                        <div class="pt-4">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="row">
                                                        <div class="col-lg-3 py-0">
                                                            <div class="form-group">
                                                                <label class="text-label">Januari</label>
                                                                <input type="text" id="pk_januari" name="pk_januari" class="form-control">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-3 py-0">
                                                            <div class="form-group">
                                                                <label class="text-label">Februari</label>
                                                                <input type="text" id="pk_februari" name="pk_februari" class="form-control">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-3 py-0">
                                                            <div class="form-group">
                                                                <label class="text-label">Maret</label>
                                                                <input type="text" id="pk_maret" name="pk_maret" class="form-control">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-3 py-0">
                                                            <div class="form-group">
                                                                <label class="text-label">April</label>
                                                                <input type="text" id="pk_april" name="pk_april" class="form-control">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-3 py-0">
                                                            <div class="form-group">
                                                                <label class="text-label">Mei</label>
                                                                <input type="text" id="pk_mei" name="pk_mei" class="form-control">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-3 py-0">
                                                            <div class="form-group">
                                                                <label class="text-label">Juni</label>
                                                                <input type="text" id="pk_juni" name="pk_juni" class="form-control">
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-3 py-0">
                                                            <div class="form-group">
                                                                <label class="text-label">Juli</label>
                                                                <input type="text" id="pk_juli" name="pk_juli" class="form-control">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-3 py-0">
                                                            <div class="form-group">
                                                                <label class="text-label">Agustus</label>
                                                                <input type="text" id="pk_agustus" name="pk_agustus" class="form-control">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-3 py-0">
                                                            <div class="form-group">
                                                                <label class="text-label">September</label>
                                                                <input type="text" id="pk_september" name="pk_september" class="form-control">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-3 py-0">
                                                            <div class="form-group">
                                                                <label class="text-label">Oktober</label>
                                                                <input type="text" id="pk_oktober" name="pk_oktober" class="form-control">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-3 py-0">
                                                            <div class="form-group">
                                                                <label class="text-label">November</label>
                                                                <input type="text" id="pk_november" name="pk_november" class="form-control">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-3 py-0">
                                                            <div class="form-group">
                                                                <label class="text-label">Desember</label>
                                                                <input type="text" id="pk_desember" name="pk_desember" class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="row">
                                                <!-- <button class="btn btn-primary" id="btnUpdateKurva">Update Kurva</button> -->
                                                <div class="col-lg-12">
                                                    <canvas class="" id="myChart" style="width:100%"></canvas>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="dokpendukung" role="tabpanel">
                                        <div class="pt-4">
                                            <div class="row dokpendukung">
                                                <div class="col-lg-6">
                                                    <div class="row">
                                                        <div class="col-lg-12 py-0">
                                                            <div class="form-group">
                                                                <label class="text-label">Dokumen Kontrak (Termasuk RAB)</label>
                                                                <input type="file" name="dp_dokkontrak" class="form-control gb">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-12 py-0">
                                                            <div class="form-group">
                                                                <label class="text-label">Gambar Rencana</label>
                                                                <input type="file" name="dp_gbrrencana" class="form-control gb">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-12 py-0">
                                                            <div class="form-group">
                                                                <label class="text-label">Gambar As Built Drawing</label>
                                                                <input type="file" name="dp_gbrasbuild" class="form-control gb">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-12 py-0">
                                                            <div class="form-group">
                                                                <label class="text-label">MC 0%</label>
                                                                <input type="file" name="dp_mcnol" class="form-control gb">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-12 py-0">
                                                            <div class="form-group">
                                                                <label class="text-label">Laporan Harian</label>
                                                                <input type="file" name="dp_lapharian" class="form-control gb">
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="row">
                                                        <div class="col-lg-12 py-0">
                                                            <div class="form-group">
                                                                <label class="text-label">Laporan Mingguan</label>
                                                                <input type="file" name="dp_lapmingguan" class="form-control gb">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-12 py-0">
                                                            <div class="form-group">
                                                                <label class="text-label">Laporan Bulanan</label>
                                                                <input type="file" name="dp_lapbulanan" class="form-control gb">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-12 py-0">
                                                            <div class="form-group">
                                                                <label class="text-label">MC 100%</label>
                                                                <input type="file" name="dp_mcseratus" class="form-control gb">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-12 py-0">
                                                            <div class="form-group">
                                                                <label class="text-label">Dokumentasi</label>
                                                                <input type="file" name="dp_dokumentasi" class="form-control gb">
                                                            </div>
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
                            <input class="btn btn-primary" type="submit" value="Simpan">
                        </div>
                    </div>
                    <?php echo form_close(); ?>
                </div>
            </div>

        </div>
    </div>
</div>


<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>

<script>
    $(document).ready(function() {
        $('#menudatakontrak').last().addClass("active");

    });
</script>

<script>
    $(document).on("click", ".btnViewDatakontrak", function() {
        // <?php
            // $CI = &get_instance();
            // $CI->load->model('M_datakontrak');
            // // $sl = $CI->M_galeri->get_slider_by_idberita($news->id)->row();
            // $gambar_data = $CI->M_datakontrak->get_by_id($);
            // 
            ?>
        $('input[name="nama_paket"]').val("Test12");
        $('.modalViewDatakontrak').modal('show');
    });

    $(document).on("click", ".modalTambahDatakontrak", function() {
        var pk_jan = $('#pk_januari').val();
        var pk_feb = $('#pk_februari').val();
        var pk_mar = $('#pk_maret').val();
        var pk_apr = $('#pk_april').val();
        var pk_mei = $('#pk_mei').val();
        var pk_jun = $('#pk_juni').val();
        var pk_jul = $('#pk_juli').val();
        var pk_agu = $('#pk_agustus').val();
        var pk_sep = $('#pk_september').val();
        var pk_okt = $('#pk_oktober').val();
        var pk_nov = $('#pk_november').val();
        var pk_des = $('#pk_desember').val();
        var namapaket = '';

        const xValues = ['Jan', 'Feb', 'Mar', 'Apr', 'Mei', 'Jun', 'Jul', 'Agu', 'Sep', 'Okt', 'Nov', 'Des'];
        new Chart("myChart", {
            type: "line",
            data: {
                labels: xValues,
                datasets: [{
                    data: [pk_jan, pk_feb, pk_mar, pk_apr, pk_mei, pk_jun, pk_jul, pk_agu, pk_sep, pk_okt, pk_nov, pk_des],
                    // data: [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
                    borderColor: "red",
                    fill: true
                }]
            },
            options: {
                legend: {
                    display: false
                },

                title: {
                    display: true,
                    text: namapaket
                },
                tooltip: {
                    callbacks: {
                        label: function(context) {
                            let label = context.dataset.label || '';

                            if (label) {
                                label += ': ';
                            }
                            if (context.parsed.y !== null) {
                                label += new Intl.NumberFormat('en-US', {
                                    style: 'currency',
                                    currency: 'USD'
                                }).format(context.parsed.y);
                            }
                            return label;
                        }
                    }
                }

            }

        });

        function addData(chart, label, newData) {
            chart.data.labels.push(label);
            chart.data.datasets.forEach((dataset) => {
                dataset.data.push(newData);
            });
            chart.update();
        }

        const label = ['Jan', 'Feb', 'Mar', 'Apr', 'Mei', 'Jun', 'Jul', 'Agu', 'Sep', 'Okt', 'Nov', 'Des'];
        const newData = [pk_jan, pk_feb, pk_mar, pk_apr, pk_mei, pk_jun, pk_jul, pk_agu, pk_sep, pk_okt, pk_nov, pk_des];
        $(document).on("click", ".btnUpdateKurva", function() {
            addData(myChart, label, newData);
        });

    });
</script>

<script>
    $(document).ready(function() {
        function setMapToForm(latitude, longitude) {
            $('input[name="latitude"]').val(latitude);
            $('input[name="longitude"]').val(longitude);

            $("#lok_kabupaten").change(function() {
                var url = "<?php echo site_url('datakontrak/add_ajax_kec'); ?>/" + $(this).val();
                console.log(url); // Add this line to log the URL
                $('#lok_distrik').load(url);
                return false;
            });
        };
    })
</script>