<?php
//INSERT INTO `ketidakhadiran`(`id_hadir`, `id_siswa`, `id_kelas`, `sakit`, `izin`, `tnp_ket`) VALUES ([value-1],[value-2],[value-3],[value-4],[value-5],[value-6])
include"config.php";

$id_hadir	 =$_POST['id_hadir'];
$id_siswa	 =$_POST['id_siswa'];
$sakit       =$_POST['sakit'];
$izin  		 =$_POST['izin'];
$tnp_ket  	 =$_POST['tnp_ket'];

$simpan="INSERT INTO `ketidakhadiran`(`id_hadir`, `id_siswa`, `sakit`, `izin`, `tnp_ket`) VALUES ('$id_hadir','$id_siswa','$sakit','$izin','$tnp_ket')";
mysql_query($simpan) or die(mysql_error());
header('location:hadir.php');
?>