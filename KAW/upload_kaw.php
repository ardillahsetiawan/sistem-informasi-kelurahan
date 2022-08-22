<!DOCTYPE html>
<html lang="en">

<?php session_start();
include '../koneksi.php';
$id_kaw = $_GET['id_kaw'];
$ambil = $koneksi->query("SELECT * FROM kaw JOIN user ON kaw.id_user=user.id_user WHERE id_kaw= '$id_kaw'");
$pecah = $ambil->fetch_assoc();

?>

<head>
    <title>KAW/Upload Persyaratan </title>
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
                        SURAT KETERANGAN AHLI WARIS
                        <p>Lengkapi Persyaratan</p>
                    </h2>
                    <div class="alert alert-info">
                        <span style="color: black;">PERHATIAN!!</span><br>
                        <span style="color: black;">Mohon gambar di foto dengan jelas agar dapat terlihat dengan jelas</span><br>
                    </div>
                    <br>

                    <!-- <input type="text" value="<?php echo $_SESSION['user']['id_user'] ?>" disabled>
                    <input type="text" value="<?php echo $pecah['id_kaw'] ?>" disabled> -->

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
                                <label for=""><b>*Ahli surat kematian/Akta surat kematian yang telah di legalisir</b></label><br>
                                <input type="file" name="akta_kematian" value="nama" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group" data-validate="Message is required">
                                <label for=""><b>*Surat Akta Perkawinan/Akta Nikah yang di legalisir</b></label><br>
                                <input type="file" name="fc_akta_nikah" value="nama" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group" data-validate="Message is required">
                                <label for=""><b>*Akta Perceraian (Bila sudah bercerai)</b></label><br>
                                <input type="file" name="fc_akta_cerai" value="nama" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group" data-validate="Message is required">
                                <label for=""><b>*Akta kelahiran dari ahli waris dari 2 (orang saksi)</b></label><br>
                                <input type="file" name="fc_akta_kelahiran_ahli_waris" value="nama" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group" data-validate="Message is required">
                                <label for=""><b>*KTP (Kartu Tanda Penduduk) para ahli waris</b></label><br>
                                <input type="file" name="ktp_ahli_waris" value="nama" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group" data-validate="Message is required">
                                <label for=""><b>*Surat Pernyataan ahli waris dan kuasa ahli waris yang telah ditandatangani oleh para ahli waris serta diketahui oleh RT/RW dari 2 (dua) orang saksi dengan materai Rp 6.000</b></label><br>
                                <input type="file" name="surat_pernyataan_6000" value="nama" class="form-control">
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for=""><b>*Keperluan Pembuatan Surat</b></label>
                        <input type="text" name="keperluan_surat_kaw" class="form-control" value="<?php echo $pecah['keperluan_surat_kaw']; ?>">
                    </div>
                    <div class="form-group" data-validate="Message is required">
                        <label for=""><b>*Tanggal Pembuatan Surat</b></label>
                        <input type="Date" name="tanggal_kaw" value="<?php echo $pecah['tanggal_kaw']; ?>" class="form-control">
                    </div>
                    <div class="container-contact2-form-btn">
                        <div class="form-group"><br>
                            <button class="btn btn-info" name="ubah" onclick="return confirm('Simpan Permohonan ?')">Simpan</button>
                            <a class="btn btn-secondary" href="index_kaw.php">Kembali</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <?php

    if (isset($_POST['ubah'])) {
        $pengantar_rt_rw = $_FILES['pengantar_rt_rw']['name'];
        $akta_kematian = $_FILES['akta_kematian']['name'];
        $fc_akta_nikah = $_FILES['fc_akta_nikah']['name'];
        $fc_akta_cerai = $_FILES['fc_akta_cerai']['name'];
        $fc_akta_kelahiran_ahli_waris = $_FILES['fc_akta_kelahiran_ahli_waris']['name'];
        $ktp_ahli_waris = $_FILES['ktp_ahli_waris']['name'];
        $surat_pernyataan_6000 = $_FILES['surat_pernyataan_6000']['name'];

        $lokasi1 = $_FILES['pengantar_rt_rw']['tmp_name'];
        $lokasi2 = $_FILES['akta_kematian']['tmp_name'];
        $lokasi3 = $_FILES['fc_akta_nikah']['tmp_name'];
        $lokasi4 = $_FILES['fc_akta_cerai']['tmp_name'];
        $lokasi5 = $_FILES['fc_akta_kelahiran_ahli_waris']['tmp_name'];
        $lokasi6 = $_FILES['ktp_ahli_waris']['tmp_name'];
        $lokasi7 = $_FILES['surat_pernyataan_6000']['tmp_name'];

        move_uploaded_file($lokasi1, "../berkas_kaw/$pengantar_rt_rw");
        move_uploaded_file($lokasi2, "../berkas_kaw/$akta_kematian");
        move_uploaded_file($lokasi3, "../berkas_kaw/$fc_akta_nikah");
        move_uploaded_file($lokasi4, "../berkas_kaw/$fc_akta_cerai");
        move_uploaded_file($lokasi5, "../berkas_kaw/$fc_akta_kelahiran_ahli_waris");
        move_uploaded_file($lokasi6, "../berkas_kaw/$ktp_ahli_waris");
        move_uploaded_file($lokasi7, "../berkas_kaw/$surat_pernyataan_6000");

        $koneksi->query("UPDATE kaw SET
        keperluan_surat_kaw='$_POST[keperluan_surat_kaw]',
        tanggal_kaw='$_POST[tanggal_kaw]',
        pengantar_rt_rw = '$pengantar_rt_rw',
        akta_kematian = '$akta_kematian',
        fc_akta_nikah = '$fc_akta_nikah',
        fc_akta_cerai = '$fc_akta_cerai',
        fc_akta_kelahiran_ahli_waris = '$fc_akta_kelahiran_ahli_waris',
        ktp_ahli_waris = '$ktp_ahli_waris',
        surat_pernyataan_6000 = '$surat_pernyataan_6000',
        status_kaw='Menunggu Konfirmasi'
		WHERE id_kaw='$_GET[id_kaw]'");

        echo "<meta http-equiv='refresh' content='1'>";
        echo "<script>alert('Data Tersimpan');</script>";
        echo "<script> location = 'index_kaw.php'; </script>";
    }

    ?>

    <?php include '../form/js.php' ?>

</body>

</html>