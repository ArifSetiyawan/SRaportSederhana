<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<?php
include("config.php");
?>
<table style="border:none; font-size:12px; color:#FF0000 width=100%; margin:10px 0 10px 0;">
<tr>
<td colspan="5">
<form id="form1" name="form1" method="post" action="">
<input type="text" name="txtcari">
  <select name="cid">
    <option value="" disabled="disabled">----->informasi>------</option>
    <?php
$a="SELECT * FROM mapel";
$sql=mysql_query($a);
while($data=mysql_fetch_array($sql)){
?>
    <option value="<?php echo $data['cid']?>"><?php echo $data['mapel']?> </option>
    <?php } ?>
  </select>
  <input type="submit" value="cari"/>
</form></td>
</tr>
</table>
<table style="border:none; font-size:12px; color:#00FF00; width:100%; margin: 10px 0 10px 0;">
<tr>
                                                <th><div align='center'>NIS</th></div>
                                                <th><div align='center'>Nama</th></div>
                                                <th><div align='center'>Kelas</th></div>
                                                <th><div align='center'>Mapel</th></div>
                                                <th><div align='center'>Nh</th></div>
                                                <th><div align='center'>Nh2</th></div>
                                                <th><div align='center'>Nh3</th></div>
                                                <th><div align='center'>Nh4</th></div>
                                                <th><div align='center'>Nk</th></div>
                                                <th><div align='center'>Nk2</th></div>
                                                <th><div align='center'>Nk3</th></div>
                                                <th><div align='center'>Nk4</th></div>
                                                <th><div align='center'>UTS</th></div>
                                                <th><div align='center'>UAS</th></div>
                                                <th><div align='center'>NR</th></div>
                                                <th><div align='center'>Action</th></div>
                                        </tr>
<?php
if(isset($_POST['cid'])){
$tampil="SELECT nilai.id_nilai, siswa.nis, siswa.nama,siswa.kelas, nilai.id_mapel, nilai.nh, nilai.nh2, nilai.nh3, nilai.nh4, nilai.np, nilai.np2, nilai.np3, nilai.np4, nilai.uts, nilai.uas, nilai.n_raport FROM nilai INNER JOIN siswa ON nilai.id_siswa = siswa.id_siswa";
                                    $hasil =mysql_query($tampil);
                                    while($data =mysql_fetch_array($hasil))
                                    {
                                    $id_nilai=$data['id_nilai'];
                                    $nis =$data['nis'];
                                    $nama= $data['nama'];
                                    $kelas= $data['kelas'];
                                    $mapel= $data['id_mapel'];
                                    $nh= $data['nh'];
                                    $nh2= $data['nh2'];
                                    $nh3= $data['nh3'];
                                    $nh4= $data['nh4'];
                                    $np= $data['np'];
                                    $np2= $data['np2'];
                                    $np3= $data['np3'];
                                    $np4= $data['np4'];
                                    $uts= $data['uts'];
                                    $uas= $data['uas'];
                                    $raport= $data['n_raport'];
                                    echo"<tr>
                                          <td><div align='center'>$nis</td></div>
                                          <td><div align='center'>$nama</td></div>
                                          <td><div align='center'>$kelas</td></div>
                                          <td><div align='center'>$mapel</td></div>
                                          <td><div align='center'>$nh</td></div>
                                          <td><div align='center'>$nh2</td></div>
                                          <td><div align='center'>$nh3</td></div>
                                          <td><div align='center'>$nh4</td></div>
                                          <td><div align='center'>$np</td></div>
                                          <td><div align='center'>$np2</td></div>
                                          <td><div align='center'>$np3</td></div>
                                          <td><div align='center'>$np4</td></div>
                                          <td><div align='center'>$uts</td></div>
                                          <td><div align='center'>$uas</td></div>
                                          <td><div align='center'>$raport</td></div>

                                          <td><div align='center'><a href='formeditnilai.php?id_nilai=$data[id_nilai]'><button class='btn btn-primary'><i class='icon-pencil icon-white'></i></button></a> 
                                            <a href='hapusnilai.php?id_nilai=$data[id_nilai]'><button class='btn btn-danger'><i class='icon-remove icon-white'></i></button></a></td></div>
                                        </tr>";?>
<?php
}
}
?>
</table>
</body>
</html>
