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

    #DataKontrak .table-responsive td,
    #DataKontrak .table-responsive th {
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

    /* Modal Detail CSS */
    #modalViewDetailDatakontrak td,
    #modalViewDetailDatakontrak th {
        color: #000;
        text-align: left;
        padding: 5px 0;
        vertical-align: top;
    }

    #DetailDatakontrak td:nth-child(3) {
        font-weight: bold;
    }
</style>
<div id="DataKontrak" class="content-body">
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
                                                    echo '<a href="' . base_url("admin/datakontrak/download_dok_datakontrak/") . $dk->dp_dokkontrak . '"><i class="bi bi-file-earmark-pdf"></i></a>';
                                                } else {
                                                    echo '<i class="bi bi-x"></i>';
                                                }
                                                ?>
                                            </td>

                                            <td>
                                                <?php if ($dk->dp_gbrrencana != '') {
                                                    echo '<a href="' . base_url("admin/datakontrak/download_dok_datakontrak/") . $dk->dp_gbrrencana . '"><i class="bi bi-file-earmark-pdf"></i></a>';
                                                } else {
                                                    echo '<i class="bi bi-x"></i>';
                                                }
                                                ?>
                                            </td>

                                            <td>
                                                <?php if ($dk->dp_gbrasbuild != '') {
                                                    echo '<a href="' . base_url("admin/datakontrak/download_dok_datakontrak/") . $dk->dp_gbrasbuild . '"><i class="bi bi-file-earmark-pdf"></i></a>';
                                                } else {
                                                    echo '<i class="bi bi-x"></i>';
                                                }
                                                ?>
                                            </td>

                                            <td>
                                                <?php
                                                if ($dk->dp_mcnol != '') {
                                                    echo '<a href="' . base_url("admin/datakontrak/download_dok_datakontrak/") . $dk->dp_mcnol . '"><i class="bi bi-file-earmark-pdf"></i></a>';
                                                } else {
                                                    echo '<i class="bi bi-x"></i>';
                                                }
                                                ?>
                                            </td>

                                            <td>
                                                <?php if ($dk->dp_lapharian != '') {
                                                    echo '<a href="' . base_url("admin/datakontrak/download_dok_datakontrak/") . $dk->dp_lapharian . '"><i class="bi bi-file-earmark-pdf"></i></a>';
                                                } else {
                                                    echo '<i class="bi bi-x"></i>';
                                                }
                                                ?>
                                            </td>

                                            <td>
                                                <?php if ($dk->dp_lapmingguan != '') {
                                                    echo '<a href="' . base_url("admin/datakontrak/download_dok_datakontrak/") . $dk->dp_lapmingguan . '"><i class="bi bi-file-earmark-pdf"></i></a>';
                                                } else {
                                                    echo '<i class="bi bi-x"></i>';
                                                }
                                                ?>
                                            </td>

                                            <td>
                                                <?php if ($dk->dp_lapbulanan != '') {
                                                    echo '<a href="' . base_url("admin/datakontrak/download_dok_datakontrak/") . $dk->dp_lapbulanan . '"><i class="bi bi-file-earmark-pdf"></i></a>';
                                                } else {
                                                    echo '<i class="bi bi-x"></i>';
                                                }
                                                ?>
                                            </td>

                                            <td>
                                                <?php if ($dk->dp_mcseratus != '') {
                                                    echo '<a href="' . base_url("admin/datakontrak/download_dok_datakontrak/") . $dk->dp_mcseratus . '"><i class="bi bi-file-earmark-pdf"></i></a>';
                                                } else {
                                                    echo '<i class="bi bi-x"></i>';
                                                }
                                                ?>
                                            </td>
                                            <td>
                                                <?php if ($dk->dp_dokumentasi != '') {
                                                    echo '<a href="' . base_url("admin/datakontrak/download_dok_datakontrak/") . $dk->dp_dokumentasi . '"><i class="bi bi-file-earmark-pdf"></i></a>';
                                                } else {
                                                    echo '<i class="bi bi-x"></i>';
                                                }
                                                ?>
                                            </td>
                                            <td class="w-8">
                                                <a data-id="<?php echo $dk->id; ?>" data-nama_paket="<?php echo $dk->nama_paket; ?>" data-penyedia_jasa="<?php echo $dk->penyedia_jasa; ?>" data-no_kontrak="<?php echo $dk->no_kontrak; ?>" data-tgl_kontrak="<?php echo $dk->tgl_kontrak; ?>" data-no_spmk="<?php echo $dk->no_spmk; ?>" data-tgl_spmk="<?php echo $dk->tgl_spmk; ?>" data-sumber_dana="<?php echo $dk->sumber_dana; ?>" data-tahun_sumberdana="<?php echo $dk->tahun_sumberdana; ?>" data-nilai_kontrak="<?php echo $dk->nilai_kontrak; ?>" data-lok_kabupaten="<?php echo $dk->lok_kabupaten; ?>" data-lok_distrik="<?php echo $dk->lok_distrik; ?>" data-titik_koordinat="<?php echo $dk->titik_koordinat; ?>" data-output_produk="<?php echo $dk->output_produk; ?>" data-tgl_rencanapho="<?php echo $dk->tgl_rencanapho; ?>" data-masa_pelaksanaan="<?php echo $dk->masa_pelaksanaan; ?>" data-pk_januari="<?php echo $dk->pk_januari; ?>" data-pk_februari="<?php echo $dk->pk_februari; ?>" data-pk_maret="<?php echo $dk->pk_maret; ?>" data-pk_april="<?php echo $dk->pk_april; ?>" data-pk_mei="<?php echo $dk->pk_mei; ?>" data-pk_juni="<?php echo $dk->pk_juni; ?>" data-pk_juli="<?php echo $dk->pk_juli; ?>" data-pk_agustus="<?php echo $dk->pk_agustus; ?>" data-pk_september="<?php echo $dk->pk_september; ?>" data-pk_oktober="<?php echo $dk->pk_oktober; ?>" data-pk_november="<?php echo $dk->pk_november; ?>" data-pk_desember="<?php echo $dk->pk_desember; ?>" data-dp_dokkontrak="<?php echo $dk->dp_dokkontrak; ?>" data-dp_gbrrencana="<?php echo $dk->dp_gbrrencana; ?>" data-dp_gbrasbuild="<?php echo $dk->dp_gbrasbuild; ?>" data-dp_mcnol="<?php echo $dk->dp_mcnol; ?>" data-dp_lapharian="<?php echo $dk->dp_lapharian; ?>" data-dp_lapmingguan="<?php echo $dk->dp_lapmingguan; ?>" data-dp_lapbulanan="<?php echo $dk->dp_lapbulanan; ?>" data-dp_mcseratus="<?php echo $dk->dp_mcseratus; ?>" data-dp_dokumentasi="<?php echo $dk->dp_dokumentasi; ?>" data-kode_di="<?php echo $dk->kode_di; ?>" data-user_id="<?php echo $dk->user_id; ?>" href="#" data-toggle="modal" class="btn btn-sm btn-info btnViewDetailDatakontrak">
                                                    <i class="bi bi-eye"></i>
                                                </a>
                                                <a class="btn btn-sm btn-primary btnEditDatakontrak" data-id_datakontrak="<?php echo $dk->id; ?>" href="#">
                                                    <i class="bi bi-pencil"></i>
                                                </a>
                                                <a class="btn btn-sm btn-danger btnDeleteDatakontrak" data-id_datakontrak="<?php echo $dk->id; ?>" href="">
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

