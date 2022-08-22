<!DOCTYPE html>
<html lang="en">

<?php session_start();
include '../koneksi.php';
$id_sku = $_GET['id_sku'];
$ambil = $koneksi->query("SELECT * FROM sku JOIN user ON sku.id_user=user.id_user WHERE id_sku = '$id_sku'");
$pecah = $ambil->fetch_assoc();

?>

<head>
    <title>SKU/Upload Persyaratan </title>
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
                        SURAT KETERANGAN USAHA
                        <p>Lengkapi Persyaratan</p>
                    </h2>
                    <span align="center"><b><?php echo $_SESSION['user']['nama']; ?></b>,
                        <a href="ceklist_sku.php?id_sku=<?php echo $pecah['id_sku']; ?>">Klik Disini Untuk Unduh Kelengkapan Dokumen</a></span> Selanjutnya Upload Persyaratan yang Telah Dilengkapi. <br>
                    <p></p>
                    <div class="alert alert-info">
                        <span style="color: black;">PERHATIAN!!</span><br>
                        <span style="color: black;">Mohon gambar di foto dengan jelas agar dapat terlihat dengan jelas</span><br>
                    </div>

                    <p></p><br>
                    <p></p>

                    <!-- <input type="text" value="<?php echo $_SESSION['user']['id_user'] ?>" disabled>
                    <input type="text" value="<?php echo $pecah['id_sku'] ?>" disabled> -->

                    <div class="form-group" data-validate="Message is required">
                        <label for=""><b>*Blanko Permohonan SKU</b></label><br>
                        <input type="file" name="blanko_sku" class="form-control" required>
                    </div>

                    <div class="form-group" data-validate="Message is required">
                        <label for=""><b>*Surat Pernyataan SKU</b></label><br>
                        <input type="file" name="surat_pernyataan_sku" class="form-control" value="nama" required>
                    </div>

                    <div class="form-group" data-validate="Message is required">
                        <label for=""><b>*Surat Pengantar RT/RW</b></label><br>
                        <input type="file" name="foto_sp_rtrw" class="form-control" value="nama" required>
                    </div>

                    <div class="form-group" data-validate="Message is required">
                        <label for=""><b>*Tanda Lunas PBB Tahun Berjalan</b></label><br>
                        <input type="file" name="foto_lunas_pbb" class="form-control" value="nama" required>
                    </div>

                    <div class="form-group" data-validate="Message is required">
                        <label for=""><b>*Perjanjian Sewa (jika Ada)</b></label><br>
                        <input type="file" name="foto_perjanjian_sewa" value="nama" class="form-control">
                    </div>



                    <div class="form-group">
                        <label for=""><b>*Keperluan Pembuatan Surat</b></label>
                        <input type="text" name="keperluan_surat_sku" class="form-control" value="<?php echo $pecah['keperluan_surat_sku']; ?>">
                    </div>
                    <div class="form-group" data-validate="Message is required">
                        <label for=""><b>*Tanggal Pembuatan Surat</b></label>
                        <input type="Date" name="tanggal_sku" value="<?php echo $pecah['tanggal_sku']; ?>" class="form-control">
                    </div>
                    <div class="container-contact2-form-btn">
                        <div class="form-group"><br>
                            <button class="btn btn-info" name="ubah" onclick="return confirm('Simpan Permohonan ?')">Simpan</button>
                            <a class="btn btn-secondary" href="index_sku.php">Kembali</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <?php

    if (isset($_POST['ubah'])) {
        $blanko_sku = $_FILES['blanko_sku']['name'];
        $sp_sku = $_FILES['surat_pernyataan_sku']['name'];
        $rtrw = $_FILES['foto_sp_rtrw']['name'];
        $pbb = $_FILES['foto_lunas_pbb']['name'];
        $sewa = $_FILES['foto_perjanjian_sewa']['name'];


        $lokasi1 = $_FILES['blanko_sku']['tmp_name'];
        $lokasi2 = $_FILES['surat_pernyataan_sku']['tmp_name'];
        $lokasi3 = $_FILES['foto_sp_rtrw']['tmp_name'];
        $lokasi4 = $_FILES['foto_lunas_pbb']['tmp_name'];
        $lokasi5 = $_FILES['foto_perjanjian_sewa']['tmp_name'];

        move_uploaded_file($lokasi1, "../berkas_sku/$blanko_sku");
        move_uploaded_file($lokasi2, "../berkas_sku/$sp_sku");
        move_uploaded_file($lokasi3, "../berkas_sku/$rtrw");
        move_uploaded_file($lokasi4, "../berkas_sku/$pbb");
        move_uploaded_file($lokasi5, "../berkas_sku/$sewa");

        $koneksi->query("UPDATE sku SET
        keperluan_surat_sku='$_POST[keperluan_surat_sku]',
        tanggal_sku='$_POST[tanggal_sku]',
        blanko_sku='$blanko_sku',
        surat_pernyataan_sku='$sp_sku',
        foto_sp_rtrw='$rtrw',
        foto_lunas_pbb='$pbb',
        foto_perjanjian_sewa='$sewa',
        status_sku='Menunggu Konfirmasi'
		WHERE id_sku='$_GET[id_sku]'");

        echo "<meta http-equiv='refresh' content='1'>";
        echo "<script>alert('Data Tersimpan');</script>";
        echo "<script> location = 'index_sku.php'; </script>";
    }

    ?>

    <?php include '../form/js.php' ?>

</body>

</html>