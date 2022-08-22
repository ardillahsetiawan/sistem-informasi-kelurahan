<?php
include '../koneksi.php';
$koneksi->query("DELETE FROM tm WHERE id_pelayanan='$_GET[id_tm]'");
$koneksi->query("DELETE FROM pelayanan WHERE id_pelayanan='$_GET[id_tm]'");

// echo "<meta http-equiv='refresh' content='1'>";
echo "<script>alert('Data Telah Dihapus');</script>";
echo "<script>location='tm.php';</script>";
