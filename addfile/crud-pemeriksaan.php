<?php
include 'koneksi.php';

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
  $id = $_POST['id_barang'];

  $hapus = $koneksi->prepare("DELETE FROM tb_barang WHERE id_barang=:id");
  $hapus->bindParam(':id',$id);
  $hapus->execute();
}

elseif ($eks=="detail") {
     $id = $_POST['id_barang'];
     $tampil =$koneksi->prepare("SELECT * FROM tb_barang WHERE id_barang=:id");
     $tampil->bindParam(':id',$id);
     $tampil->execute();
     $data = $tampil->Fetch(PDO::FETCH_ASSOC);
     echo json_encode($data);
   }

elseif ($eks=="update") {
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $stok = $_POST['stok'];
    $exp=date("Y-m-d", strtotime($_POST['exp']));
    $satuan = $_POST['satuan'];

    $sql = "UPDATE tb_barang SET nama_barang=:nama,stok=:stok,exp=:exp,satuan=:satuan WHERE id_barang=:id ";
    $update = $koneksi->prepare($sql);

    $update->bindParam(':id',$id);
    $update->bindParam(':nama',$nama);
    $update->bindParam(':stok',$stok);
    $update->bindParam(':exp',$exp);
    $update->bindParam(':satuan',$satuan);
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
}



?>
