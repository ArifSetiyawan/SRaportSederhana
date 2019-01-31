<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->

<!-- BEGIN HEAD -->
<head>
     <meta charset="UTF-8" />
    <title>SISTEM INFORMASI NILAI RAPORT SISWA | Login Page</title>
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
     <!-- END PAGE LEVEL STYLES -->
   <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
</head>
    <!-- END HEAD -->

    <!-- BEGIN BODY -->
<body>
  <?php
session_start();
include"config.php";
?>
   <!-- PAGE CONTENT --> 
    <div class="container">
    <div class="text-center">
        <h1>SINRS LOGIN</h1>
    </div>
    <div class="tab-content">
            <form action="" method="post" name="login" id="login" class="form-signin" onSubmit="return validationlogin(this);" onfocus="validationlogin();">
              <div class="form-group">
              <p class="text-muted text-center btn-block btn btn-danger btn-rect">Silahkan Login</p>
            </div>
                <div class="form-group">
                <input type="text" placeholder="Username" class="form-control" name="username" id="username" />
              </div>
              <div class="form-group">
                <input type="password" placeholder="Password" class="form-control" name="password" id="password" />
              </div>
                <button class="btn text-muted text-center btn-primary" type="submit" value="Masuk" name="login2">Masuk</button>
            </form>

            <?php
          $username   =@$_POST['username'];
          $password   =@$_POST['password'];
          $login      =@$_POST['login2'];
          if ($login) {
            if ($username=="" || $password=="") {
              ?><script type="text/javascript">alert("Username dan Password Tidak Boleh Kosong !!!"); </script><?php
            }else{
              $query =mysql_query("SELECT * FROM `user` WHERE username='$username' AND password='$password'") or die(mysql_error());
              $data   =mysql_fetch_array($query);
              $cek =mysql_num_rows($query);

              if ($cek >= 1) {
                if ($data['hak_akses']== "admin") {
                  @$_SESSION['admin']=$data['id'];
                  header("location:admin/index.php");

                }else if ($data['hak_akses']== "guru") {
                  @$_SESSION['guru']=$data['id'];
                  header("location:guru/index.php");
                  
                }else if ($data['hak_akses']== "walikelas") {
                  $_SESSION['walikelas']=$data['id'];
                  header("location:walikelas/index.php");
                }

            }else{
              echo"<script>window.alert('Maaf Anda Gagal Login!!!')
              window.location='index.php'</script>";
            }
          }
          }
          ?>
        </div>
          
        </div>
    </div>
    <div class="text-center">
        <ul class="list-inline">
            <li><button class="btn btn-success">Belum Punya Akun ?? <a href="register.php">Klik disini</a></button></li> 
        </ul>
    </div>


</div>

      <!--END PAGE CONTENT -->     
          
      <!-- PAGE LEVEL SCRIPTS -->
      <script src="assets/plugins/jquery-2.0.3.min.js"></script>
      <script src="assets/plugins/bootstrap/js/bootstrap.js"></script>
   <script src="assets/js/login.js"></script>

   <script type="text/javascript">
  function validationlogin(){
    if (login.username.value =="") {
      alert("Username Tidak Boleh Kosong !!!");
      login.username.focus();
      return(false);
    }
    if (login.password.value =="") {
      alert("Password Tidak Boleh Kosong !!!");
      login.password.focus();
      return(false);
    }
    return(true);
  }
</script>

      <!--END PAGE LEVEL SCRIPTS -->

</body>
    <!-- END BODY -->
</html>