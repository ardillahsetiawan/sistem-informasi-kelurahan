<!DOCTYPE html>
<html>
<?php session_start();
include '../koneksi.php';

$id_imb = $_GET['id_imb'];
$ambil = $koneksi->query("SELECT * FROM user JOIN imb ON  user.id_user = imb.id_user WHERE id_imb='$id_imb'");
$pecah = $ambil->fetch_assoc();
?>

<head>
	<title>ceklist_surat_imb</title>
	<style>
		#margin2 {
			margin-right: 600px;
			margin-top: 1px;
		}
	</style>
</head>

<body>

	<body onload="window.print()">
		<center>
			<table border="0" width="380">
				<tr>
					<td colspan="3" align="center"><B>CHECK-LIST</td>
				</tr>
				<tr>
					<td colspan="3" align="center"><B>SURAT PERMOHONAN IMB/IMMB</td>
				</tr>
				<tr>
					<td width="130">Atas Nama</td>
					<td width="10" align="center">:</td>
					<td><?php echo $_SESSION['user']['nama'] ?></td>
				</tr>
				<tr>
					<td>Lokasi</td>
					<td align="center">:</td>
					<td><?php echo $pecah['lokasi'] ?></td>
				</tr>
			</table>
			<br>
			<table border="1" width="900" cellpadding="6" cellspacing="0">
				<thead>
					<th style="text-align: center;">No</th>
					<th width="400">Persyaratan</th>
					<th width="100">Ada</th>
					<th width="100">Tidak Ada</th>
					<th>Keterangan</th>
				</thead>
				<tr>
					<td style="text-align: center;">1</td>
					<td>Pengisian Blangko Permohonan</td>
					<td></td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td style="text-align: center;">2</td>
					<td>Surat Sewa/pernyataan pemilik tanah (apabila bukan milik sendiri)</td>
					<td></td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td style="text-align: center;">3</td>
					<td>Surat Kuasa (apabila yang mengurus bukan Pemohon Langsung)</td>
					<td></td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td style="text-align: center;">4</td>
					<td>Surat Pernyataan tanah tidak dalam sengketa dan seperbatasan</td>
					<td></td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td style="text-align: center;">5</td>
					<td>Pengantar dari Ketua RT</td>
					<td></td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td style="text-align: center;">6</td>
					<td>Fotocopy KTP yang masih berlaku</td>
					<td></td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td style="text-align: center;">7</td>
					<td>Surat Pernyataan Garis Sempadan Samping Bangunan</td>
					<td></td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td style="text-align: center;">8</td>
					<td>Fotocopy Sertifikat/Segel/Sporadik</td>
					<td></td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td style="text-align: center;">9</td>
					<td>Fotocopy Tanda Lunas PBB Tahun Terakhir</td>
					<td></td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td style="text-align: center;">10</td>
					<td>Berita acara Pengecekan lapangan</td>
					<td></td>
					<td></td>
					<td></td>
				</tr>
			</table>
			<div id="margin2">
				<p>Masing-masing 2(dua) rangkap</p>
			</div>
			<table width="1000">
				<tr>
					<td width="430"><br><br><br><br></td>
					<td class="text" align="center">Kuala Kapuas, <?php echo date('d F Y', strtotime($pecah['tanggal_imb'])); ?><br>Petugas Pelayanan
					</td>
				</tr>
			</table>
	</body>

</html>