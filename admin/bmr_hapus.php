<?php
include '../koneksi.php';
$koneksi->query("DELETE FROM bmr WHERE id_pelayanan='$_GET[id_bmr]'");
$koneksi->query("DELETE FROM pelayanan WHERE id_pelayanan='$_GET[id_bmr]'");

// echo "<meta http-equiv='refresh' content='1'>";
echo "<script>alert('Data Telah Dihapus');</script>";
echo "<script>location='bmr.php';</script>";
