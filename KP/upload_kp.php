<!DOCTYPE html>
<html lang="en">

<?php session_start();
include '../koneksi.php';
$id_kp = $_GET['id_kp'];
$ambil = $koneksi->query("SELECT * FROM kp JOIN user ON kp.id_user=user.id_user WHERE id_kp= '$id_kp'");
$pecah = $ambil->fetch_assoc();

?>

<head>
    <title>KP/Upload Persyaratan </title>
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
                        SURAT KETERANGAN PINDAH
                        <p>Lengkapi Persyaratan</p>
                    </h2>
                    <div class="alert alert-info">
                        <span style="color: black;">PERHATIAN!!</span><br>
                        <span style="color: black;">Mohon gambar di foto dengan jelas agar dapat terlihat dengan jelas</span><br>
                    </div>
                    <br>

                    <!-- <input type="text" value="<?php echo $_SESSION['user']['id_user'] ?>" disabled>
                    <input type="text" value="<?php echo $pecah['id_kp'] ?>" disabled> -->

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group" data-validate="Message is required">
                                <label for=""><b>*Surat pengantar dari RT dan RW</b></label><br>
                                <input type="file" name="pengantar_rt_rw" value="nama" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group" data-validate="Message is required">
                                <label for=""><b>*Pas Foto hitam putih ukuran 3 x 4</b></label><br>
                                <input type="file" name="pas_foto_1" value="nama" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group" data-validate="Message is required">
                                <label for=""><b>*Pas Foto Berwarna ukuran 3 x 4</b></label><br>
                                <input type="file" name="pas_foto_2" value="nama" class="form-control">
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for=""><b>*Keperluan Pembuatan Surat</b></label>
                        <input type="text" name="keperluan_surat_kp" class="form-control" value="<?php echo $pecah['keperluan_surat_kp']; ?>">
                    </div>
                    <div class="form-group" data-validate="Message is required">
                        <label for=""><b>*Tanggal Pembuatan Surat</b></label>
                        <input type="Date" name="tanggal_kp" value="<?php echo $pecah['tanggal_kp']; ?>" class="form-control">
                    </div>
                    <div class="container-contact2-form-btn">
                        <div class="form-group"><br>
                            <button class="btn btn-info" name="ubah" onclick="return confirm('Simpan Permohonan ?')">Simpan</button>
                            <a class="btn btn-secondary" href="index_kp.php">Kembali</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <?php

    if (isset($_POST['ubah'])) {
        $pengantar_rt_rw = $_FILES['pengantar_rt_rw']['name'];
        $pas_foto_1 = $_FILES['pas_foto_1']['name'];
        $pas_foto_2 = $_FILES['pas_foto_2']['name'];

        $lokasi1 = $_FILES['pengantar_rt_rw']['tmp_name'];
        $lokasi2 = $_FILES['pas_foto_1']['tmp_name'];
        $lokasi3 = $_FILES['pas_foto_2']['tmp_name'];

        move_uploaded_file($lokasi1, "../berkas_kp/$pengantar_rt_rw");
        move_uploaded_file($lokasi2, "../berkas_kp/$pas_foto_1");
        move_uploaded_file($lokasi3, "../berkas_kp/$pas_foto_2");

        $koneksi->query("UPDATE kp SET
        keperluan_surat_kp='$_POST[keperluan_surat_kp]',
        tanggal_kp='$_POST[tanggal_kp]',
        pengantar_rt_rw = '$pengantar_rt_rw',
        pas_foto_1 = '$pas_foto_1',
        pas_foto_2 = '$pas_foto_2',
        status_kp='Menunggu Konfirmasi'
		WHERE id_kp='$_GET[id_kp]'");

        echo "<meta http-equiv='refresh' content='1'>";
        echo "<script>alert('Data Tersimpan');</script>";
        echo "<script> location = 'index_kp.php'; </script>";
    }

    ?>

    <?php include '../form/js.php' ?>

</body>

</html>