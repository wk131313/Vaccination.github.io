<?php

$user_id = $_GET["id"];

require "config.php";


$query = "DELETE FROM `children` WHERE `c_id`= '{$user_id}'";

mysqli_query($conn, $query);

header("Location:children.php");


?>