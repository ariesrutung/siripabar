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
                    <a href="<?php echo site_url('berita/detail_berita/') . url_title($news->judul, 'dash', true); ?>">
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
                                <a class="btn" href="">+</a>
                            </div>
                            <!-- <div class="blog-text">
                                <p>
                                    <?php // echo word_limiter($news->isi, 20) 
                                    ?>
                                </p>
                            </div> -->
                        </div>
                    </a>
                </div>
            <?php endforeach; ?>
        </div>
        <div class="row">
            <div class="col-12">
                <ul class="pagination justify-content-center">
                    <li class="page-item disabled"><a class="page-link" href="#">Previous</a></li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item active"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">Next</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- Blog End -->

<script>
    $(document).ready(function() {
        $('#menuberita').last().addClass("active");
    });
</script>