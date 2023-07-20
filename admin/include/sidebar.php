<?php
    $page = substr($_SERVER['SCRIPT_NAME'], strrpos($_SERVER['SCRIPT_NAME'], '/')+1);
?>
<!--wrapper-->
<div class="wrapper">
<!--sidebar wrapper -->
    <div class="sidebar-wrapper" data-simplebar="true">
        <div class="sidebar-header">
            <div>
                <img src="assets\images\logo\rosh logo.svg" class="logo-icon" alt="logo icon" />
            </div>
            <div>
                <h4 class="logo-text">Rosh Makeover</h4>
            </div>
        </div>
        <!--navigation-->
        <ul class="metismenu" id="menu">
            <li>
                <a href="index.php" class="<?= $page == 'index.php'? "active":"" ?>">
                    <div class="parent-icon"><i class="bx bx-home-alt"></i></div>
                    <div class="menu-title">Dashboard</div>
                </a>
            </li>
            <li>
                <a href="all-category.php" class="<?= $page == 'all-category.php'? "active":"" ?>">
                    <div class="parent-icon"><i class="bx bx-cart"></i></div>
                    <div class="menu-title">My Rate Cards</div>
                </a>
            </li>
            <li>
                <a href="gallery.php" class="<?= $page == 'gallery.php'? "active":"" ?>">
                    <div class="parent-icon"><i class="bx bx-photo-album"></i></div>
                    <div class="menu-title">Gallery</div>
                </a>
            </li>
            <li>
                <a href="add-category.php" class="<?= $page == 'add-category.php'? "active":"" ?>">
                    <div class="parent-icon"><i class="bx bx-cart-add"></i></div>
                    <div class="menu-title">All Category</div>
                </a>
            </li>
        </ul>
        <!--end navigation-->
    </div>
<!--end sidebar wrapper -->

