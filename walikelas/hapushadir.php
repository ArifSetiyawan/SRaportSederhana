<?php
include"config.php";

$id_hadir		=$_REQUEST['id_hadir'];
$hapus			="DELETE FROM `ketidakhadiran` WHERE id_hadir='$id_hadir'";
$hapusok		=mysql_query($hapus);
header('location:hadir.php');
?>