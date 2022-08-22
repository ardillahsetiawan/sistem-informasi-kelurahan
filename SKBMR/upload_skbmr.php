<!DOCTYPE html>
<html lang="en">

<?php session_start();
include '../koneksi.php';
$id_bmr = $_GET['id_bmr'];
$ambil = $koneksi->query("SELECT * FROM bmr JOIN user ON bmr.id_user=user.id_user WHERE id_bmr = '$id_bmr'");
$pecah = $ambil->fetch_assoc();
?>

<head>
    <title>BMR/Upload Persyaratan </title>
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
                <form method="POST" enctype="multipart/form-data">
                    <h2 class="text-center">
                        SKBMR
                        <p>lengkapi Persyaratan</p>
                    </h2>
                    <span align="center"><b><?php echo $_SESSION['user']['nama']; ?></b>,
                        <span> Silahkan upload persyaratan yang sudah dilengkapi atau </span><a href="skbmr.php?id_bmr=<?php echo $pecah['id_bmr']; ?>">Klik jika ingin mengunduh ulang berkas</a></span><br>
                    <p></p>
                    <div class="alert alert-info">
                        <span style="color: black;">PERHATIAN!!</span><br>
                        <span style="color: black;">Mohon gambar di foto dengan jelas agar dapat terlihat dengan jelas</span><br>
                    </div>

                    <p></p><br>

                    <div class="form-group" data-validate="Message is required">
                        <label for=""><b>*Upload Surat Pernyataan</b></label><br>
                        <input type="file" name="surat_pernyataan_bmr" value="" class="form-control" required>
                    </div>
                    <div class="form-group" data-validate="Message is required">
                        <label for=""><b>*Upload Surat Pengantar RT/RW</b></label><br>
                        <input type="file" name="pengantar_rt_rw" value="" class="form-control" required>
                    </div>
                    <div class="form-group" data-validate="Message is required">
                        <label for=""><b>*Upload Foto KTP</b></label><br>
                        <input type="file" name="ktp" value="" class="form-control" required>
                    </div>
                    <div class="form-group" data-validate="Message is required">
                        <label for=""><b>*Upload Foto Kartu Keluarga</b></label><br>
                        <input type="file" name="kk" value="" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for=""><b>*Keperluan Pembuatan Surat</b></label>
                        <input type="text" name="keperluan_surat_bmr" class="form-control" value="<?php echo $pecah['keperluan_surat_bmr']; ?>">
                    </div>
                    <div class="form-group" data-validate="Message is required">
                        <label for=""><b>*Tanggal Pembuatan Surat</b></label>
                        <input type="Date" name="tanggal_bmr" value="<?php echo $pecah['tanggal_bmr']; ?>" class="form-control">
                    </div>
                    <div class="container-contact2-form-btn">
                        <div class="form-group"><br>
                            <button class="btn btn-info" name="ubah" onclick="return confirm('simpan data ?')">Simpan</button>
                            <a class="btn btn-secondary" href="index_skbmr.php?id_user=<?php echo $_SESSION['user']['id_user'] ?>">Kembali</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>




    <?php

    if (isset($_POST['ubah'])) {
        $namasurat = $_FILES['surat_pernyataan_bmr']['name'];
        $pengantar = $_FILES['pengantar_rt_rw']['name'];
        $ktp = $_FILES['ktp']['name'];
        $kk = $_FILES['kk']['name'];


        $lokasi1 = $_FILES['surat_pernyataan_bmr']['tmp_name'];
        $lokasi2 = $_FILES['pengantar_rt_rw']['tmp_name'];
        $lokasi3 = $_FILES['ktp']['tmp_name'];
        $lokasi4 = $_FILES['kk']['tmp_name'];

        move_uploaded_file($lokasi1, "../berkas_bmr/$namasurat");
        move_uploaded_file($lokasi2, "../berkas_bmr/$pengantar");
        move_uploaded_file($lokasi3, "../berkas_bmr/$ktp");
        move_uploaded_file($lokasi4, "../berkas_bmr/$kk");

        $koneksi->query("UPDATE bmr SET
        keperluan_surat_bmr='$_POST[keperluan_surat_bmr]',
        tanggal_bmr='$_POST[tanggal_bmr]',
        surat_pernyataan_bmr='$namasurat',
        pengantar_rt_rw='$pengantar',
        ktp='$ktp',
        kk='$kk',
        status_bmr='Menunggu Konfirmasi'
    	WHERE id_bmr='$_GET[id_bmr]'");

        echo "<meta http-equiv='refresh' content='1'>";
        //echo "<script>alert('Data Tersimpan');</script>";
        echo "<script> location = 'index_skbmr.php'; </script>";
    }

    ?>

    <?php include '../form/js.php' ?>

</body>

</html>