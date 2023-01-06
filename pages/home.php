<div class="row">
    <div class="col-sm-3">
        <div class="card">
            <div class="card-body">
                <?php
                $kueris = "SELECT COUNT(nama_product) as jumlah FROM produk";
                $res = mysqli_query($koneksi, $kueris);
                $jumlah_produk = 0;
                while ($data = mysqli_fetch_array($res)) {
                    $jumlah_produk = $data['jumlah'];
                }
                ?>
                <h4 class="card-title"><?= $jumlah_produk ?></h4>
                <p class="card-text">Total Produk</p>
            </div>
        </div>
    </div>
    <div class="col-sm-3">
        <div class="card">
            <div class="card-body">
                <?php
                $kueris = "SELECT COUNT(nama_kategori) as jumlah_ka FROM kategori";
                $res = mysqli_query($koneksi, $kueris);
                $jumlah_ka = 0;
                while ($data = mysqli_fetch_array($res)) {
                    $jumlah_ka = $data['jumlah_ka'];
                }
                ?>
                <h4 class="card-title"><?= $jumlah_ka ?></h4>
                <p class="card-text">Total Kategori</p>
            </div>
        </div>
    </div>
    <div class="col-sm-3">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Title</h4>
                <p class="card-text">Penjualan Bulan Ini</p>
            </div>
        </div>
    </div>
    <div class="col-sm-3">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Title</h4>
                <p class="card-text">Penjualan Tahun Ini</p>
            </div>
        </div>
    </div>
</div>