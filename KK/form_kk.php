<!DOCTYPE html>
<html lang="en">

<?php session_start();
include '../koneksi.php';

$ambil = $koneksi->query("SELECT * FROM user WHERE id_user='$_GET[id_user]'");
$pecah = $ambil->fetch_assoc();
?>

<head>
	<title>SKK</title>
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





	<div class="bg-contact2" style="background-image: url('../assets/form/images/bg3.jpg');">
		<div class="container-contact2">
			<div class="wrap-contact2">
				<form class="" method="POST">


					<h2 class="text-center">
						Formulir
						<p>Surat Keterangan Kematian</p>
					</h2>
					<div class="form-group">
						<label for=""><b>*NIK</b></label>
						<input type="text" name="id" class="form-control" value="<?php echo $pecah['id_user']; ?>" disabled>
					</div>

					<div class="form-group">
						<label for=""><b>*Nama Lengkap Perwakilan dari yang Meninggal(sesuai KTP)</b></label>
						<input type="text" name="nama" class="form-control" value="<?php echo $pecah['nama']; ?>">
					</div>


					<div class="form-group">
						<label for=""><b>*Jenis Kelamin</b></label>
						<select class="form-control select2" name="jenis_kelamin">
							<option selected="selected" value="<?php echo $pecah['jenis_kelamin']; ?>"><?php echo $pecah['jenis_kelamin']; ?></option>
							<option value="Laki-Laki">Laki-laki</option>
							<option value="Perempuan">Perempuan</option>
						</select>
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
					<input type="hidden" name="id_p" class="form-control" value="kk-<?php echo $hasil_1; ?>">
					<input type="hidden" name="nama_p" class="form-control" value="9">
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
						<textarea type="text" name="keperluan_surat_kk" class="form-control" value="" placeholder="keperluan surat" required oninvalid="this.setCustomValidity('Keperluan Surat Harus Anda Input!')" oninput="setCustomValidity('')"></textarea>
					</div>

					<div class="form-group" data-validate="Message is required">
						<label for=""><b>*Tanggal Pembuatan Surat</b></label>
						<input type="Date" name="tanggal_kk" value="" class="form-control" required oninvalid="this.setCustomValidity('Tanggal Harus Anda Input!')" oninput="setCustomValidity('')">
					</div><br>

					<div class="container-contact2-form-btn">
						<div class="form-group"><br>
							<button class="btn btn-info" name="ubah" onclick="return Confirm('Simpan Permohonan ?')">Simpan</button>
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
		 VALUES ('$_POST[id_p]', '$_POST[nama_p]', '$_POST[id]', '$_POST[tanggal_kk]')");

		$koneksi->query("INSERT INTO kk (id_pelayanan, keperluan_surat_kk, tanggal_kk, id_user, yg_meninggal, jk, umur, tanggal_meninggal)
		VALUES (
		'$_POST[id_p]',
		'$_POST[keperluan_surat_kk]',
		'$_POST[tanggal_kk]',
		'$_POST[id]',
        '$_POST[yg_meninggal]',
        '$_POST[jk_m]',
        '$_POST[umur]',
        '$_POST[tanggal_meninggal]')");




		echo "<meta http-equiv='refresh' content='1'>";
		echo "<script>alert('Data Tersimpan');</script>";
		echo "<script> location = 'index_kk.php'; </script>";
	}

	?>


	<?php include '../form/js.php' ?>

</body>

</html>