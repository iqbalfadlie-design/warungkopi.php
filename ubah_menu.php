<?php
include 'koneksi.php';
$menu=$_POST['menu'];
$id_menu = $_POST['id_menu'];
$harga=$_POST['harga'];


mysqli_query($koneksi,"
update menu set nama_menu='$menu',
harga='$harga'
 where id_menu='$id_menu'
");
header ("location:index.php");
?>