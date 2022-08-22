<!DOCTYPE html>
<html lang="en">

<?php session_start();
include '../koneksi.php'
?>

<?php
// $id_bmr = $_GET['id_bmr'];
$id_user = $_SESSION['user']['id_user'];
$ambil = $koneksi->query("SELECT * FROM bmr WHERE id_user = $id_user ORDER BY id_bmr DESC");
$pecah = $ambil->fetch_assoc();

?>

<head>
    <title>Check-List IMB</title>
    <?php include '../form/header.php' ?>
</head>

<body>

    <?php include 'navbar.php' ?>
    <?php include '../bootstrap/css.php' ?>
    <?php include '../bootstrap/js.php' ?>

    <div class="row">
        <div style="background: black">
            <br>
            <br>
            <br>
            <br>
        </div>
    </div>





    <div class="bg-contact2" style="background-image: url('../assets/form/images/bg3.jpg');">

        <div class="container-contact2">
            <div class="wrap-contact2">
                <table class="table table-bordered">
                    <span align="center"><b><?php echo $_SESSION['user']['nama']; ?></b>, Permohonan Anda berhasil dibuat, Silahkan unduh dan <a href="upload_skbmr.php?id_bmr=<?php echo $pecah['id_bmr']; ?>">lengkapi persyaratan</a></span><br>
                    <p></p>
                    <thead>
                        <th>Nama Berkas</th>
                        <th>Aksi</th>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Surat Permohonan</td>
                            <td align="center">
                                <a href="skbmr.php?id_bmr=<?php echo $pecah['id_bmr']; ?>" class="btn btn-warning btn-xs" target="_blank">Unduh</a>
                            </td>
                    </tbody>
                </table>
                <a href="index_skbmr.php " class="btn btn-secondary btn-xs">Kembali</a>
            </div>
        </div>
    </div>


    <?php include '../form/js.php' ?>

</body>

</html>
