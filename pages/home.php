<?php
if (strpos($_SERVER['REQUEST_URI'], "pages")) {
     exit(header("Location:../index.php"));
}

$besok                  = date("Y-m-d", strtotime("+1 day"));
$thnbesok               = substr($besok, 0, 4);
$blnbesok               = substr($besok, 5, 2);
$tglbesok               = substr($besok, 8, 2);
?>

<!-- <section id="home" class="slider" data-stellar-background-ratio="0.5">
      <div class="container">
           <div class="row">
                 <div class="owl-carousel owl-theme">
                      <div class="item item-first">
                           <div class="caption">
                                <div class="col-md-offset-1 col-md-10">
                                     <h3>Mari buat hidupmu lebih bahagia</h3>
                                     <h1>Hidup Sehat</h1>
                                     <a href="#team" class="section-btn btn btn-default btn-kuning smoothScroll">Temui Dokter Kami</a>
                                </div>
                           </div>
                      </div>
                      <div class="item item-second">
                           <div class="caption">
                                <div class="col-md-offset-1 col-md-10">
                                     <h3>Kami usahakan yang terbaik untuk Anda</h3>
                                     <h1>Jadikan Kami Sahabat Anda</h1>
                                     <a href="#about" class="section-btn btn btn-default btn-kuning smoothScroll">Lebih Banyak Tentang Kami</a>
                                </div>
                           </div>
                      </div>
                      <div class="item item-third">
                           <div class="caption">
                                <div class="col-md-offset-1 col-md-10">
                                     <h3>Jangan sampai waktu anda bersama keluarga menjadi terganggu</h3>
                                     <h1>Manfaatkan Kesehatan Anda</h1>
                                     <a href="#news" class="section-btn btn btn-default btn-kuning smoothScroll">Lihat Jadwal Dokter</a>
                                </div>
                           </div>
                      </div>
                 </div>
           </div>
      </div>
 </section> -->

