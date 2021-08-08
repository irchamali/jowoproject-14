<?= $this->extend('layouts_home/template_home') ?>
<!-- ======= Header ======= -->

<?= $this->section('content') ?>
<main id="main">

  <!-- ======= About Section ======= -->
  <section id="foz" class="about">
    <div class="container">

      <div class="section-title" data-aos="zoom-out">
        <h2>Source</h2>
        <p>Forum Zakat</p>
      </div>

      <div class="row content" data-aos="fade-up">
        <iframe width="100%" height="600"
          src="https://datastudio.google.com/embed/reporting/cd4c54bb-e825-4c68-a3c9-4626320406ea/page/MPkRC"
          frameborder="0" style="border:0" allowfullscreen></iframe>
        <div class="col-lg-12">

        </div>

      </div>
  </section><!-- End About Section -->

  <!-- ======= Features Section ======= -->
  <section id="nation" class="features">
    <div class="container">

      <div class="section-title" data-aos="zoom-out">
        <h2>Source</h2>
        <p>Kawal Covid</p>
      </div>

      <ul class="nav nav-tabs row d-flex">
        <li class="nav-item col-3" data-aos="zoom-in">
          <a class="nav-link active show" data-bs-toggle="tab" href="#tab-1">
            <i class="ri-user-add-line"></i>
            <h4 class="d-none d-lg-block">Total Positif<br><?= $nasional[0]['positif']; ?></h4>
          </a>
        </li>
        <li class="nav-item col-3" data-aos="zoom-in" data-aos-delay="100">
          <a class="nav-link" data-bs-toggle="tab" href="#tab-2">
            <i class="ri-body-scan-line"></i>
            <h4 class="d-none d-lg-block">Total Sembuh<br><?= $nasional[0]['sembuh']; ?></h4>
          </a>
        </li>
        <li class="nav-item col-3" data-aos="zoom-in" data-aos-delay="200">
          <a class="nav-link" data-bs-toggle="tab" href="#tab-3">
            <i class="ri-user-heart-line"></i>
            <h4 class="d-none d-lg-block">Total Meninggal<br><?= $nasional[0]['meninggal']; ?></h4>
          </a>
        </li>
        <li class="nav-item col-3" data-aos="zoom-in" data-aos-delay="300">
          <a class="nav-link" data-bs-toggle="tab" href="#tab-4">
            <i class="ri-user-follow-line"></i>
            <h4 class="d-none d-lg-block">Total Dirawat<br><?= $nasional[0]['dirawat']; ?></h4>
          </a>
        </li>
      </ul>

      <div class="tab-content" data-aos="fade-up">
          <div class="tab-pane active show" id="tab-1">
            <div class="row">
              <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
                <div class="card">
                <div class="card-header">
                  <h3 class="card-title">Data Nasional</h3>
                </div>
                <div class="card-body table-responsive p-0" style="height: 400px;">
                  <table class="table table-hover table-head-fixed">
                    <thead>
                      <tr>
                        <th>No.</th>
                        <th>Provinsi</th>
                        <th>Positif</th>
                        <th>Sembuh</th>
                        <th>Meninggal</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php $no=1; foreach ($provinsi as $key => $value) { ?>
                      <tr>
                        <td><?= $no++; ?></td>
                        <td><?= $value['attributes']['Provinsi']; ?></td>
                        <td><?= $value['attributes']['Kasus_Posi']; ?></td>
                        <td><?= $value['attributes']['Kasus_Semb']; ?></td>
                        <td><?= $value['attributes']['Kasus_Meni']; ?></td>
                      </tr>
                      <?php } ?>
                    </tbody>
                  </table>
                </div>
              </div>
              </div>
              <div class="col-lg-6 order-1 order-lg-2 text-center">
                <div id="mapid" style="height: 450px;"></div>
              </div>
            </div>
          </div>
          <div class="tab-pane" id="tab-2">
            <div class="row">
              <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
                <h3>Data Nasional</h3>
                <p>
                  Data Covid-19 Nasional berdasarkan 34 Provinsi yang ada di Indonesia 
                </p>
                <p class="fst-italic">
                  REST API Resources by <a href="http://kawalcorona.com">KawalCorona.com</a> and <a href="https://bnpb-inacovid19.hub.arcgis.com/">InaCOVID-19</a>
                </p>
                <ul>
                  <li><i class="ri-check-double-line"></i> Update terakhir: <?= date('d-m-Y'); ?></li>
                </ul>
              </div>
              <div class="col-lg-6 order-1 order-lg-2 text-center">
                <!-- <img src="assets/img/features-2.png" alt="" class="img-fluid"> -->
              </div>
            </div>
          </div>
          <div class="tab-pane" id="tab-3">
            <div class="row">
              <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
              <h3>Data Nasional</h3>
                <p>
                  Data Covid-19 Nasional berdasarkan 34 Provinsi yang ada di Indonesia 
                </p>
                <p class="fst-italic">
                  REST API Resources by <a href="http://kawalcorona.com">KawalCorona.com</a> and <a href="https://bnpb-inacovid19.hub.arcgis.com/">InaCOVID-19</a>
                </p>
                <ul>
                  <li><i class="ri-check-double-line"></i> Update terakhir: <?= date('d-m-Y'); ?></li>
                </ul>
              </div>
              <div class="col-lg-6 order-1 order-lg-2 text-center">
                <!-- <img src="assets/img/features-3.png" alt="" class="img-fluid"> -->
              </div>
            </div>
          </div>
          <div class="tab-pane" id="tab-4">
            <div class="row">
              <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
              <h3>Data Nasional</h3>
                <p>
                  Data Covid-19 Nasional berdasarkan 34 Provinsi yang ada di Indonesia 
                </p>
                <p class="fst-italic">
                  REST API Resources by <a href="http://kawalcorona.com">KawalCorona.com</a> and <a href="https://bnpb-inacovid19.hub.arcgis.com/">InaCOVID-19</a>
                </p>
                <ul>
                  <li><i class="ri-check-double-line"></i> Update terakhir: <?= date('d-m-Y'); ?></li>
                </ul>
              </div>
              <div class="col-lg-6 order-1 order-lg-2 text-center">
                <!-- <img src="assets/img/features-4.png" alt="" class="img-fluid"> -->
              </div>
            </div>
          </div>
        </div>

    </div>
  </section><!-- End Features Section -->

  <!-- ======= Cta Section ======= -->
  <section id="cta" class="cta">
    <div class="container">

      <div class="row" data-aos="zoom-out">
        <div class="col-lg-9 text-center text-lg-start">
          <h3>Call To Action</h3>
          <p> Welcome to Satgas Covid-19 Sites by NU Care, let's join for give donation for patient of
            Covid-19 in Indonesia with click button below.</p>
        </div>
        <div class="col-lg-3 cta-btn-container text-center">
          <a class="cta-btn align-middle" href="https://nucare.id/program">Call To Action</a>
        </div>
      </div>

    </div>
  </section><!-- End Cta Section -->

