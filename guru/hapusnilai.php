<?php
include"config.php";

$id_nilai		=$_REQUEST['id_nilai'];
$hapus			="DELETE FROM `nilai` WHERE id_nilai='$id_nilai'";
$hapusok		=mysql_query($hapus);
header('location:nilai.php');
?>