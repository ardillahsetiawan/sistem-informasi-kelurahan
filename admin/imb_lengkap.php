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
$ambil = $koneksi->query("SELECT * FROM imb JOIN user ON imb.id_user=user.id_user WHERE id_imb ='$_GET[id_imb]'");
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
                                        <h3 class="text-center"><b>IZIN MENDIRIKAN BANGUNAN</b></h3><br><br>
                                    </u>
                                    <div class="row">
                                        <div class="col-md-1">
                                            <h5>Nama</h5>
                                            <h5>Alamat</h5>
                                            <h5>Bangunan</h5>
                                        </div>
                                        <div class="col-md-7">
                                            <h5>: &ensp;<?php echo $detail['nama']; ?></h5>
                                            <h5>: &ensp;<?php echo $detail['alamat']; ?></h5>
                                            <h5>: &ensp;<?php echo $detail['jenis_bangunan']; ?></h5>
                                        </div>
                                        <div class="col-md-3">
                                            <b>
                                                <h5>Status Permohonan</h5>
                                            </b>
                                        </div>
                                        <div class="col-md-3">
                                            <form action="" method=" POST" id="verifikasi">
                                                <?php
                                                $id_imb = $_GET['id_imb'];
                                                $koneksi->query("SELECT * FROM imb WHERE id_imb= '$id_imb'"); ?>
                                                <div class="form-group">
                                                    <?php if ($detail['status_imb'] == NULL) : ?>
                                                        <label type="text" class="form-control" disabled>Belum Verifikasi
                                                        <?php else : ?>
                                                            <input type="text" class="form-control" value="<?php echo $detail['status_imb']; ?>" disabled>
                                                        <?php endif ?>
                                                </div>
                                            </form>
                                            <form action="" method="Post">
                                                <div class="form-group">
                                                    <label for="">Status Permohonan</label>
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
                                                <a href="imb.php" class="btn btn-warning">Kembali</a>
                                            </form>
                                        </div>
                                        <?php
                                        $id = $_SESSION['adm']['id_admin'];
                                        if (isset($_POST['ubah'])) {
                                            $koneksi->query("UPDATE imb JOIN pelayanan ON pelayanan.id_pelayanan=imb.id_pelayanan SET
                                            status_imb='$_POST[status_imb]',
                                            status_layanan='$_POST[status_imb]',
                                            id_admin= $id
                                            WHERE id_imb='$_GET[id_imb]'");

                                            echo "<meta http-equiv='refresh' content='1'>";
                                            echo "<script> location = 'imb.php'; </script>";
                                        }
                                        ?>
                                    </div>
                                    <br><br>
                                    <div class="card-body">
                                        <div class="card-body table-responsive p-0" style="height: 650px;">
                                            <table class="table table-head-fixed table-bordered table-hover text-nowrap">
                                                <thead>
                                                    <tr>
                                                        <th style="width: 10px">NO</th>
                                                        <th>PERSYARATAN</th>
                                                        <th>KETERANGAN</th>
                                                        <th>AKSI</th>
                                                        <th>STATUS</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td align="center">1</td>
                                                        <td>Pengisian Blangko Permohonan</td>
                                                        <td class="text-center"> <?php if ($detail['blanko_imb'] == NULL) : ?>
                                                                <a class="btn btn-danger btn-sm" disabled>Tidak Ada</a>
                                                            <?php else : ?>
                                                                <span class="btn btn-success btn-sm" disabled>Ada </span>
                                                            <?php endif ?>
                                                        </td>
                                                        <td class="text-center">
                                                            <?php if ($detail['blanko_imb'] == !NULL) : ?>
                                                                <a href="../berkas_imb/<?php echo $detail['blanko_imb'] ?>" target="_blank" class="btn btn-info"><span class="fa fa-print"></span> Lihat</a>
                                                            <?php endif ?>
                                                        </td>
                                                        <td class="text-center">
                                                            <?php echo $detail['status_imb']; ?>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td align="center">2</td>
                                                        <td>Surat Sewa/pernyataan pemilik tanah (apabila bukan milik sendiri)</td>
                                                        <td class="text-center"> <?php if ($detail['sp_pemilik'] == NULL) : ?>
                                                                <a class="btn btn-danger btn-sm" disabled>Tidak Ada</a>
                                                            <?php else : ?>
                                                                <span class="btn btn-success btn-sm" disabled>Ada </span>
                                                            <?php endif ?>
                                                        </td>
                                                        <td class="text-center">
                                                            <?php if ($detail['sp_pemilik'] == !NULL) : ?>
                                                                <a href="../berkas_imb/<?php echo $detail['sp_pemilik'] ?>" target="_blank" class="btn btn-info"><span class="fa fa-print"></span> Lihat</a>
                                                            <?php endif ?>
                                                        </td>
                                                        <td class="text-center">
                                                            <?php echo $detail['status_imb']; ?>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td align="center">3</td>
                                                        <td>Surat Kuasa (apabila yang mengurus bukan Pemohon Langsung)</td>
                                                        <td class="text-center"> <?php if ($detail['surat_kuasa'] == NULL) : ?>
                                                                <a class="btn btn-danger btn-sm" disabled>Tidak Ada</a>
                                                            <?php else : ?>
                                                                <span class="btn btn-success btn-sm" disabled>Ada </span>
                                                            <?php endif ?>
                                                        </td>
                                                        <td class="text-center">
                                                            <?php if ($detail['surat_kuasa'] == !NULL) : ?>
                                                                <a href="../berkas_imb/<?php echo $detail['surat_kuasa'] ?>" target="_blank" class="btn btn-info"><span class="fa fa-print"></span> Lihat</a>
                                                            <?php endif ?>
                                                        </td>
                                                        <td class="text-center">
                                                            <?php echo $detail['status_imb']; ?>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td align="center">4</td>
                                                        <td>Surat Pernyataan tanah tidak dalam sengketa dan seperbatasan</td>
                                                        <td class="text-center"> <?php if ($detail['sp_tidaksengketa'] == NULL) : ?>
                                                                <a class="btn btn-danger btn-sm" disabled>Tidak Ada</a>
                                                            <?php else : ?>
                                                                <span class="btn btn-success btn-sm" disabled>Ada </span>
                                                            <?php endif ?>
                                                        </td>
                                                        <td class="text-center">
                                                            <?php if ($detail['sp_tidaksengketa'] == !NULL) : ?>
                                                                <a href="../berkas_imb/<?php echo $detail['sp_tidaksengketa'] ?>" target="_blank" class="btn btn-info"><span class="fa fa-print"></span> Lihat</a>
                                                            <?php endif ?>
                                                        </td>
                                                        <td class="text-center">
                                                            <?php echo $detail['status_imb']; ?>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td align="center">5</td>
                                                        <td>Pengantar dari Ketua RT</td>
                                                        <td class="text-center"> <?php if ($detail['pengantar_rt'] == NULL) : ?>
                                                                <a class="btn btn-danger btn-sm" disabled>Tidak Ada</a>
                                                            <?php else : ?>
                                                                <span class="btn btn-success btn-sm" disabled>Ada </span>
                                                            <?php endif ?>
                                                        </td>
                                                        <td class="text-center">
                                                            <?php if ($detail['pengantar_rt'] == !NULL) : ?>
                                                                <a href="../berkas_imb/<?php echo $detail['pengantar_rt'] ?>" target="_blank" class="btn btn-info"><span class="fa fa-print"></span> Lihat</a>
                                                            <?php endif ?>
                                                        </td>
                                                        <td class="text-center">
                                                            <?php echo $detail['status_imb']; ?>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td align="center">6</td>
                                                        <td>Fotocopy KTP yang masih berlaku</td>
                                                        <td class="text-center"> <?php if ($detail['foto_ktp'] == NULL) : ?>
                                                                <a class="btn btn-danger btn-sm" disabled>Tidak Ada</a>
                                                            <?php else : ?>
                                                                <span class="btn btn-success btn-sm" disabled>Ada </span>
                                                            <?php endif ?>
                                                        </td>
                                                        <td class="text-center">
                                                            <?php if ($detail['foto_ktp'] == !NULL) : ?>
                                                                <a href="../berkas_user/<?php echo $detail['foto_ktp'] ?>" target="_blank" class="btn btn-info"><span class="fa fa-print"></span> Lihat</a>
                                                            <?php endif ?>
                                                        </td>
                                                        <td class="text-center">
                                                            <?php echo $detail['status_imb']; ?>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td align="center">7</td>
                                                        <td>Surat Pernyataan Garis Sempadan Samping Bangunan</td>
                                                        <td class="text-center"> <?php if ($detail['sp_garis'] == NULL) : ?>
                                                                <a class="btn btn-danger btn-sm" disabled>Tidak Ada</a>
                                                            <?php else : ?>
                                                                <span class="btn btn-success btn-sm" disabled>Ada </span>
                                                            <?php endif ?>
                                                        </td>
                                                        <td class="text-center">
                                                            <?php if ($detail['sp_garis'] == !NULL) : ?>
                                                                <a href="../berkas_imb/<?php echo $detail['sp_garis'] ?>" target="_blank" class="btn btn-info"><span class="fa fa-print"></span> Lihat</a>
                                                            <?php endif ?>
                                                        </td>
                                                        <td class="text-center">
                                                            <?php echo $detail['status_imb']; ?>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td align="center">8</td>
                                                        <td>Fotocopy Sertifikat/Segel/Sporadik</td>
                                                        <td class="text-center"> <?php if ($detail['sertifikat'] == NULL) : ?>
                                                                <a class="btn btn-danger btn-sm" disabled>Tidak Ada</a>
                                                            <?php else : ?>
                                                                <span class="btn btn-success btn-sm" disabled>Ada </span>
                                                            <?php endif ?>
                                                        </td>
                                                        <td class="text-center">
                                                            <?php if ($detail['sertifikat'] == !NULL) : ?>
                                                                <a href="../berkas_imb/<?php echo $detail['sertifikat'] ?>" target="_blank" class="btn btn-info"><span class="fa fa-print"></span> Lihat</a>
                                                            <?php endif ?>
                                                        </td>
                                                        <td class="text-center">
                                                            <?php echo $detail['status_imb']; ?>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td align="center">9</td>
                                                        <td>Fotocopy Tanda Lunas PBB Tahun Terakhir</td>
                                                        <td class="text-center"> <?php if ($detail['lunas_pbb'] == NULL) : ?>
                                                                <a class="btn btn-danger btn-sm" disabled>Tidak Ada</a>
                                                            <?php else : ?>
                                                                <span class="btn btn-success btn-sm" disabled>Ada </span>
                                                            <?php endif ?>
                                                        </td>
                                                        <td class="text-center">
                                                            <?php if ($detail['lunas_pbb'] == !NULL) : ?>
                                                                <a href="../berkas_imb/<?php echo $detail['lunas_pbb'] ?>" target="_blank" class="btn btn-info"><span class="fa fa-print"></span> Lihat</a>
                                                            <?php endif ?>
                                                        </td>
                                                        <td class="text-center">
                                                            <?php echo $detail['status_imb']; ?>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td align="center">10</td>
                                                        <td>Berita acara Pengecekan lapangan</td>
                                                        <td class="text-center"> <?php if ($detail['ba_pengecekan'] == NULL) : ?>
                                                                <a class="btn btn-danger btn-sm" disabled>Tidak Ada</a>
                                                            <?php else : ?>
                                                                <span class="btn btn-success btn-sm" disabled>Ada </span>
                                                            <?php endif ?>
                                                        </td>
                                                        <td class="text-center">
                                                            <?php if ($detail['ba_pengecekan'] == !NULL) : ?>
                                                                <a href="../berkas_imb/<?php echo $detail['ba_pengecekan'] ?>" target="_blank" class="btn btn-info"><span class="fa fa-print"></span> Lihat</a>
                                                            <?php endif ?>
                                                        </td>
                                                        <td class="text-center">
                                                            <?php echo $detail['status_imb']; ?>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td align="center">11</td>
                                                        <td>Checklist IMB</td>
                                                        <td class="text-center"> <?php if ($detail['checklis_imb'] == NULL) : ?>
                                                                <a class="btn btn-danger btn-sm" disabled>Tidak Ada</a>
                                                            <?php else : ?>
                                                                <span class="btn btn-success btn-sm" disabled>Ada </span>
                                                            <?php endif ?>
                                                        </td>
                                                        <td class="text-center">
                                                            <?php if ($detail['checklis_imb'] == !NULL) : ?>
                                                                <a href="../berkas_imb/<?php echo $detail['checklis_imb'] ?>" target="_blank" class="btn btn-info"><span class="fa fa-print"></span> Lihat</a>
                                                            <?php endif ?>
                                                        </td>
                                                        <td class="text-center">
                                                            <?php echo $detail['status_imb']; ?>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-4 ">
                                                <a href="imb.php" class="btn btn-secondary">KEMBALI</a>
                                                <a href="rekomendasi_imb.php?id_imb=<?php echo $detail['id_imb'] ?>" class="btn btn-success" name="cetak rekomendasi_imb">CETAK REKOMENDASI</a>
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