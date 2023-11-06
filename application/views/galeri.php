<section class="page-title overlay" style="background-image: url('./public/frontend2/images/background/page-title.jpg');">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h2 class="text-white font-weight-bold">GALERI</h2>
                <ol class="breadcrumb">
                    <li>
                        <a href="index.html">beranda</a>
                    </li>
                    <li>Galeri</li>
                </ol>
            </div>
        </div>
    </div>
</section>


<section class="section">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h2 class="mb-2">Our Projects</h2>
                <p class="mb-40">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    <br> tempor incididunt ut labore et dolore magna aliqua.
                </p>
            </div>


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
                <div class="project-menu text-center">
                    <ul class="controls list-inline">

                        <?php foreach ($gal_cat as $gc => $x) {
                            if ($gc == "penulangan") {
                                $active = "active";
                            } else {
                                $active = "";
                            }
                            echo '<li class="list-inline-item control ' . $active . '" data-filter="' . $gc . '">' . $x . '</li>';
                        }
                        ?>

                    </ul>
                </div>
            </div>
        </div>
        <style>
            .img-fluid {
                height: 150px !important;
            }
        </style>
        <div class="row filtr-container">
            <?php for ($i = 1; $i <= 6; $i++) { ?>
                <div class="m-2 col-lg-3 col-md-4 col-sm-6 p-0 filtr-item" data-category="direksi-keet">
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="<?php echo base_url(); ?>public/frontend2/images/galeri/direksi-keet/dk (<?php echo $i; ?>).jpg" alt="project-image">

                    </div>
                </div>
            <?php } ?>
            <?php for ($i = 1; $i <= 6; $i++) { ?>
                <div class="m-2 col-lg-3 col-md-4 col-sm-6 p-0 filtr-item" data-category="mobilisasi-peralatan">
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="<?php echo base_url(); ?>public/frontend2/images/galeri/mobilisasi-peralatan/mp (<?php echo $i; ?>).jpg" alt="project-image">

                    </div>
                </div>
            <?php } ?>
            <?php for ($i = 1; $i <= 6; $i++) { ?>
                <div class="m-2 col-lg-3 col-md-4 col-sm-6 p-0 filtr-item" data-category="pekerjaan-bekisting">
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="<?php echo base_url(); ?>public/frontend2/images/galeri/pekerjaan-bekisting/pb (<?php echo $i; ?>).jpg" alt="project-image">

                    </div>
                </div>
            <?php } ?>
            <?php for ($i = 1; $i <= 9; $i++) { ?>
                <div class="m-2 col-lg-3 col-md-4 col-sm-6 p-0 filtr-item" data-category="pekerjaan-beton">
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="<?php echo base_url(); ?>public/frontend2/images/galeri/pekerjaan-beton/pbt (<?php echo $i; ?>).jpg" alt="project-image">

                    </div>
                </div>
            <?php } ?>
            <?php for ($i = 1; $i <= 7; $i++) { ?>
                <div class="m-2 col-lg-3 col-md-4 col-sm-6 p-0 filtr-item" data-category="pekerjaan-galian-saluran">
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="<?php echo base_url(); ?>public/frontend2/images/galeri/pekerjaan-galian-saluran/pgs (<?php echo $i; ?>).jpg" alt="project-image">

                    </div>
                </div>
            <?php } ?>
            <?php for ($i = 1; $i <= 12; $i++) { ?>
                <div class="m-2 col-lg-3 col-md-4 col-sm-6 p-0 filtr-item" data-category="pekerjaan-jalan-inspeksi">
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="<?php echo base_url(); ?>public/frontend2/images/galeri/pekerjaan-jalan-inspeksi/pji (<?php echo $i; ?>).jpg" alt="project-image">

                    </div>
                </div>
            <?php } ?>
            <?php for ($i = 1; $i <= 9; $i++) { ?>
                <div class="m-2 col-lg-3 col-md-4 col-sm-6 p-0 filtr-item" data-category="penulangan">
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="<?php echo base_url(); ?>public/frontend2/images/galeri/penulangan/pn (<?php echo $i; ?>).jpg" alt="project-image">

                    </div>
                </div>
            <?php } ?>
            <?php for ($i = 1; $i <= 5; $i++) { ?>
                <div class="m-2 col-lg-3 col-md-4 col-sm-6 p-0 filtr-item" data-category="smk3">
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="<?php echo base_url(); ?>public/frontend2/images/galeri/smk3/sm (<?php echo $i; ?>).jpg" alt="project-image">

                    </div>
                </div>
            <?php } ?>




        </div>
    </div>
</section>