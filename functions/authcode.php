<?php
session_start();
include('../config/dbcon.php');
include('./myfunction.php');

// *This Will Execute After Clicking Login Button
if (isset($_POST['login-btn'])) {

    // * Collecting Form data 
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $password = mysqli_real_escape_string($con, $_POST['password']);

    // * Query to check the data form database for validation
    $login_query = "SELECT * FROM `rosh-credentials` WHERE email = '$email' AND password = '$password' ";
    $login_query_run = mysqli_query($con, $login_query);

    if (mysqli_num_rows($login_query_run) > 0) {

        $_SESSION['auth'] = true;

        //? Fetching User Data from array
        $userdata = mysqli_fetch_array($login_query_run);
        $useremail = $userdata['email'];

        $_SESSION['auth_user'] = [
            'email' => $useremail,
        ];

        redirect("../admin/index.php", "Login Successfully");

    } else {
        redirect("../login.php", "Invalid Credentials!");
    }

}

?>