<?php
include "database.php";

$Id = $_GET['Id'];
$sql = "DELETE FROM user WHERE kode_user = '$Id'";
$hasil = mysqli_query($koneksi, $sql);



header("location:userform.php");
