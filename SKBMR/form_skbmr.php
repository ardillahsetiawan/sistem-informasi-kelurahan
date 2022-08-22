<!DOCTYPE html>
<html lang="en">

<?php session_start();
include '../koneksi.php';

$ambil = $koneksi->query("SELECT * FROM user WHERE id_user='$_GET[id_user]'");
$pecah = $ambil->fetch_assoc();
?>

<head>
	<title>skbmr</title>
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
						<p>Surat Keterangan Belum Memiliki Rumah</p>
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
					<div class="form-group">
						<div class="row">
							<div class="col-md-6">
								<label for=""><b>*Tempat Lahir</b></label>
								<input type="text" class="form-control" name="tempat_lahir" value="<?php echo $pecah['tempat_lahir']; ?>">
							</div>
							<div class="col-md-6">
								<label for=""><b>*Tanggal Lahir</b></label>
								<input type="date" class="form-control" name="tanggal_lahir" value="<?php echo $pecah['tanggal_lahir']; ?>">
							</div>
						</div>
					</div>


					<div class="form-group">
						<label for=""><b>*Pendidikan Terakhir</b></label>
						<select class="form-control select2" name="pendidikan">
							<option selected="selected" value="<?php echo $pecah['pendidikan']; ?>" data-select2-id="3"><?php echo $pecah['pendidikan']; ?></option>
							<option data-select2-id="41" value="SD">SD</option>
							<option data-select2-id="42" value="SMP/MTS">SMP/MTS</option>
							<option data-select2-id="42" value="SMK/SMA/M">SMK/SMA/MA</option>
							<option data-select2-id="42" value="D3/Sederajat">D3/Sederajat</option>
							<option data-select2-id="42" value="S1">S1</option>
							<option data-select2-id="42" value="Lainnya">Lainnya</option>
						</select>
					</div>

					<div class="form-group">
						<label for=""><b>*Agama</b></label>
						<select class="form-control select2" name="agama">
							<option selected="selected" value="<?php echo $pecah['agama']; ?>"><?php echo $pecah['agama']; ?></option>
							<option data-select2-id="41" value="Islam">Islam</option>
							<option data-select2-id="42" value="Protestan">Protestan</option>
							<option data-select2-id="42" value="Katolik">Katolik</option>
							<option data-select2-id="42" value="Hindu">Hindu</option>
							<option data-select2-id="42" value="Buddha">Buddha</option>
							<option data-select2-id="42" value="Khonghucu">Khonghucu</option>
						</select>
					</div>

					<div class="form-group" data-validate="Name is required">
						<label for=""><b>*Pekerjaan</b></label>
						<input type="text" class="form-control" name="pekerjaan" value="<?php echo $pecah['pekerjaan']; ?>">
					</div>

					<div class="form-group" data-validate="Name is required">
						<label for=""><b>*Alamat</b></label>
						<input type="text" class="form-control" name="alamat" value="<?php echo $pecah['alamat']; ?>">
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
					<input type="hidden" name="id_p" class="form-control" value="skbmr-<?php echo $hasil_1; ?>">
					<input type="hidden" name="nama_p" class="form-control" value="1">

					<div class="form-group" data-validate="Name is required">
						<label for=""><b>*Surat ini dibuat untuk keperluan</b></label>
						<textarea type="text" name="keperluan_surat_bmr" class="form-control" value="" placeholder="keperluan surat" required oninvalid="this.setCustomValidity('Keperluan Surat Harus Anda Input!')" oninput="setCustomValidity('')"></textarea>
					</div>

					<div class="form-group" data-validate="Message is required">
						<label for=""><b>*Tanggal Pembuatan Surat</b></label>
						<input type="Date" name="tanggal_bmr" value="" class="form-control" placeholder="Tempat" required oninvalid="this.setCustomValidity('Tanggal Harus Anda Input!')" oninput="setCustomValidity('')">
					</div>

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
		jenis_kelamin='$_POST[jenis_kelamin]',
		tempat_lahir='$_POST[tempat_lahir]',
		tanggal_lahir='$_POST[tanggal_lahir]',
		pendidikan='$_POST[pendidikan]',
		agama='$_POST[agama]',
		pekerjaan='$_POST[pekerjaan]',
		alamat='$_POST[alamat]'
		WHERE id_user='$_GET[id_user]'");

		$koneksi->query("INSERT INTO pelayanan (id_pelayanan, id_nama_pelayanan, id_user, tanggal_layanan)
		 VALUES ('$_POST[id_p]', '$_POST[nama_p]', '$_POST[id]', '$_POST[tanggal_bmr]')");

		$koneksi->query("INSERT INTO bmr (id_pelayanan, keperluan_surat_bmr, tanggal_bmr, id_user)
		VALUES ('$_POST[id_p]','$_POST[keperluan_surat_bmr]','$_POST[tanggal_bmr]', '$_POST[id]')");




		echo "<meta http-equiv='refresh' content='1'>";
		echo "<script>alert('Data Tersimpan');</script>";
		echo "<script> location = 'ceklist_skbmr.php'; </script>";
	}

	?>


	<?php include '../form/js.php' ?>

</body>

</html>