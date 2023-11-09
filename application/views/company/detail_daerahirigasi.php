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

    td {
        font-size: 14px;
    }

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
                                <a class="nav-link" data-toggle="pill" href="#laporan">LAPORAN</a>
                            </li>
                        </ul>

                        <div class="tab-content">
                            <div id="skema" class="container tab-pane active">
                                <div class="faqs mt-5">
                                    <div class="container px-0">
                                        <div class="row mb-4">
                                            <div class="col-lg-6">
                                                <table id="example" class="display" style="width:100%">
                                                    <tbody>
                                                        <tr>
                                                            <td width="50%" class="strong">Daerah Irigasi</td>
                                                            <td>:</td>
                                                            <td><?php echo strtoupper($ddi->nama_di); ?></td>
                                                        </tr>
                                                        <tr>
                                                            <td class="strong">Kewenangan</td>
                                                            <td>:</td>
                                                            <td>PROV. PABAR</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="strong">Download Skema Jaringan</td>
                                                            <td>:</td>
                                                            <td>/</td>
                                                        </tr>

                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="col-lg-6">
                                                <table id="example" class="display" style="width:100%">
                                                    <tbody>
                                                        <tr>
                                                            <td width="50%" class="strong">Jumlah Aset (PAI)</td>
                                                            <td>:</td>
                                                            <td>191 Saluran / 583 Bangunan / 17 Nonfisik / 88 Nonjaringan / 41 Petak Tersier</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="strong">Jumlah Subsistem</td>
                                                            <td>:</td>
                                                            <td>0 Subsistem</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="strong">Data AKNOP</td>
                                                            <td>:</td>
                                                            <td>670 Bangunan / 191 Saluran</td>
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
                                                            <td class="btn-danger px-2">Panjang Saluran Induk</td>
                                                            <td>:</td>
                                                            <td>10.27 Km</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="px-2">Panjang Saluran Muka</td>
                                                            <td>:</td>
                                                            <td>0.00 Km</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="px-2">Panjang Saluran Pengelak Banjir</td>
                                                            <td>:</td>
                                                            <td>0.00 Km</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="px-2">Panjang Saluran Pembuang (Tersier)</td>
                                                            <td>:</td>
                                                            <td>0.00 Km</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="col-lg-4">
                                                <table id="example" class="display" style="width:100%">
                                                    <tbody>
                                                        <tr>
                                                            <td class="btn-primary px-2">Panjang Saluran Sekunder</td>
                                                            <td>:</td>
                                                            <td>13.90 Km</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="px-2">Panjang Saluran Pembuang</td>
                                                            <td>:</td>
                                                            <td>3.98 Km</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="btn-success px-2">Panjang Saluran Tersier</td>
                                                            <td>:</td>
                                                            <td>35.84 Km</td>
                                                        </tr>

                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="col-lg-4">
                                                <table id="example" class="display" style="width:100%">
                                                    <tbody>
                                                        <tr>
                                                            <td class="px-2">Panjang Saluran Suplesi</td>
                                                            <td>:</td>
                                                            <td>3.72 Km</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="px-2">Panjang Saluran Gendong</td>
                                                            <td>:</td>
                                                            <td>0.00 Km</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="btn-warning px-2">Panjang Saluran Kuarter</td>
                                                            <td>:</td>
                                                            <td>0.00 Km</td>
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
                                            <div class="col-md-12">
                                                <div id="accordion-1">
                                                    <div class="card wow fadeInLeft" data-wow-delay="0.1s">
                                                        <div class="card-header">
                                                            <a class="card-link collapsed" data-toggle="collapse" href="#collapseOne">
                                                                2023
                                                            </a>
                                                        </div>
                                                        <div id="collapseOne" class="collapse" data-parent="#accordion-1">
                                                            <div class="card-body">
                                                                <div class="table-responsive">
                                                                    <table class="table-bordered table-striped" style="width:100%">
                                                                        <thead>
                                                                            <tr style="font-size: 14px;">
                                                                                <th style="background-color: #6495ED;" colspan="4">
                                                                                    <center>DASAR KONTRAK</center>
                                                                                </th>
                                                                                <th style="background-color: #F0FFF0;" colspan="2">
                                                                                    <center>SUMBER PENDANAAN</center>
                                                                                </th>
                                                                                <th style="background-color: #F08080;" colspan="3">
                                                                                    <center>MASA KONTRAK AWAL</center>
                                                                                </th>
                                                                                <th style="background-color: #ADD8E6;" colspan="2">
                                                                                    <center>LOKASI</center>
                                                                                </th>
                                                                                <th style="background-color: #F0E68C;" colspan="4">
                                                                                    <center>DOKUMEN</center>
                                                                                </th>
                                                                            </tr>
                                                                            <tr style="font-size: 12px; text-align: center;">
                                                                                <th>Nama Paket Fisik</th>
                                                                                <th>Penyedia Jasa Kontraktor</th>
                                                                                <th>No. Kontrak Kontraktor</th>
                                                                                <th>Tgl Kontrak</th>
                                                                                <th>Sumber Dana</th>
                                                                                <th>Nilai Kontrak Kontraktor</th>
                                                                                <th>Bulan</th>
                                                                                <th>Hari</th>
                                                                                <th>Tgl. PHO</th>
                                                                                <th>Kab.</th>
                                                                                <th>Koordinat</th>
                                                                                <th>Dok. Kontrak</th>
                                                                                <th>Gambar Rencana</th>
                                                                                <th>Gambar As Build Drawing</th>
                                                                                <th>Dokumentasi</th>
                                                                            </tr>
                                                                        </thead>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="card wow fadeInLeft" data-wow-delay="0.4s">
                                                            <div class="card-header">
                                                                <a class="card-link collapsed" data-toggle="collapse" href="#collapseFour">
                                                                    2022
                                                                </a>
                                                            </div>
                                                            <div id="collapseFour" class="collapse" data-parent="#accordion-1">
                                                                <div class="card-body">

                                                                    <div class="table-responsive">
                                                                        <table class="table-bordered table-striped" style="width:100%">
                                                                            <thead>
                                                                                <tr style="font-size: 14px;">
                                                                                    <th style="background-color: #6495ED;" colspan="4">
                                                                                        <center>DASAR KONTRAK</center>
                                                                                    </th>
                                                                                    <th style="background-color: #F0FFF0;" colspan="2">
                                                                                        <center>SUMBER PENDANAAN</center>
                                                                                    </th>
                                                                                    <th style="background-color: #F08080;" colspan="3">
                                                                                        <center>MASA KONTRAK AWAL</center>
                                                                                    </th>
                                                                                    <th style="background-color: #ADD8E6;" colspan="2">
                                                                                        <center>LOKASI</center>
                                                                                    </th>
                                                                                    <th style="background-color: #F0E68C;" colspan="4">
                                                                                        <center>DOKUMEN</center>
                                                                                    </th>
                                                                                </tr>
                                                                                <tr style="font-size: 12px; text-align: center;">
                                                                                    <th>Nama Paket Fisik</th>
                                                                                    <th>Penyedia Jasa Kontraktor</th>
                                                                                    <th>No. Kontrak Kontraktor</th>
                                                                                    <th>Tgl Kontrak</th>
                                                                                    <th>Sumber Dana</th>
                                                                                    <th>Nilai Kontrak Kontraktor</th>
                                                                                    <th>Bulan</th>
                                                                                    <th>Hari</th>
                                                                                    <th>Tgl. PHO</th>
                                                                                    <th>Kab.</th>
                                                                                    <th>Koordinat</th>
                                                                                    <th>Dok. Kontrak</th>
                                                                                    <th>Gambar Rencana</th>
                                                                                    <th>Gambar As Build Drawing</th>
                                                                                    <th>Dokumentasi</th>
                                                                                </tr>
                                                                            </thead>
                                                                        </table>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="card wow fadeInLeft" data-wow-delay="0.5s">
                                                            <div class="card-header">
                                                                <a class="card-link collapsed" data-toggle="collapse" href="#collapseFive">
                                                                    2021
                                                                </a>
                                                            </div>
                                                            <div id="collapseFive" class="collapse" data-parent="#accordion-1">
                                                                <div class="card-body">

                                                                    <div class="table-responsive">
                                                                        <table class="table-bordered table-striped" style="width:100%">
                                                                            <thead>
                                                                                <tr style="font-size: 14px;">
                                                                                    <th style="background-color: #6495ED;" colspan="4">
                                                                                        <center>DASAR KONTRAK</center>
                                                                                    </th>
                                                                                    <th style="background-color: #F0FFF0;" colspan="2">
                                                                                        <center>SUMBER PENDANAAN</center>
                                                                                    </th>
                                                                                    <th style="background-color: #F08080;" colspan="3">
                                                                                        <center>MASA KONTRAK AWAL</center>
                                                                                    </th>
                                                                                    <th style="background-color: #ADD8E6;" colspan="2">
                                                                                        <center>LOKASI</center>
                                                                                    </th>
                                                                                    <th style="background-color: #F0E68C;" colspan="4">
                                                                                        <center>DOKUMEN</center>
                                                                                    </th>
                                                                                </tr>
                                                                                <tr style="font-size: 12px; text-align: center;">
                                                                                    <th>Nama Paket Fisik</th>
                                                                                    <th>Penyedia Jasa Kontraktor</th>
                                                                                    <th>No. Kontrak Kontraktor</th>
                                                                                    <th>Tgl Kontrak</th>
                                                                                    <th>Sumber Dana</th>
                                                                                    <th>Nilai Kontrak Kontraktor</th>
                                                                                    <th>Bulan</th>
                                                                                    <th>Hari</th>
                                                                                    <th>Tgl. PHO</th>
                                                                                    <th>Kab.</th>
                                                                                    <th>Koordinat</th>
                                                                                    <th>Dok. Kontrak</th>
                                                                                    <th>Gambar Rencana</th>
                                                                                    <th>Gambar As Build Drawing</th>
                                                                                    <th>Dokumentasi</th>
                                                                                </tr>
                                                                            </thead>
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
                                    <!-- FAQs End -->

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>