<!DOCTYPE html>
<!--[if IE 8]> <html lang=en" class="ie8"> <![endif]-->
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
    <link rel="stylesheet" href="assets/css/theme.css" />
    <link rel="stylesheet" href="assets/css/MoneAdmin.css" />
    <link rel="stylesheet" href="assets/plugins/Font-Awesome/css/font-awesome.css" />
    <!--END GLOBAL STYLES -->

    <!-- PAGE LEVEL STYLES -->
   <link href="assets/plugins/dataTables/dataTables.bootstrap.css" rel="stylesheet" />
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

<?php
include"config.php";
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
                            <i class="icon-user "></i>  <i class="icon-chevron-down "></i>
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
<?php        
include"m4.php";
?>

		<!--PAGE CONTENT -->
		<div id='content'>
            <div class='inner'>
                <div class='row'>
                        <div class='col-lg-12'>
                            <div class='box'>
                                <header>
                                    <div class='icons'><i class='icon-tasks'></i></div>
                                    <h5>Data Ketidakhadiran</h5>
                                </header>
				
                <div class='row'>
                <div class='col-lg-12'>
                    <div class='panel panel-default'>
                        <div id='collapseOne' class='accordion-body collapse in body'>
                        </div>
                        <div class='panel-body'>
                         <p><a href='formhadir.php'><button class='btn btn-success'> Tambah Data </button></a></p>
                            <div class='table-responsive'>
                                <table class='table table-striped table-bordered table-hover' id='dataTables-example'>
                                    <thead>
                                        <tr>
                                                <th><div align='center'>Nama Siswa</th></div>
                                                <th><div align='center'>Kelas</th></div>
                                                <th><div align='center'>Sakit</th></div>
                                                <th><div align='center'>Izin</th></div>
                                                <th><div align='center'>Tanpa Keterangan</th></div>
                                                <th><div align='center'>Action</th></div>
                                        </tr>
                                        
                                    </thead>
                                    <tbody>
                                        <?php
                                   $tampil="SELECT ketidakhadiran.id_hadir,siswa.nama,siswa.kelas,ketidakhadiran.sakit,ketidakhadiran.izin,ketidakhadiran.tnp_ket FROM ketidakhadiran INNER JOIN siswa ON ketidakhadiran.id_siswa=siswa.id_siswa";
                                    $hasil = mysql_query($tampil);
                                    while($data =mysql_fetch_array($hasil))
                                    {
                                    
                                    $id_hadir =$data['id_hadir'];   
                                    $nama_siswa= $data['nama'];
                                    $kelas_siswa= $data['kelas'];
                                    $sakit= $data['sakit'];
                                    $izin= $data['izin'];
                                    $ket= $data['tnp_ket'];
                                    
                                    echo"<tr>
                                          <td><div align='center'>$nama_siswa</td></div>
                                          <td><div align='center'>$kelas_siswa</td></div>
                                          <td><div align='center'>$sakit</td></div>
                                          <td><div align='center'>$izin</td></div>
                                          <td><div align='center'>$ket</td></div>
                                          <td><div align='center'><a href='formedithadir.php?id_hadir=$data[id_hadir]'><button class='btn btn-primary'>                                               <i class='icon-pencil icon-white'></i></button></a> <a href='hapushadir.php?id_hadir=$data[id_hadir]'><button class='btn btn-danger'><i class='icon-remove icon-white'></i></button></a></td></div>
                                        </tr>"; ?>

                                    <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                           
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </div>
                        <!--END PAGE CONTENT -->
                    </div>
    </div>

    <!--END MAIN WRAPPER -->

  <?php include"footer2.php" ?>

   <?php
     }

 else{
    echo"<script>window.alert('Maaf Anda Harus Login Dulu !!!')
    window.location='../index.php'</script>";
}

?>