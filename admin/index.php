<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
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
    <title>Admin/Dashboard</title>
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
    <?php include 'navbar.php'; ?>

    <div id="page-wrapper">
        <div class="center">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <center>
                            <div class="panel panel-back noti-box">
                                <div class="text-box">
                                    <p class="main-text">
                                        <font face="Garamond">KELURAHAN SELAT HULU <br> <u>KUALA KAPUAS</u></font>
                                    </p>
                                </div><br>
                            </div>
                        </center>
                    </div>
                </div>
                <center>

                </center><br><br>
                <div class="row">
                    <div class="col-md-3">
                        <center>
                            <div class="caption">
                                <font size="4" color="Black" face="lato">Surat Keterangan Usaha <br></font>
                                <div class="thumbnail">
                                    <img src="img/sku.png"><br>
                                    <?php if ($_SESSION['adm']['jabatan'] != 'Lurah') { ?>
                                        <a href="sku.php" class="btn btn-info btn-lg btn-block">LIHAT</a>
                                    <?php } ?>
                                </div>
                            </div>
                        </center>
                    </div>
                    <div class="col-md-3">
                        <center>
                            <div class="caption">
                                <font size="4" color="Black" face="lato">Belum Memiliki Rumah <br></font>
                                <div class="thumbnail">
                                    <img src="img/bmr.jpg"><br>
                                    <?php if ($_SESSION['adm']['jabatan'] != 'Lurah') { ?>
                                        <a href="bmr.php" class="btn btn-info btn-lg btn-block">LIHAT</a>
                                    <?php } ?>
                                </div>
                            </div>
                        </center>
                    </div>
                    <div class="col-md-3">
                        <center>
                            <div class="caption">
                                <font size="4" color="Black" face="lato">Izin Mendirikan Bangunan <br></font>
                                <div class="thumbnail">
                                    <img src="img/imb.jpg"><br>
                                    <?php if ($_SESSION['adm']['jabatan'] != 'Lurah') { ?>
                                        <a href="imb.php" class="btn btn-info btn-lg btn-block">LIHAT</a>
                                    <?php } ?>
                                </div>
                            </div>
                        </center>
                    </div>
                    <div class="col-md-3">
                        <center>
                            <div class="caption">
                                <font size="4" color="Black" face="lato">Surat Keterangan Tidak Mampu<br></font>
                                <div class="thumbnail">
                                    <img src="img/sktm.jpg"><br>
                                    <?php if ($_SESSION['adm']['jabatan'] != 'Lurah') { ?>
                                        <a href="tm.php" class="btn btn-info btn-lg btn-block">LIHAT</a>
                                    <?php } ?>
                                </div>
                            </div>
                        </center>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3">
                        <center>
                            <div class="caption">
                                <font size="4" color="Black" face="lato">Surat Keterangan Belum Nikah <br></font>
                                <div class="thumbnail">
                                    <img src="img/skbmm.jpg"><br>
                                    <?php if ($_SESSION['adm']['jabatan'] != 'Lurah') { ?>
                                        <a href="bm.php" class="btn btn-info btn-lg btn-block">LIHAT</a>
                                    <?php } ?>
                                </div>
                            </div>
                        </center>
                    </div>
                    <div class="col-md-3">
                        <center>
                            <div class="caption">
                                <font size="4" color="Black" face="lato">Surat Keterangan Menikah <br></font>
                                <div class="thumbnail">
                                    <img src="img/skm.jpg"><br>
                                    <?php if ($_SESSION['adm']['jabatan'] != 'Lurah') { ?>
                                        <a href="km.php" class="btn btn-info btn-lg btn-block">LIHAT</a>
                                    <?php } ?>
                                </div>
                            </div>
                        </center>
                    </div>
                    <div class="col-md-3">
                        <center>
                            <div class="caption">
                                <font size="4" color="Black" face="lato">Surat Keterangan Domisili <br></font>
                                <div class="thumbnail">
                                    <img src="img/skd.jpg"><br>
                                    <?php if ($_SESSION['adm']['jabatan'] != 'Lurah') { ?>
                                        <a href="kd.php" class="btn btn-info btn-lg btn-block">LIHAT</a>
                                    <?php } ?>
                                </div>
                            </div>
                        </center>
                    </div>
                    <div class="col-md-3">
                        <center>
                            <div class="caption">
                                <font size="4" color="Black" face="lato">Surat Keterangan Pindah <br></font>
                                <div class="thumbnail">
                                    <img src="img/skp.jpg"><br>
                                    <?php if ($_SESSION['adm']['jabatan'] != 'Lurah') { ?>
                                        <a href="kp.php" class="btn btn-info btn-lg btn-block">LIHAT</a>
                                    <?php } ?>
                                </div>
                            </div>
                        </center>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3">
                    </div>
                    <div class="col-md-3">
                        <center>
                            <div class="caption">
                                <font size="4" color="Black" face="lato">Surat Keterangan Kematian <br></font>
                                <div class="thumbnail">
                                    <img src="img/skk.jpg"><br>
                                    <?php if ($_SESSION['adm']['jabatan'] != 'Lurah') { ?>
                                        <a href="kk.php" class="btn btn-info btn-lg btn-block">LIHAT</a>
                                    <?php } ?>
                                </div>
                            </div>
                        </center>
                    </div>
                    <div class="col-md-3">
                        <center>
                            <div class="caption">
                                <font size="4" color="Black" face="lato">Surat Keterangan Ahli Waris <br></font>
                                <div class="thumbnail">
                                    <img src="img/skaw.jpg"><br>
                                    <?php if ($_SESSION['adm']['jabatan'] != 'Lurah') { ?>
                                        <a href="kaw.php" class="btn btn-info btn-lg btn-block">LIHAT</a>
                                    <?php } ?>
                                </div>
                            </div>
                        </center>
                    </div>
                    <div class="col-md-3">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 text-center">
                        <?php if ($_SESSION['adm']['jabatan'] == 'Lurah') { ?>
                            <a href="laporan.php" class="btn btn-info btn-block">Lihat Laporan</a>
                        <?php } ?>
                    </div>
                </div>
                <!--mulai activity-->

                <!--Activity page end-->



            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>
    <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
    <!-- MORRIS CHART SCRIPTS -->
    <script src="assets/js/morris/raphael-2.1.0.min.js"></script>
    <script src="assets/js/morris/morris.js"></script>
    <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>


</body>

</html>
