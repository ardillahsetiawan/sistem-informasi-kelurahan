<div id="wrapper">
    <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">
            <a class="navbar-brand" href="index0.php">Administrator</a>
        </div>
        <div style="color: white;
padding: 15px 50px 5px 50px;
float: left;
font-size: 16px;">
            <b>Nama Pengguna : </b><?php echo $_SESSION['adm']['nama_admin'] ?>&ensp; / &ensp;<b>Jabatan : </b><?php echo $_SESSION['adm']['jabatan'] ?>
        </div>
        <div style="color: white;
padding: 15px 50px 5px 50px;
float: right;
font-size: 16px;"><?php echo date('l, F j, Y'); ?> &nbsp; <a href="logout.php" class="btn btn-danger square-btn-adjust">Logout</a> </div>
    </nav>
    <!-- /. NAV TOP  -->
    <nav class="navbar-default navbar-side" role="navigation">
        <div class="sidebar-collapse">
            <ul class="nav" id="main-menu">
                <li class="text-center">
                    <img src="kapuas1.jpg" class="user-image img-responsive" />
                </li>
                <li><a href="index.php"><i class="fa fa-home"></i> Home</a></li>
                <li><a href="user.php"><i class="fa fa-users"></i> User</a></li>
                <?php if ($_SESSION['adm']['jabatan'] != 'Lurah') {
                    # code...
                ?>
                    <li><a href="index.php"><i class="fa fa-th-list"></i>Pelayanan</a></li>
                    <ul class="sub">
                        <li><a href="sku.php">
                                <font color="white">SKU</font>
                            </a></li>
                        <li><a href="bmr.php">
                                <font color="white">BMR</font>
                            </a></li>
                        <li><a href="imb.php">
                                <font color="white">IMB</font>
                            </a></li>
                        <li><a href="tm.php">
                                <font color="white">SKTM</font>
                            </a></li>
                        <li><a href="bm.php">
                                <font color="white">SKBM</font>
                            </a></li>
                        <li><a href="km.php">
                                <font color="white">SKM</font>
                            </a></li>
                        <li><a href="kd.php">
                                <font color="white">SKD</font>
                            </a></li>
                        <li><a href="kp.php">
                                <font color="white">SKP</font>
                            </a></li>
                        <li><a href="kk.php">
                                <font color="white">SKK</font>
                            </a></li>
                        <li><a href="kaw.php">
                                <font color="white">SKAW</font>
                            </a></li>
                    </ul>
                <?php } ?>
                <li><a href="laporan.php"><i class="fa fa-file"></i> Laporan</a></li>
                <ul class="sub">
                    <li><a href="laporan_sku.php">
                            <font color="white">Laporan SKU</font>
                        </a></li>
                    <li><a href="laporan_bmr.php">
                            <font color="white">Laporan BMR</font>
                        </a></li>
                    <li><a href="laporan_imb.php">
                            <font color="white">Laporan IMB</font>
                        </a></li>
                    <li><a href="laporan_tm.php">
                            <font color="white">Laporan SKTM</font>
                        </a></li>
                    <li><a href="laporan_bm.php">
                            <font color="white">Laporan SKBM</font>
                        </a></li>
                    <li><a href="laporan_km.php">
                            <font color="white">Laporan SKM</font>
                        </a></li>
                    <li><a href="laporan_kd.php">
                            <font color="white">Laporan SKD</font>
                        </a></li>
                    <li><a href="laporan_kp.php">
                            <font color="white">Laporan SKP</font>
                        </a></li>
                    <li><a href="laporan_kk.php">
                            <font color="white">Laporan SKK</font>
                        </a></li>
                    <li><a href="laporan_kaw.php">
                            <font color="white">Laporan SKAW</font>
                        </a></li>
                </ul>
                <li><a href="logout.php"><i class="fa fa-sign-out"></i> Logout</a></li>
            </ul>
        </div>
    </nav>
    <!-- /. NAV SIDE  -->