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
  <title>Berita Acara Pengecekan Lapangan</title>
  <style>
    #margin1 {
      margin-left: 10px;
      margin-top: 1px;
    }

    #margin2 {
      margin-left: 380px;
      margin-top: 1px;
    }

    #margin3 {
      margin-left: 550px;
      margin-top: 1px;
    }
  </style>
</head>

<body onload="window.print()">

  <body>
    <h2 align="center">BERITA ACARA PENGECEKAN LAPANGAN</h2>
    <br>
    <br>
    <center>
      <table width=800 style="text-align:justify;" cellpadding="5" cellspacing="0" border="0">
        <tr>
          <td style="text-indent:0.5in;">Pada hari ini .......... Tanggal ........... Bulan............ Tahun ............... telah dilaksanakan pengecekan perizinan terhadap Permohonan IMB/IMMB atas nama <b><?php echo $_SESSION['user']['nama'] ?></b> yang terletak di jalan <b><?php echo $pecah['lokasi'] ?></b> Kelurahan Selat Hulu Kuala Kapuas.</td>
        </tr>
        <tr>
          <td style="text-indent:0.5in;">Pengecekan dilakukan dengan seksama, baik letaknya, keterangan saksi-saksi maupun persyaratan permohonan yang bersangkutan, menurut pengecekan kami dilapangan permohonan perizinan IMB/IMMB tersebut pada prinsipnya memenuhi ketentuan.</td>
        </tr>
        <tr>
          <td style="text-indent:0.5in;">Demikian Berita Acara ini kami buat untuk bahan selanjutnya.</td>
        </tr>
      </table>
    </center>
    <center>
      <table width=800 border="0">
        <tr>
          <td></td>
          <td></td>
          <td align="right">Kuala Kapuas</td>
          <td>.................2021</td>
        </tr>
        <tr>
          <td align="center">Mengetahui,</td>
          <td></td>
          <td colspan="2" align="center">Petugas Kelurahan</td>
        </tr>
        <tr>
          <td align="center">Ketua RT ...../RW .....</td>
          <td align="center" height=30>Pemohon</td>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <td></td>
          <td></td>
          <td colspan="2" align="center">1. .....................................................</td>
        </tr>
        <tr>
          <td colspan="4" height=30></td>
        </tr>
        <tr>
          <td align="center">.............................</td>
          <td align="center">.............................</td>
          <td colspan="2" align="center">2. .....................................................</td>
        </tr>
      </table>
      <br>
      <p>DENAH LOKASI BANGUNAN</p>
      <br>
      <table border=1 cellspacing=0 width=800 height=450>
        <tr>
          <td></td>
        </tr>
      </table>
    </center>
  </body>

</html>