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
            <li>
              <a href="<?= base_url() ?>/Home/index"><img src="<?= base_url() ?>/images/hospital.png" width="20px"> Home</a>
            </li>
            <li class="active">
              <a href="<?= base_url() ?>/Home/jadwalDokter"><img src="<?= base_url() ?>/images/schedule.png" width="20px"> Jadwal Dokter</a>
            </li>
            <li>
              <a href="<?= base_url() ?>/Home/infoantrian"><img src="<?= base_url() ?>/images/clock.png" width="20px"> Info Antrian</a>
            </li>
            <li>
                <a href="<?= base_url()?>/Home/login" id="logoutBtn"><img src="<?= base_url()?>/images/enter.png" width="20px"> Logout</a>
            </li>
          </ul>
        </div>
        <!-- /.navbar-collapse -->
      </div>
      <!-- /.container-fluid -->
    </nav>
    <!--End Main Header -->

    <!-- Contact Section -->
    <div class="container">
      <br>
      <button onclick="filter('all')" class="btn btn-primary">All</button>
      <button onclick="filter('pria')" class="btn btn-primary">Pria</button>
      <button onclick="filter('filter')" class="btn btn-primary">Wanita</button>
      <section style="padding:10px;">
        <?php 
        $arr = ["spesialis jantung", "spesialis anak", "spesialis paru", "spesialis mata", "spesialis kulit", "spesialis kandungan", "spesialis THT", "spesialis bedah", "spesialis saraf"];
        $nama_dokter = ["dokter jantung","dokter anak",  "dokter paru", "dokter mata", "dokter kulit", "dokter kandungan", "dokter THT", "dokter bedah", "dokter saraf"];
        ?>
        <?php for($i = 0; $i < count($arr); $i++) { ?>
          <div class="col-md-4 <?= $i % 2 == 0 ? 'pria' : 'wanita' ?>" style="padding:5px;">
            <div class="card" style="border-radius:20px;background-color:whitesmoke;padding:15px;">
              <div class="card-header text-center">
                <?php 
                if($i % 2 == 0) {
                  echo '<img src="https://th.bing.com/th/id/OIP.zL8PN3yVgzgZxy9ECCdXugHaHc?pid=ImgDet&w=1594&h=1603&rs=1" width="100px" height="100px">';
                } else {
                  echo '<img src="https://cdn1.iconfinder.com/data/icons/avatars-1-5/136/61-1024.png" width="100px" height="100px">';
                }
                ?>
              </div>
              <div class="card-body text-center">
                <br>
                <h4><?= $nama_dokter[$i] ?></h4>
                <h5 class="card-title"><?= $arr[$i] ?></h5>
                <br>
                <div id="table-<?= $i ?>" style="display:none;">
                  <table class="table">
                    <tbody>
                      <tr>
                        <td><label style="margin-top: 7px">Selasa, 02-04-2023</label></td>
                        <td><button class="btn btn-primary" style="border-radius:25px;">08.00-14.30</button></td>
                      </tr>
                      <tr>
                        <td><label style="margin-top: 7px">Rabu, 03-04-2023</label></td>
                        <td><button class="btn btn-primary" style="border-radius:25px;">08.00-14.30</button></td>
                      </tr>
                    </tbody>
                  </table>
                </div>
                <table border="0" width="100%">
                  <tr>
                    <td class="pull-right" width="48%">
                      <button id="btnHide<?= $i ?>" style="display:none;margin-right:10px;" onclick="hideTable(<?= $i ?>)" class="btn btn-danger">Sembunyikan</button>
                      <button style="margin-right:5px;" id="btnShow<?= $i ?>" onclick="showTable(<?= $i ?>)" class="btn btn-primary">Lihat Antrian</button>
                    </td>
                    <td width="11%"></td>
                    <td class="text-left" width="45%">
                      <a style="margin-left:5px;" href="<?= base_url() ?>/Home/verifikasi" class="btn btn-primary">Daftar</a>
                    </td>
                  </tr>
                </table>
              </div>
            </div>
          </div>
        <?php } ?>
      </section>
    </div>

    <div class="col-md-3"></div>
    <div class="col-md-12 col-sm-12 col-xs-12" style="display:none;" id="daftar-page">
      <div class="contact-area">
        <div class="section-title">
          <h3>Daftar <span>Online</span></h3>
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
    document.getElementById('logoutBtn').addEventListener('click', function(event) {
      event.preventDefault(); // Mencegah tautan dari melakukan navigasi default
      var confirmLogout = confirm("Yakin ingin logout?");
      if (confirmLogout) {
        window.location.href = "<?= base_url()?>/Home/login"; // Mengarahkan ke halaman login jika dikonfirmasi
      }
    });
  </script>
  <script>
    function showTable(id) {
      $("#table-" + id).css("display", "block");
      $("#btnShow" + id).css("display", "none");
      $("#btnHide" + id).css("display", "block");
    }

    function hideTable(id) {
      $("#table-" + id).css("display", "none");
      $("#btnShow" + id).css("display", "block");
      $("#btnHide" + id).css("display", "none");
    }

    function filter(kategori) {
      if (kategori == 'all') {
        $(".pria").css("display", "block");
        $(".wanita").css("display", "block");
      } else if (kategori == 'pria') {
        $(".pria").css("display", "block");
        $(".wanita").css("display", "none");
      } else {
        $(".pria").css("display", "none");
        $(".wanita").css("display", "block");
      }
    }
  </script>
</body>

</html>
