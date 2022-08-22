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
    <title>SKK</title>
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
                                <b>Tambah SKK Baru</b>
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
                                            <option selected>* Pilih</option>
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
                                            $('#pekerjaan').val(obj.pekerjaan);
                                        });
                                    }
                                </script>

                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label for=""><b>*Nama Perwakilan dari yang Meninggal</b></label>
                                        <input type="text" id="nama" name="nama" class="form-control" style="pointer-events: none;">
                                    </div>


                                    <div class="form-group col-md-6">
                                        <label for=""><b>*Jenis Kelamin</b></label>
                                        <input type="text" id="jeniskelamin" name="jk" class="form-control" style="pointer-events: none;">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label for=""><b>*Nama yang Meninggal</b></label>
                                        <input type="text" name="yg_meninggal" class="form-control">
                                    </div>


                                    <div class="form-group col-md-6">
                                        <label for=""><b>*Jenis Kelamin</b></label>
                                        <select name="jk_m" class="form-control">
                                            <option value="" disabled selected>*Pilih Jenis Kelamin</option>
                                            <option value="Laki-Laki">Laki-Laki</option>
                                            <option value="Perempuan">Perempuan</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label for=""><b>*Umur yang Meninggal (tahun)</b></label>
                                        <input type="number" name="umur" class="form-control">
                                    </div>


                                    <div class="form-group col-md-6">
                                        <label for=""><b>*Tanggal Meniggal</b></label>
                                        <input type="date" name="tanggal_meninggal" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group" data-validate="Name is required">
                                    <label for=""><b>*Surat ini dibuat untuk keperluan</b></label>
                                    <textarea type="text" name="keperluan_surat_sku" class="form-control" value="" placeholder="keperluan surat" required oninvalid="this.setCustomValidity('Keperluan Surat Harus Anda Input!')" oninput="setCustomValidity('')"></textarea>
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
                                <input type="hidden" name="id_p" class="form-control" value="kk-<?php echo $hasil_2; ?>">
                                <input type="hidden" name="nama_p" class="form-control" value="9">

                                <hr>
                                <label for="">Berkas</label>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group" data-validate="Message is required">
                                            <label for=""><b>*Surat pengantar dari RT dan RW</b></label><br>
                                            <input type="file" name="pengantar_rt_rw" value="nama" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group" data-validate="Message is required">
                                            <label for=""><b>*KTP Saksi 1</b></label><br>
                                            <input type="file" name="ktp_saksi_1" value="nama" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group" data-validate="Message is required">
                                            <label for=""><b>*KTP Saksi 2</b></label><br>
                                            <input type="file" name="ktp_saksi_2" value="nama" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group" data-validate="Message is required">
                                            <label for=""><b>*Surat kematian dari rumah sakit ( jika meninggal di rumah sakit )</b></label><br>
                                            <input type="file" name="surat_kematian_rs" value="nama" class="form-control">
                                        </div>
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

                                $pengantar_rt_rw = $_FILES['pengantar_rt_rw']['name'];
                                $ktp_saksi_1 = $_FILES['ktp_saksi_1']['name'];
                                $ktp_saksi_2 = $_FILES['ktp_saksi_2']['name'];
                                $surat_kematian_rs = $_FILES['surat_kematian_rs']['name'];

                                $lokasi1 = $_FILES['pengantar_rt_rw']['tmp_name'];
                                $lokasi2 = $_FILES['ktp_saksi_1']['tmp_name'];
                                $lokasi3 = $_FILES['ktp_saksi_2']['tmp_name'];
                                $lokasi4 = $_FILES['surat_kematian_rs']['tmp_name'];

                                move_uploaded_file($lokasi1, "../berkas_kk/$pengantar_rt_rw");
                                move_uploaded_file($lokasi2, "../berkas_kk/$ktp_saksi_1");
                                move_uploaded_file($lokasi3, "../berkas_kk/$ktp_saksi_2");
                                move_uploaded_file($lokasi4, "../berkas_kk/$surat_kematian_rs");

                                $koneksi->query("INSERT INTO kk (id_pelayanan, keperluan_surat_kk, tanggal_kk, id_user, yg_meninggal, jk, umur, tanggal_meninggal,
                                pengantar_rt_rw, ktp_saksi_1, ktp_saksi_2, surat_kematian_rs, status_kk)
                                VALUES (
                                '$_POST[id_p]',
                                '$_POST[keperluan_surat_sku]',
                                '$_POST[tanggal_sku]',
                                '$_POST[id_user]',
                                '$_POST[yg_meninggal]',
                                '$_POST[jk_m]',
                                '$_POST[umur]',
                                '$_POST[tanggal_meninggal]',
                                '$pengantar_rt_rw',
                                '$ktp_saksi_1',
                                '$ktp_saksi_2',
                                '$surat_kematian_rs',
                                'Menunggu Konfirmasi')");

                                echo "<meta http-equiv='refresh' content='1'>";
                                echo "<script>alert('Data Tersimpan');</script>";
                                echo "<script> location = 'kk.php'; </script>";
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