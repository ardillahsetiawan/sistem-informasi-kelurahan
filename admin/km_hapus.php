<?php
include '../koneksi.php';
$koneksi->query("DELETE FROM km WHERE id_pelayanan='$_GET[id_km]'");
$koneksi->query("DELETE FROM pelayanan WHERE id_pelayanan='$_GET[id_km]'");

// echo "<meta http-equiv='refresh' content='1'>";
echo "<script>alert('Data Telah Dihapus');</script>";
echo "<script>location='km.php';</script>";
