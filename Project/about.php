<?php

include 'config.php';

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
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'header.php'; ?>

<div class="heading">
   <h3>about us</h3>
   <p> <a href="home.php">home</a> / about </p>
</div>

<section class="about">

   <div class="flex">

      <div class="image">
         <img src="images/about-img.jpg" alt="">
      </div>

      <div class="content">
         <h3>why choose us?</h3>
         <p>A BETTER WAY TO BUY BOOKS ONLINE</p>
         <p>Our Mission: To help local, independent bookstores thrive in the age of ecommerce.</p>
         <p>Our Vision: We work to connect readers with independent booksellers all over the world. We believe local bookstores are essential community hubs that foster culture, curiosity, and a love of reading, and we're committed to helping them survive and thrive. Our platform gives independent bookstores tools to compete online and financial support to help them maintain their presence in local communities.</p>
         <a href="contact.php" class="btn">contact us</a>
      </div>

   </div>

</section>


<section class="authors">

   <h1 class="title">greate authors</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/author-1.jpg" alt="">
        
         <h3>John Harry</h3>
      </div>

      <div class="box">
         <img src="images/author-2.jpg" alt="">
         
         <h3>Alexa jin</h3>
      </div>

      <div class="box">
         <img src="images/author-3.jpg" alt="">
         
         <h3>Mathew Kent</h3>
      </div>

      <div class="box">
         <img src="images/author-4.jpg" alt="">
         
         <h3>Lucy Alexender</h3>
      </div>

      <div class="box">
         <img src="images/author-5.jpg" alt="">
        
         <h3>Steward Bens</h3>
      </div>

      <div class="box">
         <img src="images/author-6.jpg" alt="">
         
         <h3>Katherine Watson</h3>
      </div>

   </div>

</section>







<?php include 'footer.php'; ?>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>