<?php
include"config.php";

$id_ekstra	 =$_POST['id_ekstra'];
$nama_ekstra =$_POST['nama_ekstra'];
$ket 		 =$_POST['ket'];

//UPDATE `ekstra` SET `id_ekstra`=[value-1],`nama_ekstra`=[value-2],`ket`=[value-3] WHERE 1
$ngedit=mysql_query("UPDATE `ekstra` SET `nama_ekstra`='$nama_ekstra',`ket`='$ket' WHERE `id_ekstra`='$id_ekstra'") or die (mysql_error());
header('location:ekstra.php');
?>