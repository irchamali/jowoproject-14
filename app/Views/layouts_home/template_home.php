<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Satgas Covid-19 - NU Care</title>
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
    <!-- LeafletJS -->
    <link href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" rel="stylesheet">
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>

    <!-- Font Awesome -->
    <link href="<?= base_url(''); ?>/assets/adminlte3/plugins/fontawesome-free/css/all.min.css" rel="stylesheet" >
    <!-- daterange picker -->
    <link href="<?= base_url(''); ?>/assets/adminlte3/plugins/daterangepicker/daterangepicker.css" rel="stylesheet" >
    <!-- SweetAlert2 -->
    <link href="<?= base_url(''); ?>/assets/adminlte3/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css" rel="stylesheet" >
    <!-- Toastr -->
    <link href="<?= base_url(''); ?>/assets/adminlte3/plugins/toastr/toastr.min.css" rel="stylesheet" >
    <!-- DataTables -->
    <link href="<?= base_url(''); ?>/assets/adminlte3/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css" rel="stylesheet" >
    <link href="<?= base_url(''); ?>/assets/adminlte3/plugins/datatables-responsive/css/responsive.bootstrap4.min.css" rel="stylesheet" >
    <!-- Tempusdominus Bbootstrap 4 -->
    <link href="<?= base_url(''); ?>/assets/adminlte3/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" >
    <!-- overlayScrollbars -->
    <link href="<?= base_url(''); ?>/assets/adminlte3/plugins/overlayScrollbars/css/OverlayScrollbars.min.css" rel="stylesheet" >
    <!-- Theme style -->
    <!-- <link href="<?= base_url(''); ?>/assets/adminlte3/dist/css/adminlte.min.css" rel="stylesheet" > -->

</head>

<body>

    <!-- ======= Header ======= -->
    <?= $this->renderSection('header') ?>

    <!-- ======= Content ======= -->
    <?= $this->renderSection('content') ?>

    <!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="container">
            <h3>satgas</h3>
            <p>Satuan Gugus Tugas Penanganan Covid-19</p>
            <div class="social-links">
                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
            <div class="copyright">
                &copy; Copyright <strong><span><a href="https://nucare.id/">nucare.id</a></span></strong> 2021
            </div>
        </div>
    </footer><!-- End Footer -->

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

    <!-- bs-custom-file-input -->
    <!-- <script src="/assets/adminlte3/plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script> -->
    <!-- InputMask -->
    <!-- <script src="/assets/adminlte3/plugins/moment/moment.min.js"></script>
    <script src="/assets/adminlte3/plugins/inputmask/min/jquery.inputmask.bundle.min.js"></script> -->
    <!-- date-range-picker -->
    <!-- <script src="/assets/adminlte3/plugins/daterangepicker/daterangepicker.js"></script> -->
    <!-- Tempusdominus Bootstrap 4 -->
    <!-- <script src="/assets/adminlte3/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script> -->
    <!-- Template Main JS File -->
    <!-- <script src="/assets/bizland/js/main.js"></script> -->
    <!-- jQuery -->
    <script src="/assets/adminlte3/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="/assets/adminlte3/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Toastr -->
    <!-- <script src="/assets/adminlte3/plugins/toastr/toastr.min.js"></script> -->
    <!-- DataTables -->
    <script src="/assets/adminlte3/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="/assets/adminlte3/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="/assets/adminlte3/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="/assets/adminlte3/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <!-- overlayScrollbars -->
    <script src="/assets/adminlte3/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <!-- AdminLTE App -->
    <!-- <script src="/assets/adminlte3/dist/js/adminlte.min.js"></script> -->
    <!-- AdminLTE for demo purposes -->
    <!-- <script src="/assets/adminlte3/dist/js/demo.js"></script> -->
    <script>
        $(function () {
            $("#example1").DataTable();
            $('#example2').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": false,
                "ordering": true,
                "info": true,
                "autoWidth": false,
            });
        });
    </script>

    <script>
        var mymap = L.map('mapid').setView([-2.974481, 115.022582], 4);
        L.tileLayer(
            'https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
                attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, ' +
                    'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
                id: 'mapbox/streets-v11',
            }).addTo(mymap);
            <?php foreach ($petaprov['features'] as $key => $value) { ?>
                L.marker([<?= $value['geometry']['y'] ?>, <?= $value['geometry']['x'] ?>]).addTo(mymap)
                .bindPopup("<b>Provinsi: <?= $value['attributes']['Provinsi'] ?></b><br>"+"Positif: <?= $value['attributes']['Kasus_Posi'] ?><br>"
                +"Sembuh: <?= $value['attributes']['Kasus_Semb'] ?><br>"+"Meninggal: <?= $value['attributes']['Kasus_Meni'] ?><br>").openPopup();
            <?php } ?>
    </script>
    <script>
        var mymap = L.map('mapid2').setView([-2.974481, 115.022582], 6);
        L.tileLayer(
            'https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
                attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, ' +
                    'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
                id: 'mapbox/streets-v11',
            }).addTo(mymap);
            <?php foreach ($petaprov['features'] as $key => $value) { ?>
                L.marker([<?= $value['geometry']['y'] ?>, <?= $value['geometry']['x'] ?>]).addTo(mymap)
                .bindPopup("<b>Provinsi: <?= $value['attributes']['Provinsi'] ?></b><br>"+"Positif: <?= $value['attributes']['Kasus_Posi'] ?><br>"
                +"Sembuh: <?= $value['attributes']['Kasus_Semb'] ?><br>"+"Meninggal: <?= $value['attributes']['Kasus_Meni'] ?><br>").openPopup();
            <?php } ?>
    </script>

</body>

</html>