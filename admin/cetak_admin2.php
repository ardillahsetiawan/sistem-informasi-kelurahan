<!DOCTYPE html>
<html lang="en">
<?php include '../koneksi.php' ?>


<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

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
</head>

<body>
    <center>
        <table border="0" width="550">
            <tr>
                <td><img src="img/kapuashitamputih.png" width="80" height="90"></td>
                <td>
                    <center>
                        <font size="5">PEMERINTAH KABUPATEN KAPUAS</font><br>
                        <font size="5">KECAMATAN SELAT</font><br>
                        <font size="5">KELURAHAN SELAT HULU</font>
                    </center>
                </td>
            </tr>
            <tr>
                <td colspan="2" align="center" width"100">
                    <hr>
                    <font size="2">Jalan Tjilik Riwut No.30 Telp. (0513) 22419 KODE POS 73515</font>
                    <hr>
                </td>
            </tr>
        </table>
    </center>
</body>

<body class="hold-transition sidebar-mini template-fixed" onload=window.print()>
    <div class="wrapper">
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
                                    <h5 class="text-center"><b>Laporan Petugas Verifikasi</b></h5><br>
                                </u>
                            </div>
                            <div class="card-body">
                                <div class="card-body">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th style="width: 10px">No</th>
                                                <th>Tanggal</th>
                                                <th>Nama Pemohon</th>
                                                <th>Jenis Layanan</th>
                                                <th>Verifikator</th>
                                            </tr>
                                        </thead>
                                        <?php

                                        $data = mysqli_query($koneksi, "SELECT * FROM pelayanan JOIN nama_pelayanan ON
                                            pelayanan.id_nama_pelayanan=nama_pelayanan.id_nama_pelayanan JOIN user
                                            ON pelayanan.id_user=user.id_user JOIN adm ON adm.id_admin = pelayanan.id_admin ORDER BY tanggal_layanan ASC");

                                        ?>
                                        <?php $nomor = 1;
                                        //jika tidak ada tanggal dari dan tanggal ke maka tampilkan seluruh data

                                        ?>

                                        <tbody>
                                            <?php while ($d = mysqli_fetch_array($data)) { ?>
                                                <tr>
                                                    <td><?php echo $nomor ?></td>
                                                    <td><?php echo $d['tanggal_layanan'] ?></td>
                                                    <td><?php echo $d['nama'] ?></td>
                                                    <td><?php echo $d['nama_layanan'] ?></td>
                                                    <td><?php echo $d['nama_admin'] ?></td>
                                                </tr>
                                                <?php $nomor++; ?>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div><br>
                            </div>
                            <!-- /.card-body -->
                        </div>
                    </div>
                </div>
            </section>
            <!-- /.content -->
        </div>

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