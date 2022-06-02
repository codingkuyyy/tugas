<?php
include "database.php";

$sql = "UPDATE user SET
            nama        = '$_POST[txtNama]',
            email       = '$_POST[txtEmail]',
            telp        = '$_POST[txtTelp]',
            password    = '$_POST[txtPass]',
            peran        = '$_POST[txtPeran]'
        WHERE kode_user = '$_POST[kode]' ";
$hasil = mysqli_query($koneksi, $sql);

header("location:userform.php");
