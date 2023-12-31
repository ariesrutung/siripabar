<?php echo $map['js']; ?>
<style>
    @media (min-width: 576px) {
        .modal-dialog {
            max-width: 1000px;
            margin: 1.75rem auto;
        }
    }

    #editForm label {
        color: #000;
    }

    div#editModalContent {
        padding: 15px 30px;
    }

    div#DokPendukung .form-control {
        height: auto !important;
    }

    a.btn.btn-primary {
        display: flex;
        justify-content: center;
        align-items: center;
    }

    a.btn.btn-primary i.bi.bi-eye {
        margin: 0 10px;
    }
</style>

<form id="editForm" action="<?php echo base_url('admin/datakontrak/update_data'); ?>" method="post">
    <!-- Tempatkan elemen formulir di sini -->
    <?php if (isset($result['id'])) : ?>
        <ul class="nav nav-tabs" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" data-toggle="tab" href="#TabDatakontrak">
                    <span>
                        <i class="ti-home"></i>
                    </span>
                    <span> Data Kontrak</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#TabDatalokasi">
                    <span>
                        <i class="ti-user"></i>
                    </span>
                    <span> Lokasi</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#TabProgres">
                    <span>
                        <i class="ti-email"></i>
                    </span>
                    <span> Progres Pelaksanaan</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#DokPendukung">
                    <span>
                        <i class="ti-email"></i>
                    </span>
                    <span> Dokumen Pendukung</span>
                </a>
            </li>
        </ul>
        <div class="tab-content tabcontent-border">
            <div class="tab-pane fade show active" id="TabDatakontrak" role="tabpanel">
                <input type="hidden" name="id_datakontrak" value="<?php echo $result['id']; ?>">
                <div class="row mt-4">
                    <div class="col-lg-6 py-0">
                        <div class="form-group">
                            <label class="text-label">Nama Paket</label>
                            <input type="text" name="nama_paket" value="<?php echo $result['nama_paket']; ?>" class="form-control">
                        </div>
                    </div>
                    <div class="col-lg-6 py-0">
                        <div class="form-group">
                            <label class="text-label">Nama Penyedia Jasa Konstruksi</label>
                            <input type="text" name="penyedia_jasa" value="<?php echo $result['penyedia_jasa']; ?>" class="form-control">
                        </div>
                    </div>
                    <div class="col-lg-6 py-0">
                        <div class="form-group">
                            <label class="text-label">Nomor Kontrak</label>
                            <div class="input-group">
                                <input type="text" class="form-control" value="<?php echo $result['no_kontrak']; ?>" name="no_kontrak">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 py-0">
                        <div class="form-group">
                            <label class="text-label">Tanggal Kontrak</label>
                            <input type="date" name="tgl_kontrak" class="form-control" value="<?php echo $result['tgl_kontrak']; ?>">
                        </div>
                    </div>
                    <div class="col-lg-6 py-0">
                        <div class="form-group">
                            <label class="text-label">Nomor SPMK</label>
                            <input type="text" name="no_spmk" class="form-control" value="<?php echo $result['no_spmk']; ?>">
                        </div>
                    </div>
                    <div class="col-lg-6 py-0">
                        <div class="form-group">
                            <label class="text-label">Tanggal SPMK</label>
                            <div class="input-group">
                                <input name="tgl_spmk" type="date" class="form-control" value="<?php echo $result['tgl_spmk']; ?>">

                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 py-0">
                        <div class="form-group">
                            <label class="text-label">Nilai Kontrak</label>
                            <div class="input-group">
                                <input type="text" name="nilai_kontrak" class="form-control" value="<?php echo $result['nilai_kontrak']; ?>">

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 py-0">
                        <div class="form-group">
                            <label class="text-label">Sumber Dana</label>
                            <div class="input-group">
                                <input type="text" name="sumber_dana" class="form-control" value="<?php echo $result['sumber_dana']; ?>">

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 py-0">
                        <div class="form-group">
                            <label class="text-label">Tahun Sumber Dana</label>
                            <div class="input-group">
                                <input type="text" name="tahun_sumberdana" class="form-control" value="<?php echo $result['tahun_sumberdana']; ?>">

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 py-0">
                        <div class="form-group">
                            <label class="text-label">Masa Pelaksanaan (Hari Kalender)</label>
                            <input type="text" name="masa_pelaksanaan" class="form-control" value="<?php echo $result['masa_pelaksanaan']; ?>">
                        </div>
                    </div>
                    <div class="col-lg-6 py-0">
                        <div class="form-group">
                            <label class="text-label">Tanggal Rencana PHO</label>
                            <input type="text" name="tgl_rencanapho" class="form-control" value="<?php echo $result['tgl_rencanapho']; ?>">
                        </div>
                    </div>
                    <div class="col-lg-6 py-0">
                        <div class="form-group">
                            <label class="text-label">Output/Capaian/Produk Akhir</label>
                            <input type="text" name="output_produk" class="form-control" value="<?php echo $result['output_produk']; ?>">
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade show" id="TabDatalokasi" role="tabpanel">
                <div class="row mt-4">
                    <div class="col-lg-6 py-0">
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
                    <div class="col-lg-6 py-0">
                        <div class="form-group">
                            <label class="text-label">Distrik</label>
                            <select class="custom-select" name="lok_distrik" id="lok_distrik" requireda>
                                <option value="">Pilih Kecamatan/Distrik</option>
                            </select>
                            <div class="help-block with-errors"></div>

                        </div>
                    </div>
                    <div class="col-lg-6 py-0">
                        <div class="form-group">
                            <label class="text-label">Latitude</label>
                            <input type="text" id="latitude" name="latitude" class="form-control" value="">
                        </div>
                    </div>
                    <div class="col-lg-6 py-0">
                        <div class="form-group">
                            <label class="text-label">Longitude</label>
                            <input type="text" id="longitude" name="longitude" class="form-control" value="">
                        </div>
                    </div>
                    <div class="col-lg-12 py-0">
                        <div class="form-group">
                            <label class="text-label">Titik Koordinat</label>
                            <?php echo $map['html']; ?>
                        </div>
                    </div>
                </div>
            </div>

            <div class="tab-pane fade show" id="TabProgres" role="tabpanel">
                <div class="row mt-4">
                    <div class="col-lg-3 py-0">
                        <div class="form-group">
                            <label class="text-label">Januari</label>
                            <input type="text" id="pk_januari" name="pk_januari" class="form-control" value="<?php echo $result['pk_januari']; ?>">
                        </div>
                    </div>
                    <div class="col-lg-3 py-0">
                        <div class="form-group">
                            <label class="text-label">Februari</label>
                            <input type="text" id="pk_februari" name="pk_februari" class="form-control" value="<?php echo $result['pk_februari']; ?>">
                        </div>
                    </div>
                    <div class="col-lg-3 py-0">
                        <div class="form-group">
                            <label class="text-label">Maret</label>
                            <input type="text" id="pk_maret" name="pk_maret" class="form-control" value="<?php echo $result['pk_maret']; ?>">
                        </div>
                    </div>
                    <div class="col-lg-3 py-0">
                        <div class="form-group">
                            <label class="text-label">April</label>
                            <input type="text" id="pk_april" name="pk_april" class="form-control" value="<?php echo $result['pk_april']; ?>">
                        </div>
                    </div>
                    <div class="col-lg-3 py-0">
                        <div class="form-group">
                            <label class="text-label">Mei</label>
                            <input type="text" id="pk_mei" name="pk_mei" class="form-control" value="<?php echo $result['pk_mei']; ?>">
                        </div>
                    </div>
                    <div class="col-lg-3 py-0">
                        <div class="form-group">
                            <label class="text-label">Juni</label>
                            <input type="text" id="pk_juni" name="pk_juni" class="form-control" value="<?php echo $result['pk_juni']; ?>">
                        </div>
                    </div>

                    <div class="col-lg-3 py-0">
                        <div class="form-group">
                            <label class="text-label">Juli</label>
                            <input type="text" id="pk_juli" name="pk_juli" class="form-control" value="<?php echo $result['pk_juli']; ?>">
                        </div>
                    </div>
                    <div class="col-lg-3 py-0">
                        <div class="form-group">
                            <label class="text-label">Agustus</label>
                            <input type="text" id="pk_agustus" name="pk_agustus" class="form-control" value="<?php echo $result['pk_agustus']; ?>">
                        </div>
                    </div>
                    <div class="col-lg-3 py-0">
                        <div class="form-group">
                            <label class="text-label">September</label>
                            <input type="text" id="pk_september" name="pk_september" class="form-control" value="<?php echo $result['pk_september']; ?>">
                        </div>
                    </div>
                    <div class="col-lg-3 py-0">
                        <div class="form-group">
                            <label class="text-label">Oktober</label>
                            <input type="text" id="pk_oktober" name="pk_oktober" class="form-control" value="<?php echo $result['pk_oktober']; ?>">
                        </div>
                    </div>
                    <div class="col-lg-3 py-0">
                        <div class="form-group">
                            <label class="text-label">November</label>
                            <input type="text" id="pk_november" name="pk_november" class="form-control" value="<?php echo $result['pk_november']; ?>">
                        </div>
                    </div>
                    <div class="col-lg-3 py-0">
                        <div class="form-group">
                            <label class="text-label">Desember</label>
                            <input type="text" id="pk_desember" name="pk_desember" class="form-control" value="<?php echo $result['pk_desember']; ?>">
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <canvas class="" id="myChart" style="width:100%"></canvas>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade show" id="DokPendukung" role="tabpanel">
                <div class="row mt-4">
                    <div class="col-lg-6 py-0">
                        <div class="form-group">
                            <label class="text-label">Dokumen Kontrak (Termasuk RAB)</label>
                            <div class="input-group">
                                <input type="file" name="edit_dp_dokkontrak" class="form-control gb" value="<?php echo $result['dp_dokkontrak']; ?>" id="dp_dokkontrak">
                                <?php if (!empty($result['dp_dokkontrak'])) : ?>
                                    <div class="input-group-append">
                                        <a class="btn btn-primary" href="<?php echo base_url('upload/dokumendatakontrak/' . $result['dp_dokkontrak']); ?>" target="_blank">
                                            <i class="bi bi-eye"></i> Lihat Dokumen
                                        </a>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 py-0">
                        <div class="form-group">
                            <label class="text-label">Gambar Rencana</label>
                            <div class="input-group">
                                <input type="file" name="edit_dp_gbrrencana" class="form-control gb" value="<?php echo $result['dp_gbrrencana']; ?>" id="dp_gbrrencana">
                                <?php if (!empty($result['dp_gbrrencana'])) : ?>
                                    <div class="input-group-append">
                                        <a class="btn btn-primary" href="<?php echo base_url('upload/dokumendatakontrak/' . $result['dp_gbrrencana']); ?>" target="_blank">
                                            <i class="bi bi-eye"></i> Lihat Dokumen
                                        </a>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 py-0">
                        <div class="form-group">
                            <label class="text-label">Gambar As Built Drawing</label>
                            <div class="input-group">
                                <input type="file" name="edit_dp_gbrasbuild" class="form-control gb" value="<?php echo $result['dp_gbrasbuild']; ?>" id="dp_gbrasbuild">
                                <?php if (!empty($result['dp_gbrasbuild'])) : ?>
                                    <div class="input-group-append">
                                        <a class="btn btn-primary" href="<?php echo base_url('upload/dokumendatakontrak/' . $result['dp_gbrasbuild']); ?>" target="_blank">
                                            <i class="bi bi-eye"></i> Lihat Dokumen
                                        </a>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 py-0">
                        <div class="form-group">
                            <label class="text-label">MC 0%</label>
                            <div class="input-group">
                                <input type="file" name="edit_dp_mcnol" class="form-control gb" value="<?php echo $result['dp_mcnol']; ?>" id="dp_mcnol">
                                <?php if (!empty($result['dp_mcnol'])) : ?>
                                    <div class="input-group-append">
                                        <a class="btn btn-primary" href="<?php echo base_url('upload/dokumendatakontrak/' . $result['dp_mcnol']); ?>" target="_blank">
                                            <i class="bi bi-eye"></i> Lihat Dokumen
                                        </a>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 py-0">
                        <div class="form-group">
                            <label class="text-label">Laporan Harian</label>
                            <div class="input-group">
                                <input type="file" name="edit_dp_lapharian" class="form-control gb" value="<?php echo $result['dp_lapharian']; ?>" id="dp_lapharian">
                                <?php if (!empty($result['dp_lapharian'])) : ?>
                                    <div class="input-group-append">
                                        <a class="btn btn-primary" href="<?php echo base_url('upload/dokumendatakontrak/' . $result['dp_lapharian']); ?>" target="_blank">
                                            <i class="bi bi-eye"></i> Lihat Dokumen
                                        </a>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 py-0">
                        <div class="form-group">
                            <label class="text-label">Laporan Mingguan</label>
                            <div class="input-group">
                                <input type="file" name="edit_dp_lapmingguan" class="form-control gb" value="<?php echo $result['dp_lapmingguan']; ?>" id="dp_lapmingguan">
                                <?php if (!empty($result['dp_lapmingguan'])) : ?>
                                    <div class="input-group-append">
                                        <a class="btn btn-primary" href="<?php echo base_url('upload/dokumendatakontrak/' . $result['dp_lapmingguan']); ?>" target="_blank">
                                            <i class="bi bi-eye"></i> Lihat Dokumen
                                        </a>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 py-0">
                        <div class="form-group">
                            <label class="text-label">Laporan Bulanan</label>
                            <div class="input-group">
                                <input type="file" name="edit_dp_lapbulanan" class="form-control gb" value="<?php echo $result['dp_lapbulanan']; ?>" id="dp_lapbulanan">
                                <?php if (!empty($result['dp_lapbulanan'])) : ?>
                                    <div class="input-group-append">
                                        <a class="btn btn-primary" href="<?php echo base_url('upload/dokumendatakontrak/' . $result['dp_lapbulanan']); ?>" target="_blank">
                                            <i class="bi bi-eye"></i> Lihat Dokumen
                                        </a>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 py-0">
                        <div class="form-group">
                            <label class="text-label">MC 100%</label>
                            <div class="input-group">
                                <input type="file" name="edit_dp_mcseratus" class="form-control gb" value="<?php echo $result['dp_mcseratus']; ?>" id="dp_mcseratus">
                                <?php if (!empty($result['dp_mcseratus'])) : ?>
                                    <div class="input-group-append">
                                        <a class="btn btn-primary" href="<?php echo base_url('upload/dokumendatakontrak/' . $result['dp_mcseratus']); ?>" target="_blank">
                                            <i class="bi bi-eye"></i> Lihat Dokumen
                                        </a>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 py-0">
                        <div class="form-group">
                            <label class="text-label">Dokumentasi</label>
                            <div class="input-group">
                                <input type="file" name="edit_dp_dokumentasi" class="form-control gb" value="<?php echo $result['dp_dokumentasi']; ?>" id="dp_dokumentasi">
                                <?php if (!empty($result['dp_dokumentasi'])) : ?>
                                    <div class="input-group-append">
                                        <a class="btn btn-primary" href="<?php echo base_url('upload/dokumendatakontrak/' . $result['dp_dokumentasi']); ?>" target="_blank">
                                            <i class="bi bi-eye"></i> Lihat Dokumen
                                        </a>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Tambahkan elemen formulir lainnya sesuai kebutuhan -->
    <?php endif; ?>
    <hr>
    <div class="row d-flex justify-content-end">
        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
    </div>
</form>