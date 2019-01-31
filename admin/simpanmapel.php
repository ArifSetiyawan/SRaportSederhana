<?php
//INSERT INTO `mapel`(`id_mapel`, `kd_mapel`, `mapel`) VALUES ([value-1],[value-2],[value-3])
include"config.php";

$kd_mapel 	 =$_POST['kd_mapel'];
$mapel  	 =$_POST['mapel'];

$simpan="INSERT INTO `mapel`(`kd_mapel`, `mapel`) VALUES ('$kd_mapel','$mapel')";
mysql_query($simpan) or die(mysql_error());
header('location:mapel.php');
?>