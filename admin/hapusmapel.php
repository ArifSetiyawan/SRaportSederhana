<?php
include"config.php";

$kd_mapel		=$_REQUEST['kd_mapel'];
$hapus			="DELETE FROM `mapel` WHERE kd_mapel='$kd_mapel'";
$hapusok		=mysql_query($hapus);
header('location:mapel.php');
?>