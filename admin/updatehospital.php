<!-- Menu -->
<?php include "menu.php" ?>
    <!--/ Menu -->

<?php 

include "config.php";

$h_id = $_GET["id"];


$query  = "SELECT * FROM `hospital` WHERE `h_id` = '{$h_id}'";

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
                
                <h1 class="card-title">Modify Hospital Details</h1>
            </div>
            <div class="col-md-offset-4 col-md-4">
                <!-- Form Start -->
                <form action="<?php $_SERVER["PHP_SELF"]; ?>" method="POST">
                    <div class="form-group">
                        <input type="hidden" name="h_id" class="form-control" value="1" placeholder="">
                    </div>
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" name="name" class="form-control" value="<?php echo $row['name'] ?>" placeholder="" required>
                    </div>
                    <div class="form-group">
                        <label>phone</label>
                        <input type="text" name="phone" value="<?php echo $row["phone"] ?>" class="form-control" placeholder="" required>
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="text" name="email" value="<?php echo $row["email"] ?>" class="form-control" placeholder="" required>
                    </div>
                    <div class="form-group">
                        <label>Address</label>
                        <input type="text" name="address" value="<?php echo $row["address"] ?>" class="form-control" placeholder="" required>
                    </div>
                    <div class="form-group">
                        <label>City</label>
                        <input type="text" name="city" value="<?php echo $row["city"] ?>" class="form-control" placeholder="" required>
                    </div>
                    <div class="form-group">
                          <label for="exampleInputPassword1">Vaccine</label>
                          <select name="vaccine" class="form-control">
                              <option value="" selected> Select Vaccine</option>
                              
                              <?php 
                                    
                                    include "config.php";
                                    
                                    
                                    $query = "SELECT * FROM `vaccines` ";



                                    $result = mysqli_query($conn, $query);

                                    if(mysqli_num_rows($result)>0)
                                    {
                                        while($row = mysqli_fetch_assoc($result)){
                                            echo "<option value='{$row["v_id"]}'>{$row["vname"]}</option>";
                                        }

                                    }
                                    
                            ?>
                          </select>
                      </div>
                    <div class="form-group">
                          <label for="exampleInputPassword1">Hospital image</label>
                          <br><br>
                          <input type="file" name="fileToUpload" required>
                          <br>
                          <br>
                      </div>

                    
                   
                    
                    <input type="submit" name="submit" class="btn btn-primary" value="Update" required />
                </form>
                <!-- /Form -->

                <?php

                if (isset($_POST["submit"])) {

                   
                     ini_set('display_errors', 0);
                     
                    $name = $_POST["name"];
                    $user_phone = $_POST["phone"];
                    $user_email = $_POST["email"];
                    $user_address = $_POST["address"];
                    $user_city = $_POST["city"];
                    $user_vaccine = $_POST["vaccine"];
                    

                    // include "config.php";


                    $query = "UPDATE `hospital` SET `name`='{$name}',`phone`='{$user_phone}'
                    ,`email`='{$user_email}',`address`='{$user_address}',`city`='{$user_city}',`vaccine`='{$user_vaccine}'
                     
                    WHERE `h_id` = '{$h_id}'";

                    mysqli_query($conn, $query);                    
                    
                    header("location:hosppital.php");
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