<!-- ABOUT -->
<section id="about">
     <section id="appointment">
          <div class="container" style="background: rgba(240, 240, 240, 0.9); padding:5px 20px 35px 20px">
               <div class="row">
                    <div class="col-md-6 col-sm-6">
                         <div class="about-info">
                              <h2 class="wow fadeInUp" data-wow-delay="0.6s">Selamat datang di Pusat Kesehatan Anda</h2>
                              <div class="wow fadeInUp" data-wow-delay="0.8s">
                                   <p style="text-align: justify; color:#000000; text-shadow: 0px 0px 0.5px #000000;"><?= $_SESSION["nama_instansi"] . " merupakan salah satu rumah sakit umum di wilayah " . $_SESSION["kabupaten"] . " yang berkedudukan di " . $_SESSION["alamat_instansi"] . ". " . $_SESSION["nama_instansi"] . " merupakan perkembangan dari balai pengobatan, klinik dan berada dibawah YASKI. " . $_SESSION["nama_instansi"] . " mendapat izin operasional dengan Kode PPK " . $_SESSION["kode_ppkkemenkes"] . " sejak bulan November 2009 dan diresmikan tanggal 21 februari 2010. " . $_SESSION["nama_instansi"] . " dalam memberikan pelayanannya mengambil filosofi  dasar bahwa pelayanan kesehatan yang baik itu tidak harus mahal dan kalau bisa, harus tidak mahal. Filosofi dasar yang kedua adalah bersama yang tidak mampu kita harus maju. Hal ini memiliki arti bahwa " . $_SESSION["nama_instansi"] . " harus mampu memajukan dirinya dan pihak-pihak yang berhubungan dengan dirinya menuju arah yang lebih baik." ?></p>
                              </div>
                              <figure class="profile wow fadeInUp" data-wow-delay="1s">
                                   <img src="images/direktur.png" class="img-responsive" alt="" />
                                   <figcaption>
                                        <h3>dr. H. GABRIL TAUFIQ BASRI, Sp.PD., FINASIM</h3>
                                        <p style="color:#000000; text-shadow: 0px 0px 0.5px #000000;">Direktur Utama</p>
                                   </figcaption>
                              </figure>
                         </div>
                    </div>

                    <!-- <div class="col-md-6 col-sm-6">
                         <form id="appointment-form" role="form" onsubmit="return validasiIsi();" method="post" action="index.php?act=PendaftaranPeriksa" enctype=multipart/form-data>
                              <div class="about-info wow fadeInUp" data-wow-delay="0.4s">
                                   <h2>
                                        <center>Buat Janji/Booking</center>
                                   </h2>
                                   <div class="col-md-12 col-sm-12">
                                        <label for="nama">Nama</label>
                                        <input type="text" class="form-control text-uppercase" onkeydown="setDefault(this, document.getElementById('MsgIsi1'));" id="TxtIsi1" pattern="[a-zA-Z0-9, ./@_]{1,40}" title=" a-zA-Z0-9, ./@_ (Maksimal 40 karakter)" required name="nama" maxlength="40" placeholder="Nama Anda" autocomplete="off" />
                                        <span id="MsgIsi1" style="color:#CC0000; font-size:10px;"></span>
                                   </div>
                                   <div class="col-md-12 col-sm-12">
                                        <label for="alamat">Alamat</label>
                                        <input type="text" class="form-control text-uppercase" onkeydown="setDefault(this, document.getElementById('MsgIsi2'));" id="TxtIsi2" pattern="[a-zA-Z0-9, ./@_]{1,200}" title=" a-zA-Z0-9, ./@_ (Maksimal 200 karakter)" required name="alamat" maxlength="200" placeholder="Alamat Anda" autocomplete="off" />
                                        <span id="MsgIsi2" style="color:#CC0000; font-size:10px;"></span>
                                   </div>
                                   <div class="col-md-6 col-sm-6">
                                        <label for="nohp">Nomor HP/Telephone</label>
                                        <input type="tel" class="form-control" onkeydown="setDefault(this, document.getElementById('MsgIsi3'));" id="TxtIsi3" pattern="[0-9]{1,40}" title=" 0-9 (Maksimal 40 karakter)" required name="nohp" maxlength="40" placeholder="Nomor HP/Telephone Anda" autocomplete="off" />
                                        <span id="MsgIsi3" style="color:#CC0000; font-size:10px;"></span>
                                   </div>
                                   <div class="col-md-6 col-sm-6">
                                        <label for="email">Email</label>
                                        <input type="email" class="form-control" onkeydown="setDefault(this, document.getElementById('MsgIsi4'));" id="TxtIsi4" pattern="[a-zA-Z0-9, ./@_]{1,50}" title=" a-zA-Z0-9, ./@_ (Maksimal 50 karakter)" required name="email" maxlength="50" placeholder="Email Anda" autocomplete="off" />
                                        <span id="MsgIsi4" style="color:#CC0000; font-size:10px;"></span>
                                   </div>
                                   <div class="col-md-6 col-sm-6">
                                        <label for="tanggal">Pilih Tanggal</label>
                                        <table width="100%">
                                             <tr>
                                                  <td>
                                                       <select name="TglDaftar" class="form-control">
                                                            <?php
                                                            echo "<option>$tglbesok</option>";
                                                            loadTgl2();
                                                            ?>
                                                       </select>
                                                  </td>
                                                  <td>
                                                       <select name="BlnDaftar" class="form-control">
                                                            <?php
                                                            echo "<option>$blnbesok</option>";
                                                            loadBln2();
                                                            ?>
                                                       </select>
                                                  </td>
                                                  <td>
                                                       <select name="ThnDaftar" class="form-control">
                                                            <?php
                                                            echo "<option>$thnbesok</option>";
                                                            loadThn4();
                                                            ?>
                                                       </select>
                                                  </td>
                                             </tr>
                                        </table>
                                   </div>
                                   <div class="col-md-6 col-sm-6">
                                        <label for="poli">Poliklinik/Unit Penunjang</label>
                                        <select name="poli" class="form-control">
                                             <?php
                                             if (!isset($_SESSION["poli"])) {
                                                  $datapoli   = "";
                                                  $querypoli  = bukaquery("SELECT * from poliklinik order by nm_poli");
                                                  // $rsquerypoli = mysqli_fetch_array($querypoli);
                                                  // ekopre($rsquerypoli);
                                                  while ($rsquerypoli = mysqli_fetch_array($querypoli)) {
                                                       $datapoli = $datapoli . "<option value='$rsquerypoli[0]'>$rsquerypoli[1]</option>";
                                                  }
                                                  $_SESSION["poli"] = $datapoli;
                                             }

                                             echo $_SESSION["poli"];
                                             
                                             ?>
                                        </select>
                                   </div>
                                   <div class="col-md-12 col-sm-12">
                                        <label for="pesan">Tambahan Pesan</label>
                                        <textarea class="form-control" rows="2" maxlength="400" onkeydown="setDefault(this, document.getElementById('MsgIsi5'));" id="TxtIsi5" required name="pesan" placeholder="Tambahan Pesan" autocomplete="off"></textarea>
                                        <span id="MsgIsi5" style="color:#CC0000; font-size:10px;"></span>
                                        <button type="submit" class="form-control" id="cf-submit" name="btnBooking">Kirimkan</button>
                                   </div>
                                   <div class="col-md-12 col-sm-12">
                                        <label>
                                             <a href="index.php?act=CekBooking" class="btn btn-warning" style="margin-bottom:10px;">Cek Booking</a> Melihat status booking Anda.<br />
                                             <a href="index.php?act=LoginPasien" class="btn btn-success" style="text-align:center; padding-left:35px; padding-right:35px;">Log In</a> Jika sudah pernah periksa.
                                        </label><br /><br />
                                   </div>
                              </div>
                         </form>
                    </div> -->

                    <div class="col-md-6 col-sm-6 centered">
                         <div id="ptombol" style="padding-top: 10%">
                              <div class="col-md-12 col-sm-12 wow fadeInUp" data-wow-delay="0.4s">
                                   <div class="row">
                                        <div class="col-md-12 col-sm-12">
                                             <button class="btn btn-info btn-lg" id="plama" style="width: 100%; height: ; margin-bottom:15px;">Form Pasien Lama</button> 
                                        </div>
                                        <div class="col-md-12 col-sm-12">
                                             <button class="btn btn-warning btn-lg" id="pbaru" style="width: 100%; height: ; margin-bottom:15px;">Tutup Form Pasien Baru</button> 
                                        </div>
                                        <div class="col-md-12 col-sm-12">
                                             <a href='index.php?act=CekBooking'>
                                                  <button class="btn btn-success btn-lg" id="cek_booking" style="width: 100%; height: ; margin-bottom:15px;">Cek Booking</button>
                                             </a>
                                             <!-- <a href='index.php?act=CekBooking' class='btn btn-success col-md-12 col-sm-12' style="width: 100%; height: ; margin-bottom:15px;">Cek Booking</a> -->
                                        </div>

                                        <div class="col-md-12 col-sm-12">
                                             <form id="appointment-form" role="form" method="post" action="index.php?act=PendaftaranPeriksa" enctype=multipart/form-data>
                                                  <div class="about-info wow fadeInUp" data-wow-delay="0.4s">
                                                       <h2>
                                                            <center>Buat Janji/Booking</center>
                                                       </h2>
                                                       <div class="col-md-6 col-sm-6">
                                                            <label for="nama">Nama Pasien</label>
                                                            <input type="text" class="form-control text-uppercase" oninvalid="this.setCustomValidity('BISA KALI DIISI NAMANYAA')" oninput="setCustomValidity('')" id="TxtIsi1Nam" pattern="[a-zA-Z0-9, ./@_]{1,40}" title=" a-zA-Z0-9, ./@_ (Maksimal 40 karakter)" required name="nama" maxlength="40" placeholder="Nama Pasien" autocomplete="off" />
                                                            <span id="MsgIsi1Nam" style="color:#CC0000; font-size:10px;"></span>
                                                       </div>
                                                       <div class="col-md-6 col-sm-6">
                                                            <label for="nik">NIK Pasien</label>
                                                            <input type="text" class="form-control text-uppercase" oninvalid="this.setCustomValidity('NIK KOSONG ATAU SALAH BRADER')" oninput="setCustomValidity('')" id="TxtIsi19" pattern="[0-9]{1,40}" title="  0-9 (Maksimal 16 karakter)" required name="nik" maxlength="40" placeholder="NIK Pasien" autocomplete="off" />
                                                            <span id="MsgIsi19" style="color:#CC0000; font-size:10px;"></span>
                                                       </div>
                                                       <div class="col-md-6 col-sm-12">
                                                            <label for="alamat">Alamat Pasien</label>
                                                            <input type="text" class="form-control text-uppercase" oninvalid="this.setCustomValidity('BISA KALI DIISI ALAMATNYAA')" oninput="setCustomValidity('')" id="TxtIsi2Alamat" pattern="[a-zA-Z0-9, ./@_]{1,200}" title=" a-zA-Z0-9, ./@_ (Maksimal 200 karakter)" required name="alamat" maxlength="200" placeholder="Alamat Pasien" autocomplete="off" />
                                                            <span id="MsgIsi2Alamat" style="color:#CC0000; font-size:10px;"></span>
                                                       </div>
                                                       <!-- <div class="col-md-12 col-sm-12">
                                                                 <label for="email">Email Pasien</label>
                                                                 <input type="email" class="form-control" onkeydown="setDefault(this, document.getElementById('MsgIsi4'));" id="TxtIsi4" pattern="[a-zA-Z0-9, ./@_]{1,50}" title=" a-zA-Z0-9, ./@_ (Maksimal 50 karakter)" required name="email" maxlength="50" placeholder="Email Pasien" autocomplete="off" />
                                                                 <span id="MsgIsi4" style="color:#CC0000; font-size:10px;"></span>
                                                            </div> -->
                                                       <div class="col-md-6 col-sm-6">
                                                            <label for="nohp">Nomor HP Penanggung Jawab</label>
                                                            <input type="tel" class="form-control" oninvalid="this.setCustomValidity('BISA KALI DIISI NOMOR HP-NYAA')" oninput="setCustomValidity('')" id="TxtIsi3" pattern="[0-9]{1,40}" title=" 0-9 (Maksimal 13 karakter)" required name="nohp" maxlength="40" placeholder="NOMOR HP PENANGGUNG JAWAB" autocomplete="off" />
                                                            <span id="MsgIsi3" style="color:#CC0000; font-size:10px;"></span>
                                                       </div>
                                                       <div class="col-md-6 col-sm-6">
                                                            <label for="cbayar">Cara Bayar</label>
                                                            <select name="cbayar" id="cbayar" class="form-control" data-toggle="modal"
                                                                 data-target="#staticBackdrop">
                                                                 <option disabled selected hidden value="">PILIH CARA BAYAR</option>
                                                                 <?php
                                                                      unset($_SESSION["cbayar"]);
                                                                      if (!isset($_SESSION["cbayar"])) {
                                                                           $datacbayar   = "";
                                                                           $querycbayar  = bukaquery("SELECT * from tabel_reference_jenis_bayar group by cara_bayar");
                                                                           // $rsquerypoli = mysqli_fetch_array($querypoli);
                                                                           // ekopre($rsquerypoli);
                                                                           while ($rsquerycbayar = mysqli_fetch_array($querycbayar)) {
                                                                                $datacbayar = $datacbayar . "<option value='$rsquerycbayar[0]'>$rsquerycbayar[1]</option>";
                                                                           }
                                                                           $_SESSION["cbayar"] = $datacbayar;
                                                                      }
                                                                      echo $_SESSION["cbayar"];
                                                                 ?>
                                                            </select>
                                                       </div>
                                                       <div class="col-md-6 col-sm-6">
                                                            <label for="tanggal">Pilih Tanggal</label>
                                                            <table width="100%">
                                                                 <tr>
                                                                      <td>
                                                                           <select name="TglDaftar" class="form-control">
                                                                                <?php
                                                                                     echo "<option>$tglbesok</option>";
                                                                                     // loadTgl2();
                                                                                     ?>
                                                                           </select>
                                                                      </td>
                                                                      <td>
                                                                           <select name="BlnDaftar" class="form-control">
                                                                                <?php
                                                                                     echo "<option>$blnbesok</option>";
                                                                                     // loadBln2();
                                                                                     ?>
                                                                           </select>
                                                                      </td>
                                                                      <td>
                                                                           <select name="ThnDaftar" class="form-control">
                                                                                <?php
                                                                                     echo "<option>$thnbesok</option>";
                                                                                     // loadThn4();
                                                                                     ?>
                                                                           </select>
                                                                      </td>
                                                                 </tr>
                                                            </table>
                                                       </div>
                                                       <div class="col-md-6 col-sm-6">
                                                            <label for="poli">Poliklinik</label>
                                                            <select name="poli" class="form-control">
                                                                 <option disabled selected hidden value="">PILIH POLI TUJUAN</option>
                                                                 <?php
                                                                      if (!isset($_SESSION["poli"])) {
                                                                           $datapoli   = "";
                                                                           $querypoli  = bukaquery("SELECT * from poliklinik order by nm_poli");
                                                                           // $rsquerypoli = mysqli_fetch_array($querypoli);
                                                                           // ekopre($rsquerypoli);
                                                                           while ($rsquerypoli = mysqli_fetch_array($querypoli)) {
                                                                                $datapoli = $datapoli . "<option value='$rsquerypoli[0]'>$rsquerypoli[1]</option>";
                                                                           }
                                                                           $_SESSION["poli"] = $datapoli;
                                                                      }
                                                                      echo $_SESSION["poli"];
                                                                 ?>
                                                            </select>
                                                       </div>

                                                       <!-- file default -->
                                                       <div class="col-md-6 col-sm-6" id="uktp">
                                                            <label for="alamat">Upload KTP</label>
                                                            <input type="file" accept="image/*" id="dktp" class="form-control" required name="upktp" onsubmit="return validasifile();" oninvalid="this.setCustomValidity('BISA KALI DI-UPLOAD FOTO KTP-NYA')" oninput="setCustomValidity('')" />
                                                            <!-- <span id="MsgIsi2" style="color:#CC0000; font-size:10px;"></span> -->
                                                       </div>
                                                       <div class="col-md-6 col-sm-6" id="ukj">
                                                            <label for="alamat">Upload Kartu Jaminan Kesehatan</label>
                                                            <input type="file" accept="image/*" id="dkj" onsubmit="return validasifile();" oninvalid class="form-control text-uppercase" name="up_kj" />
                                                            <!-- <span id="MsgIsi2" style="color:#CC0000; font-size:10px;"></span> -->
                                                       </div>

                                                       <!-- kode form untuk bpjs -->
                                                       <div class="col-md-6 col-sm-6" id="srujuk" hidden>
                                                            <label for="alamat">Upload Surat Rujukan</label>
                                                            <input type="file" accept="image/*" id="dsrujuk" onsubmit="return validasifile();" oninvalid class="form-control text-uppercase" name="up_rujuk" />
                                                            <!-- <span id="MsgIsi2" style="color:#CC0000; font-size:10px;"></span> -->
                                                       </div>
                                                       <div class="col-md-6 col-sm-6" id="skontrol" hidden>
                                                            <label for="alamat">Upload Surat Kontrol (Jika Ada)</label>
                                                            <input type="file" accept="image/*" id="dskontrol" onsubmit="return validasifile();" oninvalid class="form-control text-uppercase" name="up_kontrol"  />
                                                            <!-- <span id="MsgIsi2" style="color:#CC0000; font-size:10px;"></span> -->
                                                       </div>

                                                       <!-- kode form untuk Pihak Ketiga -->
                                                       <div class="col-md-12 col-sm-12" id="fgl" hidden>
                                                            <label for="alamat">Upload Guarantee Letter</label>
                                                            <input type="file" accept="image/*" id="dgl" onsubmit="return validasifile();" oninvalid class="form-control text-uppercase" name="up_gl" />
                                                            <!-- <span id="MsgIsi2" style="color:#CC0000; font-size:10px;"></span> -->
                                                       </div>

                                                       <div class="col-md-12 col-sm-12">
                                                            <label for="pesan">Tambahan Pesan</label>
                                                            <textarea class="form-control" rows="2" maxlength="400" oninvalid="this.setCustomValidity('BISA KALI DIISI PESAN KELUHANNYA')" oninput="setCustomValidity('')" id="TxtIsi5" required name="pesan" placeholder="TAMBAHAN PESAN" autocomplete="off"></textarea>
                                                            <span id="MsgIsi5" style="color:#CC0000; font-size:10px;"></span>
                                                       </div>
                                                       <button type="submit" class="form-control" id="cf-submit-kirim-book" name="btnBooking">Kirimkan</button>
                                                  </div>
                                             </form>
                                        </div>
                                        
                                        <div class="col-md-12 col-sm-12" id="form_plama">
                                             <div class="section-title wow fadeInUp" data-wow-delay="0.4s">
                                                  <h2>
                                                       <center>Log In Pasien</center>
                                                  </h2>
                                             </div>
                                                  <!-- <div class="wow fadeInUp" data-wow-delay="0.8s">
                                                            <div class="col-md-12 col-sm-12">
                                                  Jika anda pasien lama atau pernah berobat sebelumnya, untuk nomor rekam medis dan password login bisa Anda tanyakan kepada petugas Kami saat Anda melakukan registrasi secara offline. Dan password bisa Anda ubah setelah login di aplikasi EPasien. Jika Anda pasien baru dan belum pernah periksa sebelumnya, silahkan melakukan <a href="index.php?act=Home#appointment"><b>booking</b></a> atau buat janji melalui menu utama EPasien ini. Setelah admin kami melakukan verifikasi data, Anda akan mendapat password login dan antrian periksa sesuai booking Anda.<br/><br/><br/>
                                                  </div> -->
                                             <?php
                                                  $BtnLogin=isset($_POST['BtnLogin'])?$_POST['BtnLogin']:NULL;
                                                  if (isset($BtnLogin)) {
                                                       if(@$_SESSION["Capcay"]!= getOne2("select aes_encrypt(".cleankar($_POST["inputcaptcha"]).",'windi')")){
                                                            echo "<form id=\"appointment-form-plama\" role=\"form\" method=\"post\" action=\"\" enctype=multipart/form-data>
                                                                      <div class=\"col-md-12 col-sm-12\">
                                                                           <label for=\"norme\">Nomer Rekam Medis</label>
                                                                           <input type=\"password\" class=\"form-control\" name=\"norme\" oninvalid=\"this.setCustomValidity('KOSONGG BRADERR')\" oninput=\"setCustomValidity('')\" pattern=\"[A-Z0-9-]{1,65}\" title=\" A-Z0-9- (Maksimal 65 karakter)\" required placeholder=\"Masukkan Nomor Rekam Medis\" onkeydown=\"setDefault(this, document.getElementById('MsgIsi1'));\" id=\"TxtIsi1\" autocomplete=\"off\" autofocus/>
                                                                           <span id=\"MsgIsi1\" style=\"color:#CC0000; font-size:10px;\"></span>
                                                                      </div>
                                                                      <div class=\"col-md-12 col-sm-12\">
                                                                           <label for=\"passworde\">Konfirmasi Nomor Rekam Medis</label>
                                                                           <input type=\"password\" class=\"form-control\" name=\"passworde\" oninvalid=\"this.setCustomValidity('KOSONGG BRADERR')\" oninput=\"setCustomValidity('')\" required placeholder=\"Masukkan Nomor Rekam Medis\" onkeydown=\"setDefault(this, document.getElementById('MsgIsi2'));\" id=\"TxtIsi2\" autocomplete=\"off\" />
                                                                           <span id=\"MsgIsi2\" style=\"color:#CC0000; font-size:10px;\"></span>
                                                                      </div>
                                                                      <div class=\"col-md-12 col-sm-12\">
                                                                           <label for=\"captcha\">Captcha</label>
                                                                           <table width=\"100%\" border=\"0\">
                                                                                <tr>
                                                                                <td width=\"50%\" valign=\"top\">
                                                                                     <img width=\"95%\" height=\"45px\" src=\"pages/captcha.php\" alt=\"gambar\" />
                                                                                </td>
                                                                                <td width=\"50%\">
                                                                                     <input type=\"text\" class=\"form-control\" oninvalid=\"this.setCustomValidity('JANGAN KOSONNGG')\" oninput=\"setCustomValidity('')\" onkeydown=\"setDefault(this, document.getElementById('MsgIsi3Cap'));\" id=\"TxtIsi3Cap\" name=\"inputcaptcha\" pattern=\"[0-9]{1,6}\" title=\" 0-9 (Maksimal 6 karakter)\" required placeholder=\"Masukkan Captcha\" autocomplete=\"off\" />
                                                                                </td>
                                                                                </tr>
                                                                           </table>
                                                                           <span id=\"MsgIsi3Cap\" style=\"color:#CC0000; font-size:10px;\"></span>
                                                                      </div>
                                                                      <div class=\"col-md-12 col-sm-12\">
                                                                           <span style=\"color:#CC0000; font-size:12px;\">Captcha tidak sesuai, silahkan ulangi ...!</span><br/><br/>
                                                                      </div>
                                                                      <div class=\"col-md-12 col-sm-12\">
                                                                           <button type=\"submit\" class=\"form-control\" id=\"cf-submit-login\" name=\"BtnLogin\">Log In</button>
                                                                      </div>
                                                                 </form>";
                                                       }else{
                                                            unset($_SESSION['Capcay']);
                                                            $usere      = cleankar($_POST['norme']);
                                                            $passworde  = cleankar2($_POST['passworde']);
                                                            if(getOne2("select count(*) from personal_pasien where no_rkm_medis='$usere' and password=aes_encrypt('$passworde','windi')")>0){
                                                            $_SESSION["ses_pasien"]= encrypt_decrypt($usere,"e");
                                                            exit(header("Location:index.php"));
                                                            }else{
                                                            echo "<form id=\"appointment-form-plama\" role=\"form\" onsubmit=\"return validasiIsi();\" method=\"post\" action=\"\" enctype=multipart/form-data>
                                                                      <div class=\"col-md-12 col-sm-12\">
                                                                           <label for=\"norme\">Nomer Rekam Medis</label>
                                                                           <input type=\"password\" class=\"form-control\" name=\"norme\" pattern=\"[A-Z0-9-]{1,65}\" title=\" A-Z0-9- (Maksimal 65 karakter)\" required placeholder=\"Masukkan Nomor Rekam Medis\" onkeydown=\"setDefault(this, document.getElementById('MsgIsi1'));\" id=\"TxtIsi1\" autocomplete=\"off\" autofocus/>
                                                                           <span id=\"MsgIsi1\" style=\"color:#CC0000; font-size:10px;\"></span>
                                                                      </div>
                                                                      <div class=\"col-md-12 col-sm-12\">
                                                                           <label for=\"passworde\">Konfirmasi Nomor Rekam Medis</label>
                                                                           <input type=\"password\" class=\"form-control\" name=\"passworde\" required placeholder=\"Masukkan Nomor Rekam Medis\" onkeydown=\"setDefault(this, document.getElementById('MsgIsi2'));\" id=\"TxtIsi2\" autocomplete=\"off\" />
                                                                           <span id=\"MsgIsi2\" style=\"color:#CC0000; font-size:10px;\"></span>
                                                                      </div>
                                                                      <div class=\"col-md-12 col-sm-12\">
                                                                           <span style=\"color:#CC0000; font-size:12px;\">Maaf, gagal login. Nomor rekam medis ada yang salah atau tidak sama ...!</span><br/><br/>
                                                                      </div>
                                                                      <div class=\"col-md-12 col-sm-12\">
                                                                           <label for=\"captcha\">Captcha</label>
                                                                           <table width=\"100%\" border=\"0\">
                                                                           <tr>
                                                                                <td width=\"50%\" valign=\"top\">
                                                                                     <img width=\"95%\" height=\"45px\" src=\"pages/captcha.php\" alt=\"gambar\" />
                                                                                </td>
                                                                                <td width=\"50%\">
                                                                                     <input type=\"text\" class=\"form-control\" onkeydown=\"setDefault(this, document.getElementById('MsgIsi3'));\" id=\"TxtIsi3\" name=\"inputcaptcha\" pattern=\"[0-9]{1,6}\" title=\" 0-9 (Maksimal 6 karakter)\" required placeholder=\"Masukkan Captcha\" autocomplete=\"off\" />
                                                                                </td>
                                                                           </tr>
                                                                           </table>
                                                                           <span id=\"MsgIsi3\" style=\"color:#CC0000; font-size:10px;\"></span>
                                                                      </div>
                                                                      <div class=\"col-md-12 col-sm-12\">
                                                                           <button type=\"submit\" class=\"form-control\" id=\"cf-submit\" name=\"BtnLogin\">Log In</button>
                                                                      </div>
                                                                 </form>";
                                                            }
                                                       }                                                  
                                                       
                                                       // ekopre('halo halo');
                                                  }else{
                                                       echo "<form id=\"appointment-form-plama\" role=\"form\"  method=\"post\" action=\"\" enctype=multipart/form-data>
                                                                 <div class=\"col-md-12 col-sm-12\">
                                                                      <label for=\"norme\">Nomer Rekam Medis</label>
                                                                      <input type=\"password\" class=\"form-control\" name=\"norme\" pattern=\"[A-Z0-9-]{1,65}\" title=\" A-Z0-9- (Maksimal 65 karakter)\" required placeholder=\"Masukkan Nomor Rekam Medis\" onkeydown=\"setDefault(this, document.getElementById('MsgIsi1'));\" id=\"TxtIsi1\" autocomplete=\"off\" autofocus/>
                                                                      <span id=\"MsgIsi1\" style=\"color:#CC0000; font-size:10px;\"></span>
                                                                 </div>
                                                                 <div class=\"col-md-12 col-sm-12\">
                                                                      <label for=\"passworde\">Konfirmasi Nomor Rekam Medis</label>
                                                                      <input type=\"password\" class=\"form-control\" name=\"passworde\" required placeholder=\"Masukkan Nomor Rekam Medis\" onkeydown=\"setDefault(this, document.getElementById('MsgIsi2'));\" id=\"TxtIsi2\" autocomplete=\"off\" />
                                                                      <span id=\"MsgIsi2\" style=\"color:#CC0000; font-size:10px;\"></span>
                                                                 </div>
                                                                 <div class=\"col-md-12 col-sm-12\">
                                                                      <label for=\"captcha\">Captcha</label>
                                                                      <table width=\"100%\" border=\"0\">
                                                                           <tr>
                                                                                <td width=\"50%\" valign=\"top\">
                                                                                <img width=\"95%\" height=\"45px\" src=\"pages/captcha.php\" alt=\"gambar\" />
                                                                                </td>
                                                                                <td width=\"50%\">
                                                                                <input type=\"text\" class=\"form-control\" onkeydown=\"setDefault(this, document.getElementById('MsgIsi3Cap'));\" id=\"TxtIsi3Cap\" name=\"inputcaptcha\" pattern=\"[0-9]{1,6}\" title=\" 0-9 (Maksimal 6 karakter)\" required placeholder=\"Masukkan Captcha\" autocomplete=\"off\" />
                                                                                </td>
                                                                           </tr>
                                                                      </table>
                                                                      <span id=\"MsgIsi3Cap\" style=\"color:#CC0000; font-size:10px;\"></span>
                                                                 </div>
                                                                 <div class=\"col-md-12 col-sm-12\">
                                                                      <button type=\"submit\" class=\"form-control\" id=\"cf-submit-login\" name=\"BtnLogin\">Log In</button>
                                                                 </div>
                                                            </form>";
                                                       // ekopre('halo halo');
                                                  }
                                             ?>
                                        </div>

                                        <!-- <div class="col-md-12 col-sm-12">
                                             <a href="index.php?act=CekBooking" class="btn btn-warning" style="width: 100%; height: ; margin-bottom:15px;">Cek Booking</a>
                                        </div> -->
                                   </div>
                              </div>
                         </div>
                    </div>
               </div>
          </div>
     </section>
