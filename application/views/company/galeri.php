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
    }
</style>

<div class="portfolio">
    <div class="container">
        <div class="section-header text-center">
            <h2>GALERI</h2>
        </div>

        <div class="row">
            <?php
            $gal_cat = array(
                'mobilisasi-peralatan' => 'MOBILISASI PERALATAN',
                'direksi-keet' => 'DIREKSI KEET',
                'smk3' => 'SMK3',
                'pekerjaan-galian-saluran' => 'PEKERJAAN GALIAN SALURAN',
                'penulangan' => 'PENULANGAN',
                'pekerjaan-bekisting' => 'PEKERJAAN BEKISTING',
                'pekerjaan-beton' => 'PEKERJAAN BETON',
                'pekerjaan-jalan-inspeksi' => 'PEKERJAAN JALAN INSPEKSI',
            );
            ?>
            <div class="col-12">
                <ul id="portfolio-flters" class="controls list-inline">
                    <li class="filter-active" data-filter="*">Semua</li>
                    <?php foreach ($gal_cat as $gc => $x) {
                        if ($gc == "mobilisasi-peralatan") {
                            $active = "active";
                        } else {
                            $active = "";
                        }
                        echo '<li class="' .  '" data-filter="' . '.' . $gc . '">' . $x . '</li>';
                    }
                    ?>

                </ul>
            </div>
        </div>

        <div class="row portfolio-container">
            <?php for ($i = 1; $i <= 6; $i++) { ?>
                <div class="col-lg-4 col-md-6 col-sm-12 portfolio-item wow fadeInUp direksi-keet">
                    <div class="portfolio-warp">
                        <img class="portfolio-img  w-100" src="<?php echo base_url(); ?>public/company/img/galeri/direksi-keet/dk (<?php echo $i; ?>).jpg" alt="project-image">

                    </div>
                </div>
            <?php } ?>
            <?php for ($i = 1; $i <= 6; $i++) { ?>
                <div class="col-lg-4 col-md-6 col-sm-12 portfolio-item wow fadeInUp mobilisasi-peralatan">
                    <div class="portfolio-warp">
                        <img class="portfolio-img w-100" src="<?php echo base_url(); ?>public/company/img/galeri/mobilisasi-peralatan/mp (<?php echo $i; ?>).jpg" alt="project-image">

                    </div>
                </div>
            <?php } ?>
            <?php for ($i = 1; $i <= 6; $i++) { ?>
                <div class="col-lg-4 col-md-6 col-sm-12 portfolio-item wow fadeInUp pekerjaan-bekisting">
                    <div class="portfolio-warp">
                        <img class="portfolio-img w-100" src="<?php echo base_url(); ?>public/company/img/galeri/pekerjaan-bekisting/pb (<?php echo $i; ?>).jpg" alt="project-image">

                    </div>
                </div>
            <?php } ?>
            <?php for ($i = 1; $i <= 9; $i++) { ?>
                <div class="col-lg-4 col-md-6 col-sm-12 portfolio-item wow fadeInUp pekerjaan-beton">
                    <div class="portfolio-warp">
                        <img class="portfolio-img w-100" src="<?php echo base_url(); ?>public/company/img/galeri/pekerjaan-beton/pbt (<?php echo $i; ?>).jpg" alt="project-image">

                    </div>
                </div>
            <?php } ?>
            <?php for ($i = 1; $i <= 7; $i++) { ?>
                <div class="col-lg-4 col-md-6 col-sm-12 portfolio-item wow fadeInUp pekerjaan-galian-saluran">
                    <div class="portfolio-warp">
                        <img class="portfolio-img w-100" src="<?php echo base_url(); ?>public/company/img/galeri/pekerjaan-galian-saluran/pgs (<?php echo $i; ?>).jpg" alt="project-image">

                    </div>
                </div>
            <?php } ?>
            <?php for ($i = 1; $i <= 12; $i++) { ?>
                <div class="col-lg-4 col-md-6 col-sm-12 portfolio-item wow fadeInUp pekerjaan-jalan-inspeksi">
                    <div class="portfolio-warp">
                        <img class="portfolio-img w-100" src="<?php echo base_url(); ?>public/company/img/galeri/pekerjaan-jalan-inspeksi/pji (<?php echo $i; ?>).jpg" alt="project-image">

                    </div>
                </div>
            <?php } ?>
            <?php for ($i = 1; $i <= 9; $i++) { ?>
                <div class="col-lg-4 col-md-6 col-sm-12 portfolio-item wow fadeInUp penulangan">
                    <div class="portfolio-warp">
                        <img class="portfolio-img w-100" src="<?php echo base_url(); ?>public/company/img/galeri/penulangan/pn (<?php echo $i; ?>).jpg" alt="project-image">

                    </div>
                </div>
            <?php } ?>
            <?php for ($i = 1; $i <= 5; $i++) { ?>
                <div class="col-lg-4 col-md-6 col-sm-12 portfolio-item wow fadeInUp smk3">
                    <div class="portfolio-warp">
                        <img class="portfolio-img w-100" src="<?php echo base_url(); ?>public/company/img/galeri/smk3/sm (<?php echo $i; ?>).jpg" alt="project-image">

                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</div>
    <script>
        $(document).ready(function() {
            $('#menugaleri').last().addClass("active");
        });
    </script>