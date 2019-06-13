<?php

include 'koneksi.php';
$id = $koneksi->query("SELECT * FROM tb_id ORDER BY id DESC LIMIT 1")->fetch();
echo $norm = $id['id'] + 0001 - 0001;
echo str_pad($norm, 4, '0',STR_PAD_LEFT);