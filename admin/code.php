<?php
    session_start();
    include('../functions/myfunction.php');

    // * Adding Data in 1st Category
    if(isset($_POST['add_category'])){
        $category_id = $_POST['category_id'];
        $service = $_POST['service'];
        $price = $_POST['price'];

        $query = "INSERT INTO `ratecard`(`category_id`, `service`, `price`) VALUES ('$category_id','$service','$price')";
        $result = mysqli_query($con, $query);
        
        if($result){
            redirect("add-category.php", "Category Added Successfully");
        }
        else{
            redirect("add-category.php", "Category Not Added");
        }
    }
    else if(isset($_POST['add_category1_btn'])){
        addCategory("category1");
    }
    // * Adding Data in 2nd Category
    else if(isset($_POST['add_category2_btn'])){
        addCategory("category2");
    }
    // * Adding Data in 3rd Category
    else if(isset($_POST['add_category3_btn'])){
        addCategory("category3");
    }
    // * Adding Data in 4st Category
    else if(isset($_POST['add_category4_btn'])){
        addCategory("category4");
    }
    // * Update data in category tables
    else if(isset($_POST['update_category_btn1'])){
        updateCategory("category1");
    }
    else if(isset($_POST['update_category_btn2'])){
        updateCategory("category2");
    }
    else if(isset($_POST['update_category_btn3'])){
        updateCategory("category3");
    }
    else if(isset($_POST['update_category_btn4'])){
        updateCategory("category4");
    }
    else if(isset($_POST['add_course'])){
        addCources("courses");
    }

?>