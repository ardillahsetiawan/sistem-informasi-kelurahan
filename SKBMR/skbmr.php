<!DOCTYPE html>
<html>

<?php session_start();
include '../koneksi.php';
$id_bmr = $_GET['id_bmr'];
$ambil = $koneksi->query("SELECT * FROM user JOIN bmr ON  user.id_user = bmr.id_user WHERE id_bmr='$id_bmr'");
$pecah = $ambil->fetch_assoc();
?>

<section>

    <head>
        <title>Surat Pernyataan Belum Memiliki Rumah</title>
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
                            <font size="5">SURAT PERNYATAAN</font><br>
                            <font size="5"><b><u>BELUM MEMILIKI RUMAH</u></b></font><br>
                        </center>
                    </td>
                </tr>
                <br><br><br>
                <table width="625">
                    <tr>
                        <td>
                            <font size="2">Saya yang bertanda tangan dibawah ini :</font>
                        </td>
                    </tr>
                </table>
                <table border="0" style="text-align:justify;">
                    <tr class="text2">
                        <td>Nama</td>
                        <td width="430">: <?php echo $_SESSION['user']['nama'] ?>
                            <!--isi-->
                        </td>
                    </tr>
                    <tr>
                        <td>Jenis Kelamin</td>
                        <td>: <?php echo $_SESSION['user']['jenis_kelamin'] ?>
                            <!--isi-->
                        </td>
                    </tr>
                    <tr>
                        <td>Tempat / Tanggal Lahir</td>
                        <td>:
                            <?php echo $_SESSION['user']['tempat_lahir'] ?>, <?php echo $_SESSION['user']['tanggal_lahir'] ?>
                        </td>
                    </tr>
                    <tr>
                        <td>Pendidikan Terakhir</td>
                        <td>:
                            <?php echo $_SESSION['user']['pendidikan'] ?>
                        </td>
                    </tr>
                    <tr>
                        <td>Agama</td>
                        <td>:
                            <?php echo $_SESSION['user']['agama'] ?>
                        </td>
                    </tr>
                    <tr>
                        <td>Pekerjaan</td>
                        <td>:
                            <?php echo $_SESSION['user']['pekerjaan'] ?>
                        </td>
                    </tr>
                    <tr>
                        <td>Alamat Rumah</td>
                        <td>:
                            <?php echo $_SESSION['user']['alamat'] ?>
                        </td>
                    </tr>
                </table>
                <table width="625" style="text-align:justify; text-indent: 0.3in;">
                    <tr>
                        <td>
                            <font size="2">Menyatakan dengan sebenarnya bahwa sampai dengan saat ini saya yang bernama <b><?php echo $_SESSION['user']['nama'] ?></b>
                                <!--nama--> belum memiliki rumah sampai pada saat Surat Pernyataan ini dibuat. <br><br>Surat Pernyataan ini saya buat untuk <b>Keperluan :
                                    <?php echo $pecah['keperluan_surat_bmr']; ?>
                                    <!--keperluan-->
                                </b>
                            </font>
                        </td>
                    </tr>
                </table>
                <table width="625" style="text-align:justify; text-indent: 0.3in;">
                    <tr>
                        <td>
                            <font size="2">Demikian Surat Pernyataan ini dibuat dengan sebenarnya dan apabila dikemudian hari ternyata tidak benar maka saya bersedia dituntut sesuai dengan ketentuan hukum yang berlaku.</font>
                        </td>
                    </tr>
                </table>
                <table border="0" cellpadding="9" style="width: 590px;">
                    <thead>
                        <tr>
                            <td></td>
                            <td colspan="4" align="center"></td>
                            <td></td>
                            <td></td>
                            <td align="right" width="">Kuala Kapuas,
                                <?php echo date('d F Y', strtotime($pecah['tanggal_bmr'])); ?>
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td colspan="4" align="center">Saksi-saksi,</td>
                            <td></td>
                            <td></td>
                            <td align="right" width=""><b>Yang Membuat Pernyataan</b></td>
                        </tr>
                    </thead>
                    <tbody>
                        <br>
                        <tr>
                            <td></td>
                        </tr>
                        <tr>
                            <td>1.</td>
                            <td>TTD</td>
                            <td>:</td>
                            <td>......</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td align="center">Materai <br> 6000</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td style="width: 20px;">Nama</td>
                            <td>:</td>
                            <td>......</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td align="right"><b>
                                    <?php echo $_SESSION['user']['nama'] ?>
                                    <!--nama pembuat pernyataan-->
                                </b></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>2.</td>
                            <td>TTD</td>
                            <td>:</td>
                            <td>......</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td style="width: 20px;">Nama</td>
                            <td>:</td>
                            <td>......</td>
                            <td></td>
                        </tr>
                    </tbody>
                    </div>
                </table>
            </center>
        </body>








</html>