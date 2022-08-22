<!DOCTYPE html>
<html>

<?php session_start();
include '../koneksi.php';

$id_imb = $_GET['id_imb'];
$ambil = $koneksi->query("SELECT * FROM user JOIN imb ON  user.id_user = imb.id_user WHERE id_imb='$id_imb'");
$pecah = $ambil->fetch_assoc();
?>

<head>
  <title>Surat Pernyataan Pemilik Tanah IMB</title>
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
      <tr>
        <td>
          <center>
            <font size="5"><u>SURAT PERNYATAAN PEMILIK TANAH</u></font><br>
          </center>
        </td>
      </tr>
      <br>
      <table width="625">
        <tr>
          <td>
            <font size="2">Saya yang bertandatangan dibawah ini :</font>
          </td>
        </tr>
      </table>
      <table border="0" style="text-align:justify;">
        <tr class="text2">
          <td>Nama</td>
          <td width="490">:

          </td>
        </tr>
        <tr>
          <td>Tempat Tanggal Lahir</td>
          <td>:

          </td>
        </tr>
        <tr>
          <td>Pekerjaan</td>
          <td>:

          </td>
        </tr>
        <tr>
          <td>Alamat</td>
          <td>:

          </td>
        </tr>
      </table>
      <table width="625">
        <tr>
          <td>
            <font size="2">Dengan ini memberikan kuasa/izin, kepada :</font>
          </td>
        </tr>
      </table>
      <table border="0">
        <tr class="text2">
          <td>Nama</td>
          <td width="490">:
            <?php echo $_SESSION['user']['nama'] ?>
          </td>
        </tr>
        <tr>
          <td>Tempa, Tanggal Lahir</td>
          <td>:
            <?php echo $_SESSION['user']['tempat_lahir'] ?>, <?php echo $_SESSION['user']['tanggal_lahir'] ?>
          </td>
        </tr>
        <tr>
          <td>Pekerjaan</td>
          <td>:
            <?php echo $_SESSION['user']['pekerjaan'] ?>
          </td>
        </tr>
        <tr>
          <td>Alamat</td>
          <td>:
            <?php echo $_SESSION['user']['alamat'] ?>
          </td>
        </tr>
      </table>
      <table width="625" style="text-align:justify; text-indent: 0.3in;">
        <tr>
          <td>
            <font size="2">Untuk mendirikan/menambah bangunan di tanah milik saya yang berlokasi di 
              <?php echo $pecah['lokasi'] ?> Kelurahan Selat Hulu Kuala Kapuas Kuala Kapuas berdasar Surat Tanah ....
              Nomor ...
              Tanggal ...
            </font>
          </td>
        </tr>
        <td>
          <font>Demikian surat pernyataan ini dibuat dengan sebenarnya tanpa ada paksaan dari pihak manapun.</font>
        </td>
      </table>
      <table border="0" cellpadding="9" style="width: 590px;">
        <thead>
          <tr>
            <td></td>
            <td colspan="4" align="center"></td>
            <td></td>
            <td></td>
            <td align="right" width="210">Kuala Kapuas, <?php echo date('d F Y', strtotime($pecah['tanggal_imb'])); ?>
              <!--tanggal-->
            </td>
          </tr>
          <tr>
            <td colspan="4">Yang diberi izin</td>
            <td></td>
            <td></td>
            <td></td>
            <td align="right" width="">Yang Memberi Izin</td>
          </tr>
        </thead>
        <tbody>
          <br>
          <tr>
            <td></td>
            <td style="width: 20px;"></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td align="center">Materai <br> 6000</td>
          </tr>
        </tbody>
        <table>
          <tr>
            <td colspan="4">
              <!--NAMA-->...............
            </td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td style="width: 420px;"></td>
            <td align="center">...............
              <!--isinama-->
            </td>
          </tr>
        </table>
        <table>
          <tr>
            <td align="center">Mengetahui :</td>
          </tr>
          <tr>
            <td align="center">Ketua RT ... / RW ...</td>
          </tr>
        </table>
        <br><br><br>
        <table>
          <tr>
            <td align="center">...............</td>
          </tr>
        </table>
        </div>
      </table>
    </center>
  </body>

</html>