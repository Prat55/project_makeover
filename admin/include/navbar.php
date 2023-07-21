<!--start header -->
<header>
    <div class="topbar d-flex align-items-center">
        <nav class="navbar navbar-expand gap-3">
            <div class="mobile-toggle-menu">
                <a href="index.php" class="<?= $page == 'index.php'? "active":"" ?>">
                    <div class="parent-icon"><i class="bx bx-home-alt"></i></div>
                </a>
            </div>
            <div class="mobile-toggle-menu">
                <a href="all-category.php" class="<?= $page == 'all-category.php'? "active":"" ?>">
                    <div class="parent-icon"><i class="bx bx-cart"></i></div>
                </a>
            </div>
            <div class="mobile-toggle-menu">
                <a href="gallery.php" class="<?= $page == 'gallery.php'? "active":"" ?>">
                    <div class="parent-icon"><i class="bx bx-photo-album"></i></div>
                </a>
            </div>
            <div class="mobile-toggle-menu">
                <a href="add-category.php" class="<?= $page == 'add-category.php'? "active":"" ?>">
                    <div class="parent-icon"><i class="bx bx-cart-add"></i></div>
                </a>
            </div>
            <div class="mobile-toggle-menu">
                <a href="newsletter.php" class="<?= $page == 'newsletter.php'? "active":"" ?>">
                    <div class="parent-icon"><i class="bx bx-news"></i></div>
                </a>
            </div>
            <div class="mobile-toggle-menu">
                <a href="enquiry.php" class="<?= $page == 'enquiry.php'? "active":"" ?>">
                    <div class="parent-icon"><i class="bx bx-comment-detail"></i></div>
                </a>
            </div>

            <div class="top-menu ms-auto"></div>
            <div class="user-box dropdown px-3">
                <a class="d-flex align-items-center nav-link dropdown-toggle gap-3 dropdown-toggle-nocaret" href="#"
                    role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <img src="assets\images\founder.jpg" class="user-img" alt="user avatar" />
                    <div class="user-info">
                        <p class="user-name mb-0">Admin</p>
                    </div>
                </a>
                <ul class="dropdown-menu dropdown-menu-end">
                    <li>
                        <a class="dropdown-item d-flex align-items-center" href="./../logout.php">
                            <i class="bx bx-log-out-circle"></i><span>Logout</span>
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</header>
<!--end header -->