</section>

<!-- TEAM -->
<section id="team" data-stellar-background-ratio="1">
      <div class="container">
           <div class="row">
                <div class="col-md-12 col-sm-12">
                     <div class="about-info">
                          <h2 class="section-title wow fadeInUp" data-wow-delay="0.1s"><center>Dokter Kami</center></h2>
                     </div>
                </div>
                <div class="clearfix"></div>
                <?php
                $_session['dir'] = "images/dokter/";
                $_session['ext'] = ".jpg";
               //  unset matikan jika sudha beres
                unset($_SESSION["dokter"]);
                    if (!isset($_SESSION["dokter"])) {
                         $delay          = 0.2;
                         $datadokter     = "";
                         $querydokter = bukaquery("select dokter.kd_dokter,left(dokter.nm_dokter,20) as dokter,spesialis.nm_sps,dokter.no_ijn_praktek,pegawai.photo,dokter.no_telp from dokter inner join spesialis on dokter.kd_sps=spesialis.kd_sps inner join pegawai on dokter.kd_dokter=pegawai.nik where dokter.status='1' and dokter.kd_dokter<>'-' group by spesialis.nm_sps limit 5");
                         while ($rsquerydokter = mysqli_fetch_array($querydokter)) {
                              $kd_dokter = str_replace(' ', '', $rsquerydokter[0]);
                              $datadokter = $datadokter .
                                   "<div class='col-md-4 col-sm-6'>
                                    <div class='team-thumb wow fadeInUp' data-wow-delay='" . $delay . "s'>
                                          <img alt='Photo' src='$_session[dir]$kd_dokter$_session[ext]' class='img-responsive' style='width: 300px; height: 400px; object-fit: cover;' />
                                          <div class='team-info'>
                                               <h3>$rsquerydokter[1]</h3>
                                               <p>$rsquerydokter[2]</p>
                                               <div class='team-contact-info'>
                                                    <p><i class='fa fa-phone'></i> HP/Telp. $rsquerydokter[5] </p>
                                                    <p><i class='fa fa-envelope-o'></i> No.SIP. $rsquerydokter[3] </p>
                                               </div>
                                               <ul class='social-icon'>
                                                    <li><a href='#' class='fa fa-linkedin-square'></a></li>
                                                    <li><a href='#' class='fa fa-envelope-o'></a></li>
                                               </ul>
                                          </div>
                                    </div>
                                    <br/>
                               </div>";
                              $delay = $delay + 0.2;
                         }
                         $_SESSION["dokter"] = $datadokter;
                    }

                    echo $_SESSION["dokter"];
                    ?>
                <div class="col-md-4 col-sm-6">
                     <div class="wow fadeInUp" data-wow-delay="<?= $delay; ?>s">
                         <br/><br/><br/><br/><center><a href='index.php?act=DokterKami' class="btn btn-warning" >Tampilkan Semua Dokter</a></center>
                     </div>
                </div>

           </div>
      </div>
 </section>


