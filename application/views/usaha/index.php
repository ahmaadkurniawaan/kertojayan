<!-- ======= Hero Section ======= -->
<section id="hero_sub_head" class="d-flex justify-content-center mt-5" style="background-image: url('<?= base_url() ?>assets/img/slider/<?= $sliderRow->img_slider; ?>');">
    <div id="breadcrumb" class="container " data-aos="zoom-out" data-aos-delay="100">

        </h3>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb bg-transparent justify-content-center">
                <li class="breadcrumb-item"><a href="<?= base_url() ?>">Beranda</a></li>
                <li class="breadcrumb-item active " aria-current="page">Jenis Usaha</li>
            </ol>
        </nav>
    </div>
</section>
<!-- End Hero -->

<!-- ======= Services Section ======= -->
<section id="services" class="services">
    <div class="container" data-aos="fade-up">

        <div class="section-title">
            <h2>Usaha</h2>
            <p>Jenis Usaha Yang Berjalan</p>
        </div>

        <div class="row">

            <?php
            if (isset($agenda)) {
                foreach ($agenda as $agd) {
            ?>

                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="100">
                        <div class="icon-box">
                            <div class="icon"><i class="icofont-food-cart"></i></div>
                            <h4><a href=""><?= word_limiter($agd['agenda_detail'], 5); ?></a></h4>
                            <p><?= word_limiter($agd['agenda_description'], 10); ?></p>
                            <div class="btn mt-3">
                                <a class="text-dark" href="<?= base_url(); ?>usaha/detail/<?= $agd['idagenda']; ?>">Selengkapnya &rarr;</a>
                            </div>
                        </div>
                    </div>

            <?php
                }
            } else {
                echo "";
            }
            ?>


        </div>

    </div>
</section><!-- End Services Section -->

<!-- ======= Team Section ======= -->
<section id="team" class="team section-bg">
    <div class="container" data-aos="fade-up">

        <div class="section-title">
            <h2>Pengurus</h2>
            <p>Struktur Organisasi</p>
        </div>

        <div class="row d-flex justify-content-center">
            <?php
            if (isset($pimpinan)) {
                foreach ($pimpinan as $pmf) {
            ?>

                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="member" data-aos="zoom-in" data-aos-delay="100">
                            <img src="<?= base_url() ?>./assets/img/pimpinan/<?= $pmf['img_pimpinan'] ?>" class="img-fluid" alt="">
                            <div class="member-info">
                                <div class="member-info-content">
                                    <h4><?= $pmf['nama_pimpinan']; ?></h4>
                                    <span><?= $pmf['jabatan_pimpinan']; ?></span>
                                </div>
                                <!-- <div class="social">
                                          <a href=""><i class="icofont-twitter"></i></a>
                                          <a href=""><i class="icofont-facebook"></i></a>
                                          <a href=""><i class="icofont-instagram"></i></a>
                                          <a href=""><i class="icofont-linkedin"></i></a>
                                      </div> -->
                            </div>
                        </div>
                    </div>
            <?php
                }
            } else {
                echo "";
            }
            ?>



        </div>

    </div>
</section><!-- End Team Section -->