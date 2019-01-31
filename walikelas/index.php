  <!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
    <meta charset="UTF-8" />
    <title>SISTEM INFORMASI NILAI RAPORT SISWA | Dashboard </title>
     <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="" name="description" />
    <meta content="" name="author" />
     <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <![endif]-->
    <!-- GLOBAL STYLES -->
    <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.css" />
    <link rel="stylesheet" href="assets/css/main.css" />
    <link rel="stylesheet" href="assets/css/MoneAdmin.css" />
    <link rel="stylesheet" href="assets/plugins/Font-Awesome/css/font-awesome.css" />
    <!--END GLOBAL STYLES -->

    <!-- PAGE LEVEL STYLES -->
    <!-- END PAGE LEVEL  STYLES -->
     <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
</head>

    <!-- END HEAD -->

    <!-- BEGIN BODY -->
<body class="padTop53 " >
<?php
session_start();
include "config.php";

    if($_SESSION['walikelas']) 
    {
        ?>
    <!-- MAIN WRAPPER -->
    <div id="wrap" >
   <!-- HEADER SECTION -->
        <div id="top">

            <nav class="navbar navbar-inverse navbar-fixed-top " style="padding-top: 10px;">
                <a data-original-title="Show/Hide Menu" data-placement="bottom" data-tooltip="tooltip" class="accordion-toggle btn btn-primary btn-sm visible-xs" data-toggle="collapse" href="#menu" id="menu-toggle">
                    <i class="icon-align-justify"></i>
                </a>
                <!-- LOGO SECTION -->
                <header class="navbar-header">
        <h4><b>SINRS</b></h4>
                </header>
                <!-- END LOGO SECTION -->
                <ul class="nav navbar-top-links navbar-right">

                    <!--ADMIN SETTINGS SECTIONS -->

                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <i class="icon-user "></i> <i class="icon-chevron-down "></i>
                        </a>

                        <ul class="dropdown-menu dropdown-user">
                            <li><a href="../logout.php"><i class="icon-signout"></i> Logout </a>
                            </li>
                        </ul>

                    </li>
                    <!--END ADMIN SETTINGS -->
                </ul>

            </nav>

        </div>
        <!-- END HEADER SECTION -->

       <?php include('m4.php') ?>
 <!--PAGE CONTENT -->
        <div id="content">
             
            <div class="inner" style="min-height: 700px;">
                <div class="row">
                    <div class="col-lg-12">
                        <?php
                  if(@$_SESSION['admin']) {
                    $userlogin=@$_SESSION['admin'];

                   }else if(@$_SESSION['guru']){
                    $userlogin=@$_SESSION['guru'];

                    }else if(@$_SESSION['walikelas']) {
                    $userlogin=@$_SESSION['walikelas'];
                }
                $sql=mysql_query("SELECT * FROM `user` WHERE id='$userlogin'") or die(mysql_error());
                $cek   =mysql_fetch_array($sql);
                ?>
                <h1><marquee behavior="alternate"> "Selamat Datang <?php echo $cek['nama_lengkap'];?>" </h1></marquee>
                    </div>
                </div>
               <hr/>
                <!--TABLE, PANEL, ACCORDION AND MODAL  -->
                  <div class="row">
                    <div class="col-lg-6">
                        <div class="panel panel-success">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    Motto dan Janji Pelayanan SMK NEGERI 1 SLAWI
                                </h4>
                            </div>
                            <div class="panel-body">
                                    <header>
                                        <h4>Motto SMK NEGERI 1 SLAWI</h4>
                                    </header>
                                    <p>
                                      <div class="body collapse in">
                                    <strong>Pelayanan prima, Unggul dalam mutu, Tinggi dalam prestasi</strong><br></p>
                                </div>
                                    <header>
                                        <h4>Janji Pelayanan SMK Negeri 1 Slawi</h4>
                                    </header>
                                    <p>
                                    <div class="body collapse in">
                                        <strong>1) Disiplin dalam bekerja, santun dalam bahasa, sopan dalam bertindak, prima dalam pelayanan.</strong><br>
                                        </p>
                                        <p>
                                        <strong>2) Memberikan informasi yang jelas, transparan dan dapat dipertanggung jawabkan.</strong><br></p>
                                        <p>
                                         <strong>3) Menerima dan menanggapi masukan, kritik dan saran.</strong><br></p>
                                    </div>
                            </div>
                        </div>
                            
                    </div>
                  <div class="col-lg-6">
                        <div class="panel panel-danger">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    Program Keahlian Di SMK N 1 SLAWI
                                </h4>
                            </div>
                            <div class="panel-body">
                                <p>
                                    <strong>a) Teknik komputer dan jaringan ( TKJ )</strong><br>
                                </p>
                                <p>
                                    <strong>b) Multimedia ( MM )</strong><br>
                                </p>
                                <p>
                                    <strong>c) Rekayasa Perangkat Lunak ( RPL )</strong><br>
                                </p>
                                    <strong>d) Akuntansi ( AK )</strong><br>
                                </p>
                                <p>
                                    <strong>e) Pemasaran ( PM )</strong><br>
                                </p>
                                <p>
                                    <strong>f) Administrasi Perkantoran ( AP )</strong><br>
                                </p>
                                
                            </div>
                          </div>
                          <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseFour">SMK NEGERI 1 SLAWI</a>
                                </h4>
                            </div>
                            <div id="collapseFour" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <p><i class="icon-map-marker"><i class="hidden">address</i></i> JL. H. Agus Salim Kelurahan Procot, Kecamatan Slawi</p>
                                    <p><i class="icon-phone-sign"><i class="hidden">phone</i></i> (0283) 491366</p>
                                    <p><i class="icon-rss-sign"><i class="hidden">Website</i></i> smkn1slawi.sch.id</p>
                                    <p><i class="icon-envelope"><i class="hidden">Email</i></i> smkn1_slawi@yahoo.co.id </p>
                                  </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-primary">
                            <div class="panel-heading ">
                                SMK NEGERI 1 SLAWI
                            </div>
                            <div class="panel-body">
                                <div class="panel-group" id="accordion">
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">Visi dan Misi SMK N 1 SLAWI</a>
                                            </h4>
                                        </div>
                                        <div id="collapseOne" class="panel-collapse collapse in">
                                            <div class="panel-body">
                                            <h4>VISI SMK N 1 SLAWI</h4>
                                             <p>
                                              <strong>Menjadi sekolah unggulan dalam prestasi dan menghasilkan tamatan yang mampu bersaing pada tingkat nasional dan internasional yang dilandasi iman dan taqwa.</strong><br></p>

                                            <h4>MISI SMK N 1 SLAWI</h4>
                                             <p>
                                              <strong>1) Menumbuhkan semangat keunggulan dan kompetitif secara intensif kepada seluruh warga sekolah</strong><br>
                                            </p>
                                             <p>
                                              <strong>2) Melaksanakan kegiatan belajar mengajar secara optimal yang berorientasi kepada pencapaian kompetensi berstandar Nasional dan Internasional dengan tetap mempertimbangkan potensi yang dimiliki oleh peserta didik</strong><br></p>
                                               <p>
                                              <strong>3) Melaksanakan kegiatan keagamaan sesuai agama yang dianut dan menumbuhkan cinta budaya bangsa sebagai kearifan dalam bertindak</strong><br></p>
                                               <p>
                                              <strong>4) Meningkatkan hubungan sekolah dengan DU/DI, lembaga sertifikasi yang telah memiliki reputasi nasional dan internasional.</strong><br></p>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">Sejarah SMK NEGERI 1 SLAWI</a>
                                            </h4>
                                        </div>
                                        <div id="collapseTwo" class="panel-collapse collapse">
                                            <div class="panel-body">
                                               Sejarah berdirinya SMK Negeri 1 Slawi mulai berdiri di awal bulan Agustus 1965 yang dibentuk panitia persiapan pendirian SMEA yang beranggotakan:
                                                  1.Bapak Imam Sudjaki
                                                  2.Bapak Rahardjo
                                                  3.Bapak Sikun Emidjojo
                                                  4.Bapak Durtam
                                                  5.Bapak Sumardji
                                                  6.Bapak Irfan Supandi
                                                  7.Bapak Sudarsono
                                                Panitia merumuskan untuk mendirikan SMEA Persiapan Slawi mengingat di Slawi belum terdapat Sekolah Kejuruan. Dengan bertempat di desa Preman/Dukuh Wringin Slawi, SMEA membuka 2 kelas dengan jumlah siswa 64 orang guru 10 0rang dan karyawan 2 orang. Karena belum memiliki gedung sekolah sendiri SMEA masih menumpang pada SMA Negeri Slawi. Namun sejak bulan Januari 1967 SMEA pindah di Kagok tepatnya jln Mayjen Sutoyo kecamatan Slawi, kabupaten Tegal jumlah guru menjadi 10 orang, karyawan 5 orang, seiring bertambahnya jumlah guru dan karyawan maka jumlah kelas pun ditambah 5 kelas dengan jumlah siswa 184 orang siswa sebagai kepala SMEA pada saat itu dijabat oleh bapak Soemardi BA. Dan semenjak itu pula status SMEA dinegerikan selama kurun waktu 25 tahun SMEA Negeri Slawi bertempat di Kagok. Namun pada tanggal 1 Juli 1992 SMEA Negeri pindah ke lokasi baru yaitu di Jln KH Agus Salim Procot Slawi. Lokasi baru ini dibangun berkat bantuan ADB Voced II secara bertahap. Dimulai dari bangunan, peralatan, praktek dan perabot dikirim dari Jakarta dan Semarang. Pengiriman terakhirpada bulan januari 1996. Masa jabatan bapak Soemardi BA. Sebagai kepala SMEA Negeri Slawi sejak berdirinya SMEA sampai dengan 30 April 1994.
                                                Pada tanggal 1 Mei 1994 dengan hak pensiun beliau menyerahkan jabatan kepala SMEA Negeri 1 Slawi kepada Ir K. Muchtar Affandi sebagai YMT, yang pada masa itu Bapak Ir k Muchtar Affandimenjabat kepala SMT pertanian Tegal. Jabatan YMT tersebut berakhir pada tanggal 09 juni 1994. Dan diserahterimakan kepada bapak Adi Wasono, BA masa jabatan Bapak Adi Wasono BA berlangsung selama 2 tahun mulai tanggal 9 Juni 1994 sampai 12 Januari 1996.
                                                Pada tanggal 16 Januari 1996 diadakan serah terima jabatan kepala SMEA Negeri Slawi dari bapak Adi wasono, BA kepada bapak Mudjijono, BA mulai tanggal I Juli 1997 nama SMEA Negeri berubah menjadi SMK Negeri 1 Slawi. Bapak Mudjijono, BA menjabat kepala sekolah sampai dengan tanggal 12 September 2001 karena pada tanggal 13 September 2001 beliu telah meninggal dunia. Oleh karena itu pada tanggal 14 September 2001 SMK Negeri Slawi dijabat oleh bapak Agoes Angkat Rahardjo sebagai YMT, sedangkan jabatan beliau masa itu kepala SMK Negeri 2 Adiwerna . dan sejak tanggal 31 Desember 2002 beliau bapak Drs Angkat Raharjo diangkat secara definitive sebagai kepala SMK Negeri 1 Slawi sampai dengan sekarang dan pada dan pada tanggal 15 Oktober 2004 SMK Negeri 1 Slawi Program Unggulan Akutansi ditetapkan sebagai sekolah Berstandar Internasional berdasarkan SK Direktur Pendidikan Menengah dan Kejuruan no 2833/ C5.3/ MN/2004. Karena pada tahun 2007 Bpak Drs Angkat Rahardjo dipindah tugaskan maka serah terima jabatan Kepala SMK Negeri 1 Slawi diserahkan kepada Bapak Samsul Mutasodirin, MM , dilanjutkan bapak purwanto hadi susetyo,Spd,Mpd dan yang saat ini adalah bapak Drs.Ikhwan,MM. Setelah bapak ikhwan pensiun sementara dipegang sebagai Plt adalah bapak Imron Effendi,S.P,M.Pd, dilanjutkan sebagai plt adalah bapak Drs.Parjana,MM .
                                              </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                            
                    </div>

                </div>
                   <!--TABLE, PANEL, ACCORDION AND MODAL  -->
            </div>

        </div>
        <!--END PAGE CONTENT -->

         <!-- END RIGHT STRIP  SECTION -->
    </div>

    <!--END MAIN WRAPPER -->
<?php include('footer.php') ?>
    
     <?php
     }

 else{
    echo"<script>window.alert('Maaf Anda Harus Login Dulu !!!')
    window.location='../index.php'</script>";
}

?>