<!-- ======= Testimonials Section ======= -->
<section id="testimonials" class="testimonials">
        <div class="container">

            <div class="section-title" data-aos="zoom-out">
                <h2>Supported</h2>
                <p>Official Logo Member</p>
            </div>

            <div class="testimonials-slider swiper-container" data-aos="fade-up" data-aos-delay="100">
                <div class="swiper-wrapper">

                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <img src="<?= base_url(''); ?>/assets/selecao/img/apple-touch-icon.png"
                                class="testimonial-img" alt="">
                            <h3>Satgas Covid-19</h3>
                            <h4>NU Care</h4><br>
                        </div>
                    </div><!-- End testimonial item -->

                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <img src="<?= base_url(''); ?>/assets/selecao/img/apple-touch-icon2.png"
                                class="testimonial-img" alt="">
                            <h3>Satgas Covid-19</h3>
                            <h4>LazisNU</h4><br>
                        </div>
                    </div><!-- End testimonial item -->

                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <img src="<?= base_url(''); ?>/assets/selecao/img/apple-touch-icon.png"
                                class="testimonial-img" alt="">
                            <h3>Satgas Covid-19</h3>
                            <h4>NU Care</h4><br>
                        </div>
                    </div><!-- End testimonial item -->

                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <img src="<?= base_url(''); ?>/assets/selecao/img/apple-touch-icon2.png"
                                class="testimonial-img" alt="">
                            <h3>Satgas Covid-19</h3>
                            <h4>LazisNU</h4><br>
                        </div>
                    </div><!-- End testimonial item -->

                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <img src="<?= base_url(''); ?>/assets/selecao/img/apple-touch-icon.png"
                                class="testimonial-img" alt="">
                            <h3>Satgas Covid-19</h3>
                            <h4>NU Care</h4><br>
                        </div>
                    </div><!-- End testimonial item -->

                </div>
                <div class="swiper-pagination"></div>
            </div>

        </div>
    </section>
    <!-- End Testimonials Section -->

  <!-- ======= F.A.Q Section ======= -->
  <!-- <section id="faq" class="faq">
      <div class="container">

        <div class="section-title" data-aos="zoom-out">
          <h2>F.A.Q</h2>
          <p>Frequently Asked Questions</p>
        </div>

        <ul class="faq-list">

          <li>
            <div data-bs-toggle="collapse" class="collapsed question" href="#faq1">Non consectetur a erat nam at lectus urna duis? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
            <div id="faq1" class="collapse" data-bs-parent=".faq-list">
              <p>
                Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet non curabitur gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus non.
              </p>
            </div>
          </li>

          <li>
            <div data-bs-toggle="collapse" href="#faq2" class="collapsed question">Feugiat scelerisque varius morbi enim nunc faucibus a pellentesque? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
            <div id="faq2" class="collapse" data-bs-parent=".faq-list">
              <p>
                Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.
              </p>
            </div>
          </li>

          <li>
            <div data-bs-toggle="collapse" href="#faq3" class="collapsed question">Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
            <div id="faq3" class="collapse" data-bs-parent=".faq-list">
              <p>
                Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus pulvinar elementum integer enim. Sem nulla pharetra diam sit amet nisl suscipit. Rutrum tellus pellentesque eu tincidunt. Lectus urna duis convallis convallis tellus. Urna molestie at elementum eu facilisis sed odio morbi quis
              </p>
            </div>
          </li>

          <li>
            <div data-bs-toggle="collapse" href="#faq4" class="collapsed question">Ac odio tempor orci dapibus. Aliquam eleifend mi in nulla? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
            <div id="faq4" class="collapse" data-bs-parent=".faq-list">
              <p>
                Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.
              </p>
            </div>
          </li>

          <li>
            <div data-bs-toggle="collapse" href="#faq5" class="collapsed question">Tempus quam pellentesque nec nam aliquam sem et tortor consequat? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
            <div id="faq5" class="collapse" data-bs-parent=".faq-list">
              <p>
                Molestie a iaculis at erat pellentesque adipiscing commodo. Dignissim suspendisse in est ante in. Nunc vel risus commodo viverra maecenas accumsan. Sit amet nisl suscipit adipiscing bibendum est. Purus gravida quis blandit turpis cursus in
              </p>
            </div>
          </li>

          <li>
            <div data-bs-toggle="collapse" href="#faq6" class="collapsed question">Tortor vitae purus faucibus ornare. Varius vel pharetra vel turpis nunc eget lorem dolor? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
            <div id="faq6" class="collapse" data-bs-parent=".faq-list">
              <p>
                Laoreet sit amet cursus sit amet dictum sit amet justo. Mauris vitae ultricies leo integer malesuada nunc vel. Tincidunt eget nullam non nisi est sit amet. Turpis nunc eget lorem dolor sed. Ut venenatis tellus in metus vulputate eu scelerisque. Pellentesque diam volutpat commodo sed egestas egestas fringilla phasellus faucibus. Nibh tellus molestie nunc non blandit massa enim nec.
              </p>
            </div>
          </li>

        </ul>

      </div>
    </section> -->
  <!-- End F.A.Q Section -->

</main><!-- End #main -->
<?= $this->endSection() ?>