<?php

include('../config/dbcon.php');

// fetching all tables from database
function getAll($table){
    global $con;
    $query = "SELECT * FROM $table";
    return $query_run = mysqli_query($con, $query);
}

// help to match specific service row from table
function getByService($table, $id, $service,){
    global $con;
    $query = "SELECT * FROM `$table` WHERE id = '$id' AND service = '$service'";
    return $query_run = mysqli_query($con, $query);
}

function addCategory($tableName){
    global $con;
    $service = $_POST['service'];
    $price = $_POST['price'];

    // Checking if the service is null or not
    if($service == ""){
        echo "<script>alert('Service is required');</script>";
    }

    // Checking if the price is null or not
    else if($price == ""){
        echo "<script>alert('Price is required');</script>";
    }

    // Inserting data in database
    else{
        $cate_query = "INSERT INTO `$tableName`(`service`, `price`) VALUES ('$service','$price')";
        $cate_query_run = mysqli_query($con, $cate_query);

        if($cate_query_run){
            redirect("add-category.php", "Category Added Successfully");
        }
        else{
            redirect("add-category.php", "Something Went Wrong!");
        }
    }
}

function updateCategory($tableName){
    global $con;
    $id = $_POST['id'];
    $service = $_POST['service'];
    $price = $_POST['price'];

    // Checking if the service is null or not
    if($service == ""){
        echo "<script>alert('Service is required');</script>";
    }
    // Checking if the price is null or not
    else if($price == ""){
        echo "<script>alert('Price is required');</script>";
    }
    // Updating data in database
    else{

        $update_query = "UPDATE `$tableName` SET service = '$service', price = '$price' WHERE id = '$id'";
        $update_query_run = mysqli_query($con, $update_query);

        if($update_query_run){
            redirect("all-category.php", "Category Updated Successfully");
        }
        else{
            redirect("all-category.php", "Something Went Wrong!");
        }
    }
}

// use for redirecting to specific page
function redirect($url, $message)
{
    $_SESSION['message'] = $message;
    header("Location: $url");
    exit();
}

?>