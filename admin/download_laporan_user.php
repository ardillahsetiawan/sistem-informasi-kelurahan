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
    </center>
    <hr>
    </td>
    </tr>
    </table>
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
                                    <h5 class="text-center"><b>Laporan Total User</b></h5><br>
                                </u>
                            </div>
                            <div class="card-body">
                                <div class="card-body">
                                    <table class="table table-bordered">
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

                                        $data = mysqli_query($koneksi, "SELECT * FROM user");

                                        ?>
                                        <?php $nomor = 1;
                                        //jika tidak ada tanggal dari dan tanggal ke maka tampilkan seluruh data

                                        ?>

                                        <tbody>
                                            <?php while ($d = mysqli_fetch_array($data)) { ?>
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
                                </div><br>
                            </div>
                            <!-- /.card-body -->
                        </div>
                    </div>
                </div>
                <table width="1050">
                    <tr>
                        <td width="700"></td>
                        <td class="text-right">
                            Kuala Kapuas, <?php function tgl_indo($tanggal)
                                            {
                                                $bulan = array(
                                                    1 =>   'Januari',
                                                    'Februari',
                                                    'Maret',
                                                    'April',
                                                    'Mei',
                                                    'Juni',
                                                    'Juli',
                                                    'Agustus',
                                                    'September',
                                                    'Oktober',
                                                    'November',
                                                    'Desember'
                                                );
                                                $pecahkan = explode('-', $tanggal);

                                                // variabel pecahkan 0 = tanggal
                                                // variabel pecahkan 1 = bulan
                                                // variabel pecahkan 2 = tahun

                                                return $pecahkan[2] . ' ' . $bulan[(int)$pecahkan[1]] . ' ' . $pecahkan[0];
                                            }

                                            echo tgl_indo(date('Y-m-d')); ?>
                        </td>
                    </tr>
                    <tr>
                        <td width="80"></td>
                        <td colspan="2" width="400">Mengetahui,</td>
                    </tr>
                    <tr>
                        <td width="80"></td>
                        <td text-center="text-center" width="300">Lurah Selat Hulu Kuala Kapuas</td>
                    </tr>
                    <tr height="100">
                        <td width="80"></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td width="80"></td>
                        <td class="text-center" width="300">JAINAL ARIFIN, S.Sos</td>
                    </tr>
                    <tr>
                        <td width="80"></td>
                        <td class="text-center" width="300">NIP. 197110130 199203 1 003</td>
                    </tr>
                </table>
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