<div id="modalViewDetailDatakontrak" class="modal fade " tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Detail Data Kontrak </h5>
                <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="modal-content-scrollable">
                    <div class="tambahDataKontrak">
                        <div class="card">
                            <div class="card-body">
                                <ul class="nav nav-tabs" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" data-toggle="tab" href="#DetailDatakontrak">
                                            <span>
                                                <i class="ti-file"></i>
                                            </span>
                                            <span> Data Kontrak</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="tab" href="#DetailProgres">
                                            <span>
                                                <i class="ti-bar-chart"></i>
                                            </span>
                                            <span> Progres Pelaksanaan</span>
                                        </a>
                                    </li>
                                </ul>
                                <div class="tab-content tabcontent-border">
                                    <div class="tab-pane fade show active" id="DetailDatakontrak" role="tabpanel">
                                        <div class="row">
                                            <div class="col-lg-12 mt-3">
                                                <div class="table-responsive">
                                                    <table class="table table-borderless student-data-table m-t-20">
                                                        <tbody>
                                                            <tr>
                                                                <td id="id_dtkontrak"></td>
                                                            </tr>
                                                            <tr>
                                                                <td class="w-30">Nama Paket</td>
                                                                <td class="w-1">: </td>
                                                                <td class="w-69" id="nama_paket"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Nama Penyedia Jasa Konstruksi</td>
                                                                <td>: </td>
                                                                <td id="penyedia_jasa"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Nomor Kontrak</td>
                                                                <td>: </td>
                                                                <td id="no_kontrak"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Tanggal Kontrak</td>
                                                                <td>: </td>
                                                                <td id="tgl_kontrak"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Nomor SPMK</td>
                                                                <td>: </td>
                                                                <td id="no_spmk"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Tanggal SPMK</td>
                                                                <td>: </td>
                                                                <td id="tgl_spmk"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Sumber Dana</td>
                                                                <td>: </td>
                                                                <td id="sumber_dana"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Tahun Sumber Dana</td>
                                                                <td>: </td>
                                                                <td id="tahun_sumberdana"></td>
                                                            </tr>

                                                            <tr>
                                                                <td>Nilai Kontrak</td>
                                                                <td>: </td>
                                                                <td id="nilai_kontrak"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Lokasi Kabupaten</td>
                                                                <td>:</td>
                                                                <td id="lokasi_kabupaten"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Lokasi Distrik</td>
                                                                <td>:</td>
                                                                <td id="lokasi_distrik"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Titik Koordinat</td>
                                                                <td>: </td>
                                                                <td id="titik_koordinat"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Output/Capaian/Produk Akhir</td>
                                                                <td>: </td>
                                                                <td id="output_produk"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Masa Pelaksanaan (Hari Kalender)</td>
                                                                <td>: </td>
                                                                <td id="masa_pelaksanaan"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Tanggal Rencana PHO</td>
                                                                <td>: </td>
                                                                <td id="tgl_rencanapho"></td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="DetailProgres" role="tabpanel">
                                        <div class="pt-4">
                                            <div class="row dokpendukung">
                                                <div class="col-lg-12">
                                                    <div class="row">
                                                        <div class="col-lg-2">
                                                            <label class="mt-2">Januari</label>
                                                            <input type="text" class="form-control" id="detail_pk_januari" readonly>
                                                        </div>
                                                        <div class="col-lg-2">
                                                            <label class="mt-2">Februari</label>
                                                            <input type="text" class="form-control" id="detail_pk_februari" readonly>
                                                        </div>
                                                        <div class="col-lg-2">
                                                            <label class="mt-2">Maret</label>
                                                            <input type="text" class="form-control" id="detail_pk_maret" readonly>
                                                        </div>
                                                        <div class="col-lg-2">
                                                            <label class="mt-2">April</label>
                                                            <input type="text" class="form-control" id="detail_pk_april" readonly>
                                                        </div>
                                                        <div class="col-lg-2">
                                                            <label class="mt-2">Mei</label>
                                                            <input type="text" class="form-control" id="detail_pk_mei" readonly>
                                                        </div>
                                                        <div class="col-lg-2">
                                                            <label class="mt-2">Juni</label>
                                                            <input type="text" class="form-control" id="detail_pk_juni" readonly>
                                                        </div>
                                                        <div class="col-lg-2">
                                                            <label class="mt-2">Juli</label>
                                                            <input type="text" class="form-control" id="detail_pk_juli" readonly>
                                                        </div>
                                                        <div class="col-lg-2">
                                                            <label class="mt-2">Agustus</label>
                                                            <input type="text" class="form-control" id="detail_pk_agustus" readonly>
                                                        </div>
                                                        <div class="col-lg-2">
                                                            <label class="mt-2">September</label>
                                                            <input type="text" class="form-control" id="detail_pk_september" readonly>
                                                        </div>
                                                        <div class="col-lg-2">
                                                            <label class="mt-2">Oktober</label>
                                                            <input type="text" class="form-control" id="detail_pk_oktober" readonly>
                                                        </div>
                                                        <div class="col-lg-2">
                                                            <label class="mt-2">November</label>
                                                            <input type="text" class="form-control" id="detail_pk_november" readonly>
                                                        </div>
                                                        <div class="col-lg-2">
                                                            <label class="mt-2">Desember</label>
                                                            <input type="text" class="form-control" id="detail_pk_desember" readonly>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <!-- <button class="btn btn-primary" id="btnUpdateKurva">Update Kurva</button> -->
                                                        <div class="col-lg-12">
                                                            <canvas class="" id="chartDatakontrak" style="width:100%"></canvas>
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
                </div>
            </div>

        </div>
    </div>
