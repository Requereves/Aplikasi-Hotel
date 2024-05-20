<h5>halaman Data Petugas</h5>
<hr>
<table class="table table-striped table-bordered">
    <tr class="fw-bold">
        <td>No</td>
        <td>Username</td>
        <td>Password</td>
    </tr>
    <?php

        include 'koneksi.php';
        $no = 1;
        $sql = "SELECT * FROM user ORDER BY id_user DESC";
        $query = mysqli_query($koneksi, $sql);
        foreach ($query as $data) { ?>
            <tr> 
                <td><?= $no++; ?></td>
                <td><?= $data['username'] ?></td>
                <td><?= $data['password'] ?></td>
            </tr>
        <?php 
        } ?>
    
</table>