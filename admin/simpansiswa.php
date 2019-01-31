<?php
//INSERT INTO `siswa`(`id_siswa`, `nis/nisn`, `nama`, `kelas`, `tempat_lhr`, `tanggal_lhr`, `jk`, `agama`, `alamat`) VALUES ([value-1],[value-2],[value-3],[value-4],[value-5],[value-6],[value-7],[value-8],[value-9])
include"config.php";

if (isset($_POST['simpan'])) {

$id_siswa	 =$_POST['id_siswa'];
$nis 		 =$_POST['nis'];
$nama 		 =$_POST['nama'];
$kelas 		 =$_POST['kelas'];
$tempat_lhr  =$_POST['tempat_lhr'];
$tanggal_lhr =$_POST['tanggal_lhr'];
$jkel 		 =$_POST['jkel'];
$agama	 	 =$_POST['agama'];
$alamat 	 =$_POST['alamat'];

$cek =mysql_num_rows(mysql_query("SELECT * FROM `siswa` WHERE nis='$nis'"));
if ($cek > 0) {
	echo "<script>window.alert('NIS Masa Sama Sih !!!!')
	window.location='formsiswa.php'</script></div>";

}else{
$nyimpan="INSERT INTO `siswa`(`id_siswa`, `nis`, `nama`, `kelas`, `tempat_lhr`, `tanggal_lhr`, `jk`, `agama`, `alamat`) VALUES('$id_siswa','$nis','$nama','$kelas','$tempat_lhr','$tanggal_lhr','$jkel','$agama','$alamat')";
mysql_query($nyimpan) or die(mysql_error());
header('location:siswa.php');

}
 }
?>