  <!-- ======= Hero Section ======= -->
  <section id="hero">
      <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

          <ol class="carousel-indicators">
              <?php
                foreach ($slider as $key => $value) {
                    $active = ($key == 0) ? 'active' : '';
                    echo '<li data-target="#slider" data-slide-to="' . $key . '" class="' . $active . '"></li>';
                }
                ?>
          </ol>

          <div class="carousel-inner" role="listbox">
              <?php
                $i = 0;
                if (isset($slider)) {
                    foreach ($slider as $slide) {
                        $actives = '';
                        if ($i == 0) {
                            $actives = 'active';
                        } {
                ?>


              <!-- Slide 1 -->
              <div class="carousel-item <?= $actives ?>"
                  style="background-image: url(<?= base_url() ?>assets/img/slider/<?= $slide['img_slider']; ?>)">
                  <div class="carousel-container">
                      <div class="container">
                          <div class="col-7">
                              <h2 class="animate__animated animate__fadeInDown"><?= $frontdatarow->frontdata_head; ?>
                              </h2>
                              <p class="animate__animated animate__fadeInUp"><?= $frontdatarow->frontdata_subhead; ?>
                              </p>
                          </div>
                          <a href="<?= base_url() ?>profil"
                              class="btn-get-started animate__animated animate__fadeInUp scrollto">Selengkapnya</a>
                      </div>
                  </div>
              </div>

              <?php $i++;
                        } ?>
              <?php
                    }
                } else {
                    echo "";
                } ?>



          </div>

          <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
              <span class="carousel-control-prev-icon icofont-simple-left" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
          </a>

          <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
              <span class="carousel-control-next-icon icofont-simple-right" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
          </a>

      </div>
  </section><!-- End Hero -->

  <main id="main">

      <!-- ======= Why Us Section ======= -->

      <section id="why-us" class="why-us  pt-5 ">
          <div class="container " data-aos="fade-up">
              <div class="section-title">
                  <h2>Profil</h2>
                  <p>Tentang Desa </p>
              </div>
              <div class="row">
                  <div class="col-lg-5 align-items-stretch video-box"
                      style='background-image: url("assets/img/why-us.jpg");' data-aos="zoom-in" data-aos-delay="100">
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
                                      class="collapsed"><span>01</span> Visi<i
                                          class="bx bx-chevron-down icon-show"></i><i
                                          class="bx bx-chevron-up icon-close"></i></a>
                                  <div id="accordion-list-2" class="collapse" data-bs-parent=".accordion-list">
                                      <p>
                                          <?= $frontdatarow->frontdata_visi; ?>
                                      </p>
                                  </div>
                              </li>

                              <li>
                                  <a data-bs-toggle="collapse" data-bs-target="#accordion-list-3"
                                      class="collapsed"><span>02</span> Misi <i
                                          class="bx bx-chevron-down icon-show"></i><i
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
      </section><!-- End Why Us Section -->

      <!-- ======= Counts Section ======= -->
      <section id="counts" class="counts section-bg pt-5 mt-5">
          <div class="container" data-aos="fade-up">

              <div class="row no-gutters">

                  <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
                      <div class="count-box bg-white">
                          <i class="icofont-users-social"></i>
                          <span data-toggle="counter-up"><?= $frontdatarow->penduduk; ?></span>
                          <p><strong>Jumlah Penduduk</strong>
                      </div>
                  </div>

                  <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
                      <div class="count-box bg-white">
                          <i class="icofont-users-alt-5"></i>
                          <span data-toggle="counter-up"><?= $frontdatarow->keluarga; ?></span>
                          <p><strong>Jumlah Keluarga</strong>
                      </div>
                  </div>

                  <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
                      <div class="count-box bg-white">
                          <i class="icofont-ui-map"></i>
                          <span data-toggle="counter-up"><?= $frontdatarow->wilayah; ?></span>
                          <p><strong>Jumlah Wilayah Dusun</strong>
                      </div>
                  </div>

                  <div class="col-lg-3 col-md-6 d-md-flex  align-items-md-stretch">
                      <div class="count-box bg-white">
                          <i class="icofont-ui-home"></i>
                          <span data-toggle="counter-up"><?= $frontdatarow->umkm; ?></span>
                          <p><strong>Jumlah UMKM</strong>
                      </div>
                  </div>

              </div>

          </div>
      </section><!-- End Counts Section -->


      <!-- ======= Portfolio Section ======= -->
      <section id="portfolio" class="portfolio">
          <div class="container" data-aos="fade-up">

              <div class="section-title">
                  <h2>Berita Desa</h2>
                  <p>Dapatkan Berita Terbaru</p>
              </div>
              <div class="row">
                  <?php
                    if (isset($newsfront)) {
                        foreach ($newsfront as $nws) {
                    ?>
                  <div class="col-md-4">
                      <figure class="snip1208">
                          <img src="<?= base_url() ?>assets/img/news/<?= $nws['img_news'] ?>" alt="sample66" />
                          <div class="date">
                              <span class="day"><?= $nws['date_news']; ?></span><span
                                  class="month"><?= substr($nws['month_news'], 0, 3); ?></span>
                          </div>
                          <i class="ion-film-marker"></i>
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


          </div>
      </section>
      <!-- End Portfolio Section -->
      <!-- ======= Testimonials Section ======= -->
      <section id="testimonials" class="testimonials section-bg">
          <div class="container" data-aos="fade-up">

              <div class="section-title">
                  <h2>Kunjungan</h2>
                  <p>Ayo Ke Kertojayan</p>
              </div>

              <div class="owl-carousel testimonials-carousel">

                  <?php
                    $i = 0;
                    if (isset($testimonials)) {
                        foreach ($testimonials as $testi) {
                            $actives = '';
                            if ($i == 0) {
                                $actives = 'active';
                            } {
                    ?>

                  <div class="testimonial-wrap">
                      <div class="testimonial-item">
                          <img src="<?= base_url() ?>assets/img/testimonials/<?= $testi['link_testi'] ?>"
                              class="testimonial-img" alt="">
                          <h3><?= $testi['nama_testi']; ?></h3>
                          <h4><?= $testi['pek_testi']; ?></h4>
                          <p>
                              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                              <?= $testi['detil_testi']; ?>
                              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                          </p>
                      </div>
                  </div>
                  <?php $i++;
                            } ?>
                  <?php
                        }
                    } else {
                        echo "";
                    } ?>


              </div>

          </div>
      </section><!-- End Testimonials Section -->

      <!-- ======= Cta Section ======= -->
      <section id="cta" class="cta">
          <div class="container" data-aos="zoom-in">

              <div class="text-center">
                  <!-- <h3>Call To Action</h3> -->
                  <p> Jika anda ingin meminta penawaran, bertransaksi, bertanya atau ingin berkunjung ke Desa
                      Kertojayan, silahkan hubungi kami.</p>
                  <a class="cta-btn" href="#">Hubungi Kami</a>
              </div>

          </div>
      </section><!-- End Cta Section -->



      <!-- ======= Team Section ======= -->
      <section id="team" class="team">
          <div class="container" data-aos="fade-up">

              <div class="section-title">
                  <h2>Perangkat</h2>
                  <p>Pemerintah Desa</p>
              </div>

              <div class="row d-flex justify-content-center">
                  <?php
                    if (isset($pimpinanfront)) {
                        foreach ($pimpinanfront as $pmf) {
                    ?>

                  <div class="col-xl-3 col-lg-4 col-md-6">
                      <div class="member" data-aos="zoom-in" data-aos-delay="100">
                          <img src="<?= base_url() ?>./assets/img/pimpinan/<?= $pmf['img_pimpinan'] ?>"
                              class="img-fluid" alt="">
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


  </main><!-- End #main -->