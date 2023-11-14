<style>
    .single .tanggal.mt-3 {
        font-size: 14px;
    }

    .single .single-content img {
        margin-bottom: 0;
        height: 350px;
        object-fit: cover;
    }

    .single .single-content p.ket_gambar {
        font-size: 13px;
    }

    p.detail_berita {
        line-height: 1.8;
    }

    p span {
        font-weight: bold;
    }

    div#berita-slider {
        margin: 0 !important;
    }

    .single .post-item .post-img {
        width: 100%;
        max-width: 100%;
    }

    .carousel-inner::after,
    .carousel .carousel-item::after {
        display: none;
    }

    .tab-content {
        height: 200px;
    }

    img.w-100 {
        height: 200px !important;
        object-fit: cover !important;
    }

    h2.nav-link.text-left {
        font-size: 30px;
        font-weight: 700;
    }
</style>
<!-- Single Post Start-->
<div class="single">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="single-content wow fadeInUp">
                    <h2><?php echo $detail->judul; ?></h2>
                    <p class="tanggal mt-3"><?php echo date('l, j F Y', strtotime($detail->tanggal)); ?></p>
                    <hr>
                    <?php
                    $newsSource = "SIRIPABAR.COM";
                    $gambarPath = base_url('upload/berita/') . $detail->gambar;

                    if (file_exists('./upload/berita/' . $detail->gambar) && !empty($detail->gambar)) {
                        // Tampilkan gambar asli jika file ada dan tidak kosong
                        echo '<img src="' . $gambarPath . '" alt="">';
                    } else {
                        // Tampilkan gambar default jika file tidak ada atau kosong
                        echo '<img src="' . base_url('upload/berita/default.jpg') . '" alt="Default Image">';
                    }
                    ?>
                    <p class="ket_gambar"><?php echo $detail->ket_gambar; ?></p>
                    <p class="detail_berita mt-4">
                        <span><?php echo $newsSource; ?>, <?php echo $detail->lok_berita; ?></span> - <?php echo $detail->isiberita; ?>
                    </p>
                </div>
                <div class="single-tags wow fadeInLeft">
                    <?php
                    if (!empty($detail->tag)) {
                        $tagArray = explode(',', $detail->tag);
                        echo '<p>Tag: ';
                        foreach ($tagArray as $tag) {
                            echo '<a href="#">' . trim($tag) . '</a> ';
                        }
                        echo '</p>';
                    }
                    ?>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="sidebar">
                    <div class="sidebar-widget wow fadeInUp">
                        <h2 class="widget-title">Berita Terbaru</h2>
                        <div class="recent-post">
                            <?php foreach ($recentposts as $post) : ?>
                                <a href="<?php echo base_url('beritanew/detail_beritanew/' . $post->slug); ?>">
                                    <div class="post-item">
                                        <div class="post-img">
                                            <img src="<?php echo base_url() . '/upload/berita/' . $post->gambar; ?>" alt="">
                                        </div>
                                        <div class="post-text">
                                            <?php echo (strlen($post->judul) > 60) ? substr($post->judul, 0, 60) . '...' : $post->judul; ?>

                                        </div>
                                    </div>
                                </a>
                            <?php endforeach; ?>
                        </div>
                    </div>

                    <div class="sidebar-widget wow fadeInUp">
                        <div class="tab-post">
                            <ul class="nav nav-pills nav-justified">
                                <li class="nav-item">
                                    <!-- <a class="nav-link text-left" data-toggle="pill" href="#featured">Galeri Berita</a> -->
                                    <h2 class="nav-link text-left">Galeri Berita</h2>
                                </li>
                            </ul>

                            <div class="tab-content">
                                <div id="featured" class="container tab-pane active">
                                    <div id="berita-slider" class="carousel slide" data-ride="carousel">
                                        <div class="carousel-inner">

                                            <?php
                                            $first = true;
                                            foreach ($berita as $br) :
                                            ?>
                                                <div class="carousel-item <?php echo $first ? 'active' : ''; ?>">
                                                    <div class="post-item">
                                                        <div class="post-img">
                                                            <img class="w-100" src="<?php echo base_url() . '/upload/berita/' . $br->gambar; ?>" />
                                                        </div>
                                                    </div>
                                                </div>
                                            <?php
                                                $first = false; // Set flag menjadi false setelah slide pertama
                                            endforeach;
                                            ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="sidebar-widget wow fadeInUp">
                        <h2 class="widget-title">Tag Berita</h2>
                        <div class="tag-widget">
                            <?php
                            if (!empty($detail->tag)) {
                                $tagArray = explode(',', $detail->tag);
                                foreach ($tagArray as $tag) {
                                    echo '<a href="#">' . trim($tag) . '</a> ';
                                }
                                echo '</p>';
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Single Post End-->

<script>
    $(document).ready(function() {
        $('#menuberita').last().addClass("active");
    });
</script>