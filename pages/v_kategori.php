<table class="table table-stripped">
    <th>No</th>
    <th>Nama Kategori</th>
    <th>aksi</th>
    <?php
    $data = mysqli_query($koneksi, 'select * from kategori ');
    $no = 1;
    while ($d = mysqli_fetch_array($data)) { ?>
        <tr>
            <td><?= $no++ ?></td>
            <td><?= $d['nama_kategori'] ?></td>
            <td>
                <a href="index.php?p=edit_kategori&id=<?= $d['id_kategori'] ?>">edit</a>
                <a href="index.php?p=delete_kategori&id=<?= $d['id_kategori'] ?>">delete</a>
                
            </td>
        </tr>
    <?php } ?>

</table>