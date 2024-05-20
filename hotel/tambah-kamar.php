<h5>Halaman Tambah Data SPP</h5>
<a href="?url=kamar" class="btn btn-primary"> KEMBALI</a>
<hr>
<form method="post" action="?url=proses-tambah-kamar">
    <div class="form-group mb-2">
        <label>Nama Kamar</label>
        <input type="text" name="nama_kamar" maxlength="100" class="form-control" required>
    </div>
    <div class="form-group mb-2">
        <label>Nomor Kamar</label>
        <input type="number" name="nomor_kamar" maxlength="13" class="form-control" required>
    </div>
    <div class="form-group mb-2">
        <label>Fasilitas</label>
        <input type="text" name="fasilitas" maxlength="100" class="form-control" required>
    </div>  
    <div class="form-group">
            <button type="submit" class="btn btn-success">SIMPAN</button>
            <button type="reset" class="btn btn-warning">RESET</button>
    </div>
</form>