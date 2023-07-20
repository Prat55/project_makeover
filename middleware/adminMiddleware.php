<?php

session_start();

include('../functions/myfunction.php');

// ? If user is logged in then it simply redirect to admin panel whenever user type admin in url
if (isset($_SESSION['auth'])) {

} 
//! If user is not logged it will not give access to user it simply redirect to login page
else {
    redirect("../login.php", "Login to continue");
}

?>