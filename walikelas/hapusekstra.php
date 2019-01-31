<?php
include"config.php";

$id_ekstra		=$_REQUEST['id_ekstra'];
$hapus			="DELETE FROM `ekstra` WHERE id_ekstra='$id_ekstra'";
$hapusok		=mysql_query($hapus);
header('location:ekstra.php');
?>