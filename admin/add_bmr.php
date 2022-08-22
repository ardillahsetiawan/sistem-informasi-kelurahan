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
<a href="../berkas_sku"></a>

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
    <title>BMR</title>
</head>

<body class="hold-transition sidebar-mini template-fixed">
    <?php include 'navbar.php'; ?>
    <!-- /. NAV SIDE  -->
    <div id="page-wrapper">
        <div id="page-inner">


            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <div class="container-contact2">
                        <div class="wrap-contact2">

                            <h3 class="text-center">
                                <b>Tambah SKBMR Baru</b>
                            </h3>

                            <form method="POST" enctype="multipart/form-data">
                                <div class="row">
                                    <div class="form-group col-md-6" data-validate="Message is required">
                                        <label for=""><b>*Tanggal Pembuatan Surat </b></label>
                                        <input type="date" name="tanggal_sku" class="form-control" required oninvalid="this.setCustomValidity('Tanggal Harus Anda Input!')" oninput="setCustomValidity('')" value="<?php echo date('Y-m-d') ?>">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for=""><b>*NIK</b></label>
                                        <select onclick="isi_otomatis()" id="nik" class="form-control">
                                            <option value="2445" selected>* Pilih</option>
                                            <?php
                                            $sql = $koneksi->query("SELECT * FROM user");
                                            while ($user = mysqli_fetch_assoc($sql)) {
                                            ?>
                                                <option value="<?php echo $user['id_user'] ?>"><?php echo $user['id_user'] ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                </div>
                                <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
                                <script type="text/javascript">
                                    function isi_otomatis() {
                                        var nik = $("#nik").val();
                                        $.ajax({
                                            url: 'add_sku_ajax.php',
                                            data: "nik=" + nik,
                                        }).success(function(data) {
                                            var json = data,
                                                obj = JSON.parse(json);
                                            $('#nama').val(obj.nama);
                                            $('#jeniskelamin').val(obj.jeniskelamin);
                                            $('#id_user').val(obj.id_user);
                                            $('#tanggallahir').val(obj.tanggallahir);
                                            $('#tempatlahir').val(obj.tempatlahir);
                                            $('#pendidikan').val(obj.pendidikan);
                                            $('#agama').val(obj.agama);
                                            $('#pekerjaan').val(obj.pekerjaan);
                                            $('#alamat').val(obj.alamat);
                                        });
                                    }
                                </script>

                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label for=""><b>*Nama</b></label>
                                        <input type="text" id="nama" name="nama" class="form-control" style="pointer-events: none;">
                                    </div>


                                    <div class="form-group col-md-6">
                                        <label for=""><b>*Jenis Kelamin</b></label>
                                        <input type="text" id="jeniskelamin" name="jk" class="form-control" style="pointer-events: none;">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label for=""><b>*Tempat Lahir</b></label>
                                            <input type="text" class="form-control" name="tempat_lahir" id="tempatlahir" style="pointer-events: none;">
                                        </div>
                                        <div class="col-md-6">
                                            <label for=""><b>*Tanggal Lahir</b></label>
                                            <input type="date" class="form-control" name="tanggal_lahir" id="tanggallahir" style="pointer-events: none;">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label for=""><b>*Pendidikan Terakhir</b></label>
                                        <input type="text" id="pendidikan" class="form-control" style="pointer-events: none;">
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label for=""><b>*Agama</b></label>
                                        <input type="text" id="agama" class="form-control" style="pointer-events: none;">
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="form-group col-md-6" data-validate="Name is required">
                                        <label for=""><b>*Pekerjaan</b></label>
                                        <input type="text" class="form-control" id="pekerjaan" style="pointer-events: none;">
                                    </div>

                                    <div class="form-group col-md-6" data-validate="Name is required">
                                        <label for=""><b>*Alamat</b></label>
                                        <input type="text" class="form-control" id="alamat" style="pointer-events: none;">
                                    </div>
                                </div>



                                <?php
                                function acak($panjang)
                                {
                                    $karakter = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz123456789';
                                    $string = '';
                                    for ($i = 0; $i < $panjang; $i++) {
                                        $pos = rand(0, strlen($karakter) - 1);
                                        $string .= $karakter{
                                            $pos};
                                    }
                                    return $string;
                                }
                                //cara memanggilnya
                                $hasil_1 = acak(5);
                                $hasil_2 = acak(7);
                                ?>

                                <input type="hidden" name="id_user" id="id_user" class="form-control">
                                <input type="hidden" name="id_p" class="form-control" value="skbmr-<?php echo $hasil_1; ?>">
                                <input type="hidden" name="nama_p" class="form-control" value="1">

                                <div class="row">
                                    <div class="form-group col-md-12" data-validate="Name is required">
                                        <label for=""><b>*Surat ini dibuat untuk keperluan</b></label>
                                        <textarea type="text" name="keperluan_surat_bmr" class="form-control" value="" placeholder="keperluan surat" required oninvalid="this.setCustomValidity('Keperluan Surat Harus Anda Input!')" oninput="setCustomValidity('')"></textarea>
                                    </div>
                                </div>
                                <hr>
                                <label for="">Berkas</label>
                                <div class="row">
                                    <div class="form-group col-md-6" data-validate="Message is required">
                                        <label for=""><b>*Upload Surat Pernyataan</b></label><br>
                                        <input type="file" name="surat_pernyataan_bmr" value="" class="form-control" required>
                                    </div>
                                    <div class="form-group col-md-6" data-validate="Message is required">
                                        <label for=""><b>*Upload Surat Pengantar RT/RW</b></label><br>
                                        <input type="file" name="pengantar_rt_rw" value="" class="form-control" required>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="form-group col-md-6" data-validate="Message is required">
                                        <label for=""><b>*Upload Foto KTP</b></label><br>
                                        <input type="file" name="ktp" value="" class="form-control" required>
                                    </div>
                                    <div class="form-group col-md-6" data-validate="Message is required">
                                        <label for=""><b>*Upload Foto Kartu Keluarga</b></label><br>
                                        <input type="file" name="kk" value="" class="form-control" required>
                                    </div>
                                </div>
                                <div class="container-contact2-form-btn text-right">
                                    <div class="form-group"><br>
                                        <button class="btn btn-info" name="simpan" onclick="return Confirm('Simpan Permohonan ?')">Simpan</button>
                                        <button class="btn btn-warning" type="reset">Bersihkan</button>
                                    </div>
                                </div>
                            </form>

                            <?php
                            if (isset($_POST['simpan'])) {


                                $koneksi->query("INSERT INTO pelayanan (id_pelayanan, id_nama_pelayanan, id_user, tanggal_layanan)
                                VALUES ('$_POST[id_p]', '$_POST[nama_p]', '$_POST[id_user]', '$_POST[tanggal_sku]')");

                                $namasurat = $_FILES['surat_pernyataan_bmr']['name'];
                                $pengantar = $_FILES['pengantar_rt_rw']['name'];
                                $ktp = $_FILES['ktp']['name'];
                                $kk = $_FILES['kk']['name'];


                                $lokasi1 = $_FILES['surat_pernyataan_bmr']['tmp_name'];
                                $lokasi2 = $_FILES['pengantar_rt_rw']['tmp_name'];
                                $lokasi3 = $_FILES['ktp']['tmp_name'];
                                $lokasi4 = $_FILES['kk']['tmp_name'];

                                move_uploaded_file($lokasi1, "../berkas_bmr/$namasurat");
                                move_uploaded_file($lokasi2, "../berkas_bmr/$pengantar");
                                move_uploaded_file($lokasi3, "../berkas_bmr/$ktp");
                                move_uploaded_file($lokasi4, "../berkas_bmr/$kk");

                                $koneksi->query("INSERT INTO bmr (id_pelayanan, keperluan_surat_bmr, tanggal_bmr, id_user,surat_pernyataan_bmr,pengantar_rt_rw,ktp,kk,status_bmr)
		                        VALUES ('$_POST[id_p]','$_POST[keperluan_surat_bmr]','$_POST[tanggal_sku]', '$_POST[id_user]','$namasurat','$pengantar','$ktp','$kk','Menunggu Konfirmasi')");
                                echo "<meta http-equiv='refresh' content='1'>";
                                echo "<script>alert('Data Tersimpan');</script>";
                                echo "<script> location = 'bmr.php'; </script>";
                            }

                            ?>
                        </div>
                    </div>
                </div>
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        <!-- Control Sidebar -->
        <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <?php include '../template/js.php'; ?>
</body>

</html>