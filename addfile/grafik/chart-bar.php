<?php
include '../koneksi.php';

$data_siswa = array();

$tahun = $koneksi->prepare("SELECT  YEAR(tanggal) AS Thn, COUNT(*) AS Jml_Thn  FROM tb_lab GROUP BY YEAR(tanggal) ASC");
$tahun->execute();
$tahun->setFetchMode(PDO::FETCH_ASSOC);
while ($data = $tahun->fetch(PDO::FETCH_ORI_NEXT)) {

          array_push($data_siswa, array("Tahun"=>$data['Thn'],"Jml"=>$data['Jml_Thn']));
        }
      echo json_encode($data_siswa);
 ?>
