<?php 
// perintah untuk membuka koneksi
require_once("koneksi.php");
session_start();
$postingan=$_POST["postingan"];
$id_post=$_POST["id_post"];
date_default_timezone_set("Asia/Jakarta");
$timepost = (new \DateTime())->format('Y-m-d H:i:s');
// query sql untuk mencari data berdasarkan username dan password
//$sql="select * from user where user_name='". $username ."' and password='". $password ."'";
$sql = "UPDATE `posting` SET `postingan` = '". $postingan ."' where `id_post`=" . $id_post;
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