<div class="row mt-5">
    <?php

    $id = $_GET['id'];
    $produk = mysqli_query($koneksi, "SELECT * from produk JOIN kategori ON produk.kategori = kategori.id_kategori WHERE produk.id = $id");
    $no = 1;
    while ($p = mysqli_fetch_array($produk)) {
    ?>
        <div class="col-sm-3 mb-3">
            <div class="card h-100 border-0">
                <div class="img-cards" style="background-image: url(admin/uploads/<?= $p['gambar'] ?>);
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
                    <br> <br>
                    <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#modalId">
                        Pesan Menu
                    </button>


                </div>
            </div>

        </div>

        <!-- Modal trigger button -->

        <!-- Modal Body -->
        <!-- if you want to close by clicking outside the modal, delete the last endpoint:data-bs-backdrop and data-bs-keyboard -->
        <div class="modal fade" id="modalId" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false" role="dialog" aria-labelledby="modalTitleId" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-scrollable modal-dialog-centered modal-sm" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalTitleId">Check Out</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="PAYMENT/examples/snap/checkout-process.php" method="POST">
                            <input type="text" class="form-control" name="menu" id="" value="<?= $p['nama_product']; ?>">

                            <input type="hidden" class="form-control" name="harga" id="" value="<?= $p['harga']; ?>">


                            <input type="hidden" class="form-control" name="amount" value="<?= $p['harga']; ?>" />

                            <br>
                            <label for="">Atas Nama</label>
                            <input type="text" class="form-control" name="nama" id="">

                            <br>
                            <label for="">Alamat Pengiriman</label>
                            <input type="text" placeholder="RT/RW, Desa, Kecamatan" class="form-control" name="desa" id="">
                            <br>
                            <input type="text" class="form-control" name="kota" id="">
                            <br>
                            <label for="">NO WA</label>
                            <input type="text" class="form-control" name="wa" id="">

                            <br> <input type="number" name="jumlah" class="form-control" placeholder="Jumlah">
                            <br>
                            <button class="btn btn-primary" type="submit">Checkout</button>
                        </form>
                    </div>

                </div>
            </div>
        </div>


        <!-- Optional: Place to the bottom of scripts -->
        <script>
            const myModal = new bootstrap.Modal(document.getElementById('modalId'), options)
        </script>
    <?php }
    ?>
</div>