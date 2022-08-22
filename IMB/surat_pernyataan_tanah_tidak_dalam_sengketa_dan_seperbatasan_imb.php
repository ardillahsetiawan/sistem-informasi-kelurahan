<!DOCTYPE html>
<html lang="en" dir="ltr">
<?php session_start();
include '../koneksi.php';

$id_imb = $_GET['id_imb'];
$ambil = $koneksi->query("SELECT * FROM user JOIN imb ON  user.id_user = imb.id_user WHERE id_imb='$id_imb'");
$pecah = $ambil->fetch_assoc();
?>

<?php $tgl_lahir = $pecah['tanggal_lahir'];

// ubah ke format Ke Date Time
$lahir = new DateTime($tgl_lahir);
$hari_ini = new DateTime();

$diff = $hari_ini->diff($lahir);
?>


<head>
  <meta charset="utf-8">
  <title>Surat Pernyataan Tanah Tidak Dalam Sengketa dan Seperbatasan</title>
  <style>
    #margin1 {
      margin-right: 280px;
      margin-top: 1px;
    }
  </style>
</head>

<body>

  <body onload="window.print()">
    <h2 align="center"><u>SURAT PERNYATAAN TANAH TIDAK DALAM SENGKETA DAN SEPERBATASAN</u></h2>
    <center>
      <table width=750 cellpadding=4 border="0" style="text-align:justify;">
        <tr>
          <td colspan="3">Yang bertanda tangan dibawah ini :</td>
        </tr>
        <tr>
          <td width=150>Nama</td>
          <td width=10>:</td>
          <td><?php echo $_SESSION['user']['nama'] ?></td>
        </tr>
        <tr>
          <td>Umur</td>
          <td>:</td>
          <td><?php echo  $diff->y . " Tahun";  ?></td>
        </tr>
        <tr>
          <td>Pekerjaan</td>
          <td>:</td>
          <td><?php echo $_SESSION['user']['pekerjaan'] ?></td>
        </tr>
        <tr>
          <td>Alamat</td>
          <td>:</td>
          <td><?php echo $_SESSION['user']['alamat'] ?></td>
        </tr>
        <tr>
          <td colspan="3">Benar memiliki sebidang tanah ........................... Nomor : .......................................... Tanggal : ......................... Berlokasi di <?php echo $pecah['lokasi'] ?> Kelurahan Selat Hulu Kuala Kapuas dengan Ukuran <?php echo $pecah['ukuran'] ?> M<sup>2</sup> dengan ini menyatakan dengan sebenarnya bahwa tanah tersebut tidak dalam sengketa dengan pihak manapun dan saya menyatakan bahwa tanah saya tersebut berbatasan dengan :</td>
        </tr>
        <tr>
          <td>Sebelah Utara</td>
          <td>:</td>
          <td></td>
        </tr>
        <tr>
          <td>Sebelah Selatan</td>
          <td>:</td>
          <td></td>
        </tr>
        <tr>
          <td>Sebelah Timur</td>
          <td>:</td>
          <td></td>
        </tr>
        <tr>
          <td>Sebelah Barat</td>
          <td>:</td>
          <td></td>
        </tr>
        <tr>
          <td colspan="3">Selain perbatasan tersebut diatas, tidak ada perbatasan lainnya.</td>
        </tr>
        <tr>
          <td colspan="3">Demikian Surat Kuasa ini dibuat dalam keadaan sadar dan tanpa ada paksaan dari pihak manapun.</td>
        </tr>
      </table>
      <br><br><br>
      <table width=750 border="0">
        <tr>
          <td width="200"></td>
          <td></td>
          <td align="center" colspan="2">Kuala Kapuas, <?php echo date('d F Y', strtotime($pecah['tanggal_imb'])); ?></td>
        </tr>
        <tr>
          <td align="center">Mengetahui :</td>
          <td></td>
          <td align="center" colspan="2">Yang Menyatakan</td>
        </tr>
        <tr>
          <td align="center">Ketua RT</td>
          <td align="center">Materai</td>
          <td></td>
          <td width="100"></td>
        </tr>
        <tr>
          <td></td>
          <td align="center">6000</td>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <td align="center" height=150>(.....................................................)</td>
          <td></td>
          <td align="center" colspan="2">(.....................................................)</td>
        </tr>
      </table>
    </center>
  </body>

</html>