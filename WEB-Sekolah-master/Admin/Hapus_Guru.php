<?php
include "../koneksi.php";

$Kode = $_GET['kode'];
mysqli_query($MySQLiconn,"delete from guru where nip='$Kode'");
header('location:guru.php');
?>