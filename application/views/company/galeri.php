<style>
    .portfolio #portfolio-flters {
        padding: 0;
        display: flex;
        margin-bottom: 20px;
        white-space: nowrap !important;
        overflow-x: scroll !important;
        overflow-y: hidden !important;
        white-space: nowrap !important;
    }

    .portfolio-img {
        height: 200px;
        object-fit: cover;
    }
</style>

<div class="portfolio">
    <div class="container">
        <div class="section-header text-center">
            <h2>GALERI</h2>
        </div>

        <div class="row">
            <?php
            $CI = &get_instance();
            $CI->load->model('M_galeri');

            // Ambil nama kategori dari folder yang memiliki gambar di dalamnya
            $kategori_folders = $CI->M_galeri->get_kategori_folders_with_images();
            ?>

            <div class="col-12">
                <ul id="portfolio-flters" class="controls list-inline">
                    <li class="filter-active" data-filter="*">Semua</li>
                    <?php
                    $kategori_terpilih = ''; // Atau Anda dapat menetapkan nilainya sesuai kebutuhan

                    foreach ($kategori_folders as $kategori) {
                        $kategori_tampilan = str_replace('_', ' ', $kategori->nama_folder);

                        // Memeriksa apakah kategori ini adalah kategori yang aktif
                        $class = ($kategori_terpilih == $kategori->nama_folder) ? 'filter-active' : '';

                        echo '<li class="' . $class . '" data-filter=".' . $kategori->nama_folder . '">' . strtoupper($kategori_tampilan) . '</li>';
                    }

                    ?>
                </ul>
            </div>
        </div>

        <div class="row portfolio-container">
            <?php
            foreach ($kategori_folders as $kategori) {
                $kategori_url = urlencode($kategori->nama_folder);

                for ($i = 1; $i <= 6; $i++) {
                    $gambar_data = $CI->M_galeri->get_gambar_by_kategori_dan_index($kategori_url, $i);

                    if ($gambar_data) {
                        $gambar_id = $gambar_data->id;
                        $image_path = './upload/galeri/' . $kategori->nama_folder . '/galeri' . $gambar_id;

                        // Get the first image file with any extension (.jpg, .png, .jpeg)
                        $image_extensions = ['jpg', 'png', 'jpeg'];
                        $found = false;
                        $extension = '';
                        foreach ($image_extensions as $ext) {
                            if (file_exists($image_path . '.' . $ext)) {
                                $found = true;
                                $extension = $ext;
                                break;
                            }
                        }

                        if ($found) {
                            echo '<div class="col-lg-4 col-md-6 col-sm-12 portfolio-item wow fadeInUp ' . $kategori_url . '">';
                            echo '<div class="portfolio-warp">';
                            echo '<img class="portfolio-img w-100" src="' . base_url('upload/galeri/' . $kategori_url . '/galeri' . $gambar_id . '.' . $extension) . '" alt="project-image">';
                            echo '</div>';
                            echo '</div>';
                        }
                    }
                }
            }
            ?>
        </div>

    </div>
</div>

<script>
    $(document).ready(function() {
        $('#menugaleri').last().addClass("active");
    });
</script>