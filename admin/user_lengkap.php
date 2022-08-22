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
<!DOCTYPE html>
<html lang="en">

<?php include '../koneksi.php' ?>
<?php
$ambil = $koneksi->query("SELECT * FROM user WHERE id_user ='$_GET[id_user]'");
$detail = $ambil->fetch_assoc();
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
            <div class="content-wrapper" style="background: url('#') center center;"><br>
                <!-- Content Header (Page header) -->
                <!-- <div class="content-header" style="color: green;">
                <h4 class="text-center"><b>PELAYANAN EKONOMI PEMBANGUNAN</b></h4>
                <h2 class="text-center"><b>SURAT KETERANGAN BELUM MEMILIKI RUMAH</b></h2>
            </div> -->
                <!-- /.content-header -->

                <!-- Main content -->
                <section class="content">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="card col-md-12 p-0">
                                <!-- /.card-header -->
                                <div class="card-header">
                                    <u>
                                        <h3 class="text-center"><b>Detail <?php echo $detail['nama']; ?> (<?php echo $detail['jenis_kelamin']; ?>)</b></h3><br><br>
                                    </u>

                                    <div class="card-body">
                                        <div class="card-body table-responsive p-0">
                                            <table class="table table-head-fixed table-bordered table-hover text-nowrap">
                                                <thead>
                                                    <tr>
                                                        <th style="width: 10px">NO</th>
                                                        <th>ASPEK</th>
                                                        <th>KETERANGAN</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td align="center">1</td>
                                                        <td>E-Mail</td>
                                                        <td> <?php echo $detail['email']; ?>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td align="center">2</td>
                                                        <td>Telepon</td>
                                                        <td> <?php echo $detail['telepon']; ?>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td align="center">3</td>
                                                        <td>Alamat Lengkap</td>
                                                        <td> <?php echo $detail['alamat'] . ', ' . $detail['rt'] . '/' . $detail['rw'] . ', ' . $detail['kelurahan_domisili'] . ', ' . $detail['kecamatan_domisili'] . ', ' . $detail['kabupatenkota_domisili']; ?>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td align="center">4</td>
                                                        <td>Status Perkawinan</td>
                                                        <td> <?php echo $detail['status_perkawinan']; ?>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td align="center">5</td>
                                                        <td>KTP</td>
                                                        <td class="text-center"> <a href="../berkas_user/<?php echo $detail['foto_ktp']; ?>" target="_blank" class="btn btn-info">Lihat</a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td align="center">6</td>
                                                        <td>Kartu Keluarga</td>
                                                        <td class="text-center"> <a href="../berkas_user/<?php echo $detail['foto_kk']; ?>" target="_blank" class="btn btn-info">Lihat</a>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-4 ">
                                                <a href="user.php" class="btn btn-warning">KEMBALI</a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.card-body -->
                                </div>
                            </div>
                        </div>
                </section>
                <!-- Modal -->
                <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLongTitle">Status Permohonan</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form action="" method="POSt">
                                    <div class="form-group">
                                        <label for="">Pilih</label>
                                        <select name="status_imb" id="" class="form-control">
                                            <option selected="selected" disabled>-Pilih Status-</option>
                                            <option value="Berkas Tidak Lengkap">Berkas Tidak Lengkap</option>
                                            <option value="Berkas Tidak Valid">Berkas Tidak Valid</option>
                                            <option value="Belum Terverifikasi">Belum Terverifikasi</option>
                                            <option value="Verifikasi">Verifikasi</option>
                                            <option value="Rekomendasi Selesai">Rekomendasi Selesai</option>
                                        </select>
                                    </div>
                                    <button class="btn btn-info" name="ubah">Simpan</button>
                                    <button class="btn btn-warning">Batal</button>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>
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