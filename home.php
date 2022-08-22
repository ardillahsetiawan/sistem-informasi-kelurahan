<!DOCTYPE html>
<html lang="en">
<?php
session_start();
include 'koneksi.php';
if (!isset($_SESSION['user']) or empty($_SESSION['user'])) {
    echo "<script>alert('Silahkan Login!');</script>";
    echo "<script>location='login_user.php';</script>";
    exit();
}

?>

<head>
    <?php include 'bootstrap/css.php' ?>
    <title>Pelayanan</title>
</head>

<body id="page-top">
    <!-- Navigation-->
    <?php include 'bootstrap/navbar.php' ?>
    <!-- Masthead-->
    <header class="masthead">
        <div class="container">
            <div class="masthead-subheading">Selamat Datang</div>
            <div class="masthead-heading text-uppercase">Sistem Informasi Kelurahan Selat Hulu Kuala Kapuas</div>
            <a class="btn btn-primary btn-xl text-uppercase" href="#portfolio">Pelayanan</a>
            <a class="btn btn-primary btn-xl text-uppercase btn-info" href="#permohonan">Permohonan</a>
        </div>
    </header>
    <section class="page-section bg-light" id="portfolio" name="jenis_pelayanan">
        <div class="container">
            <div class=col-md12>
                <div class="row">
                    <div class="text-center">
                        <h2 class="section-heading text-uppercase">JENIS PELAYANAN</h2>
                        <h3 class="section-subheading text-muted">Silahkan Pilih Pelayanan</h3>
                    </div>
                    <div class="col-lg-3">
                        <!-- Portfolio item 2-->
                        <div class="portfolio-item">
                            <a href="SKU/index_sku.php?id_user=<?php echo $_SESSION['user']['id_user'] ?>">
                                <img class="img-fluid" src="./assets/img/sku.png" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <a href="SKU/index_sku.php?id_user=<?php echo $_SESSION['user']['id_user'] ?>">Surat Keterangan Usaha<br></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <!-- Portfolio item 3-->
                        <div class="portfolio-item">
                            <a href="SKBMR/index_skbmr.php?id_user=<?php echo $_SESSION['user']['id_user'] ?>">
                                <img class="img-fluid" src="./assets/img/rumah.jpg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <a href="SKBMR/index_skbmr.php?id_user=<?php echo $_SESSION['user']['id_user'] ?>">Surat Keterangan Belum Memiliki Rumah<br></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="portfolio-item">
                            <a href="imb/index_imb.php?id_user=<?php echo $_SESSION['user']['id_user'] ?>">
                                <img class="img-fluid" src="./assets/img/imb.png" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <a href="imb/index_imb.php?id_user=<?php echo $_SESSION['user']['id_user'] ?>">Izin Mendirikan Bangunan</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="portfolio-item">
                            <a href="tm/index_tm.php?id_user=<?php echo $_SESSION['user']['id_user'] ?>">
                                <img class="img-fluid" src="./assets/img/sktm.jpg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <a href="tm/index_tm.php?id_user=<?php echo $_SESSION['user']['id_user'] ?>">Surat Keterangan Tidak Mampu</a>
                            </div>
                        </div>
                    </div>

                </div><br>
                <div class="row">
                    <div class="col-lg-3">
                        <div class="portfolio-item">
                            <a href="kd/index_kd.php?id_user=<?php echo $_SESSION['user']['id_user'] ?>">
                                <img class="img-fluid" src="./assets/img/skd.jpg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <a href="kd/index_kd.php?id_user=<?php echo $_SESSION['user']['id_user'] ?>">Surat Keterangan Domisili</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="portfolio-item">
                            <a href="kp/index_kp.php?id_user=<?php echo $_SESSION['user']['id_user'] ?>">
                                <img class="img-fluid" src="./assets/img/skp.jpg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <a href="kp/index_kp.php?id_user=<?php echo $_SESSION['user']['id_user'] ?>">Surat Keterangan Pindah</a>
                            </div>
                        </div>
                    </div>
                    <?php
                    if ($_SESSION['user']['status_perkawinan'] == 'Belum Kawin') {
                    ?>
                        <div class="col-lg-3">
                            <!-- Portfolio item 2-->
                            <div class="portfolio-item">
                                <a href="bm/index_bm.php?id_user=<?php echo $_SESSION['user']['id_user'] ?>">
                                    <img class="img-fluid" src="./assets/img/skbmm.jpg" alt="..." />
                                </a>
                                <div class="portfolio-caption">
                                    <a href="bm/index_bm.php?id_user=<?php echo $_SESSION['user']['id_user'] ?>">Surat Keterangan Belum Menikah</a>
                                </div>
                            </div>
                        </div>
                    <?php
                    }
                    if ($_SESSION['user']['status_perkawinan'] != 'Kawin') {
                    ?>
                        <div class="col-lg-3">
                            <div class="portfolio-item">
                                <a href="km/index_km.php?id_user=<?php echo $_SESSION['user']['id_user'] ?>">
                                    <img class="img-fluid" src="./assets/img/skm.jpg" alt="..." />
                                </a>
                                <div class="portfolio-caption">
                                    <a href="km/index_km.php?id_user=<?php echo $_SESSION['user']['id_user'] ?>">Surat Keterangan Menikah</a>
                                </div>
                            </div>
                        </div>
                </div><br>
                <div class="row">
                    <div class="col-lg-3">
                    </div>
                <?php } ?>
                <div class="col-lg-3">
                    <div class="portfolio-item">
                        <a href="kk/index_kk.php?id_user=<?php echo $_SESSION['user']['id_user'] ?>">
                            <img class="img-fluid" src="./assets/img/skk.jpg" alt="..." />
                        </a>
                        <div class="portfolio-caption">
                            <a href="kk/index_kk.php?id_user=<?php echo $_SESSION['user']['id_user'] ?>">Surat Keterangan Kematian</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="portfolio-item">
                        <a href="kaw/index_kaw.php?id_user=<?php echo $_SESSION['user']['id_user'] ?>">
                            <img class="img-fluid" src="./assets/img/skaw.jpg" alt="..." />
                        </a>
                        <div class="portfolio-caption">
                            <a href="kaw/index_kaw.php?id_user=<?php echo $_SESSION['user']['id_user'] ?>">Surat Keterangan Ahli Waris</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                </div>
                </div>
            </div>
        </div>
    </section>

    <section class="page-section bg-light" id="permohonan" name="jenis_pelayanan">
        <div class="container">

            <?php
            include 'koneksi.php';
            //$ambil = $koneksi->query("SELECT * FROM user INNER JOIN pelayanan ON  user.id_user = pelayanan.id_user
            //INNER JOIN nama_pelayanan ON pelayanan.id_nama_pelayanan = nama_pelayanan.id_nama_pelayanan");
            $nomor = 1;
            ?>
            <?php $id_user = $_SESSION['user']['id_user'];
            $ambil = $koneksi->query("SELECT * FROM pelayanan JOIN nama_pelayanan ON 
            pelayanan.id_nama_pelayanan=nama_pelayanan.id_nama_pelayanan WHERE id_user = '$id_user' ORDER BY id_user DESC");
            ?>
            <div class="text-center">
                <h2 class="section-heading text-uppercase"><?php echo $_SESSION['user']['nama'] ?></h2>
                <h3 class="section-subheading text-muted">PERMOHONAN ANDA</h3>
            </div>
            <div class="row">

                <table class="table table-bordered datatables">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Pelayanan</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while ($pecah = $ambil->fetch_assoc()) { ?>
                            <tr>
                                <td><?php echo $nomor;
                                    ?></td>
                                <td><?php echo $pecah['nama_layanan'];
                                    ?></td>
                                <td> <?php if ($pecah['status_layanan'] == NULL) : ?>
                                        <span>Menunggu Konfirmasi</span>
                                    <?php else : ?>
                                        <?php echo $pecah['status_layanan']; ?>
                                    <?php endif ?>
                                </td>
                            </tr>
                            <?php $nomor++;
                            ?>
                        <?php }
                        ?>
                    </tbody>
                </table>
            </div>

        </div>
    </section>
    <?php include './bootstrap/footer.php' ?>
    <?php include './bootstrap/js.php' ?>
</body>

</html>