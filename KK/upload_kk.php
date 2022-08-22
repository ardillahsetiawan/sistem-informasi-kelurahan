<!DOCTYPE html>
<html lang="en">

<?php session_start();
include '../koneksi.php';
$id_kk = $_GET['id_kk'];
$ambil = $koneksi->query("SELECT * FROM kk JOIN user ON kk.id_user=user.id_user WHERE id_kk= '$id_kk'");
$pecah = $ambil->fetch_assoc();

?>

<head>
    <title>kk/Upload Persyaratan </title>
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
                        SURAT KETERANGAN KEMATIAN
                        <p>Lengkapi Persyaratan</p>
                    </h2>
                    <div class="alert alert-info">
                        <span style="color: black;">PERHATIAN!!</span><br>
                        <span style="color: black;">Mohon gambar di foto dengan jelas agar dapat terlihat dengan jelas</span><br>
                    </div>
                    <br>

                    <!-- <input type="text" value="<?php echo $_SESSION['user']['id_user'] ?>" disabled>
                    <input type="text" value="<?php echo $pecah['id_kk'] ?>" disabled> -->

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
                                <label for=""><b>*KTP Saksi 1</b></label><br>
                                <input type="file" name="ktp_saksi_1" value="nama" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group" data-validate="Message is required">
                                <label for=""><b>*KTP Saksi 2</b></label><br>
                                <input type="file" name="ktp_saksi_2" value="nama" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group" data-validate="Message is required">
                                <label for=""><b>*Surat kematian dari rumah sakit ( jika meninggal di rumah sakit )</b></label><br>
                                <input type="file" name="surat_kematian_rs" value="nama" class="form-control">
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for=""><b>*Keperluan Pembuatan Surat</b></label>
                        <input type="text" name="keperluan_surat_kk" class="form-control" value="<?php echo $pecah['keperluan_surat_kk']; ?>">
                    </div>
                    <div class="form-group" data-validate="Message is required">
                        <label for=""><b>*Tanggal Pembuatan Surat</b></label>
                        <input type="Date" name="tanggal_kk" value="<?php echo $pecah['tanggal_kk']; ?>" class="form-control">
                    </div>
                    <div class="container-contact2-form-btn">
                        <div class="form-group"><br>
                            <button class="btn btn-info" name="ubah" onclick="return confirm('Simpan Permohonan ?')">Simpan</button>
                            <a class="btn btn-secondary" href="index_kk.php">Kembali</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <?php

    if (isset($_POST['ubah'])) {
        $pengantar_rt_rw = $_FILES['pengantar_rt_rw']['name'];
        $ktp_saksi_1 = $_FILES['ktp_saksi_1']['name'];
        $ktp_saksi_2 = $_FILES['ktp_saksi_2']['name'];
        $surat_kematian_rs = $_FILES['surat_kematian_rs']['name'];

        $lokasi1 = $_FILES['pengantar_rt_rw']['tmp_name'];
        $lokasi2 = $_FILES['ktp_saksi_1']['tmp_name'];
        $lokasi3 = $_FILES['ktp_saksi_2']['tmp_name'];
        $lokasi4 = $_FILES['surat_kematian_rs']['tmp_name'];

        move_uploaded_file($lokasi1, "../berkas_kk/$pengantar_rt_rw");
        move_uploaded_file($lokasi2, "../berkas_kk/$ktp_saksi_1");
        move_uploaded_file($lokasi3, "../berkas_kk/$ktp_saksi_2");
        move_uploaded_file($lokasi4, "../berkas_kk/$surat_kematian_rs");

        $koneksi->query("UPDATE kk SET
        keperluan_surat_kk='$_POST[keperluan_surat_kk]',
        tanggal_kk='$_POST[tanggal_kk]',
        pengantar_rt_rw = '$pengantar_rt_rw',
        ktp_saksi_1 = '$ktp_saksi_1',
        ktp_saksi_2 = '$ktp_saksi_2',
        surat_kematian_rs = '$surat_kematian_rs',
        status_kk='Menunggu Konfirmasi'
		WHERE id_kk='$_GET[id_kk]'");

        echo "<meta http-equiv='refresh' content='1'>";
        echo "<script>alert('Data Tersimpan');</script>";
        echo "<script> location = 'index_kk.php'; </script>";
    }

    ?>

    <?php include '../form/js.php' ?>

</body>

</html>