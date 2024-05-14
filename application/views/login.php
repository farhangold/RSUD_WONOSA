<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>Friezce Dwirinda Oktavriandi</title>
  
  <!-- mobile responsive meta -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  
  <!-- Stylesheets -->
  <link href="<?= base_url()?>/css/style.css" rel="stylesheet">
  
  <!--Favicon-->
  <link rel="shortcut icon" href="<?= base_url()?>/images/favicon.ico" type="image/x-icon">
  <link rel="icon" href="<?= base_url()?>/images/favicon.ico" type="image/x-icon">

  <style>
    .marquee-container {
      background-color: #f0f0f0; /* Set background color here */
      padding: 10px 0; /* Adjust padding as needed */
      text-align: center;
    }

    .marquee-text {
      font-size: 18px; /* Adjust font size as needed */
      color: #333; /* Adjust text color as needed */
    }

    html, body {
      height: 100%;
      margin: 0;
    }

    body {
      background-image: url('https://images3.alphacoders.com/101/thumb-1920-1010294.jpg');
      background-size: cover;
      background-repeat: no-repeat;
      background-attachment: fixed;
      display: flex;
      flex-direction: column;
    }

    .page-wrapper {
      display: flex;
      flex-direction: column;
      justify-content: space-between;
      min-height: 100vh; /* Ubah tinggi menjadi min-height */
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    .login-box {
      background-color: rgba(255, 255, 255, 0.9);
      padding: 25px;
      border-radius: 10px;
      max-width: 400px;
      width: 100%;
      margin: auto; /* Tambahkan margin auto */
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .footer-main {
      background: none; /* Transparent background */
      text-align: center;
      padding: 10px 0;
      color: white; /* Ensure text is visible on background */
      margin-top: auto; /* Push footer to bottom */
    }
  </style>
</head>

<body>
  <div class="page-wrapper">

    <!-- Marquee Section -->
    <div class="marquee-container">
      <marquee class="marquee-text" direction="left"><b>SELAMAT DATANG DIRUMAH SAKIT UMUM WONOSA</b></marquee>
    </div>
    <!-- End Marquee Section -->

    <!-- Login Section -->
    <section class="appoinment-section section" id="cardFirst">
      <div class="container">
        <div class="row text-center">
          <div class="login-box">
            <div class="login-logo">
              <i class="fa fa-smile"></i><b>Login Pasien</b>
              <i class="fa fa-smile">Daftarkan diri Anda melalui Registrasi Online ini untuk mendapatkan nomor antrian sehingga tidak perlu menunggu terlalu lama di Rumah Sakit.</i>
            </div>
            <div class="login-box-body">
              <p class="fa fa-smile">Pilih jenis pasien:</p>
              <div class="row">
                <div class="col-xs-6">
                  <button onclick="showLoginForm('old')" class="btn btn-primary btn-block btn-flat">Pasien Lama</button>
                </div>
                <div class="col-xs-6">
                  <button onclick="location.href='<?= base_url()?>/Home/registrasi'" class="btn btn-success btn-block btn-flat">Pasien Baru</button>
                </div>
              </div>
              <br>
              <div id="loginFormOld" style="display: none;">
                <form id="loginForm">
                  <input type="hidden" id="csrf" name="csrf_appointment_system" value="3023bc71f8153541b11f85a1ae347739">
                  <div class="form-group has-feedback">
                    <input type="number" name="norm" id="norm" class="form-control" placeholder="No Rekam Medis" required maxlength="6">
                    <span class="glyphicon glyphicon-user form-control-feedback"></span>
                  </div>
                  <div class="form-group has-feedback">
                    <input type="date" name="birth_date" class="form-control" placeholder="Tanggal Lahir : mm-dd-yyyy" required>
                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                  </div>
                  <div class="row">
                    <div class="col-xs-12">
                      <button onclick="check()" id="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End Login Section -->

    <!-- Footer -->
    <!-- <footer class="footer-main">
      <div class="footer-bottom">
        <div class="container clearfix">
          <div class="copyright-text">
            <p>&copy; Copyright <?= date('Y') ?>. All Rights Reserved by
              <a href="index.html">Rinda</a>
            </p>
          </div>
        </div>
      </div>
    </footer> -->
    <!-- End Footer -->

  </div>
  <!-- End page-wrapper -->

  <!-- Modal awal -->
  <div class="modal fade" id="MyModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title text-center" id="exampleModalLabel"><img src="<?= base_url()?>/images/warning.png" width="60px"></h5>
        </div>
        <div class="modal-body text-center">
          <b>Dalam rangka tertib administrasi dan pelayanan:</b><br>
          <p style="text-align: justify;">
            1. Pasien tidak dapat melakukan pembatalan apabila tidak dapat hadir sesuai tanggal yang telah dipilih<br>
            2. Akun pendaftaran akan diblokir apabila pasien tidak hadir sesuai pendaftaran sebanyak 3 kali <br>
            3. Untuk membuka blokir, dapat menghubungkan petugas admin pada fasilitas kesehatan yang ditunjuk
          </p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Kembali</button>
        </div>
      </div>
    </div>
  </div>

  <script src="<?= base_url()?>/plugins/jquery.js"></script>
  <script src="<?= base_url()?>/plugins/bootstrap.min.js"></script>
  <script>
    $(document).ready(function(){
      $('#MyModal').modal('show');
    });

    function showLoginForm(type) {
      if (type === 'old') {
        document.getElementById('loginFormOld').style.display = 'block';
      }
    }

    function check() {
      var rm = document.getElementById("norm").value;
      if (rm.length > 8) {
        alert("nomor rekam medis tidak valid");
      }
    }
  </script>
</body>

</html>
