<header>
    <div class="container-menu">
        <nav class="navigation">
            <div id="mobile-sub-menu" class="mobile-sub-menu">
                <img src="./public/icons/closeMenu.svg" class="close-menu" alt="G&S IT logo" onclick="toggleMenu('close')" />
                <div class="navbar-mobile">
                    <ul>
                        <li>
                            <a href="https://www.gs-it-group.com/de/ueber-uns">Über uns</a>
                        </li>
                        <li>
                            <a href="https://www.gs-it-group.com/de/karriere">Karriere</a>
                        </li>
                        <li>
                            <a href="index.php">News</a>
                        </li>
                            <?php if (isAuth()){ ?>
                                <li>
                                    <a href="dashboard.php">Dashboard</a>
                                </li>
                            <?php } ?>
                        <li>
                            <a href="<?= isAuth() ? "?logout=true" : "login.php";?>" class="btn">
                                <?= isAuth() ? "Logout" : "Login";?>   
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="menu">
                <a href="/" class="">
                    <img src="./public/logo.svg" class="company-logo" alt="G&S IT logo" />
                </a>
                <img src="./public/icons/openMenu.svg" class="open-menu" alt="G&S IT logo" onclick="toggleMenu('open')" />
                <div class="navbar-desktop">
                    <ul>
                        <li>
                            <a href="https://www.gs-it-group.com/de/ueber-uns">Über uns</a>
                        </li>
                        <li>
                            <a href="https://www.gs-it-group.com/de/karriere">Karriere</a>
                        </li>
                        <li>
                            <a href="index.php">News</a>
                        </li>
                            <?php if (isAuth()){ ?>
                                <li>
                                    <a href="dashboard.php">Dashboard</a>
                                </li>
                            <?php } ?>
                        <li>
                            <a href="<?= isAuth() ? "?logout=true" : "login.php";?>" class="btn">
                                <?= isAuth() ? "Logout" : "Login";?>   
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</header>