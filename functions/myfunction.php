<?php

include('../config/dbcon.php');

//? fetching all tables from database
function getAll($table)
{
    global $con;
    $query = "SELECT * FROM `$table`";
    return $query_run = mysqli_query($con, $query);
}

function getRev($table, $column)
{
    global $con;
    $query = "SELECT * FROM `$table` ORDER BY `$column` DESC";
    return $query_run = mysqli_query($con, $query);
}

// ? For edit category from categories table
function getCategory($table, $id)
{
    global $con;
    $query = "SELECT * FROM `$table` WHERE `id` = '$id'";
    return $query_run = mysqli_query($con, $query);
}

//? help to match specific service and id column from table 
function getByService($table, $id, $service)
{
    global $con;
    $query = "SELECT * FROM `$table` WHERE `id` = '$id' AND `service` = '$service'";
    return $query_run = mysqli_query($con, $query);
}

// ?For reset auto increment
function resetQuery($table)
{
    global $con;
    $reset_query1 = "SET @num = 0;";
    $reset_query2 = "UPDATE `$table` SET id = @num := (@num + 1);";
    $reset_query3 = "ALTER TABLE `$table` AUTO_INCREMENT = 1;";
    $reset_query_run1 = mysqli_query($con, $reset_query1);
    $reset_query_run2 = mysqli_query($con, $reset_query2);
    $reset_query_run3 = mysqli_query($con, $reset_query3);
}

// ? Adding data to table category1,2,3,4
function addCategory($tableName)
{
    global $con;
    $category = $_POST['categories'];

    // Checking if the service is null or not
    if ($category == "") {
        echo "<script>alert('Category is required');</script>";
    }

    // Inserting data in database
    else {
        resetQuery("$tableName");

        $cate_query = "INSERT INTO `$tableName`(`category`) VALUES ('$category')";
        $cate_query_run = mysqli_query($con, $cate_query);

        if ($cate_query_run) {
            redirect("add-category.php", "success", "Category Added Successfully");
        } else {
            redirect("add-category.php", "error", "Something Went Wrong!");
        }
    }
}

// ?Updating data of table category1,2,3,4
function updateCategory($tableName)
{
    global $con;
    $id = $_POST['id'];
    $category = $_POST['category'];

    // Checking if the service is null or not
    if ($category == "") {
        echo "<script>alert('Category is required');</script>";
    }
    // Updating data in database
    else {
        resetQuery("$tableName");

        $update_query = "UPDATE `$tableName` SET `category` = '$category' WHERE `id` = '$id'";
        $update_query_run = mysqli_query($con, $update_query);

        if ($update_query_run) {
            redirect("manage-category.php", "success", "Category Updated Successfully");
        } else {
            redirect("manage-category.php", "error", "Something Went Wrong!");
        }
    }
}

// ?Updating data of table category1,2,3,4
function updateSubCategory($tableName)
{
    global $con;
    $id = $_POST['id'];
    $service = $_POST['service'];
    $category_id = $_POST['category_id'];
    $price = $_POST['price'];

    // Checking if the service is null or not
    if ($service == "") {
        echo "<script>alert('Service is required');</script>";
    }
    // Checking if the price is null or not
    else if ($price == "") {
        echo "<script>alert('Price is required');</script>";
    }
    // Updating data in database
    else {
        resetQuery("$tableName");

        $update_query = "UPDATE `$tableName` SET `service` = '$service', `price` = '$price' WHERE `id` = '$id'";
        $update_query_run = mysqli_query($con, $update_query);

        if ($update_query_run) {
            redirect("all-category.php", "success", "Category Updated Successfully");
        } else {
            redirect("all-category.php", "error", "Something Went Wrong!");
        }
    }
}

function addCources($tableName)
{
    global $con;
    $course_name = $_POST['course-name'];
    $seats = $_POST['seats'];

    // Checking if the service is null or not
    if ($course_name == "") {
        echo "<script>alert('Course name is required');</script>";
    }

    // Checking if the price is null or not
    else if ($seats == "") {
        echo "<script>alert('Seats is required');</script>";
    }

    // Inserting data in database
    else {
        resetQuery("$tableName");

        $cate_query = "INSERT INTO `$tableName`(`course-name`, `seats`) VALUES ('$course_name','$seats')";
        $cate_query_run = mysqli_query($con, $cate_query);

        if ($cate_query_run) {
            redirect("add-course.php", "Category Added Successfully");
        } else {
            redirect("add-course.php", "Something Went Wrong!");
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
