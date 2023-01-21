<?php

include "config.php";
echo $query = "SELECT * FROM `hospital` INNER JOIN vaccines ON hospital.h_id = vaccines.v_id ";

// $result = mysqli_query($conn,$query);

// if(mysqli_num_rows($result)>0)
// {
//     while($row=mysqli_fetch_assoc($result))
//     {
//         echo "<pre>";
//                print_r($row);
//     }
// }


?> 