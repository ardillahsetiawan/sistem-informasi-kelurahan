<?php
include '../koneksi.php';
$koneksi->query("DELETE FROM kaw WHERE id_pelayanan='$_GET[id_kaw]'");
$koneksi->query("DELETE FROM pelayanan WHERE id_pelayanan='$_GET[id_kaw]'");

// echo "<meta http-equiv='refresh' content='1'>";
echo "<script>alert('Data Telah Dihapus');</script>";
echo "<script>location='kaw.php';</script>";
