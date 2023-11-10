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
                                                        <a href="#" data-toggle="modal" data-target=".modalLaporan" class="btn btn-sm btn-warning"><i class="fa fa-file"></i> Dok. lain</a></td>
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
                                    <section>
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="row">
                                                    <div class="col-lg-12 px-0 py-0">
                                                        <div class="form-group">
                                                            <label class="text-label">Tgl SPMK Kontraktor</label>
                                                            <input type="date" name="jumlah_aset" class="form-control" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12 px-0 py-0">
                                                        <div class="form-group">
                                                            <label class="text-label">Sumber Dana Kontraktor</label>
                                                            <input type="text" name="jumlah_subsistem" class="form-control" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12 px-0 py-0">
                                                        <div class="form-group">
                                                            <label class="text-label">Nilai Kontrak Kontraktor</label>
                                                            <div class="input-group">
                                                                <input type="text" class="form-control" name="data_aknop" required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12 px-0 py-0">
                                                        <div class="form-group">
                                                            <label class="text-label">No. DPA</label>
                                                            <div class="input-group">
                                                                <input type="text" name="saluran_induk" class="form-control" required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12 px-0 py-0">
                                                        <div class="form-group">
                                                            <label class="text-label">Tanggal DPA Kontraktor</label>
                                                            <input type="date" name="salauran_muka" class="form-control" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12 px-0 py-0">
                                                        <div class="form-group">
                                                            <label class="text-label">Bulan Kontraktor</label>
                                                            <input type="text" name="saluran_pengelak" class="form-control" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12 px-0 py-0">
                                                        <div class="form-group">
                                                            <label class="text-label">Hari Kontraktor</label>
                                                            <div class="input-group">
                                                                <input name="saluran_pembuang" type="text" class="form-control" id="emial1" required>

                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-12 px-0 py-0">
                                                        <div class="form-group">
                                                            <label class="text-label">Tanggal PHO Kontraktor</label>
                                                            <div class="input-group">
                                                                <input type="date" name="saluran_sekunder" class="form-control" required>

                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12 px-0 py-0">
                                                        <div class="form-group">
                                                            <label class="text-label">Kabupaten</label>
                                                            <input type="text" name="panjang_pembuang" class="form-control" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12 px-0 py-0">
                                                        <div class="form-group">
                                                            <label class="text-label">Distrik</label>
                                                            <input type="text" name="panjang_tersier" class="form-control" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12 px-0 py-0">
                                                        <div class="form-group">
                                                            <label class="text-label">Titik Koordinat</label>
                                                            <input type="text" name="place" class="form-control" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12 px-0 py-0">
                                                        <div class="form-group">
                                                            <label class="text-label">No. Kontrak Add. I Kontraktor</label>
                                                            <input type="text" name="panjang_suplesi" class="form-control" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12 px-0 py-0">
                                                        <div class="form-group">
                                                            <label class="text-label">Tanggal Kontrak Add. I Kontraktor</label>
                                                            <input type="date" name="panjang_gendong" class="form-control" required>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-lg-6">
                                                <div class="row">

                                                    <div class="col-lg-12 px-0 py-0">
                                                        <div class="form-group">
                                                            <label class="text-label">No. Kontrak Add. II Kontraktor</label>
                                                            <input type="text" name="panjang_kuarter" class="form-control" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12 px-0 py-0">
                                                        <div class="form-group">
                                                            <label class="text-label">Tanggal Kontrak Add. II Kontraktor</label>
                                                            <input type="date" name="panjang_kuarter" class="form-control" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12 px-0 py-0">
                                                        <div class="form-group">
                                                            <label class="text-label">ADD. 1 BULAN KONTRAKTOR</label>
                                                            <input type="text" name="panjang_kuarter" class="form-control" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12 px-0 py-0">
                                                        <div class="form-group">
                                                            <label class="text-label">ADD. I HARI KONTRAKTOR</label>
                                                            <input type="text" name="panjang_kuarter" class="form-control" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12 px-0 py-0">
                                                        <div class="form-group">
                                                            <label class="text-label">ADD. I TGL PHO KONTRAKTOR</label>
                                                            <input type="text" name="panjang_kuarter" class="form-control" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12 px-0 py-0">
                                                        <div class="form-group">
                                                            <label class="text-label">ADD. II BULAN KONTRAKTOR</label>
                                                            <input type="text" name="panjang_kuarter" class="form-control" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12 px-0 py-0">
                                                        <div class="form-group">
                                                            <label class="text-label">ADD. II HARI KONTRAKTOR</label>
                                                            <input type="text" name="panjang_kuarter" class="form-control" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12 px-0 py-0">
                                                        <div class="form-group">
                                                            <label class="text-label">ADD. II TGL PHO KONTRAKTOR</label>
                                                            <input type="text" name="panjang_kuarter" class="form-control" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12 px-0 py-0">
                                                        <div class="form-group">
                                                            <label class="text-label">Dokumen Kontrak (Termasuk RAB)</label>
                                                            <input type="text" name="panjang_kuarter" class="form-control" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12 px-0 py-0">
                                                        <div class="form-group">
                                                            <label class="text-label">Gambar Rencana</label>
                                                            <input type="text" name="panjang_kuarter" class="form-control" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12 px-0 py-0">
                                                        <div class="form-group">
                                                            <label class="text-label">Gambar As Built Drawing</label>
                                                            <input type="text" name="panjang_kuarter" class="form-control" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12 px-0 py-0">
                                                        <div class="form-group">
                                                            <label class="text-label">Dokumentasi</label>
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
