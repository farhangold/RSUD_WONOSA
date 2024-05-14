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
  <style>
    .mybutton:hover {
      opacity: 5;
    }
  </style>
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.24/datatables.min.css"/>
  <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.24/datatables.min.js"></script>
  <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
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
                <a class="mybutton" href="<?= base_url()?>/Home/index"><img src="<?= base_url()?>/images/hospital.png" width="20px"> Home</a>
              </li>
              <li>
                <a href="<?= base_url()?>/Home/jadwalDokter"><img src="<?= base_url()?>/images/schedule.png" width="20px"> Jadwal Dokter</a>
              </li>
              <li>
                <a href="<?= base_url()?>/Home/infoantrian"><img src="<?= base_url()?>/images/clock.png" width="20px"> Info Antrian</a>
              </li>
              <li>
                <a href="<?= base_url()?>/Home/login" id="logoutBtn"><img src="<?= base_url()?>/images/enter.png" width="20px"> Logout</a>
              </li>
            </ul>
          </div>
      </div>
    </nav>
    <!--End Main Header -->

    <!-- Contact Section -->
    <section class="appoinment-section section" style="margin-top:-100px;" id="cardFirst">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="accordion-section">
              <div class="accordion-holder">
                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                  <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingOne">
                      <h4 class="panel-title">
                        <a role="button">
                          Riwayat Pasien 
                        </a>
                      </h4>
                    </div>
                    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                      <div class="panel-body">
                        seluruh riwayat pasien tercatat oleh sistem dan pasien dapat melihat riwayat berobat pasien dengan klik tombol dibawah dan 
                        Untuk mencegah pemblokiran yang disebabkan oleh pasien yang tidak hadir sesuai pendaftaran sebanyak 3 kali maka bisa dilakukan reprint jika pasien tidak jadi hadir.
                        <div class="text-center"><br>
                          <button class="btn btn-primary" data-toggle="modal" data-target="#antrianModal">Riwayat Pasien</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- <div class="container">
            <div class="row justify-content-center align-items-center min-vh-100">
              <div class="col-md-6">
                <div class="accordion-section">
                  <div class="accordion-holder">
                    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                      <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingOne">
                          <h4 class="panel-title">
                            <a role="button">
                              Pembatalan Antrian atau Reprint Tiket Antrian 
                            </a>
                          </h4>
                        </div>
                        <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                          <div class="panel-body">
                            Untuk mencegah pemblokiran yang disebabkan oleh pasien yang tidak hadir sesuai pendaftaran sebanyak 3 kali maka bisa dilakukan reprint jika pasien tidak jadi hadir.
                            <div class="text-center">
                              <button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Reprint/Batal</button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div> -->
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

  <!-- Modal Masukan NIK-->
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title text-center" id="exampleModalLabel"><h2>Reprint Antrian</h2></h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body text-center">
          <form id="myForm" method="post">
            <div class="form-group">
              <label for="nik">Masukan data NIK lalu enter:</label>
              <input type="text" class="form-control" id="nik" name="nik" placeholder="NIK">
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-success" onclick="searchAntrian()">Cari Antrian</button>
          <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal Masukan Cari antrian-->
  <div class="modal fade" id="antrianModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-center" id="exampleModalLabel"><h2>Riwayat Pasien</h2></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body text-left">
                <div class="form-group">
                    <table id="myTable" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <th>No Antrian</th>
                                <th>Poli</th>
                                <th>NIK</th>
                                <th>Tanggal</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>13</td>
                                <td>Umum</td>
                                <td>32790467100300022</td>
                                <td>15-04-2021</td>
                                <td><span style="background-color:green;" class="badge">Sudah Diperiksa</span></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>14</td>
                                <td>Gigi</td>
                                <td>32790467100400023</td>
                                <td>08-08-2018</td>
                                <td><span style="background-color:#f7ff03;color:black" class="badge badge-warning">Belum Diperiksa</span></td>
                                <td>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <button class="btn btn-primary" data-toggle="modal" data-target="#barcode">Tampilkan</button>
                                        <button class="btn btn-danger btn-reprint">Reprint</button>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
            </div>
        </div>
    </div>
</div>




    <!-- Modal Barcode -->
    <div class="modal fade" id="barcode" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
      <div class="modal-dialog modal-sm" role="document">
          <div class="modal-content">
              <div class="modal-header text-center">
                  <h5 class="modal-title" id="exampleModalLongTitle">
                      <b>RSUD WONOSA</b><br>
                      <p>Jl. Wonosa <br> Telp.(031)71717171</p>
                  </h5>
                  <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                  </button> -->
              </div>
              <div class="modal-body text-center">
                  <b>Poli Penyakit Jantung</b><br>
                  <b>341</b><br>
                  <b>334D2</b><br>
                  <b>3207172212221</b><br>
                  <p>Hadir pada : <br>
                      <b>21 Mei 2023 Jam: 09.00-09.30</b><br>
                      Kode Pasien: <br>
                      Penjaminan: <span id="res-penjamin"></span> <br>
                  </p>
                  <img src="<?= base_url()?>/images/R.png" width="100px"><br>
                  <p>Dimohon pasien dapat datang tepat waktu</p>
              </div>
              <div class="modal-footer">
                  <button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
                  <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
              </div>
          </div>
      </div>
  </div>

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
    $(document).ready(function() {
      $('#myTable').DataTable();
    });

    $(document).ready(function() {
      $('#myTable').DataTable({
        "pagingType": "full_numbers",
        "lengthMenu": [
          [10, 25, 50, -1],
          [10, 25, 50, "All"]
        ],
        "language": {
          "lengthMenu": "Tampilkan _MENU_ data per halaman",
          "zeroRecords": "Data tidak ditemukan",
          "info": "Menampilkan halaman _PAGE_ dari _PAGES_",
          "infoEmpty": "Tidak ada data yang tersedia",
          "infoFiltered": "(disaring dari total _MAX_ data)"
        },
        "searching": false
      });
    });

    function searchAntrian() {
      // Ambil nilai input NIK
      var nik = document.getElementById("nik").value;

      // Jika NIK = 3279046710020002, tampilkan modal
      if (nik === "3279046710020002") {
        $('#antrianModal').modal('show');
        $('#exampleModal').modal('hide');
      } else {
        // Jika NIK != 123, tampilkan pesan error dan hentikan submit form
        alert("NIK tidak ditemukan!");
        event.preventDefault(); // Menghentikan submit form
      }
      // Reset value input NIK
      document.getElementById("nik").value = "";
    }

    function reprintAntrian() {
      $('#antrianModal').modal('hide');
    }

    document.querySelectorAll('.btn-reprint').forEach(item => {
        item.addEventListener('click', event => {
            // Display a message indicating success
            alert("Data antrian berhasil di-reprint/dibatalkan.");
            // Close the modal
            $('#antrianModal').modal('hide');
        });
    });
  </script>

  <!-- jQuery -->
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

  <!-- DataTables -->
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css">
  <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap4.min.js"></script>

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
    window.onload = function() {
      // kode JavaScript yang ingin Anda jalankan
      console.log("Halaman telah dimuat!");
      $("#MyModal").modal("show");
    };
  </script>
</body>
</html>
