    <style>
        div#detailLap td {
            text-align: left;
        }

        div#detailLap .card,
        div#identity .card {
            padding: 0;
        }

        div#detailLap th,
        div#detailLap td {
            padding: 0 0.55rem !important;
        }

        p#isilaporan,
        div#detailLap span {
            color: #373757;
            font-family: 'Roboto', sans-serif;
            font-weight: normal;
            line-height: 1.7;
        }

        .table-responsive * {
            color: #000;
        }

        .table thead th {
            vertical-align: middle;
            border-bottom: 2px solid #EEEEEE;
        }
    </style>
    <div class="content-body">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Data Pengaduan</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table student-data-table m-t-20">
                                    <thead>
                                        <tr>
                                            <th class="text-center">Aksi</th>
                                            <th class="text-center">Status</th>
                                            <th class="text-center">Tanggal Laporan</th>
                                            <th class="text-center">Kode Laporan</th>
                                            <th class="text-center">Kab/Kota</th>
                                            <th class="text-center">Isi Laporan</th>
                                            <th class="text-center">Lokasi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($pengaduan as $p) :  ?>
                                            <?php
                                            $CI = &get_instance();
                                            $CI->load->model('M_wilayah');
                                            $CI->load->model('M_pengaduan');
                                            //   $gb = $CI->M_pengaduan->get_allimage($p->kodelaporan);
                                            $kab = $CI->M_wilayah->get_by_id($p->lokasi_kabkota);
                                            $kec = $CI->M_wilayah->get_by_id($p->lokasi_distrik);
                                            $gbktp = $CI->M_pengaduan->get_allimage($p->kodelaporan, 'ktp');
                                            $gbdok1 = $CI->M_pengaduan->get_allimage($p->kodelaporan, 'dokumentasi1');
                                            $gbdok2 = $CI->M_pengaduan->get_allimage($p->kodelaporan, 'dokumentasi2');
                                            $gbdok3 = $CI->M_pengaduan->get_allimage($p->kodelaporan, 'dokumentasi3');
                                            $dokadd = $CI->M_pengaduan->get_allimage($p->kodelaporan, 'dokumen_tambahan');
                                            ?>
                                            <tr>
                                                <td>

                                                    <a id="DetailLap" class="btn btn-info btn-sm mb-1" href="" title="Detail" data-toggle="modal" data-target="#detailLap" data-kodelaporan="<?php echo $p->kodelaporan; ?>" data-nik="<?php echo $p->nik; ?>" data-namapelapor="<?php echo $p->nama_pelapor; ?>" data-alamatpelapor="<?php echo $p->alamat_pelapor; ?>" data-email="<?php echo $p->email; ?>" data-nohp="<?php echo $p->no_hp; ?>" data-tgllaporan="<?php echo $p->tgl_laporan; ?>" data-infrastruktur="<?php echo $p->infrastruktur; ?>" data-koordinatlokasi="<?php echo $p->latitude, $p->longitude; ?>" data-namaruasjalan="<?php echo $p->nama_ruasjalan; ?>" data-namakabkota="<?php echo ucwords(strtolower($kab->nama)); ?>" data-namadistrik="<?php echo $kec->nama; ?>" data-isilaporan="<?php echo $p->isi_laporan; ?>" data-gambarktp="<?php echo $gbktp->nama_file; ?>" data-dokumentasi1="<?php echo $gbdok1->nama_file; ?>" data-dokumentasi2="<?php echo $gbdok2->nama_file; ?>" data-dokumentasi3="<?php echo $gbdok3->nama_file; ?>" data-dokumen_tambahan="<?php echo $dokadd->nama_file; ?>">
                                                        <i class="fa fa-eye"></i>
                                                    </a>
                                                    <?php if ($p->status == 'Diterima') { ?>
                                                        <a class="btn btn-danger btn-sm btnTolak" href="" data-idlaporan="<?php echo $p->id; ?>"><i class="fa fa-close"></i></a>
                                                    <?php } elseif ($p->status == 'Ditolak') { ?>
                                                        <a class="btn btn-success btn-sm btnTerima" href="" data-idlaporan="<?php echo $p->id; ?>"><i class="fa fa-check"></i></a>
                                                    <?php } else { ?>
                                                        <a class="btn btn-success btn-sm btnTerima mb-1" href="" title="Terima" data-idlaporan="<?php echo $p->id; ?>"><i class="fa fa-check"></i></a>
                                                        <a class="btn btn-danger btn-sm btnTolak mb-1" href="" title="Tolak" data-idlaporan="<?php echo $p->id; ?>"><i class="fa fa-close"></i></a>
                                                    <?php } ?>


                                                </td>
                                                <td>
                                                    <?php
                                                    if ($p->status == 'Diterima') {
                                                        echo '<span class="badge badge-success">Diterima</span>';
                                                    } elseif ($p->status == 'Ditolak') {
                                                        echo '<span class="badge badge-danger">Ditolak</span>';
                                                    } else {
                                                        echo '<span class="badge badge-warning">Menunggu</span>';
                                                    }
                                                    ?>

                                                </td>
                                                <td>
                                                    <?php echo $p->tgl_laporan; ?>

                                                </td>
                                                <td>
                                                    <?php echo $p->kodelaporan; ?>
                                                </td>
                                                <td>
                                                    <?php echo ucwords(strtolower($kab->nama)); ?>
                                                </td>
                                                <td>
                                                    <?php echo word_limiter($p->isi_laporan, 55); ?>
                                                </td>
                                                <td>
                                                    <?php echo $p->nama_ruasjalan; ?>
                                                </td>

                                            </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>


    <div class="modal fade" id="detailLap" tabindex="-1" role="dialog" aria-labelledby="detailLapLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title" id="detailLapLabel"><i class="bi bi-file-earmark-fill"></i>Detail Laporan
                        <span id="kodelaporan"></span>
                    </h3>
                </div>
                <div class="modal-body">

                    <div class="default-tab">
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#home">Data Pelapor</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#profile">Detail Laporan</a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane fade active show" id="home" role="tabpanel">
                                <div class="row">
                                    <div id="identity" class="col-sm-7 m-0">
                                        <div class="card">
                                            <div class="card-body">
                                                <table id="identitasPelapor" class="table table-borderless">
                                                    <tbody>
                                                        <tr>
                                                            <th>NIK</th>
                                                            <td>: </td>
                                                            <td><span id="nik"></span></td>
                                                        </tr>
                                                        <tr>
                                                            <th>Nama Pelapor</th>
                                                            <td>: </td>
                                                            <td><span id="nama_pelapor"></span></td>
                                                        </tr>
                                                        <tr>
                                                            <th>Alamat Pelapor</th>
                                                            <td>: </td>
                                                            <td><span id="alamat_pelapor"></span></td>
                                                        </tr>
                                                        <tr>
                                                            <th>Email</th>
                                                            <td>: </td>
                                                            <td><span id="email"></span></td>
                                                        </tr>
                                                        <tr>
                                                            <th>No. WhatsApp</th>
                                                            <td>: </td>
                                                            <td><span id="nohp"></span></td>
                                                        </tr>

                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>

                                    <div id="foto-ktp" class="col-sm-5 m-0">
                                        <div class="card">
                                            <div class="card-body">
                                                <img class="w-100" id="gbktp">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="profile">
                                <div class="row">
                                    <div id="report" class="col-sm-7">
                                        <div class="card">
                                            <div class="card-body">
                                                <table id="DetailLaporan" class="table table-borderless">
                                                    <tbody>
                                                        <tr>
                                                            <th>Tanggal Laporan</th>
                                                            <td>: </td>
                                                            <td><span id="tgl_laporan"></span></td>
                                                        </tr>
                                                        <tr>
                                                            <th>Jenis Infrastruktur</th>
                                                            <td>: </td>
                                                            <td><span id="infrastruktur"></span></td>
                                                        </tr>
                                                        <tr>
                                                            <th>Lokasi</th>
                                                            <td>: </td>
                                                            <td><a class="btn btn-sm btn-primary" href="<?php echo ('https://www.google.com/maps/place/') . $p->latitude, ',' . $p->longitude; ?>" target="_blank"><i class="fa fa-map-marker"></i> Klik di sini</a></td>
                                                        </tr>
                                                        <tr>
                                                            <th>Nama Ruas Jalan</th>
                                                            <td>: </td>
                                                            <td><span id="nama_ruasjalan"></span></td>
                                                        </tr>
                                                        <tr>
                                                            <th>Nama Kab./Kota</th>
                                                            <td>: </td>
                                                            <td><span id="nama_kabkota"></span></td>
                                                        </tr>
                                                        <tr>
                                                            <th>Nama Kec./Distrik</th>
                                                            <td>: </td>
                                                            <td><span id="nama_distrik"></span></td>
                                                        </tr>

                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="gbrDok col-sm-5">
                                        <div class="card">
                                            <div class="card-body">
                                                <div id="dokIndikator" class="carousel slide" data-ride="carousel">
                                                    <ol class="carousel-indicators">
                                                        <li data-target="#dokIndikator" data-slide-to="0" class="active"></li>
                                                        <li data-target="#dokIndikator" data-slide-to="1"></li>
                                                        <li data-target="#dokIndikator" data-slide-to="2"></li>
                                                    </ol>
                                                    <div class="carousel-inner">
                                                        <div class="carousel-item active">
                                                            <img class="w-100" id="gbdok1">
                                                        </div>
                                                        <div class="carousel-item">
                                                            <img class="w-100" id="gbdok2">
                                                        </div>
                                                        <div class="carousel-item">
                                                            <img class="w-100" id="gbdok3">
                                                        </div>
                                                    </div>
                                                    <a class="carousel-control-prev" href="#dokIndikator" role="button" data-slide="prev">
                                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                        <span class="sr-only">Previous</span>
                                                    </a>
                                                    <a class="carousel-control-next" href="#dokIndikator" role="button" data-slide="next">
                                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                        <span class="sr-only">Next</span>
                                                    </a>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div id="IsiLaporan" class="col-sm-12">
                                        <h4>Isi Laporan:</h4>
                                        <p id="isilaporan">
                                        <p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-info btn-sm" data-dismiss="modal">Tutup</button>
                </div>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            $(document).on('click', '#DetailLap', function() {
                var kodelaporan = $(this).data('kodelaporan');
                var nik = $(this).data('nik');
                var namapelapor = $(this).data('namapelapor');
                var alamatpelapor = $(this).data('alamatpelapor');
                var email = $(this).data('email');
                var nohp = $(this).data('nohp');
                var tgllaporan = $(this).data('tgllaporan');
                var infrastruktur = $(this).data('infrastruktur');
                var koordinatlokasi = $(this).data('koordinatlokasi');
                var namaruasjalan = $(this).data('namaruasjalan');
                var namakabkota = $(this).data('namakabkota');
                var namadistrik = $(this).data('namadistrik');
                var isilaporan = $(this).data('isilaporan');
                // var ktp = $(this).data('gambarktp');

                $('#kodelaporan').text(kodelaporan);
                $('#nik').text(nik);
                $('#nama_pelapor').text(namapelapor);
                $('#alamat_pelapor').text(alamatpelapor);
                $('#email').text(email);
                $('#nohp').text(nohp);
                $('#tgl_laporan').text(tgllaporan);
                $('#infrastruktur').text(infrastruktur);
                $('#koordinatlokasi').text(koordinatlokasi);
                $('#nama_ruasjalan').text(namaruasjalan);
                $('#nama_kabkota').text(namakabkota);
                $('#nama_distrik').text(namadistrik);
                $('#isilaporan').text(isilaporan);
                // $('#gbktp').attr('src'.ktp);

                var ktp = $(this).data('gambarktp');
                const img = document.getElementById("gbktp");
                img.src = "<?php echo base_url('upload/ktp/'); ?>" + ktp;


                var dokumentasi1 = $(this).data('dokumentasi1');
                var dokumentasi2 = $(this).data('dokumentasi2');
                var dokumentasi3 = $(this).data('dokumentasi3');
                const img1 = document.getElementById("gbdok1");
                const img2 = document.getElementById("gbdok2");
                const img3 = document.getElementById("gbdok3");
                img1.src = "<?php echo base_url('upload/dokumentasi/'); ?>" + dokumentasi1;
                img2.src = "<?php echo base_url('upload/dokumentasi/'); ?>" + dokumentasi2;
                img3.src = "<?php echo base_url('upload/dokumentasi/'); ?>" + dokumentasi3;


                var dokumen_tambahan = $(this).data('dokumen_tambahan');
                const imgdok = document.getElementById("dokumentambahan");
                imgdok.src = "<?php echo base_url('upload/dokumen-tambahan/'); ?>" + dokumen_tambahan;

            })
        })
    </script>

    <script>
        $(document).ready(function() {
            $('#menupengaduan').last().addClass("active");

            //action button terima laporan/pengaduan
            $('.btnTerima').click(function() {
                //deklarasi variabel untuk mengangkap id laporand dari anchor/button terima dgn atribut data-idlaporan
                var idlaporan = $(this).attr('data-idlaporan');
                // ajax untuk proses ubah status
                $.ajax({
                    type: "POST",
                    url: "<?php echo base_url(); ?>admin/pengaduan/terimalaporan",
                    data: {
                        idlaporan: idlaporan
                    },
                    success: function(data) {
                        var objData = jQuery.parseJSON(data);
                        console.log(objData.status);
                    }
                });
            });

            //action button tolak laporan/pengaduan
            $('.btnTolak').click(function() {
                //deklarasi variabel untuk mengangkap id laporand dari anchor/button terima dgn atribut data-idlaporan
                var idlaporan = $(this).attr('data-idlaporan');
                // ajax untuk proses ubah status
                $.ajax({
                    type: "POST",
                    url: "<?php echo base_url(); ?>admin/pengaduan/tolaklaporan",
                    data: {
                        idlaporan: idlaporan
                    },
                    success: function(data) {
                        var objData = jQuery.parseJSON(data);
                        console.log(objData.status);
                    }
                });
            });
        });
    </script>