<?php

include 'config.php';
$nama_dokumen='Daftar Nilai Siswa XII RPL 2';
define('_MPDF_PATH','mpdf60/');
include(_MPDF_PATH . "mpdf.php");
$mpdf=new mPDF('utf-8', '', 10.5, 'arial');
$mpdf->SetDisplayMode('fullpage');
ob_start();
?>
<style type="text/css">
    table{
        margin: auto;
    }
    td,th{
        padding: 5px;
        text-align: center;
        width: 150px;
    }
    h1{
        text-align: center;
    }
    th{
        background-color:#95a5a6;
        padding: 10px;
        color: #fff 
    }
</style>
<?php
include"config.php";
$id_siswa =$_GET['id_siswa'];
$query=mysql_query("SELECT * FROM `siswa` WHERE id_siswa='$id_siswa'");
?>
                                    <h1>Raport Siswa</h1>
                                    <?php
                                    $tampil ="SELECT nama,kelas FROM siswa WHERE id_siswa='$id_siswa'";
                                    $hasil =mysql_query($tampil);
                                    while($data =mysql_fetch_array($hasil))
                                    {
                                    $nama        =$data['nama'];
                                    $kelas       =$data['kelas'];
                                    echo "<tr>
                                          <td>Nama Siswa : $nama</td>
                                          </tr>"
                                          ;
                                    }
                                    echo"
                                    </table>";
                                    ?>
                                    <h3>A. Nilai Pengetahuan dan Nilai Ketrampilan</h3>
                                    <table width="843" border="1">
                                        <tr>
                                          <th width="115" rowspan="2" scope="col">Mata Pelajaran </th>
                                          <th width="44" rowspan="2" scope="col">KB</th>
                                          <th colspan="3" scope="col">Nilai Pengetahuan </th>
                                          <th colspan="3" scope="col">Nilai Ketrampilan </th>
                                        </tr>
                                        <tr>
                                          <td width="40">Nilai</td>
                                          <td width="41">Pred</td>
                                          <td width="214">Deskripsi</td>
                                          <td width="43">Nilai</td>
                                          <td width="51">Pred</td>
                                          <td width="213">Deskripsi</td>
                                        </tr>
                                    <?php
                                   $tampil="SELECT nilai.id_nilai,siswa.nama,siswa.kelas,nilai.kd_mapel,nilai.semester,nilai.kb,nilai.n_peng,nilai.predikat,nilai.deskrip,nilai.nketram,nilai.n_raport,nilai.pred,nilai.deskripsi FROM nilai INNER JOIN siswa ON nilai.id_siswa=siswa.id_siswa WHERE siswa.id_siswa='$id_siswa'";
                                    $hasil =mysql_query($tampil);
                                    while($data =mysql_fetch_array($hasil))
                                    {
                                    $id_nilai    =$data['id_nilai'];
                                    $nama        =$data['nama'];
                                    $kelas       =$data['kelas'];
                                    $mapel       =$data['kd_mapel'];
                                    $semester    =$data['semester'];
                                    $kb          =$data['kb']; 
                                    $n_peng      =$data['n_peng'];
                                    $predikat    =$data['predikat'];
                                    $deskrip     =$data['deskrip'];
                                    $n_ketram    =$data['nketram'];
                                    $pred        =$data['pred'];
                                    $deskripsi   =$data['deskripsi'];
                                    echo"
                                    <tr>
                                          <td><div align='center'>$mapel</td></div>
                                          <td><div align='center'>$kb</td></div>
                                          <td><div align='center'>$n_peng</td></div>
                                          <td><div align='center'>$predikat</td></div>
                                          <td><div align='center'>$deskrip</td></div>
                                          <td><div align='center'>$n_ketram</td></div>
                                          <td><div align='center'>$pred</td></div>
                                          <td><div align='center'>$deskripsi</td></div>
                                    </tr>";
                                    }
                                    echo"
                                </table>"; ?>
                                <br>
                                <h3>B. Ekstrakurikuler</h3>
                                <table width="848" border="1" align="left">
                                    <tr>
                                      <th width="337" scope="col">Kegiatan Ekstrakurikuler </th>
                                      <th width="495" scope="col">Keterangan</th>
                                    </tr>
                                    <?php
                                    $tampil="SELECT * FROM ekstra WHERE id_siswa='$id_siswa' ";
                                    $hasil = mysql_query($tampil);
                                    while($data = mysql_fetch_array($hasil))
                                    {
                                    $id_ekstra   =$data['id_ekstra'];
                                    $nama_ekstra =$data['nama_ekstra'];
                                    $ket         =$data['ket'];
                                    echo"<tr>
                                          <td><div align='center'>$nama_ekstra</td></div>
                                          <td><div align='center'>$ket</td></div>
                                        </tr>";
                                    }
                                    echo"
                                </table>"; ?>
                                <br>
                                <h3>C. Ketidakhadiran</h3>
                                <table width="848" border="1">
                                    <tr>
                                      <th width="241" scope="col">Sakit</th>
                                      <th width="284" scope="col">Izin</th>
                                      <th width="301" scope="col">Tanpa Keterangan </th>
                                    </tr>
                                    <?php
                                     $tampil="SELECT * FROM ketidakhadiran WHERE id_siswa='$id_siswa'";
                                    $hasil = mysql_query($tampil);
                                    while($data =mysql_fetch_array($hasil))
                                    {
                                    $id_hadir    =$data['id_hadir'];
                                    $sakit       =$data['sakit'];
                                    $izin        =$data['izin'];
                                    $tnp_ket     =$data['tnp_ket']; 
                                    echo"
                                    <tr>
                                          <td><div align='center'>$sakit</td></div>
                                          <td><div align='center'>$izin</td></div>
                                          <td><div align='center'>$tnp_ket</td></div>
                                        </tr>";
                                    }
                                    echo"
                                </table>"; ?>
                                    <br />
                                    <br />
                                    <table width="625" border="0">
                                <tr>
                                  <td colspan="4" scope="col">Mengetahui</td>
                                </tr>
                                <tr>
                                  <td width="207"><div align="center">Orang Tua / Wali </div></td>
                                  <td width="198">&nbsp;</td>
                                  <td width="206" colspan="2"><div align="center">Walikelas</div></td>
                                </tr>
                                <tr>
                                  <td rowspan="4">&nbsp;</td>
                                  <td>&nbsp;</td>
                                  <td colspan="2" rowspan="4">&nbsp;</td>
                                </tr>
                                <tr>
                                  <td>&nbsp;</td>
                                </tr>
                                <tr>
                                  <td>&nbsp;</td>
                                </tr>
                                <tr>
                                  <td>&nbsp;</td>
                                </tr>
                                <tr>
                                  <td>(...........................................) </td>
                                  <td>&nbsp;</td>
                                  <td colspan="2">( .............................................)</td>
                                </tr>
                                <tr>
                                  <td>&nbsp;</td>
                                  <td>&nbsp;</td>
                                  <td colspan="2">&nbsp;</td>
                                </tr>
                                <tr>
                                  <td colspan="4"><div align="center">Kepala Sekolah</div></td>
                                </tr>
                                <tr>
                                  <td>&nbsp;</td>
                                  <td rowspan="3">&nbsp;</td>
                                  <td colspan="2">&nbsp;</td>
                                </tr>
                                <tr>
                                  <td>&nbsp;</td>
                                  <td colspan="2">&nbsp;</td>
                                </tr>
                                <tr>
                                  <td height="37">&nbsp;</td>
                                  <td colspan="2">&nbsp;</td>
                                </tr>
                                <tr>
                                  <td>&nbsp;</td>
                                  <td>(...............................................)</td>
                                  <td colspan="2">&nbsp;</td>
                                </tr>
                              </table>    
                              <tr>
                                  <td>&nbsp;</td>
                                  <td>&nbsp;</td>
                                  <td>&nbsp;</td>
                              </tr>
                                <tr>
                                  <td>&nbsp;</td>
                                  <td>&nbsp;</td>
                                  <td>&nbsp;</td>
                                </tr>
                              </table>
     
     <?php
$mpdf->setFooter('{PAGENO}');
$html = ob_get_contents(); //Proses untuk mengambil data
ob_end_clean();
//Here convert the encode for UTF-8, if you prefer the ISO-8859-1 just change for $mpdf->WriteHTML($html);
$mpdf->WriteHTML(utf8_encode($html));

$mpdf->Output("$nama_dokumen.pdf" ,'I');

 


exit; 
?>