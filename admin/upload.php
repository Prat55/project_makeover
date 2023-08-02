<?php
    session_start();
    include("../functions/myfunction.php");
   
    if(isset($_POST['submit'])){ 
        //* File upload configuration 
        $targetDir = "../gallery/"; 
        $allowTypes = array('jpg','png','jpeg','gif','jfif'); 
         
        $statusMsg = $errorMsg = $insertValuesSQL = $errorUpload = $errorUploadType = ''; 
        $fileNames = array_filter($_FILES['files']['name']); 
        if(!empty($fileNames)){ 
            foreach($_FILES['files']['name'] as $key=>$val){ 
                //? File upload path 
                $fileName = basename($_FILES['files']['name'][$key]); 
                $targetFilePath = $targetDir . $fileName; 
                 
                //? Check whether file type is valid 
                $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION); 
                if(in_array($fileType, $allowTypes)){ 
                    //? Upload file to server 
                    if(move_uploaded_file($_FILES["files"]["tmp_name"][$key], $targetFilePath)){ 
                        //? Image db insert sql 
                        $insertValuesSQL .= "('".$fileName."', NOW()),"; 
                    }else{ 
                        $errorUpload .= $_FILES['files']['name'][$key].' | '; 
                    } 
                }else{ 
                    $errorUploadType .= $_FILES['files']['name'][$key].' | '; 
                } 
            } 
             
            //! Error message 
            $errorUpload = !empty($errorUpload)?'Upload Error: '.trim($errorUpload, ' | '):''; 
            $errorUploadType = !empty($errorUploadType)?'File Type Error: '.trim($errorUploadType, ' | '):''; 
            $errorMsg = !empty($errorUpload)?'<br/>'.$errorUpload.'<br/>'.$errorUploadType:'<br/>'.$errorUploadType; 
             
            if(!empty($insertValuesSQL)){ 
                resetQuery("images");
                
                $insertValuesSQL = trim($insertValuesSQL, ','); 
                //? Insert image file name into database 
                $insert = $con->query("INSERT INTO images (file_name, uploaded_on) VALUES $insertValuesSQL"); 
                if($insert){ 
                    redirect("gallery.php", "success", "Files are uploaded successfully.");
                }else{ 
                    redirect("gallery.php", "error", "Sorry, there was an error uploading your file.");
                } 
            }else{ 
                redirect("gallery.php", "error", "Upload failed!");
            } 
        }else{ 
            redirect("gallery.php", "error", "Please select a file to upload."); 
        } 
    }
     
?>