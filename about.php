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
         <h3>CANTEEN MANAGEMENT WEBSITE</h3>
         <p>This is a Website build by S6 IT students of College of Engineering Thalassery</p>
         <h1>---TEAM MEMBERS---</h1>
         <br>
         <h2>Muhammad Zahir M</h2>
         <h2>Abhinand D Kumar</h2>
         <h2>Mohamed Omar Jaleel</h2>
         <h2>Aromal K</h2>
         <br>
         <h1>---GUIDED BY---</h1>
         <br>
         <h2>PROF ARYA SARATH P</h2>
      </div>
   </div>
</section> 



<section class="reviews">

   <h1 class="title">Team Members</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/zahir.jpg" alt=""> 
         <h3>Muhammad Zahir M</h3>
      </div>

      <div class="box">
         <img src="images/abhinand.jpg" alt="">
         <h3>Abhinand D Kumar</h3>
      </div>

      <div class="box">
         <img src="images/omar.jpg" alt="">
         <h3>Mohamed Omar Jaleel</h3>
      </div>

      <div class="box">
         <img src="images/arimal.jpg" alt="">
         <h3>Aromal K</h3>
      </div>
   </div>
</section>

<section class="reviews">

   <h1 class="title">Guided By</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/arya.jpg" alt=""> 
         <h3>Prof Arya Sarath P</h3>
      </div>
</section>

<section class="about">

   <div class="row">

      <div class="box">
         
         <h3>Give Your Valuable Feedback</h3>
         <p>We greatly value your feedback! Your insights are crucial in helping us enhance our services and meet your expectations more effectively. Please take a moment to share your thoughts, suggestions, or any concerns you may have related our services related to canteen and its website. Your input is invaluable to us as we strive to continually improve and provide you with the best experience possible. Thank you for your time and contribution!</p>
         <a href="contact.php" class="btn">Feedback</a>
      </div>

      <div class="box">
         <img src="images/about-img-2.png" alt="">
         <h3>what we provide?</h3>
         
         <a href="shop.php" class="btn">our shop</a>
      </div>

   </div>

</section>

<?php include 'footer.php'; ?>

<script src="js/script.js"></script>

</body>
</html>