<!-- ======= Hero Section ======= -->
<section id="hero_sub_head" class="d-flex justify-content-center mt-5"
    style="background-image: url('<?= base_url() ?>assets/img/slider/<?= $sliderRow->img_slider; ?>');">
    <div id="breadcrumb" class="container " data-aos="zoom-out" data-aos-delay="100">

        </h3>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb bg-transparent justify-content-center">
                <li class="breadcrumb-item"><a href="<?= base_url() ?>">Beranda</a></li>
                <li class="breadcrumb-item active " aria-current="page">Pemerintahan</li>
            </ol>
        </nav>
    </div>
</section>
<!-- End Hero -->

<!-- ======= Team Section ======= -->
<section id="team" class="team section-bg">
    <div class="container" data-aos="fade-up">

        <div class="section-title">
            <h2>BPD</h2>
            <p>Badan Permusyawaratan Desa</p>
        </div>

        <div class="row d-flex justify-content-center">
            <?php
            if (isset($pimpinan)) {
                foreach ($pimpinan as $pmf) {
            ?>

            <div class="col-xl-3 col-lg-4 col-md-6">
                <div class="member" data-aos="zoom-in" data-aos-delay="100">
                    <img src="<?= base_url() ?>./assets/img/pimpinan/<?= $pmf['img_pimpinan'] ?>" class="img-fluid"
                        alt="">
                    <div class="member-info">
                        <div class="member-info-content">
                            <h4><?= $pmf['nama_pimpinan']; ?></h4>
                            <span><?= $pmf['jabatan_pimpinan']; ?></span>
                            <a href="" class="btn-learn-more mt-1" data-bs-toggle="modal"
                                data-bs-target="#staticBackdrop"
                                onclick="showuserdetail('<?= $pmf['idpimpinan']; ?>')">Selengkapnya
                                &rarr;</a>
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
    <!-- Button trigger modal -->


    <!-- Modal -->
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Detail Data dan Tupoksi Jabatan</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body" id="showData">

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                </div>
            </div>
        </div>
    </div>
</section><!-- End Team Section -->

<script>
function showuserdetail(id) {
    $.ajax({
        type: "GET",
        url: "<?=site_url('pemerintahan/userGetById');?>",
        data: "id=" + id,
        dataType: "json",

        success: function(response) {
            let showData = `<h5>${response[0].nama_pimpinan}</h5>
                    <p>${response[0].jabatan_pimpinan}</p><p>${response[0].tupoksi}</p>`;
            // $('#staticBackdrop').empty();
            $('#showData').html(showData);
        }
    });
}
</script>