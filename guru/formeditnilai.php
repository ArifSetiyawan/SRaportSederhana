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

    if($_SESSION['guru']) 
    {
        ?>

<?php
include"config.php";
$id_nilai =$_GET['id_nilai'];
$query=mysql_query("SELECT * FROM `nilai` WHERE id_nilai='$id_nilai'");
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

       <?php include('m2.php') ?>

	    <!--PAGE CONTENT -->
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
        <div id="content">
           
                <div class="inner">
                          <div class="row">
                        <div class="col-lg-12">
                            <div class="box">
                                <header>
                                    <div class="icons"><i class="icon-th-large"></i></div>
                                    <h5>Edit Data Nilai Siswa</h5>
                                </header>
                                <div id="collapseOne" class="accordion-body collapse in body">
                                    <form name="autoSumForm" action="editnilai.php" class="form-horizontal" method="post">
                                        <?php
                                    while($data=mysql_fetch_array($query))
                                {
                                ?>
                                    <input type="hidden" name="id_nilai" id="id_nilai" value="<?php echo $data['id_nilai'];?>"  class="form-control" />
                                    <input type="hidden" name="id_guru" id="id_guru" value="<?php echo $cek['nama_lengkap'];?>"  class="form-control" />
                                         <div class="row">
                                            <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="control-label col-lg-4">Semester</label>
                                            <div class="col-lg-3">
                                                <input type="text" id="semester" name="semester" value="<?php echo $data['semester'];?>" class="form-control" />
                                            </div>
                                        </div>
                                         <div class="form-group">
                                            <label class="control-label col-lg-4">KKM</label>
                                            <div class="col-lg-3">
                                                <input type="text" id="kb" name="kb" value="<?php echo $data['kb'];?>" class="form-control" />
                                            </div>
                                        </div>
                                        <div class="form-group">
                                                    <label class="control-label col-lg-4">Nilai Harian</label>
                                                    <div class="col-lg-3">
                                                        <input type="text" id="nh" name="nh" value="<?php echo $data['nh'];?>" class="form-control" onfocus="startCalc();"  />
                                                    </div>
                                                </div>
                                        <div class="form-group">
                                                    <label class="control-label col-lg-4">Nilai Harian 2</label>
                                                    <div class="col-lg-3">
                                                        <input type="text" id="nh2" name="nh2" value="<?php echo $data['nh2'];?>" class="form-control" onfocus="startCalc();" />
                                                    </div>
                                                </div>
                                         <div class="form-group">
                                                    <label class="control-label col-lg-4">Nilai Harian 3</label>
                                                    <div class="col-lg-3">
                                                        <input type="text" id="nh3" name="nh3" value="<?php echo $data['nh3'];?>" class="form-control" onfocus="startCalc();" />
                                                    </div>
                                                </div>
                                         <div class="form-group">
                                                    <label class="control-label col-lg-4">Nilai Harian 4</label>
                                                    <div class="col-lg-3">
                                                        <input type="text" id="nh4" name="nh4" value="<?php echo $data['nh4'];?>" class="form-control" onfocus="startCalc();" />
                                                    </div>
                                                </div>                                                                
                                        <div class="form-group">
                                                    <label class="control-label col-lg-4">Nilai UTS</label>
                                                    <div class="col-lg-3">
                                                        <input type="text" id="uts" name="uts" value="<?php echo $data['uts'];?>" class="form-control" onfocus="startCalc();" />
                                                    </div>
                                                </div>
                                        <div class="form-group">
                                                    <label class="control-label col-lg-4">Nilai UAS</label>
                                                    <div class="col-lg-3">
                                                        <input type="text" id="uas" name="uas" value="<?php echo $data['uas'];?>" class="form-control" onfocus="startCalc();"  />
                                                    </div>
                                                </div>
                                                 <div class="form-group">
                                                    <label class="control-label col-lg-4">Nilai Pengetahuan</label>
                                                    <div class="col-lg-3">
                                                        <input type="text" id="n_peng" name="n_peng" value="<?php echo $data['n_peng'];?>" class="form-control" onfocus="startCalc();" onblur="stopCalc();" readonly  />
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label col-lg-4">Predikat</label>
                                                    <div class="col-lg-3">
                                                        <input type="text" id="predikat" name="predikat" value="<?php echo $data['predikat'];?>" class="form-control" readonly  />
                                                    </div>
                                                </div>
                                        <div class="form-group">
                                                    <label class="control-label col-lg-4">Deskripsi</label>
                                                    <div class="col-lg-6">
                                                        <input type="autosize" id="deskrip" name="deskrip" value="<?php echo $data['deskrip'];?>" class="form-control" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                            <div class="form-group">
                                                    <label class="control-label col-lg-4">Nilai Praktek</label>
                                                    <div class="col-lg-3">
                                                        <input type="text" id="np" name="np" value="<?php echo $data['np'];?>" class="form-control" onfocus="startHitung();"  />
                                                    </div>
                                                </div>
                                        <div class="form-group">
                                                    <label class="control-label col-lg-4">Nilai Praktek 2</label>
                                                    <div class="col-lg-3">
                                                        <input type="text" id="np2" name="np2" value="<?php echo $data['np2'];?>" class="form-control" onfocus="startHitung();" />
                                                    </div>
                                                </div>
                                         <div class="form-group">
                                                    <label class="control-label col-lg-4">Nilai Praktek 3</label>
                                                    <div class="col-lg-3">
                                                        <input type="text" id="np3" name="np3" value="<?php echo $data['np3'];?>" class="form-control" onfocus="startHitung();" />
                                                    </div>
                                                </div>
                                         <div class="form-group">
                                                    <label class="control-label col-lg-4">Nilai Praktek 4</label>
                                                    <div class="col-lg-3">
                                                        <input type="text" id="np4" name="np4" value="<?php echo $data['np4'];?>" class="form-control" onfocus="startHitung();" />
                                                    </div>
                                                </div>                                                                
                                                 <div class="form-group">
                                                    <label class="control-label col-lg-4">Nilai Ketrampilan</label>
                                                    <div class="col-lg-3">
                                                        <input type="text" id="nketram" name="nketram" value="<?php echo $data['nketram'];?>" class="form-control" onfocus="startHitung();" onblur="stopHitung();" readonly  />
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label col-lg-4">Predikat</label>
                                                    <div class="col-lg-3">
                                                        <input type="text" id="pred" name="pred" value="<?php echo $data['pred'];?>" class="form-control" readonly  />
                                                    </div>
                                                </div>
                                        <div class="form-group">
                                                    <label class="control-label col-lg-4">Deskripsi</label>
                                                    <div class="col-lg-6">
                                                        <input type="autosize" id="deskripsi" name="deskripsi" value="<?php echo $data['deskripsi'];?>" class="form-control" />
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label col-lg-4">Nilai Raport</label>
                                                    <div class="col-lg-3">
                                                        <input type="text" id="n_raport" name="n_raport" class="form-control" value="<?php echo $data['n_raport']; ?>" onblur="stopHitung();" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                        <div class="col-lg-12">
                                             <div class="form-group">
                                        <div class="form-actions no-margin-bottom col-lg-12" align="right">
                                            <input type="submit" value="Edit" class="btn btn-primary btn-lg btn-flat" />
                                            <a href=\"javascript:history.back()\"></a> <input type="submit" value="Kembali" class="btn btn-danger btn-lg btn-flat"  />
                                           </div>
                                       </div>
                                        </div>
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

  <!-- FOOTER -->
    <div id="footer">
        <p>SINRS &copy;2017 | Sistem Informasi Nilai Raport Siswa | <a href="http://www.smkn1slawi.sch.id" target="_blank">SMK N 1 SLAWI</a></p>
    </div>
    <!--END FOOTER -->


    <!-- GLOBAL SCRIPTS -->
    <script src="assets/plugins/jquery-2.0.3.min.js"></script>
     <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/plugins/modernizr-2.6.2-respond-1.1.0.min.js"></script>
     <script>
                                    function startCalc() {
                                        interval = setInterval("calc()",1);}
                                    function calc(){
                                         nh=parseInt(document.autoSumForm.nh.value);
                                        nh2=parseInt(document.autoSumForm.nh2.value);
                                        nh3=parseInt(document.autoSumForm.nh3.value);
                                        nh4=parseInt(document.autoSumForm.nh4.value);
                                        uts=parseInt(document.autoSumForm.uts.value);
                                        uas=parseInt(document.autoSumForm.uas.value);

                                        document.autoSumForm.n_peng.value=((nh+nh2+nh3+nh4)/4)*0.4 + ((uts+uas)/2)*0.6;
                                    if (document.autoSumForm.n_peng.value>=85) {
                                        document.autoSumForm.predikat.value="A";
                                    }else if (document.autoSumForm.n_peng.value>=80) {
                                        document.autoSumForm.predikat.value="A-";
                                    }else if (document.autoSumForm.n_peng.value>=75) {
                                        document.autoSumForm.predikat.value="B+";
                                    }else if (document.autoSumForm.n_peng.value>=70) {
                                        document.autoSumForm.predikat.value="B";
                                    }else if (document.autoSumForm.n_peng.value>=65) {
                                        document.autoSumForm.predikat.value="B-";
                                    }else if (document.autoSumForm.n_peng.value>=60) {
                                        document.autoSumForm.predikat.value="C+";
                                    }else if (document.autoSumForm.n_peng.value>=55) {
                                        document.autoSumForm.predikat.value="C";
                                    }else if (document.autoSumForm.n_peng.value>=50) {
                                        document.autoSumForm.predikat.value="C-";
                                    }else if (document.autoSumForm.n_peng.value>=45) {
                                        document.autoSumForm.predikat.value="D+";
                                    }else if (document.autoSumForm.n_peng.value>=40) {
                                        document.autoSumForm.predikat.value="D";
                                    }else if (document.autoSumForm.n_peng.value>=10) {
                                        document.autoSumForm.predikat.value="E";
                                    }else{
                                        (document.autoSumForm.n_peng.value>100);
                                        document.autoSumForm.predikat.value="Nilai Salah";
                                    }

                                    }
                                    
                                    function stopCalc(){
                                        clearInterval(interval);   
                                    }
                                </script>
    <!-- END GLOBAL SCRIPTS -->

    <!-- PAGE LEVEL SCRIPTS -->
    <script src="assets/plugins/flot/jquery.flot.js"></script>
    <script src="assets/plugins/flot/jquery.flot.resize.js"></script>
    <script src="assets/plugins/flot/jquery.flot.time.js"></script>
     <script  src="assets/plugins/flot/jquery.flot.stack.js"></script>
    <script src="assets/js/for_index.js"></script>
     <script>
                                    function startHitung() {
                                        interval = setInterval("hitung()",1);}
                                    function hitung(){
                                         np=parseInt(document.autoSumForm.np.value);
                                        np2=parseInt(document.autoSumForm.np2.value);
                                        np3=parseInt(document.autoSumForm.np3.value);
                                        np4=parseInt(document.autoSumForm.np4.value);

                                        document.autoSumForm.nketram.value=(np+np2+np3+np4)/4;

                                    if(document.autoSumForm.nketram.value>=85) {
                                        (document.autoSumForm.pred.value="A");
                                    }else if(document.autoSumForm.nketram.value>=80) {
                                        document.autoSumForm.pred.value="A-";
                                    }else if(document.autoSumForm.nketram.value>=75) {
                                        document.autoSumForm.pred.value="B+";
                                    }else if(document.autoSumForm.nketram.value>=70) {
                                        document.autoSumForm.pred.value="B";
                                    }else if(document.autoSumForm.nketram.value>=65) {
                                        document.autoSumForm.pred.value="B-";
                                    }else if(document.autoSumForm.nketram.value>=60) {
                                        document.autoSumForm.pred.value="C+";
                                    }else if(document.autoSumForm.nketram.value>=55) {
                                        document.autoSumForm.pred.value="C";
                                    }else if(document.autoSumForm.nketram.value>=50) {
                                        document.autoSumForm.pred.value="C-";
                                    }else if(document.autoSumForm.nketram.value>=45) {
                                        document.autoSumForm.pred.value="D+";
                                    }else if(document.autoSumForm.nketram.value>=40) {
                                        document.autoSumForm.pred.value="D";
                                    }else if(document.autoSumForm.nketram.value>=10) {
                                        document.autoSumForm.pred.value="E";
                                    }else{
                                        (document.autoSumForm.nketram.value>100);
                                        document.autoSumForm.pred.value="Nilai Salah";
                                    }

                                    }
                                    
                                    function stopHitung(){
                                        clearInterval(interval);   
                                    }
                                </script>
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