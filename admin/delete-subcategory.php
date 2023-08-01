<?php
    session_start();
    include('../functions/myfunction.php');

    if (isset($_GET['id'])) {
        $id = $_GET['id'];

        $delete_query = "DELETE FROM `ratecard` WHERE `id` = '$id'";
        $delete_query_run = mysqli_query($con, $delete_query);
        
        resetQuery("ratecard");

        if ($delete_query_run) {
            redirect("all-category.php", "Deleted Successfully");
        } 
        else {
            redirect("all-category.php", "Something went wrong! Please try again later");
        }
    }
?>