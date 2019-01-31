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
    <link rel="stylesheet" href="assets/css/theme.css" />
    <link rel="stylesheet" href="assets/css/MoneAdmin.css" />
    <link rel="stylesheet" href="assets/plugins/Font-Awesome/css/font-awesome.css" />
    <link rel="stylesheet" href="assets/plugins/validationengine/css/validationEngine.jquery.css" />
    <!--END GLOBAL STYLES -->

    <!-- PAGE LEVEL STYLES -->
       <link rel="stylesheet" href="assets/plugins/validationengine/css/validationEngine.jquery.css" />
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
$id_ekstra =$_GET['id_ekstra'];
$query=mysql_query("SELECT * FROM `ekstra` WHERE id_ekstra='$id_ekstra'");
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
include"m4.php";
?>        
	    <!--PAGE CONTENT -->
        <div id="content">
           
                <div class="inner">
                          <div class="row">
                        <div class="col-lg-12">
                            <div class="box">
                                <header>
                                    <div class="icons"><i class="icon-star"></i></div>
                                    <h5>Edit Data Ekstrakurikuler</h5>
                                </header>
                                <div id="collapseOne" class="accordion-body collapse in body">
								<form action="editekstra.php" class="form-horizontal" method="post">
									<?php
									while($data=mysql_fetch_array($query))
								{
								?>
                                        <input type="hidden" name="id_ekstra" id="id_ekstra" value="<?php echo $data['id_ekstra'];?>" class="form-control" />
                                        <div class="form-group">
                                            <label class="control-label col-md-4">Kegiatan Ekstrakurikuler</label>

                                             <div class="col-md-4">
                                            <select class="form-control" id="nama_ekstra" name="nama_ekstra">
                                                <option>Rohani Islam (ROHIS)</option>
                                                <option>Patroli Keamanan Sekolah (PKS)</option>
                                                <option>Palang Merah Remaja (PMR)</option>
                                                <option>Pramuka</option>
                                                <option>Paskibra</option>
                                                <option>Seni Musik</option>
                                                <option>Seni Tari</option>
                                                <option>Bola Volly</option>
                                                <option>Bola Basket</option>
                                                <option>Mading</option>
                                            </select>
                                        </div>
                                        </div>
                                       <div class="form-group">
                                            <label class="control-label col-lg-4">Keterangan</label>

                                            <div class="col-lg-6">
                                                 <input type="autosize" id="ket" name="ket" value="<?php echo $data['ket'];?>" class="form-control"/>
                                            </div>
                                        </div>

                                        <div class="form-actions no-margin-bottom" style="text-align:center;">
                                            <input type="submit" value="Edit" class="btn btn-primary btn-lg " />
                                            <a href=\"javascript:history.back()\"></a> <input type="submit" value="Kembali" class="btn btn-danger btn-lg btn-flat"  />
                                           </div>
										<?php } ?>
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
