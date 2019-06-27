<?php
include '../koneksi.php';
// $jk="Laki - Laki";
$laki = $koneksi->prepare("SELECT SUM(total) FROM tb_invoice");
// $laki->bindParam(':jk',$jk);
$laki->execute();
$data = $laki->fetch(PDO::FETCH_NUM);
echo rupiah($data[0]);
?>
