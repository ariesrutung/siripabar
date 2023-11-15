<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.2/dropzone.min.css">
<style>
    div.gallery {
        border: 1px solid #ccc;
    }

    div.gallery:hover {
        border: 1px solid #777;
    }

    div.gallery img {
        width: 100%;
        height: auto;
    }

    div.desc {
        padding: 15px;
        text-align: center;
    }

    * {
        box-sizing: border-box;
    }

    .responsive {
        padding: 0;
        float: left;
        width: 19.99999%;
    }

    @media only screen and (max-width: 700px) {
        .responsive {
            width: 19.99999%;
            margin: 6px 0;
        }
    }

    @media only screen and (max-width: 500px) {
        .responsive {
            width: 100%;
        }
    }

    div.gallery img {
        width: 100%;
        height: 100px;
        object-fit: cover;
    }

    label {
        color: #000;
    }

    .info {
        margin-top: 5px;
        font-size: 12px;
        color: #0c5460 !important;
    }

    .alert-info {
        color: #0c5460;
        background-color: #d1ecf1;
        border-color: #bee5eb;
    }
</style>
<div class="content-body">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="row judulTombol d-flex align-items-center justify-content-between">
                        <div class="card-header">
                            <h4>Daftar Slider</h4>
                        </div>
                        <a data-toggle="modal" data-target=".modalTambahSlider" data-backdrop="static" class="btn btn-primary text-white">Tambah Galeri</a>
                    </div>
                    <div id="kategori-container">
                        <div class="card-body">
                            <div class="col-lg-4 px-0">
                                <div class="form-group">
                                    <?php
                                    $selected_kategori = $this->input->get('kategori_dropdown');
                                    ?>
                                    <select class="form-control" id="kategoriDropdown" name="kategori_dropdown">
                                        <option value="">Semua</option>
                                        <?php foreach ($kategori_folders as $kategori) : ?>
                                            <option value="<?= $kategori->nama_folder ?>" <?= ($selected_kategori == $kategori->nama_folder) ? 'selected' : '' ?>>
                                                <?= strtoupper($kategori->nama_folder) ?>
                                            </option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>

                            <div class="alert alert-info" role="alert">
                                Untuk menambahkan gambar baru ke dalam galeri yang sudah ada, ketikan nama galeri tersebut pada inputan Nama Galeri pada modal Tambah Galeri.
                            </div>

                            <!-- Modal -->
                            <!-- Modal -->
                            <div class="modal fade modalTambahSlider" id="modalTambahSlider" tabindex="-1" role="dialog" aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="modalTambahSliderLabel">Tambah Galeri</h5>
                                            <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
                                        </div>
                                        <?php echo form_open_multipart('admin/galeri/tambah', array('id' => 'tambahSlider')); ?>
                                        <div class="modal-body">
                                            <div class="row modal-content-scrollable">
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                    <div class="form-group">
                                                        <label class="text-label">Nama Galeri</label><br>
                                                        <input type="text" class="form-control" id="namaGaleri" name="nama_folder" required>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                    <div class="form-group">
                                                        <input type="hidden" class="form-control" name="nama_galeri" value="siripabar" required>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                    <div class="form-group">
                                                        <label class="text-label">Gambar Slider</label><br>
                                                        <div id="dropzone" class="dropzone">
                                                            <div class="dz-message" data-dz-message><span>Klik atau seret foto-foto galeri Anda ke sini</span></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <input class="btn btn-primary text-white" type="submit" value="Tambah Galeri">
                                        </div>
                                        <?php echo form_close(); ?>
                                    </div>
                                </div>
                            </div>


                            <!-- Galeri -->
                            <!-- Galeri -->
                            <?php
                            $selected_kategori = $this->input->get('kategori_dropdown');
                            foreach ($galerie as $glr) :
                                if ($selected_kategori == $glr->nama_folder || empty($selected_kategori)) :
                            ?>
                                    <div class="responsive">
                                        <div class="gallery">
                                            <img width="100" src="<?php echo base_url('upload/galeri/' . $glr->nama_folder . '/' . $glr->gambar); ?>" alt="Slider Image">
                                            <div class="desc">
                                                <!-- Tambahkan tombol hapus di dalam loop -->
                                                <button class="btn btn-danger btn-hapus-galeri" data-galeri-id="<?php echo $glr->id; ?>">Hapus</button>

                                            </div>
                                        </div>
                                    </div>
                            <?php
                                endif;
                            endforeach;
                            ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Script Dropzone -->
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.2/dropzone.min.js"></script>
<script>
    Dropzone.autoDiscover = false;
    var foto_upload = new Dropzone(".dropzone", {
        url: "<?php echo base_url('admin/galeri/tambah'); ?>",
        maxFilesize: 2,
        method: "post",
        acceptedFiles: "image/*",
        paramName: "userfile",
        dictInvalidFileType: "Type file ini tidak dizinkan",
        addRemoveLinks: true,

    });

    // Event ketika Memulai mengupload
    foto_upload.on("sending", function(file, xhr, formData) {
        var namaGaleri = 'galeri' + new Date().getTime(); // Buat nama galeri berdasarkan timestamp
        file.nama_galeri = namaGaleri; // Menetapkan nama galeri ke file Dropzone
        formData.append("nama_galeri", namaGaleri); // Menyertakan nama galeri ke formData

        var namaFolder = $('input[name=nama_folder]').val(); // Ambil nama folder dari inputan
        formData.append("nama_folder", namaFolder); // Menyertakan nama folder ke formData
    });

    $('#modalTambahSlider').on('hidden.bs.modal', function() {
        $(this).find('form')[0].reset();
    });
