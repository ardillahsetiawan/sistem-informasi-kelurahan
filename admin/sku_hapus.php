<?php
include '../koneksi.php';
$koneksi->query("DELETE FROM sku WHERE id_pelayanan='$_GET[id_sku]'");
$koneksi->query("DELETE FROM pelayanan WHERE id_pelayanan='$_GET[id_sku]'");

// echo "<meta http-equiv='refresh' content='1'>";
echo "<script>alert('Data Telah Dihapus');</script>";
echo "<script>location='sku.php';</script>";
