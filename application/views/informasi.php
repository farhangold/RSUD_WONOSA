<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>Friezce Dwirinda Oktavriandi</title>

  <!-- mobile responsive meta -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

  <!-- Slick Carousel -->
  <link rel="stylesheet" href="<?= base_url() ?>/plugins/slick/slick.css">
  <link rel="stylesheet" href="<?= base_url() ?>/plugins/slick/slick-theme.css">
  <!-- FancyBox -->
  <link rel="stylesheet" href="<?= base_url() ?>/plugins/fancybox/jquery.fancybox.min.css">

  <!-- Stylesheets -->
  <link href="<?= base_url() ?>/css/style.css" rel="stylesheet">

  <!--Favicon-->
  <link rel="shortcut icon" href="<?= base_url() ?>/images/favicon.ico" type="image/x-icon">
  <link rel="icon" href="<?= base_url() ?>/images/favicon.ico" type="image/x-icon">

</head>

<body>
  <div class="page-wrapper">
    <!-- Preloader -->
    <!-- <div class="preloader"></div> -->
    <!-- Preloader -->

    <!--Main Header-->
    <nav class="navbar navbar-default">
      <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav">
            <li class="active">
              <a href="<?= base_url() ?>/Home/index"><img src="<?= base_url() ?>/images/hospital.png" width="20px"> Home</a>
            </li>
            <li>
              <a href="<?= base_url() ?>/Home/jadwalDokter"><img src="<?= base_url() ?>/images/schedule.png" width="20px"> Jadwal Dokter</a>
            </li>
            <li>
              <a href="<?= base_url() ?>/Home/infoantrian"><img src="<?= base_url() ?>/images/clock.png" width="20px"> Info Antrian</a>
            </li>
            <li>
              <a href="<?= base_url() ?>/Home/login"><img src="<?= base_url() ?>/images/enter.png" width="20px"> Login</a>
            </li>
            <!-- <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown
                <span class="caret"></span>
              </a>
              <ul class="dropdown-menu">
                <li>
                  <a href="#">Action</a>
                </li>
                <li>
                  <a href="#">Another action</a>
                </li>
                <li>
                  <a href="#">Something else here</a>
                </li>
                <li role="separator" class="divider"></li>
                <li>
                  <a href="#">Separated link</a>
                </li>
                <li role="separator" class="divider"></li>
                <li>
                  <a href="#">One more separated link</a>
                </li>
              </ul>
            </li> -->
          </ul>
        </div>
        <!-- /.navbar-collapse -->
      </div>
      <!-- /.container-fluid -->
    </nav>
    <!--End Main Header -->

    <!-- Contact Section -->
    <section class="appoinment-section section" style="margin-top:-100px;" id="cardFirst">
      <div class="container">
        <div class="row">
          <div class="col-md-3"></div>
          <div class="col-md-6">
            <div class="accordion-section">
              <div class="accordion-holder">
                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                  <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingOne">
                      <h4 class="panel-title">
                        <a role="button">
                          Informasi Registrasi Online Pasien Baru
                        </a>
                      </h4>
                    </div>
                    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                      <div class="panel-body">
                        Berikut 4 Langkah mudah <b>Registrasi Online RSUD Wonosa</b><br>
                        1. Pilih Jadwal Dokter <br>
                        2. Masukan Data Pasien<br>
                        3. Konfirmasi<br>
                        4. Selesai. Dapatkan Nomor Antrian dan Kode Booking<hr>
                        <div class="form-group" style="margin-top: -30px">
                          <div class="row">
                            <div class="col-md-12"><br>
                              <a href="<?= base_url() ?>/Home/index" class="btn btn-default">Kembali</a>
                              <a href="<?= base_url() ?>/Home/registrasi" class="btn btn-primary pull-right">Lanjut</a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-3"></div>
          <div class="col-md-12 col-sm-12 col-xs-12" style="display:none;" id="daftar-page">
            <div class="contact-area">
              <div class="section-title">
                <h3>Daftar
                  <span>Online</span>
                </h3>
              </div>
              <form name="contact_form" class="default-form contact-form" action="sendmail.php" method="post">
                <div class="row">
                  <div class="col-md-6 col-sm-12 col-xs-12">
                    <div class="form-group">
                      <input type="text" name="Name" placeholder="Name" required="">
                    </div>
                    <div class="form-group">
                      <input type="email" name="Email" placeholder="Email" required="">
                    </div>
                    <div class="form-group">
                      <select name="subject">
                        <option>Departments</option>
                        <option>Diagnostic</option>
                        <option>Psychological</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-md-6 col-sm-12 col-xs-12">
                    <div class="form-group">
                      <input type="text" name="Phone" placeholder="Phone" required="">
                    </div>
                    <div class="form-group">
                      <input type="text" name="Date" placeholder="Date" required="" id="datepicker">
                      <i class="fa fa-calendar" aria-hidden="true"></i>
                    </div>
                    <div class="form-group">
                      <select name="subject">
                        <option>Doctor</option>
                        <option>Diagnostic</option>
                        <option>Psychological</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="form-group">
                      <textarea name="form_message" placeholder="Your Message" required=""></textarea>
                    </div>
                    <div class="form-group text-center">
                      <button type="submit" class="btn-style-one">submit now</button>
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End Contact Section -->

    <!--footer-main-->
    <footer class="footer-main" style="margin-top:250px;">
      <div class="footer-bottom">
        <div class="container clearfix">
          <div class="copyright-text">
            <p>&copy; Copyright <?= date('Y-m-d') ?>. All Rights Reserved by
              <a href="index.html">Rinda</a>
            </p>
          </div>
        </div>
      </div>
    </footer>
    <!--End footer-main-->

  </div>
  <!--End pagewrapper-->

  <!--Scroll to top-->
  <div class="scroll-to-top scroll-to-target" data-target=".header-top">
    <span class="icon fa fa-angle-up"></span>
  </div>

  <script src="<?= base_url() ?>/plugins/jquery.js"></script>
  <script src="<?= base_url() ?>/plugins/bootstrap.min.js"></script>
  <script src="<?= base_url() ?>/plugins/bootstrap-select.min.js"></script>
  <!-- Slick Slider -->
  <script src="<?= base_url() ?>/plugins/slick/slick.min.js"></script>
  <!-- FancyBox -->
  <script src="<?= base_url() ?>/plugins/fancybox/jquery.fancybox.min.js"></script>
  <!-- Google Map -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCC72vZw-6tGqFyRhhg5CkF2fqfILn2Tsw"></script>
  <script src="<?= base_url() ?>/plugins/google-map/gmap.js"></script>
  <script src="<?= base_url() ?>/plugins/validate.js"></script>
  <script src="<?= base_url() ?>/plugins/wow.js"></script>
  <script src="<?= base_url() ?>/plugins/jquery-ui.js"></script>
  <script src="<?= base_url() ?>/plugins/timePicker.js"></script>
  <script src="<?= base_url() ?>/js/script.js"></script>
  <script>
    function myAlert() {
      alert("Maaf menu belum tersedia :)")
    }

    function daftarPage() {
      $("#daftar-page").css("display", "block");
    }
  </script>
</body>

</html>
