<div class="row mt-5">
    <?php $produk = mysqli_query($koneksi, "SELECT * from produk JOIN kategori ON produk.kategori = kategori.id_kategori");
    $no = 1;
    while ($p = mysqli_fetch_array($produk)) {
    ?>
        <div class="col-sm-3 mb-3">
            <div class="card h-100">
                <div class="img-cards" style="background-image: url(admin/uploads/<?= $p['gambar'] ?>);
">

                </div>
                <div class="card-body">
                    <h6><?= $p['nama_product']; ?></h6>
                    <h5>Rp.<?= $p['harga']; ?> </h5><br>
                    <a href="index.php?p=pesan&id=<?= $p['id'] ?>" class="btn w-100 btn-success">Pesan Sekarang</a>
                    <br>
                </div>
            </div>

        </div>
    <?php }
    ?>
</div>