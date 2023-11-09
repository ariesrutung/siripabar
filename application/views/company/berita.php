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
                    <?php
                    $CI = &get_instance();
                    $CI->load->model('M_berita');
                    $gb = $CI->M_berita->get_image($news->id);
                    ?>
                    <a href="<?php echo site_url('berita/detail_berita/') . url_title($news->judul, 'dash', true); ?>">
                        <div class="blog-item">
                            <div class="blog-img">
                                <?php if ($gb) { ?>
                                    <img width="100" src="<?php echo base_url('upload/berita/') . $gb->nama_file; ?>" alt="">
                                <?php } else { ?>
                                    <img width="100" src="<?php echo base_url('upload/berita/noimageavail.jpg'); ?>" alt="">
                                <?php } ?>
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

            <!-- <div class="col-lg-4 col-md-6 wow fadeInUp">
                <a href="<?php // echo base_url('berita/detail_berita'); 
                            ?>">
                    <div class="blog-item">
                        <div class="blog-img">
                            <img src="<?php // echo base_url(); 
                                        ?>/public/company/img/blog-2.jpg" alt="Image">
                        </div>
                        <div class="blog-title">
                            <h3>Lorem ipsum dolor sit</h3>
                            <a class="btn" href="">+</a>
                        </div>
                        <div class="blog-meta">
                            <p>By<a href="">Admin</a></p>
                            <p>In<a href="">Construction</a></p>
                        </div>
                        <div class="blog-text">
                            <p>
                                Lorem ipsum dolor sit amet elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non vulputate. Aliquam metus tortor
                            </p>
                        </div>
                    </div>
                </a>
            </div>
             -->
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