<html>

<head>
    <title>Edit User</title>
</head>
<?php
include "config.php";
$Id = $_GET['Id'];
$hasil = mysqli_query($koneksi, "SELECT * FROM user WHERE kode_user = '$Id'");
$row = mysqli_fetch_array($hasil);
?>

<body>
    <h1>Edit User</h1>
    <form method="post" action="funcEditUser.php">
        <input type="hidden" name="kode" value="<?= $Id ?>">
        <table width="90%" cellpadding="4">
            <tr>
                <td>Nama</td>
                <td><input type="text" name="txtNama" value="<?= $row['nama']; ?>" required></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input type="text" name="txtPass" value="<?= $row['password']; ?>" required></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input type="text" name="txtEmail" value="<?= $row['email']; ?>" required></td>
            </tr>
            <tr>
                <td>Telpon</td>
                <td><input type="text" name="txtTelp" value="<?= $row['telp']; ?>" required></td>
            </tr>
            <tr>
                <td>Peran</td>
                <td><input type="text" name="txtPeran" value="<?= $row['peran']; ?>" required></td>
            </tr>
        </table>
        <hr>
        <input type="submit" value="Simpan">
        <a href="userform.php"><input type="button" value="Batal"></a>
</body>

</html>