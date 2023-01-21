<?php

$v_id = $_GET["id"];

require "config.php";


$query = "DELETE FROM `vaccines` WHERE `v_id`= '{$v_id}'";

mysqli_query($conn, $query);

header("Location:vaccine.php");


?>