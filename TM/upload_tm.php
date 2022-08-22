<!DOCTYPE html>
<html lang="en">

<?php session_start();
include '../koneksi.php';
$id_tm = $_GET['id_tm'];
$ambil = $koneksi->query("SELECT * FROM tm JOIN user ON tm.id_user=user.id_user WHERE id_tm= '$id_tm'");
$pecah = $ambil->fetch_assoc();

?>

<head>
    <title>TM/Upload Persyaratan </title>
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
                        SURAT KETERANGAN TIDAK MAMPU
                        <p>Lengkapi Persyaratan</p>
                    </h2>
                    <div class="alert alert-info">
                        <span style="color: black;">PERHATIAN!!</span><br>
                        <span style="color: black;">Mohon gambar di foto dengan jelas agar dapat terlihat dengan jelas</span><br>
                    </div>
                    <p></p><br>
                    <p></p>

                    <!-- <input type="text" value="<?php echo $_SESSION['user']['id_user'] ?>" disabled>
                    <input type="text" value="<?php echo $pecah['id_tm'] ?>" disabled> -->

                    <div class="form-group" data-validate="Message is required">
                        <label for=""><b>*Surat Pengantar RT/RW</b></label><br>
                        <input type="file" name="foto_sp_rtrw" class="form-control" value="nama" required>
                    </div>

                    <div class="form-group" data-validate="Message is required">
                        <label for=""><b>*KTP Saksi 1</b></label><br>
                        <input type="file" name="ktp_saksi_1" class="form-control" value="nama" required>
                    </div>

                    <div class="form-group" data-validate="Message is required">
                        <label for=""><b>*KTP Saksi 2</b></label><br>
                        <input type="file" name="ktp_saksi_2" value="nama" class="form-control">
                    </div>

                    <div class="form-group" data-validate="Message is required">
                        <label for=""><b>*Surat pernyataan tidak mampu yang diketahui RT/RW setempat, serta 2 orang saksi di atas materai 6000</b></label><br>
                        <input type="file" name="sp_6000" value="nama" class="form-control">
                    </div>

                    <div class="form-group" data-validate="Message is required">
                        <label for=""><b>*Tanda Lunas PBB</b></label><br>
                        <input type="file" name="lunas_pbb" value="nama" class="form-control">
                    </div>

                    <div class="form-group" data-validate="Message is required">
                        <label for=""><b>*Foto Rumah Depan</b></label><br>
                        <input type="file" name="rumah_depan" value="nama" class="form-control">
                    </div>

                    <div class="form-group" data-validate="Message is required">
                        <label for=""><b>*Foto Rumah Samping</b></label><br>
                        <input type="file" name="rumah_samping" value="nama" class="form-control">
                    </div>



                    <div class="form-group">
                        <label for=""><b>*Keperluan Pembuatan Surat</b></label>
                        <input type="text" name="keperluan_surat_tm" class="form-control" value="<?php echo $pecah['keperluan_surat_tm']; ?>">
                    </div>
                    <div class="form-group" data-validate="Message is required">
                        <label for=""><b>*Tanggal Pembuatan Surat</b></label>
                        <input type="Date" name="tanggal_tm" value="<?php echo $pecah['tanggal_tm']; ?>" class="form-control">
                    </div>
                    <div class="container-contact2-form-btn">
                        <div class="form-group"><br>
                            <button class="btn btn-info" name="ubah" onclick="return confirm('Simpan Permohonan ?')">Simpan</button>
                            <a class="btn btn-secondary" href="index_tm.php">Kembali</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <?php

    if (isset($_POST['ubah'])) {
        $sp_tm = $_FILES['foto_sp_rtrw']['name'];
        $ktp1 = $_FILES['ktp_saksi_1']['name'];
        $ktp2 = $_FILES['ktp_saksi_2']['name'];
        $sp_6000 = $_FILES['sp_6000']['name'];
        $lunas_pbb = $_FILES['lunas_pbb']['name'];
        $rumah_depan = $_FILES['rumah_depan']['name'];
        $rumah_samping = $_FILES['rumah_samping']['name'];

        $lokasi2 = $_FILES['foto_sp_rtrw']['tmp_name'];
        $lokasi3 = $_FILES['ktp_saksi_1']['tmp_name'];
        $lokasi4 = $_FILES['ktp_saksi_2']['tmp_name'];
        $lokasi5 = $_FILES['sp_6000']['tmp_name'];
        $lokasi6 = $_FILES['lunas_pbb']['tmp_name'];
        $lokasi7 = $_FILES['rumah_depan']['tmp_name'];
        $lokasi8 = $_FILES['rumah_samping']['tmp_name'];

        move_uploaded_file($lokasi2, "../berkas_tm/$sp_tm");
        move_uploaded_file($lokasi3, "../berkas_tm/$ktp1");
        move_uploaded_file($lokasi4, "../berkas_tm/$ktp2");
        move_uploaded_file($lokasi5, "../berkas_tm/$sp_6000");
        move_uploaded_file($lokasi6, "../berkas_tm/$lunas_pbb");
        move_uploaded_file($lokasi7, "../berkas_tm/$rumah_depan");
        move_uploaded_file($lokasi8, "../berkas_tm/$rumah_samping");

        $koneksi->query("UPDATE tm SET
        keperluan_surat_tm='$_POST[keperluan_surat_tm]',
        tanggal_tm='$_POST[tanggal_tm]',
        pengantar_rt_rw='$sp_tm',
        ktp_saksi_1='$ktp1',
        ktp_saksi_2='$ktp2',
        surat_pernyataan_rt_rw='$sp_6000',
        tanda_lunas_pbb = '$lunas_pbb',
        foto_rumah_depan = '$rumah_depan',
        foto_rumah_samping = '$rumah_samping',
        status_tm='Menunggu Konfirmasi'
		WHERE id_tm='$_GET[id_tm]'");

        echo "<meta http-equiv='refresh' content='1'>";
        echo "<script>alert('Data Tersimpan');</script>";
        echo "<script> location = 'index_tm.php'; </script>";
    }

    ?>

    <?php include '../form/js.php' ?>

</body>

</html>