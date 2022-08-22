<!DOCTYPE html>
<html>

<?php session_start();
include '../koneksi.php';
$id_sku = $_GET['id_sku'];
$ambil = $koneksi->query("SELECT * FROM user JOIN sku ON  user.id_user = sku.id_user WHERE id_sku='$id_sku'");
$pecah = $ambil->fetch_assoc();

?>

<head>
  <title>Blanko SKU</title>
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
      <table width="630" cellspacing="0">
        <tr>
          <td style="text-align: right;">Kuala Kapuas,
            <?php echo date('d F Y', strtotime($pecah['tanggal_sku'])); ?>
          </td>
        </tr>
        <tr></tr>
      </table>
      <table width="630" cellspacing="0">
        <tr>
          <td></td>
          <td>Kepada Yth.</td>
        </tr>
        <tr>
          <td style="text-align: justify;">Perihal : Permohonan Keterangan Usaha</td>
          <td>Lurah Selat Hulu</td>
        </tr>
        <tr>
          <td></td>
          <td>di -</td>
        </tr>
        <tr>
          <td></td>
          <td style="text-indent: 0.4in;">Kuala Kapuas</td>
        </tr>
      </table>
      <br>
      <table width="550" style="text-align: justify;" cellspacing="0">
        <tr>
          <td>
            <font size="2">Dengan hormat, <br>Saya yang bertanda tangan dibawah ini :</font>
          </td>
        </tr>
      </table>
      <table border="0" style="text-align:justify;" width="550" cellspacing="0">
        <tr class="text2">
          <td>Nama</td>
          <td width="420">:
            <?php echo $_SESSION['user']['nama'] ?>
          </td>
        </tr>
        <tr>
          <td>Tempat Tanggal Lahir</td>
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
      <table width="555" style="text-align:justify; text-indent: 0.5in;">
        <tr>
          <td>
            <font size="2">Dengan ini mengajukan permohonan untuk dapat dibuatkan Surat Keterangan Usaha atas nama saya sendiri,
              untuk keperluan <b><?php echo $pecah['keperluan_surat_sku']; ?></b></b>
              <!--keperluan surat-->dengan jenis usaha <b><?php echo $pecah['jenis_usaha']; ?></b>
              <!--jenis usah-->Dengan lokasi usaha di jalan
              <b><?php echo $pecah['alamat_usaha']; ?></b>
              <!--isi--> RT ...
              <!--RT--> RW ...
              <!--RW-->Kelurahan Selat Hulu, Kecamatan Selat, Kuala Kapuas.
            </font>
          </td>
        </tr>
      </table>
      <table width="550" style="text-align: justify;" cellspacing="0">
        <tr>
          <td>
            <font size="2">Sebagai bahan pertimbangan bersama ini saya lampirkan :</font>
          </td>
        </tr>
      </table>
      <table width="480" style="text-align:justify;">
        <tr>
          <td>1. Pengantar RT</td>
        </tr>
        <tr>
          <td>2. Fotocopy KTP dan KK yang masih berlaku</td>
        </tr>
        <tr>
          <td>3. Mengisi Blanko</td>
        </tr>
        <tr>
          <td>4. Fotocopy Tanda Lunas PBB tahun berjalan</td>
        </tr>
        <tr>
          <td>5. Surat Perjanjian Sewa/kontrak/pinjam dengan pemilik tanah</td>
        </tr>
      </table>
      <table width="550" style="text-indent: 0.4in;">
        <tr>
          <td>
            <font style="text-align:justify;">Demikian surat permohonan ini saya sampaikan, agar menjadi bahan pertimbangan untuk penyelesaian selanjutnya.</font>
          </td>
        </tr>
      </table>
      <br>
      <table width="625">
        <tr>
          <td width="430"><br><br><br><br></td>
          <td class="text" align="center">Pemohon,</td>
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