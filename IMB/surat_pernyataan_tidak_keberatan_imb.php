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
  <title></title>
  <style>
    #margin1 {
      margin-left: px;
    }

    #margin2 {
      margin-left: 30px;
    }
  </style>
</head>

<body>

  <body onload="window.print()">
    <center>
      <h3>SURAT PERNYATAAN TIDAK KEBERATAN SEBELAH MENYEBELAH TERHADAP</h3>
      <h3>BANGUNAN YANG AKAN DIDIRIKAN</h3>
      <hr size="2px" width="55%">
      <table style="text-align:justify;" cellpadding="5" width="750">
        <td style="text-indent:0.5in;">Dengan ini menyatakan bahwa yang bertanda tangan dibawah ini
          adalah benar seperbatasan serta kami tidak keberatan atas
          berdirinya /penambahan / perbaikan bangunan <b><?php echo $pecah['jenis_bangunan']; ?></b> A.n Saudara (i)
          <b><?php echo $_SESSION['user']['nama'] ?></b> Surat Pernyatan ini kami tanda tangani bersama,
          dengan pikiran yang sehat tanpa dipaksa oleh siapapun juga.
        </td>
        <tr>
          <td>Demikian agar yang berkepentingan mengetahui sehingga dapat dipergunakan sebagaimana mestinya.</td>
        </tr>
      </table>
      <br>
      <table style="text-align:center;" cellpadding="10" width="750" border="1" cellspacing="0">
        <thead>
          <th width="2">NO</th>
          <th width="400">NAMA</th>
          <th width="2">PERBATASAN</th>
          <th width="">TANDA TANGAN</th>
        </thead>
        <tr>
          <td>1</td>
          <td></td>
          <td>UTARA</td>
          <td></td>
        </tr>
        <tr>
          <td>2</td>
          <td></td>
          <td>SELATAN</td>
          <td></td>
        </tr>
        <tr>
          <td>3</td>
          <td></td>
          <td>TIMUR</td>
          <td></td>
        </tr>
        <tr>
          <td>4</td>
          <td></td>
          <td>BARAT</td>
          <td></td>
        </tr>
      </table>
      <center>
        <h3><u>SKET KASAR DENAH BANGUNAN</u></h3>
      </center>
      <table width=750 border="1" height=250 cellspacing="0">
        <td></td>
      </table>
      <br>
      <h5 style="margin-right:675px"><u>Keterangan :</u></h5>
      <table style="margin-right:550px">
        <tr>
          <td width="20">a. </td>
          <td width="100">Tiang</td>
          <td>:</td>
          <td></td>
        </tr>
        <tr>
          <td>b. </td>
          <td>Pondasi</td>
          <td>:</td>
          <td></td>
        </tr>
        <tr>
          <td>c. </td>
          <td>Atap</td>
          <td>:</td>
          <td></td>
        </tr>
        <tr>
          <td>d. </td>
          <td>Dinding</td>
          <td>:</td>
          <td></td>
        </tr>
        <tr>
          <td>e. </td>
          <td>Lantai</td>
          <td>:</td>
          <td></td>
        </tr>
      </table>
      <br>
      <table style="margin-left:480px">
        <tr>
          <td>Liang Anggang, <?php echo date('d F Y', strtotime($pecah['tanggal_imb'])); ?> </td>
          <td></td>
          <td></td> 
        </tr>
        <tr>
          <td>Ketua RT............</td>
          <td>/</td>
          <td>Ketua RW............</td>
        </tr>
      </table>
      <br>
      <br>
    </center>
  </body>

</html>