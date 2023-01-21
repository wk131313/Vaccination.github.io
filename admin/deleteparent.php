<?php

$user_id = $_GET["id"];

require "config.php";


$query = "DELETE FROM `parent` WHERE `p_id`= '{$user_id}'";

mysqli_query($conn, $query);

header("Location:parents.php");


?>