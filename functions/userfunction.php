<?php

include('config/dbcon.php');

function getAllPrice($table){
    global $con;
    $query = "SELECT * FROM `$table`";
    return $query_run = mysqli_query($con, $query);
}

function getAllImages($table){
    global $con;
    $query = "SELECT * FROM `$table`";
    return $query_run = mysqli_query($con, $query);
}

?>