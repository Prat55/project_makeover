<?php

session_start();
include('../functions/myfunction.php');

if(isset($_GET['id'])){
    $id = $_GET['id'];


    $reset_query1 = "SET @num = 0;";
    $reset_query2 = "UPDATE `courses` SET id = @num := (@num + 1);";
    $reset_query3 = "ALTER TABLE `courses` AUTO_INCREMENT = 1;";
    $reset_query_run1 = mysqli_query($con, $reset_query1);
    $reset_query_run2 = mysqli_query($con, $reset_query2);
    $reset_query_run3 = mysqli_query($con, $reset_query3);
    $query = "DELETE FROM `courses` WHERE `id` = '$id'";
    $result = mysqli_query($con, $query);
    
    if($result){
        redirect("add-course.php", "success", "Course Deleted Successfully");
    }
    else{
        redirect("add-course.php", "error", "Course Not Deleted");
    }
}

?>