<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Friezce Dwirinda Oktavriandi</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>/plugins/slick/slick.css">
    <link rel="stylesheet" href="<?= base_url() ?>/plugins/slick/slick-theme.css">
    <link rel="stylesheet" href="<?= base_url() ?>/plugins/fancybox/jquery.fancybox.min.css">
    <link href="<?= base_url() ?>/css/style.css" rel="stylesheet">
    <link rel="shortcut icon" href="<?= base_url() ?>/images/favicon.ico" type="image/x-icon">
    <link rel="icon" href="<?= base_url() ?>/images/favicon.ico" type="image/x-icon">
    <style>
        .mybutton:hover {
            opacity: 5;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
            <form id="dataForm">
                     <label for="rmNo">No. RM:</label>
                     <input type="text" id="rmNo" name="rmNo" class="form-control">
                     
                     <label for="identitas">Identitas:</label>
                     <select id="identitas" name="identitas" class="form-control">
                        <option value="ktm">KTM</option>
                        <option value="sim">SIM</option>
                     </select>
                     
                     <label for="namaPasien">Nama Pasien:</label>
                     <input type="text" id="namaPasien" name="namaPasien" class="form-control">
                     
                     <label for="tanggalLahir">Tanggal Lahir:</label>
                     <input type="date" id="tanggalLahir" name="tanggalLahir" class="form-control"><br>
                     
                     <label>Jenis Kelamin:</label>
                     <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" id="lakiLaki" name="jenisKelamin" value="lakiLaki">
                        <label class="form-check-label" for="lakiLaki">Laki-laki</label>
                     </div>
                     <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" id="perempuan" name="jenisKelamin" value="perempuan">
                        <label class="form-check-label" for="perempuan">Perempuan</label>
                     </div><br>
                     
                     <label for="alamat">Alamat:</label>
                     <textarea id="alamat" name="alamat" class="form-control"></textarea>
                     
                     <label for="kelurahan">Cari Kelurahan:</label>
                     <input type="text" id="kelurahan" name="kelurahan" class="form-control">
                     
                     <label for="propinsi">Propinsi:</label>
                     <select id="propinsi" name="propinsi" class="form-control">
                        <option value=""></option>
                        <option value="JawaBarat">Jawa Barat</option>
                        <option value="JawaTimur">Jawa Timur</option>
                        <option value="JawaTengah">Jawa Tengah</option>
                     </select>
                     <label for="kabupaten">Kabupaten:</label>
                     <select id="kabupaten" name="kabupaten" class="form-control">
                        <!-- Options for districts go here -->
                     </select>
                     
                     <label for="kecamatan">Kecamatan:</label>
                     <select id="kecamatan" name="kecamatan" class="form-control">
                        <!-- Options for sub-districts go here -->
                     </select>
                     
                     <label for="kelurahanSelect">Kelurahan:</label>
                     <select id="kelurahanSelect" name="kelurahanSelect" class="form-control">
                        <!-- Options for villages go here -->
                     </select>
                     
                     <label for="noHP">No. HP:</label>
                     <input type="text" id="noHP" name="noHP" class="form-control"><br>
                     
                     <label>Status:</label>
                     <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" id="single" name="status" value="single">
                        <label class="form-check-label" for="single">Single</label>
                     </div>
                     <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" id="menikah" name="status" value="menikah">
                        <label class="form-check-label" for="menikah">Menikah</label>
                     </div>
                     <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" id="jandaDuda" name="status" value="jandaDuda">
                        <label class="form-check-label" for="jandaDuda">Janda/Duda</label>
                     </div><br>
                     
                  </form>
            </div>
            <div class="col-md-4">
            <form id="additionalForm">
                     <label for="pendidikan">Pendidikan:</label>
                     <select id="pendidikan" name="pendidikan" class="form-control">
                        <option value="SD">SD</option>
                        <option value="SMP">SMP</option>
                        <option value="SMA">SMA</option>
                        <option value="Sarjana">Sarjana</option>
                     </select>
                     
                     <label for="pekerjaan">Pekerjaan:</label>
                     <select id="pekerjaan" name="pekerjaan" class="form-control">
                        <option value="PNS">PNS</option>
                        <option value="Wiraswasta">Wiraswasta</option>
                     </select>
                     
                     <label for="suka">Suka:</label>
                     <select id="suka" name="suka" class="form-control">
                        <option value="jawa">Jawa</option>
                        <option value="sunda">Sunda</option>
                        <option value="batak">Batak</option>
                     </select>
                     
                     <label for="agama">Agama:</label>
                     <select id="agama" name="agama" class="form-control">
                        <option value="islam">Islam</option>
                        <option value="hindu">Hindu</option>
                        <option value="budha">Budha</option>
                        <option value="kristen">Kristen</option>
                     </select>
                     
                     <label for="wargaNegara">Warga Negara:</label>
                     <select id="wargaNegara" name="wargaNegara" class="form-control">
                        <option value="Indonesia">Indonesia</option>
                        <option value="Malaysia">Malaysia</option>
                     </select>
                     
                     <label for="email">Email:</label>
                     <input type="email" id="email" name="email" class="form-control">
                     
                     <label for="namaAyah">Nama Ayah:</label>
                     <input type="text" id="namaAyah" name="namaAyah" class="form-control">
                     
                     <label for="namaIbu">Nama Ibu:</label>
                     <input type="text" id="namaIbu" name="namaIbu" class="form-control">
                     
                     <label for="golDarah">Golongan Darah:</label>
                     <select id="golDarah" name="golDarah" class="form-control">
                        <option value="A">A</option>
                        <option value="O">O</option>
                        <option value="AB">AB</option>
                        <option value="B">B</option>
                     </select>
                     
                     <label for="beratBadan">Berat Badan:</label>
                     <input type="text" id="beratBadan" name="beratBadan" class="form-control">
                     
                     <label for="tinggi">Tinggi:</label>
                     <input type="text" id="tinggi" name="tinggi" class="form-control">
                  </form>
                  <h5>Penanggung Jawab</h5>
                  <form id="penanggungJawabForm">
                     <label for="namaPenanggungJawab">Nama:</label>
                     <input type="text" id="namaPenanggungJawab" name="namaPenanggungJawab" class="form-control">
                     
                     <label for="hubungan">Hubungan:</label>
                     <select id="hubungan" name="hubungan" class="form-control">
                        <option value="Orang Tua">Orang Tua</option>
                        <option value="Pasangan">Pasangan</option>
                        <option value="Saudara">Saudara</option>
                        <option value="Teman">Teman</option>
                     </select>
                     
                     <label for="alamatPenanggungJawab">Alamat:</label>
                     <textarea id="alamatPenanggungJawab" name="alamatPenanggungJawab" class="form-control"></textarea>
                     
                     <label for="teleponPenanggungJawab">Telepon:</label>
                     <input type="text" id="teleponPenanggungJawab" name="teleponPenanggungJawab" class="form-control">
                  </form>
            </div>
            <div class="col-md-4">
            <form id="additionalForm">
                     <!-- Existing form fields -->
                     <label for="tipePasien">Tipe Pasien:</label><br>
                     <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" id="umum" name="tipePasien" value="umum">
                        <label class="form-check-label" for="umum">Umum</label>
                     </div>
                     <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" id="jaminan" name="tipePasien" value="jaminan">
                        <label class="form-check-label" for="jaminan">Jaminan</label>
                     </div><br><br>

                     <label for="asuransi">Asuransi:</label>
                     <select id="asuransi" name="asuransi" class="form-control">
                        <option value="BPJS">BPJS</option>
                        <option value="KIS">KIS</option>
                     </select><br>

                     <label for="noAnggota">No. Anggota:</label>
                     <input type="text" id="noAnggota" name="noAnggota" class="form-control"><br>

                     <label for="kelas">Kelas:</label>
                     <select id="kelas" name="kelas" class="form-control">
                        <option value="low">Low</option>
                        <option value="medium">Medium</option>
                        <option value="high">High</option>
                     </select><br>
                  </form>
            </div>
        </div>
        <div class="row justify-content-center mt-3">
            <div class="col-md-6">
                <button type="button" class="btn btn-primary btn-block" data-toggle="modal" data-target="#exampleModalLong">Simpan</button>
                <button class="btn btn-danger btn-block cancel-btn">Selesai</button>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
        <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content">
                <div class="modal-header text-center">
                    <h5 class="modal-title" id="exampleModalLongTitle"><b>RSUD WANOSA</b><br>
                        <p>Jl. Wanosa <br>
                            Telp.(031)71717171
                        </p>
                    </h5>
                </div>
                <div class="modal-body text-center">
                    <b>Pendaftaran Pasien Baru Sukses</b><br>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-success" onclick="redirectToHome()">Lanjut</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="footer-main" style="margin-top: 250px;">
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

    <!-- Scroll to top -->
    <div class="scroll-to-top scroll-to-target" data-target=".header-top">
        <span class="icon fa fa-angle-up"></span>
    </div>

    <!-- Scripts -->
    <script src="<?= base_url() ?>/plugins/jquery.js"></script>
    <script src="<?= base_url() ?>/plugins/bootstrap.min.js"></script>
    <script src="<?= base_url() ?>/plugins/bootstrap-select.min.js"></script>
    <script src="<?= base_url() ?>/plugins/slick/slick.min.js"></script>
    <script src="<?= base_url() ?>/plugins/fancybox/jquery.fancybox.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCC72vZw-6tGqFyRhhg5CkF2fqfILn2Tsw"></script>
    <script src="<?= base_url() ?>/plugins/google-map/gmap.js"></script>
    <script src="<?= base_url() ?>/plugins/validate.js"></script>
    <script src="<?= base_url() ?>/plugins/wow.js"></script>
    <script src="<?= base_url() ?>/plugins/jquery-ui.js"></script>
    <script src="<?= base_url() ?>/plugins/timePicker.js"></script>
    <script src="<?= base_url() ?>/js/script.js"></script>
    <script>
        function redirectToHome() {
            window.location.href = '<?= base_url() ?>/home/index';
        }
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>
</body>

</html>