</div>

<!-- Bagian konten modal -->
<div class="modal fade" id="modalEditDatakontrak" tabindex="-1" role="dialog" aria-labelledby="modalEditDatakontrakLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalEditDatakontrakLabel">Edit Data Kontrak</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" id="editModalContent">
            </div>
        </div>
    </div>
</div>

<script src="https://maps.googleapis.com/maps/api/js?sensor=false" type="text/javascript"></script>

<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
<script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?libraries=geometry&sensor=false&key=AIzaSyBjh8gPTMxhsaeTmsxtzxvEhFvVKCcWUFg&callback=initMap">
</script>
<script>
    $(document).ready(function() {
        $('#menudatakontrak').last().addClass("active");

    });

    $('.btnViewDetailDatakontrak').on('click', function() {
        $('#id_dtkontrak').hide();
        var id = $(this).data('id');
        var Npaket = $(this).data('nama_paket');
        var Pjasa = $(this).data('penyedia_jasa');
        var Nkontrak = $(this).data('no_kontrak');
        var Tglkontrak = $(this).data('tgl_kontrak');
        var NoSPMK = $(this).data('no_spmk');
        var TglSPMK = $(this).data('tgl_spmk');
        var Sdana = $(this).data('sumber_dana');
        var Tsdana = $(this).data('tahun_sumberdana');
        var Nkkontrak = $(this).data('nilai_kontrak');
        var LokKab = $(this).data('lok_kabupaten');
        var Lokdis = $(this).data('lok_distrik');
        var Koordinat = $(this).data('titik_koordinat');
        var Output = $(this).data('output_produk');
        var TglPHO = $(this).data('tgl_rencanapho');
        var Masa_p = $(this).data('masa_pelaksanaan');
        var Jan = $(this).data('pk_januari');
        var Feb = $(this).data('pk_februari');
        var Mar = $(this).data('pk_maret');
        var Apr = $(this).data('pk_april');
        var Mei = $(this).data('pk_mei');
        var Jun = $(this).data('pk_juni');
        var Jul = $(this).data('pk_juli');
        var Agst = $(this).data('pk_agustus');
        var Sept = $(this).data('pk_september');
        var Okt = $(this).data('pk_oktober');
        var Nov = $(this).data('pk_november');
        var Des = $(this).data('pk_desember');
        var DPkontrak = $(this).data('dp_dokkontrak');
        var DPgbr = $(this).data('dp_gbrrencana');
        var DPnol = $(this).data('dp_mcnol');
        var DPmg = $(this).data('dp_lapmingguan');
        var DPbln = $(this).data('dp_lapbulanan');
        var DPseratus = $(this).data('dp_mcseratus');
        var DPdok = $(this).data('dp_dokumentasi');
        var kode_di = $(this).data('kode_di');
        var user_id = $(this).data('user_id');

        // Tempatkan data berita ke dalam modal
        $('#id_dtkontrak').text(id);
        $('#nama_paket').text(Npaket);
        $('#penyedia_jasa').text(Pjasa);
        $('#no_kontrak').text(Nkontrak);
        $('#tgl_kontrak').text(Tglkontrak);
        $('#no_spmk').text(NoSPMK);

        $('#no_spmk').text(NoSPMK);
        $('#tgl_spmk').text(TglSPMK);
        $('#sumber_dana').text(Sdana);
        $('#tahun_sumberdana').text(Tsdana);
        $('#nilai_kontrak').text(Nkkontrak);
        $('#lokasi_kabupaten').text(LokKab);
        $('#lokasi_distrik').text(Lokdis);
        $('#titik_koordinat').text(Koordinat);
        $('#output_produk').text(Output);
        $('#tgl_rencanapho').text(TglPHO);
        $('#masa_pelaksanaan').text(Masa_p);
        $('#detail_pk_januari').val(Jan);
        $('#detail_pk_februari').val(Feb);
        $('#detail_pk_maret').val(Mar);
        $('#detail_pk_april').val(Apr);
        $('#detail_pk_mei').val(Mei);
        $('#detail_pk_juni').val(Jun);
        $('#detail_pk_juli').val(Jul);
        $('#detail_pk_agustus').val(Agst);
        $('#detail_pk_september').val(Sept);
        $('#detail_pk_oktober').val(Okt);
        $('#detail_pk_november').val(Nov);
        $('#detail_pk_desember').val(Des);
        $('#dp_dokkontrak').text(DPkontrak);
        $('#dp_gbrrencana').text(DPgbr);
        $('#dp_mcnol').text(DPnol);
        $('#dp_lapmingguan').text(DPmg);
        $('#dp_lapbulanan').text(DPbln);
        $('#dp_mcseratus').text(DPseratus);
        $('#dp_dokumentasi').text(DPdok);
        $('#kode_di').text(kode_di);
        $('#user_id').text(user_id);



        // // Atur nilai atribut 'src' dari elemen gambar
        // $('#gambarPreview').attr('src', gambarDI);

        $('#modalViewDetailDatakontrak').modal('show');
    });

    $(".btnEditDatakontrak").click(function() {
        // Disable the button to prevent multiple clicks
        $(this).prop('disabled', true);

        var idDatakontrak = $(this).data('id_datakontrak');
        console.log('ID Datakontrak:', idDatakontrak);

        // Your existing AJAX code here
        $.ajax({
            type: 'POST',
            url: '<?php echo base_url("admin/datakontrak/get_data_by_id"); ?>',
            data: {
                id_datakontrak: idDatakontrak
            },
            dataType: 'json',
            success: function(response) {
                // Isi konten formulir modal dengan data yang diterima
                $('#editModalContent').html(response.html);

                // Tampilkan modal
                $('#modalEditDatakontrak').modal('show');
            },
            error: function(error) {
                console.log(error);
                alert('Terjadi kesalahan saat mengambil data.');
            },
            complete: function() {
                // Re-enable the button after the AJAX request is complete
                $(".btnEditDatakontrak").prop('disabled', false);
            }
        });
    });
