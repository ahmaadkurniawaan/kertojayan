<!-- ======= Hero Section ======= -->
<section id="hero_sub_head" class="d-flex justify-content-center mt-5"
    style="background-image: url('<?= base_url() ?>assets/img/slider/<?= $sliderRow->img_slider; ?>');">
    <div id="breadcrumb" class="container " data-aos="zoom-out" data-aos-delay="100">

        </h3>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb bg-transparent justify-content-center">
                <li class="breadcrumb-item"><a href="<?= base_url() ?>">Beranda</a></li>
                <li class="breadcrumb-item active " aria-current="page">Profil</li>
            </ol>
        </nav>
    </div>
</section>
<!-- End Hero -->

<!-- ======= Visi Misi ======= -->
<section id="why-us" class="why-us pt-5 mb-5">
    <div class="container " data-aos="fade-up">
        <div class="section-title">
            <h2>Profil</h2>
            <p>Profil Wilayah Desa</p>
        </div>
        <div class="row">
            <div class="col-lg-5 align-items-stretch video-box" style='background-image: url("assets/img/why-us.jpg");'
                data-aos="zoom-in" data-aos-delay="100">
                <a href="#" class="venobox play-btn mb-4" data-vbtype="video" data-autoplay="true"></a>
            </div>

            <div class="col-lg-7 d-flex flex-column justify-content-center align-items-stretch">

                <div class="content">
                    <h3>Kenal Lebih Dekat <strong>Tentang Kami</strong></h3>
                    <p>
                        <?= $frontdatarow->tentang; ?>
                    </p>
                </div>

                <div class="accordion-list">
                    <ul>

                        <li>
                            <a data-bs-toggle="collapse" data-bs-target="#accordion-list-2"
                                class="collapsed"><span>01</span> Visi<i class="bx bx-chevron-down icon-show"></i><i
                                    class="bx bx-chevron-up icon-close"></i></a>
                            <div id="accordion-list-2" class="collapse" data-bs-parent=".accordion-list">
                                <p>
                                    <?= $frontdatarow->frontdata_visi; ?>
                                </p>
                            </div>
                        </li>

                        <li>
                            <a data-bs-toggle="collapse" data-bs-target="#accordion-list-3"
                                class="collapsed"><span>02</span> Misi <i class="bx bx-chevron-down icon-show"></i><i
                                    class="bx bx-chevron-up icon-close"></i></a>
                            <div id="accordion-list-3" class="collapse" data-bs-parent=".accordion-list">
                                <p>
                                    <?= $frontdatarow->frontdata_misi; ?>

                                </p>
                            </div>
                        </li>

                    </ul>
                </div>

            </div>

        </div>



    </div>
</section>
<!-- ======= End Visi Misi ======= -->
<!-- ======= Demografi======= -->
<section id="why-us" class="why-us section-bg pt-5 mb-5">
    <div class="container " data-aos="fade-up">
        <div class="section-title">
            <h2>Lokasi</h2>
            <p>Demografi Desa</p>
        </div>
        <div class="row">
            <div class="col-lg-7 ">

                <div class="content">
                    <!-- <h3>Kenal Lebih Dekat <strong>Tentang Kami</strong></h3> -->
                    <p>
                        <?= $frontdatarow->demografi; ?>
                    </p>
                </div>


            </div>
            <div class="col-5">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15816.13614832776!2d109.81915012444787!3d-7.679489696089831!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7ac7151f6b1601%3A0xe852db57ac418102!2sMegulung%20Kidul%2C%20Pituruh%2C%20Kabupaten%20Purworejo%2C%20Jawa%20Tengah!5e0!3m2!1sid!2sid!4v1611461147427!5m2!1sid!2sid"
                    width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false"
                    tabindex="0"></iframe>
            </div>
            <!-- <div class="col-lg-5 align-items-stretch video-box" style='background-image: url("assets/img/why-us.jpg");'
                data-aos="zoom-in" data-aos-delay="100">
                <a href="#" class="venobox play-btn mb-4" data-vbtype="video" data-autoplay="true"></a>
            </div> -->

        </div>

    </div>
</section>
<!-- ======= End Demografi======= -->