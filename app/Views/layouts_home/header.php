<header id="header" class="fixed-top d-flex align-items-center  header-transparent ">
    <div class="container d-flex align-items-center justify-content-between">

        <div class="logo">
            <!-- <h1><a href="index.html">Satgas</a></h1> -->
            <!-- Uncomment below if you prefer to use an image logo -->
            <a href="<?= base_url(''); ?>"><img src="<?= base_url(''); ?>/assets/selecao/img/logo1.png" alt="" class="img-fluid"></a>
        </div>

        <nav id="navbar" class="navbar">
            <ul>
                <li><a class="nav-link scrollto" href="<?= base_url(''); ?>">Home</a></li>
                <li><a class="nav-link scrollto" href="<?= base_url(''); ?>#foz">Data FOZ</a></li>
                <li><a class="nav-link scrollto" href="<?= base_url('indonesia'); ?>">Data Nasional</a></li>
                <li><a class="nav-link scrollto" href="<?= base_url('dunia'); ?>">Data Global</a></li>
                <li class="dropdown"><a href="#"><span>Analisis Spasial</span> <i class="bi bi-chevron-down"></i></a>
                    <ul>
                        <!-- <li><a href="#">Statistik Harian</a></li> -->
                        <li><a href="#">RS Rujukan</a></li>
                        <li><a href="#">Laboratorium</a></li>
                        <li><a href="#">Kecamatan Rawan</a></li>
                    </ul>
                </li>
                <li><a class="nav-link scrollto" href="#">Login</a></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->

    </div>
</header><!-- End Header -->

<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex flex-column justify-content-end align-items-center">
    <div id="heroCarousel" data-bs-interval="5000" class="container carousel carousel-fade" data-bs-ride="carousel">
    </div>
    <br><br>
    <svg class="hero-waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
        viewBox="0 24 150 28 " preserveAspectRatio="none">
        <defs>
            <path id="wave-path" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z">
        </defs>
        <g class="wave1">
            <use xlink:href="#wave-path" x="50" y="3" fill="rgba(255,255,255, .1)">
        </g>
        <g class="wave2">
            <use xlink:href="#wave-path" x="50" y="0" fill="rgba(255,255,255, .2)">
        </g>
        <g class="wave3">
            <use xlink:href="#wave-path" x="50" y="9" fill="#fff">
        </g>
    </svg>

</section><!-- End Hero -->