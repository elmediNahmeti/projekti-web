<header>
    <nav>
        <div>
            <a href="index.php"> <img src="images/logo.png" alt="" id="logo" /> </a>
        </div>
        <div class="navLeft">
            <ul class="nav_links">
                <li>
                    <a href="index.php">Kreu</a>
                </li>
                <li>
                    <a href="news.php">Lajmet</a>
                </li>
                <li>
                    <a href="products.php">Produktet</a>
                </li>
                <li>
                    <a href="about_us.php">Rreth Nesh</a>
                </li>
                <li>
                    <a href="contact_us.php">Na Kontaktoni</a>
                </li>
            </ul>
        </div>
        <div class="navRight">
            <ul class="nav_buttons">



                <?php
                session_start();
                if (isset($_SESSION['role']) && $_SESSION['role'] == 1) {
                ?>
                    <li><a href="./views/dashboard.php" class="btn" id="btn_logout">Dashboard</a></li>
                    <li><a href="php/logout.php" class="btn" id="btn_logout">Log out</a></li>
                <?php
                } else if (isset($_SESSION['role']) && $_SESSION['role'] == 0) {
                ?>
                    <li><a href="php/logout.php" class="btn" id="btn_logout">Log out</a></li>

                <?php
                }
                ?>

                <?php
                if (!(isset($_SESSION['role']))) {
                ?>
                    <li><a href="./views/login.php" class="btn" id="btn_kyqu">Kyqu</a></li>
                <?php
                }
                ?>

            </ul>
        </div>
    </nav>

</header>