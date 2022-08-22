<?php
include '../koneksi.php';
$koneksi->query("DELETE FROM imb WHERE id_pelayanan='$_GET[id_imb]'");
$koneksi->query("DELETE FROM pelayanan WHERE id_pelayanan='$_GET[id_imb]'");

// echo "<meta http-equiv='refresh' content='1'>";
echo "<script>alert('Data Telah Dihapus');</script>";
echo "<script>location='imb.php';</script>";
