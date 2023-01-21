<?php 
include "config.php";

if(isset($_FILES["fileToUpload"]))
{
    $error = array();

    $file_name = $_FILES["fileToUpload"]["name"];
    $filesize = $_FILES["fileToUpload"]["size"];
    $file_temp = $_FILES["fileToUpload"]["tmp_name"];
    $file_type = $_FILES["fileToUpload"]["type"];
    $file_ext = explode(".",$file_name);
    $file_ext = end($file_ext);
    $file_ext = strtolower($file_ext);
    $extension = array("jpg","jpeg","png");

    if(in_array($file_ext,$extension)===false)
    {
        $error[] = "file extension must be jpeg, jpeg, png";
    }
    if($filesize > 2097152)
    {
        $error[] = "file must be less than 2 mb";
    }
    if(empty($error)==true)
    {
        move_uploaded_file($file_temp,"upload/".$file_name);
    }
    else
    {
        print_r($error);
        die();
    }
}

// $vaccine_id = $_POST["vaccine-id"];
$vaccine_name = $_POST["vname"];

// $hossiptal_id = $_POST["hospital_id"];

session_start();


$query = "INSERT INTO `vaccines`( `vname`,`img-vaccine`) 
VALUES ('{$vaccine_name}','$file_name')";

mysqli_query($conn,$query);
header("location:vaccine.php");
?>