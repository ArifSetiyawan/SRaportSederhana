<?php
include"config.php";

$id_siswa	 =$_POST['id_siswa'];
$nis 		 =$_POST['nis'];
$nama 		 =$_POST['nama'];
$kelas 		 =$_POST['kelas'];
$tempat_lhr  =$_POST['tempat_lhr'];
$tanggal_lhr =$_POST['tanggal_lhr'];
$jk 		 =$_POST['jkel'];
$agama	 	 =$_POST['agama'];
$alamat 	 =$_POST['alamat'];

$ngedit=mysql_query("UPDATE `siswa` SET `nis`='$nis',`nama`='$nama',`kelas`='$kelas',`tempat_lhr`='$tempat_lhr',`tanggal_lhr`='$tanggal_lhr',`jk`='$jk',`agama`='$agama',`alamat`='$alamat' WHERE `id_siswa`='$id_siswa'") or die (mysql_error());
header('location:siswa.php');
?>