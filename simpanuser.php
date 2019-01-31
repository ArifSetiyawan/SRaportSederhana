<?php
//INSERT INTO `user`(`id`, `nip`, `nama`, `username`, `password`, `hak_akses`) VALUES ([value-1],[value-2],[value-3],[value-4],[value-5],[value-6])
include"config.php";

if (isset($_POST['daftar'])) {

$id	 		 =$_POST['id'];
$nip 		 =$_POST['id_guru'];
$nama 		 =$_POST['nama'];
$username 	 =$_POST['username'];
$password    =$_POST['password'];
$hak_akses   =$_POST['hak_akses'];
$mapel		 =$_POST['mengampu'];

$cek =mysql_num_rows(mysql_query("SELECT * FROM `user` WHERE username='$username'"));
if ($cek > 0) {
	echo "<script>window.alert('Username Mungkin Sudah ada')
	window.location='register.php'</script>";

}else{
$simpan="INSERT INTO `user`(`id`, `id_guru`, `nama_lengkap`, `username`, `password`, `hak_akses`,`kd_mapel`) VALUES ('$id','$nip','$nama','$username','$password','$hak_akses','$mapel')";
mysql_query($simpan) or die(mysql_error());	
header('location:index.php');
}
 }

?>