<?php
// ? this code is just testing purpose this will useful in future changes
    session_start();
    include("../functions/myfunction.php");

    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $query = "SELECT * FROM images WHERE id = '$id'";
        $result = mysqli_query($con, $query);
        $row = mysqli_fetch_assoc($result);
        
        $file_name = $row['file_name'];

        $uploaded_on = $row['uploaded_on'];
        $delete = $con->query("UPDATE FROM `images` SET file_name = $file_name WHERE id = '$id'");
        
        if($delete){
            redirect("gallery.php", "success", "File deleted successfully.");
        }else{
            redirect("gallery.php", "error", "Sorry, there was an error deleting your file.");
        }
    }

?>