<!-- Jadwal -->
<section id="news" data-stellar-background-ratio="2.5">
     <div class="container">
          <div class="row">
               <div class="col-md-12 col-lg-12 col-sm-12">
                    <div class="section-title wow fadeInUp" data-wow-delay="0.1s">
                         <h2>Jadwal Praktek Dokter</h2>
                    </div>
                    <div class="news-thumb wow fadeInUp" data-wow-delay="0.4s">
                         <form id="carikeyword" style="margin-bottom:1%" name="frmCariJadwal" method="post" action="" enctype=multipart/form-data>
                              <table width="100%" border='0' align="center">
                                   <tr class="head">
                                        <td width="20%" align="right"><label for="keyword">Keyword</label></td>
                                        <td width="1%"><label for=":">&nbsp;:&nbsp;</label></td>
                                        <td width="60%"><input name="keyword" type="text" id="keyword" pattern="[a-zA-Z0-9, ./@_]{1,65}" title=" a-zA-Z0-9, ./@_" class="form-control" value="" size="65" maxlength="250" autocomplete="off" /></td>
                                        <td width="19%" align="left">&nbsp;<input name="BtnKeyword" id=btnkey type=submit class="btn btn-warning" value="Cari"></td>
                                   </tr>
                              </table>
                         </form>
                         <div id='hasilcari' style="overflow-x:auto;">
                              <table hidden id="jadwal-tabel" class="table table-striped table-bordered" style="width:100%">
                              <thead>
                                   <tr>
                                   <th width='10%'><center>Hari Kerja</center></th>
                                   <th width='30%'><center>Nama Dokter</center></th>
                                   <th width='30%'><center>Poliklinik</center></th>
                                   <th width='15%'><center>Jam Mulai</center></th>
                                   <th width='15%'><center>Jam Selesai</center></th>
                                   </tr>
                              </thead>
                              </table>
                         </div>
                    </div>
               </div>
          </div>
     </div>
