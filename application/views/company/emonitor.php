<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

<style>
    .faqs {
        position: relative;
        width: 100%;
        padding: 0;
    }

    .faqs .row::after {
        display: none;
    }

    .faqs #container {
        margin: 0;
        padding: 0 75px;
        max-width: 100%;
    }

    div#featured {
        padding: 0;
        margin: 0;
        min-width: 100%;
    }

    .faqs #accordion-1 {
        padding-right: 0;
    }

    .tab-post .tab-content {
        padding: 0 !important;
    }

    .table-responsive .tex-small,
    .table-responsive * {
        font-size: 10px;
        font-weight: 500;
        text-align: center;
    }

    .faqs .card-body {
        padding: 10px 0;
        font-size: 16px;
        background: #ffffff;
        border: 1px solid rgba(0, 0, 0, .1);
        border-top: none;
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
</style>

<div class="faqs">
    <div id="container" class="container">
        <div class="section-header text-center">
            <p></p>
            <h2></h2>
        </div>

        <div class="row justify-content-center align-items-center">
            <?php if (!$this->session->userdata('username')) { ?>
            <div class="col-md-6">
                <div class="auth-form">
                    <h4 class="text-center mb-4 strong">ANDA HARUS LOGIN <br>UNTUK MENGAKSES MENU E-MONITORING PELAKSANAAN</h4>
                    <?php echo form_open("auth/logintamu"); ?>
                    <div class="form-group">
                        <label class=""><strong>Email</strong></label>
                        <input type="text" name="identity" class="form-control" id="identity" required placeholder="Ketik email Anda di sini">
                    </div>
                    <div class="form-group">
                        <label><strong>Kata Sandi</strong></label>
                        <input type="password" name="password" class="form-control" id="password" required placeholder="Ketik kata sandi Anda di sini">
                    </div>
                    <!-- <div class="text-center form-row d-flex justify-content-center mt-4 mb-2">
                        <a href="page-forgot-password.html">Lupa Kata Sandi?</a>
                    </div> -->
                    <div class="text-center mt-5">
                        <button type="submit" class="btn btn-primary btn-block">LOGIN</button>
                    </div>
                    <?php echo form_close(); ?>
                </div>
            </div>
            <?php } ?>
            <?php if ($this->session->userdata('username')) { ?>

            <div class="col-md-12">
                <div id="accordion-1">
                    <?php
                    $delay = 0.1;
                    foreach ($emonitoring as $emon) {
                    ?>
                        <div class="card wow fadeInLeft" data-wow-delay="<?php echo $delay += 0.5; ?>s">
                            <div class="card-header">
                                <a class="card-link collapsed" data-toggle="collapse" href="#collapse<?php echo $emon->tahun_sumberdana; ?>">
                                    <?php echo $emon->tahun_sumberdana; ?>
                                </a>
                            </div>
                            <div id="collapse<?php echo $emon->tahun_sumberdana; ?>" class="collapse" data-parent="#accordion-1">
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table-bordered table-striped text-small" style="width:100%">
                                            <thead>
                                                <?php
                                                $CI = &get_instance();
                                                $CI->load->model('M_emonitoring');

                                                $datakontrak = $CI->M_emonitoring->get_by_tahun_sumberdana($emon->tahun_sumberdana);
                                                ?>
                                                <tr class="tex-small" style="background-color:#00008B; color:white">
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
                                                    <th colspan="12">Progress Pelaksanaan</th>
                                                    <th rowspan="2">Kurva S</th>
                                                    <th colspan="9">Dokumen Pendukung </th>
                                                </tr>
                                                <tr style="background-color:#00008B; color:white">
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
                                                        <td style="text-align: left !important"><?php echo $dk->nama_paket; ?></td>
                                                        <td><?php echo $dk->penyedia_jasa; ?></td>
                                                        <td><?php echo $dk->no_kontrak; ?></td>
                                                        <td><?php echo date_indo($dk->tgl_kontrak); ?></td>
                                                        <td><?php echo $dk->no_spmk; ?></td>
                                                        <td><?php echo date_indo($dk->tgl_spmk); ?></td>
                                                        <td><?php echo $dk->sumber_dana . " " . $dk->tahun_sumberdana; ?></td>
                                                        <td><?php echo rupiah($dk->nilai_kontrak); ?></td>
                                                        <td><?php echo $dk->lok_kabupaten; ?></td>
                                                        <td><?php echo $dk->lok_distrik; ?></td>
                                                        <td><?php echo $dk->titik_koordinat; ?></td>
                                                        <td><?php echo $dk->output_produk; ?></td>
                                                        <td><?php echo $dk->masa_pelaksanaan; ?></td>
                                                        <td><?php echo date_indo($dk->tgl_rencanapho); ?></td>
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
                                                        <td><a target="_blank" href="<?php echo base_url();?>upload/dokumendatakontrak/<?php echo $dk->dp_dokkontrak; ?>"><i class="bi bi-file-earmark-pdf"></i></a>
                                                          </td>
                                                        <td>
                                                            <a href="#"><i class="bi bi-file-earmark-pdf"></i></a>
                                                            <!-- <?php // echo $dk->dp_gbrrencana; 
                                                                    ?> -->
                                                        </td>
                                                        <td>
                                                            <a href="#"><i class="bi bi-file-earmark-pdf"></i></a>
                                                            <!-- <?php // echo $dk->dp_gbrasbuild; 
                                                                    ?> -->
                                                        </td>
                                                        <td>
                                                            <a href="#"><i class="bi bi-file-earmark-pdf"></i></a>
                                                            <!-- <?php // echo $dk->dp_mcnol; 
                                                                    ?> -->
                                                        </td>
                                                        <td><a href="#"><i class="bi bi-file-earmark-pdf"></i></a><?php //echo $dk->dp_lapharian; ?></td>
                                                        <td><a href="#"><i class="bi bi-file-earmark-pdf"></i></a><?php //echo $dk->dp_lapmingguan; ?></td>
                                                        <td><a href="#"><i class="bi bi-file-earmark-pdf"></i></a><?php //echo $dk->dp_lapbulanan; ?></td>
                                                        <td><a href="#"><i class="bi bi-file-earmark-pdf"></i></a><?php //echo $dk->dp_mcseratus; ?></td>
                                                        <td><a href="#"><i class="bi bi-file-earmark-pdf"></i></a><?php //echo $dk->dp_dokumentasi; ?></td>
                                                    </tr>
                                                <?php } ?>
                                            </tbody>

                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>

                    <?php } ?>

                </div>
            </div>
            <?php } ?>
        </div>
    </div>
