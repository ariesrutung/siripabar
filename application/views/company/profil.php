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

    .about.wow.fadeInUp.fact-left {
        color: #fff;
        background: #030f27;
    }
</style>

<!-- About Start -->
<div class="about wow fadeInUp" data-wow-delay="0.1s">
    <div class="container">
        <div class="section-header text-center">
            <h2>PROFIL</h2>
        </div>
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
<div class="about wow fadeInUp fact-left fadeInLeft" data-wow-delay="0.3s">
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
<div class="about wow fadeInUp" data-wow-delay="0.1s">
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

<!-- Fact End -->
    <script>
        $(document).ready(function() {
            $('#menuprofil').last().addClass("active");
        });
    </script>
