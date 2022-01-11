<!-- ======= Hero Section ======= -->
<section id="hero_sub_head" class="d-flex justify-content-center mt-5" style="background-image: url('<?= base_url() ?>assets/img/slider/<?= $sliderRow->img_slider; ?>');">
    <div id="breadcrumb" class="container " data-aos="zoom-out" data-aos-delay="100">

        <nav aria-label="breadcrumb ">
            <ol class="breadcrumb bg-transparent justify-content-center">
                <li class="breadcrumb-item"><a href="<?= base_url() ?>">Beranda</a></li>
                <li class="breadcrumb-item active " aria-current="page">Detail Berita</li>
            </ol>
        </nav>
    </div>
</section>
<!-- End Hero -->

<!-- ======= Detail News ======= -->
<section class="news ">
    <div class="container">
        <div class="row ">
            <div class="col-md-8">
                <?php
                if (isset($detail)) {
                ?>
                    <div class="col-md-12">
                        <img class="img-fluid" src="<?= base_url() ?>./assets/img/news/<?= $detail->img_news ?>" alt="">
                        <h1 class="pt-2"><?= $detail->title_news; ?></h1>
                        <p><?= $detail->detail_news; ?></p>
                    </div>

                <?php
                } else {
                    echo "";
                }
                ?>
            </div>
            <div class="col-md-4 ">
                <div class="widget">
                    <h5 class="widget-title">Kategori</h5>
                    <ul>
                        <?php
                        if (isset($data_kategori)) {
                            foreach ($data_kategori as $ktg) {
                        ?>
                                <li><a href="<?= base_url(); ?>berita/kategori/<?= $ktg['idcategory']; ?>"><?= $ktg['name_category']; ?></a></li>
                        <?php
                            }
                        } else {
                            echo "";
                        }
                        ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    </div>
</section>

<!-- ======= End Detail news ======= -->