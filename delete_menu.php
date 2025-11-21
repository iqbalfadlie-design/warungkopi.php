<?php
$id_menu = $_GET['id_menu'];
include 'koneksi.php';

mysqli_query($koneksi,"delete from menu where id_menu='$id_menu'");

header("location:index.php");
?>