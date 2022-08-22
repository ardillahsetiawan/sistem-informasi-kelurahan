<!DOCTYPE html>
<html lang="en">

<?php session_start();
include '../koneksi.php';
$id_sku = $_GET['id_sku'];
$ambil = $koneksi->query("SELECT * FROM sku JOIN user ON sku.id_user=user.id_user WHERE id_sku = '$id_sku'");
$pecah = $ambil->fetch_assoc();
?>

<head>
    <title>Check-List SKU</title>
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
                <table class="table table-bordered">
                    <span align="center"><b><?php echo $_SESSION['user']['nama']; ?></b>, Berkas Anda berhasil dibuat, Silahkan unduh dan
                        <a href="upload_sku.php?id_sku=<?php echo $pecah['id_sku'] ?>">lengkapi persyaratan</a> </span><br>
                    <p></p>
                    <thead>
                        <th>Nama Berkas</th>
                        <th>Aksi</th>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Blanko Permohonan SKU</td>
                            <td align="center">
                                <a href="blanko_sku.php?id_sku=<?php echo $pecah['id_sku']; ?>" class="btn btn-warning btn-xs">Unduh</a>
                            </td>
                        </tr>
                        <tr>
                            <td>Surat Pernyataan SKU</td>
                            <td align="center">
                                <a href="surat_pernyataan_sku.php?id_sku=<?php echo $pecah['id_sku']; ?>" class="btn btn-warning btn-xs">Unduh</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <a href="index_sku.php" class="btn btn-secondary btn-xs">Kembali</a>
            </div>
        </div>
    </div>


    <?php include '../form/js.php' ?>

</body>

</html>
