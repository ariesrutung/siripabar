<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $title; ?></title>
    <!-- ================= Favicon ================== -->
    <!-- Standard -->
    <link rel="shortcut icon" href="http://placehold.it/64.png/000/fff">
    <!-- Retina iPad Touch Icon-->
    <link rel="apple-touch-icon" sizes="144x144" href="http://placehold.it/144.png/000/fff">
    <!-- Retina iPhone Touch Icon-->
    <link rel="apple-touch-icon" sizes="114x114" href="http://placehold.it/114.png/000/fff">
    <!-- Standard iPad Touch Icon-->
    <link rel="apple-touch-icon" sizes="72x72" href="http://placehold.it/72.png/000/fff">
    <!-- Standard iPhone Touch Icon-->
    <link rel="apple-touch-icon" sizes="57x57" href="http://placehold.it/57.png/000/fff">
    <!-- Styles -->
    <link href="<?php echo base_url(); ?>public/focus-theme/assets/css/lib/calendar2/semantic.ui.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>public/focus-theme/assets/css/lib/calendar2/pignose.calendar.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>public/focus-theme/assets/css/lib/chartist/chartist.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>public/focus-theme/assets/css/lib/font-awesome.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>public/focus-theme/assets/css/lib/themify-icons.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>public/focus-theme/assets/css/lib/owl.carousel.min.css" rel="stylesheet" />
    <link href="<?php echo base_url(); ?>public/focus-theme/assets/css/lib/owl.theme.default.min.css" rel="stylesheet" />
    <link href="<?php echo base_url(); ?>public/focus-theme/assets/css/lib/weather-icons.css" rel="stylesheet" />
    <link href="<?php echo base_url(); ?>public/focus-theme/assets/css/lib/menubar/sidebar.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>public/focus-theme/assets/css/lib/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>public/focus-theme/assets/css/lib/helper.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>public/focus-theme/assets/css/style.css" rel="stylesheet">
</head>

<body>

    <?php
    if (isset($menu) && $menu)
        $this->load->view($menu);
    ?>
    <div class="content-wrap">
        <div class="main">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-title pr">
                                <h4>Data Pengaduan</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table student-data-table m-t-20">
                                        <thead>
                                            <tr>
                                                <th>Aksi</th>
                                                <th>Status</th>
                                                <th>Tanggal Laporan</th>
                                                <th>Kode Laporan</th>
                                                <th>Kab/Kota</th>
                                                <th>Isi Laporan</th>
                                                <th>Lokasi</th>
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

                <div class="row">
                    <div class="col-lg-12">
                        <div class="footer">
                            <p>2018 © Admin Board. - <a href="#">example.com</a></p>
                        </div>
                    </div>
                </div>
                </section>
            </div>
        </div>
    </div>
    <div id="search">
        <button type="button" class="close">×</button>
        <form>
            <input type="search" value="" placeholder="type keyword(s) here" />
            <button type="submit" class="btn btn-primary">Search</button>
        </form>
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
                                                            <th>Koordinat Lokasi</th>
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

    <!-- jquery vendor -->
    <script src="<?php echo base_url(); ?>public/focus-theme/assets/js/lib/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>public/focus-theme/assets/js/lib/jquery.nanoscroller.min.js"></script>
    <!-- nano scroller -->
    <script src="<?php echo base_url(); ?>public/focus-theme/assets/js/lib/menubar/sidebar.js"></script>
    <script src="<?php echo base_url(); ?>public/focus-theme/assets/js/lib/preloader/pace.min.js"></script>
    <!-- sidebar -->

    <!-- bootstrap -->

    <script src="<?php echo base_url(); ?>public/focus-theme/assets/js/lib/calendar-2/moment.latest.min.js"></script>
    <!-- scripit init-->
    <script src="<?php echo base_url(); ?>public/focus-theme/assets/js/lib/calendar-2/semantic.ui.min.js"></script>
    <!-- scripit init-->
    <script src="<?php echo base_url(); ?>public/focus-theme/assets/js/lib/calendar-2/prism.min.js"></script>
    <!-- scripit init-->
    <script src="<?php echo base_url(); ?>public/focus-theme/assets/js/lib/calendar-2/pignose.calendar.min.js"></script>
    <!-- scripit init-->
    <script src="<?php echo base_url(); ?>public/focus-theme/assets/js/lib/calendar-2/pignose.init.js"></script>
    <!-- scripit init-->


    <script src="<?php echo base_url(); ?>public/focus-theme/assets/js/lib/weather/jquery.simpleWeather.min.js"></script>
    <script src="<?php echo base_url(); ?>public/focus-theme/assets/js/lib/weather/weather-init.js"></script>
    <script src="<?php echo base_url(); ?>public/focus-theme/assets/js/lib/circle-progress/circle-progress.min.js"></script>
    <script src="<?php echo base_url(); ?>public/focus-theme/assets/js/lib/circle-progress/circle-progress-init.js"></script>
    <script src="<?php echo base_url(); ?>public/focus-theme/assets/js/lib/chartist/chartist.min.js"></script>
    <script src="<?php echo base_url(); ?>public/focus-theme/assets/js/lib/chartist/chartist-init.js"></script>
    <script src="<?php echo base_url(); ?>public/focus-theme/assets/js/lib/sparklinechart/jquery.sparkline.min.js"></script>
    <script src="<?php echo base_url(); ?>public/focus-theme/assets/js/lib/sparklinechart/sparkline.init.js"></script>
    <script src="<?php echo base_url(); ?>public/focus-theme/assets/js/lib/owl-carousel/owl.carousel.min.js"></script>
    <script src="<?php echo base_url(); ?>public/focus-theme/assets/js/lib/owl-carousel/owl.carousel-init.js"></script>
    <script src="<?php echo base_url(); ?>public/focus-theme/assets/js/scripts.js"></script>


    <script src="<?php echo base_url(); ?>public/focus-theme/vendor/global/global.min.js"></script>
    <script src="<?php echo base_url(); ?>public/focus-theme/js/quixnav-init.js"></script>
    <script src="<?php echo base_url(); ?>public/focus-theme/js/custom.min.js"></script>

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
    <!-- scripit init-->
</body>

</html>