<?php
include "../koneksi.php";

$Kode = $_GET['kode'];
mysqli_query($MySQLiconn,"delete from akun where username='$Kode'");
header('location:akun.php');
?>