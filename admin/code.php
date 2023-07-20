<?php
    session_start();
    include('../config/dbcon.php');
    include('../functions/myfunction.php');

    // * Adding Data in 1st Category
    if(isset($_POST['add_category1_btn'])){
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

?>