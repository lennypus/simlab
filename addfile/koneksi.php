<?php
try {
    $koneksi = New PDO ("mysql:host=localhost;dbname=db_datasiswa","root","");
} catch (Exception $e) {
    echo $e->getMessage();
}

function rupiah($angka){
	
	$hasil_rupiah = "Rp " . number_format($angka,2,',','.');
	return $hasil_rupiah;
 
}

?>
