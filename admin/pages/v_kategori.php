
<table class="table table-bordered">
    <thead>
        <th>No</th>
        <th>Nama Kategori</th>
        <th>Opsi</th>
    </thead>
    <tbody>
        <?php
        $data = mysqli_query($koneksi, 'select * from kategori ');
        $no = 1;
        while ($d = mysqli_fetch_array($data)) { ?>
            <tr>
                <td><?= $no++ ?></td>
                <td><?= $d['nama_kategori'] ?></td>
                <td>
                    <a href="index.php?p=edit_kategori&id=<?= $d['id_kategori'] ?>" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></a>
                    &nbsp;&nbsp;
                    <a href="index.php?p=delete_kategori&id=<?= $d['id_kategori'] ?>" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a>

                </td>
            </tr>
        <?php } ?>
    </tbody>
</table>
