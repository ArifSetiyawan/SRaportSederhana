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

  if($_SESSION['admin']) 
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
include"menu.php";
?>
	    <!--PAGE CONTENT -->
        <div id="content">
           
                <div class="inner">
                          <div class="row">
                        <div class="col-lg-12">
                            <div class="box">
                                <header>
                                    <div class="icons"><i class="icon-tag"></i></div>
                                    <h5>Input Data Walikelas</h5>
                                </header>
                                <div id="collapseOne" class="accordion-body collapse in body">
                                    <form action="simpanwalas.php" class="form-horizontal" method="post">
                                        <input type="hidden" name="id_walas" id="id_walas"  class="form-control" />
                                          <div class="form-group">
                                            <label class="control-label col-md-4">Id guru</label>

                                             <div class="col-md-3">
                                            <select class="form-control" name="id_guru" id="id_guru">
                                                <?php
                                                $a="SELECT * FROM guru";
                                                $sql=mysql_query($a);
                                                while($data=mysql_fetch_array($sql)){
                                                ?>
                                                    <option value="<?php echo $data['id_guru']?>"><?php echo $data['id_guru']?> <?php echo $data['nama']; ?> </option>
                                                    <?php } ?>
                                                
                                            </select>
                                        </div>
                                        </div>
                                         <div class="form-group">
                                            <label class="control-label col-md-4">Mengajar</label>

                                             <div class="col-md-4">
                                            <select class="form-control" name="kd_mapel" id="kd_mapel">
                                                <?php
                                                $a="SELECT * FROM mapel";
                                                $sql=mysql_query($a);
                                                while($data=mysql_fetch_array($sql)){
                                                ?>
                                                    <option value="<?php echo $data['kd_mapel']?>"><?php echo $data['kd_mapel']?> <?php echo $data['mapel']?> </option>
                                                    <?php } ?>
                                                
                                            </select>
                                        </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-lg-4">Walikelas</label>

                                             <div class="col-lg-2">
                                              <select class="form-control" name="walas" id="walas">
                                                <option>X RPL</option>
                                                <option>XI RPL 1</option>
                                                <option>XI RPL 2</option>
                                                <option>XII RPL 1</option>
                                                <option>XII RPL 2</option>
                                              </select>
                                            </div>
                                        </div>
                                        <div class="form-actions no-margin-bottom" align="center">
                                            <input type="submit" value="Simpan" class="btn btn-primary btn-lg btn-flat" />
                                            <input type="reset" value="Reset" class="btn btn-danger btn-lg btn-flat" />
                                           </div>

                                    </form>
                                 </div>
                            </div>
                        </div>
                        <!--END PAGE CONTENT -->
                    </div>
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
