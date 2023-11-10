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
</style>
<div class="content-body">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Data Daerah Irigasi</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table student-data-table m-t-20">
                                <thead>
                                    <tr>
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
                                        <tr>
                                            <td><?php echo $di->provinsi; ?></td>
                                            <td><?php echo $di->kabupaten; ?></td>
                                            <td><?php echo $di->kode_di; ?></td>
                                            <td><?php echo $di->nama_di; ?></td>
                                            <td><?php echo $di->jenis_di; ?></td>
                                            <td><?php echo $di->luas_fungsional; ?></td>
                                            <td>
                                                <a href="#" data-toggle="modal" data-target=".modalSkema" class="btn btn-sm btn-primary"><i class="fa fa-map-marker"></i> Skema</a>
                                                <a href="#" data-toggle="modal" data-target=".modalLaporan" class="btn btn-sm btn-success"><i class="fa fa-file"></i> Laporan</a>
                                                <a href="#" data-toggle="modal" data-target=".modalLaporan" class="btn btn-sm btn-warning"><i class="fa fa-file"></i> Dok. lain</a>
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
                <h5 class="modal-title">Laporan Daerah Irigasi</h5>
                <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="modal-content-scrollable">
                    <form action="#" id="step-form-horizontal" class="step-form-horizontal">
                        <div>
                            <section id="lapIrigasi">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="row">
                                            <div class="col-lg-12 py-0">
                                                <div class="form-group">
                                                    <label class="text-label">Nama Paket</label>
                                                    <input type="text" name="nama_paket" class="form-control" required>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 py-0">
                                                <div class="form-group">
                                                    <label class="text-label">Nama Penyedia Jasa Konstruksi</label>
                                                    <input type="text" name="penyedia_jasa" class="form-control" required>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 py-0">
                                                <div class="form-group">
                                                    <label class="text-label">Nomor Kontrak</label>
                                                    <div class="input-group">
                                                        <input type="text" class="form-control" name="no_kontrak" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 py-0">
                                                <div class="form-group">
                                                    <label class="text-label">Tanggal Kontrak</label>
                                                    <input type="date" name="tgl_kontrak" class="form-control" required>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="row">
                                            <div class="col-lg-12 py-0">
                                                <div class="form-group">
                                                    <label class="text-label">Nomor SPMK</label>
                                                    <input type="text" name="no_spmk" class="form-control" required>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 py-0">
                                                <div class="form-group">
                                                    <label class="text-label">Tanggal SPMK</label>
                                                    <div class="input-group">
                                                        <input name="tgl_spmk" type="date" class="form-control" id="emial1" required>

                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-lg-12 py-0">
                                                <div class="form-group">
                                                    <label class="text-label">Nilai Kontrak</label>
                                                    <div class="input-group">
                                                        <input type="text" name="nilai_kontrak" class="form-control" required>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 py-0">
                                                <div class="form-group">
                                                    <label class="text-label">Sumber Dana</label>
                                                    <div class="input-group">
                                                        <input type="text" name="sumber_dana" class="form-control" required>

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
                                                    <input type="text" name="lok_kabupaten" class="form-control" required>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 py-0">
                                                <div class="form-group">
                                                    <label class="text-label">Distrik</label>
                                                    <input type="text" name="lok_distrik" class="form-control" required>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 py-0">
                                                <div class="form-group">
                                                    <label class="text-label">Titik Koordinat</label>
                                                    <input type="text" name="titik_koordinat" class="form-control" required>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 py-0">
                                                <div class="form-group">
                                                    <label class="text-label">Output/Capaian/Produk Akhir</label>
                                                    <input type="text" name="output_produk" class="form-control" required>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="row">

                                            <div class="col-lg-12 py-0">
                                                <div class="form-group">
                                                    <label class="text-label">Masa Pelaksanaan (Hari Kalender)</label>
                                                    <input type="date" name="masa_pelaksanaan" class="form-control" required>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 py-0">
                                                <div class="form-group">
                                                    <label class="text-label">Tanggal Rencana PHO</label>
                                                    <input type="text" name="tgl_rencanapho" class="form-control" required>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 py-0">
                                                <div class="form-group">
                                                    <label class="text-label">Dokumentasi</label>
                                                    <input type="date" name="dokumentasi" class="form-control" required>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 py-0">
                                                <div class="form-group">
                                                    <label class="text-label">Kurva S (mengikuti nilai progress)</label>
                                                    <input type="text" name="kurvas" class="form-control" required>
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
                                            <div class="col-lg-12 py-0">
                                                <div class="form-group">
                                                    <label class="text-label">Januari</label>
                                                    <input type="text" name="pk_januari" class="form-control" required>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 py-0">
                                                <div class="form-group">
                                                    <label class="text-label">Februari</label>
                                                    <input type="text" name="pk_februari" class="form-control" required>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 py-0">
                                                <div class="form-group">
                                                    <label class="text-label">Maret</label>
                                                    <input type="text" name="pk_maret" class="form-control" required>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 py-0">
                                                <div class="form-group">
                                                    <label class="text-label">April</label>
                                                    <input type="text" name="pk_april" class="form-control" required>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 py-0">
                                                <div class="form-group">
                                                    <label class="text-label">Mei</label>
                                                    <input type="text" name="pk_mei" class="form-control" required>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 py-0">
                                                <div class="form-group">
                                                    <label class="text-label">Juni</label>
                                                    <input type="text" name="pk_juni" class="form-control" required>
                                                </div>
                                            </div>


                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="row">

                                            <div class="col-lg-12 py-0">
                                                <div class="form-group">
                                                    <label class="text-label">Juli</label>
                                                    <input type="text" name="pk_juli" class="form-control" required>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 py-0">
                                                <div class="form-group">
                                                    <label class="text-label">Agustus</label>
                                                    <input type="text" name="pk_agustus" class="form-control" required>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 py-0">
                                                <div class="form-group">
                                                    <label class="text-label">September</label>
                                                    <input type="text" name="pk_september" class="form-control" required>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 py-0">
                                                <div class="form-group">
                                                    <label class="text-label">Oktober</label>
                                                    <input type="text" name="pk_oktober" class="form-control" required>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 py-0">
                                                <div class="form-group">
                                                    <label class="text-label">November</label>
                                                    <input type="text" name="pk_november" class="form-control" required>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 py-0">
                                                <div class="form-group">
                                                    <label class="text-label">Desember</label>
                                                    <input type="text" name="pk_desember" class="form-control" required>
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
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="row">
                                            <div class="col-lg-12 py-0">
                                                <div class="form-group">
                                                    <label class="text-label">Dokumen Kontrak (Termasuk RAB)</label>
                                                    <input type="text" name="dp_dokkontrak" class="form-control" required>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 py-0">
                                                <div class="form-group">
                                                    <label class="text-label">Gambar Rencana</label>
                                                    <input type="text" name="dp_gbrrencana" class="form-control" required>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 py-0">
                                                <div class="form-group">
                                                    <label class="text-label">Gambar As Built Drawing</label>
                                                    <input type="text" name="dp_gbrasbuild" class="form-control" required>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 py-0">
                                                <div class="form-group">
                                                    <label class="text-label">MC 0%</label>
                                                    <input type="text" name="dp_mcnol" class="form-control" required>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 py-0">
                                                <div class="form-group">
                                                    <label class="text-label">Laporan Harian</label>
                                                    <input type="text" name="dp_lapharian" class="form-control" required>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="row">
                                            <div class="col-lg-12 py-0">
                                                <div class="form-group">
                                                    <label class="text-label">Laporan Mingguan</label>
                                                    <input type="text" name="dp_lapmingguan" class="form-control" required>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 py-0">
                                                <div class="form-group">
                                                    <label class="text-label">Laporan Bulanan</label>
                                                    <input type="text" name="dp_lapbulanan" class="form-control" required>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 py-0">
                                                <div class="form-group">
                                                    <label class="text-label">MC 100%</label>
                                                    <input type="text" name="dp_mcseratus" class="form-control" required>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 py-0">
                                                <div class="form-group">
                                                    <label class="text-label">Dokumentasi</label>
                                                    <input type="text" name="dp_dokumentasi" class="form-control" required>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>

                        </div>
                    </form>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
        $('#menudaerahirigasi').last().addClass("active");
    });
</script>
</body>

</html>