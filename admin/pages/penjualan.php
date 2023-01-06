<a href="index.php?p=transaksi" class="btn btn-sm btn-primary my-3 float-end"><i class="fas fa-plus"></i> Tambah Transaksi</a>
<table class="table table-bordered">
    <thead>
        <th>NO</th>
        <th>ORDER ID</th>
        <th>Customer</th>
        <th>Menu</th>
        <th>Jumlah</th>
        <th>Total</th>
        <th>Status</th>
        <th>Kontak</th>
    </thead>
    <tbody>
        <?php $produk = mysqli_query($koneksi, "SELECT * from transaksi ORDER By id_transaksi DESC");
        $no = 1;
        while ($p = mysqli_fetch_array($produk)) {
        ?><tr>
                <td> <?= $no++; ?> </td>

                <td> <?= $p['order_id']; ?> </td>
                <td> <?= $p['nama_customer']; ?> </td>

                <td> <?= $p['menu']; ?> </td>
                <td> <?= $p['jumlah']; ?> </td>
                <td> Rp.<?= number_format($p['total'], 0, 2); ?> </td>
                <td> <?php

                        if ($p['order_status'] == 1) {
                            echo "<div class='badge bg-success'>Terbayar</div>";
                        } else {
                            echo "<div class='badge bg-danger'>Belum Di Bayar</div>";
                        } ?> </td>
                <td> 62<?= $p['wa']; ?> </td>
            </tr>
        <?php }
        ?>
    </tbody>

</table>