</section>

<!-- MAKE AN APPOINTMENT -->
<!-- <section id="appointment" data-stellar-background-ratio="3">
      <div class="container">
           <div class="row">
                <div class="col-md-6 col-sm-6">
                     <img src="images/appointment-image.jpg" class="img-responsive" alt="">
                </div>
                <div class="col-md-6 col-sm-6">
                     <form id="appointment-form" role="form" onsubmit="return validasiIsi();" method="post" action="index.php?act=PendaftaranPeriksa" enctype=multipart/form-data>
                          <div class="about-info wow fadeInUp" data-wow-delay="0.4s">
                               <h2><center>Buat Janji/Booking</center></h2>
                               <div class="col-md-12 col-sm-12">
                                    <label for="nama">Nama</label>
                                    <input type="text" class="form-control text-uppercase" onkeydown="setDefault(this, document.getElementById('MsgIsi1'));" id="TxtIsi1" pattern="[a-zA-Z0-9, ./@_]{1,40}" title=" a-zA-Z0-9, ./@_ (Maksimal 40 karakter)" required name="nama" maxlength="40" placeholder="Nama Anda" autocomplete="off"/>
                                    <span id="MsgIsi1" style="color:#CC0000; font-size:10px;"></span>
                               </div>
                               <div class="col-md-12 col-sm-12">
                                    <label for="alamat">Alamat</label>
                                    <input type="text" class="form-control text-uppercase" onkeydown="setDefault(this, document.getElementById('MsgIsi2'));" id="TxtIsi2" pattern="[a-zA-Z0-9, ./@_]{1,200}" title=" a-zA-Z0-9, ./@_ (Maksimal 200 karakter)" required name="alamat" maxlength="200" placeholder="Alamat Anda" autocomplete="off" />
                                    <span id="MsgIsi2" style="color:#CC0000; font-size:10px;"></span>
                               </div>
                               <div class="col-md-6 col-sm-6">    
                                    <label for="nohp">Nomor HP/Telephone</label>
                                    <input type="tel" class="form-control" onkeydown="setDefault(this, document.getElementById('MsgIsi3'));" id="TxtIsi3" pattern="[0-9]{1,40}" title=" 0-9 (Maksimal 40 karakter)" required name="nohp" maxlength="40" placeholder="Nomor HP/Telephone Anda" autocomplete="off" />
                                    <span id="MsgIsi3" style="color:#CC0000; font-size:10px;"></span>
                               </div>
                               <div class="col-md-6 col-sm-6">
                                    <label for="email">Email</label>
                                    <input type="email" class="form-control" onkeydown="setDefault(this, document.getElementById('MsgIsi4'));" id="TxtIsi4" pattern="[a-zA-Z0-9, ./@_]{1,50}" title=" a-zA-Z0-9, ./@_ (Maksimal 50 karakter)" required name="email" maxlength="50" placeholder="Email Anda" autocomplete="off" />
                                    <span id="MsgIsi4" style="color:#CC0000; font-size:10px;"></span>
                               </div>
                               <div class="col-md-6 col-sm-6">
                                    <label for="tanggal">Pilih Tanggal</label>
                                    <table width="100%">
                                        <tr>
                                            <td>
                                               <select name="TglDaftar" class="form-control">
                                                <?php
                                                  echo "<option>$tglbesok</option>";
                                                  loadTgl2();
                                                  ?>
                                               </select>
                                            </td>
                                            <td>
                                                <select name="BlnDaftar" class="form-control">
                                                 <?php
                                                  echo "<option>$blnbesok</option>";
                                                  loadBln2();
                                                  ?>
                                                </select>
                                            </td>
                                            <td>
                                                <select name="ThnDaftar" class="form-control">
                                                 <?php
                                                  echo "<option>$thnbesok</option>";
                                                  loadThn4();
                                                  ?>
                                                </select>
                                            </td>
                                        </tr>
                                    </table>
                               </div>
                               <div class="col-md-6 col-sm-6">
                                    <label for="poli">Poliklinik/Unit Penunjang</label>
                                    <select name="poli" class="form-control">
                                         <?php
                                             if (!isset($_SESSION["poli"])) {
                                                  $datapoli   = "";
                                                  $querypoli  = bukaquery("SELECT * from poliklinik order by nm_poli");
                                                  while ($rsquerypoli = mysqli_fetch_array($querypoli)) {
                                                       $datapoli = $datapoli . "<option value='$rsquerypoli[0]'>$rsquerypoli[1]</option>";
                                                  }
                                                  $_SESSION["poli"] = $datapoli;
                                             }

                                             echo $_SESSION["poli"];
                                             ?>
                                    </select>
                               </div>
                               <div class="col-md-12 col-sm-12">
                                    <label for="pesan">Tambahan Pesan</label>
                                    <textarea class="form-control" rows="2" maxlength="400" onkeydown="setDefault(this, document.getElementById('MsgIsi5'));" id="TxtIsi5" required name="pesan" placeholder="Tambahan Pesan" autocomplete="off"></textarea>
                                    <span id="MsgIsi5" style="color:#CC0000; font-size:10px;"></span>
                                    <button type="submit" class="form-control" id="cf-submit" name="btnBooking">Kirimkan</button>
                               </div>
                               <div class="col-md-12 col-sm-12">
                                   <label>
                                        <a href="index.php?act=CekBooking" class="btn btn-warning" style="margin-bottom:10px;">Cek Booking</a> Melihat status booking Anda.<br/>
                                        <a href="index.php?act=LoginPasien" class="btn btn-success" style="text-align:center; padding-left:35px; padding-right:35px;">Log In</a> Jika sudah pernah periksa.
                                   </label><br/><br/>
                               </div>
                          </div>
                    </form>
                </div> 
           </div>
      </div>
</section> -->

<section id="google-map">
     <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15930.789719616965!2d114.8517418!3d-3.4236774!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x312c636abedd3486!2sRS.%20Pelita%20Insani!5e0!3m2!1sen!2sid!4v1658721088311!5m2!1sen!2sid" width="100%" height="350" frameborder="0" style="border:0" allowfullscreen="true"></iframe>
</section>