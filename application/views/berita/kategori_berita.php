<!-- ======= Hero Section ======= -->
<section id="hero_sub_head" class="d-flex justify-content-center mt-5" style="background-image: url('<?= base_url() ?>assets/img/slider/<?= $sliderRow->img_slider; ?>');">
    <div id="breadcrumb" class="container " data-aos="zoom-out" data-aos-delay="100">
        <h3 class="text-center">Kategori Berita<span> Teknologi Informasi</span>
        </h3>
        <nav aria-label="breadcrumb ">
            <ol class="breadcrumb bg-transparent justify-content-center">
                <li class="breadcrumb-item"><a href="<?= base_url() ?>">Beranda</a></li>
                <li class="breadcrumb-item active " aria-current="page">Kategori Berita</li>
            </ol>
        </nav>
    </div>
</section>
<!-- End Hero -->
<!-- ======= News ======= -->
<!-- ======= News ======= -->
<section id="portfolio" class="portfolio">
    <div class="container" data-aos="fade-up">

        <div class="section-title">
            <h2>Kategori Berita</h2>
            <p>Kategori Berita Terbaru</p>
        </div>
        <div class="row">
            <?php
            if (isset($kategori_news)) {
                foreach ($kategori_news as $nws) {
            ?>
                    <div class="col-md-4">
                        <figure class="snip1208">
                            <img src="<?= base_url() ?>assets/img/news/<?= $nws['img_news'] ?>" alt="sample66" />
                            <div class="date"><span class="day">28</span><span class="month">Oct</span></div><i class="ion-film-marker"></i>
                            <figcaption>

                                <h3><?= word_limiter($nws['title_news'], 4); ?></h3>

                                <p>
                                    <?= word_limiter($nws['no_char'], 15); ?>
                                </p>

                            </figcaption><a href="<?= base_url(); ?>berita/detail/<?= $nws['idnews']; ?>"></a>
                        </figure>

                    </div>
            <?php
                }
            } else {
                echo "";
            }
            ?>

        </div>
        <div class="d-flex justify-content-center mt-3">
            <?= $this->pagination->create_links(); ?>
        </div>
    </div>
</section>

<!-- End News -->
<!-- End News -->