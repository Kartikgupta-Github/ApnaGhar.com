<?php 
include "dbconnect.php";
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Register</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<!-- header section starts  -->

<header class="header">

   <nav class="navbar nav-1">
      <section class="flex">
         <a href="home.php" class="logo"><i class="fas fa-house"></i>ApnaGhar.com</a>

         <ul>
            <li><a href="contact.php">post property<i class="fas fa-paper-plane"></i></a></li>
         </ul>
      </section>
   </nav>

   <nav class="navbar nav-2">
      <section class="flex">
         <div id="menu-btn" class="fas fa-bars"></div>

         <div class="menu">
            <ul>
               <li><a href="#">buy<i class="fas fa-angle-down"></i></a>
                  <ul>
                     <li><a href="#">house</a></li>
                     <li><a href="#">flat</a></li>
                     <li><a href="#">shop</a></li>
                     <li><a href="#">ready to move</a></li>
                     <li><a href="#">furnished</a></li>
                  </ul>
               </li>
               <li><a href="#">sell<i class="fas fa-angle-down"></i></a>
                  <ul>
                     <li><a href="contact.php">post property</a></li>
                     <li><a href="#">dashboard</a></li>
                  </ul>
               </li>
               <li><a href="#">rent</a>
                  <ul>
                     <li><a href="#">house</a></li>
                     <li><a href="#">flat</a></li>
                     <li><a href="#">shop</a></li>
                  </ul>
               </li>
               <li><a href="#">help<i class="fas fa-angle-down"></i></a>
                  <ul>
                     <li><a href="about.html">about us</a></i></li>
                     <li><a href="contact.php">contact us</a></i></li>
                     <li><a href="contact.php#faq">FAQ</a></i></li>
                  </ul>
               </li>
            </ul>
         </div>

         <ul>
            <li><a href="#">saved <i class="far fa-heart"></i></a></li>
            <?php  
            if(isset($_SESSION["user"])){
               $profile =  $_SESSION["user"];
               echo '<li><a href="#">'.$profile.' <i class="fas fa-angle-down"></i></a>
               <ul>
                  <li><a href="logout.php">logout</a></li>
               </ul>
            </li>';
            }
            else{
               echo '<li><a href="#">account <i class="fas fa-angle-down"></i></a>
               <ul>
                  <li><a href="login.php">login</a></li>
                  <li><a href="register.php">register</a></li>
               </ul>
            </li>';
            }
            ?>
         </ul>
      </section>
   </nav>

</header>
<!-- header section ends -->

<!-- register section starts  -->

<section class="form-container">

   <form action="register.php" method="post">
      <h3>create an account!</h3>
      <input type="tel" name="name" required maxlength="50"  placeholder="enter your name" class="box" id="name">
      <input type="email" name="email" required maxlength="50" placeholder="enter your email" class="box" id="email">
      <input type="password" name="pass" required maxlength="20" placeholder="enter your password" class="box" id="pass">
      <input type="password" name="c_pass" required maxlength="20" placeholder="confirm your password" class="box" id="c_pass">
      <p>already have an account? <a href="login.php">Login now</a></p>
      <input type="submit" value="register now" name="submit" class="btn">
   </form>

</section>

<!-- register section ends -->

<?php
if(isset($_POST["name"])){
$name=$_POST["name"];
$email=$_POST["email"];
$pass1=$_POST["pass"];
$pass2=$_POST["c_pass"];

if($pass1==$pass2){
    $pass = $pass1;
}

$sql="INSERT INTO `user`(`name`, `email`, `password`) VALUES ('$name','$email','$pass')";

if($conn->query($sql)===TRUE){
    $_SESSION['user']=$name;
    echo '<meta http-equiv = "refresh" content = "0; url = http://localhost/ApnaGhar.com/home.php"/>';
      
   }
else{
    echo "Error : " . $sql . "<br>" . $conn->error;
}
}
?>


<!-- footer section starts  -->

<footer class="footer">

   <section class="flex">

      <div class="box">
         <a href="tel:1234567890"><i class="fas fa-phone"></i><span>123456789</span></a>
         <a href="tel:1112223333"><i class="fas fa-phone"></i><span>1112223333</span></a>
         <a href="mailto:shaikhanas@gmail.com"><i class="fas fa-envelope"></i><span>support@apnaghar.com</span></a>
         <a href="#"><i class="fas fa-map-marker-alt"></i><span>mumbai, india - 400104</span></a>
      </div>

      <div class="box">
         <a href="home.php"><span>home</span></a>
         <a href="about.php"><span>about</span></a>
         <a href="contact.php"><span>contact</span></a>
         <a href="listings.php"><span>all listings</span></a>
         <a href="#"><span>saved properties</span></a>
      </div>

      <div class="box">
         <a href="#"><span>facebook</span><i class="fab fa-facebook-f"></i></a>
         <a href="#"><span>twitter</span><i class="fab fa-twitter"></i></a>
         <a href="#"><span>linkedin</span><i class="fab fa-linkedin"></i></a>
         <a href="#"><span>instagram</span><i class="fab fa-instagram"></i></a>

      </div>

   </section>

   <div class="credit">&copy; copyright @ 2024 by <span>team</span> | all rights reserved!</div>

</footer>

<!-- footer section ends -->


<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>