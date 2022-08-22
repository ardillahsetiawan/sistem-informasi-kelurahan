<?php
include '../koneksi.php';
$koneksi->query("DELETE FROM kp WHERE id_pelayanan='$_GET[id_kp]'");
$koneksi->query("DELETE FROM pelayanan WHERE id_pelayanan='$_GET[id_kp]'");

// echo "<meta http-equiv='refresh' content='1'>";
echo "<script>alert('Data Telah Dihapus');</script>";
echo "<script>location='kp.php';</script>";
