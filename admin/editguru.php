<?php
include"config.php";

$id_guru	 =$_POST['id_guru'];
$nip 		 =$_POST['nip'];
$nama_guru 	 =$_POST['nama'];
$mengajar	 =$_POST['kd_mapel'];
$tempat_lhr  =$_POST['tempat_lhr'];
$tanggal_lhr =$_POST['tanggal_lhr'];
$jk 		 =$_POST['jk'];
$agama	 	 =$_POST['agama'];
$alamat 	 =$_POST['alamat'];


$ngedit=mysql_query("UPDATE `guru` SET `nip`='$nip',`nama`='$nama_guru',`kd_mapel`='$mengajar',`tempat_lhr`='$tempat_lhr',`tanggal_lhr`='$tanggal_lhr',`jk`='$jk',`agama`='$agama',`alamat`='$alamat' WHERE `id_guru`='$id_guru'") or die (mysql_error());
header('location:guru.php');
?>