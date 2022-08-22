<?php
include '../koneksi.php';
$nik = $_GET['nik'];

//mengambil data
$query = mysqli_query($koneksi, "select * from user where id_user='$nik'");
$mahasiswa = mysqli_fetch_array($query);
$data = array(
    'nama'      =>  @$mahasiswa['nama'],
    'jeniskelamin'      =>  @$mahasiswa['jenis_kelamin'],
    'id_user'   =>  @$mahasiswa['id_user'],
    'tanggallahir' =>  @$mahasiswa['tanggal_lahir'],
    'tempatlahir'  =>  @$mahasiswa['tempat_lahir'],
    'pendidikan' =>  @$mahasiswa['pendidikan'],
    'agama'  =>  @$mahasiswa['agama'],
    'pekerjaan' =>  @$mahasiswa['pekerjaan'],
    'alamat'  =>  @$mahasiswa['alamat'],
);

//tampil data
echo json_encode($data);
