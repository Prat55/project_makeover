<?php
    session_start();
    include('myfunction.php');

    if(isset($_POST['form-submit'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $course = $_POST['course'];

        $reset_query1 = "SET @num = 0;";
        $reset_query2 = "UPDATE `form-data` SET id = @num := (@num + 1);";
        $reset_query3 = "ALTER TABLE `form-data` AUTO_INCREMENT = 1;";
        $reset_query_run1 = mysqli_query($con, $reset_query1);
        $reset_query_run2 = mysqli_query($con, $reset_query2);
        $reset_query_run3 = mysqli_query($con, $reset_query3);
        $form_query = "INSERT INTO `form-data` (`name`, `email`, `phone`, `course`) VALUES ('$name', '$email', '$phone', '$course')";
        $form_query_run = mysqli_query($con, $form_query);

        if($form_query_run){
            redirect("../index.php" , "Form Submit Successfully");
        }else{
            redirect("../index.php" , "Failed to submit form");
        }
    }
    else if(isset($_GET['id'])){
        $id = $_GET['id'];
        $delete_query = "DELETE FROM `form-data` WHERE id = '$id'";
        $delete_query_run = mysqli_query($con, $delete_query);
        if($delete_query_run){
            redirect("../admin/enquiry.php", "Deleted Successfully");
        }
        else{
            redirect("../admin/enquiry.php", "Something went wrong!");
        }
    }
?>