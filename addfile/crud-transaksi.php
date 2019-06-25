<?php
session_start();
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

elseif($eks=="addcart"){
  $jp = $_POST['jp'];
  $sesi = $_POST['session'];
  $sql = "INSERT INTO tb_ordertmp (id_profile,session) VALUES (:jp,:profil)";
  $simpan = $koneksi->prepare($sql);
  $simpan->bindParam(':jp',$jp);
  $simpan->bindParam(':profil',$sesi);
  if($simpan->execute()){
    session_start();
    $_SESSION['cart'] = TRUE;
  }
}

elseif ($eks=="hapus") {
  $id = $_POST['id_pemeriksaan'];

  $hapus = $koneksi->prepare("DELETE FROM tb_pemeriksaan WHERE id_pemeriksaan=:id");
  $hapus->bindParam(':id',$id);
  $hapus->execute();
}

elseif ($eks=="remove") {
  $id = $_POST['id'];

  $hapus = $koneksi->prepare("DELETE FROM tb_ordertmp WHERE id_order=:id");
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

elseif ($eks=="ganti") {
    $id = $_GET['id'];
    $tampil =$koneksi->prepare("SELECT * FROM tb_pemeriksaan");
    // $tampil->bindParam(':id',$id);
    $tampil->execute();
    $tampil->setFetchMode(PDO::FETCH_ASSOC);
    $data = $tampil->fetch(PDO::FETCH_ORI_NEXT);
    echo json_encode($data);
}

elseif ($eks=="bayar") {
  $total = $_POST['total'];
  $pasien = $_POST['pasien'];
  $kasir = $_SESSION['id_logged'];
  $session = $_SESSION['kunci'];
  // INSERT INTO `tb_lab`(`id_pasien`,`isValidasi`, `session`) VALUES ('ID-0002',0,2121212)
  $invoice = $koneksi->prepare("INSERT tb_invoice (id_kasir,id_pasien,total) VALUES (:kasir,:pasien,:total)");
  $lab = $koneksi->prepare("INSERT INTO tb_lab (id_pasien,isValidasi, session) VALUES (:pasien,0,:session)");

  $invoice->bindParam(":kasir",$kasir);
  $invoice->bindParam(":pasien",$pasien);
  $invoice->bindParam(":total",$total);

  $lab->bindParam(":pasien",$pasien);
  $lab->bindParam(":session",$session);

  if(!$invoice->execute()){
      var_dump($invoice->errorInfo());
  }else{
      unset($_SESSION['kunci']);

  }


}



?>
