<?php
session_start();
include 'koneksi.php';

if (isset($_POST['ubah'])) {
    $koneksi->query("UPDATE user SET 
    nama='$_POST[nama]',
jenis_kelamin='$_POST[jenis_kelamin]',
tempat_lahir='$_POST[tempat_lahir]',
tanggal_lahir='$_POST[tanggal_lahir]',
pendidikan='$_POST[pendidikan]',
agama='$_POST[agama]', 
pekerjaan='$_POST[pekerjaan]', 
alamat='$_POST[alamat]'
WHERE id_user='$_POST[id_user]'");
    echo "<script>alert('Data Tersimpan');</script>";
    // echo "<script>location='home.php';</script>";
    echo "header('refresh:0')";
}
