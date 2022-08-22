<!DOCTYPE html>
<html lang="en" dir="ltr">
<?php session_start();
include '../koneksi.php';

$id_imb = $_GET['id_imb'];
$ambil = $koneksi->query("SELECT * FROM user JOIN imb ON  user.id_user = imb.id_user WHERE id_imb='$id_imb'");
$pecah = $ambil->fetch_assoc();
?>

<head>
  <meta charset="utf-8">
  <title>Surat Pernyataan Garis Sempadan Samping Bangunan</title>
  <style>
    #margin1 {
      margin-right: 350px;
      margin-top: 1px;
    }

    #margin2 {
      margin-left: 170px;
      margin-top: 1px;
    }
  </style>
</head>

<body onload="window.print()">

  <body>
    <br>
    <h2 align="center"><u>SURAT PERNYATAAN GARIS SEMPADAN SAMPING BANGUNAN</u></h2>
    <center>
      <div id="margin1">
        <br>
        <p>Kami yang bertanda tangan dibawah ini :</p>

        <table>
          <tr>
            <td width="20">1.</td>
            <td>Berbatasan pada sebelah utara</td>
          </tr>
          <tr>
            <td>2.</td>
            <td>Berbatasan pada sebelah selatan</td>
          </tr>
          <tr>
            <td>3.</td>
            <td>Berbatasan pada sebelah timur</td>
          </tr>
          <tr>
            <td>4.</td>
            <td>Berbatasan pada sebelah barat</td>
          </tr>
        </table>
      </div>
      <br>
      <table width=620px border="0">
        <tr>
          <td>Dengan ini menyatakan tidak keberatan / setuju dengan jarak batas tanah kami tersebut diatas dengan bangunan <b><?php echo $pecah['jenis_bangunan'] ?></b> yang dibangun oleh Saudara (i) <b><?php echo $_SESSION['user']['nama'] ?></b></td>
        </tr>
        <tr>
          <td height=10></td>
        </tr>
        <tr>
          <td>Demikian surat pernyataan ini dibuat dengan sebenarnya tanpa ada paksaan dari pihak manapun.</td>
        </tr>
      </table>
      </div>
      <br>
      <br>
      <div id="margin2">
        <table border="0">
          <tr>
            <td></td>
            <td></td>
            <td>Kuala Kapuas,</td>
            <td><?php echo date('d F Y', strtotime($pecah['tanggal_imb']));  ?></td>
          </tr>
          <tr>
            <td></td>
            <td></td>
            <td height=35 colspan="2">Yang Membuat Pernyataan</td>
          </tr>
          <tr>
            <td height=35>Batas Sebelah Utara</td>
            <td>:</td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <td height=35>Batas Sebelah Selatan</td>
            <td>:</td>
            <td align="center"></td>
            <td></td>
          </tr>
          <tr>
            <td height=35>Batas Sebelah Timur</td>
            <td>:</td>
            <td align="center"></td>
            <td></td>
          </tr>
          <tr>
            <td height=35>Batas Sebelah Barat</td>
            <td>:</td>
            <td></td>
            <td></td>
          </tr>
        </table>
      </div>
    </center>
  </body>

</html>