<!-- Menu -->
<?php include "menu.php" ?>
    <!--/ Menu -->

<?php 

include "config.php";

$c_id = $_GET["id"];


$query  = "SELECT * FROM `children` WHERE `c_id` = '{$c_id}'";

$result = mysqli_query($conn, $query);

if(mysqli_num_rows($result))
{

$row  = mysqli_fetch_assoc($result);



?>

<div id="admin-content">
    
    <div class="container ">
    <div class="col d-flex justify-content-center mb-5">
        <div class="row mt-5 ">
        
        <div class="card">
        <div class="card-body">
            <div class="col-md-12">
                
                <h1 class="card-title">Modify User Details</h1>
            </div>
            <div class="col-md-offset-4 col-md-4">
                <!-- Form Start -->
                <form action="<?php $_SERVER["PHP_SELF"]; ?>" method="POST">
                    <div class="form-group">
                        <input type="hidden" name="p_id" class="form-control" value="1" placeholder="">
                    </div>
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" name="name" class="form-control" value="<?php echo $row['name'] ?>" placeholder="" required>
                    </div>
                    <div class="form-group">
                        <label>Age</label>
                        <input type="text" name="age" class="form-control" value="<?php echo $row['age'] ?>" placeholder="" required>
                    </div>
                    <div class="form-group">
                        <label>Vaccine</label>
                        <input type="text" name="vaccine" class="form-control" value="<?php echo $row['vaccine'] ?>" placeholder="" required>
                    </div>
                    <div class="form-group">
                        <label>Date</label>
                        <input type="text" name="date" class="form-control" value="<?php echo $row['date'] ?>" placeholder="" required>
                    </div>
                    <div class="form-group">
                        <label>City</label>
                        <input type="text" name="city" value="<?php echo $row["city"] ?>" class="form-control" placeholder="" required>
                    </div>
                    <div class="form-group">
                        <label>Hospital</label>
                        <input type="text" name="hospital" value="<?php echo $row["hospital"] ?>" class="form-control" placeholder="" required>
                    </div>
                    <div class="form-group">
                        <label>Username</label>
                        <input type="text" name="username" value="<?php echo $row["username"] ?>" class="form-control" placeholder="" required>
                    </div>           
                    
                    <input type="submit" name="submit" class="btn btn-primary" value="Update" required />
                </form>
                <!-- /Form -->

                <?php

                if (isset($_POST["submit"])) {

                   
                     ini_set('display_errors', 0);
                     $p_id = $_GET["id"];
                    $name = $_POST["name"];
                    $user_age = $_POST["age"];
                    $user_vaccine = $_POST["vaccine"];
                    $user_date = $_POST["date"];
                    $user_city = $_POST["city"];
                    $user_hospital = $_POST["hospital"];
                    $user_username = $_POST["username"];
                    

                    

                    // include "config.php";


                    $query = "UPDATE `children` SET `name`='{$name}',`age`='{$user_age}'
                    ,`vaccine`='{$user_vaccine}',`date`='{$user_date}',`city`='{$user_city}',`hospital`='{$user_hospital}',`username`='{$user_username}'
                    WHERE `c_id` = '{$c_id}' ";

                    mysqli_query($conn, $query);                    

                    header("location:http://localhost:82/vacccine/admin/children.php");
                }


                ?>
            </div>
        </div>
    </div>
</div>
</div>
</div>
<?php } ?>
<?php include "footer.php"; ?>