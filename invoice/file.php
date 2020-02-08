<?php
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["file"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["file"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    $id='';
    if(!empty($_SERVER['admin_user_id'])){
    $id=$_SERVER['admin_user_id'];}
    else if(!empty($_SERVER['user_id'])){
            $id=$_SERVER['user_id'];

    }
    $target_file = $target_dir .$id.time().".".$imageFileType;

    if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) {
        
        if(isset($_POST['action'])|| isset($_GET['action']))
{
        echo $target_file;
   
    
    
}else{

        
        
        
        
echo $target_file;}
    } 
   
    else {
        echo "Sorry, there was an error uploading your file.";
    }
}




?>