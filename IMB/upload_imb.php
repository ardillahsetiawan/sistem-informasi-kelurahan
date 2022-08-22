<!DOCTYPE html>
<html lang="en">

<?php session_start();

include '../koneksi.php';
$id_imb = $_GET['id_imb'];
$ambil = $koneksi->query("SELECT * FROM imb JOIN user ON imb.id_user=user.id_user WHERE id_imb = '$id_imb'");
$pecah = $ambil->fetch_assoc();
?>

<head>
    <title>IMB/Upload Persyaratan </title>
    <?php include '../form/header.php' ?>
</head>

<body>

    <?php include '../bootstrap/navbar.php' ?>
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
    <div class="bg-contact2" style="background-image: url('../assets/form/images/bg.png');">
        <div class="container-contact2">
            <div class="wrap-contact2">
                <form method="POST" enctype="multipart/form-data">
                    <h2 class="text-center">
                        IZIN MENDIRIKAN BANGUNAN
                        <p>Lengkapi Persyaratan</p>
                    </h2>
                    <span align="center"><b><?php echo $_SESSION['user']['nama']; ?></b>,
                        <a href="ceklist_imb.php?id_imb=<?php echo $pecah['id_imb']; ?>">Klik Disini Untuk Unduh Kelengkapan Dokumen</a></span> Selanjutnya Upload Persyaratan yang Telah Dilengkapi. <br>
                    <p></p>
                    <div class="alert alert-info">
                        <span style="color: black;">PERHATIAN!!</span><br>
                        <span style="color: black;">Mohon gambar di foto dengan jelas agar dapat terlihat dengan jelas</span><br>
                    </div>

                    <p></p><br>
                    <p></p>


                    <div class="form-group" data-validate="Message is required">
                        <label for=""><b>*Blanko Permohonan IMB</b></label>
                        <input type="file" name="blanko_imb" value="" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label for=""><b>*Surat Sewa/Pernyataan (Apabila Bukan Milik Sendiri)</b></label>
                        <input type="file" name="sp_pemilik" value="" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for=""><b>*Surat Kuasa (Apabila yang Mengurus Bukan Pemohon Langsung)</b></label>
                        <input type="file" name="surat_kuasa" value="" class="form-control">
                    </div>

                    <div class="form-group" data-validate="Message is required">
                        <label for=""><b>*Surat Pernyataan Tanah Tidak Dalam Sengketa dan Seperbatasan
                            </b></label>
                        <input type="file" name="sp_tidaksengketa" value="" class="form-control">
                    </div>

                    <div class="form-group" data-validate="Message is required">
                        <label for=""><b>*Surat Pernyataan Garis Sempadan Samping Bangunan
                            </b></label>
                        <input type="file" name="sp_garis" value="" class="form-control">
                    </div>

                    <div class="form-group" data-validate="Message is required">
                        <label for=""><b>*Berita acara Pengecekan Lapangan
                            </b></label>
                        <input type="file" name="ba_pengecekan" value="" class="form-control">
                    </div>

                    <div class="form-group" data-validate="Message is required">
                        <label for=""><b>*Check-List kelengkapan Persyaratan
                            </b></label>
                        <input type="file" name="checklis_imb" value="" class="form-control">
                    </div>

                    <div class="form-group" data-validate="Message is required">
                        <label for=""><b>*Surat Pengantar RT
                            </b></label>
                        <input type="file" name="pengantar_rt" value="" class="form-control">
                    </div>

                    <div class="form-group" data-validate="Message is required">
                        <label for=""><b>*Sertifikat Tanah
                            </b></label>
                        <input type="file" name="sertifikat" value="" class="form-control">
                    </div>

                    <div class="form-group" data-validate="Message is required">
                        <label for=""><b>*Bukti Lunas PBB
                            </b></label>
                        <input type="file" name="lunas_pbb" value="" class="form-control">
                    </div>
                    <div class="container-contact2-form-btn">
                        <div class="form-group"><br>
                            <button class="btn btn-info" name="ubah" onclick="return confirm('Simpan Permohonan ?')">Simpan</button>
                            <a class="btn btn-secondary" href="index_imb.php">Kembali</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <?php include '../form/js.php';

    if (isset($_POST['ubah'])) {
        $blanko_imb = $_FILES['blanko_imb']['name'];
        $sp_pemilik = $_FILES['sp_pemilik']['name'];
        $surat_kuasa = $_FILES['surat_kuasa']['name'];
        $sp_tidaksengketa = $_FILES['sp_tidaksengketa']['name'];
        $sp_garis = $_FILES['sp_garis']['name'];
        $ba_pengecekan = $_FILES['ba_pengecekan']['name'];
        $checklis_imb = $_FILES['checklis_imb']['name'];
        $pengantar_rt = $_FILES['pengantar_rt']['name'];
        $sertifikat = $_FILES['sertifikat']['name'];
        $lunas_pbb = $_FILES['lunas_pbb']['name'];


        $lokasi1 = $_FILES['blanko_imb']['tmp_name'];
        $lokasi3 = $_FILES['sp_pemilik']['tmp_name'];
        $lokasi4 = $_FILES['surat_kuasa']['tmp_name'];
        $lokasi5 = $_FILES['sp_tidaksengketa']['tmp_name'];
        $lokasi7 = $_FILES['sp_garis']['tmp_name'];
        $lokasi8 = $_FILES['ba_pengecekan']['tmp_name'];
        $lokasi9 = $_FILES['checklis_imb']['tmp_name'];
        $lokasi10 = $_FILES['pengantar_rt']['tmp_name'];
        $lokasi11 = $_FILES['sertifikat']['tmp_name'];
        $lokasi12 = $_FILES['lunas_pbb']['tmp_name'];

        move_uploaded_file($lokasi1, "../berkas_imb/$blanko_imb");
        move_uploaded_file($lokasi3, "../berkas_imb/$sp_pemilik");
        move_uploaded_file($lokasi4, "../berkas_imb/$surat_kuasa");
        move_uploaded_file($lokasi5, "../berkas_imb/$sp_tidaksengketa");
        move_uploaded_file($lokasi7, "../berkas_imb/$sp_garis");
        move_uploaded_file($lokasi8, "../berkas_imb/$ba_pengecekan");
        move_uploaded_file($lokasi9, "../berkas_imb/$checklis_imb");
        move_uploaded_file($lokasi10, "../berkas_imb/$pengantar_rt");
        move_uploaded_file($lokasi11, "../berkas_imb/$sertifikat");
        move_uploaded_file($lokasi12, "../berkas_imb/$lunas_pbb");

        $koneksi->query("UPDATE imb SET
        blanko_imb='$blanko_imb',
        sp_pemilik='$sp_pemilik',
        surat_kuasa='$surat_kuasa',
        sp_tidaksengketa='$sp_tidaksengketa',
        sp_garis='$sp_garis',
        ba_pengecekan='$ba_pengecekan',
        checklis_imb='$checklis_imb',
        pengantar_rt='$pengantar_rt',
        sertifikat='$sertifikat',
        lunas_pbb='$lunas_pbb',
        status_imb='Menunggu Konfirmasi'
		WHERE id_imb='$_GET[id_imb]'");

        echo "<meta http-equiv='refresh' content='1'>";
        echo "<script>alert('Data Tersimpan');</script>";
        echo "<script> location = 'index_imb.php'; </script>";
    }
    ?>


</body>

</html>