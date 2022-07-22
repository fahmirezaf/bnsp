<?php 
// perintah untuk membuka koneksi
require_once("koneksi.php");
$username=$_POST["username"];
$password=$_POST["password"];
// query sql untuk mencari data berdasarkan username dan password
$sql="select * from user where user_name='". $username ."' and password='". $password ."'";
// perintah untuk menjalankan query di sql
$hasil=$koneksi->query($sql);
// validasi jika data ditemukan
if ($hasil->num_rows >0 )
{
    // perintah untuk merubah data jadi array
  $data=$hasil->fetch_array();
 session_start();
 // perintah untuk menyimpan data username sementara di session
 $_SESSION["username"]=$data["user_name"];
 header("location: index.php");
}
else{
    // debugging login gagal
   echo "login gagal";
    die();
}
?>