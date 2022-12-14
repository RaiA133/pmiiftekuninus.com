<?php include "conn.php"; ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Perpustakaan Rayon || Pengurus Rayon Pergerakan Mahasiswa Islam Indonesia!</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <meta name="description" content="Perpustakaan Berbasis Web">
    <meta name="keywords" content="Perpustakaan, perpus, online, website">
    <meta name="perpustakaanku" content="PerpustakaanKU" />
    <!-- bootstrap 3.0.2 -->
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- font Awesome -->
    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Ionicons -->
    <link href="css/ionicons.min.css" rel="stylesheet" type="text/css" />
    <!-- Morris chart -->
    <link href="css/morris/morris.css" rel="stylesheet" type="text/css" />
    <!-- jvectormap -->
    <link href="css/jvectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css" />
    <!-- Date Picker -->
    <link href="css/datepicker/datepicker3.css" rel="stylesheet" type="text/css" />
    <!-- Daterange picker -->
    <link href="css/daterangepicker/daterangepicker-bs3.css" rel="stylesheet" type="text/css" />
    <!-- iCheck for checkboxes and radio inputs -->
    <link href="css/iCheck/all.css" rel="stylesheet" type="text/css" />
    <!-- bootstrap wysihtml5 - text editor -->
    <link href='http://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
    <!-- Theme style -->
    <link href="css/style.css" rel="stylesheet" type="text/css" />

    

    
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    <link href="/pmiiteknik/assets/frontend/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="/pmiiteknik/assets/frontend/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">

    
    


    <script language="JavaScript">
        var tanggallengkap = new String();
        var namahari = ("Minggu Senin Selasa Rabu Kamis Jumat Sabtu");
        namahari = namahari.split(" ");
        var namabulan = ("Januari Februari Maret April Mei Juni Juli Agustus September Oktober November Desember");
        namabulan = namabulan.split(" ");
        var tgl = new Date();
        var hari = tgl.getDay();
        var tanggal = tgl.getDate();
        var bulan = tgl.getMonth();
        var tahun = tgl.getFullYear();
        tanggallengkap = namahari[hari] + ", " + tanggal + " " + namabulan[bulan] + " " + tahun;

        var popupWindow = null;

        function centeredPopup(url, winName, w, h, scroll) {
            LeftPosition = (screen.width) ? (screen.width - w) / 2 : 0;
            TopPosition = (screen.height) ? (screen.height - h) / 2 : 0;
            settings = 'height=' + h + ',width=' + w + ',top=' + TopPosition + ',left=' + LeftPosition + ',scrollbars=' + scroll + ',resizable'
            popupWindow = window.open(url, winName, settings)
        }
    </script>

    <style type="text/css">

    </style>
</head>

