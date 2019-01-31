<?php
session_start();
include "config.php";
?>
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
<?php

$id_nilai    =$_POST['id_nilai'];
$id_siswa    =$_POST['id_siswa'];
$kd_mapel    =$_POST['kd_mapel'];
$id_guru 	 =$_POST['id_guru'];
$semester    =$_POST['semester'];
$kb          =$_POST['kb']; 
$nh          =$_POST['nh'];
$nh2         =$_POST['nh2'];
$nh3         =$_POST['nh3'];
$nh4         =$_POST['nh4'];
$uts         =$_POST['uts'];
$uas         =$_POST['uas'];
$n_peng      =$_POST['n_peng'];
$predikat    =$_POST['predikat'];
$deskrip     =$_POST['deskrip'];
$np          =$_POST['np'];
$np2         =$_POST['np2'];
$np3         =$_POST['np3'];
$np4         =$_POST['np4'];
$n_trampil   =$_POST['nketram'];
$pred    	 =$_POST['pred'];
$deskripsi   =$_POST['deskripsi'];
$raport 	 =$_POST['n_raport'];


$ngedit=mysql_query("UPDATE `nilai` SET `semester`='$semester',`kb`='$kb',`nh`='$nh',`nh2`='$nh2',`nh3`='$nh3',`nh4`='$nh4',`uts`='$uts',`uas`='$uas',`n_peng`='$n_peng',`predikat`='$predikat',`deskrip`='$deskrip',`np`='$np',`np2`='$np2',`np3`='$np3',`np4`='$np4',`nketram`='$n_trampil',`pred`='$pred',`deskripsi`='$deskripsi',`n_raport`='$raport' WHERE `id_nilai`='$id_nilai'") or die (mysql_error());
header('location:nilai.php');
?>