<?php
include"config.php";

$id_hadir	 =$_POST['id_hadir'];
$sakit       =$_POST['sakit'];
$izin  		 =$_POST['izin'];
$tnp_ket  	 =$_POST['tnp_ket'];

//UPDATE `ketidakhadiran` SET `id_hadir`=[value-1],`id_siswa`=[value-2],`id_kelas`=[value-3],`sakit`=[value-4],`izin`=[value-5],`tnp_ket`=[value-6] WHERE 1
$ngedit=mysql_query("UPDATE `ketidakhadiran` SET `sakit`='$sakit',`izin`='$izin',`tnp_ket`='$tnp_ket' WHERE id_hadir='$id_hadir'") or die (mysql_error());
header('location:hadir.php');
?>