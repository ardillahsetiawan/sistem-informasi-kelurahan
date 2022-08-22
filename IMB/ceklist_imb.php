<!DOCTYPE html>
<html lang="en">

<?php session_start();
include '../koneksi.php';
$id_imb = $_GET['id_imb'];
$ambil = $koneksi->query("SELECT * FROM imb JOIN user ON imb.id_user=user.id_user WHERE id_imb = '$id_imb'");
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

    <div class="bg-contact2" style="background-image: url('../assets/form/images/bg.png');">
        <div class="container-contact2">
            <div class="wrap-contact2">
                <table class="table table-bordered">
                    <span align="center"><b><?php echo $_SESSION['user']['nama']; ?></b>, Permohonan Anda berhasil dibuat, Silahkan unduh dan lengkapi persyaratan</span><br>
                    <p></p>
                    <thead>
                        <th>NO</th>
                        <th>Jenis Persyaratan</th>
                        <th>Aksi</th>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Blanko Permohonan</td>
                            <td>
                                <a href="blanko_imb.php?id_imb=<?php echo $pecah['id_imb'] ?> " target="_blank" class="btn btn-warning btn-xs">Unduh</a>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Surat Sewa/pernyataan pemilik tanah (apabila bukan milik sendiri)</td>
                            <td>
                                <a href="surat_pernyataan_pemilik_tanah_imb.php?id_imb=<?php echo $pecah['id_imb'] ?>" target="_blank" class="btn btn-warning btn-xs">Unduh</a>
                            </td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Surat Kuasa (apabila yang mengurus bukan Pemohon Langsung)</td>
                            <td>
                                <a href="surat_kuasa_imb.php?id_imb=<?php echo $pecah['id_imb'] ?>" target="_blank" class="btn btn-warning btn-xs">Unduh</a>
                            </td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>Surat Pernyataan tanah tidak dalam sengketa dan seperbatasan</td>
                            <td>
                                <a href="surat_pernyataan_tanah_tidak_dalam_sengketa_dan_seperbatasan_imb.php?id_imb=<?php echo $pecah['id_imb'] ?>" target="_blank" class="btn btn-warning btn-xs">Unduh</a>
                            </td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>Surat Pernyataan Garis Sempadan Samping Bangunan</td>
                            <td>
                                <a href="surat_pernyataan_garis_sempadan_samping_bangunan_imb.php?id_imb=<?php echo $pecah['id_imb'] ?>" target="_blank" class="btn btn-warning btn-xs">Unduh</a>
                            </td>
                        </tr>
                        <tr>
                            <td>6</td>
                            <td>Berita acara Pengecekan lapangan</td>
                            <td>
                                <a href="berita_acara_pengecekan_lapangan_imb.php?id_imb=<?php echo $pecah['id_imb'] ?>" target="_blank" class="btn btn-warning btn-xs">Unduh</a>
                            </td>
                        </tr>
                        <tr>
                            <td>7</td>
                            <td>Check-List kelengkapan Persyaratan</td>
                            <td>
                                <a href="ceklist_surat_imb.php?id_imb=<?php echo $pecah['id_imb'] ?>" target="_blank" class="btn btn-warning btn-xs">Unduh</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <a href="index_imb.php" class="btn btn-secondary">Kembali</a>
                <a href="upload_imb.php?id_imb=<?php echo $pecah['id_imb']; ?>" class="btn btn-warning btn-xs">Lengkapi Persyaratan</a>
            </div>
        </div>
    </div>


    <?php include '../form/js.php' ?>

</body>

</html>
