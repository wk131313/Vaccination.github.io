<?php

$user_id = $_GET["id"];

require "config.php";


$query = "DELETE FROM `appointment` WHERE `a_id`= '{$user_id}'";

mysqli_query($conn, $query);

header("Location:appointment.php");


?>