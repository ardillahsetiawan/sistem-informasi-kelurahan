<nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
    <div class="container">
        <a class="navbar-brand" href="#page-top"><img src="../../TA/assets/img/kapuas1.jpg"></a>
        <span style="color:gold" href="home.php">Kelurahan Selat Hulu Kuala Kapuas</span>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            Menu
            <i class="fas fa-bars ms-1"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                <?php if (!isset($_SESSION['user'])) : ?>
                    <form action="">
                        <li class="nav-item"><a class="nav-link" href="login_user.php">Login</a></li>
                    </form>
                <?php else : ?>
                    <form action="">
                        <li class="nav-item"><a class="nav-link" href="../logout_user.php">Logout</a></li>
                    </form>
                <?php endif ?>

            </ul>
        </div>
    </div>
</nav>