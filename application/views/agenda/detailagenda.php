<!-- ======= Hero Section ======= -->
<section id="hero_sub_head" class="d-flex justify-content-center mt-5" style="background-image: url('<?= base_url() ?>assets/img/header/sub-header3.jpg');">
    <div id="breadcrumb" class="container " data-aos="zoom-out" data-aos-delay="100">
        <h3 class="text-center">Detail Agenda<span> Teknologi informasi</span>
        </h3>
        <nav aria-label="breadcrumb ">
            <ol class="breadcrumb bg-transparent justify-content-center">
                <li class="breadcrumb-item"><a href="<?= base_url() ?>">Beranda</a></li>
                <li class="breadcrumb-item active " aria-current="page">Detail Agenda</li>
            </ol>
        </nav>
    </div>
</section>
<!-- End Hero -->

<!-- ======= Agenda Section ======= -->
<section class="pengumuman section-bg">
    <div class="container">
        <?php
        if (isset($detail)) {
        ?>

            <div class="row  ">
                <div class="col-md-12">
                    <div class="timeline">
                        <div class="col-md-12">

                            <div class="tl-item">
                                <div class="tl-circle">&nbsp;</div>
                            </div>
                            <div class="tl-item">
                                <div class="tl-circle">&nbsp;</div>
                            </div>
                            <div class="tl-item tl-year-wrap">
                                <!-- <span class="tl-year-back">&nbsp;</span><span class="tl-year">2020</span> -->
                            </div>
                            <!-- === Agenda Item === -->
                            <div class="tl-item">

                                <div class="tl-event">
                                    <img class="ml-5 img-fluid" src="<?= base_url() ?>assets/img/agenda/<?= $detail->img_agenda ?>" alt="">
                                    <div class="agenda-title">
                                        <h3 class="ml-5 mt-1"><?= $detail->agenda_detail; ?></h3>
                                        <div class="ml-5 text">
                                            <p><?= $detail->agenda_description; ?></p>
                                        </div>
                                        <span class="ml-5 text-dark"><i class="icofont-clock-time pr-1"></i><?= $detail->agenda_time; ?></span>
                                        <br>
                                        <span class="ml-5 text-dark"><i class="icofont-calendar pr-1"></i><?= $detail->time_agenda; ?></span>
                                        <br>
                                        <span class="ml-5 text-dark"><i class="icofont-location-pin pr-1"></i><?= $detail->location_agenda; ?></span>
                                        <br>
                                        <span class="ml-5 text-dark"><i class="icofont-ui-user-group pr-1"></i><?= $detail->agenda_penyelenggara; ?></span>
                                        <br>
                                        <span class="ml-5 text-dark"><i class="icofont-ui-contact-list pr-1"></i><?= $detail->agenda_contact; ?></span>
                                    </div>
                                    <?php
                                    if (!empty($detail->link_agenda)) {
                                    ?>
                                        <a class="btn btn-outline-secondary ml-5 mt-3" target="_blank" href="<?= base_url('docs/' . $detail->link_agenda); ?>">Lihat Dokumen &rarr;</a>
                                    <?php
                                    } else {
                                        echo "";
                                    }
                                    ?>
                                </div>
                            </div>
                            <div class="tl-item">
                                <div class="tl-end">&nbsp;</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php
        } else {
            echo "";
        }
        ?>
    </div>

</section>
<!-- ======= End Agenda Section ======= -->