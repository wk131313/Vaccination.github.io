<?php include "menu.php"; ?>
  <div id="admin-content">
      <div class="container">
         <div class="row">
             <div class="col-md-12">
                 <h1 class="admin-heading">Add New Hoispital</h1>
             </div>
              <div class="col-md-offset-3 col-md-6">
                  <!-- Form -->
                  <form  action="save-hospital.php" method="POST" enctype="multipart/form-data">
                      <div class="form-group">
                          <label for="name">Name</label>
                          <input type="text" name="name" class="form-control" autocomplete="off" required>
                      </div>
                      <div class="form-group">
                          <label for="phone">phone</label>
                          <input type="text" name="phone" class="form-control" autocomplete="off" required>
                      </div>
                      <div class="form-group">
                          <label for="email"> Email</label>
                          <input name="email" class="form-control" rows="5"  required></input>
                      </div>
                      <div class="form-group">
                          <label for="address">Address</label>
                          <input type="text" name="address" class="form-control" autocomplete="off" required>
                      </div>
                      <div class="form-group">
                          <label for="city"> City</label>
                          <input name="city" class="form-control" rows="5"  required></input>
                      </div>
                      <br>
                      <br>
                     
                   
                      
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
                      <br><br>
                      <div class="form-group">
                          <label for="exampleInputPassword1">Hospital image</label>
                          <br><br>
                          <input type="file" name="fileToUpload" required>
                          <br>
                          <br>
                      </div>
                      <br>
                      <br>
                     
                      <a href="hospital.php"><input type="submit" name="submit" class="btn btn-primary" value="Save" required /></a>
                  </form>
                  <!--/Form -->
              </div>
          </div>
      </div>
  </div>
<?php include "footer.php"; ?>
