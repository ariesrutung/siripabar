<?php echo $map['js']; ?>

<link href='https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.4.0/dropzone.css' type='text/css' rel='stylesheet'>
<script src='https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.4.0/dropzone.js' type='text/javascript'></script>
<link href="<?php echo base_url('public/company/css/lapor.css'); ?>" rel="stylesheet">
<!-- Contact Start -->
<div class="contact wow fadeInUp">
  <div class="container">
    <div class="section-header text-center">
      <p>FORMULIR</p>
      <h2>LAPORAN PENGADUAN INFRASTRUKTUR IRIGASI</h2>
    </div>
  </div>
</div>
<!-- Contact End -->

<!-- Contact Us Section -->
<section id="laporanpengaduan" class="Material-contact-section section-padding section-dark">
  <div class="container">
    <div class="row mb-3 header-formlap mt-3">
      <div class="left-text col-lg-12 col-md-12 col-sm-12 col-xs-12 mb-2">
        <h4>IDENTITAS PELAPOR</h4>
      </div>
    </div>

    <form class="shake" role="form" id="formulirLaporan" method="POST" enctype="multipart/form-data">
      <div class="row">
        <div class="col-lg-6">
          <div id="buktiLaporan" class="row">
            <div class="col-md-12">
              <div class="form-group mt-0 mb-0">
                <label class="hitam mb-0">Kartu Identitas Pelapor</label>
              </div>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
              <div class="form-group mt-0">
                <button type="button" class="btn btn-primary d-flex justify-content-center" data-toggle="modal" data-target="#modalKTP">
                  <i class="bi bi-info-square-fill"></i>
                </button>
                <div id="ktp" class="dropzone ktp">
                  <div class="dz-message">Klik atau drop foto KTP ke sini</div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
          <div class="col-md-12 col-sm-12 col-xs-12 wow animated fadeInRight px-0" data-wow-delay=".2s">
            <div class="form-group label-floating">
              <label class="hitam" for="nik">NIK</label>
              <input class="form-control" id="nik" type="text" name="nik" data-error="Silakan ketik NIK Anda" required>
              <div class="help-block with-errors"></div>
            </div>
          </div>

          <div class="col-md-12 col-sm-12 col-xs-12 wow animated fadeInRight px-0">
            <div class="form-group label-floating">
              <label class="hitam" for="nama_pelapor">Nama Lengkap</label>
              <input class="form-control" id="nama_pelapor" type="text" name="nama_pelapor" data-error="Silakan isi nama Anda" required>
              <div class="help-block with-errors"></div>
            </div>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-6 col-sm-12 wow animated fadeInRight">
          <div class="form-group label-floating">
            <label class="hitam" for="no_hp">Nomor WhatsApp</label>
            <input class="form-control" id="no_hp" type="text" name="no_hp" data-error="Silakan isi nomor WA Anda" required>
            <div class="help-block with-errors"></div>
          </div>
        </div>

        <div class="col-md-6 col-sm-12 wow animated fadeInRight">
          <div class="form-group label-floating">
            <label class="hitam" for="email">Email</label>
            <input class="form-control" id="email" type="email" name="email" data-error="Silakan isi Email Anda" required>
            <div class="help-block with-errors"></div>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-12">
          <div class="row">
            <div class="col-md-12">
              <div class="form-group">
                <label class="hitam" for="alamat_pelapor">Alamat Tinggal</label>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group label-floating mt-0">
                <textarea class="form-controla w-100 px-2" rows="6" id="alamat_pelapor" type="text" name="alamat_pelapor" placeholder="Format nama jalan: Nama jalan, No. Rumah, RT/RW, dan nama kompleks."></textarea>
              </div>
            </div>

            <div class="col-md-6">
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group label-floating mt-0">
                    <select class="custom-select" name="kab_pelapor" id="kab_pelapor">
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

                <div class="col-md-12">
                  <div class="form-group label-floating mt-2">
                    <select class="custom-select" name="kec_pelapor" id="kec_pelapor">
                      <option value="">Pilih Kecamatan/Distrik</option>
                    </select>
                    <div class="help-block with-errors"></div>
                  </div>
                </div>

                <div class="col-md-12">
                  <div class="form-group label-floating mt-2">
                    <select class="custom-select" name="des_pelapor" id="des_pelapor">
                      <option value="">Pilih Kelurahan/Desa</option>
                    </select>
                    <div class="help-block with-errors"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="text-left col-lg-12 col-md-12 col-sm-12 col-xs-12 mt-4">
              <h4 class="mb-2">DETAIL LAPORAN PENGADUAN</h4>
            </div>

            <div class="col-md-12">
              <div class="form-group mt-0">
                <div class="alert alert-info" role="alert">
                  <strong>Petunjuk!</strong> Geser pin maps di bawah ini untuk mengambil koordinat lokasi secara otomatis.
                </div>
              </div>
            </div>
            <div class="col-md-12">
              <div class="form-group mt-0">
                <?php echo $map['html']; ?>
              </div>
            </div>
            <div class="col-md-6 wow animated fadeInRight">
              <div class="form-group">
                <label for="latitude" class="hitam">Latitude</label>
                <input class="form-control" id="latitude" type="text" name="latitude" data-error="Silakan isi Latitude lokasi Anda" required>
                <div class="help-block with-errors"></div>
              </div>
            </div>

            <div class="col-md-6 wow animated fadeInRight">
              <div class="form-group">
                <label for="longitude" class="hitam">Longitude</label>
                <input class="form-control" id="longitude" name="longitude" data-error="Silakan isi longitude lokasi Anda" required>
                <div class="help-block with-errors"></div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <select class="custom-select" name="lokasi_kabkota" id="lokasi_kabkota">
                  <option value=""><i class="fas fa-chevron-down"></i>- Pilih Kabupaten/Kota -</option>
                  <?php
                  foreach ($wil_kab as $kab) {
                    echo '<option value="' . $kab->kode . '">' . $kab->nama . '</option>';
                  }
                  ?>
                </select>
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-group">
                <select class="custom-select" name="lokasi_distrik" id="lokasi_distrik">
                  <option value="">- Pilih Kecamatan/Distrik -</option>
                </select>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-md-12">
              <div class="form-group label-floating">
                <label for="nama_ruasjalan" class="hitam">Nama Ruas Jalan</label>
                <input class="form-control" rows="5" id="nama_ruasjalan" name="nama_ruasjalan" data-error="Silakan isi nama_ruasjalan lokasi Anda" required>
                <div class="help-block with-errors"></div>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-md-12">
              <div class="form-group label-floating">
                <label for="isi_laporan" class="hitam">Isi Laporan</label>
                <textarea class="form-control" rows="3" id="isi_laporan" name="isi_laporan"></textarea>
              </div>
            </div>
          </div>

          <div id="buktiLaporan" class="row mt-5">
            <div class="col-md-12">
              <div class="form-group mt-0 mb-0">
                <label class="hitam">Bukti Laporan</label>
                <div class="alert alert-info mb-0" role="alert">
                  Silakan unggah bukti laporan Anda. Klik ikon tanda seru untuk melihat bantuan.
                </div><br>
              </div>
            </div>

            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
              <div class="form-group mt-0">
                <button type="button" class="btn btn-primary d-flex justify-content-center" data-toggle="modal" data-target="#modalBantuan">
                  <i class="bi bi-info-square-fill"></i>
                </button>
                <div id="dokumentasi" class="dropzone dokumentasi dokumentasi1">
                  <div class="dz-message">Klik atau drop foto ke sini</div>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
              <div class="form-group mt-0">
                <button type="button" class="btn btn-primary d-flex justify-content-center" data-toggle="modal" data-target="#modalBantuan1">
                  <i class="bi bi-info-square-fill"></i>
                </button>
                <div id="dokumentasi" class="dropzone dokumentasi dokumentasi2">
                  <div class="dz-message">Klik atau drop foto ke sini</div>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
              <div class="form-group">
                <button type="button" class="btn btn-primary d-flex justify-content-center" data-toggle="modal" data-target="#modalSelfi">
                  <i class="bi bi-info-square-fill"></i>
                </button>
                <div id="dokumentasi" class="dropzone dokumentasi dokumentasi3">
                  <div class="dz-message">Klik atau drop foto ke sini</div>
                </div>
              </div>
            </div>
          </div>

          <div id="buktiLaporan" class="row mt-3">
            <div class="col-md-12">
              <div class="form-group mt-0 mb-0">
                <label class="hitam">Lampirkan Dokumen Pendukung (Jika ada)</label>
              </div>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
              <div class="form-group mt-0">
                <button type="button" class="btn btn-primary d-flex justify-content-center" data-toggle="modal" data-target="#modalDoc">
                  <i class="bi bi-info-square-fill"></i>
                </button>
                <div id="dokumen_tambahan" class="dropzone dokumen_tambahan">
                  <div class="dz-message">Klik atau drop dokumen ke sini</div>
                </div>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="captchalaporan">
              <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 p-0">
                <div class="form-group">
                  <center><?php echo $recaptcha; ?></center>
                </div>
              </div>
            </div>
          </div>

          <div class="row">
            <!-- Ini untuk ditangkap oleh ajax di bagian script -->
            <input type="hidden" name="kodelaporan" id="kodelaporan" value="<?php echo $kodelaporan; ?>">
          </div>

          <div class="row">
            <div class="col-md-12">
              <div class="form-group">
                <button type="submit" name="submit" id="btnSubmit" class="btn btn-common disabled kirimLaporan">KIRIM LAPORAN</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </form>
  </div>
