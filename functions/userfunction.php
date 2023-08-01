<?php

include('config/dbcon.php');

function getAllPrice($table){
    global $con;
    $price_query = "SELECT * FROM `$table`";
    return $price_query_run = mysqli_query($con, $price_query);
}

function getAllImages($table){
    global $con;
    $query = "SELECT * FROM `$table`";
    return $query_run = mysqli_query($con, $query);
}      

?>