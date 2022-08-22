<?php
include '../koneksi.php';
$koneksi->query("DELETE FROM kk WHERE id_pelayanan='$_GET[id_kk]'");
$koneksi->query("DELETE FROM pelayanan WHERE id_pelayanan='$_GET[id_kk]'");

// echo "<meta http-equiv='refresh' content='1'>";
echo "<script>alert('Data Telah Dihapus');</script>";
echo "<script>location='kk.php';</script>";
