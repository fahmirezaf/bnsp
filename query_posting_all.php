<?php
// perintah untuk membuka koneksi
require_once("koneksi.php");
// 
$sql = "select * from posting ORDER BY `time_post` DESC;";
// perintah untuk menjalankan query di sql
$hasil = $koneksi->query($sql);


?>
