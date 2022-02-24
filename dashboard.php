<?php
//include auth_session.php file on all user panel pages
include("auth_session.php");
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Dashboard - Client area</title>
    <link rel="stylesheet" href="css/style1.css" />
    <!-- swiper css link  -->
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

<!-- font awesome cdn link  -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

<!-- custom css file link  -->
<link rel="stylesheet" href="css/style.css">

</head>
<body>
    <!-- header section starts  -->

<section class="header">

<a href="home.php" class="logo">VK travel.</a>

<nav class="navbar">
   <a href="index.php">Home</a>
   <a href="about.php">About</a>
   <a href="package.php">Packages</a>
   <a href="book.php">Book</a>
   <a href="registration.php">Registration</a>
</nav>

<div id="menu-btn" class="fas fa-bars"></div>

</section>
    <div class="form">
        <p>Hey, <?php echo $_SESSION['username']; ?>!</p>
        <p>You are now user dashboard page.</p>
        <p><a href="logout.php">Logout</a></p>
    </div>

<!-- footer section starts  -->

<section class="footer">

   <div class="box-container">

      <div class="box">
         <h3>quick links</h3>
         <a href="home.php"> <i class="fas fa-angle-right"></i> home</a>
         <a href="about.php"> <i class="fas fa-angle-right"></i> about</a>
         <a href="package.php"> <i class="fas fa-angle-right"></i> package</a>
         <a href="book.php"> <i class="fas fa-angle-right"></i> book</a>
      </div>

      <div class="box">
         <h3>extra links</h3>
         <a href="ask-question.php"> <i class="fas fa-angle-right"></i> ask questions</a>
         <a href="#"> <i class="fas fa-angle-right"></i> about us</a>
         <a href="#"> <i class="fas fa-angle-right"></i> privacy policy</a>
         <a href="#"> <i class="fas fa-angle-right"></i> terms of use</a>
      </div>

      <div class="box">
         <h3>contact info</h3>
         <a href="#"> <i class="fas fa-phone"></i> +91-9106277901 </a>
         <a href="#"> <i class="fas fa-phone"></i> +91-7359917656 </a>
         <a href="#"> <i class="fas fa-envelope"></i> parmarvisu02@gmail.com </a>
         <a href="#"> <i class="fas fa-map"></i> Gujarat, india - 390019 </a>
      </div>

      <div class="box">
         <h3>follow us</h3>
         <a href="https://www.facebook.com/profile.php?id=100008380470803"> <i class="fab fa-facebook-f"></i> facebook </a>
         <a href="https://github.com/vishal25899"> <i class="fa-brands fa-github"></i> github </a>
         <a href="#"> <i class="fab fa-instagram"></i> instagram </a>
         <a href="https://www.linkedin.com/in/vishal-parmar-9582b2171/"> <i class="fab fa-linkedin"></i> linkedin </a>
      </div>

   </div>

   <div class="credit"> created by <span>Vishal Parmar</span> | </div>

</section>

<!-- footer section ends -->

<!-- swiper js link  -->
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>    
</body>
</html>