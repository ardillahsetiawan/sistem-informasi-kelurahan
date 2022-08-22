<!DOCTYPE html>
<html>

<?php session_start();
include '../koneksi.php';
$id_sku = $_GET['id_sku'];
$ambil = $koneksi->query("SELECT * FROM user JOIN sku ON  user.id_user = sku.id_user WHERE id_sku='$id_sku'");
$pecah = $ambil->fetch_assoc();
?>

<head>
  <title>Surat Pernyataan SKU</title>
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
            <font size="5"><u>SURAT PERNYATAAN</u></font><br>
          </center>
        </td>
      </tr>
      <br>
      <table width="625">
        <tr>
          <td>
            <font size="2">Dengan Hormat <br>Saya yang bertanda tangan dibawah ini :</font>
          </td>
        </tr>
      </table>
      <table border="0" style="text-align:justify;">
        <tr class="text2">
          <td>Nama</td>
          <td width="490">: <?php echo $_SESSION['user']['nama'] ?></td>
        </tr>
        <tr>
          <td>Tempat Tanggal Lahir</td>
          <td>:
            <?php echo $_SESSION['user']['tempat_lahir'] ?>, <?php echo $_SESSION['user']['tanggal_lahir'] ?>
          </td>
        </tr>
        <tr>
          <td>Jenis Kelamin</td>
          <td>:
            <?php echo $_SESSION['user']['jenis_kelamin'] ?>
          </td>
        </tr>
        <tr>
          <td>Pekerjaan</td>
          <td>:
            <?php echo $_SESSION['user']['pekerjaan'] ?>
          </td>
        </tr>
        <tr>
          <td>Status</td>
          <td>:
            <?php echo $_SESSION['user']['status_perkawinan'] ?>
          </td>
        </tr>
        <tr>
          <td>No. KTP</td>
          <td>:
            <?php echo $_SESSION['user']['no_ktp'] ?>
          </td>
        </tr>
        <tr>
          <td>Alamat</td>
          <td>:
            <?php echo $_SESSION['user']['alamat'] ?>
          </td>
        </tr>
      </table>
      <table width="625">
        <tr>
          <td>
            <font size="2">Dengan ini menyatakan bahwa saya mempunyai usaha :</font>
          </td>
        </tr>
      </table>
      <table border="0" style="text-align:justify;">
        <tr class="text2">
          <td>Nama Usaha</td>
          <td width="500">:
            <?php echo $pecah['nama_usaha']; ?>
          </td>
        </tr>
        <tr>
          <td>Jenis Usaha</td>
          <td>:
            <?php echo $pecah['jenis_usaha']; ?>
          </td>
        </tr>
        <tr>
          <td>Luas Tempat Usaha</td>
          <td>:
            <?php echo $pecah['luas_tempat']; ?>
          </td>
        </tr>
        <tr>
          <td>Tanah Milik</td>
          <td>:
            <?php echo $pecah['status_tempat']; ?>
          </td>
        </tr>
        <tr>
          <td>Alamat Usaha</td>
          <td>:
            <?php echo $pecah['alamat_usaha']; ?>
          </td>
        </tr>
      </table>
      <br>
      <table width="625" style="text-align:justify; text-indent: 0.3in;">
        <tr>
          <td>
            <font size="2">Demikian pernyataan ini dibuat dan apabila di kemudian hari pernyataan saya ini tidak benar maka saya bersedia mempertanggungjawabkannya di hadapan hukum dan ketentuan yang berlaku.</font>
          </td>
        </tr>
      </table>
      <br>
      <table width="625" cellspacing="0">
        <tr>
          <td width="250"><br><br><br><br></td>
          <td class="text" align="center">Kuala Kapuas, <?php echo date('d F Y', strtotime($pecah['tanggal_sku'])); ?>
            <!--tanggal--> <br> Yang Membuat Pernyataan,
          </td>
        </tr>
        <tr>
          <td><br><br><br><br></td>
          <td class="text" align="center"><br><br><br>
            <!--nama-->
            <b><?php echo $_SESSION['user']['nama'] ?></b>
          </td>
        </tr>
      </table>
    </center>
  </body>

</html>