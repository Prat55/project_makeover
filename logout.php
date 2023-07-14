<?php
session_start();
include('functions/myfunction.php');

// *If user wants to logout
if (isset($_SESSION['auth'])) {
    unset($_SESSION['auth']);
    unset($_SESSION['auth_user']);
    redirect("login.php", "Logged out successfully");
}


?>