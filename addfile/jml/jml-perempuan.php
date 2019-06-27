<?php
include '../koneksi.php';
// $jk="Perempuan";
$perempuan = $koneksi->prepare("SELECT COUNT(id_lab) FROM tb_lab");
// $perempuan->bindParam(':jk',$jk);
$perempuan->execute();
$data = $perempuan->fetch(PDO::FETCH_NUM);
echo $data[0];
 ?>
