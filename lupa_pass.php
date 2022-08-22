<!DOCTYPE html>
<html lang="en">

<head>
    <title>Daftar</title>
    <?php
    session_start();
    include 'koneksi.php';
    include 'form/header.php' ?>
</head>

<body>



    <div class="bg-contact2" style="background-image: url('assets/form/images/bg3.jpg');">
        <div class="container-contact2">
            <div class="wrap-contact2">
                <form action="" method="POST" enctype="multipart/form-data">

                    <h2 class="text-center">
                        Lupa Password
                        <p>Silahkan lengkapi untuk membuat password baru</p>
                    </h2>

                    <div class="form-group">
                        <label for=""><b>*NIK</b></label>
                        <input type="text" name="nik" class="form-control" placeholder="Masukan NIK" required oninvalid="this.setCustomValidity('NIK Anda Harus diInput!')" oninput="setCustomValidity('')">
                    </div>
                    <div class="form-group">
                        <label for=""><b>*Tanggal Lahir</b></label>
                        <input type="date" name="tanggal_lahir" class="form-control" placeholder="Masukan NIK" required oninvalid="this.setCustomValidity('NIK Anda Harus diInput!')" oninput="setCustomValidity('')">
                    </div>

                    <div class="container-contact2-form-btn">
                        <div class="form-group"><br>
                            <button class="btn btn-info" name="submit">SUBMIT</button>
                            <a class="btn btn-warning" href="index.php">KEMBALI</a>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>



    <?php include 'form/js.php' ?>

</body>

</html>

<?php
if (isset($_POST['submit'])) {
    $nik = $_POST['nik'];
    $tanggal_lahir = $_POST['tanggal_lahir'];
    $ambil = $koneksi->query("SELECT * FROM user WHERE no_ktp='$nik' AND tanggal_lahir='$tanggal_lahir'");
    $akunyangcocok = $ambil->num_rows;

    if ($akunyangcocok == 1) {
        $akun = $ambil->fetch_assoc();
        $_SESSION['lupa'] = $akun;
        echo "<script>alert('Data yang anda masukkan benar, silahkan masukkan password baru!');</script>";
        echo "<script>location='lupa_pass2.php';</script>";
    } else {
        echo "<script>alert('Nik atau Tanggal Lahir yang anda Masukan Salah!');</script>";
    }
}

?>