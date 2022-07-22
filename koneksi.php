
<?php

$host="localhost";
$user="root";
$password="";
$database="twit_db";
// perintah untuk menghubungkan ke mysql
$koneksi=new mysqli($host,$user,$password,$database);


//cek koneksi
if(!$koneksi){
	 // debugging koneksi gagal
	echo "koneksi gagal";
	die();
}
?>
