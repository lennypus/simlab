<?php
include 'koneksi.php';
session_start();
$eks = $_GET['eks'];

if ($eks=="tambah") {
  $jp = $_POST['jp'];
  $harga = $_POST['harga'];
  $unit = $_POST['unit'];
  $rujukan = $_POST['rujukan'];
  $profil = $_POST['profil'];

  $sql = "INSERT INTO tb_pemeriksaan (jenis_pemeriksaan,harga,unit,nilai_rujukan,id_profil) VALUES (:jp,:harga,:unit,:rujukan,:profil)";
  $simpan = $koneksi->prepare($sql);

  $simpan->bindParam(':jp',$jp);
  $simpan->bindParam(':harga',$harga);
  $simpan->bindParam(':unit',$unit);
  $simpan->bindParam(':rujukan',$rujukan);
  $simpan->bindParam(':profil',$profil);
  if(!$simpan->execute()){
        return 'Whoop somtething error in server!';
  }
}

elseif ($eks=="hapus") {
  $id = $_POST['id_pemeriksaan'];

  $hapus = $koneksi->prepare("DELETE FROM tb_pemeriksaan WHERE id_pemeriksaan=:id");
  $hapus->bindParam(':id',$id);
  $hapus->execute();
}

elseif ($eks=="detail") {
     $id = $_POST['id_pemeriksaan'];
     $tampil =$koneksi->prepare("SELECT * FROM tb_pemeriksaan WHERE id_pemeriksaan=:id");
     $tampil->bindParam(':id',$id);
     $tampil->execute();
     $data = $tampil->Fetch(PDO::FETCH_ASSOC);
     echo json_encode($data);
}

elseif ($eks=="update") {
    $id = $_POST['id'];
    $jp = $_POST['jp'];
    $harga = $_POST['harga'];
    $unit = $_POST['unit'];
    $rujukan = $_POST['rujukan'];
    $profil = $_POST['profil'];

    $sql = "UPDATE tb_pemeriksaan SET jenis_pemeriksaan=:jp,unit=:unit,harga=:harga,nilai_rujukan=:rujukan,id_profil=:profil WHERE id_pemeriksaan=:id ";
    $update = $koneksi->prepare($sql);
    $update->bindParam(':id',$id);
    $update->bindParam(':jp',$jp);
    $update->bindParam(':harga',$harga);
    $update->bindParam(':unit',$unit);
    $update->bindParam(':rujukan',$rujukan);
    $update->bindParam(':profil',$profil);
    $update->execute();
   }
elseif ($eks=="keluar") {
    $id = $_POST['id'];
    $decrease = $_POST['nilai'];
    $sql = "UPDATE tb_barang SET stok = stok - :nilai WHERE id_barang = :id";
    $update = $koneksi->prepare($sql);
    $update->bindParam(':id',$id);
    $update->bindParam(':nilai',$decrease);
    $update->execute();
}elseif ($eks=="masuk") {
    $id = $_POST['id'];
    $increase = $_POST['nilai'];
    $sql = "UPDATE tb_barang SET stok = stok + :nilai WHERE id_barang = :id";
    $update = $koneksi->prepare($sql);
    $update->bindParam(':id',$id);
    $update->bindParam(':nilai',$increase);
    $update->execute();
}elseif ($eks=="profil"){
     $id = $_POST['id_profil'];
     $tampil =$koneksi->prepare("SELECT * FROM tb_profil WHERE id_profil=:id");
     $tampil->bindParam(':id',$id);
     $tampil->execute();
     $data = $tampil->Fetch(PDO::FETCH_ASSOC);
     echo json_encode($data);
}
elseif ($eks=="validasi"){
  $id = $_POST['id_lab'];
  $tanggal = date('Y-m-d');
  $dokter = $_SESSION['nama'];
  $valid = 1;
  $tampil =$koneksi->prepare("UPDATE tb_lab SET id_dokter =:dokter, isValidasi = :valid, tanggal = :tanggal  WHERE id_lab = :id");
  $tampil->bindParam(':id',$id);
  $tampil->bindParam(':tanggal',$tanggal);
  $tampil->bindParam(':dokter',$dokter);
  $tampil->bindParam(':valid',$valid);
  if($tampil->execute()){
      return 'sukses';
  }else{
    return 'Error: '.mysqli_error($koneksi);
  }
}



?>
