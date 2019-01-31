<?php
include"config.php";


$id_guru	 =$_POST['id_guru'];
$nip 		 =$_POST['nip'];
$nama_guru 	 =$_POST['nama_guru'];
$mengajar	 =$_POST['kd_mapel'];
$tempat_lhr  =$_POST['tempat_lhr'];
$tanggal_lhr =$_POST['tanggal_lhr'];
$jk 		 =$_POST['jk'];
$agama	 	 =$_POST['agama'];
$alamat 	 =$_POST['alamat'];


$simpan="INSERT INTO `guru`(`id_guru`, `nip`, `nama`, `tempat_lhr`, `tanggal_lhr`, `jk`, `agama`, `alamat`, `kd_mapel`) VALUES ('$id_guru','$nip','$nama_guru','$tempat_lhr','$tanggal_lhr','$jk','$agama','$alamat','$mengajar')";
mysql_query($simpan) or die(mysql_error());
header('location:guru.php');

?>