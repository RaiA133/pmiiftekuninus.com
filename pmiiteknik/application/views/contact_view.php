<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title><?= $title; ?> | <?= $site_title; ?></title>
    <meta content="<?= $site_desc; ?>" name="description">
    <meta content="PMII, PR, PK, PC, PKC, PB, Pergerakan Mahasiswa Islam Indonesia" name="keywords">

    <!-- Favicons -->
    <link href="<?= base_url() ?>assets/frontend/img/favicon.png" rel="icon">
    <link href="<?= base_url() ?>assets/frontend/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="<?= base_url() ?>assets/frontend/vendor/aos/aos.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets/frontend/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets/frontend/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets/frontend/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets/frontend/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets/frontend/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="<?= base_url() ?>assets/frontend/css/style.css" rel="stylesheet">

    <!-- =======================================================
  * Template Name: BizLand - v3.5.0
  * Template URL: https://bootstrapmade.com/bizland-bootstrap-business-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <!-- ======= Header ======= -->
    <?= $header; ?>
    <!-- End Header -->

    <main id="main" data-aos="fade-up">

        <!-- ======= Breadcrumbs ======= -->
        <!-- <section class="breadcrumbs">
            <div class="container">

                <div class="d-flex justify-content-between align-items-center">
                    <h2>Hubungi Kami</h2>
                    <ol>
                        <li><a href="<?= base_url() ?>">Home</a></li>
                        <li><?= $title; ?></li>
                    </ol>
                </div>

            </div>
        </section> -->
        <!-- End Breadcrumbs -->

        <section id="contact" class="contact">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Kontak</h2>
                </div>

                <div class="row" data-aos="fade-up" data-aos-delay="100">
                    <div class="col-lg-6">
                        <div class="info-box mb-4">
                            <i class="bx bx-map"></i>
                            <h3>Alamat</h3>
                            <p><?= $site_loc; ?></p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="info-box  mb-4">
                            <i class="bx bx-envelope"></i>
                            <a href="mailto:pmiirayonteknik06@gmail.com?subject=mau%tanya"><h3>Email</h3></a>    
                            <p><?= $site_mail; ?></p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="info-box  mb-4">
                            <i class="bx bx-phone-call"></i>
                            <a href="https://whatsa.me/6287823966955" target="_blank"><h3 >WhatsApp</h3></a>
                            <p><?= $site_wa; ?></p>
                        </div>
                    </div>

                </div>

                <div class="row" data-aos="fade-up" data-aos-delay="100">

                    <div class="col-lg-12 md-6">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15842.147718345923!2d107.6442723!3d-6.9458098!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xde206320d143c440!2sUniversitas%20Islam%20Nusantara!5e0!3m2!1sen!2sid!4v1662886835648!5m2!1sen!2sid" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        <!-- <iframe class="mb-4 mb-lg-0" src="https://g.page/Uninus?share" frameborder="0" style="border:0; width: 100%; height: 384px;" allowfullscreen></iframe> -->
                    </div>

                </div>

            </div>
        </section>

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <?= $footer; ?>
    <!-- End Footer -->

    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="<?= base_url() ?>assets/frontend/vendor/aos/aos.js"></script>
    <script src="<?= base_url() ?>assets/frontend/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url() ?>assets/frontend/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="<?= base_url() ?>assets/frontend/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="<?= base_url() ?>assets/frontend/vendor/php-email-form/validate.js"></script>
    <script src="<?= base_url() ?>assets/frontend/vendor/purecounter/purecounter.js"></script>
    <script src="<?= base_url() ?>assets/frontend/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="<?= base_url() ?>assets/frontend/vendor/waypoints/noframework.waypoints.js"></script>

    <!-- Template Main JS File -->
    <script src="<?= base_url() ?>assets/frontend/js/main.js"></script>

</body>

</html>