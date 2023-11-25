<style>
    .about .about-img {
        position: relative;
        height: 100%;
        height: 250px;
    }

    .section-header h3 {
        color: #fdbe33;
    }

    .about-text li {
        padding: 5px;
        line-height: 1.9;
    }

    .about-text li::marker {
        color: #fdbe33;
    }

    .about-text ul {
        padding-left: 25px;
    }

    .about.wow.fadeInRight.fact-left {
        color: #fff;
        background: #030f27;
    }
</style>

<!-- Carousel Start -->
<div id="carousel" class="carousel slide" data-ride="carousel">
    <?php if (!empty($active_sliders)) : ?>
        <ol class="carousel-indicators">
            <?php foreach ($active_sliders as $index => $slider) : ?>
                <li data-target="#carousel" data-slide-to="<?php echo $index; ?>" <?php echo ($index == 0) ? 'class="active"' : ''; ?>></li>
            <?php endforeach; ?>
        </ol>
        <div class="carousel-inner">
            <?php foreach ($active_sliders as $index => $slider) : ?>
                <div class="carousel-item <?php echo ($index == 0) ? 'active' : ''; ?>">
                    <img style="background-size: contain !important;" src="<?php echo base_url('upload/slider/' . $slider->gambar); ?>" alt="Carousel Image">
                </div>
            <?php endforeach; ?>
        </div>
    <?php else : ?>
        <!-- Tampilkan gambar default jika tidak ada slider yang aktif -->
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img style="background-size: contain !important;" src="<?php echo base_url('upload/slider/default.jpg'); ?>" alt="Default Image">
            </div>
        </div>
    <?php endif; ?>

    <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>

<!-- Carousel End -->


<!-- Feature Start-->
<div class="feature wow fadeInRight" data-wow-delay="0.1s">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-lg-4 col-md-12">
                <div class="feature-item">
                    <img class="w-25" src="<?php echo base_url(); ?>/public/company/img/irigasi-icon.png?>" alt="">
                    <!-- <i class="flaticon-worker"></i> -->
                    <div class="feature-text">
                        <h3>KEWENANGAN PUSAT</h3>
                        <p>Sebanyak <strong>3 Daerah Irigasi</strong> dengan luas total <strong>9666 Ha</strong></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12">
                <div class="feature-item">
                    <img class="w-25" src="<?php echo base_url(); ?>/public/company/img/irigasi-icon.png?>" alt="">
                    <!-- <div class="feature-icon">
                        <i class="flaticon-building"></i>
                    </div> -->
                    <div class="feature-text">
                        <h3>KEWENANGAN PROVINSI</h3>
                        <p>Sebanyak <strong>11 Daerah Irigasi</strong> dengan luas total <strong>15.010 Ha</strong></p>

                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12">
                <div class="feature-item">
                    <img class="w-25" src="<?php echo base_url(); ?>/public/company/img/irigasi-icon.png?>" alt="">
                    <!-- <div class="feature-icon">
                        <i class="flaticon-call"></i>
                    </div> -->
                    <div class="feature-text">
                        <h3>KEWENANGAN KAB/KOTA</h3>
                        <p>Sebanyak <strong>16 Daerah Irigasi</strong> dengan luas total <strong>5.371 Ha</strong></p>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Feature End-->

<!-- About Start -->
<div class="about wow fadeInLeft" data-wow-delay="0.1s">
    <div class="container">

        <div class="row align-items-center">
            <div class="col-lg-5 col-md-6">
                <div class="about-img">
                    <img src="<?php echo base_url(); ?>/public/company/img/Screenshot_14.png" alt="Image">
                </div>
            </div>
            <div class="col-lg-7 col-md-6">
                <div class="section-header text-left">
                    <h3>Latar Belakang</h3>
                </div>
                <div class="about-text">
                    <ul>
                        <li>Luas wilayah Provinsi Papua Barat sangat luas.</li>
                        <li>Terbatasnya konektifitas antar wilayah Kab/Kota sehingga Masyarakat kesulitan menyampaikan usulan program/aduan. </li>
                        <li>Sulitnya mendapatkan informasi infrastruktur sehingga ada stigma pembangunan kurang tepat sasaran.</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About End -->

<!-- About Start -->
<div class="about wow fact-left fadeInRight" data-wow-delay="0.3s">
    <div class="container">
        <div class="row align-items-center">

            <div class="col-lg-7 col-md-6">
                <div class="section-header text-left">
                    <h3>Tujuan</h3>
                </div>
                <div class="about-text">
                    <ul>
                        <li>Mendapatkan data laporan masyarakat secara cepat dan sesuai kondisi tekini dengan memanfaatkan TI.</li>
                        <li>Menentukan Kebijakan dalam Penentuan Program Prioritas.</li>
                        <li>Menyelenggarakan Pemerintahan yang efektif dan akuntabel dalam Bidang Pembangunan Infrastruktur SDA.</li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-5 col-md-6">
                <div class="about-img">
                    <img src="<?php echo base_url(); ?>/public/company/img/Screenshot_15.png" alt="Image">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About End -->

<!-- About Start -->
<div class="about wow fadeInLeft" data-wow-delay="0.1s">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-5 col-md-6">
                <div class="about-img">
                    <img src="<?php echo base_url(); ?>/public/company/img/Screenshot_16.png" alt="Image">
                </div>
            </div>
            <div class="col-lg-7 col-md-6">
                <div class="section-header text-left">
                    <h3>Manfaat</h3>
                </div>
                <div class="about-text">
                    <ul>
                        <li>Mempermudah Masyarakat Mendapatkatkan Informasi Pembangunan Infrastruktur SDA di Provinsi Papua Barat.</li>
                        <li>Memutus birokrasi yang berbelit-belit dalam menyampaikan usulan program/aduan serta menghindarkan Konflik Kepentingan.</li>
                        <li>Mempermudah Penyelenggara Infrastruktur dalam Menyusun Program Kerja.</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Blog End -->
<script>
    $(document).ready(function() {
        $('#menuberanda').last().addClass("active");
    });
</script>