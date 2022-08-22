<!DOCTYPE html>
<html lang="en">

<?php session_start();
include '../koneksi.php';

$ambil = $koneksi->query("SELECT * FROM user WHERE id_user='$_GET[id_user]'");
$pecah = $ambil->fetch_assoc();
?>

<head>
    <title>Form IMB</title>
    <?php include '../form/header.php' ?>
</head>

<body>

    <?php include 'navbar.php' ?>
    <?php include '../bootstrap/css.php' ?>
    <?php include '../bootstrap/js.php' ?>

    <div class="row">
        <div style="background: black">
            <br>
            <br>
            <br>
            <br>
        </div>
    </div>






    <div class="bg-contact2" style="background-image: url('../assets/form/images/bg.png');">
        <div class="container-contact2">
            <div class="wrap-contact2">
                <form class="" method="POST">


                    <h2 class="text-center">
                        Formulir
                        <p>Izin Mendirikan Bangunan</p>
                    </h2>
                    <div class="form-group">
                        <label for=""><b>*NIK</b></label>
                        <input type="text" disabled name="id" class="form-control" value="<?php echo $pecah['id_user']; ?>">
                    </div>

                    <div class="form-group">
                        <label for=""><b>*Nama</b></label>
                        <input type="text" name="nama" class="form-control" value="<?php echo $pecah['nama']; ?>" required>
                    </div>


                    <div class="form-group">
                        <label for=""><b>*Jenis Kelamin</b></label>
                        <select class="form-control select2" name="jenis_kelamin">
                            <option selected="selected" value="<?php echo $pecah['jenis_kelamin']; ?>"><?php echo $pecah['jenis_kelamin']; ?></option>
                            <option value="Laki-Laki">Laki-laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
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
                            <label for=""><b>*Alamat</b></label>
                            <input type="text" class="form-control select2" name="lokasi" required oninvalid="this.setCustomValidity('Alamat Harus Anda Input!')" oninput="setCustomValidity('')">
                        </div>

                        <div class="form-group col-md-6">
                            <label for=""><b>*Tangal IMB</b></label>
                            <input type="date" class="form-control select2" name="tanggal_imb" required oninvalid="this.setCustomValidity('Tanggal Harus Anda Input!')" oninput="setCustomValidity('')">
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

                    <input type="hidden" name="id" class="form-control" value="<?php echo $pecah['id_user']; ?>">
                    <input type="hidden" name="id_p" class="form-control" value="imb-<?php echo $hasil_1; ?>">
                    <input type="hidden" name="nama_p" class="form-control" value="3">

                    <div class="container-contact2-form-btn">
                        <div class="form-group"><br>
                            <button class="btn btn-info" name="ubah">Simpan</button>
                            <button class="btn btn-warning" type="reset">Bersihkan</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <?php
    if (isset($_POST['ubah'])) {
        $koneksi->query("UPDATE user SET
		nama='$_POST[nama]',
		jenis_kelamin='$_POST[jenis_kelamin]'
		WHERE id_user='$_GET[id_user]'");

        $koneksi->query("INSERT INTO pelayanan (id_pelayanan, id_nama_pelayanan, id_user, tanggal_layanan)
		 VALUES ('$_POST[id_p]', '$_POST[nama_p]', '$_POST[id]', '$_POST[tanggal_imb]')");

        $koneksi->query("INSERT INTO imb (id_pelayanan, id_user, jenis_bangunan,
        ukuran, lokasi,  tanggal_imb)
		VALUES ('$_POST[id_p]','$_POST[id]','$_POST[jenis_bangunan]','$_POST[ukuran]',
        '$_POST[lokasi]', '$_POST[tanggal_imb]')");




        echo "<meta http-equiv='refresh' content='1'>";
        echo "<script>alert('Data Tersimpan');</script>";
        echo "<script> location = 'index_imb.php'; </script>";
    }

    ?>


    <?php include '../form/js.php' ?>

</body>

</html>