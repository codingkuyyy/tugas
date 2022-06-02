<?php
include "database.php";
?>

<h1>Data User</h1>
<div style="text-align: center;">
    <a href="simpandata.php" style="margin-right:10px;">Tambah Data</a> <a href="index.php">Kembali</a><br />
</div>
<table border="1" width="80%" cellpadding="10" style="margin: 10px auto">
    <tr>
        <th width="10px">NO</th>
        <th>Nama</th>
        <th>Password</th>
        <th>Email</th>
        <th>Telp</th>
        <th>Peran</th>
        <th colspan="2">Aksi</th>
    </tr>

    <?php
    $result = mysqli_query($koneksi, "SELECT * FROM user");
    $no = 0;
    while ($row = mysqli_fetch_array($result)) :
        $no++;
    ?>
        <tr>
            <td align="center"><?= $no; ?></td>
            <td><?= $row['nama']; ?></td>
            <td><?= $row['password']; ?></td>
            <td><?= $row['peran']; ?></td>
            <td><a href="useredit.php?Id=<?= $row['kode_user'] ?>">Edit</a></td>
            <td><a href="funcHapusUser.php?Id=<?= $row['kode_user'] ?>">Hapus</a></td>
        </tr>
    <?php endwhile; ?>

</table>