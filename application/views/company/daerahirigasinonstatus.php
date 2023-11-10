<style>
    .service .service-text {
        display: flex;
        align-items: center;
        height: 60px;
        background: #030f27;
        overflow: hidden;
        white-space: nowrap;
        text-overflow: ellipsis;
        justify-content: center;
    }
</style>
<!-- Service Start -->
<div class="service">
    <div class="container">
        <div class="section-header text-center">
            <h2>DAERAH IRIGASI</h2>
            <p>Non Status</p>
        </div>
        <div class="row">
            <?php foreach ($daerahirigasi as $di) { ?>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <a href="<?php echo base_url('daerahirigasi/detail/') . $di->kode_di; ?>">
                        <div class="service-item">
                            <div class="service-img">
                                <img style="height: 200px;" src="<?php echo  base_url(); ?>/public/company/img/skema/<?php echo $di->gambar; ?>" alt="Image">
                                <div class="service-overlay">
                                </div>
                            </div>
                            <div class="service-text">
                                <h3 class="text-center"><?php echo $di->nama_di ?></h3>
                            </div>
                        </div>
                    </a>
                </div>
            <?php } ?>
        </div>

    </div>
</div>
<!-- Service End -->



    <script>
        $(document).ready(function() {
            $('#menudaerahirigasi').last().addClass("active");
        });
    </script>