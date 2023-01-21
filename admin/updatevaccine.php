<!-- Menu -->
<?php include "menu.php" ?>
    <!--/ Menu -->

<?php 

include "config.php";

$v_id = $_GET["id"];


$query  = "SELECT * FROM `vaccines` WHERE `v_id` = '{$v_id}'";

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
                        <input type="hidden" name="v_id" class="form-control" value="1" placeholder="">
                    </div>
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" name="vname" class="form-control" value="<?php echo $row['vname'] ?>" placeholder="" required>
                    </div>
                     
                   
                    <input type="submit" name="submit" class="btn btn-primary" value="Update" required />
                </form>
                <!-- /Form -->

                <?php

                if (isset($_POST["submit"])) {

                   
                     ini_set('display_errors', 0);
                     $v_id = $_GET["id"];
                    $vname = $_POST["vname"];
                   
                    

                    

                    // include "config.php";


                    $query = "UPDATE `vaccines` SET `vname`='{$vname}'
                    WHERE `V_id` = '{$v_id}' ";

                    mysqli_query($conn, $query);                    
                    header("location:vaccine.php");
                    
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