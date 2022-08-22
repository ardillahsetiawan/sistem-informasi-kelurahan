<!DOCTYPE html>
<html lang="en">

<?php session_start(); ?>
<?php include '../koneksi.php' ?>

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
                                    <font face="Garamond">Laporan User</font>
                                </p>
                            </div><br>
                        </div>
                    </center>
                </div>
            </div>

            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper" style="background: url('#') center center;"><br>
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
                                    <a href="laporan.php" class="btn btn-success" onclick="window.open('download_laporan_user.php')">Download</a>
                                </div>
                                <br><br>
                                <div class="card-body">
                                    <div class="card-body table-responsive p-0" style="height: 500px;">
                                        <table class="table table-head-fixed table-bordered table-hover text-nowrap">
                                            <thead>
                                                <tr>
                                                    <th style="width: 10px">No</th>
                                                    <th>Nama</th>
                                                    <th>Nomor Telepon</th>
                                                    <th>Email</th>
                                                    <th>Alamat</th>
                                                    <th>No KTP</th>
                                                </tr>
                                            </thead>
                                            <?php
                                            if (isset($_GET['dari']) && isset($_GET['ke'])) {
                                                // tampilkan data yang sesuai dengan range tanggal yang dicari
                                                $data = $koneksi->query("SELECT * FROM user WHERE nama '" . $_GET['dari'] . "' and '" . $_GET['ke'] . "'");
                                            } else {
                                                $data = $koneksi->query("SELECT * FROM user ORDER BY nama DESC");
                                            }
                                            ?>
                                            <?php $nomor = 1;
                                            //jika tidak ada tanggal dari dan tanggal ke maka tampilkan seluruh data

                                            ?>

                                            <tbody>
                                                <?php while ($d = $data->fetch_assoc()) { ?>
                                                    <tr>
                                                        <td><?php echo $nomor ?></td>
                                                        <td><?php echo $d['nama'] ?></td>
                                                        <td><?php echo $d['telepon'] ?></td>
                                                        <td><?php echo $d['email'] ?></td>
                                                        <td><?php echo $d['alamat'] ?></td>
                                                        <td><?php echo $d['no_ktp'] ?></td>
                                                    </tr>
                                                    <?php $nomor++; ?>
                                                <?php } ?>
                                            </tbody>
                                        </table>
                                    </div>
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