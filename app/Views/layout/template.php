<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Jupiter FC Official Site</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="<?= base_url('favicon.ico') ?>" rel="icon">
  <link href="<?= base_url('assets-frontend/img/apple-touch-icon.png') ?>" rel="apple-touch-icon">


  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?= base_url('assets-frontend/vendor/aos/aos.css') ?>" rel="stylesheet">
  <link href="<?= base_url('assets-frontend/vendor/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet">
  <link href="<?= base_url('assets-frontend/vendor/bootstrap-icons/bootstrap-icons.css') ?>" rel="stylesheet">
  <link href="<?= base_url('assets-frontend/vendor/boxicons/css/boxicons.min.css') ?>" rel="stylesheet">
  <link href="<?= base_url('assets-frontend/vendor/glightbox/css/glightbox.min.css') ?>" rel="stylesheet">
  <link href="<?= base_url('assets-frontend/vendor/remixicon/remixicon.css') ?>" rel="stylesheet">
  <link href="<?= base_url('assets-frontend/vendor/swiper/swiper-bundle.min.css') ?>" rel="stylesheet">


  <!-- Template Main CSS File -->
  <link href="<?= base_url('assets-frontend/css/style.css')?>" rel="stylesheet">
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><a href="index.html">JUPITER</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto"><img src="assets-frontend/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link" href="..">Home</a></li>
          <li><a class="nav-link" href="../pages/player_list">Player</a></li>
          <li><a class="nav-link" href="../pages/schedule">Schedule</a></li>
          <li><a class="nav-link" href="../pages/finance">Finance</a></li>
          <li><a class="nav-link" href="../pages/staff">Staff</a></li>
          <li><a class="nav-link" href="../pages/gallery">Gallery</a></li>
          <li><a class="getstarted" href="../login">Join Us</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

    <?= $this-> renderSection('content'); ?>

   <!-- ======= Footer ======= -->
   <footer id="footer">

        <!-- <div class="footer-newsletter">
        <div class="container">
            <div class="row justify-content-center">
            <div class="col-lg-6">
                <h4>Join Our Newsletter</h4>
                <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
                <form action="" method="post">
                <input type="email" name="email"><input type="submit" value="Subscribe">
                </form>
            </div>
            </div>
        </div>
        </div> -->

        <div class="footer-top">
        <div class="container">
            <div class="row">

            <div class="col-lg-3 col-md-6 footer-contact">
                <h3>JUPITER</h3>
                <p>
                Ketintang <br>
                Surabaya, SUB 535022<br>
                Indonesia <br><br>
                <strong>Phone:</strong> +63 5589 55698 55<br>
                <strong>Email:</strong> info@jupiter.com<br>
                </p>
            </div>

            <div class="col-lg-3 col-md-6 footer-links">
                <h4>Useful Links</h4>
                <ul>
                <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="#">Player</a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="#">Schedule</a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="#">Finance</a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="#">Staff</a></li>
                </ul>
            </div>

            

            <div class="col-lg-3 col-md-6 footer-links">
                <h4>Our Social Networks</h4>
                <p>Get Connected with Us</p>
                <div class="social-links mt-3">
                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                </div>
            </div>

            </div>
        </div>
        </div>

        <div class="container footer-bottom clearfix">
        <div class="copyright">
            &copy; Copyright <strong><span>J.FC</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
            <!-- All the links in the footer should remain intact. -->
            <!-- You can delete the links only if you purchased the pro version. -->
            <!-- Licensing information: https://bootstrapmade.com/license/ -->
            <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/ -->
            Designed by <a href="https://www.youtube.com/channel/UCP0BspO_AMEe3aQqqpo89Dg">JupiterDesign</a>
        </div>
        </div>
        </footer><!-- End Footer -->

        <!-- <div id="preloader"></div> -->
        <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

        <!-- Vendor JS Files -->
        <script src="<?= base_url('assets-frontend/vendor/aos/aos.js') ?>"></script>
        <script src="<?= base_url('assets-frontend/vendor/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
        <script src="<?= base_url('assets-frontend/vendor/glightbox/js/glightbox.min.js') ?>"></script>
        <script src="<?= base_url('assets-frontend/vendor/isotope-layout/isotope.pkgd.min.js') ?>"></script>
        <script src="<?= base_url('assets-frontend/vendor/swiper/swiper-bundle.min.js') ?>"></script>
        <script src="<?= base_url('assets-frontend/vendor/waypoints/noframework.waypoints.js') ?>"></script>
        <script src="<?= base_url('assets-frontend/vendor/php-email-form/validate.js') ?>"></script>


        <!-- Template Main JS File -->
        <script src="<?= base_url('assets-frontend/js/main.js') ?>"></script>


</body>

</html>