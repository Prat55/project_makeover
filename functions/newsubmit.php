<?php
session_start();
include('myfunction.php');

if (isset($_POST['news-sub'])){
    $email = $_POST['email'];

    $reset_query1 = "SET @num = 0;";
    $reset_query2 = "UPDATE `newsletter` SET id = @num := (@num + 1);";
    $reset_query3 = "ALTER TABLE `newsletter` AUTO_INCREMENT = 1;";
    $reset_query_run1 = mysqli_query($con, $reset_query1);
    $reset_query_run2 = mysqli_query($con, $reset_query2);
    $reset_query_run3 = mysqli_query($con, $reset_query3);
    $news_query = "INSERT INTO `newsletter`(`email`) VALUES ('$email')";
    $news_query_run = mysqli_query($con, $news_query);

    if($news_query_run){
        redirect("../index.php", "Subscribed Successfully");
    }
    else{
        redirect("../index.php", "Something went wrong");
    }
}
else if(isset($_GET['id'])){
    $id = $_GET['id'];
    $delete_query = "DELETE FROM `newsletter` WHERE id = '$id'";
    $delete_query_run = mysqli_query($con, $delete_query);
    if($delete_query_run){
        redirect("../admin/index.php", "Deleted Successfully");
    }
    else{
        redirect("../admin/index.php", "Something went wrong!");
    }
}

?>