</script>


<script>
    // Menambahkan event listener untuk perubahan dropdown kategori
    $('#kategoriDropdown').change(function() {
        var selectedKategori = $(this).val();
        var sortDirection = $('#sortDropdown').val();
        window.location.href = "<?php echo base_url('admin/galeri'); ?>?kategori_dropdown=" + selectedKategori + "&sort=" + sortDirection;
    });
</script>

<script>
    $('.btn-hapus-galeri').click(function() {
        var galeriId = $(this).data('id_galeri');

        // Tampilkan SweetAlert untuk konfirmasi pengguna
        Swal.fire({
            title: 'Apakah Anda yakin?',
            text: 'Galeri ini akan dihapus permanen!',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#d33',
            cancelButtonColor: '#3085d6',
            confirmButtonText: 'Ya, hapus!',
            cancelButtonText: 'Batal'
        }).then((result) => {
            // Jika pengguna mengonfirmasi
            if (result.isConfirmed) {
                // Kirim permintaan hapus ke server menggunakan AJAX
                $.ajax({
                    url: "<?php echo base_url('admin/galeri/hapus_galeri'); ?>",
                    type: "POST",
                    data: {
                        id_galeri: galeriId
                    },
                    success: function(response) {
                        try {
                            // Cek apakah respons tidak kosong
                            if (response.trim() !== '') {
                                // Mem-parsing string JSON
                                var parsedResponse = JSON.parse(response);

                                // Check apakah parsing berhasil
                                if (parsedResponse && parsedResponse.status) {
                                    // Tampilkan SweetAlert sesuai status
                                    Swal.fire({
                                        title: parsedResponse.status.charAt(0).toUpperCase() + parsedResponse.status.slice(1), // Capitalize status
                                        text: parsedResponse.message,
                                        icon: parsedResponse.status,
                                        confirmButtonText: 'OK'
                                    }).then((result) => {
                                        if (result.isConfirmed && parsedResponse.status === 'success') {
                                            window.location.reload(); // Contoh: refresh halaman
                                        }
                                    });
                                } else {
                                    // Tampilkan SweetAlert untuk respons tidak valid
                                    Swal.fire({
                                        title: 'Error!',
                                        text: 'Respon tidak valid dari server.',
                                        icon: 'error',
                                        confirmButtonText: 'OK'
                                    });
                                }
                            } else {
                                // Respons kosong, mungkin karena tidak ada data untuk dihapus
                                Swal.fire({
                                    title: 'Info',
                                    text: 'Tidak ada data untuk dihapus.',
                                    icon: 'info',
                                    confirmButtonText: 'OK'
                                });
                            }
                        } catch (error) {
                            // Tampilkan SweetAlert untuk kesalahan parsing
                            Swal.fire({
                                title: 'Error!',
                                text: 'Gagal parsing respons JSON.',
                                icon: 'error',
                                confirmButtonText: 'OK'
                            });
                            console.error(error);
                        }
                    },
                    error: function(xhr, status, error) {
                        // Tampilkan SweetAlert untuk notifikasi kesalahan
                        Swal.fire({
                            title: 'Error!',
                            text: 'Gagal menghapus galeri.',
                            icon: 'error',
                            confirmButtonText: 'OK'
                        });
                        console.error(xhr.responseText);
                    }
                });
            }
        });
    });
</script>

<script>
    // Mengambil elemen-elemen yang diperlukan
    var namaGaleriInput = document.getElementById('namaGaleri');
    var dropzone = document.getElementById('dropzone');

    // Menonaktifkan dropzone awal
    dropzone.style.pointerEvents = 'none';
    dropzone.style.opacity = '0.5';

    // Menambahkan event listener untuk input nama galeri
    namaGaleriInput.addEventListener('input', function() {
        // Mengaktifkan dropzone jika input nama galeri tidak kosong
        if (namaGaleriInput.value.trim() !== '') {
            dropzone.style.pointerEvents = 'auto';
            dropzone.style.opacity = '1';
        } else {
            // Menonaktifkan dropzone jika input nama galeri kosong
            dropzone.style.pointerEvents = 'none';
            dropzone.style.opacity = '0.5';
        }
    });

    document.getElementById('tambahSlider').addEventListener('submit', function(event) {
        event.preventDefault(); // Mencegah pengiriman formulir langsung
        window.location.href = 'galeri';
    });
</script>