<body class="skin-black">   
    
    <header id="perpus-header">
        <div class="container">

            <div class="pmii-logo"><a href="../e-book/"><img src="../assets/frontend/images/apple-touch-icon2.png">&nbsp<span> PMII TEKNIK</span>&nbsp</a></div> 

            <nav id="perpus-navbar" class="perpus-navbar">
                <ul>
                    <li><a class="nav-link scrollke" href="../#hero">Beranda</a></li>
                    <li><a class="nav-link scrollke" href="../#about">Tentang</a></li>
                    <li><a class="nav-link scrollke" href="../gallery">Galeri</a></li>
                    <li><a class="nav-link scrollke" href="../team">Pengurus</a></li>
                    <li class="perpus-dropdown"><a href="#"><span>Tulisan</span> <i class="bi bi-chevron-down"></i></a>
                    <ul>
                            <li><a href="../category/news">Berita</a></li>
                            <li><a href="../category/opinion">Agenda</a></li>
                            <li><a href="../category/articles">Karya</a></li>
                        </ul>
                    </li>
                    <li><a class="nav-link scrollto active" href="/e-book/">Perpustakaan</a></li>
                    <li><a class="nav-link scrollto" href="../perbaikan/">RayonShop</a></li>
                    <li><a class="nav-link scrollto" href="../contact">Kontak</a></li>
                </ul>
                <i class="bi tombol-dropdown-nav bi-list"></i>
            </nav><!-- .navbar -->

        </div>
    </header>

    <div class="wrapper row-offcanvas row-offcanvas-left">
        <!-- Left side column. contains the logo and sidebar -->

        <center>

            <!-- Main content -->
            <section class="content">

                <!-- Main row -->
                <div class="row">
                    <div class="col-lg-12">
                        <!-- <div class="alert alert-info alert-dismissable"> -->
                            <!-- <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> -->
                            <!--<marquee behavior="alternate" direction="left" onmouseover="this.stop();" onmouseout="this.start();">-->
                            <!-- <b>Selamat Datang di PerpustakaanKU, Untuk Login silahkan klik Icon User atau klik <a href="login.html">disini</a></b> -->
                        </div>
                    </div>

                    <div class="col-md-4">

                        <!-- DATA PENGUNJUNG HARI INI DI HIDDEN -->

                        <!-- <section class="panel">
                            <header class="panel-heading">
                                <b>Data Pengunjung Hari Ini</b>
                            </header>
                            <div class="panel-body table-responsive">
                                <?php
                                $tanggal = date("Y/m/d");
                                $query1 = "select * from pengunjung where tgl_kunjung='$tanggal'";
                                $tampil = mysqli_query($conn, $query1) or die(mysqli_error($conn));
                                ?>
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>Nama</th>
                                            <th>Tanggal</th>
                                            <th>Jam Berkunjung </th>
                                            <th>Keperluan</th>
                                        </tr>
                                    </thead>

                                    <?php while ($data = mysqli_fetch_array($tampil)) { ?>
                                        <tbody>
                                            <tr>
                                                <td><?php echo $data['nama']; ?></td>
                                                <td><?php echo $data['tgl_kunjung']; ?></td>
                                                <td><?php echo $data['jam_kunjung']; ?></td>
                                                <td><?php echo $data['perlu1']; ?></td>
                                            <?php
                                        }
                                            ?>

                                </table>
                                <hr />
                                <?php $tampil = mysqli_query($conn, "select * from pengunjung where tgl_kunjung='$tanggal'");
                                $user = mysqli_num_rows($tampil);
                                ?>
                                <center>
                                    <h4>Jumlah Pengunjung Hari Ini : <?php echo "$user"; ?> Orang </h4>
                                </center>
                            </div>
                        </section> -->


                    </div>
                    <!--end col-6 -->
                    <div class="col-md-4">
                        <section class="panel">
                            <header class="panel-heading">
                                <b>Buku Pengunjung</b>
                            </header>
                            <div class="panel-body">
                                <div class="twt-area">
                                    <form class="form-horizontal style-form" style="margin-top: 20px;" action="insert-pengunjung.php" method="post" enctype="multipart/form-data" name="form1" id="form1">
                                        <div class="form-group">
                                            <label class="col-sm-2 col-sm-2 control-label">No </label>
                                            <div class="col-sm-10">
                                                <input name="id" type="text" id="id" class="form-control" placeholder="Tidak perlu di isi" autofocus="on" readonly="readonly" />
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-2 col-sm-2 control-label">Nama</label>
                                            <div class="col-sm-10">
                                                <input name="nama" type="text" id="nama" class="form-control" placeholder="Nama Anda" required />
                                                <!--<span class="help-block">A block of help text that breaks onto a new line and may extend beyond one line.</span>-->
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-2 col-sm-2 control-label">Jenis kelamin</label>
                                            <div class="col-sm-6">
                                                <select class="form-control" name="jk" id="jk">
                                                    <option> -- Pilih Salah Satu --</option>
                                                    <option value="L"> Laki - Laki</option>
                                                    <option value="P"> Perempuan</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-2 col-sm-2 control-label">Semester</label>
                                            <div class="col-sm-6">
                                                <input name="kelas" type="text" id="kelas" class="form-control" placeholder="Semester Berapa?" required />
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <!-- <label class="col-sm-2 col-sm-2 control-label">Perlu</label> -->
                                            <div class="col-sm-10">
                                                <!-- <input name="perlu1" type="text" id="perlu1" class="form-control" placeholder="Keperluan" required /> -->
                                                <!--<span class="help-block">A block of help text that breaks onto a new line and may extend beyond one line.</span>-->
                                            </div>
                                        </div>



                                        <div class="form-group">
                                            <label class="col-sm-2 col-sm-2 control-label">Cari?</label>
                                            <div class="col-sm-10">
                                                <input name="cari" type="text" id="cari" class="form-control" placeholder="Apa yang anda cari.?" required />
                                                <!--<span class="help-block">A block of help text that breaks onto a new line and may extend beyond one line.</span>-->
                                            </div>
                                        </div>
                                        <!-- SARAN DI HIDDEN -->
                                        <!-- <div class="form-group">-->
                                        <!--    <label class="col-sm-2 col-sm-2 control-label">Saran</label>-->
                                        <!--    <div class="col-sm-10">-->
                                        <!--        <textarea rows="4" name="saran" id="saran" class="form-control" placeholder="Saran Anda untuk PerpustakaanKU" cols="25"></textarea>-->
                                        <!--        <span class="help-block">A block of help text that breaks onto a new line and may extend beyond one line.</span>-->
                                        <!--    </div>-->
                                        <!--</div>-->

                                        <!-- JAM DAN TANGGAL DI HIDDEN -->


                                        <div class="form-group">
                                            <label class="col-sm-2 col-sm-2 control-label">Tanggal</label>
                                            <div class="col-sm-10">
                                                <input name="tgl_kunjung" type="text" class="form-control" id="tgl_kunjung" value="<?php echo "" . date("d/m/Y") . ""; ?>" readonly="readonly" />
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-2 col-sm-2 control-label">Jam</label>
                                            <div class="col-sm-10">
                                                <input name="jam_kunjung" type="text" class="form-control" id="jam_kunjung" value="<?php echo "" . date("G:i:s") . "" ?>" readonly="readonly" />
                                            </div>

                                        </div>
                                        <div class="form-group" style="margin-bottom: 20px;">
                                            <label class="col-sm-2 col-sm-2 control-label"></label>
                                            <div class="col-sm-8">
                                                <input type="submit" value="Simpan" name="simpan" class="btn btn-sm btn-primary" />&nbsp;
                                                <a href="../e-book/login.html" class="btn btn-sm btn-danger">login </a>
                                                <a href="../" class="btn btn-sm btn-warning">Batal </a>
                                            </div>
                                        </div>

                                    </form>
                                </div>
                            </div>
                        </section>
                    </div>
                </center>
                </div>
            </section>

            <!--DATA TOTAL PENJUNJUNG HARIAN DI HIDDEN -->
            <!-- Data Total Pengunjung -->
            <!-- <div class="col-md-12">
                <section class="panel">
                    <header class="panel-heading">
                        <b> Data Akumulasi Pengunjung</b>
                    </header>
                    <div class="panel-body table-responsive">
                        <?php
                        $query = "select * from pengunjung order by id desc limit 10";
                        $tampil = mysqli_query($conn, $query) or die(mysqli_error($conn));
                        ?>
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>Nama</th>
                                    <th>Jenis Kelamin</th>
                                    <th>Usia</th>
                                    <th>Tanggal</th>
                                    <th>Jam Berkunjung </th>
                                    <th>Keperluan</th>
                                    <th>Buku Yang di Cari</th>
                                </tr>
                            </thead>

                            <?php while ($data1 = mysqli_fetch_array($tampil)) { ?>
                                <tbody>
                                    <tr>
                                        <td><?php echo $data1['nama']; ?></td>
                                        <td><?php echo $data1['jk']; ?></td>
                                        <td><?php echo $data1['kelas']; ?></td>
                                        <td><?php echo $data1['tgl_kunjung']; ?></td>
                                        <td><?php echo $data1['jam_kunjung']; ?></td>
                                        <td><?php echo $data1['perlu1']; ?></td>
                                        <td><?php echo $data1['cari']; ?></td>
                                    <?php
                                }
                                    ?>

                        </table>
                        <hr />
                        <?php $tampil1 = mysqli_query($conn, "select * from pengunjung order by id");
                        $user1 = mysqli_num_rows($tampil1);
                        ?>
                        <center>
                            <h4>Jumlah Total Pengunjung : <?php echo "$user1"; ?> Orang </h4>
                        </center>
                    </div>
                </section>


            </div> -->
    </div>
    <!-- row end -->
    <!-- /.content -->

    <!-- FOOTER PMII -->
    <footer id="footer">
    <div class="footer-top">
        <div class="container">
            <div class="row">

                <div class="col-lg-6 col-md-6 footer-contact text-center">
                    <h3>PMII TEKNIK <span>UNINUS</span></h3>
                    <p>
                        Jl. Binong Jati No. 200, Kec. Batununggal, Kota Bandung
                        <br><strong>Phone:</strong> 0878823966955<br>
                        <strong>Email:</strong> pmiirayonteknik06@gmail.com<br>
                    </p>
                </div>

                <div class="col-lg-6 col-md-6 footer-links text-center">
                    <h4>Our Social Networks</h4>
                    <p>Sosial Media Pengurus Rayon Pergerakan Mahasiswa Islam Indonesia</p>
                    <div class="social-links mt-3">
                        <a href="https://www.instagram.com/pmiiteknik_uninus" class="instagram"><i class="bx bxl-instagram"></i></a>
                        <a href="https://www.facebook.com/pmiiteknik_uninus" class="facebook"><i class="bx bxl-facebook"></i></a>
                        <a href="https://twitter.com/pmiiteknik_uninus" class="twitter"><i class="bx bxl-twitter"></i></a>
                        <a href="https://www.linkedin.com/in/pmiiteknik_uninus" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="copy-container py-4">
        <div class="copyright">
            &copy; <strong><span>pmiiteknik_uninus</span></strong> <?= date('Y'); ?>
        </div>
        <div class="credits">
            Designed by <a class="fst-italic">Biro Media Rayon Teknik</a>
        </div>
    </div>
    </footer>




    </div><!-- ./wrapper -->

    <!-- Modal Dialog Contact -->
    <!-- <div class="modal fade" id="contact" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title" id="myModalLabel">PerpustakaanKU</h4>
                </div>
                <div class="modal-body">
                    <p> PerpustakaanKu adalah salah satu layanan bagi pengguna untuk dapat mengakses berbagai buku bacaan yang dan dilakukan kapan saja dan dari mana saja, dengan menggunakan jaringan internet.</p>
                    <p> PerpustakaanKu memiliki koleksi buku dalam bentuk format digital dan bisa diakses dengan komputer. koleksi bacaan dari PerpustakaanKu dapat diakses dengan cepat dan mudah lewat jaringan komputer.</p>
                    <p> PerpustakaanKU bebasis website yang responsif, untuk info, saran, maupun kritik bisa menghubungi kami :</p>
                    <table>
                        <tr>
                            <td>E-mail</td>
                            <td>:</td>
                            <td><a href="sisteminformasi494@gmail.com">PerpustakaanKU@gmail.com</a></td>
                        </tr>
                        <br />
                        <tr>
                            <td>Blog</td>
                            <td>:</td>
                            <td><a href="#" target="_blank">www.PerpustakaanKU.com</a></td>
                        </tr>
                        <br />
                        <tr>
                            <td>Website</td>
                            <td>:</td>
                            <td><a href="#" target="_blank">www.PerpustakaanKU.com</a></td>
                        </tr>
                    </table>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div> -->
    <!-- end dialog modal -->
    <div id="preloader"></div>
    <a href="#" class="back-to-top"><i class="bi bi-arrow-up-short"></i></a>

        <!-- Vendor JS Files -->
        <script src="../assets/frontend/vendor/aos/aos.js"></script>
        <script src="../assets/frontend/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="../assets/frontend/vendor/glightbox/js/glightbox.min.js"></script>
        <script src="../assets/frontend/vendor/isotope-layout/isotope.pkgd.min.js"></script>
        <script src="../assets/frontend/vendor/php-email-form/validate.js"></script>
        <script src="../assets/frontend/vendor/purecounter/purecounter.js"></script>
        <script src="../assets/frontend/vendor/swiper/swiper-bundle.min.js"></script>
        <script src="../assets/frontend/vendor/waypoints/noframework.waypoints.js"></script>
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <!-- Template Main JS File -->
        <script src="/pmiiteknik/assets/frontend/js/main.js"></script>
        <script type="text/javascript">
            <?php if ($this->session->flashdata('msg') == 'success') : ?>
                Swal.fire   ({
                            position: 'top-end',
                            icon: 'success',
                            title: 'Terimakasih atas masukannya',
                            showConfirmButton: false,
                            timer: 1500
                            })
        </script>


    <!-- jQuery 2.0.2 -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
    <script src="js/jquery.min.js" type="text/javascript"></script>

    <!-- jQuery UI 1.10.3 -->
    <script src="js/jquery-ui-1.10.3.min.js" type="text/javascript"></script>
    <!-- Bootstrap -->
    <script src="js/bootstrap.min.js" type="text/javascript"></script>
    <!-- daterangepicker -->
    <script src="js/plugins/daterangepicker/daterangepicker.js" type="text/javascript"></script>

    <script src="js/plugins/chart.js" type="text/javascript"></script>

    <!-- datepicker
        <script src="js/plugins/datepicker/bootstrap-datepicker.js" type="text/javascript"></script>-->
    <!-- Bootstrap WYSIHTML5
        <script src="js/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js" type="text/javascript"></script>-->
    <!-- iCheck -->
    <script src="js/plugins/iCheck/icheck.min.js" type="text/javascript"></script>
    <!-- calendar -->
    <script src="js/plugins/fullcalendar/fullcalendar.js" type="text/javascript"></script>

    <!-- Director App -->
    <script src="js/Director/app.js" type="text/javascript"></script>

    <!-- Director dashboard demo (This is only for demo purposes) -->
    <script src="js/Director/dashboard.js" type="text/javascript"></script>

    <!-- Director for demo purposes -->
    <script type="text/javascript">
        $('input').on('ifChecked', function(event) {
            // var element = $(this).parent().find('input:checkbox:first');
            // element.parent().parent().parent().addClass('highlight');
            $(this).parents('li').addClass("task-done");
            console.log('ok');
        });
        $('input').on('ifUnchecked', function(event) {
            // var element = $(this).parent().find('input:checkbox:first');
            // element.parent().parent().parent().removeClass('highlight');
            $(this).parents('li').removeClass("task-done");
            console.log('not');

        });

        (function() {
            "use strict";
            
        })()
    </script>
    <script>
        $('#noti-box').slimScroll({
            height: '400px',
            size: '5px',
            BorderRadius: '5px'
        });

        $('input[type="checkbox"].flat-grey, input[type="radio"].flat-grey').iCheck({
            checkboxClass: 'icheckbox_flat-grey',
            radioClass: 'iradio_flat-grey'
        });
    </script>
    <script type="text/javascript">
        $(function() {
            "use strict";
            //BAR CHART
            var data = {
                labels: ["January", "February", "March", "April", "May", "June", "July"],
                datasets: [{
                        label: "My First dataset",
                        fillColor: "rgba(220,220,220,0.2)",
                        strokeColor: "rgba(220,220,220,1)",
                        pointColor: "rgba(220,220,220,1)",
                        pointStrokeColor: "#fff",
                        pointHighlightFill: "#fff",
                        pointHighlightStroke: "rgba(220,220,220,1)",
                        data: [65, 59, 80, 81, 56, 55, 40]
                    },
                    {
                        label: "My Second dataset",
                        fillColor: "rgba(151,187,205,0.2)",
                        strokeColor: "rgba(151,187,205,1)",
                        pointColor: "rgba(151,187,205,1)",
                        pointStrokeColor: "#fff",
                        pointHighlightFill: "#fff",
                        pointHighlightStroke: "rgba(151,187,205,1)",
                        data: [28, 48, 40, 19, 86, 27, 90]
                    }
                ]
            };
            new Chart(document.getElementById("linechart").getContext("2d")).Line(data, {
                responsive: true,
                maintainAspectRatio: false,
            });

        });
        // Chart.defaults.global.responsive = true;
    </script>
    <?php endif; ?>
</body>

</html>