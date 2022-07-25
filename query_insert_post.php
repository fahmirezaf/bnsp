<?php 
// perintah untuk membuka koneksi
require_once("koneksi.php");
session_start();
$postingan=$_POST["postingan"];
// query sql untuk mencari data berdasarkan username dan password
//$sql="select * from user where user_name='". $username ."' and password='". $password ."'";
$sql = "INSERT INTO posting (id_post, user_name, postingan,time_post)VALUES ('','".$_SESSION['username']."','". $postingan ."','')";
// perintah untuk menjalankan query di sql
$hasil=$koneksi->query($sql);
// validasi jika data ditemukan
if ($hasil)
{
 header("location: view/index.php");
}
else{
    // debugging gagal simpan
   echo "gagal simpan";
    die();
}
?>