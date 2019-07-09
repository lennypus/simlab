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

<<<<<<< HEAD
elseif($eks=="transaksi"){
  $id = $_POST['id'];
  $tampil = $koneksi->prepare("SELECT tb_invoice.*,tb_admin.nama as admin,tb_siswa.nama as pasien FROM tb_invoice JOIN tb_admin ON tb_admin.id_admin=tb_invoice.id_kasir JOIN tb_siswa ON tb_siswa.nis=tb_invoice.id_pasien WHERE tb_invoice.id_invoice =:id_invoice");
 //  $tampil =$koneksi->prepare("SELECT * FROM tb_pemeriksaan WHERE id_pemeriksaan=:id");
  $tampil->bindParam(':id_invoice',$id);
  $tampil->execute();
  $data = $tampil->Fetch(PDO::FETCH_ASSOC);
  echo json_encode($data);
=======
elseif($eks="transaksi"){
     $id = $_POST['id'];
     $tampil = $koneksi->prepare("SELECT tb_invoice.*,tb_admin.nama as admin,tb_siswa.nama as pasien FROM tb_invoice JOIN tb_admin ON tb_admin.id_admin=tb_invoice.id_kasir JOIN tb_siswa ON tb_siswa.nis=tb_invoice.id_pasien WHERE tb_invoice.id_invoice =:id_invoice");
    //  $tampil =$koneksi->prepare("SELECT * FROM tb_pemeriksaan WHERE id_pemeriksaan=:id");
     $tampil->bindParam(':id_invoice',$id);
     $tampil->execute();
     $data = $tampil->Fetch(PDO::FETCH_ASSOC);
     echo json_encode($data);
>>>>>>> fdcb93b933eec2570fc8deee81e4100ba52712e9
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
  // INSERT INTO `tb_lab`(`id_pasien`,`isValidasi`, `session`) VALUES (:paien,0,:session);
  $invoice = $koneksi->prepare("INSERT tb_invoice (id_kasir,id_pasien,total) VALUES (:kasir,:pasien,:total)");
  $lab = $koneksi->prepare("INSERT INTO tb_lab (id_pasien,isValidasi, session) VALUES (:pasien,0,:session)");

  $invoice->bindParam(":kasir",$kasir);
  $invoice->bindParam(":pasien",$pasien);
  $invoice->bindParam(":total",$total);

  $lab->bindParam(":pasien",$pasien);
  $lab->bindParam(":session",$session);

  if(!$invoice->execute() || !$lab->execute()){
      var_dump($invoice->errorInfo());
      var_dump($lab->errorInfo());
  }else{
      unset($_SESSION['kunci']);

  }


}



?>
