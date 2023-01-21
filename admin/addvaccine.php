<?php include "menu.php"; ?>
  <div id="admin-content">
      <div class="container">
         <div class="row">
             <div class="col-md-12">
                 <h1 class="admin-heading">Add New Vaccine</h1>
             </div>
              <div class="col-md-offset-3 col-md-6">
                  <!-- Form -->
                  <form  action="save-vaccine.php" method="POST" enctype="multipart/form-data">
                      
                      <div class="form-group">
                          <label for="vname">vaccine_name</label>
                          <input type="text" name="vname" class="form-control" autocomplete="off" required>
                      </div>
                      
                      <br>
                      <br>
                     
                   
                      
                      
                      <br><br>
                      <div class="form-group">
                          <label for="exampleInputPassword1">vaccine image</label>
                          <br><br>
                          <input type="file" name="fileToUpload" required>
                          <br>
                          <br>
                      </div>
                      <br>
                      <br>
                     
                      <a href="hospitals.php"><input type="submit" name="submit" class="btn btn-primary" value="Save" required /></a>
                  </form>
                  <!--/Form -->
              </div>
          </div>
      </div>
  </div>
<?php include "footer.php"; ?>