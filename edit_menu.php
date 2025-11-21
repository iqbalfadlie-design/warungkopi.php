<?php
include 'koneksi.php';
$id_menu = $_GET['id_menu'];
$menu = mysqli_query($koneksi,"select*from menu where id_menu='$id_menu'");
$b = mysqli_fetch_array($menu)


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Menu </title>
</head>
<body>
    <h1>Edit Menu </h1>
    <table>
    <form action="ubah_menu.php" method="post">
        <input type="text" name="id_menu" id="" value = "<?=$id_menu?>"hidden>
    <tr>
        <td>Nama Menu </td>
        <td><input type="text" name="menu" id="" value = "<?=$b['nama_menu']?>"required> </td>
    </tr>
    <tr>
        <td>Harga</td>
        <td><input type="number" name="harga" id=""value = "<?=$b['harga']?>"required></td>
    </tr>
    
    <tr>
        <td><input type="submit" value= "ubah menu"></td>
    </tr>
    </form>
</table>
</body>
</html>