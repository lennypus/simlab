<?php
session_start();
include 'koneksi.php';
$submit = isset($_POST['submit']);
    if($submit == 'simpan'){
        $hasil = $_POST['hasil'];
        $profil = $_POST['profil'];
        $lab = $_POST['id_lab'];
        $i = 0;
        foreach($hasil as $hula){
            $sql[$i] = "INSERT INTO tb_test (id_pemeriksaan,hasil,id_lab) VALUES (:id_pemeriksaan,:hasil,:id_lab)";
            $simpan[$i] = $koneksi->prepare($sql[$i]);
            $simpan[$i]->bindParam(':id_pemeriksaan',$profil[$i]);
            $simpan[$i]->bindParam(':hasil',$hula);
            $simpan[$i]->bindParam(':id_lab',$lab);
            $simpan[$i]->execute();
            // $simpan[$i]->close();
            // $data[] = array('id_pemeriksaan' => $profil[$i], 'hasil' => $hula);
            $i++;
        }
        $qLab = "UPDATE tb_lab SET id_dokter=:id_dokter, tanggal=:tanggal";
        $lab = $koneksi->prepare($qLab);
        $lab->bindParam(':id_dokter',$_SESSION['nama']);
        $lab->bindParam(':tanggal', date('Y-m-d'));
        // print_r($data);
    }
?>