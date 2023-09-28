<?php
session_start();
include('myfunction.php');

if (isset($_POST['news-sub'])) {
    $email = $_POST['email'];


    resetQuery("newsletter");
    $news_query = "INSERT INTO `newsletter`(`email`) VALUES ('$email')";
    $news_query_run = mysqli_query($con, $news_query);

    if ($news_query_run) {
        redirect("../index.php", "success", "Subscribed Successfully");
    } else {
        redirect("../index.php", "error", "Something went wrong");
    }
} else if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $delete_query = "DELETE FROM `newsletter` WHERE id = '$id'";
    $delete_query_run = mysqli_query($con, $delete_query);
    if ($delete_query_run) {
        redirect("../admin/index.php", "success", "Deleted Successfully");
    } else {
        redirect("../admin/index.php", "error", "Something went wrong!");
    }
} else if (isset($_POST['clear_all'])) {

    $query = "TRUNCATE TABLE `rosh_makeover`.`newsletter`";
    $query_run = mysqli_query($con, $query);

    if ($query_run) {
        redirect("../admin/newsletter.php", "success", "Cleared Successfully");
    } else {
        redirect("../admin/newsletter.php", "error", "Something went wrong!");
    }
}
