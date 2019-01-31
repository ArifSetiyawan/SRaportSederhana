<?php
include"config.php";

$id_walas	 =$_POST['id_walas'];
$nama_guru 	 =$_POST['id_guru'];
$mapel 		 =$_POST['kd_mapel'];
$walas       =$_POST['walas'];

//UPDATE `walas` SET `id_walas`=[value-1],`nip`=[value-2],`nama_guru`=[value-3],`mapel`=[value-4],`walas`=[value-5] WHERE 1
$ngedit=mysql_query("UPDATE `walas` SET `id_guru`='$nama_guru',`kd_mapel`='$mapel',`walas`='$walas' WHERE `id_walas`='$id_walas'") or die (mysql_error());
header('location:walas.php');
?>