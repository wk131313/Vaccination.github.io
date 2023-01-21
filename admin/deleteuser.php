<?php

$user_id = $_GET["id"];

require "config.php";


$query = "DELETE FROM `user` WHERE `u_id`= '{$user_id}'";

mysqli_query($conn, $query);

header("Location:user.php");


?>