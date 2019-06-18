<?php
if(!empty($_SESSION['kunci'])){
  unset($_SESSION['kunci']);
  // header('location:home.php?page=transaksi');
}
