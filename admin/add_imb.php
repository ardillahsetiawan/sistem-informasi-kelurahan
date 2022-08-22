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
    <title>IMB</title>
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
                                <b>Tambah IMB Baru</b>
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
                                        <label for=""><b>*Jenis Bangunan</b></label>
                                        <input type="text" class="form-control select2" name="jenis_bangunan" required oninvalid="this.setCustomValidity('Jenis Bangunan Harus Anda Input!')" oninput="setCustomValidity('')">
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label for=""><b>*Ukuran</b></label>
                                        <input type="number" class="form-control select2" max="1200" name="ukuran" required oninvalid="this.setCustomValidity('Ukuran Bangunan Harus Anda Input!')" oninput="setCustomValidity('')">
                                    </div>

                                </div>

                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label for=""><b>*Alamat Bangunan</b></label>
                                        <textarea type="text" class="form-control" name="lokasi" required oninvalid="this.setCustomValidity('Alamat Harus Anda Input!')" oninput="setCustomValidity('')"></textarea>
                                    </div>
                                    <div class="form-group col-md-6" data-validate="Name is required">
                                        <label for=""><b>*Surat ini dibuat untuk keperluan</b></label>
                                        <textarea type="text" name="keperluan_surat_imb" class="form-control" value="" placeholder="keperluan surat" required oninvalid="this.setCustomValidity('Keperluan Surat Harus Anda Input!')" oninput="setCustomValidity('')"></textarea>
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
                                <input type="hidden" name="id_p" class="form-control" value="imb-<?php echo $hasil_1; ?>">
                                <input type="hidden" name="nama_p" class="form-control" value="3">

                                <hr>
                                <label for="">Berkas</label>
                                <div class="row">
                                    <div class="form-group col-md-6" data-validate="Message is required">
                                        <label for=""><b>*Blank Permohonan IMB</b></label>
                                        <input type="file" name="blanko_imb" value="" class="form-control" required>
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label for=""><b>*Surat Sewa/Pernyataan (Apabila Bukan Milik Sendiri)</b></label>
                                        <input type="file" name="sp_pemilik" value="" class="form-control">
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label for=""><b>*Surat Kuasa (Apabila yang Mengurus Bukan Pemohon Langsung)</b></label>
                                        <input type="file" name="surat_kuasa" value="" class="form-control">
                                    </div>

                                    <div class="form-group col-md-6" data-validate="Message is required">
                                        <label for=""><b>*Surat Pernyataan Tanah Tidak Dalam Sengketa dan Seperbatasan
                                            </b></label>
                                        <input type="file" name="sp_tidaksengketa" value="" class="form-control">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-6" data-validate="Message is required">
                                        <label for=""><b>*Surat Pernyataan Garis Sempadan Samping Bangunan
                                            </b></label>
                                        <input type="file" name="sp_garis" value="" class="form-control">
                                    </div>

                                    <div class="form-group col-md-6" data-validate="Message is required">
                                        <label for=""><b>*Berita acara Pengecekan Lapangan
                                            </b></label>
                                        <input type="file" name="ba_pengecekan" value="" class="form-control">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-6" data-validate="Message is required">
                                        <label for=""><b>*Check-List kelengkapan Persyaratan
                                            </b></label>
                                        <input type="file" name="checklis_imb" value="" class="form-control">
                                    </div>

                                    <div class="form-group col-md-6" data-validate="Message is required">
                                        <label for=""><b>*Surat Pengantar RT
                                            </b></label>
                                        <input type="file" name="pengantar_rt" value="" class="form-control">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-6" data-validate="Message is required">
                                        <label for=""><b>*Sertifikat Tanah
                                            </b></label>
                                        <input type="file" name="sertifikat" value="" class="form-control">
                                    </div>

                                    <div class="form-group col-md-6" data-validate="Message is required">
                                        <label for=""><b>*Bukti Lunas PBB
                                            </b></label>
                                        <input type="file" name="lunas_pbb" value="" class="form-control">
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

                                $blanko_imb = $_FILES['blanko_imb']['name'];
                                $sp_pemilik = $_FILES['sp_pemilik']['name'];
                                $surat_kuasa = $_FILES['surat_kuasa']['name'];
                                $sp_tidaksengketa = $_FILES['sp_tidaksengketa']['name'];
                                $sp_garis = $_FILES['sp_garis']['name'];
                                $ba_pengecekan = $_FILES['ba_pengecekan']['name'];
                                $checklis_imb = $_FILES['checklis_imb']['name'];
                                $pengantar_rt = $_FILES['pengantar_rt']['name'];
                                $sertifikat = $_FILES['sertifikat']['name'];
                                $lunas_pbb = $_FILES['lunas_pbb']['name'];


                                $lokasi1 = $_FILES['blanko_imb']['tmp_name'];
                                $lokasi3 = $_FILES['sp_pemilik']['tmp_name'];
                                $lokasi4 = $_FILES['surat_kuasa']['tmp_name'];
                                $lokasi5 = $_FILES['sp_tidaksengketa']['tmp_name'];
                                $lokasi7 = $_FILES['sp_garis']['tmp_name'];
                                $lokasi8 = $_FILES['ba_pengecekan']['tmp_name'];
                                $lokasi9 = $_FILES['checklis_imb']['tmp_name'];
                                $lokasi10 = $_FILES['pengantar_rt']['tmp_name'];
                                $lokasi11 = $_FILES['sertifikat']['tmp_name'];
                                $lokasi12 = $_FILES['lunas_pbb']['tmp_name'];

                                move_uploaded_file($lokasi1, "../berkas_imb/$blanko_imb");
                                move_uploaded_file($lokasi3, "../berkas_imb/$sp_pemilik");
                                move_uploaded_file($lokasi4, "../berkas_imb/$surat_kuasa");
                                move_uploaded_file($lokasi5, "../berkas_imb/$sp_tidaksengketa");
                                move_uploaded_file($lokasi7, "../berkas_imb/$sp_garis");
                                move_uploaded_file($lokasi8, "../berkas_imb/$ba_pengecekan");
                                move_uploaded_file($lokasi9, "../berkas_imb/$checklis_imb");
                                move_uploaded_file($lokasi10, "../berkas_imb/$pengantar_rt");
                                move_uploaded_file($lokasi11, "../berkas_imb/$sertifikat");
                                move_uploaded_file($lokasi12, "../berkas_imb/$lunas_pbb");

                                $koneksi->query("INSERT INTO imb (id_pelayanan, id_user, jenis_bangunan,ukuran, lokasi, tanggal_imb,blanko_imb,sp_pemilik,surat_kuasa,sp_tidaksengketa,sp_garis,ba_pengecekan,checklis_imb,pengantar_rt,sertifikat,lunas_pbb,status_imb)
                                VALUES ('$_POST[id_p]','$_POST[id_user]','$_POST[jenis_bangunan]','$_POST[ukuran]',
                                '$_POST[lokasi]', '$_POST[tanggal_sku]','$blanko_imb','$sp_pemilik','$surat_kuasa','$sp_tidaksengketa','$sp_garis','$ba_pengecekan','$checklis_imb','$pengantar_rt','$sertifikat','$lunas_pbb','Menunggu Konfirmasi')");

                                echo "<meta http-equiv='refresh' content='1'>";
                                echo "<script>alert('Data Tersimpan');</script>";
                                echo "<script> location = 'imb.php'; </script>";
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