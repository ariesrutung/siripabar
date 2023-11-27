<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
<style>
    .nav-pills .nav-link.active,
    .nav-pills .show>.nav-link {
        color: #030f27 !important;
        background: #fdbe33 !important;
    }

    .nav-pills .nav-link {
        color: #fdbe33 !important;
        background: #030f27 !important;
        border-radius: 0 !important;
    }

    .faqs .row::after {
        display: none;
    }

    .faqs {
        padding: 0;
    }

    .strong {
        font-weight: bold;
    }

    .faqs #accordion-1 {
        padding: 0;
    }

    .faqs .col-md-12 {
        padding: 0;
    }

    .faqs .container {
        padding: 0;
    }

    /* td {
        font-size: 14px;
    } */

    .single #container {
        margin: 0;
        padding: 0 75px;
        max-width: 100%;
    }

    div#skema,
    div#laporan {
        padding: 0;
        margin: 0;
        max-width: 100%;
    }

    .container.px-0 {
        margin: 0;
        max-width: 100%;
    }

    div#faqs {
        margin: 0 15px;
        max-width: 97.5%;
    }

    .faqs .card {
        margin-bottom: 0;
        border: none;
        border-radius: 0;
    }

    .w-20 {
        width: 20% !important;
    }

    .w-60 {
        width: 65% !important;
    }

    /* .table-responsive .tex-small,
    .table-responsive * {
        font-size: 10px;
        font-weight: 500;
        text-align: center;
    } */

    /* .table-responsive thead * {
        font-weight: bold;
        font-size: 11px;
    } */

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
<div class="single">
    <div id="container" class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="sidebar-widget wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                    <div class="tab-post">
                        <ul class="nav nav-pills nav-justified">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="pill" href="#skema">SKEMA</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="pill" href="#laporan">LAPORAN KINERJA DAERAH IRIGASI</a>
                            </li>
                        </ul>

                        <div class="tab-content">
                            <div id="skema" class="container tab-pane active">
                                <div class="faqs mt-5">
                                    <div class="container px-0">
                                        <div class="row mb-4">
                                            <div class="col-lg-5">
                                                <table id="example" class="display" style="width:100%">
                                                    <tbody>
                                                        <tr>
                                                            <td width="50%" class="strong">Daerah Irigasi</td>
                                                            <td width="30px" class="text-center">:</td>
                                                            <td class="strong"><?php echo strtoupper($ddi->nama_di); ?></td>
                                                        </tr>
                                                        <tr>
                                                            <td class="strong">Kewenangan</td>
                                                            <td width="30px" class="text-center">:</td>
                                                            <td class="strong">PROV. PABAR</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="strong">Download Skema Jaringan</td>
                                                            <td width="30px" class="text-center">:</td>
                                                            <td class="strong">
                                                                <?php if (!empty($ddi->dokumen)) : ?>
                                                                    <a href="<?php echo base_url('daerahirigasi/download_skema/') . $ddi->dokumen; ?>" class="btn btn-primary btn-sm"><i class="bi bi-cloud-download"></i> Download</a>
                                                                <?php else : ?>
                                                                    -
                                                                <?php endif; ?>
                                                            </td>
                                                        </tr>

                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="col-lg-7">
                                                <table id="example" class="display" style="width:100%">
                                                    <tbody>
                                                        <tr style="vertical-align:top">
                                                            <td width="50%" class="strong w-20">Jumlah Aset (PAI)</td>
                                                            <td width="30px" class="text-center">:</td>
                                                            <td class="strong w-70"><?php echo $ddi->jumlah_aset; ?></td>
                                                        </tr>
                                                        <tr style="vertical-align:top">
                                                            <td class="strong w-20">Jumlah Subsistem</td>
                                                            <td width="30px" class="text-center">:</td>
                                                            <td class="strong w-70"><?php echo ($ddi->jumlah_subsistem) ?> </td>
                                                        </tr>
                                                        <tr style="vertical-align:top">
                                                            <td class="strong w-20">Data AKNOP</td>
                                                            <td width="30px" class="text-center">:</td>
                                                            <td class="strong w-70"><?php echo ($ddi->data_aknop) ? $ddi->data_aknop : '0'; ?> Km</td>
                                                        </tr>

                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row mt-3">
                                            <div class="col-lg-4">
                                                <table id="example" class="display" style="width:100%">
                                                    <tbody>
                                                        <tr>
                                                            <td class="w-60 btn-danger px-2">Panjang Saluran Induk</td>
                                                            <td width="30px" class="text-center">:</td>
                                                            <td class="strong"><?php echo ($ddi->saluran_induk) ? $ddi->saluran_induk : '0'; ?> Km</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="w-60 px-2">Panjang Saluran Muka</td>
                                                            <td width="30px" class="text-center">:</td>
                                                            <td class="strong"><?php echo ($ddi->saluran_muka) ? $ddi->saluran_muka : '0'; ?> Km</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="w-60 px-2">Panjang Saluran Pengelak Banjir</td>
                                                            <td width="30px" class="text-center">:</td>
                                                            <td class="strong"><?php echo ($ddi->pengelak_banjir) ? $ddi->pengelak_banjir : '0'; ?> Km</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="w-60 px-2">Panjang Saluran Pembuang (Tersier)</td>
                                                            <td width="30px" class="text-center">:</td>
                                                            <td class="strong"><?php echo ($ddi->saluran_pembuang_tersier) ? $ddi->saluran_pembuang_tersier : '0'; ?> Km</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="col-lg-4">
                                                <table id="example" class="display" style="width:100%">
                                                    <tbody>
                                                        <tr>
                                                            <td class="w-60 btn-primary px-2">Panjang Saluran Sekunder</td>
                                                            <td width="30px" class="text-center">:</td>
                                                            <td class="strong"><?php echo ($ddi->saluran_sekunder) ? $ddi->saluran_sekunder : '0'; ?> Km</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="w-60 px-2">Panjang Saluran Pembuang</td>
                                                            <td width="30px" class="text-center">:</td>
                                                            <td class="strong"><?php echo ($ddi->saluran_pembuang) ? $ddi->saluran_pembuang : '0'; ?> Km</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="w-60 btn-success px-2">Panjang Saluran Tersier</td>
                                                            <td width="30px" class="text-center">:</td>
                                                            <td class="strong"><?php echo ($ddi->saluran_tersier) ? $ddi->saluran_tersier : '0'; ?> Km</td>
                                                        </tr>

                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="col-lg-4">
                                                <table id="example" class="display" style="width:100%">
                                                    <tbody>
                                                        <tr>
                                                            <td class="w-60 px-2">Panjang Saluran Suplesi</td>
                                                            <td width="30px" class="text-center">:</td>
                                                            <td class="strong"><?php echo ($ddi->saluran_suplesi) ? $ddi->saluran_suplesi : '0'; ?> Km</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="w-60 px-2">Panjang Saluran Gendong</td>
                                                            <td width="30px" class="text-center">:</td>
                                                            <td class="strong"><?php echo ($ddi->saluran_gendong) ? $ddi->saluran_gendong : '0'; ?> Km</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="w-60 btn-warning px-2">Panjang Saluran Kuarter</td>
                                                            <td width="30px" class="text-center">:</td>
                                                            <td class="strong"><?php echo ($ddi->saluran_kuarter) ? $ddi->saluran_kuarter : '0'; ?> Km</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div id="laporan" class="container tab-pane fade">
                                <!-- FAQs Start -->
                                <div class="faqs">
                                    <div id="faqs" class="container">
                                        <div class="section-header text-center">
                                        </div>
                                        <div class="row">
                                            <div class="table-responsive">
                                                <table class="table-bordered table-striped" style="width:100%">
                                                    <thead class="text-center">
                                                        <th>Tahun</th>
                                                        <th>Laporan Kinerja</th>
                                                        <th>Dokumentasi</th>
                                                    </thead>
                                                    <tbody class="text-center">

                                                        <?php
                                                        if ($lapkinerja) {
                                                            foreach ($lapkinerja as $lk) {
                                                        ?>
                                                                <tr>
                                                                    <td><?php echo $lk->tahun; ?></td>
                                                                    <td>
                                                                        <a href="<?php echo base_url('daerahirigasi/download_lapkinerja/') . $lk->laporan_kinerja; ?>"><i class="bi bi-file-earmark-pdf"></i></a>
                                                                    </td>
                                                                    <td>
                                                                        <a href="<?php echo base_url('daerahirigasi/download_lapkinerja/') . $lk->dokumentasi; ?>"><i class="bi bi-file-earmark-pdf"></i></a>
                                                                    </td>
                                                                </tr>
                                                            <?php }
                                                        } else { ?>
                                                            <tr>
                                                                <td colspan="3">Belum ada data</td>
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
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
        $('#menudaerahirigasi').last().addClass("active");
    });
</script>