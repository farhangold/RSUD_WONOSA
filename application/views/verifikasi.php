<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>Friezce Dwirinda Oktavriandi</title>

  
  <!-- mobile responsive meta -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  
  <!-- Slick Carousel -->
  <link rel="stylesheet" href="<?= base_url()?>/plugins/slick/slick.css">
  <link rel="stylesheet" href="<?= base_url()?>/plugins/slick/slick-theme.css">
  <!-- FancyBox -->
  <link rel="stylesheet" href="<?= base_url()?>/plugins/fancybox/jquery.fancybox.min.css">
  
  <!-- Stylesheets -->
  <link href="<?= base_url()?>/css/style.css" rel="stylesheet">
  
  <!--Favicon-->
  <link rel="shortcut icon" href="<?= base_url()?>/images/favicon.ico" type="image/x-icon">
  <link rel="icon" href="<?= base_url()?>/images/favicon.ico" type="image/x-icon">

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
                  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"
                        aria-expanded="false">
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
                            <a href="<?= base_url()?>Home/index"><img src="<?= base_url()?>/images/hospital.png" width="20px"> Home</a>
                        </li>
                        <li>
                            <a href="<?= base_url()?>Home/jadwalDokter"><img src="<?= base_url()?>/images/schedule.png" width="20px"> Jadwal Dokter</a>
                        </li>   
                        
                        <li>
                            <a href="<?= base_url()?>Home/infoantrian"><img src="<?= base_url()?>/images/clock.png" width="20px"> Info Antrian</a>
                        </li>
                        
                        <li>
                            <a href="<?= base_url()?>Home/login"><img src="<?= base_url()?>/images/enter.png" width="20px"> Login</a>
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
<!-- <section class="appoinment-section section" style="margin-top:-100px;" id="cardFirst">
    <div class="container">
    <section class="content-header" style="margin-top: 30px;">
		  <div class="row">
			<div class="col-md-6 col-md-offset-3">
				<div class="btn-group btn-group-justified" role="group">
					<div class="btn-group" role="group">
						<button type="button" class="btn btn-sm btn-primary" id="btn-isi-biodata">1. Verifikasi</button>
					</div>
					<div class="btn-group" role="group">
						<button type="button" class="btn btn-sm btn-default" id="btn-pilih-dokter">2. Jadwal</button>
					</div>
					<div class="btn-group" role="group">
						<button type="button" class="btn btn-sm btn-default" id="btn-selesai">3.Konfirmasi</button>
					</div>
					<div class="btn-group" role="group">
						<button type="button" class="btn btn-sm btn-default" id="btn-selesai">4.Selesai</button>
					</div>
				</div>
			</div>
		  </div>
      </section> -->
      <section style="margin-top: 15px">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <div >
    <div class="accordion-holder">
        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
            <div class="panel panel-default">
                <div class="panel-heading"  style="background-color:#48bdc5;color:white;" role="tab" id="headingOne">
                    <h4 class="panel-title">
                        <a role="button">
                             Informasi Registrasi Online 
                        </a>
                    </h4>
                </div>
                <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                    <div class="panel-body">
                    Isikan NIk dan Tanggal Lahir Pasien yang telah terdaftar di RSUD Wonosa<br><br>
                        <div class="form-group">
                            <label for="Poli" class="col-sm-4 control-label">Poli/Klinik</label>
                                <div class="col-sm-6">
                                    <select name="Poli" id="Poli" onchange="setPoli()" class="form-control">
                                    <option value="">Pilih Poli</option>
                                    <option value="Klinik Jantung">Klinik Jantung</option>
                                    <option value="Klinik Penyakit Dalam">Klinik Penyakit Dalam</option>
                                    </select>
                                    <span class="help-block"></span>
                                </div>
                            <div id="result-label" class="col-sm-2"></div>
                        </div>
                        <div class="form-group">
							<label for="alamat" class="col-sm-4 control-label">Tanggal Layanan</label>
							<div class="col-sm-6">
								<input type="date" name="birth_date" id="tanggal_layanan" placeholder="dd-mm-yyyy" class="form-control" required value="" onblur="CheckBirthDate()">
								<span class="help-block"></span>
							</div>
                        </div>    
                        <div class="form-group">
							<label for="norm" class="col-sm-4 control-label">NIK</label>
							<div class="col-sm-6">
								<input type="text" name="norm" id="norm" placeholder="NIK" class="form-control" value="" required>
								<span class="help-block"></span>
							</div>
						</div>  
                        <div class="form-group">
							<label for="alamat" class="col-sm-4 control-label">Tanggal Lahir</label>
							<div class="col-sm-6">
								<input type="date" name="birth_date" id="birth_date" placeholder="dd-mm-yyyy" class="form-control" required value="" onblur="CheckBirthDate()">
								<span class="help-block"></span>
							</div>
                        </div>    
                        <div class="form-group" style="margin-top: -30px">
                            <div class="row">
                                <div class="col-md-12"><hr>
                                    <!-- <a href="<?= base_url()?>/Home/informasi"class="btn btn-default">Kembali</a> -->
                                    <a href="<?= base_url()?>/Home/jadwalDokter" class="btn btn-default" style="background-color:#F2F2F2"> <img src="<?= base_url()?>/images/schedule.png" width="20px"> Jadwal Dokter</a>
                                    <button  class="btn btn-primary pull-right" data-toggle="modal" data-target="#exampleModal">Submit</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>
