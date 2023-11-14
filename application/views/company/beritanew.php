<style>
    .blog .blog-title {
        justify-content: space-between;
    }

    .blog .blog-img img {
        width: 100%;
        height: 200px;
        object-fit: cover;
    }
</style>
<!-- Blog Start -->
<div class="blog">
    <div class="container">
        <div class="section-header text-center">
            <h2>BERITA</h2>
        </div>
        <div class="row blog-page">
            <?php $no = 1;
            foreach ($berita as $news) : ?>
                <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                    <a href="<?php echo site_url('beritanew/detail_beritanew/') . url_title($news->judul, 'dash', true); ?>">
                        <div class="blog-item">
                            <div class="blog-img">
                                <?php if (!empty($news->gambar) && file_exists('upload/berita/' . $news->gambar)) : ?>
                                    <img class="w-100" src="<?php echo base_url('upload/berita/' . $news->gambar); ?>" alt="">
                                <?php else : ?>
                                    <span>Gambar Tidak Tersedia</span>
                                <?php endif; ?>
                            </div>
                            <div class="blog-title">
                                <h3><?php echo substr($news->judul, 0, 50); ?></h3>
                            </div>
                        </div>
                    </a>
                </div>
            <?php endforeach; ?>
        </div>

    </div>
</div>
<!-- Blog End -->

<script>
    $(document).ready(function() {
        $('#menuberita').last().addClass("active");
    });
</script>