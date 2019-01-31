<?php
//INSERT INTO `ekstra`(`id_ekstra`, `nama_ekstra`, `ket`) VALUES ([value-1],[value-2],[value-3])
include"config.php";

$id_ekstra	 =$_POST['id_ekstra'];
$id_siswa 	 =$_POST['id_siswa'];
$nama_ekstra =$_POST['nama_ekstra'];
$ket  	 	 =$_POST['ket'];

$simpan="INSERT INTO `ekstra`(`id_ekstra`, `id_siswa`, `nama_ekstra`, `ket`) VALUES ('$id_ekstra','$id_siswa','$nama_ekstra','$ket')";
mysql_query($simpan) or die(mysql_error());
header('location:ekstra.php');
?>