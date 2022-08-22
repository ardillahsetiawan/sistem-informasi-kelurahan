<!DOCTYPE html>
<html>
<?php
session_start();
include '../koneksi.php';
$ambil = $koneksi->query("SELECT * FROM sku JOIN user ON sku.id_user=user.id_user
      WHERE id_sku='$_GET[id_sku]'");
$detail = $ambil->fetch_assoc();
?>

<head>
	<title>Surat Keterangan Usaha</title>
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

<body onload="window.print()">

	<body>
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
					<td class="text"><u>SURAT KETERANGAN USAHA</u></td>
				</tr>
				<tr>
					<td class="text3">No:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<!--isi-->/&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<!--isi-->/&nbsp;
					</td>
				</tr>
			</center>
		</table>
		<table width="500" style="text-align:justify; text-indent: 0.2in;" border="0">
			<tr>
				<td>
					<font size="2">Lurah Selat Hulu Kecamatan Selat Kabupaten Kapuas
						Menerangkan Bahwa :</font>
				</td>
			</tr>
		</table>
		<table cellspacing="0" width=500 border="0" cellpadding=3>
			<tr>
				<td width="150">Nama</td>
				<td>:</td>
				<td>
					<?php echo $detail['nama'] ?>
				</td>
			</tr>
			<tr>
				<td>Jenis Kelamin</td>
				<td>:</td>
				<td>
					<?php echo $detail['jenis_kelamin'] ?>
				</td>
			</tr>
			<tr>
				<td>Tempat/Tgl. Lahir</td>
				<td>:</td>
				<td>
					<?php echo $detail['tempat_lahir'] ?>, <?php echo date('d F Y', strtotime($detail['tanggal_lahir'])); ?>
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
				<td>Status Perkawinan</td>
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
		<table width="500" style="text-align:justify; text-indent: 0.2in;" border=0>
			<tr>
				<td>
					Berdasarkan surat permohonan yang bersangkutan <b>Surat Pengantar RT.
						<?php echo $detail['rt'] ?> RW.
						<?php echo $detail['rw'] ?>
						Pada Tanggal: <?php echo date('d F Y', strtotime($detail['tanggal_sku'])); ?>
					</b> bahwa yang bersangkutan tersebut diatas mempunyai usaha : </td>
			</tr>
		</table>
		<table cellspacing="0" width=500 border="0" cellpadding=3>
			<tr>
				<td width="120">Nama Usaha</td>
				<td width="15">:</td>
				<td>
					<?php echo $detail['nama_usaha'] ?>
				</td>
			</tr>
			<tr>
				<td>Jenis Usaha</td>
				<td>:</td>
				<td>
					<?php echo $detail['jenis_usaha'] ?>
				</td>
			</tr>
			<tr>
				<td>Luas Tempat Usaha</td>
				<td>:</td>
				<td>
					<?php echo $detail['luas_tempat'] ?>
				</td>
			</tr>
			<tr>
				<td>Status Tanah Usaha</td>
				<td>:</td>
				<td>
					<?php echo $detail['status_tempat'] ?>
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
				<td>Surat Keterangan ini diberikan kepada yang bersangkutan untuk melengkapi Persyaratan
					<b>Melengkapi Administrasi</b>
				</td>
			</tr>
			<td>Demikian surat keterangan ini diberikan untuk dapat dipergunakan seperlunya.</td>
		</table>
		<br>
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