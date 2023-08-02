<?php
    session_start();
    include('../functions/myfunction.php');

    if (isset($_GET['id'])) {
        $id = $_GET['id'];

        $delete_query = "DELETE FROM `categories` WHERE `id` = '$id'";
        $delete_query_run = mysqli_query($con, $delete_query);
        
        resetQuery("categories");

        if ($delete_query_run) {
            redirect("manage-category.php", "success", "Deleted Successfully");
        } 
        else {
            redirect("manage-category.php", "error", "Something went wrong! Please try again later");
        }
    }
?>