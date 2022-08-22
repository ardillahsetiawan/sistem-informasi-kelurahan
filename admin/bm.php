<!DOCTYPE hbml>
<hbml lang="en">

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
        <title>SKBM</title>
    </head>

    <body class="hold-transition sidebar-mini template-fixed">
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
                                        <font face="Garamond">KELURAHAN SELAT HULU<br><u>KUALA KAPUAS</u></font>
                                    </p>
                                </div><br>
                            </div>
                        </center>
                    </div>
                </div>
                <div class="content-wrapper" style="background: url('#') center center;">

                    <div class="content-header">
                        <h4 class=" text-center"><b>PELAYANAN</b></h4>
                        <h4 class="text-center"><b>"SURAT KETERANGAN BELUM MENIKAH"</b></h4><br>
                    </div>
                    <!-- Main content -->
                    <section class="content">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="card col-md-12 p-0">
                                    <div class="card-header">
                                        <form method="GET">
                                            <div class="row">
                                                <div class="col-lg-4">
                                                    <div class="form-group">
                                                        <input type="text" name="cari" class="form-control" placeholder="Cari nama">

                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <button class="btn btn-info">Cari</button>
                                                    <a href="bm.php" class="btn btn-primary">Refresh</a>
                                                    <a href="add_skbm.php" class="btn btn-success">Tambah</a>
                                                </div>
                                                <div class="col-md-6 text-right">
                                                </div>
                                            </div>
                                        </form>
                                        <?php
                                        if (isset($_GET['cari'])) {
                                            $cari = $_GET['cari'];
                                            echo "Hasil Pencarian : <b>"  . $cari . "</b>";
                                        } ?>
                                    </div>
                                    <!-- /.card-header -->
                                    <div class="card-body">
                                        <table class="table table-bordered table-hover">
                                            <thead>
                                                <tr>
                                                    <th style="width: 10px">NO</th>
                                                    <th>TANGGAL</th>
                                                    <th>NAMA PEMOHON</th>
                                                    <th>STATUS PERMOHONAN</th>
                                                    <th style="width: 70px">AKSI</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <?php
                                                    include '../koneksi.php';
                                                    $batas = 10;
                                                    $halaman = isset($_GET['halaman']) ? (int)$_GET['halaman'] : 1;
                                                    $halaman_awal = ($halaman > 1) ? ($halaman * $batas) - $batas : 0;

                                                    $previous = $halaman - 1;
                                                    $next = $halaman + 1;
                                                    $nomor = 1;
                                                    if (isset($_GET['cari'])) {
                                                        $cari = $_GET['cari'];
                                                        $ambil = $koneksi->query("SELECT * FROM user INNER JOIN bm ON user.id_user = bm.id_user WHERE nama LIKE '%" . $cari . "%' ORDER BY tanggal_bm DESC limit $halaman_awal, $batas ");
                                                        $jumlah_data = mysqli_num_rows($ambil);
                                                        $total_halaman = ceil($jumlah_data / $batas);
                                                    } else {

                                                        $ambil = $koneksi->query("SELECT * FROM user INNER JOIN bm ON user.id_user = bm.id_user ORDER BY tanggal_bm DESC");
                                                        $jumlah_data = mysqli_num_rows($ambil);
                                                        $total_halaman = ceil($jumlah_data / $batas);

                                                        $ambil = $koneksi->query("SELECT * FROM user INNER JOIN bm ON user.id_user = bm.id_user ORDER BY tanggal_bm DESC limit $halaman_awal, $batas ");
                                                        $nomor = $halaman_awal + 1;
                                                    }

                                                    ?>

                                                    <?php while ($pecah = $ambil->fetch_assoc()) { ?>
                                                        <td><?php echo $nomor; ?></td>
                                                        <td><?php echo date('d F Y', strtotime($pecah['tanggal_bm'])); ?></td>
                                                        <td><?php echo $pecah['nama']; ?> </td>
                                                        <td>
                                                            <?php if ($pecah['status_bm'] == NULL) : ?> <span>Menunggu Verifikasi</span>
                                                            <?php else : ?>
                                                                <?php echo $pecah['status_bm']; ?>
                                                            <?php endif ?>
                                                        </td>
                                                        <td width="150px">
                                                            <a href="bm_lengkap.php?id_bm=<?php echo $pecah['id_bm']; ?>" class="btn btn-info">Lihat</a>
                                                            <a href="bm_hapus.php?id_bm=<?php echo $pecah['id_pelayanan']; ?>" class="btn btn-danger">Hapus</a>
                                                        </td>
                                                </tr>
                                                <?php $nomor++; ?>
                                            <?php } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- /.card-body -->
                                    <div class="card-footer clearfix">

                                        <ul class="pagination pagination-sm m-0 float-right">
                                            <li class="page-item"><a class="page-link" <?php if ($halaman > 1) {
                                                                                            echo "href='?halaman=$previous'";
                                                                                        } ?>>« Previous</a></li>
                                            <?php
                                            for ($x = 1; $x <= $total_halaman; $x++) {
                                            ?>
                                                <li class="page-item"><a class="page-link" href="?halaman=<?php echo $x ?>"><?php echo $x; ?></a></li>
                                            <?php
                                            }
                                            ?>
                                            <li class="page-item"><a class="page-link" <?php if ($halaman < $total_halaman) {
                                                                                            echo "href='?halaman=$next'";
                                                                                        } ?>>Next »</a></li>
                                        </ul>
                                    </div>
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

</hbml>