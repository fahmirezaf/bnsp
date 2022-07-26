<?php
// perintah untuk membuka koneksi
require_once("koneksi.php");
// 
$sql = "select * from komentar where id_post=" . $_GET['id'];
// perintah untuk menjalankan query di sql
$komen = $koneksi->query($sql);
?>
