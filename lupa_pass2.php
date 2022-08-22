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
                        <p>Silahkan membuat password baru </p>
                    </h2>

                    <div class="form-group">
                        <label for=""><b>*Password Baru</b></label>
                        <input type="password" name="pass1" class="form-control" placeholder="Masukan Password Baru" required oninvalid="this.setCustomValidity('Password Baru Anda Harus diInput!')" oninput="setCustomValidity('')">
                    </div>
                    <div class="form-group">
                        <label for=""><b>*Password Confirm Baru</b></label>
                        <input type="password" name="pass2" class="form-control" placeholder="Masukan Password Baru Lagi" required oninvalid="this.setCustomValidity('Password Baru Konfirmasi Anda Harus diInput!')" oninput="setCustomValidity('')">
                    </div>
                    <input type="hidden" name="id" value="<?php echo $_SESSION['lupa']['no_ktp'] ?>">
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
    $pass1 = $_POST['pass1'];
    $pass2 = $_POST['pass2'];
    $pass = md5($pass2);

    if ($pass1 == $pass2) {
        // $pass = md5($pass2);
        $koneksi->query("UPDATE user SET pass='$pass' WHERE no_ktp = '$_POST[id]'");
        session_start();
        session_destroy();
        echo "<script>alert('Password sudah diubah, Silahkan Login!');</script>";
        echo "<script>location='login_user.php';</script>";
    } else {
        echo "<script>alert('Password Baru dan Password Konfirm Baru Tidak cocok!');</script>";
    }
}

?>