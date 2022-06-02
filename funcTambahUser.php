<?php
include "database.php";

$sql = "INSERT INTO user SET
                    nama        = '$_POST[txtNama]',
                    password    = '$_POST[txtPass]',
                    peran        = '$_POST[txtPeran]'";
$result = mysqli_query($koneksi, $sql);
header("location:userform.php");
