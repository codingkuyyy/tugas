<html>

<head>
    <title>Tambah User</title>
</head>

<body>
    <h1>Tambah User</h1>
    <form method="post" action="funcTambahUser.php">
        <table width="90%" cellpadding="4">
            <tr>
                <td>Nama</td>
                <td><input type="text" name="txtNama" required></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input type="text" name="txtPass" required></td>
            </tr>
            <tr>
                <td>Peran</td>
                <td><input type="text" name="txtPeran" required></td>
            </tr>
        </table>
        <hr>
        <input type="submit" value="Simpan">
        <a href="userform.php"><input type="button" value="Batal"></a>
</body>

</html>