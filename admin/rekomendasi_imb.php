<!DOCTYPE html>
<html>
<?php include '../koneksi.php';
$ambil = $koneksi->query("SELECT * FROM imb JOIN user ON imb.id_user=user.id_user WHERE id_imb='$_GET[id_imb]'");
$detail = $ambil->fetch_assoc();
?>

<head>
	<title>Rekomendasi</title>
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
			font-size: 13px;
		}

		table tr td {
			font-size: 13px;
		}
	</style>
</head>

<body onload="window.print()">

	<body>
		<center>
			<table>
				<tr>
					<td><img src="../assets/img/kapuashitamputih.png" width="80" height="90"></td>
					<td>
						<center>
							<font size="4.5">PEMERINTAH KABUPATEN KAPUAS</font><br>
							<font size="5">KECAMATAN SELAT</font><br>
							<font size="5">KELURAHAN SELAT HULU</font>
						</center>
					</td>
				</tr>
				<tr>
					<td colspan="2" align="center">
						<font size="2">Jalan Tjilik Riwut No.30 Telp. (0513) 22419 KODE POS 73515</font>
				</tr>
				<tr>
					<td colspan="2" align="center"><B>
							KUALA KAPUAS</B>
				</tr>

		</center>
		</td>
		</tr>
		</table>
		<hr width="60%" />
		<table>
			<center>
				<tr>
					<td class="text"><u><b>REKOMENDASI</b></u></td>
				</tr>
				<tr>
					<td class="text3">No:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<!--isi-->/&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<!--isi-->/&nbsp;
					</td>
				</tr>
			</center>
		</table>
		<table width="550" style="text-align:justify; text-indent: 0.4in;" border="0">
			<tr>
				<td>
					<font size="2">Yang bertanda tangan di bawah ini :</font>
				</td>
			</tr>
		</table>
		<table cellspacing="0" width=550 border="0" cellpadding=3>
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
		<table width="550" style="text-align:justify; text-indent: 0.4in;">
			<tr>
				<td>Dengan ini memberikan Rekomendasi Izin Mendirikan Bangunan (IMB) Kepada :</td>
			</tr>
		</table>
		<table cellspacing="0" width=550 border="0" cellpadding=3>
			<tr>
				<td width="100">Nama</td>
				<td>:
					<?php echo $detail['nama']; ?>
				</td>
			</tr>
			<tr>
				<td valign="top">Alamat</td>
				<td>:
					<?php echo $detail['alamat'] ?>
				</td>
			</tr>
		</table>
		<br>
		<table width="550" style="text-align:justify; text-indent: 0.4in;" cellspacing=1 cellpadding=1>
			<tr>
				<td>Adapun bangunan yang dimohonkan terdiri dari :</td>
			</tr>
		</table>
		<table cellspacing="0" width=550 border="0" cellpadding=3>
			<tr>
				<td width="100">Bangunan Untuk</td>
				<td>:
					<?php echo $detail['bangunan_untuk'] ?>
				</td>
			</tr>
			<tr>
				<td valign="top">Ukuran / Type</td>
				<td>:
					<?php echo $detail['ukuran'] ?>
				</td>
			</tr>
			<tr>
				<td valign="top">Yang Berlokasi di</td>
				<td>:
					<?php echo $detail['lokasi'] ?>
				</td>
			</tr>
		</table>
		<br>
		<table width="550" style="text-align:justify; text-indent: 0.4in;" cellspacing=1 cellpadding=1>
			<tr>
				<td>Pada prinsipnya kami tidak keberatan, karena yang bersangkutan bersedia memenuhi ketentuan yang berlaku
					dengan melihat kondisi di lapangan dan persyaratan administrasi sebagai berikut :</td>
			</tr>
		</table>
		<table cellspacing="0" width=500 border="0" cellpadding=0>
			<tr>
				<td width="5">1.</td>
				<td>Permohonan yang diketahui RT dan Lurah</td>
			</tr>
			<tr>
				<td width="5">2.</td>
				<td>Photocopy KTP yang bersangkutan masih berlaku</td>
			</tr>
			<tr>
				<td width="5">3.</td>
				<td>Photocopy Sertifikat / Sporadik / SKT</td>
			</tr>
			<tr>
				<td width="5">4.</td>
				<td>Photocopy SKNJOP/SPPT PBB dan Tanda Lunas</td>
			</tr>
			<table width="550" style="text-align:justify; text-indent: 0.4in;" cellspacing=1 cellpadding=1>
				<tr>
					<td>Demikian disampaikan sebagai bahan untuk proses selanjutnya, apabila dikemudian hari terdapat kesalahan
						atau kekeliruan akan diperbaiki sebagaimana mestinya.</td>
				</tr>
			</table>
			<br><br>
			<table width="550" border="0">
				<tr>
					<td width="360"></td>
					<td>Kuala Kapuas, </td>
				</tr>
				<tr>
					<td></td>
					<td class="text3" align=center><b>Lurah Selat Hulu <br><br><br><br><br><br>
							<u>JAINAL ARIFIN, S.Sos</u></b>
						<br>NIP. 197110130 199203 1 003
					</td>
				</tr>
			</table>
			</center>
	</body>

</html>