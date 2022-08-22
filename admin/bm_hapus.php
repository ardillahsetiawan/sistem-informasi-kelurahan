<?php
include '../koneksi.php';
$koneksi->query("DELETE FROM bm WHERE id_pelayanan='$_GET[id_bm]'");
$koneksi->query("DELETE FROM pelayanan WHERE id_pelayanan='$_GET[id_bm]'");

// echo "<meta http-equiv='refresh' content='1'>";
echo "<script>alert('Data Telah Dihapus');</script>";
echo "<script>location='bm.php';</script>";
