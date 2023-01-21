<?php include "header.php" ?>

    <!-- Hero Start -->
    <!-- <div class="container-fluid bg-primary py-5 mb-5 hero-header">
        <div class="container py-5">
            <div class="row justify-content-start">
                <div class="col-lg-8 text-center text-lg-start">
                    <h5 class="d-inline-block text-primary text-uppercase border-bottom border-5" style="border-color: rgba(256, 256, 256, .3) !important;">Welcome To Medinova</h5>
                    <h1 class="display-1 text-white mb-md-4">Best Healthcare Solution In Your City</h1>
                    <div class="pt-2">
                        <a href="" class="btn btn-light rounded-pill py-md-3 px-md-5 mx-2">Find Doctor</a>
                        <a href="" class="btn btn-outline-light rounded-pill py-md-3 px-md-5 mx-2">Appointment</a>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- Hero End -->


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
<div class="container">
        <h1 style="text-align: center";>HOSPITALS</h1>
    <div class="row">
        <?php

        include "config.php";

        $query = " SELECT * FROM `hospital`
        -- LEFT JOIN user ON post.author = user.user_id 
        -- LEFT JOIN category ON post.category = category.category_id" ; 

        $result = mysqli_query($conn,$query);

        if(mysqli_num_rows($result)>0)
        {
            while($row = mysqli_fetch_assoc($result))
                {
        ?>
            <div class="col-sm-3">
                <div class="card" style="width: 100%; ">
                    <a href=""><img class="card-img-top" src="../admin/upload/<?php echo $row["hospital_img"]; ?>" alt=""
                            style="width: 100%; height: 100%;"></a>
                    <div class="card-body">
                        <h4  class="card-title"><?php echo $row["name"]; ?></h4>
                        <p class="card-text"><?php echo $row["address"]; ?>
                        </p>
                        <a href="fhospital-detail.php?id=<?php echo $row["hospital_img"]; ?>" class="btn" style="color: black;">See Product</a>
                    </div>
                </div>
            </div>        
        
    <?php } } ?>
    </div> <br> <br>
    </div>

    
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
</body>
</html>