<!DOCTYPE html>
<html lang="en">

<?php
session_start();
include '../koneksi.php';

if (!isset($_SESSION['adm'])) {
    echo "<script>alert('You Must Be Login');</script>";
    echo "<script>location='login.php';</script>";
    header('location:login.php');
    exit();
}
?>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>KELURAHAN SELAT HULU</title>
    <!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- MORRIS CHART STYLES-->
    <link href="assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
    <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />

    <script src="assets/js/jquery-1.10.2.js"></script>
    <title>USER</title>
</head>

<body class="hold-transition sidebar-mini template-fixed">
    <?php include 'navbar.php'; ?>
    <!-- /. NAV SIDE  -->
    <div id="page-wrapper">
        <div id="page-inner">


            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <div class="container-contact2">
                        <div class="wrap-contact2">
                            <form action="" method="POST" enctype="multipart/form-data">

                                <h3 class="text-center">
                                    <b>Tambah User Baru</b>
                                </h3>

                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label for=""><b>*NIK</b></label>
                                        <input type="text" name="id_user" class="form-control" placeholder="Masukan NIK" required oninvalid="this.setCustomValidity('NIK Anda Harus diInput!')" oninput="setCustomValidity('')">
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label for=""><b>*Nama</b></label>
                                        <input class="form-control" type="text" name="nama" placeholder="Nama Lengkap" required oninvalid="this.setCustomValidity('Nama Lengkap Anda Harus diInput!')" oninput="setCustomValidity('')">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label for=""><b>*Email</b></label>
                                        <input class="form-control" type="text" name="email" placeholder="Email" required oninvalid="this.setCustomValidity('Email Anda Harus diInput!')" oninput="setCustomValidity('')">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for=""><b>*Password</b></label>
                                        <input class="form-control" type="password" name="pass" placeholder="Password" required oninvalid="this.setCustomValidity('Password Anda Harus diInput!')" oninput="setCustomValidity('')">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label class=""><b>*Jenis Kelamin</b></label>
                                        <select class="form-control select2" name="jenis_kelamin">
                                            <option selected="selected" disabled>-Jenis Kelamin-</option>
                                            <option value="Laki-laki">Laki-Laki</option>
                                            <option value="Perempuan">Perempuan</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for=""><b>*Telepon</b></label>
                                        <input class="form-control" type="text" name="telepon" placeholder="No HP">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label><b>*Tempat Lahir</b></label>
                                        <input type="text" name="tempat_lahir" value="" class="form-control" placeholder="Tempat Lahir" required oninvalid="this.setCustomValidity('Tempat Lahir Anda Harus diInput!')" oninput="setCustomValidity('')">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label><b>*Tanggal Lahir</b></label><br>
                                        <input type="Date" name="tanggal_lahir" value="" class="form-control" placeholder="Tempat Lahir" required oninvalid="this.setCustomValidity('Tanggal Lahir Anda Harus diInput!')" oninput="setCustomValidity('')">
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="form-group col-md-8">
                                        <label for=""><b>*Alamat</b></label>
                                        <textarea class="form-control" name="alamat" cols="1" rows="1" placeholder="Alamat Tinggal" required oninvalid="this.setCustomValidity('Alamat Anda Harus diInput!')" oninput="setCustomValidity('')"></textarea>
                                    </div>
                                    <div class="form-group col-md-2">
                                        <label for=""><b>*RT</b></label>
                                        <input type="text" class="form-control" name="rt">
                                    </div>
                                    <div class="form-group col-md-2">
                                        <label for=""><b>*RW</b></label>
                                        <input type="text" class="form-control" name="rw">
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="form-group col-md-4">
                                        <label for=""><b>*Kelurahan</b></label>
                                        <input type="text" name="kelurahan_domisili" class="form-control" placeholder="Kelurahan" required oninvalid="this.setCustomValidity('Kelurahan Anda Harus diInput!')" oninput="setCustomValidity('')">
                                    </div>

                                    <div class="form-group col-md-4">
                                        <label><b>*Kecamatan</b></label>
                                        <input type="text" name="kecamatan_domisili" class="form-control" placeholder="Kecamatan" required oninvalid="this.setCustomValidity('Kecamatan Anda Harus diInput!')" oninput="setCustomValidity('')">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label><b>*Kabupaten/Kota</b></label>
                                        <input type="text" name="kabupatenkota_domisili" class="form-control" placeholder="Kabupeten/Kota" required oninvalid="this.setCustomValidity('Kabupaten/Kota Anda Harus diInput!')" oninput="setCustomValidity('')">
                                    </div>
                                </div>



                                <div class="form-group col-md-6">
                                    <label><b>*Pendidikan Terakhir</b></label><br>
                                    <select class="form-control select2 " name="pendidikan" style="width: 100%;" data-select2-id="1" tabindex="-1" aria-hidden="true">
                                        <option selected="selected" data-select2-id="3" disabled>- Pilih Pendidikan-</option>
                                        <option data-select2-id="41" value="SD">SD</option>
                                        <option data-select2-id="42" value="SMP/MTS">SMP/MTS</option>
                                        <option data-select2-id="42" value="SMK/SMA/MA">SMK/SMA/MA</option>
                                        <option data-select2-id="42" value="D3/Sederajat">D3/Sederajat</option>
                                        <option data-select2-id="42" value="S1">S1</option>
                                        <option data-select2-id="42" value="Lainnya">Lainnya</option>
                                    </select>
                                </div>

                                <div class="form-group col-md-6">
                                    <label><b>*Agama</b></label><br>
                                    <select class="form-control select2" name="agama" style="width: 100%;" data-select2-id="1" tabindex="-1" aria-hidden="true">
                                        <option selected="selected" data-select2-id="3" disabled>-Agama-</option>
                                        <option data-select2-id="41" value="Islam">Islam</option>
                                        <option data-select2-id="42" value="Protestan">Protestan</option>
                                        <option data-select2-id="42" value="Katolik">Katolik</option>
                                        <option data-select2-id="42" value="Hindu">Hindu</option>
                                        <option data-select2-id="42" value="Buddha">Buddha</option>
                                    </select>
                                </div>

                                <div class="form-grop col-md-6">
                                    <label for=""><b>*Status</b></label>
                                    <select class="form-control" id="" name="status_perkawinan">
                                        <option selected="selected" disabled>-Status Perkawinan-</option>
                                        <option value="Belum Kawin">Belum Kawin</option>
                                        <option value="Kawin">Kawin</option>
                                        <option value="Cerai Hidup">Cerai Hidup</option>
                                        <option value="Cerai Mati">Cerai Mati</option>
                                    </select>
                                </div>

                                <div class="form-group col-md-6">
                                    <label for=""><b>*Pekerjaan</b></label>
                                    <input class="form-control" type="text" name="pekerjaan" placeholder="Pekerjaan">
                                </div>

                                <div class="form-group col-md-6" data-validate="Message is required">
                                    <label for=""><b>*Upload KTP</b></label><br>
                                    <input type="file" name="foto_ktp" class="form-control" required oninvalid="this.setCustomValidity('Foto KTP Harus Anda Upload!')" oninput="setCustomValidity('')">
                                </div>

                                <div class="form-group col-md-6" data-validate="Message is required">
                                    <label for=""><b>*Upload Kartu Keluarga</b></label><br>
                                    <input type="file" name="foto_kk" class="form-control" required oninvalid="this.setCustomValidity('Foto Kartu Keluarga Harus Anda Upload!')" oninput="setCustomValidity('')">
                                </div>


                                <div class="container-contact2-form-btn text-center">
                                    <div class="form-group"><br>
                                        <button class="btn btn-info" name="daftar">DAFTAR</button>
                                        <a class="btn btn-warning" href="user.php">KEMBALI</a>
                                    </div>
                                </div>
                            </form>

                            <?php

                            if (isset($_POST['daftar'])) {
                                $id_user = $_POST['id_user'];
                                $nama = $_POST['nama'];
                                $email = $_POST['email'];
                                $pass = $_POST['pass'];
                                $pass = md5($pass);
                                $jenis_kelamin = $_POST['jenis_kelamin'];
                                $tempat_lahir = $_POST['tempat_lahir'];
                                $tanggal_lahir = $_POST['tanggal_lahir'];
                                $alamat = $_POST['alamat'];
                                $rt = $_POST['rt'];
                                $rw = $_POST['rw'];
                                $kelurahan_domisili = $_POST['kelurahan_domisili'];
                                $kecamatan_domisili = $_POST['kecamatan_domisili'];
                                $kabupatenkota_domisili = $_POST['kabupatenkota_domisili'];
                                $telepon = $_POST['telepon'];
                                $pendidikan = $_POST['pendidikan'];
                                $agama = $_POST['agama'];
                                $status_perkawinan  = $_POST['status_perkawinan'];
                                $pekerjaan = $_POST['pekerjaan'];
                                $no_ktp = $_POST['id_user'];
                                $foto_ktp = $_FILES['foto_ktp']['name'];
                                $foto_kk = $_FILES['foto_kk']['name'];

                                $lokasi1 = $_FILES['foto_ktp']['tmp_name'];
                                $lokasi2 = $_FILES['foto_kk']['tmp_name'];


                                move_uploaded_file($lokasi1, "../berkas_user/$foto_ktp");
                                move_uploaded_file($lokasi2, "../berkas_user/$foto_kk");

                                $ambil = $koneksi->query("SELECT * FROM user WHERE id_user = '$id_user'");
                                $yangcocok = $ambil->num_rows;
                                if ($yangcocok == 1) {
                                    echo "<script>alert('Daftar GAGAL! NIK sudah digunakan!');</script>";
                                    echo "<script>location='add_user.php';</script>";
                                } else {
                                    $koneksi->query("INSERT INTO user
                  (id_user, nama, email, pass, jenis_kelamin, tempat_lahir, tanggal_lahir,
                   alamat, rt, rw, kelurahan_domisili, kecamatan_domisili, kabupatenkota_domisili, telepon,
                    pendidikan, agama, status_perkawinan, pekerjaan, no_ktp, foto_ktp, foto_kk)
                  VALUES ('$id_user','$nama', '$email', '$pass', '$jenis_kelamin', '$tempat_lahir', '$tanggal_lahir',
                   '$alamat', '$rt', '$rw', '$kelurahan_domisili', '$kecamatan_domisili', '$kabupatenkota_domisili', '$telepon',
                   '$pendidikan', '$agama', '$status_perkawinan', '$pekerjaan', '$no_ktp', '$foto_ktp', '$foto_kk')");

                                    echo "<script>alert('Pendaftaran sukses!');</script>";
                                    echo "<script>location='user.php';</script>";


                                    //KTP & KK

                                    //$koneksi->query("INSERT INTO user (foto_ktp, foto_kk)VALUES('$foto_ktp', '$foto_kk')");
                                }
                            }

                            ?>
                        </div>
                    </div>
                </div>
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        <!-- Control Sidebar -->
        <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <?php include '../template/js.php'; ?>
</body>

</html>