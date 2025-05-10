<?php

@include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>about</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'header.php'; ?>

<section class="about">

   <div class="row">

      <div class="box">
         <img src="images/about-img-1.png" alt="">
         <h3>why choose us?</h3>
         <p>At Sasto Deal, we believe grocery shopping should be affordable, convenient, and hassle-free. Our mission is to bring you the freshest produce, quality products, and unbeatable prices, all in one place. With our commitment to excellent customer service and a wide variety of items, we ensure every visit is worth your time.</p>
         <a href="contact.php" class="btn">contact us</a>
      </div>

      <div class="box">
         <img src="images/about-img-2.png" alt="">
         <h3>what we provide?</h3>
         <p>Fresh Fruits & Vegetables: Sourced daily to guarantee freshness and flavor.
            Premium Meat & Fish: Handpicked for quality and hygiene.
            Pantry Essentials: Everything you need, from grains to spices, at competitive prices.
            Convenient Shopping: Easy online ordering and doorstep delivery for a seamless experience.</p>
         <a href="shop.php" class="btn">our shop</a>
      </div>

   </div>

</section>

<section class="reviews">

   <h1 class="title">clients reivews</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/sudeep.jpg" alt="">
         <p>"Sasto Deal never disappoints! Fresh fruits and vegetables every time, and the delivery is always on time. Highly recommended!"</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Sudeep Shrestha</h3>
      </div>

      <div class="box">
         <img src="images/bishesh.jpg" alt="">
         <p>"Affordable prices and a great selection. The meat section is especially impressive—always fresh and clean."</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Sanjeev Rai</h3>
      </div>

      <div class="box">
         <img src="images/pushpa.jpg" alt="">
         <p>"The website is easy to navigate, but sometimes a few items are out of stock. Overall, not bad for regular shopping."</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Kumari Pushanjali</h3>
      </div>

      <div class="box">
         <img src="images/saroj.jpg" alt="">
         <p>"Delivery was fine, but some vegetables were not as fresh as expected. Still, it’s convenient for busy days."</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Saroj Pandey</h3>
      </div>

      <div class="box">
         <img src="images/rubim.jpg" alt="">
         <p>"The customer service response time is too slow. I had an issue with a missing item, and it took days to resolve."</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Rubim Shrestha</h3>
      </div>

      <div class="box">
         <img src="images/ashim.jpg" alt="">
         <p>"I ordered fish, but it arrived late and didn’t seem fresh. The prices are good, but the quality can be inconsistent."</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Ashim Kc</h3>
      </div>

   </div>

</section>









<?php include 'footer.php'; ?>

<script src="js/script.js"></script>

</body>
</html>