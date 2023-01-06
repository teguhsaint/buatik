<div class="container">
    <table class="table table-bordered">
        <thead>
            <th>NO PRODUK</th>
            <th>NAMA PRODUK</th>
            <th>HARGA PRODUK</th>
            <th>KATEGORI</th>
        </thead>
        <tbody>

            <?php $produk = mysqli_query($koneksi, "SELECT * from produk JOIN kategori ON produk.kategori = kategori.id_kategori");
            $no = 1;
            while ($p = mysqli_fetch_array($produk)) {
            ?><tr>
                    <td> <?= $no++; ?> </td>
                   
                    <td> <?= $p['nama_product']; ?> </td>
                    <td> <?= $p['harga']; ?> </td>
                    <td> <?= $p['nama_kategori']; ?> </td>
                </tr>
            <?php }
            ?>

        </tbody>
    </table>
</div>