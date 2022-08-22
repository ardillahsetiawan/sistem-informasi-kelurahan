<?php
include '../koneksi.php';
$koneksi->query("DELETE FROM kd WHERE id_pelayanan='$_GET[id_kd]'");
$koneksi->query("DELETE FROM pelayanan WHERE id_pelayanan='$_GET[id_kd]'");

// echo "<meta http-equiv='refresh' content='1'>";
echo "<script>alert('Data Telah Dihapus');</script>";
echo "<script>location='kd.php';</script>";
