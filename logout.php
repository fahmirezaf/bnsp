
<?php 
// perintah untuk menghapus seluruh session
session_start();
session_destroy();
header("location: login.php");
?>