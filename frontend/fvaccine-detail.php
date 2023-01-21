<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
    
</body>
</html>

<?php

$h_id = $_GET["id"];

include "config.php";

        $query = " SELECT * FROM `vaccines` WHERE `v_id` = '{$h_id}'";
        $result = mysqli_query($conn,$query);   

        if(mysqli_num_rows($result)>0)
        {
            $row = mysqli_fetch_assoc($result); 
?>

    <div class="col-sm-3">
        <div class="card" style="">
            <a href=""><img class="card-img-top" src="admin/upload/<?php echo $row["vaccine_img"]; ?>" alt=""
                style="width: 100%; height: 100%;"></a>
            <div class="card-body">
                <h4 class="card-title"><?php echo $row["vname"]; ?></h4>
                <!-- <p class="card-text"><?php echo $row["address"]; ?><br>
                </p> -->
                <a href="fvaccine-detail" class="btn" style="color: black;">Open vaccine</a>
            </div>
        </div>
    </div>        
    </div> <br> <br>
    </div>
<?php } ?>