<?php 
    require_once('koneksi.php');
    $sql = "delete from posting where id_post =" . $_GET['id'];
    $koneksi->query($sql);

    header('location: view/postingan.php');

?>