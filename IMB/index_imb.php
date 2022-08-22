<!DOCTYPE html>
<html lang="en">

<?php session_start();
include '../koneksi.php';
?>


<head>
    <title>IMB-index</title>
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




    <div class="container"><br>
        <h4 class="text-center">
            IZIN MENDIRIKAN BANGUNAN
            <p><?php echo $_SESSION['user']['nama'] ?></p>
        </h4>
        <?php
        $nomor = 1;
        $id_user = $_SESSION['user']['id_user'];
        $ambil = $koneksi->query("SELECT * FROM imb WHERE id_user = '$id_user' ORDER BY tanggal_imb  DESC");
        ?>

        <div class="form-group"><br>
            <a class="btn btn-info" href="form_imb.php?id_user=<?php echo $_SESSION['user']['id_user'] ?>">+ Permohonan Baru</a>
            <a class="btn btn-secondary" href="../home.php">kembali</a>
        </div>
        <div class="row">

            <table class="table table-bordered datatables">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Tanggal Permohonan</th>
                        <th>Jenis Bangunan</th>
                        <th>Alamat</th>
                        <th>Berkas</th>
                        <th>Keterangan</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($pecah = $ambil->fetch_assoc()) { ?>
                        <tr>
                            <td><?php echo $nomor; ?></td>
                            <td><?php echo date('d F Y', strtotime($pecah['tanggal_imb'])); ?></td>
                            <td><?php echo $pecah['jenis_bangunan']; ?></td>
                            <td><?php echo $pecah['lokasi'] ?></td>
                            <td><a href="ceklist_imb.php?id_imb=<?php echo $pecah['id_imb'] ?>" class="btn btn-success">Uduh Berkas</a></td>
                            <td>
                                <?php if ($pecah['blanko_imb'] == NULL) : ?>
                                    <a href="upload_imb.php?id_imb=<?php echo $pecah['id_imb']; ?>" class="btn btn-warning btn-xs">Lengkapi Persyaratan</a>
                                <?php else : ?>
                                    <?php echo $pecah['status_imb'] ?>
                                <?php endif ?>
                            </td>
                        </tr>
                        <?php $nomor++;
                        ?>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>





    <?php include '../form/js.php' ?>

</body>

</html>