</section>
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
<!-- Modal -->
<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-header text-center">
        <h5 class="modal-title" id="exampleModalLongTitle"><b>RSUD WONOSA</b><br>
        <p>Jl. Wonosa <br>
           Telp.(031)71717171 
        </p>
        </h5>
        <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button> -->
      </div>
      <div class="modal-body text-center">
            <b><span id="res-Poli"></b><br>
            <b>341</b><br>
            <b>334D2</b><br>
            <b>3207172212221</b><br>
            <p>Hadir pada : <br>
                  <b>21 Mei 2023 Jam: 09.00-09.30</b><br>
                  Kode Pasien: <br>
                  Penjaminan: BPJS <br> 
            </p>
            <img src="<?= base_url()?>/images/R.png" width="100px"><br>
            <p>Dimohon pasien dapat datang tepat waktu</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
      </div>
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-center" id="exampleModalLabel"><img src="<?= base_url()?>/images/warning.png" width="120px"></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body text-center">
        <b>Data tidak ditemukan? </b><br>
        isi data manual
      </div>
      <div class="modal-footer">
            <a href="<?= base_url()?>/Home/registrasi" class="btn btn-success" > Ya</a>
            <button type="button" class="btn btn-danger" data-dismiss="modal">Tidak</button>
        </div>
    </div>
  </div>
</div>
<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target=".header-top">
  <span class="icon fa fa-angle-up"></span>
</div>

<script src="<?= base_url()?>/plugins/jquery.js"></script>
<script src="<?= base_url()?>/plugins/bootstrap.min.js"></script>
<script src="<?= base_url()?>/plugins/bootstrap-select.min.js"></script>
<!-- Slick Slider -->
<script src="<?= base_url()?>/plugins/slick/slick.min.js"></script>
<!-- FancyBox -->
<script src="<?= base_url()?>/plugins/fancybox/jquery.fancybox.min.js"></script>
<!-- Google Map -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCC72vZw-6tGqFyRhhg5CkF2fqfILn2Tsw"></script>
<script src="<?= base_url()?>/plugins/google-map/gmap.js"></script>

<script src="<?= base_url()?>/plugins/validate.js"></script>
<script src="<?= base_url()?>/plugins/wow.js"></script>
<script src="<?= base_url()?>/plugins/jquery-ui.js"></script>
<script src="<?= base_url()?>/plugins/timePicker.js"></script>
<script src="<?= base_url()?>/js/script.js"></script>
<script>
    function showResult() {
    var selectBox = document.getElementById("layanan");
    var selectedValue = selectBox.options[selectBox.selectedIndex].value;
    var resultLabel = document.getElementById("result-label");
    resultLabel.innerHTML = selectedValue;
  }
</script>
<script>
    function setPoli(){
            var res = $("#Poli").val();
            document.getElementById("res-Poli").innerHTML = res;
      }
    $(document).ready(function() {
    // ketika tombol "Konfirmasi" diklik
    $('#exampleModal').on('show.bs.modal', function (e) {
        // periksa nilai input NIK
        var nik = $('#norm').val();
        if (nik == '3279046710020002') {
        // tampilkan modal id="exampleModalLong" jika input NIK == 3279046710020002
        $('#exampleModalLong').modal('show');
        return false; // batalkan tampilan modal id="exampleModal"
        }
    });
    });
</script>
</body>

</html>

