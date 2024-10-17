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
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom admin css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php @include 'header.php'; ?>

<section class="heading">
    <h3>about us</h3>
    <p> <a href="home.php">Home</a> / About </p>
</section>

<section class="about">

    <div class="flex">

        <div class="image">
            <img src="images/cafe.jpg" alt="">
        </div>

        <div class="content">
            <h3>why choose our Bubble tea?</h3>
            <p>Our bubble tea is made with the finest ingredients, offering a variety of flavors and toppings that will satisfy your cravings. Experience the best bubble tea in town!</p>
            <a href="shop.php" class="btn">shop now</a>
        </div>

    </div>

    <div class="flex">

        <div class="content">
            <h3>what we offer?</h3>
            <p>From classic milk teas to fruity flavors and specialty drinks, our menu has something for everyone. We also offer vegan and gluten-free options.</p>
            <a href="contact.php" class="btn">contact us</a>
        </div>

        <div class="image">
            <img src="images/s-l1200.jpg" alt="">
        </div>

    </div>

    <div class="flex">

        <div class="image">
            <img src="images/who.jpg" alt="">
        </div>

        <div class="content">
            <h3>who we are?</h3>
            <p>We are a passionate team dedicated to bringing you the best bubble tea experience. Our mission is to provide high-quality, delicious bubble tea in a friendly and welcoming environment.</p>
            <a href="#reviews" class="btn">clients reviews</a>
        </div>

    </div>

</section>

<section class="reviews" id="reviews">

    <h1 class="title">client's reviews</h1>

    <div class="box-container">

        <div class="box">
            <img src="images/Tharindu perera.jpg" alt="">
            <p>The best bubble tea I've ever had! The flavors are amazing, and the staff is super friendly.</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Tharindu Perera</h3>
        </div>

        <div class="box">
            <img src="images/Chandi Dharmaratne.jpg" alt="">
            <p>Love this place! Great bubble tea and a nice atmosphere. Highly recommend!</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Chandi Dharmaratne</h3>
        </div>

        <div class="box">
            <img src="images/Maithripala.jpg" alt="">
            <p>Amazing selection of bubble teas and great customer service. I come here every week!</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Maithripala Sirisena</h3>
        </div>

        <div class="box">
            <img src="images/anjali.jpg" alt="">
            <p>Hands down the best bubble tea shop in the area. The drinks are always perfect!</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Anjali Gunawardhana</h3>
        </div>

        <div class="box">
            <img src="images/namal.jpg" alt="">
            <p>Great variety and high-quality ingredients. I love trying their new flavors.</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Namal Rajapaksha</h3>
        </div>

        <div class="box">
            <img src="images/dilip.jpg" alt="">
            <p>Delicious bubble tea and friendly service. My go-to spot for a refreshing drink.</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Dilip Kurama</h3>
        </div>

    </div>

</section>











<?php @include 'footer.php'; ?>

<script src="js/script.js"></script>

</body>
</html>