</section>

<div class="modal fade" id="modalBantuan" tabindex="-1" role="dialog" aria-labelledby="modalBantuanLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalBantuanLabel">Petunjuk!</h5>
        </button>
      </div>
      <div class="modal-body">
        <div class="alert alert-info" role="alert">
          Fokus foto ke bagian irigasi yang rusak seperti gambar di bawah ini.
        </div>

        <img class="d-block w-100" src="<?php echo base_url('public/company/img/formlapor/irigasi_rusak.jpg') ?>">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="modalBantuan1" tabindex="-1" role="dialog" aria-labelledby="modalBantuan1Label" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalBantuan1Label">Petunjuk!</h5>
        <!-- <span aria-hidden="true">&times;</span> -->
        </button>
      </div>
      <div class="modal-body">
        <div class="alert alert-info" role="alert">
          Foto seluruh badan irigasi seperti gambar di bawah ini.
        </div>
        <img class="d-block w-100" src="<?php echo base_url('public/company/img/formlapor/gambar_kedua.jpeg') ?>">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="modalSelfi" tabindex="-1" role="dialog" aria-labelledby="modalSelfiLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalSelfiLabel">Petunjuk!</h5>
        <!-- <span aria-hidden="true">&times;</span> -->
        </button>
      </div>
      <div class="modal-body">
        <div class="alert alert-info" role="alert">
          Buat pose selfi dengan irigasi rusak seperti gambar di bawah ini.
        </div>
        <img class="d-block w-100" src="<?php echo base_url('public/company/img/formlapor/selfi_irigasi_rusak.jpg') ?>">

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="modalDoc" tabindex="-1" role="dialog" aria-labelledby="modalDocLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalDocLabel">Petunjuk!</h5>
        <!-- <span aria-hidden="true">&times;</span> -->
        </button>
      </div>
      <div class="modal-body">
        <div class="alert alert-info" role="alert">
          Lampirkan dokumen pendukung dapat berupa file .pdf!
        </div>
        <img class="d-block w-100" src="<?php echo base_url('public/company/img/formlapor/pdf.png') ?>">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="modalKTP" tabindex="-1" role="dialog" aria-labelledby="modalKTPLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalKTPLabel">Petunjuk!</h5>
        <!-- <span aria-hidden="true">&times;</span> -->
        </button>
      </div>
      <div class="modal-body">
        <div class="alert alert-info" role="alert">
          Uunggah foto identitas seperti KTP/SIM/Paspor Anda. Identitas dapat berupa file .jpg, .jpeg, .doc, .docx, dan/atau .pdf.
        </div>
        <img src="<?php echo base_url('public/company/img/formlapor/ktp.jpg') ?>" alt="">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script>
  function setMapToForm(latitude, longitude) {
    $('input[name="latitude"]').val(latitude);
    $('input[name="longitude"]').val(longitude);
  }

  Dropzone.autoDiscover = false;
  $(document).ready(function() {


    $("#lokasi_kabkota").change(function() {
      var url = "<?php echo site_url('lapor/add_ajax_kec'); ?>/" + $(this).val();
      $('#lokasi_distrik').load(url);
      return false;
    });
    $("#kab_pelapor").change(function() {
      var url = "<?php echo site_url('lapor/add_ajax_kec'); ?>/" + $(this).val();
      $('#kec_pelapor').load(url);
      return false;
    });
    $("#kec_pelapor").change(function() {
      var url = "<?php echo site_url('lapor/add_ajax_des'); ?>/" + $(this).val();
      $('#des_pelapor').load(url);
      return false;
    });


    var unggah_ktp = new Dropzone(".ktp", {
      autoProcessQueue: true,
      url: "<?php echo site_url('lapor/uploadktp') ?>",
      maxFilesize: 50,
      maxFiles: 1,
      method: "post",
      acceptedFiles: "image/*",
      paramName: "filektp",
      dictInvalidFileType: "Type file ini tidak dizinkan",
      addRemoveLinks: true,
    });

    unggah_ktp.on("sending", function(a, b, c) {
      a.token = Math.random();
      c.append("token_foto", a.token); //Menmpersiapkan token untuk masing masing foto
      c.append("kodelaporan", $('#kodelaporan').val()); //id diambil dari bagian input hidden di form di atas, sebelum btn kirim laporan
    });

    var dokumentasi1_upload = new Dropzone(".dokumentasi1", {
      autoProcessQueue: true,
      url: "<?php echo site_url('lapor/uploaddokumentasi1') ?>",
      maxFilesize: 50,
      maxFiles: 1,
      method: "post",
      acceptedFiles: "image/*",
      paramName: "filedokumentasi1",
      dictInvalidFileType: "Type file ini tidak dizinkan",
      addRemoveLinks: true,
    });

    dokumentasi1_upload.on("sending", function(a, b, c) {
      a.token = Math.random();
      c.append("token_dokumentasi", a.token); //Menmpersiapkan token untuk masing masing foto
      c.append("kodelaporan", $('#kodelaporan').val()); //id diambil dari bagian input hidden di form di atas, sebelum btn kirim laporan
      c.append("kategori", "dokumentasi1");
    });
    var dokumentasi2_upload = new Dropzone(".dokumentasi2", {
      autoProcessQueue: true,
      url: "<?php echo site_url('lapor/uploaddokumentasi2') ?>",
      maxFilesize: 50,
      maxFiles: 1,
      method: "post",
      acceptedFiles: "image/*",
      paramName: "filedokumentasi2",
      dictInvalidFileType: "Type file ini tidak dizinkan",
      addRemoveLinks: true,
    });

    dokumentasi2_upload.on("sending", function(a, b, c) {
      a.token = Math.random();
      c.append("token_dokumentasi", a.token); //Menmpersiapkan token untuk masing masing foto
      c.append("kodelaporan", $('#kodelaporan').val()); //id diambil dari bagian input hidden di form di atas, sebelum btn kirim laporan
      c.append("kategori", "dokumentasi2");
    });
    var dokumentasi3_upload = new Dropzone(".dokumentasi3", {
      autoProcessQueue: true,
      url: "<?php echo site_url('lapor/uploaddokumentasi3') ?>",
      maxFilesize: 50,
      maxFiles: 1,
      method: "post",
      acceptedFiles: "image/*",
      paramName: "filedokumentasi3",
      dictInvalidFileType: "Type file ini tidak dizinkan",
      addRemoveLinks: true,
    });

    dokumentasi3_upload.on("sending", function(a, b, c) {
      a.token = Math.random();
      c.append("token_dokumentasi", a.token); //Menmpersiapkan token untuk masing masing foto
      c.append("kodelaporan", $('#kodelaporan').val()); //id diambil dari bagian input hidden di form di atas, sebelum btn kirim laporan
      c.append("kategori", "dokumentasi3");
    });

    //untuk upload lampiran dokumen pendukung laporan pengaduan, berupa dokumen seperti pdf/word
    var dokumen_upload = new Dropzone(".dokumen_tambahan", {
      autoProcessQueue: true,
      url: "<?php echo site_url('lapor/dokumen_tambahan') ?>",
      maxFilesize: 50,
      maxFiles: 1,
      method: "post",
      acceptedFiles: "application/pdf",
      paramName: "dokumen_tambahan",
      dictInvalidFileType: "Type file ini tidak dizinkan",
      addRemoveLinks: true,
    });

    dokumen_upload.on("sending", function(a, b, c) {
      a.token = Math.random();
      c.append("token_dokumentasi", a.token); //Menmpersiapkan token untuk masing masing foto
      c.append("kodelaporan", $('#kodelaporan').val()); //id diambil dari bagian input hidden di form di atas, sebelum btn kirim laporan
      c.append("kategori", "dokumen_tambahan");
    });

  });
