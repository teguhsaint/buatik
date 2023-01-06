<div class="card">
    <div class="card-body">

        <form action="" accept="jpg" method="post" enctype="multipart/form-data">
            <div class="row">
                <div class="col-sm-3 mb-3">
                    <label for="" class="form-label">Gambar</label>
                    <input type="file" name="gambar" id="" class="form-control rounded-1" placeholder="" aria-describedby="helpId">
                </div>
                <div class="col-sm-3 mb-3">
                    <label for="" class="form-label">Nama Produk</label>
                    <input type="text" name="namaproduk" id="" class="form-control rounded-1" placeholder="" aria-describedby="helpId">
                </div>
                <div class="col-sm-3 mb-3">
                    <label for="" class="form-label">Harga Produk</label>
                    <input type="number" name="harga" id="" class="form-control rounded-1" placeholder="" aria-describedby="helpId">
                </div>
                <div class="col-sm-3 mb-3"> <label for="" class="form-label">Kategori Produk</label>

                    <select name="kategori" class="form-control rounded-1" id="">
                        <option value="" disabled selected>Pilih Kategori</option>

                        <?php
                        $kueri = "SELECT * FROM kategori";
                        $hasil = mysqli_query($koneksi, $kueri);

                        while ($data = mysqli_fetch_array($hasil)) {
                        ?>
                            <option value="<?= $data['id_kategori'] ?>"><?= $data['nama_kategori'] ?></option>

                        <?php
                        }
                        ?>
                    </select>

                </div>
                <div class="col-sm-12">
                    <textarea name="keterangan" class="areas" id="" cols="30" rows="10"></textarea>
                </div>
                <div class="col-sm-12 mb-3 mt-3">

                    <input type="submit" name="simpan" id="" class="float-end btn btn-primary rounded-1" value="Simpan Produk">
                </div>
            </div>
        </form>
    </div>
</div>


<?php
if (!empty($_POST['simpan'])) {

    $nama = $_POST['namaproduk'];
    $harga = $_POST['harga'];
    $kategori = $_POST['kategori'];
    $keterangan = $_POST['keterangan'];

    $gambar_produk = $_FILES['gambar']['name'];

    $file_tmp = $_FILES['gambar']['tmp_name'];
    $angka_acak     = rand(1, 999);
    $nama_gambar_baru = $angka_acak . '-' . $gambar_produk;
    move_uploaded_file($file_tmp, 'uploads/' . $nama_gambar_baru); //memindah file gambar ke folder gambar

    $kueri = "INSERT INTO produk VALUES(NULL,'$nama','$harga','$kategori','$nama_gambar_baru','$keterangan')";

    mysqli_query($koneksi, $kueri);
}

?>