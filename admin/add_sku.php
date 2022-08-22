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
    <title>SKU</title>
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
                                <b>Tambah SKU Baru</b>
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
                                            $('#id_user').val(obj.id_user)
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

                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label for=""><b>*Nama Usaha</b></label>
                                        <input type="text" class="form-control select2" name="nama_usaha" required oninvalid="this.setCustomValidity('Nama Usaha Harus Anda Input!')" oninput="setCustomValidity('')">
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label for=""><b>*Jenis Usaha</b></label>
                                        <input type="text" class="form-control select2" name="jenis_usaha" required oninvalid="this.setCustomValidity('Jenis Usaha Harus Anda Input!')" oninput="setCustomValidity('')">
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label for=""><b>*Status Tempat</b></label>
                                        <input type="text" class="form-control select2" name="status_tempat" required oninvalid="this.setCustomValidity('Status Tempat Harus Anda Input!')" oninput="setCustomValidity('')">
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label for=""><b>*Luas Tempat</b></label>
                                        <input type="text" class="form-control select2" name="luas_tempat" required oninvalid="this.setCustomValidity('Luas Tempat Harus Anda Input!')" oninput="setCustomValidity('')">
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
                                <input type="hidden" name="id_p" class="form-control" value="sku-<?php echo $hasil_1; ?>">
                                <input type="hidden" name="nama_p" class="form-control" value="2">

                                <div class="row">
                                    <div class="form-group col-md-6" data-validate="Name is required">
                                        <label for=""><b>*Alamat Usaha</b></label>
                                        <textarea type="text" name="alamat_usaha" class="form-control" value="" placeholder="Alamat Usaha" required oninvalid="this.setCustomValidity('Alamat Usaha Harus Anda Input!')" oninput="setCustomValidity('')"></textarea>
                                    </div>

                                    <div class="form-group col-md-6" data-validate="Name is required">
                                        <label for=""><b>*Surat ini dibuat untuk keperluan</b></label>
                                        <textarea type="text" name="keperluan_surat_sku" class="form-control" value="" placeholder="keperluan surat" required oninvalid="this.setCustomValidity('Keperluan Surat Harus Anda Input!')" oninput="setCustomValidity('')"></textarea>
                                    </div>
                                </div>
                                <hr>
                                <label for="">Berkas</label>
                                <div class="row">
                                    <div class="form-group col-md-4" data-validate="Message is ">
                                        <label for=""><b>*Blanko Permohonan SKU</b></label><br>
                                        <input type="file" name="blanko_sku" class="form-control">
                                    </div>

                                    <div class="form-group col-md-4" data-validate="Message is ">
                                        <label for=""><b>*Surat Pernyataan SKU</b></label><br>
                                        <input type="file" name="surat_pernyataan_sku" class="form-control" value="nama">
                                    </div>

                                    <div class="form-group col-md-4" data-validate="Message is ">
                                        <label for=""><b>*Surat Pengantar RT/RW</b></label><br>
                                        <input type="file" name="foto_sp_rtrw" class="form-control" value="nama">
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="form-group col-md-6" data-validate="Message is ">
                                        <label for=""><b>*Tanda Lunas PBB Tahun Berjalan</b></label><br>
                                        <input type="file" name="foto_lunas_pbb" class="form-control" value="nama">
                                    </div>

                                    <div class="form-group col-md-6" data-validate="Message is ">
                                        <label for=""><b>*Perjanjian Sewa (jika Ada)</b></label><br>
                                        <input type="file" name="foto_perjanjian_sewa" value="nama" class="form-control">
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

                                $blanko_sku = $_FILES['blanko_sku']['name'];
                                $sp_sku = $_FILES['surat_pernyataan_sku']['name'];
                                $rtrw = $_FILES['foto_sp_rtrw']['name'];
                                $pbb = $_FILES['foto_lunas_pbb']['name'];
                                $sewa = $_FILES['foto_perjanjian_sewa']['name'];


                                $lokasi1 = $_FILES['blanko_sku']['tmp_name'];
                                $lokasi2 = $_FILES['surat_pernyataan_sku']['tmp_name'];
                                $lokasi3 = $_FILES['foto_sp_rtrw']['tmp_name'];
                                $lokasi4 = $_FILES['foto_lunas_pbb']['tmp_name'];
                                $lokasi5 = $_FILES['foto_perjanjian_sewa']['tmp_name'];

                                move_uploaded_file($lokasi1, "../berkas_sku/$blanko_sku");
                                move_uploaded_file($lokasi2, "../berkas_sku/$sp_sku");
                                move_uploaded_file($lokasi3, "../berkas_sku/$rtrw");
                                move_uploaded_file($lokasi4, "../berkas_sku/$pbb");
                                move_uploaded_file($lokasi5, "../berkas_sku/$sewa");

                                $koneksi->query("INSERT INTO sku (id_pelayanan, keperluan_surat_sku, tanggal_sku, id_user,
		nama_usaha, jenis_usaha, luas_tempat, status_tempat, alamat_usaha, foto_lunas_pbb, blanko_sku, surat_pernyataan_sku, foto_perjanjian_sewa, foto_sp_rtrw, status_sku)
		VALUES (
		'$_POST[id_p]',
		'$_POST[keperluan_surat_sku]',
		'$_POST[tanggal_sku]',
		'$_POST[id_user]',
		'$_POST[nama_usaha]',
		'$_POST[jenis_usaha]',
		'$_POST[luas_tempat]',
		'$_POST[status_tempat]',
		'$_POST[alamat_usaha]','$pbb','$blanko_sku','$sp_sku','$sewa','$rtrw','Menunggu Konfirmasi')");

                                echo "<meta http-equiv='refresh' content='1'>";
                                echo "<script>alert('Data Tersimpan');</script>";
                                echo "<script> location = 'sku.php'; </script>";
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