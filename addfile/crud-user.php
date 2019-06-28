<?php
session_start();
include 'koneksi.php';

$eks = $_GET['eks'];

if ($eks=="tambah") {
  $nama = $_POST['nama'];
  $username = $_POST['username'];
  $password = md5($_POST['password']);
  $level = $_POST['level'];

  $sql = "INSERT INTO tb_admin (username,password,level,nama) VALUES (:username,:password,:level,:nama)";
  $simpan = $koneksi->prepare($sql);

  $simpan->bindParam(':nama',$nama);
  $simpan->bindParam(':password',$password);
  $simpan->bindParam(':username',$username);
  $simpan->bindParam(':level',$level);
  if(!$simpan->execute()){
        echo mysqli_error($koneksi);
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
  $id = $_POST['id_admin'];
  $tampil =$koneksi->prepare("SELECT * FROM tb_admin WHERE id_admin=:id");
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
