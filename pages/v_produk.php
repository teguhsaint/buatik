<div class="container">
    <table class="table table-bordered">
        <thead>
            <th>NO PRODUK</th>
            <th>NAMA PRODUK</th>
            <th>HARGA PRODUK</th>
            <th>KATEGORI</th>
        </thead>
        <tbody>
            <tr>
                <?php $produk = mysqli_query($koneksi, "SELECT * from produk");
                $no = 1;
                while ($p = mysqli_fetch_array($produk)) {
                ?>
                    <td> <?= $no++; ?> </td>
                    <td> <?= $p['nama_product']; ?> </td>
                    <td> <?= $p['harga']; ?> </td>
                    <td> <?= $p['kategori']; ?> </td>
                <?php }
                ?>
            </tr>
        </tbody>
    </table>
</div>