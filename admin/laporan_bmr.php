<!DOCTYPE html>
<html lang="en">
<?php
session_start();
include '../koneksi.php';

if (!isset($_SESSION['adm'])) {
    echo "<script>alert('You Must Be Login');</script>";
    echo "<script>location='login.php';</script>";
    header('location:login.php');
    exit();
}
?>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>KELURAHAN SELAT HULU</title>
    <!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- MORRIS CHART STYLES-->
    <link href="assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
    <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />

    <script src="assets/js/jquery-1.10.2.js"></script>
    <title>IMB</title>
</head>

<body>
    <?php include 'navbar.php'; ?>
    <!-- /. NAV SIDE  -->
    <div id="page-wrapper">
        <div id="page-inner">
            <div class="row">
                <div class="col-md-12 col-sm-6 col-xs-6">
                    <center>
                        <div class="panel panel-back noti-box">
                            <div class="text-box">
                                <p class="main-text">
                                    <font face="Garamond">Laporan Pelayanan BMR <br>(Belum Memiliki Rumah)</font>
                                </p>
                            </div><br>
                        </div>
                    </center>
                    <form method="post" action="download_laporan_bmr.php">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Tanggal Mulai</label>
                                    <input type="date" name="dari" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Tanggal Selesai</label>
                                    <input type="date" name="ke" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <label>&nbsp;</label><br>
                                <button class="btn btn-info" onclick="window">Download</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper" style="background: url('#') center center;">
                <!-- Main content -->
                <section class="content">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="card col-md-12 p-0">
                                <!-- /.card-header -->
                                <div class="card-header">
                                    <u>
                                        <h5 class="text-center"><b></b></h5>
                                    </u>
                                </div>
                                <br>
                                <div class="card-body">
                                    <div class="card-body table-responsive p-0" style="height: 425px;">
                                        <table class="table table-bordered table-hover">
                                            <thead>
                                                <tr>
                                                    <th style="width: 10px">NO</th>
                                                    <th>NAMA PEMOHON</th>
                                                    <th>ALAMAT</th>
                                                    <th>PEKERJAAN</th>
                                                    <th>KEPERLUAN SURAT</th>
                                                    <th>TANGGAL PERMOHONAN</th>
                                                    <th>STATUS PERMOHONAN</th>
                                                </tr>
                                            </thead>
                                            <?php
                                            $data = mysqli_query($koneksi, "SELECT * FROM bmr JOIN user ON
                                      bmr.id_user = user.id_user ORDER BY tanggal_bmr DESC");
                                            ?>
                                            <?php $nomor = 1;
                                            ?>
                                            <tbody>
                                                <?php while ($d = mysqli_fetch_array($data)) { ?>
                                                    <tr>
                                                        <td><?php echo $nomor ?></td>
                                                        <td><?php echo $d['nama'] ?></td>
                                                        <td><?php echo $d['alamat'] ?></td>
                                                        <td><?php echo $d['pekerjaan'] ?></td>
                                                        <td><?php echo $d['keperluan_surat_bmr'] ?></td>
                                                        <td><?php echo date('d F Y', strtotime($d['tanggal_bmr'])); ?></td>
                                                        <td>
                                                            <?php if ($d['status_bmr'] == NULL) : ?>
                                                                <span>Menunggu Konfirmasi</span>
                                                            <?php else : ?>
                                                                <?php echo $d['status_bmr'] ?>
                                                            <?php endif ?>
                                                        </td>
                                                    </tr>
                                                    <?php $nomor++; ?>
                                                <?php } ?>
                                            </tbody>
                                        </table>
                                    </div><br>
                                    <a href="laporan_bmr.php" class="btn btn-success" onclick="window.open('download_laporan_bmr2.php')">Download Semua Data</a>

                                </div>

                                <!-- /.card-body -->
                            </div>
                        </div>
                    </div>
                </section>
                <!-- /.content -->
            </div>
            <!-- /.content-wrapper -->

            <!-- Control Sidebar -->
            <aside class="control-sidebar control-sidebar-dark">
                <!-- Control sidebar content goes here -->
            </aside>
            <!-- /.control-sidebar -->
        </div>
        <!-- ./wrapper -->

        <!-- jQuery -->
        <?php include '../template/js.php'; ?>
</body>

</html>