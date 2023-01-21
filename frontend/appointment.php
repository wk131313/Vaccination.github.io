<?php include "header.php" ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>MEDINOVA - Hospital Website Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    

    <!-- Appointment Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="row gx-5">
                <div class="col-lg-6 mb-5 mb-lg-0">
                    <div class="mb-4">
                        <h5 class="d-inline-block text-primary text-uppercase border-bottom border-5">Appointment</h5>
                        <h1 class="display-4">Make An Appointment For Your Family</h1>
                    </div>
                    <p class="mb-5">Eirmod sed tempor lorem ut dolores. Aliquyam sit sadipscing kasd ipsum. Dolor ea et dolore et at sea ea at dolor, justo ipsum duo rebum sea invidunt voluptua. Eos vero eos vero ea et dolore eirmod et. Dolores diam duo invidunt lorem. Elitr ut dolores magna sit. Sea dolore sanctus sed et. Takimata takimata sanctus sed.</p>
                    <!-- <a class="btn btn-primary rounded-pill py-3 px-5 me-3" href="">Find Doctor</a> -->
                    <a class="btn btn-outline-primary rounded-pill py-3 px-5" href="">Read More</a>
                </div>
                <div class="col-lg-6">
                    <div class="bg-light text-center rounded p-5">
                        <h1 class="mb-4">Book An Appointment</h1>



                    <?php


                        ini_set('display_errors', 0);
                  $vaccine = $_POST["vaccine"];
                  $user_hospital = $_POST["hospital"];
                  $user_name = $_POST["username"];
                  $user_email = $_POST["email"];
                  $user_date = $_POST["date"];
                  $user_time = $_POST["time"];
              



              include "config.php";

              $query1 = "SELECT * FROM `appointment` WHERE username = '{$user_name}'";
              $result = mysqli_query($conn, $query1);
              if(isset($_POST["save"]))
              {
              if (mysqli_num_rows($result) > 0) {
                echo 'User already exist';
              } else {
                  include "config.php";
                  $query = "INSERT INTO `appointment`(`vaccine`, `hospital`, 
                  `username`, `email`, `date`, `time`) 
                  VALUES ('{$vaccine}','{$user_hospital}','{$user_name}',
                  '{$user_email}','{$user_date}','{$user_time}')";
                  mysqli_query($conn, $query);
                  header("location:http://localhost/Vaccine/admin/appointment.php");
              }
          }


              ?>


                        <form action="<?php $_SERVER["PHP_SELF"] ?>" method="POST" autocomplete="off">
                            <div class="row g-3">
                                <div class="col-12 col-sm-6">
                                <div class="form-group">
                          <!-- <label>Choose Department</label> -->
                          <select name="vaccine" class="form-control" required>
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
                                </div>
                                <div class="col-12 col-sm-6">
                                <div class="form-group">
                          <!-- <label>Select Hospital</label> -->
                          <select name="hospital" class="form-control" required>
                              <option value="" selected> Select Hospital</option>

                              <?php 
                                    
                                    include "config.php";
                                    
                                    
                                    $query = "SELECT * FROM `hospital` ";



                                    $result = mysqli_query($conn, $query);

                                    if(mysqli_num_rows($result)>0)
                                    {
                                        while($row = mysqli_fetch_assoc($result)){
                                            echo "<option value='{$row["h_id"]}'>{$row["name"]}</option>";
                                        }

                                    }
                                    
                            ?>
                          </select>
                      </div>
                                </div>
                                <div class="form-group">
                          <!-- <label>Name</label> -->
                          <input type="text" name="username" class="form-control" placeholder="Your Name" required>
                      </div>
                      <div class="form-group">
                          <!-- <label>Phone</label> -->
                          <input type="text" name="email" class="form-control" placeholder="Your Email" required>
                      </div>
                                <div class="col-12 col-sm-6">
                                    <div class="date" id="date" data-target-input="nearest">
                                        <input type="text" name="date"
                                            class="form-control bg-white border-0 datetimepicker-input"
                                            placeholder="Date" data-target="#date" data-toggle="datetimepicker" style="height: 55px;" required>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="time" id="time" data-target-input="nearest">
                                        <input type="text" name="time"
                                            class="form-control bg-white border-0 datetimepicker-input"
                                            placeholder="Time" data-target="#time" data-toggle="datetimepicker" style="height: 55px;" required>
                                    </div>
                                </div>
                                <div class="col-12">

                                <input type="submit" name="save" class="btn btn-primary w-100 py-3 " value="Save" required />
                                <div class="alert alert-dark" role="alert">
                                    Your Appointment is booked 
                                    </div>
                                    <!-- <button class="btn btn-primary w-100 py-3" type="submit">Make An Appointment</button> -->
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Appointment End -->


    <!-- Footer Start -->
    
