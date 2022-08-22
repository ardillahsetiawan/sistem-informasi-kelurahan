<!DOCTYPE html>
<html lang="en">

<?php session_start();
include '../koneksi.php';
$id_kd = $_GET['id_kd'];
$ambil = $koneksi->query("SELECT * FROM kd JOIN user ON kd.id_user=user.id_user WHERE id_kd= '$id_kd'");
$pecah = $ambil->fetch_assoc();

?>

<head>
    <title>KD/Upload Persyaratan </title>
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
    <div style="background-image: url('../assets/form/images/bg3.jpg');">
        <div class="container-contact2">
            <div class="wrap-contact2">
                <form method="POST" enctype="multipart/form-data">
                    <h2 class="text-center">
                        SURAT KETERANGAN DOMISILI
                        <p>Lengkapi Persyaratan</p>
                    </h2>
                    <div class="alert alert-info">
                        <span style="color: black;">PERHATIAN!!</span><br>
                        <span style="color: black;">Mohon gambar di foto dengan jelas agar dapat terlihat dengan jelas</span><br>
                    </div>
                    <br>

                    <!-- <input type="text" value="<?php echo $_SESSION['user']['id_user'] ?>" disabled>
                    <input type="text" value="<?php echo $pecah['id_kd'] ?>" disabled> -->

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group" data-validate="Message is required">
                                <label for=""><b>*Surat pengantar dari RT dan RW</b></label><br>
                                <input type="file" name="pengantar_rt_rw" value="nama" class="form-control">
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for=""><b>*Keperluan Pembuatan Surat</b></label>
                        <input type="text" name="keperluan_surat_kd" class="form-control" value="<?php echo $pecah['keperluan_surat_kd']; ?>">
                    </div>
                    <div class="form-group" data-validate="Message is required">
                        <label for=""><b>*Tanggal Pembuatan Surat</b></label>
                        <input type="Date" name="tanggal_kd" value="<?php echo $pecah['tanggal_kd']; ?>" class="form-control">
                    </div>
                    <div class="container-contact2-form-btn">
                        <div class="form-group"><br>
                            <button class="btn btn-info" name="ubah" onclick="return confirm('Simpan Permohonan ?')">Simpan</button>
                            <a class="btn btn-secondary" href="index_kd.php">Kembali</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <?php

    if (isset($_POST['ubah'])) {
        $pengantar_rt_rw = $_FILES['pengantar_rt_rw']['name'];

        $lokasi1 = $_FILES['pengantar_rt_rw']['tmp_name'];

        move_uploaded_file($lokasi1, "../berkas_kd/$pengantar_rt_rw");

        $koneksi->query("UPDATE kd SET
        keperluan_surat_kd='$_POST[keperluan_surat_kd]',
        tanggal_kd='$_POST[tanggal_kd]',
        pengantar_rt_rw = '$pengantar_rt_rw',
        status_kd='Menunggu Konfirmasi'
		WHERE id_kd='$_GET[id_kd]'");

        echo "<meta http-equiv='refresh' content='1'>";
        echo "<script>alert('Data Tersimpan');</script>";
        echo "<script> location = 'index_kd.php'; </script>";
    }

    ?>

    <?php include '../form/js.php' ?>

</body>

</html>