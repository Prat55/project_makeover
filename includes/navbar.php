<?php
    $page = substr($_SERVER['SCRIPT_NAME'], strrpos($_SERVER['SCRIPT_NAME'], '/')+1);
?>

<header class="header">
    <div class="main-navigation">
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <a class="navbar-brand" href="index.php">
                    <img src="assets/img/logo/Rosh logo.svg" alt="logo" />
                </a>
                <div class="mobile-menu-right">
                    <div class="mobile-menu-list">
                        <a href="#" class="mobile-menu-link search-box-outer"><i class="far fa-search"></i></a>
                    </div>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main_nav"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"><i class="far fa-stream"></i></span>
                    </button>
                </div>
                <div class="collapse navbar-collapse" id="main_nav">
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown">

                            <a class="nav-link <?= $page == 'index.php'? "active":"" ?>" href="
                                index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?= $page == 'about.php'? "active":"" ?>" href="about.php">About
                                Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?= $page == 'service.php'? "active":"" ?>" href="service.php">Services</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?= $page == 'pricing.php'? "active":"" ?>" href="pricing.php">PRICING</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link <?= $page == 'contact.php'? "active":"" ?>" href="contact.php">Contact Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?= $page == 'gallery.php'? "active":"" ?>" href="gallery.php">gallery</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?= $page == 'classes-enquiry.php'? "active":"" ?>" href="classes-enquiry.php">Classes Enquiry
                            </a>
                        </li>
                    </ul>
                    <div class="header-nav-right">
                        <div class="header-btn">
                            <a href="contact.php" class="theme-btn">Get Quote<i class="fas fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </div>
</header>