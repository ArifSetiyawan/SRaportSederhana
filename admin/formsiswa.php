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
                                    <div class="icons"><i class="icon-user-md"></i></div>
                                    <h5>Input Data Siswa</h5>
                                </header>
                                <div id="collapseOne" class="accordion-body collapse in body">
                                    <form action="simpansiswa.php" class="form-horizontal" method="post" name="siswa">
                                        <input type="hidden" name="id_siswa" id="id_siswa"  class="form-control" />
                                        <div class="form-group">
                                            <label class="control-label col-lg-4">NIS</label>
                                            <div class="col-lg-4">
                                                <input type="text" id="nis" name="nis" class="form-control" />
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-lg-4">Nama</label>

                                            <div class="col-lg-4">
                                                <input type="text" id="nama" name="nama"  class="form-control" />
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-lg-4">Kelas</label>

                                             <div class="col-lg-2">
											<select class="form-control" name="kelas" id="kelas">
                                                <option></option>
												<option>X RPL</option>
												<option>XI RPL 1</option>
												<option>XI RPL 2</option>
												<option>XII RPL 1</option>
												<option>XII RPL 2</option>
											</select>
										</div>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label class="control-label col-lg-4">Tempat Lahir</label>

                                            <div class="col-lg-4">
                                                <input type="text" id="tempat_lhr" name="tempat_lhr" class="form-control" />
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-lg-4">Tanggal Lahir</label>
                                            <div class="col-lg-2">
                                                <input type="date" id="tanggal_lhr" name="tanggal_lhr" class="form-control" />
                                            </div>
                                        </div>
								<div class="form-group">
									<label class="control-label col-lg-4">Jenis Kelamin</label>
			
									<div class="col-lg-8">
										<div class="checkbox">
											<label>
												<input class="uniform" type="checkbox" name="jkel" id="jkel" value="Laki-laki"/> Laki-laki
											</label>
										</div>
										<div class="checkbox">
											<label>
												<input class="uniform" type="checkbox" name="jkel" id="jkel" value="Perempuan"/> Perempuan
											</label>
										</div>
									</div>
								</div>
								<div class="form-group">
                                            <label class="control-label col-lg-4">Agama</label>

                                             <div class="col-lg-2">
											<select data-placeholder="Agama" class="form-control" name="agama" id="agama">
                                                
												<option>Islam</option>
												<option>Kristen</option>
												<option>Hindu</option>
												<option>Budha</option>
												<option>Konghucu</option>
											</select>
										</div>
                                        </div>
										<div class="form-group">
                                            <label class="control-label col-lg-4">Alamat</label>

                                            <div class="col-lg-4">
                                                 <input type="autosize" id="alamat" name="alamat" class="form-control" />
                                            </div>
                                        </div>

                                        <div class="form-actions no-margin-bottom" align="center">
                                            <input type="submit" value="Simpan" name="simpan" id="simpan" class="btn btn-primary btn-lg btn-flat" />
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
  <!-- FOOTER -->
    <div id="footer">
        <p>SINRS &copy;2017 | Sistem Informasi Nilai Raport Siswa | <a href="http://www.smkn1slawi.sch.id" target="_blank">SMK N 1 SLAWI</a></p>
    </div>
    <!--END FOOTER -->


    <!-- GLOBAL SCRIPTS -->
    <script src="assets/plugins/jquery-2.0.3.min.js"></script>
     <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/plugins/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    <!-- END GLOBAL SCRIPTS -->

    <!-- PAGE LEVEL SCRIPTS -->
    <script src="assets/plugins/flot/jquery.flot.js"></script>
    <script src="assets/plugins/flot/jquery.flot.resize.js"></script>
    <script src="assets/plugins/flot/jquery.flot.time.js"></script>
     <script  src="assets/plugins/flot/jquery.flot.stack.js"></script>
    <script src="assets/js/for_index.js"></script>
    <!-- END PAGE LEVEL SCRIPTS -->


</body>

    <!-- END BODY -->
</html>


  <?php
     }

 else{
    echo"<script>window.alert('Maaf Anda Harus Login Dulu !!!')
    window.location='../index.php'</script>";
}

?>
