<?php
    session_start();
    include('../config/dbcon.php');
    include('../functions/myfunction.php');

    if(isset($_POST['add_category1_btn'])){
        $service = $_POST['service'];
        $price = $_POST['price'];

        if($service == ""){
            echo "<script>alert('Service is required');</script>";
        }
        else if($price == ""){
            echo "<script>alert('Price is required');</script>";
        }
        else{
            $cate_query = "INSERT INTO `category1`(`service`, `price`) VALUES ('$service','$price')";
            $cate_query_run = mysqli_query($con, $cate_query);

            if($cate_query_run){
                redirect("add-category.php", "Category Added Successfully");
            }
            else{
                redirect("add-category.php", "Something Went Wrong!");
            }
        }
    }else if(isset($_POST['add_category2_btn'])){
        $service = $_POST['service'];
        $price = $_POST['price'];

        if($service == ""){
            echo "<script>alert('Service is required');</script>";
        }
        else if($price == ""){
            echo "<script>alert('Price is required');</script>";
        }
        else{
            $cate_query = "INSERT INTO `category2`(`service`, `price`) VALUES ('$service','$price')";
            $cate_query_run = mysqli_query($con, $cate_query);

            if($cate_query_run){
                redirect("add-category.php", "Category Added Successfully");
            }
            else{
                redirect("add-category.php", "Something Went Wrong!");
            }
        }
    }else if(isset($_POST['add_category3_btn'])){
        $service = $_POST['service'];
        $price = $_POST['price'];

        if($service == ""){
            echo "<script>alert('Service is required');</script>";
        }
        else if($price == ""){
            echo "<script>alert('Price is required');</script>";
        }
        else{
            $cate_query = "INSERT INTO `category3`(`service`, `price`) VALUES ('$service','$price')";
            $cate_query_run = mysqli_query($con, $cate_query);

            if($cate_query_run){
                redirect("add-category.php", "Category Added Successfully");
            }
            else{
                redirect("add-category.php", "Something Went Wrong!");
            }
        }
    }else if(isset($_POST['add_category4_btn'])){
        $service = $_POST['service'];
        $price = $_POST['price'];

        if($service == ""){
            echo "<script>alert('Service is required');</script>";
        }
        else if($price == ""){
            echo "<script>alert('Price is required');</script>";
        }
        else{
            $cate_query = "INSERT INTO `category4`(`service`, `price`) VALUES ('$service','$price')";
            $cate_query_run = mysqli_query($con, $cate_query);

            if($cate_query_run){
                redirect("add-category.php", "Category Added Successfully");
            }
            else{
                redirect("add-category.php", "Something Went Wrong!");
            }
        }
    }

?>