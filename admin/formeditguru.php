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

    if($_SESSION['admin']) 
    {
        ?>
<?php
include"config.php";
$id_guru =$_GET['id_guru'];
$query=mysql_query("SELECT * FROM `guru` WHERE id_guru='$id_guru'");
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
                                    <div class="icons"><i class="icon-tags"></i></div>
                                    <h5>Edit Data Guru</h5>
                                </header>
                                <div id="collapseOne" class="accordion-body collapse in body">
								<form action="editguru.php" class="form-horizontal" method="post">
									<?php
									while($data=mysql_fetch_array($query))
								{
								?>
                                        <input type="hidden" name="id_guru" id="id_guru" value="<?php echo $data['id_guru'];?>"class="form-control" />
                                        <div class="form-group">
                                            <label class="control-label col-lg-4">NIP</label>
                                            <div class="col-lg-4">
                                                <input type="text" id="nip" name="nip" value="<?php echo $data['nip'];?>" class="form-control" />
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-lg-4">Nama Guru</label>

                                            <div class="col-lg-4">
                                                <input type="text" id="nama" name="nama" value="<?php echo $data['nama'];?>" class="form-control" />
                                            </div>
                                        </div>
                                         <div class="form-group">
                                            <label class="control-label col-md-4">Mengajar</label>

                                             <div class="col-md-3">
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
                                            <label class="control-label col-lg-4">Tempat Lahir</label>

                                            <div class="col-lg-4">
                                                <input type="text" id="tempat_lhr" name="tempat_lhr" value="<?php echo $data['tempat_lhr'];?>" class="form-control" />
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-lg-4">Tanggal Lahir</label>
                                            <div class="col-lg-4">
                                                <input type="date" id="tanggal_lhr" name="tanggal_lhr" value="<?php echo $data['tanggal_lhr'];?>" class="form-control" />
                                            </div>
                                        </div>
								<div class="form-group">
                                    <label class="control-label col-md-4">Jenis Kelamin</label>
            
                                    <div class="col-md-8">
                                        <div class="checkbox">
                                            <label>
                                                <input class="uniform" type="checkbox" name="jk" id="jk" value="Laki-laki"/> Laki-laki
                                            </label>
                                        </div>
                                        <div class="checkbox">
                                            <label>
                                                <input class="uniform" type="checkbox" name="jk" id="jk" value="Perempuan"/> Perempuan
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                            <label class="control-label col-md-4">Agama</label>

                                             <div class="col-md-3">
                                            <select class="form-control" name="agama" id="agama">
                                                <option></option>
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
                                                 <input type="text" id="alamat" name="alamat" value="<?php echo $data['alamat'];?>" class="form-control"/>
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
