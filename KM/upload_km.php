<!DOCTYPE html>
<html lang="en">

<?php session_start();
include '../koneksi.php';
$id_km = $_GET['id_km'];
$ambil = $koneksi->query("SELECT * FROM km JOIN user ON km.id_user=user.id_user WHERE id_km= '$id_km'");
$pecah = $ambil->fetch_assoc();

?>

<head>
    <title>KM/Upload Persyaratan </title>
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
                        SURAT KETERANGAN MENIKAH
                        <p>Lengkapi Persyaratan</p>
                    </h2>
                    <div class="alert alert-info">
                        <span style="color: black;">PERHATIAN!!</span><br>
                        <span style="color: black;">Mohon gambar di foto dengan jelas agar dapat terlihat dengan jelas</span><br>
                    </div>
                    <br>

                    <!-- <input type="text" value="<?php echo $_SESSION['user']['id_user'] ?>" disabled>
                    <input type="text" value="<?php echo $pecah['id_km'] ?>" disabled> -->
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group" data-validate="Message is required">
                                <label for=""><b>*KTP Pemohon 1</b></label><br>
                                <input type="file" name="ktp_pemohon_1" class="form-control" value="nama" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group" data-validate="Message is required">
                                <label for=""><b>*KTP Pemohon 2</b></label><br>
                                <input type="file" name="ktp_pemohon_2" class="form-control" value="nama" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for=""><b>*Akta cerai hidup/mati (Bagi yang pernah menikah)</b></label><br>
                                <input type="file" name="akta_cerai" class="form-control" value="nama">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group" data-validate="Message is required">
                                <label for=""><b>*KTP Orang Tua / Wali</b></label><br>
                                <input type="file" name="ktp_ortu" class="form-control" value="nama" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group" data-validate="Message is required">
                                <label for=""><b>*KTP Saksi 1</b></label><br>
                                <input type="file" name="ktp_saksi_1" class="form-control" value="nama" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group" data-validate="Message is required">
                                <label for=""><b>*KTP Saksi 2</b></label><br>
                                <input type="file" name="ktp_saksi_2" class="form-control" value="nama" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group" data-validate="Message is required">
                                <label for=""><b>*Surat jaminan nikah dari orangtua/wali yang diketahui RT/RW</b></label><br>
                                <input type="file" name="surat_jaminan_nikah" value="nama" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group" data-validate="Message is required">
                                <label for=""><b>*Surat izin dari orangtua/wali yang diketahui RT/RW</b></label><br>
                                <input type="file" name="surat_izin_ortu" class="form-control" value="nama" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group" data-validate="Message is required">
                                <label for=""><b>*Photo Pria Berwarna 3 x 4 </b></label><br>
                                <input type="file" name="pas_foto_1" value="nama" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group" data-validate="Message is required">
                                <label for=""><b>*Photo Wanita Berwarna 3 x 4 </b></label><br>
                                <input type="file" name="pas_foto_2" class="form-control" value="nama" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group" data-validate="Message is required">
                                <label for=""><b>*Surat pernyataan belum pernah menikah yang ditandatangani diatas materai 6.000 diketahui RT/RW</b></label><br>
                                <input type="file" name="surat_pernyataan_6000" value="nama" class="form-control">
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for=""><b>*Keperluan Pembuatan Surat</b></label>
                        <input type="text" name="keperluan_surat_km" class="form-control" value="<?php echo $pecah['keperluan_surat_km']; ?>">
                    </div>
                    <div class="form-group" data-validate="Message is required">
                        <label for=""><b>*Tanggal Pembuatan Surat</b></label>
                        <input type="Date" name="tanggal_km" value="<?php echo $pecah['tanggal_km']; ?>" class="form-control">
                    </div>
                    <div class="container-contact2-form-btn">
                        <div class="form-group"><br>
                            <button class="btn btn-info" name="ubah" onclick="return confirm('Simpan Permohonan ?')">Simpan</button>
                            <a class="btn btn-secondary" href="index_km.php">Kembali</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <?php

    if (isset($_POST['ubah'])) {
        $ktp_pemohon_1 = $_FILES['ktp_pemohon_1']['name'];
        $ktp_pemohon_2 = $_FILES['ktp_pemohon_2']['name'];
        $ktp_ortu = $_FILES['ktp_ortu']['name'];
        $ktp_saksi_1 = $_FILES['ktp_saksi_1']['name'];
        $ktp_saksi_2 = $_FILES['ktp_saksi_2']['name'];
        $surat_pernyataan_6000 = $_FILES['surat_pernyataan_6000']['name'];
        $akta_cerai = $_FILES['akta_cerai']['name'];
        $surat_jaminan_nikah = $_FILES['surat_jaminan_nikah']['name'];
        $surat_izin_ortu = $_FILES['surat_izin_ortu']['name'];
        $pas_foto_1 = $_FILES['pas_foto_1']['name'];
        $pas_foto_2 = $_FILES['pas_foto_2']['name'];

        $lokasi1 = $_FILES['ktp_pemohon_1']['tmp_name'];
        $lokasi2 = $_FILES['ktp_pemohon_2']['tmp_name'];
        $lokasi3 = $_FILES['ktp_ortu']['tmp_name'];
        $lokasi4 = $_FILES['ktp_saksi_1']['tmp_name'];
        $lokasi5 = $_FILES['ktp_saksi_2']['tmp_name'];
        $lokasi6 = $_FILES['surat_pernyataan_6000']['tmp_name'];
        $lokasi7 = $_FILES['akta_cerai']['tmp_name'];
        $lokasi8 = $_FILES['surat_jaminan_nikah']['tmp_name'];
        $lokasi9 = $_FILES['surat_izin_ortu']['tmp_name'];
        $lokasi10 = $_FILES['pas_foto_1']['tmp_name'];
        $lokasi11 = $_FILES['pas_foto_2']['tmp_name'];

        move_uploaded_file($lokasi1, "../berkas_km/$ktp_pemohon_1");
        move_uploaded_file($lokasi2, "../berkas_km/$ktp_pemohon_2");
        move_uploaded_file($lokasi3, "../berkas_km/$ktp_ortu");
        move_uploaded_file($lokasi4, "../berkas_km/$ktp_saksi_1");
        move_uploaded_file($lokasi5, "../berkas_km/$ktp_saksi_2");
        move_uploaded_file($lokasi6, "../berkas_km/$surat_pernyataan_6000");
        move_uploaded_file($lokasi7, "../berkas_km/$akta_cerai");
        move_uploaded_file($lokasi8, "../berkas_km/$surat_jaminan_nikah");
        move_uploaded_file($lokasi9, "../berkas_km/$surat_izin_ortu");
        move_uploaded_file($lokasi10, "../berkas_km/$pas_foto_1");
        move_uploaded_file($lokasi11, "../berkas_km/$pas_foto_2");

        $koneksi->query("UPDATE km SET
        keperluan_surat_km='$_POST[keperluan_surat_km]',
        tanggal_km='$_POST[tanggal_km]',
        ktp_pemohon_1 = '$ktp_pemohon_1',
        ktp_pemohon_2 = '$ktp_pemohon_2',
        ktp_ortu = '$ktp_ortu',
        ktp_saksi_1='$ktp_saksi_1',
        ktp_saksi_2='$ktp_saksi_2',
        surat_pernyataan_6000='$surat_pernyataan_6000',
        akta_cerai = '$akta_cerai',
        surat_jaminan_nikah = '$surat_jaminan_nikah',
        surat_izin_ortu = '$surat_izin_ortu',
        pas_foto_1 = '$pas_foto_1',
        pas_foto_2 = '$pas_foto_2',
        status_km='Menunggu Konfirmasi'
		WHERE id_km='$_GET[id_km]'");

        echo "<meta http-equiv='refresh' content='1'>";
        echo "<script>alert('Data Tersimpan');</script>";
        echo "<script> location = 'index_km.php'; </script>";
    }

    ?>

    <?php include '../form/js.php' ?>

</body>

</html>