<!DOCTYPE hkawl>
<hkawl lang="en">
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
    <?php include '../koneksi.php' ?>
    <?php
    $ambil = $koneksi->query("SELECT * FROM kaw JOIN user ON kaw.id_user=user.id_user WHERE id_kaw='$_GET[id_kaw]'");
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
        <title>SKAW</title>
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
                <!-- Main content -->
                <section class="content">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="card col-md-12">
                                <!-- /.card-header -->
                                <div class="card-header">
                                    <u>
                                        <h3 class="text-center"><b>Surat Keterangan Ahli Waris</b></h3><br>
                                    </u>
                                    <div class="row">
                                        <div class="col-md-1">
                                            <h5>Nama</h5>
                                            <h5>Alamat</h5>
                                            <h5>Keperluan</h5>
                                        </div>
                                        <div class="col-md-7">
                                            <h5>: &ensp;<?php echo $detail['nama']; ?></h5>
                                            <h5>: &ensp;<?php echo $detail['alamat']; ?></h5>
                                            <h5>: &ensp;<?php echo $detail['keperluan_surat_kaw']; ?></h5>
                                        </div>
                                        <div class="col-md-3">
                                            <b>
                                                <h5>Status Permohonan</h5>
                                            </b>
                                        </div><br>
                                        <div class="col-md-3">
                                            <form action="" method=" POST" id="verifikasi">
                                                <?php
                                                $id_kaw = $_GET['id_kaw'];
                                                $koneksi->query("SELECT * FROM kaw WHERE id_kaw= '$id_kaw'"); ?>
                                                <div class="form-group">
                                                    <?php if ($detail['status_kaw'] == NULL) : ?>
                                                        <label type="text" class="form-control" disabled>Belum Verifikasi
                                                        <?php else : ?>
                                                            <input type="text" class="form-control" value="<?php echo $detail['status_kaw']; ?>" disabled>
                                                        <?php endif ?>
                                                </div>
                                            </form>

                                            <form action="" method="Post">
                                                <div class="form-group">
                                                    <label for="">Status Permohonan</label>
                                                    <select name="status_kaw" id="" class="form-control">
                                                        <option selected="selected" disabled>-Pilih Status-</option>
                                                        <option value="Berkas Tidak Lengkap">Berkas Tidak Lengkap</option>
                                                        <option value="Berkas Tidak Valid">Berkas Tidak Valid</option>
                                                        <option value="Belum Terverifikasi">Belum Terverifikasi</option>
                                                        <option value="Verifikasi">Verifikasi</option>
                                                        <option value="Rekomendasi Selesai">Rekomendasi Selesai</option>
                                                    </select>
                                                </div>
                                                <button class="btn btn-info" name="ubah">Simpan</button>
                                                <a href="kaw.php" class="btn btn-warning">Kembali</a>
                                            </form>
                                        </div>
                                    </div><br><br>
                                    <?php
                                    $id = $_SESSION['adm']['id_admin'];
                                    if (isset($_POST['ubah'])) {
                                        $koneksi->query("UPDATE kaw SET
                                    status_kaw='$_POST[status_kaw]'
                                    WHERE id_kaw='$_GET[id_kaw]'");

                                        $koneksi->query("UPDATE pelayanan SET
                                    status_layanan='$_POST[status_kaw]',
                                    id_admin=$id
                                    WHERE id_pelayanan='$detail[id_pelayanan]'");

                                        echo "<meta http-equiv='refresh' content='1'>";
                                        echo "<script>alert('Status Telah Dirubah');</script>";
                                        echo "<script> location = 'kaw.php'; </script>";
                                    }
                                    ?>
                                </div>
                            </div>
                            <div class="card-body">
                                <table class="table table-bordered table-hover">
                                    <thead>
                                        <tr class="text-center">
                                            <th style="width: 10px">NO</th>
                                            <th>PERSYARATAN</th>
                                            <th>KETERANGAN</th>
                                            <th>AKSI</th>
                                            <th>STATUS PERMOHONAN</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Surat Pengantar dari RT/RW</td>
                                            <td class="text-center"> <?php if ($detail['pengantar_rt_rw'] == NULL) : ?>
                                                    <a class="btn btn-danger btn-sm" disabled>Tidak Ada</a>
                                                <?php else : ?>
                                                    <span class="btn btn-success btn-sm" disabled>Ada </span>
                                                <?php endif ?>
                                            </td>
                                            <td class="text-center">
                                                <?php if ($detail['pengantar_rt_rw'] == !NULL) : ?>
                                                    <a href="../berkas_kaw/<?php echo $detail['pengantar_rt_rw'] ?>" target="_blank" class="btn btn-info"><span class="fa fa-print"></span> Lihat</a>
                                                <?php endif ?>
                                            </td>
                                            <td class="text-center">
                                                <?php echo $detail['status_kaw']; ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Surat kematian/Akta surat kematian yang telah di legalisir</td>
                                            <td class="text-center"> <?php if ($detail['akta_kematian'] == NULL) : ?>
                                                    <a class="btn btn-danger btn-sm" disabled>Tidak Ada</a>
                                                <?php else : ?>
                                                    <span class="btn btn-success btn-sm" disabled>Ada </span>
                                                <?php endif ?>
                                            </td>
                                            <td class="text-center">
                                                <?php if ($detail['akta_kematian'] == !NULL) : ?>
                                                    <a href="../berkas_kaw/<?php echo $detail['akta_kematian'] ?>" target="_blank" class="btn btn-info"><span class="fa fa-print"></span> Lihat</a>
                                                <?php endif ?>
                                            </td>
                                            <td class="text-center">
                                                <?php echo $detail['status_kaw']; ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>Surat Akta Perkawinan/Akta Nikah yang di legalisir</td>
                                            <td class="text-center"> <?php if ($detail['fc_akta_nikah'] == NULL) : ?>
                                                    <a class="btn btn-danger btn-sm" disabled>Tidak Ada</a>
                                                <?php else : ?>
                                                    <span class="btn btn-success btn-sm" disabled>Ada </span>
                                                <?php endif ?>
                                            </td>
                                            <td class="text-center">
                                                <?php if ($detail['fc_akta_nikah'] == !NULL) : ?>
                                                    <a href="../berkas_kaw/<?php echo $detail['fc_akta_nikah'] ?>" target="_blank" class="btn btn-info"><span class="fa fa-print"></span> Lihat</a>
                                                <?php endif ?>
                                            </td>
                                            <td class="text-center">
                                                <?php echo $detail['status_kaw']; ?>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>4</td>
                                            <td>Akta Perceraian (Bila sudah bercerai)</td>
                                            <td class="text-center"> <?php if ($detail['fc_akta_cerai'] == NULL) : ?>
                                                    <a class="btn btn-danger btn-sm" disabled>Tidak Ada</a>
                                                <?php else : ?>
                                                    <span class="btn btn-success btn-sm" disabled>Ada </span>
                                                <?php endif ?>
                                            </td>
                                            <td class="text-center">
                                                <?php if ($detail['fc_akta_cerai'] == !NULL) : ?>
                                                    <a href="../berkas_kaw/<?php echo $detail['fc_akta_cerai'] ?>" target="_blank" class="btn btn-info"><span class="fa fa-print"></span> Lihat</a>
                                                <?php endif ?>
                                            </td>
                                            <td class="text-center">
                                                <?php echo $detail['status_kaw']; ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>5</td>
                                            <td>Akta kelahiran dari ahli waris dari 2 (orang saksi)</td>
                                            <td class="text-center"> <?php if ($detail['fc_akta_kelahiran_ahli_waris'] == NULL) : ?>
                                                    <a class="btn btn-danger btn-sm" disabled>Tidak Ada</a>
                                                <?php else : ?>
                                                    <span class="btn btn-success btn-sm" disabled>Ada </span>
                                                <?php endif ?>
                                            </td>
                                            <td class="text-center">
                                                <?php if ($detail['fc_akta_kelahiran_ahli_waris'] == !NULL) : ?>
                                                    <a href="../berkas_kaw/<?php echo $detail['fc_akta_kelahiran_ahli_waris'] ?>" target="_blank" class="btn btn-info"><span class="fa fa-print"></span> Lihat</a>
                                                <?php endif ?>
                                            </td>
                                            <td class="text-center">
                                                <?php echo $detail['status_kaw']; ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>6</td>
                                            <td>KTP (Kartu Tanda Penduduk) para ahli waris</td>
                                            <td class="text-center"> <?php if ($detail['ktp_ahli_waris'] == NULL) : ?>
                                                    <a class="btn btn-danger btn-sm" disabled>Tidak Ada</a>
                                                <?php else : ?>
                                                    <span class="btn btn-success btn-sm" disabled>Ada </span>
                                                <?php endif ?>
                                            </td>
                                            <td class="text-center">
                                                <?php if ($detail['ktp_ahli_waris'] == !NULL) : ?>
                                                    <a href="../berkas_kaw/<?php echo $detail['ktp_ahli_waris'] ?>" target="_blank" class="btn btn-info"><span class="fa fa-print"></span> Lihat</a>
                                                <?php endif ?>
                                            </td>
                                            <td class="text-center">
                                                <?php echo $detail['status_kaw']; ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>7</td>
                                            <td>Surat Pernyataan ahli waris dan kuasa ahli waris yang telah ditandatangani oleh para ahli waris serta diketahui oleh RT/RW dari 2 (dua) orang saksi dengan materai Rp 6.000</td>
                                            <td class="text-center"> <?php if ($detail['surat_pernyataan_6000'] == NULL) : ?>
                                                    <a class="btn btn-danger btn-sm" disabled>Tidak Ada</a>
                                                <?php else : ?>
                                                    <span class="btn btn-success btn-sm" disabled>Ada </span>
                                                <?php endif ?>
                                            </td>
                                            <td class="text-center">
                                                <?php if ($detail['surat_pernyataan_6000'] == !NULL) : ?>
                                                    <a href="../berkas_kaw/<?php echo $detail['surat_pernyataan_6000'] ?>" target="_blank" class="btn btn-info"><span class="fa fa-print"></span> Lihat</a>
                                                <?php endif ?>
                                            </td>
                                            <td class="text-center">
                                                <?php echo $detail['status_kaw']; ?>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table><br>
                                <div class="row">
                                    <div class="col-lg-4 ">
                                        <a href="kaw.php" class="btn btn-secondary">KEMBALI</a>
                                        <?php if ($detail['status_kaw'] == "Verifikasi") : ?>
                                            <a href="rekomendasi_kaw.php?id_kaw=<?php echo $detail['id_kaw'] ?>" class="btn btn-success" name="cetak rekomendasi_kaw" target="_blank">CETAK REKOMENDASI</a>
                                        <?php endif ?>
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
                                    <select name="status_kaw" id="" class="form-control">
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
        <?php include '../template/footer.php' ?>

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

</hkawl>