</script>

<script>
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

    $(".btnDeleteDatakontrak").click(function(e) {
        e.preventDefault(); // Mencegah tautan mengarahkan langsung ke URL

        var id_datakontrak = $(this).data('id_datakontrak');

        Swal.fire({
            title: 'Apakah Anda yakin?',
            text: "Anda tidak dapat mengembalikan tindakan ini!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#d33',
            cancelButtonColor: '#3085d6',
            confirmButtonText: 'Ya, hapus!'
        }).then((result) => {
            if (result.isConfirmed) {
                // Jika pengguna mengonfirmasi, kirimkan permintaan penghapusan
                $.ajax({
                    type: 'POST',
                    url: '<?php echo base_url("admin/datakontrak/delete_data_kontrak"); ?>',
                    data: {
                        id_datakontrak: id_datakontrak
                    },
                    success: function(response) {
                        // Handle success
                        console.log(response);
                        Swal.fire(
                            'Terhapus!',
                            'Data telah dihapus.',
                            'success'
                        ).then(() => {
                            // Redirect ke halaman berita setelah penghapusan
                            window.location.href = "<?php echo base_url('admin/datakontrak'); ?>";
                        });
                    },
                    error: function(error) {
                        // Handle error
                        console.log(error);
                        Swal.fire(
                            'Error!',
                            'Terjadi kesalahan saat menghapus data.',
                            'error'
                        );
                    }
                });
            }
        });
    });
</script>

<script>
    $(document).on("click", ".btnViewDetailDatakontrak", function() {
        var pk_jan = $('#detail_pk_januari').val();
        var pk_feb = $('#detail_pk_februari').val();
        var pk_mar = $('#detail_pk_maret').val();
        var pk_apr = $('#detail_pk_april').val();
        var pk_mei = $('#detail_pk_mei').val();
        var pk_jun = $('#detail_pk_juni').val();
        var pk_jul = $('#detail_pk_juli').val();
        var pk_agu = $('#detail_pk_agustus').val();
        var pk_sep = $('#detail_pk_september').val();
        var pk_okt = $('#detail_pk_oktober').val();
        var pk_nov = $('#detail_pk_november').val();
        var pk_des = $('#detail_pk_desember').val();
        var namapaket = '';

        const xValues = ['Jan', 'Feb', 'Mar', 'Apr', 'Mei', 'Jun', 'Jul', 'Agu', 'Sep', 'Okt', 'Nov', 'Des'];
        new Chart("chartDatakontrak", {
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