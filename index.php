<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'bootstrap/css.php' ?>
    <title>Home Page</title>
</head>


<body id="page-top">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
        <div class="container">
            <a class="navbar-brand" href="#page-top"><img src="assets/img/kapuas1.jpg" alt="..." /></a>
            <span style="color:gold ">Kelurahan Selat Hulu Kuala Kapuas</span>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="fas fa-bars ms-1"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                    <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#pelayanan">Pelayanan</a></li>
                    <li class="nav-item"><a class="nav-link" href="#persyaratan">Persyaratan</a></li>
                    <li class="nav-item"><a class="nav-link" href="#team">Tata Cara</a></li>
                    <li class="nav-item"><a class="nav-link" href="login_user.php">Login</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Masthead-->
    <header class="masthead">
        <div class="container">
            <div class="masthead-subheading">Selamat Datang</div>
            <div class="masthead-heading text-uppercase">SISTEM INFORMASI KELURAHAN SELAT HULU KUALA KAPUAS
            </div>
            <a class="btn btn-primary btn-xl text-uppercase" href="#pelayanan">More</a><br>
        </div>
    </header>
    <!-- Services-->
    <section class="page-section" id="pelayanan">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">PELAYANAN</h2>
            </div>
            <div class="row text-center">
                <div class="col-md-4">
                    <div class="card card-success"><br>
                        <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal1">
                            <span class="fa-stack fa-4x">
                                <i class="fas fa-circle fa-stack-2x text-primary"></i>
                                <i class="fas fa-align-justify fa-stack-1x fa-inverse"></i>
                            </span>
                            <h4 class="my-3">PILIH PELAYANAN</h4>
                        </a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card"><br>
                        <a href="#persyaratan">
                            <span class="fa-stack fa-4x">
                                <i class="fas fa-circle fa-stack-2x text-primary"></i>
                                <i class="fas fa-clipboard-list fa-stack-1x fa-inverse"></i>
                            </span>
                            <h4 class="my-3">PERSYARATAN</h4>
                        </a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card"><br>
                        <a href="#team">
                            <span class="fa-stack fa-4x">
                                <i class="fas fa-circle fa-stack-2x text-primary"></i>
                                <i class="fas fa-list-ol fa-stack-1x fa-inverse"></i>
                            </span>
                            <h4 class="my-3">TATA CARA</h4>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About-->
    <!--Persyaratan-->

    <section class="page-section" id="persyaratan">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">Persyaratan</h2><br><br>
                <h3 class="section-subheading text-muted">Berkas Masing-masing 2 Rangkap</h3>
            </div>
            <ol>
                <li><span style="color:#B22222;"><b>Surat Keterangan Usaha</b></span>

                    <ul>
                        <li>Mengisi Blanko Surat Keterangan Usaha</li>
                        <li>Mengisi Surat Pernyataan</li>
                        <li>Surat Pengantar RT/RW</li>
                        <li>Mengisi Surat Pernyataan</li>
                        <li>Tanda Lunas PBB Tahun Berjalan</li>
                        <li>Perjanjian Sewa (Jika Ada)</li>
                    </ul>
                </li>
                <li><span style="color:#B22222;"><b>Surat Keterangan Belum Memiliki Rumah</b></span>
                    <ul>
                        <li>Mengisi Surat Pernyataan Belum Memiliki Rumah</li>
                        <li>Surat Pengantar RT/RW</li>
                        <li>Foto KTP</li>
                        <li>Foto Kartu Keluarga</li>
                    </ul>
                </li>
                <li><span style="color:#B22222;"><b>Izin Mendirikan Bangunan</b></span>
                    <ul>
                        <li>Pengisian Blangko Permohonan</li>
                        <li>Tandatangan tidak keberatan sebelah menyebelah dan sket bangunan tempat usaha</li>
                        <li>Surat Sewa/pernyataan pemilik tanah (apabila bukan milik sendiri)</li>
                        <li>Surat Kuasa (apabila yang mengurus bukan Pemohon Langsung)</li>
                        <li>Surat Pernyataan tanah tidak dalam sengketa dan seperbatasan</li>
                        <li>Surat Pernyataan Batas Tanah Tidak Diketahui Keberadaanya</li>
                        <li>Pengantar dari Ketua RT</li>
                        <li>Fotocopy KTP yang masih berlaku</li>
                        <li>Surat Pernyataan Garis Sempadan Samping Bangunan</li>
                        <li>Fotocopy Sertifikat/Segel/Sporadik</li>
                        <li>Fotocopy Tanda Lunas PBB Tahun Terakhir</li>
                        <li>Berita acara Pengecekan lapangan</li>
                    </ul>
                </li>
                <li><span style="color:#B22222;"><b>Surat Keterangan Tidak Mampu</b></span>
                    <ul>
                        <li>Pengisian Blangko Permohonan</li>
                        <li>Surat pengantar dan keterangan RT/RW Setempat</li>
                        <li>Surat pernyataan tidak mampu yang diketahui RT/RW setempat, serta 2 orang saksi di atas materai Rp6 ribu</li>
                        <li>Fotocopy KTP dan KK pemohon</li>
                        <li>Fotocopy KTP 2 orang saksi</li>
                        <li>Tanda Lunas PBB</li>
                        <li>Pas foto rumah yang bersangkutan dari posisi depan dan samping rumah masing-masing ukuran 5R</li>
                    </ul>
                </li>
                <li><span style="color:#B22222;"><b>Surat Keterangan Belum Menikah</b></span>
                    <ul>
                        <li>Pengisian Blangko Permohonan</li>
                        <li>Surat Pengantar dari RT/RW Setempat</li>
                        <li>Fotokopi KTP elektronik pemohon dan 2 orang saksi</li>
                        <li>Fotokopi Kartu Keluarga(KK)</li>
                        <li>Surat pernyataan belum menikah dari orang tua atau wali yang diketahui RT/RW setempat, serta 2 orang saksi di atas materai Rp6 ribu</li>
                    </ul>
                </li>
                <li><span style="color:#B22222;"><b>Surat Keterangan Menikah dari Kelurahan</b></span>
                    <ul>
                        <li>Kartu keluarga, KTP (Asli) dan photo copy KTP yang bersangkutan, orangtua/wali serta photo copy KTP saksi (Masing-masing sebanyak 2 lembar)</li>
                        <li>Surat pernyataan belum pernah menikah dari yang bersangkutan yang ditandatangani diatas materai Rp 6.000 yang diketahui oleh RT dan RW</li>
                        <li>Photo copy akta cerai hidup/mati (Bagi yang pernah menikah)</li>
                        <li>Surat jaminan nikah dari orangtua/wali yang diketahui oleh RT dan RW</li>
                        <li>Surat izin dari orangtua/wali yang diketahui RT dan RW</li>
                        <li>Photo warna 3 x 4 sebanyak 2 lembar</li>
                    </ul>
                </li>
                <li><span style="color:#B22222;"><b>Surat Keterangan Domisili dari Kelurahan</b></span>
                    <ul>
                        <li>Kartu keluarga dan KTP Asli pemohon</li>
                        <li>Surat pengantar dari RT dan RW</li>
                    </ul>
                </li>
                <li><span style="color:#B22222;"><b>Surat Keterangan Pindah dari Kelurahan</b></span>
                    <ul>
                        <li>Kartu Keluarga, KTP (Asli) dan photo copy</li>
                        <li>Surat pengantar dari RT dan RW</li>
                        <li>Photo hitam putih ukuran 3 x 4 sebanyak 2 lembar</li>
                    </ul>
                </li>
                <li><span style="color:#B22222;"><b>Surat Keterangan Kematian dari Kelurahan</b></span>
                    <ul>
                        <li>Pengantar RT/RW.</li>
                        <li>Foto copy KTP 2 orang saksi.</li>
                        <li>Foto copy Surat kematian dari rumah sakit ( jika meninggal di rumah sakit )</li>
                    </ul>
                </li>
                <li><span style="color:#B22222;"><b>Surat Keterangan Menikah dari Kelurahan</b></span>
                    <ul>
                        <li>Ahli surat kematian/Akta surat kematian yang telah di legalisir</li>
                        <li>Photocopy Surat Akta Perkawinan/Akta Nikah yang di legalisir</li>
                        <li>Photocopy Akta Perceraian (Bila sudah bercerai)</li>
                        <li>PhotoCopy Akta kelahiran dari ahli waris dari 2 (orang saksi)</li>
                        <li>Photocopy KTP (Kartu Tanda Penduduk) para ahli waris</li>
                        <li>Photocopy KK (Kartu Keluarga) para ahli waris</li>
                        <li>Asli Surat Pernyataan ahli waris dan kuasa ahli waris yang telah ditandatangani oleh para ahli waris serta diketahui oleh RT/RW dari 2 (dua) orang saksi dengan materai Rp 6.000</li>
                    </ul>
                </li>
            </ol>
        </div>
    </section>
    </div>
    <!-- Team-->
    <section class="page-section bg-light" id="team">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">Tata Cara</h2>
            </div><br><br>
            <div class="row text-center">
                <div class="col-md-3"><img src="assets/img/daftar1.jpg" width="200"></div>
                <div class="col-md-3"><img src="assets/img/login1.jpg" width="200"></div>
                <div class="col-md-3"><img src="assets/img/layanan1.jpg" width="200"></div>
                <div class="col-md-3"><img src="assets/img/blanko1.jpg" width="200"></div>
            </div>
            <div class="row text-center">
                <div class="col-md-3"><img src="assets/img/syarat1.jpg" width="200"></div>
                <div class="col-md-3"><img src="assets/img/verifikasi.jpg" width="200"></div>
                <div class="col-md-3"><img src="assets/img/unduh1.jpg" width="200"></div>
                <div class="col-md-3"><img src="assets/img/kel1.jpg" width="200"></div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8 mx-auto text-center">
            </div>
        </div>
        </div>
    </section>

    <!-- Footer-->
    <?php include 'bootstrap/footer.php' ?>
    <!-- Portfolio Modals-->
    <!-- Portfolio item 1 modal popup-->
    <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-bs-dismiss="modal"><img src="../../TA/assets/bootstrap/assets/img/close-icon.svg" alt="Close modal" /></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="modal-body">
                                <!-- Project details-->
                                <h2 class="text-uppercase">PILIH PELAYANAN</h2><br>

                                <p>Silahkan Login atau daftar jika belum memiliki akun</p>
                                <a class="btn btn-info btn-xl text-uppercase" href="/TA/daftar.php">DAFTAR</a>
                                <a class="btn btn-primary btn-xl text-uppercase" href="/TA/login_user.php">LOGIN</a>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Portfolio item 2 modal popup-->
    <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-bs-dismiss="modal"><img src="bootstrap/assets/img/close-icon.svg" alt="Close modal" /></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="modal-body">
                                <!-- Project details-->
                                <h2 class="text-uppercase">Surat Keterangan Usaha</h2>
                                <p>Silahkan Login atau daftar jika belum memiliki akun</p>
                                <ul class="list-inline">
                                    <li>
                                        <strong>Client:</strong>
                                        Threads
                                    </li>
                                    <li>
                                        <strong>Category:</strong>
                                        Illustration
                                    </li>
                                </ul>
                                <a class="btn btn-info btn-xl text-uppercase" href="#services">DAFTAR</a>
                                <a class="btn btn-primary btn-xl text-uppercase" href="login.php">LOGIN</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Portfolio item 3 modal popup-->
    <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-bs-dismiss="modal"><img src="../../TA/assets/bootstrap/assets/img/Capture.jpg" alt="Close modal" /></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="modal-body">
                                <!-- Project details-->
                                <h2 class="text-uppercase">Surat Keterangan Belum Memiliki Rumah</h2>
                                <p>Silahkan Login atau daftar jika belum memiliki akun</p>
                                <a class="btn btn-info btn-xl text-uppercase" href="daftar.php">DAFTAR</a>
                                <a class="btn btn-primary btn-xl text-uppercase" href="login.php">LOGIN</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>




    <!-- Bootstrap core JS-->
    <?php include 'bootstrap/js.php' ?>
</body>

</html>