<div class="container-fluid bg-dark text-light mt-5 py-5">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <h4 class="d-inline-block text-primary text-uppercase border-bottom border-5 border-secondary mb-4">Get In Touch</h4>
                    <p class="mb-4">No dolore ipsum accusam no lorem. Invidunt sed clita kasd clita et et dolor sed dolor</p>
                    <p class="mb-2"><i class="fa fa-map-marker-alt text-primary me-3"></i>123 Street, New York, USA</p>
                    <p class="mb-2"><i class="fa fa-envelope text-primary me-3"></i>info@example.com</p>
                    <p class="mb-0"><i class="fa fa-phone-alt text-primary me-3"></i>+012 345 67890</p>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="d-inline-block text-primary text-uppercase border-bottom border-5 border-secondary mb-4">Quick Links</h4>
                    <div class="d-flex flex-column justify-content-start">
                    <a class="text-light mb-2" href="index.php"><i class="fa fa-angle-right me-2"></i>Home</a>
                        <a class="text-light mb-2" href="about.html"><i class="fa fa-angle-right me-2"></i>About Us</a>
                       
                        <a class="text-light mb-2" href="team.html"><i class="fa fa-angle-right me-2"></i>Meet The Team</a>
                        <a class="text-light mb-2" href="blog.html"><i class="fa fa-angle-right me-2"></i>Latest Blog</a>
                        <a class="text-light" href="contact.html"><i class="fa fa-angle-right me-2"></i>Contact Us</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="d-inline-block text-primary text-uppercase border-bottom border-5 border-secondary mb-4">Popular Links</h4>
                    <div class="d-flex flex-column justify-content-start">
                        <a class="text-light mb-2" href="index.php"><i class="fa fa-angle-right me-2"></i>Home</a>
                        <a class="text-light mb-2" href="about.html"><i class="fa fa-angle-right me-2"></i>About Us</a>
                       
                        <a class="text-light mb-2" href="team.html"><i class="fa fa-angle-right me-2"></i>Meet The Team</a>
                        <a class="text-light mb-2" href="blog.html"><i class="fa fa-angle-right me-2"></i>Latest Blog</a>
                        <a class="text-light" href="contact.html"><i class="fa fa-angle-right me-2"></i>Contact Us</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="d-inline-block text-primary text-uppercase border-bottom border-5 border-secondary mb-4">Newsletter</h4>
                    <form action="">
                        <div class="input-group">
                            <input type="text" class="form-control p-3 border-0" placeholder="Your Email Address">
                            <button class="btn btn-primary">Sign Up</button>
                        </div>
                    </form>
                    <h6 class="text-primary text-uppercase mt-4 mb-3">Follow Us</h6>
                    <div class="d-flex">
                        <a class="btn btn-lg btn-primary btn-lg-square rounded-circle me-2" href="#"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-lg btn-primary btn-lg-square rounded-circle me-2" href="#"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-lg btn-primary btn-lg-square rounded-circle me-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                        <a class="btn btn-lg btn-primary btn-lg-square rounded-circle" href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid bg-dark text-light border-top border-secondary py-4">
        <div class="container">
            <div class="row g-5">
                <div class="col-md-6 text-center text-md-start">
                    <p class="mb-md-0">&copy; <a class="text-primary" href="#"></a>. All Rights Reserved.</p>
                </div>
                
            </div>
        </div>
    </div>  
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>
