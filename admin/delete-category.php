<?php

    include('../config/dbcon.php');
    include('../functions/myfunction.php');

    if (isset($_GET['id']) && isset($_GET['service']) && isset($_GET['price']) && isset($_GET['table'])) {
        $id = $_GET['id'];
        $service = $_GET['service'];
        $price = $_GET['price'];
        $table = $_GET['table'];

        $delete_query = "DELETE FROM $table WHERE id = $id AND service = '$service' AND price = '$price'";
        $delete_query_run = mysqli_query($con, $delete_query);

        if ($delete_query_run) {
            echo "<script>window.location.href = 'all-category.php';</script>";
        } 
        else {
            echo "<script>window.location.href = 'all-category.php';</script>";
        }
    }
?>