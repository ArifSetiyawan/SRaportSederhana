<?php
include"config.php";

$id_walas		=$_REQUEST['id_walas'];
$hapus			="DELETE FROM `walas` WHERE id_walas='$id_walas'";
$hapusok		=mysql_query($hapus);
header('location:walas.php');
?>