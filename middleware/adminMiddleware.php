<?php

session_start();

include('../functions/myfunction.php');

//! If user is not logged it will not giveaccess to user it simply redirect to login page
if (isset($_SESSION['auth'])) {

} else {
    redirect("../login.php", "Login to continue");
}

?>