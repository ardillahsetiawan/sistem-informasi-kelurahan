<?php
include '../koneksi.php';
$koneksi->query("DELETE FROM user WHERE id_user='$_GET[id_user]'");

// echo "<meta http-equiv='refresh' content='1'>";
echo "<script>alert('Data Telah Dihapus');</script>";
echo "<script>location='user.php';</script>";
