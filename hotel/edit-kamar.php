<?php
$id_kamar = $_GET['id_kamar'];
include 'koneksi.php';
$sql = "SELECT * FROM kamar WHERE id_kamar='$id_kamar'";
$query = mysqli_query($koneksi, $sql);
$data = mysqli_fetch_array($query);
?>
<h5>Halaman Edit Data SPP.</h5>
<a href="?url=kamar" class="btn btn-primary"> KEMBALI </a>
<hr>
<form method="post" action="?url=proses-edit-kamar&id_kamar=<?= $id_kamar; ?>">
    <div class="form-group mb-2">
        <label>Nama Kamar</label>
        <input value="<?= $data['nama_kamar'] ?>" type="text" name="nama_kamar" maxlength="100" class="form-control" required>
    </div>
    <div class="form-group mb-2">
        <label>Nomor Kamar</label>
        <input value="<?= $data['nomor_kamar'] ?>" type="number" name="nomor_kamar" maxlength="100" class="form-control" required>
    </div>
    <div class="form-group mb-2">
        <label>Fasilitas</label>
        <input value="<?= $data['fasilitas'] ?>" type="text" name="fasilitas" maxlength="100" class="form-control" required>
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-success"> SIMPAN </button>
        <button type="reset" class="btn btn-warning"> KOSONGKAN </button>
    </div>
</form>