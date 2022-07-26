<?php 
// perintah untuk membuka koneksi
require_once("koneksi.php");
session_start();
$isi_komentar=$_POST["isi_komentar"];
$id_post=$_POST["id_post"];
date_default_timezone_set("Asia/Jakarta");
$timepost = (new \DateTime())->format('Y-m-d H:i:s');
// query sql untuk mencari data berdasarkan username dan password
//$sql="select * from user where user_name='". $username ."' and password='". $password ."'";
$sql = "INSERT INTO komentar (id, user_name, isi_komentar,id_post)VALUES ('','".$_SESSION['username']."','". $isi_komentar ."', '". $id_post . "')";
// perintah untuk menjalankan query di sql
$hasil=$koneksi->query($sql);
// validasi jika data ditemukan
if ($hasil)
{
 header("location: view/postingan.php");
}
else{
    // debugging gagal simpan
   echo "gagal simpan";
    die();
}
?>