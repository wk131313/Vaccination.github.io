<!DOCTYPE html>

<!-- =========================================================
* Sneat - Bootstrap 5 HTML Admin Template - Pro | v1.0.0
==============================================================

* Product Page: https://themeselection.com/products/sneat-bootstrap-html-admin-template/
* Created by: ThemeSelection
* License: You must have a valid license purchased in order to legally use the theme for your project.
* Copyright ThemeSelection (https://themeselection.com)

=========================================================
 -->
<!-- beautify ignore:start -->
<html
  lang="en"
  class="light-style layout-menu-fixed"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="../assets/"
  data-template="vertical-menu-template-free"
>
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"
    />

    <title>Tables - Basic Tables | Sneat - Bootstrap 5 HTML Admin Template - Pro</title>

    <meta name="description" content="" />

   
  </head>

  <body>
    <?php include "menu.php" ?>

          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
              <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Tables /</span> Basic Tables</h4>

              <!-- Basic Bootstrap Table -->
              

              <!-- Striped Rows -->   
              <div class="card">
                <h5 class="card-header">Striped rows</h5>
                
                <div class="table-responsive text-nowrap">
                <a href="adduser.php"><button class=" btn btn-primary float-end me-3 mb-3" style="">ADD USER</button></a>
                <?php

                include "config.php";

                $query = "SELECT * FROM `user`";

                $result = mysqli_query($conn, $query);

                if (mysqli_num_rows($result) > 0) {

                  // echo "<pre>";
                  // print_r($result);
          


                ?>
                <table class="table table-striped">
                    
                    <thead>
                      <tr>
                      <th>S.No.</th>
                          <th>Full Name</th>
                          <th>Phone No</th>
                          <th>Email</th>
                          <th>Address</th>
                          <th>city</th>
                          <th>User Name</th>
                          <th>Role</th>
                          <th>Edit</th>
                          <th>Delete</th>
                          
                      </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                    <?php

                    while ($row = mysqli_fetch_assoc($result)) {



                    ?>
                          <tr>
                              <td class='id'><?php echo $row["u_id"] ?></td>
                              <td><?php echo $row["f_name"] . " " . $row["l_name"] ?></td>
                              <td><?php echo $row["phone"] ?></td>
                              <td><?php echo $row["email"] ?></td>
                              <td><?php echo $row["address"] ?></td>
                              <td><?php echo $row["city"] ?></td>
                              <td><?php echo $row["username"] ?></td>
                              <td>
                              
                              <?php

                              if ($row["role"] == "1") {
                                echo "Admin";
                              } else {
                                echo "Normal";
                              }
                              ?>
                              
                              
                              </td>
                              <td class='edit'><a href='updateuser.php?id=<?php echo $row["u_id"] ?>'><i class="bx bx-edit-alt me-1"></i></a></td>
                              <td class='delete'><a href='deleteuser.php?id=<?php echo $row["u_id"] ?>'><i class="bx bx-trash me-1"></i></a></td>
                          </tr>
                          <?php } ?>
                      
                      
                      
                    </tbody>
                  </table>
                </div>
              </div>
              <?php } ?>
              <!--/ Striped Rows -->

              <hr class="my-5" />

            </div>
            <!-- / Content -->
            <?php include "footer.php" ?>
  </body>
</html>