<?php

include 'config.php';
$nama_dokumen='Daftar Siswa XII RPL 2';
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
<h1>Daftar Guru</h1>
<table width="843" border="1">
                                    <thead>
                                        <tr>
                                            <th><div align='center'>NIP</th></div>
                                            <th><div align='center'>Nama Guru</th></div>
                                            <th><div align='center'>Mengajar</th></div>
                                            <th><div align='center'>Tempat lahir</th></div>
                                            <th><div align='center'>Tangggal lahir</th></div>
                                            <th><div align='center'>Jenis Kelamin</th></div>
                                            <th><div align='center'>Agama</th></div>
                                            <th><div align='center'>Alamat</th></div>
                                        </tr>

                                    </thead>
                                    <tbody>
                                        <?php
                                    $tampil="SELECT guru.id_guru,guru.nip,guru.nama,mapel.mapel,guru.tempat_lhr,guru.tanggal_lhr,guru.jk,guru.agama,guru.alamat FROM guru INNER JOIN mapel ON guru.kd_mapel=mapel.kd_mapel";
                                    $hasil = mysql_query($tampil);
                                    while($data = mysql_fetch_array($hasil))
                                    {
                                    $id_guru=       $data['id_guru'];
                                    $nip=           $data['nip'];
                                    $nama_guru=     $data['nama'];
                                    $mapel=         $data['mapel'];
                                    $tempat_lhr=    $data['tempat_lhr'];
                                    $tanggal_lhr=   $data['tanggal_lhr'];
                                    $jenis=         $data['jk'];
                                    $agama=         $data['agama'];
                                    $alamat=        $data['alamat'];

                                    echo"<tr>
                                          <td>$nip</td>
                                          <td>$nama_guru</td>
                                          <td>$mapel</td>
                                          <td>$tempat_lhr</td>
                                          <td>$tanggal_lhr</td>
                                          <td>$jenis</td>
                                          <td>$agama</td>
                                          <td>$alamat</td>
                                     </tr>"; ?>

                                        <?php } ?>
                                    </tbody>
                                </table>







<?php
$mpdf->setFooter('{PAGENO}');
$html = ob_get_contents(); //Proses untuk mengambil data
ob_end_clean();
//Here convert the encode for UTF-8, if you prefer the ISO-8859-1 just change for $mpdf->WriteHTML($html);
$mpdf->WriteHTML(utf8_encode($html));

$mpdf->Output("$nama_dokumen.pdf" ,"I");

 


exit; 
?>