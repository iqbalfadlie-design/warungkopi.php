<?php
include 'koneksi.php';
$nama=$_POST['nama'];
$harga=$_POST['harga'];


mysqli_query($koneksi,"insert into menu values('','$nama','$harga')");
header ("location:index.php")
?>