</div>


<!-- modal -->
<div class="modal fade" id="modalKurva" tabindex="-1" role="dialog" aria-labelledby="modalKurvaLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <!-- <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        
      </div> -->
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <canvas class="" id="myChart" style="width:100%"></canvas>
            </div>
            <!-- <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div> -->
        </div>
    </div>
</div>
<!-- end modal -->
<script>
    $(document).on("click", ".open-modalkurva", function() {
        var pk_jan = $(this).data('jan');
        var pk_feb = $(this).data('feb');
        var pk_mar = $(this).data('mar');
        var pk_apr = $(this).data('apr');
        var pk_mei = $(this).data('mei');
        var pk_jun = $(this).data('jun');
        var pk_jul = $(this).data('jul');
        var pk_agu = $(this).data('agu');
        var pk_sep = $(this).data('sep');
        var pk_okt = $(this).data('okt');
        var pk_nov = $(this).data('nov');
        var pk_des = $(this).data('des');
        var namapaket = $(this).data('namapaket');

        const xValues = ['Jan', 'Feb', 'Mar', 'Apr', 'Mei', 'Jun', 'Jul', 'Agu', 'Sep', 'Okt', 'Nov', 'Des'];
        new Chart("myChart", {
            type: "line",
            data: {
                labels: xValues,
                datasets: [{
                    data: [pk_jan, pk_feb, pk_mar, pk_apr, pk_mei, pk_jun, pk_jul, pk_agu, pk_sep, pk_okt, pk_nov, pk_des],
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
                            label += new Intl.NumberFormat('en-US', { style: 'currency', currency: 'USD' }).format(context.parsed.y);
                        }
                        return label;
                    }
                }
            }

            }

        });

    });
</script>
<script>
    $(document).ready(function() {
        $('#menuemonitoring').last().addClass("active");
    });
</script>