<?php
//INSERT INTO `walas`(`id_walas`, `nip`, `nama_guru`, `mapel`, `walas`) VALUES ([value-1],[value-2],[value-3],[value-4],[value-5])
include"config.php";

$id_walas	 =$_POST['id_walas'];
$id_guru 	 =$_POST['id_guru'];
$mapel 		 =$_POST['kd_mapel'];
$walas       =$_POST['walas'];

$simpan="INSERT INTO `walas`(`id_walas`, `id_guru`, `kd_mapel`, `walas`) VALUES ('$id_walas','$id_guru','$mapel','$walas')";
mysql_query($simpan) or die(mysql_error());
header('location:walas.php');
?>