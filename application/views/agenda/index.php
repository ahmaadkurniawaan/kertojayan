<!-- ======= Hero Section ======= -->
<section id="hero_sub_head" class="d-flex justify-content-center mt-5" style="background-image: url('<?= base_url() ?>assets/img/header/sub-header3.jpg');">
    <div id="breadcrumb" class="container " data-aos="zoom-out" data-aos-delay="100">
        <h3 class="text-center">Agenda<span> Teknologi Informasi</span>
        </h3>
        <nav aria-label="breadcrumb ">
            <ol class="breadcrumb bg-transparent justify-content-center">
                <li class="breadcrumb-item"><a href="<?= base_url() ?>">Beranda</a></li>
                <li class="breadcrumb-item active " aria-current="page">Agenda</li>
            </ol>
        </nav>
    </div>
</section>
<!-- End Hero -->

<!-- ======= Pengumuman ======= -->
<section class="pengumuman section-bg">
    <div class="container">
        <div class="section-title" data-aos="fade-up">
            <h3>Agenda</h3>
            <p>Silahkan Pilih Agenda di Bawah.</p>
        </div>
        <div class="row d-flex justify-content-center ">
            <div class="timeline">
                <div class="c-md-2">

                    <div class="tl-item">
                        <div class="tl-circle">&nbsp;</div>
                    </div>
                    <div class="tl-item">
                        <div class="tl-circle">&nbsp;</div>
                    </div>
                    <div class="tl-item tl-year-wrap">
                        <span class="tl-year-back">&nbsp;</span><span class="tl-year"></span>
                    </div>
                    <?php
                    if (isset($agenda)) {
                        foreach ($agenda as $agd) {
                    ?>
                            <!-- === Agenda Item === -->
                            <div class="tl-item content">
                                <div data-aos="fade-right">
                                    <span class="tl-date text-dark"><?= $agd['agenda_date']; ?></span>
                                    <span class="tl-date pt-4 text-dark"><?= $agd['agenda_month']; ?></span>
                                    <span class="tl-date pt-5 text-dark"><?= substr($agd['time_agenda'], -4); ?></span>
                                </div>
                                <div class="tl-event">
                                    <div data-aos="fade-left">
                                        <h2><?= $agd['agenda_detail']; ?></h2>
                                        <p class="ml-5"><i class="icofont-calendar pr-2"></i><?= $agd['agenda_day']; ?></p>
                                        <p class="ml-5"><i class="icofont-clock-time pr-2"></i><?= $agd['agenda_time']; ?></p>
                                        <p class="ml-5"><i class="icofont-google-map pr-2"></i><?= $agd['location_agenda']; ?></p>
                                        <a class="ml-5" href="<?= base_url(); ?>agenda/detail/<?= $agd['idagenda']; ?>">Selengkapnya &rarr;</a>
                                    </div>
                                </div>
                            </div>
                            <!-- === End Agenda Item === -->
                    <?php
                        }
                    } else {
                        echo "";
                    }
                    ?>

                    <div class="tl-item">
                        <div class="tl-end">&nbsp;</div>
                    </div>
                </div>
            </div>
            <div class="row mt-3 d-flex justify-content-center">
                <button class="btn btn-warning" id="loadMore">Selengkapnya</button>
            </div>
        </div>
    </div>
</section>
<!-- End Pengumuman -->