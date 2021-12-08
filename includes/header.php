<?php session_start(); ?>
<!-- ========== Start Header ========== -->
<nav class="
        navbar navbar-expand-lg navbar-dark
        bg-dark
        p-3
        shadow
        sticky-lg-top
      ">
    <div class="container">
        <a class="navbar-brand" href="#">BLAZE RENTAL</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0 gap-4">
                <li class="nav-item">
                    <a class="nav-link " aria-current="page" href="index.php">Ballina</a>
                </li>
                <?php if (isset($_SESSION['klientiid']) ) : ?>
                <li class="nav-item"><a class="nav-link" href="klientet.php">Klientet</a></li>
                <li class="nav-item"><a class="nav-link" href="kategorite.php">Kategorite</a></li>
                <li class="nav-item"><a class="nav-link" href="automjetet.php">Automjetet</a></li>
                <li class="nav-item"><a class="nav-link" href="rezervimet.php">Rezervimet</a></li>
                <li class="nav-item"><a class="nav-link" href="logout.php">Logout</a></li>
                <li class="nav-item" style="margin-left:100px;"><i
                        class="fa fa-user"></i><?php echo $_SESSION['emri'] . " " .$_SESSION['mbiemri']; ?></li>
                <?php elseif(isset($_SESSION['klientiid'])) : ?>
                <li class="nav-item"><a class="nav-link" href="kategorite.php">Kategorite</a></li>
                <li class="nav-item"><a class="nav-link" href="automjetet.php">Automjetet</a></li>
                <li class="nav-item"><a class="nav-link" href="rezervimet.php">Rezervimet</a></li>
                <li class="nav-item"><a class="nav-link" href="logout.php">Logout</a></li>
                <li class="nav-item" style="margin-left:100px;"><i
                        class="fa fa-user"></i><?php echo $_SESSION['emri'] . " " .$_SESSION['mbiemri']; ?></li>

                <?php else : ?>
                <li class="nav-item"><a class="nav-link" href="kategorite.php">Kategorite</a></li>
                <li class="nav-item"><a class="nav-link" href="automjetet.php">Automjetet</a></li>
                <li class="nav-item"><a class="nav-link" href="login.php">Login</a></li>
                <?php endif; ?>

            </ul>
        </div>
    </div>
</nav>
<!-- ========== End Header ========== -->