<?php
session_start();
include('../functions/myfunction.php');

// * Adding Data in 1st Category
if (isset($_POST['add_category'])) {
    $category = $_POST['category'];

    resetQuery("categories");

    $query = "INSERT INTO `categories`(`category`) VALUES ('$category')";
    $result = mysqli_query($con, $query);

    if ($result) {
        redirect("add-category.php", "success", "Category Added Successfully");
    } else {
        redirect("add-category.php", "error", "Category Not Added");
    }
} else if (isset($_POST['add_subcategory'])) {
    $category_id = $_POST['category_id'];
    $service = $_POST['service'];
    $price = $_POST['price'];

    resetQuery("ratecard");
    $query = "INSERT INTO `ratecard`(`category_id`, `service`, `price`) VALUES ('$category_id','$service','$price')";
    $result = mysqli_query($con, $query);

    if ($result) {
        redirect("add-subcategory.php", "success", "Category Added Successfully");
    } else {
        redirect("add-subcategory.php", "error", "Category Not Added");
    }
}
// * Update data in category tables
else if (isset($_POST['update_category_btn'])) {
    updateCategory("categories");
} else if (isset($_POST['update_sub_category_btn'])) {
    updateSubCategory("ratecard");
} else if (isset($_POST['add_course'])) {
    addCources("courses");
}
