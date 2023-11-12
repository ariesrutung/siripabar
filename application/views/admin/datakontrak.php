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

    .table-responsive * {
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
</style>
<div class="content-body">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="mb-0">Data Kontrak</h4>
                        <!-- <a class="btn btn-primary btn-sm" href="">Tambah Data</a> -->
                        <a href="#" data-toggle="modal" data-target=".modalLaporan" data-backdrop="static" class="btn btn-primary btn-sm"><i class="fa fa-file"></i> Tambah Data</a>
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
                                        <th rowspan="2">No SPMK</th>
                                        <th rowspan="2">Tgl SPMK</th>
                                        <th rowspan="2">Nilai Kontrak</th>
                                        <th rowspan="2">Sumber Dana</th>
                                        <th style="padding:2.5px;" colspan="3">Lokasi</th>
                                        <th rowspan="2">Output/Capaian/Produk Akhir </th>
                                        <th rowspan="2">Masa Pelaksanaan</th>
                                        <th rowspan="2">Tanggal Rencana PHO</th>
                                        <th rowspan="2">Dokumentasi </th>
                                        <th colspan="12">Progress Pelaksanaan</th>
                                        <th rowspan="2">Kurva S</th>
                                        <th colspan="9">Dokumen Pendukung </th>
                                    </tr>
                                    <tr>
                                        <th>Kab.</th>
                                        <th>Kec.</th>
                                        <th>Koordinat</th>
                                        <th>Jan</th>
                                        <th>Feb</th>
                                        <th>Mar</th>
                                        <th>Apr</th>
                                        <th>Mei</th>
                                        <th>Jun</th>
                                        <th>Jul</th>
                                        <th>Ags</th>
                                        <th>Sept</th>
                                        <th>Okt</th>
                                        <th>Nov</th>
                                        <th>Des</th>

                                        <th>Dokumen Kontrak (Termasuk RAB)</th>
                                        <th>Gambar Rencana</th>
                                        <th>Gambar As Built Drawing</th>
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
                                            <td><?php echo $dk->nama_paket; ?></td>
                                            <td><?php echo $dk->penyedia_jasa; ?></td>
                                            <td><?php echo $dk->no_kontrak; ?></td>
                                            <td><?php echo $dk->tgl_kontrak; ?></td>
                                            <td><?php echo $dk->no_spmk; ?></td>
                                            <td><?php echo $dk->tgl_spmk; ?></td>
                                            <td><?php echo $dk->sumber_dana . " " . $dk->tahun_sumberdana; ?></td>
                                            <td><?php echo $dk->nilai_kontrak; ?></td>
                                            <td><?php echo $dk->lok_kabupaten; ?></td>
                                            <td><?php echo $dk->lok_distrik; ?></td>
                                            <td><?php echo $dk->titik_koordinat; ?></td>
                                            <td><?php echo $dk->output_produk; ?></td>
                                            <td><?php echo $dk->tgl_rencanapho; ?></td>
                                            <td><?php echo $dk->masa_pelaksanaan; ?></td>
                                            <td><?php echo $dk->dokumentasi; ?></td>
                                            <td><?php echo $dk->pk_januari; ?></td>
                                            <td><?php echo $dk->pk_februari; ?></td>
                                            <td><?php echo $dk->pk_maret; ?></td>
                                            <td><?php echo $dk->pk_april; ?></td>
                                            <td><?php echo $dk->pk_mei; ?></td>
                                            <td><?php echo $dk->pk_juni; ?></td>
                                            <td><?php echo $dk->pk_juli; ?></td>
                                            <td><?php echo $dk->pk_agustus; ?></td>
                                            <td><?php echo $dk->pk_september; ?></td>
                                            <td><?php echo $dk->pk_oktober; ?></td>
                                            <td><?php echo $dk->pk_november; ?></td>
                                            <td><?php echo $dk->pk_desember; ?></td>
                                            <td>
                                                <a class="btn btn-sm btn-info open-modalkurva" data-toggle="modal" data-jan="<?php echo $dk->pk_januari; ?>" data-feb="<?php echo $dk->pk_februari; ?>" data-mar="<?php echo $dk->pk_maret; ?>" data-apr="<?php echo $dk->pk_april; ?>" data-mei="<?php echo $dk->pk_mei; ?>" data-jun="<?php echo $dk->pk_juni; ?>" data-jul="<?php echo $dk->pk_juli; ?>" data-agu="<?php echo $dk->pk_agustus; ?>" data-sep="<?php echo $dk->pk_september; ?>" data-okt="<?php echo $dk->pk_oktober; ?>" data-nov="<?php echo $dk->pk_november; ?>" data-des="<?php echo $dk->pk_desember; ?>" data-namapaket="<?php echo $dk->nama_paket; ?>" href="#modalKurva"><i class="bi bi-bar-chart-line"></i></a>
                                            </td>
                                            <td>
                                                <a href="<?php echo base_url('upload/dtkontrak/' . $dk->dp_dokkontrak); ?>"><i class="bi bi-file-earmark-pdf"></i></a>
                                            </td>
                                            <td>
                                                <a href="<?php echo base_url('upload/dtkontrak/' . $dk->dp_gbrrencana); ?>"><i class="bi bi-file-earmark-pdf"></i></a>
                                            </td>
                                            <td>
                                                <a href="<?php echo base_url('upload/dtkontrak/' . $dk->dp_gbrasbuild); ?>"><i class="bi bi-file-earmark-pdf"></i></a>
                                            </td>
                                            <td>
                                                <a href="<?php echo base_url('upload/dtkontrak/' . $dk->dp_mcnol); ?>"><i class="bi bi-file-earmark-pdf"></i></a>
                                            </td>
                                            <td>
                                                <a href="<?php echo base_url('upload/dtkontrak/' . $dk->dokumentasi); ?>"><i class="bi bi-file-earmark-pdf"></i></a>
                                            </td>
                                            <td>
                                                <a href="<?php echo base_url('upload/dtkontrak/' . $dk->dp_lapmingguan); ?>"><i class="bi bi-file-earmark-pdf"></i></a>
                                            </td>
                                            <td>
                                                <a href="<?php echo base_url('upload/dtkontrak/' . $dk->dp_lapbulanan); ?>"><i class="bi bi-file-earmark-pdf"></i></a>
                                            </td>
                                            <td>
                                                <a href="<?php echo base_url('upload/dtkontrak/' . $dk->dp_mcseratus); ?>"><i class="bi bi-file-earmark-pdf"></i></a>
                                            </td>
                                            <td>
                                                <a href="<?php echo base_url('upload/dtkontrak/' . $dk->dp_dokumentasi); ?>"><i class="bi bi-file-earmark-pdf"></i></a>
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
<div class="modal fade modalLaporan" tabindex="-1" role="dialog" aria-hidden="true">
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
                    <div>
                        <section id="lapIrigasi">
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

                            <div class="row mt-4">
                                <div class="col-lg-12 py-0">
                                    <h5 class="text-label">Lokasi</h5>
                                </div>
                            </div>
                            <hr>
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
                                        <div class="col-lg-12 py-0">
                                            <div class="form-group">
                                                <label class="text-label">Kurva S (mengikuti nilai progress)</label>
                                                <input type="file" name="kurvas" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row mt-4">
                                <div class="col-lg-12 py-0">
                                    <h5 class="text-label">Progres Pelaksanaan</h5>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="row">
                                        <div class="col-lg-6 py-0">
                                            <div class="form-group">
                                                <label class="text-label">Januari</label>
                                                <input type="text" name="pk_januari" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 py-0">
                                            <div class="form-group">
                                                <label class="text-label">Februari</label>
                                                <input type="text" name="pk_februari" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 py-0">
                                            <div class="form-group">
                                                <label class="text-label">Maret</label>
                                                <input type="text" name="pk_maret" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 py-0">
                                            <div class="form-group">
                                                <label class="text-label">April</label>
                                                <input type="text" name="pk_april" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 py-0">
                                            <div class="form-group">
                                                <label class="text-label">Mei</label>
                                                <input type="text" name="pk_mei" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 py-0">
                                            <div class="form-group">
                                                <label class="text-label">Juni</label>
                                                <input type="text" name="pk_juni" class="form-control">
                                            </div>
                                        </div>


                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="row">

                                        <div class="col-lg-6 py-0">
                                            <div class="form-group">
                                                <label class="text-label">Juli</label>
                                                <input type="text" name="pk_juli" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 py-0">
                                            <div class="form-group">
                                                <label class="text-label">Agustus</label>
                                                <input type="text" name="pk_agustus" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 py-0">
                                            <div class="form-group">
                                                <label class="text-label">September</label>
                                                <input type="text" name="pk_september" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 py-0">
                                            <div class="form-group">
                                                <label class="text-label">Oktober</label>
                                                <input type="text" name="pk_oktober" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 py-0">
                                            <div class="form-group">
                                                <label class="text-label">November</label>
                                                <input type="text" name="pk_november" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 py-0">
                                            <div class="form-group">
                                                <label class="text-label">Desember</label>
                                                <input type="text" name="pk_desember" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row mt-4">
                                <div class="col-lg-12 py-0">
                                    <h5 class="text-label">Dokumen Pendukung</h5>
                                </div>
                            </div>
                            <hr>
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
                        </section>
                        <div class="modal-footer">
                            <input class="btn btn-primary" type="submit" value="Tambah Data">
                        </div>
                    </div>
                    <?php echo form_close(); ?>
                </div>
            </div>

        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script>
    $(document).ready(function() {
        $('#menudatakontrak').last().addClass("active");
    });
</script>