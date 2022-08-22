<!DOCTYPE html>
<?php
session_start();
include 'koneksi.php' ?>
<html lang="en">

<head>
    <title>Login User</title>
    <?php include 'form/header.php' ?>
</head>

<body>
    <div style="background-image: url('./assets/form/images/bg3.jpg');">
        <div class="container-contact2">
            <div class="wrap-contact2">
                <form method="POST">
                    <div class="row">
                        <div class="image-holder col-md-5">
                            <br>
                            <img src="./assets/img/kapuas1.jpg" alt="" width="240" height="210">
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">NIK</label>
                                <input type="text" name="id_user" class="form-control" placeholder="NIK" required oninvalid="this.setCustomValidity('NIK tidak boleh kosong')" oninput="setCustomValidity('')">
                            </div>
                            <div class=" form-group">
                                <label for="">Password</label>
                                <input type="password" name="pass" class="form-control" placeholder="password" required oninvalid="this.setCustomValidity('Password tidak boleh kosong')" oninput="setCustomValidity('')">
                            </div>
                            <span>Masukkan Kode</span>
                            <div class="row">
                                <div class="form-grop col-md-8">
                                    <input type="text" class="form-control" name="vercode" size="20" required oninvalid="this.setCustomValidity('Kode tidak boleh kosong')" oninput="setCustomValidity('')" />
                                </div><br>
                                <p>
                                <div class="form-grop col-md-4">
                                    <img src="captcha.php" style="margin-top: 1%" id="capt">
                                </div>
                            </div><br>
                            <div class="row">
                                <div class="form-grop col-md-3">
                                    <button type="submit" class="btn btn-info" name="login">LOGIN</button>
                                </div>
                                <div class="form-grop col-md-5">
                                    <a href="daftar.php" class="btn btn-warning btn-block">DAFTAR</a><br><br>
                                </div>
                                <div class="form-grop col-md-3">
                                    <a href="index.php" class="btn btn-secondary">KEMBALI</a><br><br>
                                </div>
                            </div>
                            <!-- <div class="row"> -->
                            <div class="form-grop col-md-12">
                                <a href="lupa_pass.php" class="btn btn-primary btn-block">Lupa Password</a><br><br>
                            </div>
                            <!-- </div> -->
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>



    <?php include 'form/js.php' ?>

    <?php
    if (isset($_POST['login'])) {
        $nik = $_POST['id_user'];
        $pass = $_POST['pass'];
        $pass = md5($pass);
        $ambil = $koneksi->query("SELECT * FROM user WHERE id_user='$nik' AND pass='$pass'");
        $akunyangcocok = $ambil->num_rows;

        if ($_POST["vercode"] != $_SESSION["vercode"] or $_SESSION["vercode"] == '') {
            echo "<script>alert('Kode yang anda Masukan Salah!');</script>";
        } else {
            if ($akunyangcocok == 1) {
                $akun = $ambil->fetch_assoc();
                $_SESSION['user'] = $akun;
                echo "<script>alert('Anda Berhasil Login!');</script>";
                echo "<script>location='home.php';</script>";
            }
            echo "<script>alert('Anda Gagal Login!');</script>";
            echo "<script>location='login_user.php';</script>";
        }
    }

    ?>

</body>

</html>