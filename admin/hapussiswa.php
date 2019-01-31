<?php
include"config.php";

$idsiswa		=$_REQUEST['id_siswa'];
$hapus			="DELETE FROM `siswa` WHERE id_siswa='$idsiswa'";
$hapusok		=mysql_query($hapus);
header('location:siswa.php');
?>