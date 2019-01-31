<?php
include"config.php";

$kd_mapel 	 =$_POST['kd_mapel'];
$mapel 		 =$_POST['mapel'];

//UPDATE `mapel` SET `id_mapel`=[value-1],`kd_mapel`=[value-2],`mapel`=[value-3] WHERE 1
$ngedit=mysql_query("UPDATE `mapel` SET `mapel`='$mapel' WHERE `kd_mapel`='$kd_mapel'") or die (mysql_error());
header('location:mapel.php');
?>