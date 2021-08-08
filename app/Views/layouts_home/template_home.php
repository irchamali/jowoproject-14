<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title><?= $title; ?></title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="<?= base_url(''); ?>/assets/selecao/img/favicon.png" rel="icon">
    <link href="<?= base_url(''); ?>/assets/selecao/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="<?= base_url(''); ?>/assets/selecao/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="<?= base_url(''); ?>/assets/selecao/vendor/aos/aos.css" rel="stylesheet">
    <link href="<?= base_url(''); ?>/assets/selecao/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= base_url(''); ?>/assets/selecao/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="<?= base_url(''); ?>/assets/selecao/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="<?= base_url(''); ?>/assets/selecao/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="<?= base_url(''); ?>/assets/selecao/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="<?= base_url(''); ?>/assets/selecao/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <!-- Template Main CSS File -->
    <link href="<?= base_url(''); ?>/assets/selecao/css/style.css" rel="stylesheet">
    
</head>

<body>

    <!-- ======= Header ======= -->
    <?= $this->include('layouts_home/header') ?>

    <!-- ======= Content ======= -->
    <?= $this->renderSection('content') ?>

    <!-- ======= Footer ======= -->
    <?= $this->include('layouts_home/footer') ?>
    <!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="<?= base_url(''); ?>/assets/selecao/vendor/aos/aos.js"></script>
    <script src="<?= base_url(''); ?>/assets/selecao/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url(''); ?>/assets/selecao/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="<?= base_url(''); ?>/assets/selecao/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="<?= base_url(''); ?>/assets/selecao/vendor/php-email-form/validate.js"></script>
    <script src="<?= base_url(''); ?>/assets/selecao/vendor/swiper/swiper-bundle.min.js"></script>
    <!-- Template Main JS File -->
    <script src="<?= base_url(''); ?>/assets/selecao/js/main.js"></script>

</body>

</html>