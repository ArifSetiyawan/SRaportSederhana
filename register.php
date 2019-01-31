 <!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->

<!-- BEGIN HEAD -->
<head>
     <meta charset="UTF-8" />
    <title>SISTEM INFORMASI NILAI RAPORT SISWA | Register Page</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="" name="description" />
    <meta content="" name="author" />
     <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <![endif]-->
    <!-- GLOBAL STYLES -->
     <!-- PAGE LEVEL STYLES -->
     <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.css" />
    <link rel="stylesheet" href="assets/css/login.css" />
    <link rel="stylesheet" href="assets/plugins/magic/magic.css" />
    <link href="assets/css/jquery-ui.css" rel="stylesheet" />
<link rel="stylesheet" href="assets/plugins/uniform/themes/default/css/uniform.default.css" />
<link rel="stylesheet" href="assets/plugins/inputlimiter/jquery.inputlimiter.1.0.css" />
<link rel="stylesheet" href="assets/plugins/chosen/chosen.min.css" />
<link rel="stylesheet" href="assets/plugins/colorpicker/css/colorpicker.css" />
<link rel="stylesheet" href="assets/plugins/tagsinput/jquery.tagsinput.css" />
<link rel="stylesheet" href="assets/plugins/daterangepicker/daterangepicker-bs3.css" />
<link rel="stylesheet" href="assets/plugins/datepicker/css/datepicker.css" />
<link rel="stylesheet" href="assets/plugins/timepicker/css/bootstrap-timepicker.min.css" />
<link rel="stylesheet" href="assets/plugins/switch/static/stylesheets/bootstrap-switch.css" />
   
    <!-- END PAGE LEVEL  STYLES -->
   <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
</head>
    <!-- END HEAD -->

    <!-- BEGIN BODY -->
<body >
<?php
include"config.php";
?>
   <!-- PAGE CONTENT -->
    <div class="container">
    <div class="text-center">
        <h1>SINRS REGISTER</h1>
    </div>
    <div class="tab-content">
            <form action="simpanuser.php" class="form-signin" method="post">
              <div class="form-group">
                <p class="text-muted text-center btn-block btn btn-warning btn-rect">Masukkan Data Anda </p>
              </div>
                  <input type="hidden" name="id" id="id" class="form-control" />
                  <div class="form-group">
                  <select class="form-control" name="id_guru" id="id_guru">
                  <option hidden="NIP">NIP</option>
                  <?php
                   $a="SELECT * FROM guru";
                   $sql=mysql_query($a);
                   while($data=mysql_fetch_array($sql)){
                   ?>
                   <option value="<?php echo $data['id_guru']?>"><?php echo $data['id_guru']?> <?php echo $data['nip']; ?> </option>
                   <?php } ?>
                                                
                  </select>
                   </div>
               <div class="form-group">
                 <input type="text" placeholder="Nama lengkap" name="nama" id="nama" class="form-control" />
               </div>
               <div class="form-group">
                <input type="text" placeholder="Username" name="username" id="username" class="form-control" />
              </div>
              <div class="form-group">
                <input type="password" placeholder="Password" name="password" id="password" class="form-control" />
              </div>
               <div class="form-group">
                      <select class="form-control" name="hak_akses" id="hak_akses">
                        <option hidden="Masuk Sebagai">Masuk Sebagai</option>
                        <option>admin</option>
                        <option>guru</option>
                        <option>walikelas</option>
                      </select>
                    </div>
              <div class="form-group">
              <select data-placeholder="Mengampu Pelajaran" multiple class="form-control chzn-select" name="mengampu" id="mengampu">
                        <?php
                       $a="SELECT * FROM mapel";
                       $sql=mysql_query($a);
                       while($data=mysql_fetch_array($sql)){
                       ?>
                       <option value="<?php echo $data['kd_mapel']?>"><?php echo $data['kd_mapel']?> <?php echo $data['mapel']?> </option>
                       <?php } ?>
                        
                      </select>
              </div>
                <button class="btn text-muted text-center btn-success" type="submit" name="daftar" id="daftar">Daftar</button>
          </form>
        </div>
            </form>
        </div>
    </div>
    <div class="text-center">
        <ul class="list-inline">
            <li><button class="btn btn-primary">Sudah Punya Akun ?? <a href="index.php">Silahkan Masuk</a></button></li> 
        </ul>
    </div>


</div>

      <!--END PAGE CONTENT -->     
          
      <!-- PAGE LEVEL SCRIPTS -->
      <script src="assets/plugins/jquery-2.0.3.min.js"></script>
      <script src="assets/plugins/bootstrap/js/bootstrap.js"></script>
   <script src="assets/js/login.js"></script>
   <script src="assets/js/jquery-ui.min.js"></script>
 <script src="assets/plugins/uniform/jquery.uniform.min.js"></script>
<script src="assets/plugins/inputlimiter/jquery.inputlimiter.1.3.1.min.js"></script>
<script src="assets/plugins/chosen/chosen.jquery.min.js"></script>
<script src="assets/plugins/colorpicker/js/bootstrap-colorpicker.js"></script>
<script src="assets/plugins/tagsinput/jquery.tagsinput.min.js"></script>
<script src="assets/plugins/validVal/js/jquery.validVal.min.js"></script>
<script src="assets/plugins/daterangepicker/daterangepicker.js"></script>
<script src="assets/plugins/daterangepicker/moment.min.js"></script>
<script src="assets/plugins/datepicker/js/bootstrap-datepicker.js"></script>
<script src="assets/plugins/timepicker/js/bootstrap-timepicker.min.js"></script>
<script src="assets/plugins/switch/static/js/bootstrap-switch.min.js"></script>
<script src="assets/plugins/jquery.dualListbox-1.3/jquery.dualListBox-1.3.min.js"></script>
<script src="assets/plugins/autosize/jquery.autosize.min.js"></script>
<script src="assets/plugins/jasny/js/bootstrap-inputmask.js"></script>
       <script src="assets/js/formsInit.js"></script>
        <script>
            $(function () { formInit(); });
        </script>

</body>
    <!-- END BODY -->
</html>