</script>


<script>
  $(document).ready(function() {
    $('#menulapor').last().addClass("active");
  });
</script>

<script>
  // Fungsi untuk memeriksa apakah semua input telah diisi
  function isFormValid() {
    var isValid = true;

    // Loop melalui semua input dan textarea di dalam formulir
    $('#formulirLaporan input, #formulirLaporan textarea').each(function() {
      if ($(this).prop('required') && $(this).val() === '') {
        isValid = false;
        return false; // Keluar dari loop jika ada input yang kosong
      }
    });

    return isValid;
  }

  // Menerapkan fungsi untuk memeriksa validitas formulir saat input berubah
  $('#formulirLaporan input, #formulirLaporan textarea').on('input', function() {
    // Memeriksa apakah formulir valid
    if (isFormValid()) {
      // Mengaktifkan tombol "KIRIM LAPORAN" jika formulir valid
      $('#btnSubmit').removeClass('disabled');
    } else {
      // Menonaktifkan tombol "KIRIM LAPORAN" jika formulir tidak valid
      $('#btnSubmit').addClass('disabled');
    }
  });

  // Menghandle pengiriman formulir
  $('#formulirLaporan').submit(function(e) {
    e.preventDefault();
    if (isFormValid()) {
      var kodelaporan = $("input[name='kodelaporan']").val();
      var nama_pelapor = $("input[name='nama_pelapor']").val();
      var nik = $("input[name='nik']").val();
      var alamat_pelapor = $("textarea[name='alamat_pelapor']").val();
      var kab_pelapor = $("select[name='kab_pelapor']").val();
      var kec_pelapor = $("select[name='kec_pelapor']").val();
      var des_pelapor = $("select[name='des_pelapor']").val();
      var no_hp = $("input[name='no_hp']").val();
      var email = $("input[name='email']").val();
      var isi_laporan = $("textarea[name='isi_laporan']").val();
      var infrastruktur = $("input[name='infrastruktur']").val();
      var nama_ruasjalan = $("input[name='nama_ruasjalan']").val();
      var lokasi_kabkota = $("select[name='lokasi_kabkota']").val();
      var lokasi_distrik = $("select[name='lokasi_distrik']").val();
      var latitude = $("input[name='latitude']").val();
      var longitude = $("input[name='longitude']").val();

      $.ajax({
        url: "<?php echo site_url('lapor/savelaporan') ?>",
        type: "POST",
        data: {
          kodelaporan: kodelaporan,
          nama_pelapor: nama_pelapor,
          nik: nik,
          alamat_pelapor: alamat_pelapor,
          kab_pelapor: kab_pelapor,
          kec_pelapor: kec_pelapor,
          des_pelapor: des_pelapor,
          no_hp: no_hp,
          email: email,
          isi_laporan: isi_laporan,
          infrastruktur: infrastruktur,
          nama_ruasjalan: nama_ruasjalan,
          lokasi_kabkota: lokasi_kabkota,
          lokasi_distrik: lokasi_distrik,
          latitude: latitude,
          longitude: longitude,
        },
        error: function() {
          // Menampilkan SweetAlert ketika terjadi kesalahan
          Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'Terjadi kesalahan saat mengirim data!',
          });
        },
        success: function(data) {
          // Menggunakan SweetAlert untuk memberi tahu bahwa laporan berhasil dikirim
          Swal.fire({
            icon: 'success',
            title: 'Success',
            text: 'Laporan Anda Berhasil Dikirim',
          }).then((result) => {
            if (result.isConfirmed || result.isDismissed) {
              location.reload();
            }
          });
        }
      });

    } else {
      // Tampilkan pesan atau tindakan lain jika formulir tidak valid
      alert('Silakan isi semua kolom formulir.');
    }
  });
</script>