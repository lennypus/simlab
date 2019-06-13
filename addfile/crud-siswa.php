<?php
include 'koneksi.php';

$eks = $_GET['eks'];

if ($eks=="tambah") {
  $id = $koneksi->query("SELECT * FROM tb_id ORDER BY id DESC LIMIT 1")->fetch();
  $norm = $id['id'] + 0001 - 0001;
 
  $nis = "ID-".str_pad($norm, 4, '0',STR_PAD_LEFT);
  $nama = $_POST['nama'];
  $jk = $_POST['jk'];
  $tmpt_lahir = $_POST['tmpt_lahir'];
  $tgl_lahir=date("Y-m-d", strtotime($_POST['tgl_lahir']));
  $alamat = $_POST['alamat'];
  $nama_ayah = $_POST['nama_ayah'];
  $nama_ibu = $_POST['nama_ibu'];

  $sql = "INSERT INTO tb_siswa (nis,nama,jk,tmpt_lahir,tgl_lahir,alamat) VALUES (:nis,:nama,:jk,:tmpt_lahir,:tgl_lahir,:alamat)";
  $simpan = $koneksi->prepare($sql);
  $addId = "INSERT INTO tb_id VALUES()";
  $addId = $koneksi->prepare($addId)->execute();

  $simpan->bindParam(':nis',$nis);
  $simpan->bindParam(':nama',$nama);
  $simpan->bindParam(':jk',$jk);
  $simpan->bindParam(':tmpt_lahir',$tmpt_lahir);
  $simpan->bindParam(':tgl_lahir',$tgl_lahir);
  $simpan->bindParam(':alamat',$alamat);
  // $simpan->bindParam(':nama_ayah',$nama_ayah);
  // $simpan->bindParam(':nama_ibu',$nama_ibu);
  $simpan->execute();
}

elseif ($eks=="hapus") {
  $nis = $_POST['nis'];

  $hapus = $koneksi->prepare("DELETE FROM tb_siswa WHERE nis=:nis");
  $hapus->bindParam(':nis',$nis);
  $hapus->execute();
}

elseif ($eks=="detail") {
     $nis = $_POST['nis'];
     $tampil =$koneksi->prepare("SELECT * FROM tb_siswa WHERE nis=:nis");
     $tampil->bindParam(':nis',$nis);
     $tampil->execute();
     $data = $tampil->Fetch(PDO::FETCH_ASSOC);
     echo json_encode($data);
   }

elseif ($eks=="update") {
    $nis = $_POST['nis'];
    $nama = $_POST['nama'];
    $jk = $_POST['jk'];
    $tmpt_lahir = $_POST['tmpt_lahir'];
    $tgl_lahir=date("Y-m-d", strtotime($_POST['tgl_lahir']));
    $alamat = $_POST['alamat'];

    $sql = "UPDATE tb_siswa SET nama=:nama,jk=:jk,tmpt_lahir=:tmpt_lahir,tgl_lahir=:tgl_lahir,alamat=:alamat WHERE nis=:nis ";
    $update = $koneksi->prepare($sql);

    $update->bindParam(':nis',$nis);
    $update->bindParam(':nama',$nama);
    $update->bindParam(':jk',$jk);
    $update->bindParam(':tmpt_lahir',$tmpt_lahir);
    $update->bindParam(':tgl_lahir',$tgl_lahir);
    $update->bindParam(':alamat',$alamat);
    $update->execute();
   }



?>
