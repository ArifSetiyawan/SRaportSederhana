<?php
include"config.php";

$id_guru		=$_REQUEST['id_guru'];
$hapus			="DELETE FROM `guru` WHERE id_guru='$id_guru'";
$hapusok		=mysql_query($hapus);
header('location:guru.php');
?>