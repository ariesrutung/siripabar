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
            // Ambil nama kategori dari folder
            $kategori_folders = array_diff(scandir('./upload/galeri'), array('..', '.'));
            ?>

            <div class="col-12">
                <ul id="portfolio-flters" class="controls list-inline">
                    <li class="filter-active" data-filter="*">Semua</li>
                    <?php
                    foreach ($kategori_folders as $kategori) {
                        $kategori_tampilan = str_replace('_', ' ', $kategori);
                        echo '<li class="filter-active" data-filter=".' . $kategori . '">' . strtoupper($kategori_tampilan) . '</li>';
                    }
                    ?>
                </ul>
            </div>

        </div>

        <div class="row portfolio-container">
            <?php
            foreach ($kategori_folders as $kategori) {
                $kategori_url = urlencode($kategori);

                for ($i = 1; $i <= 6; $i++) {
                    echo '<div class="col-lg-4 col-md-6 col-sm-12 portfolio-item wow fadeInUp ' . $kategori_url . '">';
                    echo '<div class="portfolio-warp">';
                    $CI = &get_instance();
                    $CI->load->model('M_galeri');
                    // $sl = $CI->M_galeri->get_slider_by_idberita($news->id)->row();
                    $gambar_data = $CI->M_galeri->get_gambar_by_kategori_dan_index($kategori_url, $i);

                    if ($gambar_data) {
                        $gambar_id = $gambar_data->id; // Ganti ini sesuai dengan kolom ID yang sesuai di tabel gambar
                        echo '<img class="portfolio-img w-100" src="' . base_url('upload/galeri/' . $kategori_url . '/galeri' . $gambar_id . '.jpg') . '" alt="project-image">';
                    } else {
                        echo '<p>Gambar tidak ditemukan</p>';
                    }
                    echo '</div>';
                    echo '</div>';
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