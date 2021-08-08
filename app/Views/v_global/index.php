<?= $this->extend('layouts_home/template_global') ?>
<!-- ======= Header ======= -->

<?= $this->section('content') ?>
<main id="main">

    <!-- ======= Services Section ======= -->
    <section id="services" class="features">
        <div class="container">

            <div class="section-title" data-aos="zoom-out">
                <h2>Source</h2>
                <p>Kawal Corona</p>
            </div>

            <ul class="nav nav-tabs row d-flex">
                <li class="nav-item col-3" data-aos="zoom-in">
                    <a class="nav-link active show" data-bs-toggle="tab" href="#tab-1">
                        <i class="ri-user-add-line"></i>
                        <h4 class="d-none d-lg-block">Total Positif<br><?= $positif['value']; ?></h4>
                    </a>
                </li>
                <li class="nav-item col-3" data-aos="zoom-in" data-aos-delay="100">
                    <a class="nav-link" data-bs-toggle="tab" href="#tab-2">
                        <i class="ri-body-scan-line"></i>
                        <h4 class="d-none d-lg-block">Total Sembuh<br><?= $sembuh['value']; ?></h4>
                    </a>
                </li>
                <li class="nav-item col-3" data-aos="zoom-in" data-aos-delay="200">
                    <a class="nav-link" data-bs-toggle="tab" href="#tab-3">
                        <i class="ri-user-heart-line"></i>
                        <h4 class="d-none d-lg-block">Total Meninggal<br><?= $meninggal['value']; ?>
                        </h4>
                    </a>
                </li>
                <li class="nav-item col-3" data-aos="zoom-in" data-aos-delay="300">
                    <a class="nav-link" data-bs-toggle="tab" href="#tab-4">
                        <i class="ri-user-follow-line"></i>
                        <h4 class="d-none d-lg-block">See Indonesia Data</h4>
                    </a>
                </li>
            </ul>

            <div class="tab-content" data-aos="fade-up">
                <div class="tab-pane active show" id="tab-1">
                    <div class="row">
                        <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Data Global</h3>
                                </div>
                                <div class="card-body table-responsive p-0" style="height: 400px;">
                                    <table class="table table-hover table-head-fixed">
                                        <thead>
                                            <tr>
                                                <th>No.</th>
                                                <th>Negara</th>
                                                <th>Positif</th>
                                                <th>Sembuh</th>
                                                <th>Meninggal</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $no=1; foreach ($global as $key => $value) { ?>
                                            <tr>
                                                <td><?= $no++; ?></td>
                                                <td><?= $value['attributes']['Country_Region']; ?></td>
                                                <td><?= $value['attributes']['Confirmed']; ?></td>
                                                <td><?= $value['attributes']['Recovered']; ?></td>
                                                <td><?= $value['attributes']['Deaths']; ?></td>
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
                                REST API Resources by <a href="http://kawalcorona.com">KawalCorona.com</a>
                                and <a href="https://bnpb-inacovid19.hub.arcgis.com/">InaCOVID-19</a>
                            </p>
                            <ul>
                                <li><i class="ri-check-double-line"></i> Update terakhir:
                                    <?= date('d-m-Y'); ?></li>
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
                                REST API Resources by <a href="http://kawalcorona.com">KawalCorona.com</a>
                                and <a href="https://bnpb-inacovid19.hub.arcgis.com/">InaCOVID-19</a>
                            </p>
                            <ul>
                                <li><i class="ri-check-double-line"></i> Update terakhir:
                                    <?= date('d-m-Y'); ?></li>
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
                                REST API Resources by <a href="http://kawalcorona.com">KawalCorona.com</a>
                                and <a href="https://bnpb-inacovid19.hub.arcgis.com/">InaCOVID-19</a>
                            </p>
                            <ul>
                                <li><i class="ri-check-double-line"></i> Update terakhir:
                                    <?= date('d-m-Y'); ?></li>
                            </ul>
                        </div>
                        <div class="col-lg-6 order-1 order-lg-2 text-center">
                            <!-- <img src="assets/img/features-4.png" alt="" class="img-fluid"> -->
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- End Services Section -->

    <!-- ======= Cta Section ======= -->
    <section id="cta" class="cta">
        <div class="container">

            <div class="row" data-aos="zoom-out">
                <div class="col-lg-9 text-center text-lg-start">
                    <h3>Call To Action</h3>
                    <p> Welcome to Satgas Covid-19 Sites by NU Care, let's join for give donation for
                        patient of
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

</main><!-- End #main -->
<?= $this->endSection() ?>