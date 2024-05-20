<h5>Halaman Kamar</h5>
<a href="?url=tambah-kamar" class="btn btn-primary">Tambah Kamar</a>
<hr>
<table class="table table-striped table-bordered">
    <tr class="fw-bold">
        <td>No</td>
        <td>Tipe Kamar</td>
        <td>Nomor Kamar</td>
        <td>Fasilitas</td>
        <td>Edit</td>
        <td>Hapus</td>
    </tr>
    <?php

        include 'koneksi.php';
        $no = 1;
        $sql = "SELECT * FROM kamar ORDER BY id_kamar DESC";
        $query = mysqli_query($koneksi, $sql);
        foreach ($query as $data) { ?>
            <tr> 
                <td><?= $no++; ?></td>
                <td><?= $data['nama_kamar'] ?></td>
                <td><?= $data['nomor_kamar'] ?></td>
                <td><?= $data['fasilitas'] ?></td>
                <td>
                    <a href="?url=edit-kamar&id_kamar=<?= $data['id_kamar']  ?>" class="btn btn-success">EDIT</a>
                </td>
                <td>
                    <a onclick="return confirm('Yakin Ingin Menghapus Kamar?')"
                     href="?url=hapus-kamar&id_kamar=<?= $data['id_kamar']  ?>" class="btn btn-danger">HAPUS</a>
                </td>
            </tr>
        <?php 
        } ?>
    
</table>