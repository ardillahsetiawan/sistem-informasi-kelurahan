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
  <title>Surat Kuasa</title>
  <style>
    #margin1 {
      margin-left: 280px;
      margin-top: 1px;
    }
  </style>
</head>

<body onload="window.print()">

  <body>
    <h2 align="center"><u>SURAT KUASA</u></h2>
    <center>
      <table width=750 cellpadding=4 border="0" style="text-align:justify;">
        <tr>
          <td colspan="3">Yang bertanda tangan dibawah ini :</td>
        </tr>
        <tr>
          <td width=100>Nama</td>
          <td width=10>:</td>
          <td>

          </td>
        </tr>
        <tr>
          <td>Umur</td>
          <td>:</td>
          <td>

          </td>
        </tr>
        <tr>
          <td>Pekerjaan</td>
          <td>:</td>
          <td>

          </td>
        </tr>
        <tr>
          <td>Alamat</td>
          <td>:</td>
          <td>

          </td>
        </tr>
        <tr>
          <td colspan="3">Telah memberikan Kuasa penuh kepada :</td>
        </tr>
        <tr>
          <td>Nama</td>
          <td>:</td>
          <td>
            <?php echo $_SESSION['user']['nama'] ?>
          </td>
        </tr>
        <tr>
          <td>Umur</td>
          <td>:</td>
          <td>
            <?php echo $diff->y . " Tahun";  ?>
          </td>
        </tr>
        <tr>
          <td>Pekerjaan</td>
          <td>:</td>
          <td>
            <?php echo $_SESSION['user']['pekerjaan'] ?>
          </td>
        </tr>
        <tr>
          <td>Alamat</td>
          <td>:</td>
          <td>
            <?php echo $_SESSION['user']['alamat'] ?>
          </td>
        </tr>
        <tr>
          <td colspan="3">Untuk mengurus dan mendatangani segala hal yang berhubungan dengan proses perizinan .................... yang berlokasi di <?php echo $pecah['lokasi']  ?> Kelurahan Selat Hulu Kuala Kapuas.</td>
        </tr>
        <tr>
          <td colspan="3">Demikian Surat Kuasa ini dibuat dalam keadaan sadar dan tanpa ada paksaan dari pihak manapun dan apabila dalam pengurusan perizinan ini ada pemalsuan baik dalam tanda tangan dan kelengkapan berkas lainnya, maka kami bersedia dituntut berdasarkan ketentuan yang berlaku.</td>
        </tr>
      </table>
      <br><br><br>
      <table width=750 border="0">
        <tr>
          <td></td>
          <td></td>
          <td align="right">Kuala Kapuas</td>
          <td width=100>
            <!--tanggal-->
          </td>
        </tr>
        <tr>
          <td align="center">Yang Menerima</td>
          <td></td>
          <td align="center" colspan="2">Yang Menguasakan</td>
        </tr>
        <tr>
          <td></td>
          <td align="center">Materai</td>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <td></td>
          <td align="center">6000</td>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <td align="center" height=100>(.....................................................)</td>
          <td></td>
          <td align="center" colspan="2">(.....................................................)</td>
        </tr>
      </table>
    </center>
  </body>

</html>