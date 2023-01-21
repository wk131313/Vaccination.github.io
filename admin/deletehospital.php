<?php

$user_id = $_GET["id"];

require "config.php";


$query = "DELETE FROM `hospital` WHERE `h_id`= '{$user_id}'";

mysqli_query($conn, $query);

header("Location:hospital.php");


?>