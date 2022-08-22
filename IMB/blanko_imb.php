<!DOCTYPE html>
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

<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>Blanko IMB</title>
  <style>
    #margin1 {
      margin-left: 100px;
      margin-top: 1px;
    }

    #margin2 {
      margin-right: 500px;
      margin-top: 1px;
    }

    #margin3 {
      margin-left: 250px;
      margin-top: 1px;
    }

    #margin4 {
      margin-left: 100px;
      margin-top: 1px;
    }

    #margin5 {
      margin-right: 500px;
      margin-top: 1px;
    }

    #garis1 {
      margin-left: 425px;
    }

    #garis2 {
      margin-right: 425px;
    }
  </style>
</head>

<body onload="window.print()">

  <body>
    <br>
  
    <br>
    <div id="margin4">
      <table border="0" width="400">
        <tr>
          <td colspan="4">Dengan Hormat,</td>
        </tr>
        <tr>
          <td colspan="4">Saya yang bertanda tangan di bawah ini :</td>
        </tr>
        <tr>
          <td width="10">a.</td>
          <td width="150">Nama</td>
          <td width="10">:</td>
          <td width="180"><?php echo $_SESSION['user']['nama'] ?></td>
        </tr>
        <tr>
          <td>b.</td>
          <td>Umur</td>
          <td>:</td>
          <td><?php echo  $diff->y . " Tahun"; ?></td>
        </tr>
        <tr>
          <td>c.</td>
          <td>Pekerjaan</td>
          <td>:</td>
          <td><?php echo $_SESSION['user']['pekerjaan'] ?></td>
        </tr>
        <tr>
          <td>d.</td>
          <td>Tempat tinggal sekarang</td>
          <td>:</td>
          <td><?php echo $_SESSION['user']['alamat'] ?></td>
        </tr>
        <tr>
          <td>e.</td>
          <td>Kelurahan</td>
          <td>:</td>
          <td><?php echo $_SESSION['user']['kelurahan_domisili'] ?></td>
        </tr>
        <tr>
          <td>f.</td>
          <td>Kecamatan</td>
          <td>:</td>
          <td><?php echo $_SESSION['user']['kecamatan_domisili'] ?></td>
        </tr>
        <tr>
          <td>g.</td>
          <td>Kabupaten/Kota</td>
          <td>:</td>
          <td><?php echo $_SESSION['user']['kabupatenkota_domisili'] ?></td>
        </tr>
      </table>
      <br>
      <table border="0" width="700">
        <tr>
          <td colspan="4">Dengan ini mengajukan Permohonan Izin Mendirikan/Menambah Bangunan (IMB/IMMB) ......................................., sebagai berikut :</td>
        </tr>
        <tr>
          <td width="10">1.</td>
          <td width="120">Jenis bangunan</td>
          <td width="10">:</td>
          <td width="180"><?php echo $pecah['jenis_bangunan']; ?></td>
        </tr>
        <tr>
          <td>2.</td>
          <td>Jumlah bangunan</td>
          <td>:</td>
          <td></td>
        </tr>
        <tr>
          <td>3.</td>
          <td>Ukuran</td>
          <td>:</td>
          <td>P:.................m, L:.............m = Luas:.............M</td>
        </tr>
        <tr>
          <td>4.</td>
          <td>Lokasi di jalan</td>
          <td>:</td>
          <td><?php echo $pecah['lokasi']; ?></td>
        </tr>
        <tr>
          <td>5.</td>
          <td>Kelurahan</td>
          <td>:</td>
          <td></td>
        </tr>
        <tr>
          <td>6.</td>
          <td>Kecamatan</td>
          <td>:</td>
          <td></td>
        </tr>
        <tr>
          <td>7.</td>
          <td>Kabupaten/Kota</td>
          <td>:</td>
          <td></td>
        </tr>
      </table>
      <br>
      <table border="0" width="700">
        <tr>
          <td colspan="2">Sebagai bahan pertimbangan dilampirkan fotocopy:</td>
        </tr>
        <tr>
          <td width="5">1.</td>
          <td width="">Kartu Tanda Penduduk (E-KTP) yang masih berlaku</td>
        </tr>
        <tr>
          <td></td>
          <td>Nomor :.................................................. Tanggal :.....................</td>
        </tr>
        <tr>
          <td width="5">2.</td>
          <td width="">Sertifikat Tanah/SKT/Segel/Sporadik</td>
        </tr>
        <tr>
          <td></td>
          <td>Nomor :.................................................. Tanggal :.....................</td>
        </tr>
        <tr>
          <td>3.</td>
          <td>Tanda Lunas Pajak Bumi dan Bangunan (PBB) Tahun :...............</td>
        </tr>
        <tr>
          <td>4.</td>
          <td>Tanda tangan Tidak Keberatan sebelah menyebelah & sket bangunan</td>
        </tr>
        <tr>
          <td>5.</td>
          <td>Surat Sewa/Pernyataan tidak keberatan pemilik tanah (apabila bukan milik sendiri)</td>
        </tr>
        <tr>
          <td>6.</td>
          <td>Surat Kuasa (Apabila yang mengurus bukan pemohon langsung)</td>
        </tr>
        <tr>
          <td>7.</td>
          <td>Surat Pernyataan Tanah Tidak Dalam Sengketa & Seperbatasan</td>
        </tr>
        <tr>
          <td>8.</td>
          <td>Surat Pernyataan Garis Sempadan Samping Bangunan</td>
        </tr>
        <tr>
          <td>9.</td>
          <td>Pengantar dari Ketua RT setempat</td>
        </tr>
        <tr>
          <td>10.</td>
          <td>Berita Acara Pengecekan Perizinan dari Kelurahan</td>
        </tr>
        <tr>
          <td>11.</td>
          <td>Persyaratan - persyaratan lain apabila diperlukan</td>
        </tr>
      </table>
    </div>
    <br>
    <center>
    <div>
      <table width="600" border="0">
        <tr>
          <td width="190" class="text" align="center">Mengetahui/membenarkan :</td>
          <td></td>
          <td width="190" class="text" align="center">Kuala Kapuas, <?php echo date('d F Y', strtotime($pecah['tanggal_imb'])); ?></td>
        </tr>
        <tr>
          <td class="text" align="center"><b>KETUA RT.... RW....</b></td>
          <td></td>
          <td class="text" align="center">Pemohon</td>
        </tr>
      </table>
    </div>
    </center>
    <br><br><br><br><br>
    <center>
      <div id="garis1">
        <hr size="1px" width="55%">
      </div>

      <div id="garis2">
        <hr size="1px" width="55%">
      </div>
    </center>
  </body>

</html>