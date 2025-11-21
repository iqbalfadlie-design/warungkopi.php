<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Tambah Menu
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah menu</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <?php
        include 'form_menu.php';
        ?>
      </div>
      
    </div>
  </div>
</div>

<table class="table table-success table-striped">
    <tr>
        <th>Nama menu</th>
        <th>Harga</th>
        <th>#</th>
    </tr>
    <?php
    include 'koneksi.php';
    $barang =mysqli_query($koneksi,"select*from menu");
    while ($b=mysqli_fetch_array($barang)) {
        ?>
        <tr>
            <td><?=$b['nama_menu']?></td>
            <td><?=$b['harga']?></td>
           
            <td>
                <a href="edit_menu.php?id_menu=<?=$b['id_menu']?>"><span class="badge text-bg-primary"><i class="bi bi-pencil"></i>Edit</span></a> |
                <a href="delete_menu.php?id_menu=<?=$b['id_menu']?>"><span class="badge text-bg-danger">Delete</span></a>
            </td>
        </tr>
        
        <?php


    }
    ?>
</table>