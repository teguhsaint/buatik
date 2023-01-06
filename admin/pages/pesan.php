<div class="row mt-5">
    <?php
    $id = $_GET['id'];
    $produk = mysqli_query($koneksi, "SELECT * from produk JOIN kategori ON produk.kategori = kategori.id_kategori WHERE produk.id = $id");
    $no = 1;
    while ($p = mysqli_fetch_array($produk)) {
    ?>
        <div class="col-sm-3 mb-3">
            <div class="card h-100 border-0">
                <div class="img-cards" style="background-image: url(uploads/<?= $p['gambar'] ?>);
">

                </div>

            </div>

        </div>
        <div class="col-sm-9 mb-3">
            <div class="card h-100">

                <div class="card-body">
                    <h6><?= $p['nama_product']; ?></h6>
                    <h5>Rp.<?= $p['harga']; ?> </h5><br>
                    <label for="">
                        <?= $p['keterangan'] ?>
                    </label>
                    <br>
                    <a href="index.php?p=pesan&id=<?= $p['id'] ?>" class="btn btn-success">Pesan Sekarang</a>
                    <br>
                </div>
            </div>

        </div>
    <?php }
    ?>
</div>