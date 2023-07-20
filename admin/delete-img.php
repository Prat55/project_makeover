<?php

    session_start();
    include("../functions/myfunction.php");

    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $query = "SELECT * FROM images WHERE id = '$id'";
        $result = mysqli_query($con, $query);
        $row = mysqli_fetch_assoc($result);
        $file_name = $row['file_name'];
        $uploaded_on = $row['uploaded_on'];
        $delete = $con->query("DELETE FROM images WHERE id = '$id'");
        $reset_query1 = "SET @num = 0;";
        $reset_query2 = "UPDATE `images` SET id = @num := (@num + 1);";
        $reset_query3 = "ALTER TABLE `images` AUTO_INCREMENT = 1;";
        $reset_query_run1 = mysqli_query($con, $reset_query1);
        $reset_query_run2 = mysqli_query($con, $reset_query2);
        $reset_query_run3 = mysqli_query($con, $reset_query3);

        if($delete){
            unlink("../gallery/$file_name");
            redirect("gallery.php", "File deleted successfully.");
        }else{
            redirect("gallery.php", "Sorry, there was an error deleting your file.");
        }
    }

?>