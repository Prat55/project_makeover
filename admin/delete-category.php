<?php
    session_start();
    include('../functions/myfunction.php');

    if (isset($_GET['id']) && isset($_GET['service']) && isset($_GET['price']) && isset($_GET['table'])) {
        $id = $_GET['id'];
        $service = $_GET['service'];
        $price = $_GET['price'];
        $table = $_GET['table'];

        $delete_query = "DELETE FROM $table WHERE id = $id AND service = '$service' AND price = '$price'";
        $delete_query_run = mysqli_query($con, $delete_query);
        $reset_query1 = "SET @num = 0;";
        $reset_query2 = "UPDATE `$table` SET id = @num := (@num + 1);";
        $reset_query3 = "ALTER TABLE `$table` AUTO_INCREMENT = 1;";
        $reset_query_run1 = mysqli_query($con, $reset_query1);
        $reset_query_run2 = mysqli_query($con, $reset_query2);
        $reset_query_run3 = mysqli_query($con, $reset_query3);

        if ($delete_query_run) {
            redirect("all-category.php", "Deleted Successfully");
        } 
        else {
            redirect("all-category.php", "Something went wrong! Please try again later");
        }
    }
?>