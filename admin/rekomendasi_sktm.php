<!DOCTYPE html>
<html>
<?php include '../koneksi.php';
$ambil = $koneksi->query("SELECT * FROM tm JOIN user ON tm.id_user=user.id_user
      WHERE id_tm='$_GET[id_tm]'");
$detail = $ambil->fetch_assoc();
?>

<head>
	<title>Surat Keterangan Tidak MAMPU</title>
	<style type="text/css">
		table {
			border-style: double;
			border-width: 3px;
			border-color: white;
		}

		table tr .text2 {
			text-align: right;
			font-size: 13px;
		}

		table tr .text {
			text-align: center;
			font-size: 18px;
		}

		table tr .text3 {
			text-align: center;
			font-size: 13px;
		}

		table tr td {
			font-size: 13px;
		}
	</style>
</head>

<body>

	<body onload="window.print()">
		<center>
			<table>
				<tr>
					<td><img src="img/kapuashitamputih.png" width="80" height="90"></td>
					<td>
						<center>
							<font size="5">PEMERINTAH KABUPATEN KAPUAS</font><br>
							<font size="5">KECAMATAN SELAT</font><br>
							<font size="5">KELURAHAN SELAT HULU</font>
						</center>
					</td>
				</tr>
				<tr>
					<td colspan="2" align="center">
						<hr>
						<font size="2">Jalan Tjilik Riwut No.30 Telp. (0513) 22419 KODE POS 73515</font>
		</center>
		<hr>
		</td>
		</tr>
		</table>
		<table>
			<center>
				<tr>
					<td class="text"><u>SURAT KETERANGAN TIDAK MAMPU</u></td>
				</tr>
				<tr>
					<td class="text3">No. &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<!--isi-->/&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<!--isi-->/&nbsp;
					</td>
				</tr>
			</center>
		</table>
		<table width="500" style="text-align:justify; text-indent: 0.2in;" border="0">
			<tr>
				<td>
					<font size="2">Yang bertanda tangan di bawah ini :</font>
				</td>
			</tr>
		</table>
		<table cellspacing="0" width=500 border="0" cellpadding=3>
			<?php
			$dapat = $koneksi->query("SELECT * FROM adm");
			$admin = $dapat->fetch_assoc();
			?>
			<tr>
				<td width="100">Nama</td>
				<td>:
					<?php echo $admin['nama_admin']; ?>
				</td>
			</tr>
			<tr>
				<td>NIP</td>
				<td>:
					<?php echo $admin['nip']; ?>
				</td>
			</tr>
			<tr>
				<td>Jabatan</td>
				<td>:
					<?php echo $admin['jabatan']; ?>
				</td>
			</tr>
		</table>
		<br>
		<table width="500" style="text-align:justify; text-indent: 0.2in;">
			<tr>
				<td>Dengan ini menerangkan bahwa :</td>
			</tr>
		</table>
		<table cellspacing="0" width=500 border="0" cellpadding=3>
			<tr>
				<td width="100">Nama</td>
				<td>:</td>
				<td>
					<?php echo $detail['nama'] ?> </td>
			</tr>
			<tr>
				<td>Jenis Kelamin</td>
				<td>:</td>
				<td>
					<?php echo $detail['jenis_kelamin'] ?> </td>
				</td>
			</tr>
			<tr>
				<td>Tempat/Tgl. Lahir</td>
				<td>:</td>
				<td>
					<?php echo $detail['tempat_lahir'] ?>, <?php echo $detail['tanggal_lahir'] ?>
				</td>
			</tr>
			<tr>
				<td>Agama</td>
				<td>:</td>
				<td>
					<?php echo $detail['agama'] ?>
				</td>
			</tr>
			<tr>
				<td>Pekerjaan</td>
				<td>:</td>
				<td>
					<?php echo $detail['pekerjaan'] ?>
				</td>
			</tr>
			<tr>
				<td>Status</td>
				<td>:</td>
				<td>
					<?php echo $detail['status_perkawinan'] ?>
				</td>
			</tr>
			<tr>
				<td>No. KTP</td>
				<td>:</td>
				<td>
					<?php echo $detail['no_ktp'] ?>
				</td>
			</tr>
			<tr>
				<td valign="top">Alamat</td>
				<td>:</td>
				<td>
					<?php echo $detail['alamat'] ?>
				</td>
			</tr>
		</table>
		<br>
		<table width="500" style="text-align:justify; text-indent: 0.2in;" cellspacing=1 cellpadding=1>
			<tr>
				<td>Berdasarkan Pengantar <b>RT.
						<?php echo $detail['rt'] ?> RW.
						<?php echo $detail['rw'] ?>
					</b> , bahwa benar Yang Bersangkutan Keluarga Tidak Mampu.
					Surat Keterangan dinyatakan tidak berlaku apabila terjadi pelanggaran, peraturan Perundangundangan dan Perda Kota Bandung serta apabila terdapat kekeliruan/kesalahan dalam pembuatannya, pemohon/pemegang bersedia mempertanggung jawabkan secara hukum tanpa melibatkan pihak
					manapun.
					Surat keterangan ini berlaku untuk satu kali keperluan.
				</td>
			</tr>
		</table>

		<table width="500" style="text-align:justify; text-indent: 0.2in;" cellspacing=1 cellpadding=1>
			<tr>
				<td>Demikian surat keterangan ini diberikan sebagai bahan seperlunya.</td>
			</tr>
		</table>
		<br><br>
		<table width="500" border="0">
			<?php $dapat = $koneksi->query("SELECT * FROM adm");
			$admin = $dapat->fetch_assoc(); ?>
			<tr>
				<td width="280"><br><br><br><br></td>
				<td class="text3" align="center">Kuala Kapuas, <?php echo date("d F Y") ?>
					<br>Lurah Selat Hulu,<br>
					<br><br><br><br><br>
					<u>JAINAL ARIFIN, S.Sos</u><br>
					NIP.
					<!--nip-->
					197110130 199203 1 003
				</td>
			</tr>
		</table>
		</center>
	</body>

</html>