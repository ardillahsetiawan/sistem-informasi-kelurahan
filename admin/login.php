<!DOCTYPE html>
<?php
session_start();
include '../koneksi.php' ?>
<html lang="en">

<head>
	<title>Login Admin</title>
	<?php include '../form/header.php' ?>
</head>

<body>
	<div class="bg-contact2" style="background-image: url('../assets/form/images/bg3.jpg');">
		<div class="container-contact2">
			<div class="wrap-contact2">
				<h4>Login Administrator</h4><br>
				<form method="POST">
					<div class="row">
						<form action="home.php">
							<div class="image-holder col-md-6">
								<img src="kapuas1.jpg" alt="" width="230">
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label for="">NIP</label>
									<input type="text" name="nip" class="form-control" placeholder="masukan nip">
								</div>
								<div class="form-group">
									<label for="">Password</label>
									<input type="password" name="pass" class="form-control" placeholder="password">
								</div>
								<div class="form-group">
									<button type="submit" class="btn btn-info" name="login">LOGIN</button>
								</div>
						</form>
					</div>
				</form>
			</div>
		</div>
	</div>



	<?php include '../form/js.php' ?>

	<?php
	if (isset($_POST['login'])) {
		$ambil = $koneksi->query("SELECT * FROM adm WHERE nip='$_POST[nip]' AND pass = '$_POST[pass]'");
		$yangcocok = $ambil->num_rows;
		if ($yangcocok == 1) {
			$_SESSION['adm'] = $ambil->fetch_assoc();
			echo "<script>alert('Anda Berhasil Login!');</script>";
			echo "<script>location='index.php';</script>";
		} else {
			echo "<script>alert('Anda Gagal Login!');</script>";
			echo "<script>location='login.php';</script>";
		}
	} ?>

</body>

</html>