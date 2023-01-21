<?php include "header.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
    crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
    crossorigin="anonymous"></script>

<div class="container">
        <h1>VACCINESS</h1>
    <div class="row">
        <?php

        include "config.php";

        $query = " SELECT * FROM `vaccines`
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
                    <a href=""><img class="card-img-top" src="../admin/upload/<?php echo $row["vaccine_img"]; ?>" alt=""
                            style="width: 100%; height: 100%;"></a>
                    <div class="card-body">
                        <h4 class="card-title"><?php echo $row["vname"]; ?></h4>
                        <!-- <p class="card-text"><?php echo $row["address"]; ?><br>
                        </p> -->
                        <a href="fvaccine-detail.php?id=<?php echo $row["vaccine_img"]; ?>" class="btn" style="color: black;">See Product</a>
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