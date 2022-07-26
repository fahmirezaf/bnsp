<?php
// perintah untuk membuka koneksi
require_once("koneksi.php");
// 
$sql = "select * from posting where id_post=" . $_GET['id'] . ' limit 1';
// perintah untuk menjalankan query di sql
$hasil = $koneksi->query($sql);

?>
