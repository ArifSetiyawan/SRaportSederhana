<?php

include"config.php";

$id_nilai    =$_POST['id_nilai'];
$id_siswa    =$_POST['id_siswa'];
$id_mapel    =$_POST['id_mapel'];
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

$cari="SELECT * FROM nilai WHERE semester LIKE '%$semester%'";
mysql_query($cari) or die(mysql_error());