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

    if($_SESSION['guru']) 
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
<?php        
include"m2.php";
?>
<?php
                  if(@$_SESSION['admin']) {
                    $userlogin=@$_SESSION['admin'];

                   }else if(@$_SESSION['guru']){
                    $userlogin=@$_SESSION['guru'];

                    }else if(@$_SESSION['walikelas']) {
                    $userlogin=@$_SESSION['walikelas'];
                }
                $sql=mysql_query("SELECT user.id_guru,user.nama_lengkap,user.username,user.password,user.hak_akses,user.kd_mapel,mapel.mapel FROM `user` JOIN mapel ON user.kd_mapel=mapel.kd_mapel WHERE id='$userlogin'") or die(mysql_error());
                $cek   =mysql_fetch_array($sql);
                $matapel=$cek['mapel'];
                ?>

        <!--PAGE CONTENT -->
        <div id='content'>
            <div class='inner'>
                <div class='row'>
                        <div class='col-lg-12'>
                            <div class='box'>
                                <header>
                                    <div class='icons'><i class='icon-tasks'></i></div>
                                    <h5>Data Nilai Siswa</h5>
                                </header>
            
                <div class='row'>
                <div class='col-lg-12'>
                    <div class='panel panel-default'>
                        <div id='collapseOne' class='accordion-body collapse in body'>
                        </div>
                        <div class='panel-body'>
                         <p><a href='formnilai.php'><button class='btn btn-success'> Input Data </button></a></p>
                            <div class='table-responsive'>
                                <table class='table table-striped table-bordered table-hover' id='dataTables-example'>
                                    <thead>
                                        <tr>
                                                <th><div align='center'>NIS</th></div>
                                                <th><div align='center'>Nama</th></div>
                                                <th><div align='center'>Kelas</th></div>
                                                <th><div align='center'>Mapel</th></div>
                                                <th><div align='center'>Nh</th></div>
                                                <th><div align='center'>Nh2</th></div>
                                                <th><div align='center'>Nh3</th></div>
                                                <th><div align='center'>Nh4</th></div>
                                                <th><div align='center'>Nk</th></div>
                                                <th><div align='center'>Nk2</th></div>
                                                <th><div align='center'>Nk3</th></div>
                                                <th><div align='center'>Nk4</th></div>
                                                <th><div align='center'>UTS</th></div>
                                                <th><div align='center'>UAS</th></div>
                                                <th><div align='center'>NR</th></div>
                                                <th><div align='center'>Action</th></div>
                                        </tr>
                                    
                                    </thead>
                                    <tbody>
                                        <?php
                                   $tampil="SELECT nilai.id_nilai, siswa.nis, siswa.nama,siswa.kelas, nilai.kd_mapel, nilai.nh, nilai.nh2, nilai.nh3, nilai.nh4, nilai.np, nilai.np2, nilai.np3, nilai.np4, nilai.uts, nilai.uas, nilai.n_raport FROM nilai INNER JOIN siswa ON nilai.id_siswa = siswa.id_siswa WHERE kd_mapel='$matapel' ";
                                    $hasil =mysql_query($tampil);
                                    while($data =mysql_fetch_array($hasil))
                                    {
                                    $id_nilai=$data['id_nilai'];
                                    $nis =$data['nis'];
                                    $nama= $data['nama'];
                                    $kelas= $data['kelas'];
                                    $mapel= $data['kd_mapel'];
                                    $nh= $data['nh'];
                                    $nh2= $data['nh2'];
                                    $nh3= $data['nh3'];
                                    $nh4= $data['nh4'];
                                    $np= $data['np'];
                                    $np2= $data['np2'];
                                    $np3= $data['np3'];
                                    $np4= $data['np4'];
                                    $uts= $data['uts'];
                                    $uas= $data['uas'];
                                    $raport= $data['n_raport'];
                                    echo"<tr>
                                          <td><div align='center'>$nis</td></div>
                                          <td><div align='center'>$nama</td></div>
                                          <td><div align='center'>$kelas</td></div>
                                          <td><div align='center'>$mapel</td></div>
                                          <td><div align='center'>$nh</td></div>
                                          <td><div align='center'>$nh2</td></div>
                                          <td><div align='center'>$nh3</td></div>
                                          <td><div align='center'>$nh4</td></div>
                                          <td><div align='center'>$np</td></div>
                                          <td><div align='center'>$np2</td></div>
                                          <td><div align='center'>$np3</td></div>
                                          <td><div align='center'>$np4</td></div>
                                          <td><div align='center'>$uts</td></div>
                                          <td><div align='center'>$uas</td></div>
                                          <td><div align='center'>$raport</td></div>

                                          <td><div align='center'><a href='formeditnilai.php?id_nilai=$data[id_nilai]'><button class='btn btn-primary'><i class='icon-pencil icon-white'></i></button></a> 
                                            <a href='hapusnilai.php?id_nilai=$data[id_nilai]'><button class='btn btn-danger'><i class='icon-remove icon-white'></i></button></a></td></div>
                                        </tr>";?>

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