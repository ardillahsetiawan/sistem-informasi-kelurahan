<!DOCTYPE html>
<html lang="en">

<?php session_start();
include '../koneksi.php';

$ambil = $koneksi->query("SELECT * FROM user WHERE id_user='$_GET[id_user]'");
$pecah = $ambil->fetch_assoc();
?>

<head>
	<title>SKU</title>
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
						<p>Surat Keterangan Usaha</p>
					</h2>
					<div class="form-group">
						<label for=""><b>*NIK</b></label>
						<input type="text" name="id" class="form-control" value="<?php echo $pecah['id_user']; ?>" disabled>
					</div>

					<div class="form-group">
						<label for=""><b>*Nama</b></label>
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

					<input type="hidden" name="id" class="form-control" value="<?php echo $pecah['id_user']; ?>">
					<input type="hidden" name="id_p" class="form-control" value="sku-<?php echo $hasil_1; ?>">
					<input type="hidden" name="nama_p" class="form-control" value="2">

					<div class="form-group" data-validate="Name is required">
						<label for=""><b>*Alamat Usaha</b></label>
						<textarea type="text" name="alamat_usaha" class="form-control" value="" placeholder="keperluan surat" required oninvalid="this.setCustomValidity('Alamat Usaha Harus Anda Input!')" oninput="setCustomValidity('')"></textarea>
					</div>

					<div class="form-group" data-validate="Name is required">
						<label for=""><b>*Surat ini dibuat untuk keperluan</b></label>
						<textarea type="text" name="keperluan_surat_sku" class="form-control" value="" placeholder="keperluan surat" required oninvalid="this.setCustomValidity('Keperluan Surat Harus Anda Input!')" oninput="setCustomValidity('')"></textarea>
					</div>

					<div class="form-group" data-validate="Message is required">
						<label for=""><b>*Tanggal Pembuatan Surat</b></label>
						<input type="Date" name="tanggal_sku" value="" class="form-control" required oninvalid="this.setCustomValidity('Tanggal Harus Anda Input!')" oninput="setCustomValidity('')">
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
		 VALUES ('$_POST[id_p]', '$_POST[nama_p]', '$_POST[id]', '$_POST[tanggal_sku]')");

		$koneksi->query("INSERT INTO sku (id_pelayanan, keperluan_surat_sku, tanggal_sku, id_user,
		nama_usaha, jenis_usaha, luas_tempat, status_tempat, alamat_usaha)
		VALUES (
		'$_POST[id_p]',
		'$_POST[keperluan_surat_sku]',
		'$_POST[tanggal_sku]',
		'$_POST[id]',
		'$_POST[nama_usaha]',
		'$_POST[jenis_usaha]',
		'$_POST[luas_tempat]',
		'$_POST[status_tempat]',
		'$_POST[alamat_usaha]')");




		echo "<meta http-equiv='refresh' content='1'>";
		echo "<script>alert('Data Tersimpan');</script>";
		echo "<script> location = 'index_sku.php'; </script>";
	}

	?>


	<?php include '../form/js.php' ?>

</body>

</html>