<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">     
<link rel="stylesheet" href="styles.css">

    </head>
<!-- header section -->


    <body>

    <header class="header">
        <div class="logo">
            <img src="photos/homelogo5.jpg" alt="Coffee Shop Logo"> <!-- Adjusted logo path -->
        </div>
        <div class="nav-menu">
            <a href="Homepage.php">Home</a>
            <div class="dropdown">
                <a href="productspage.php">Menu</a>
            </div>
            <a href="contact.php">Contact</a>
            <a href="#about">About Us</a>
        </div>
        <div class="search-cart">
            <input type="text" class="search-bar" placeholder="Search...">
            <div class="cart-icon">&#128722;</div>
        </div>
    </header>
   <br><br><br>

    <!-- our products section -->
     <section class="products" id="products">
        
        <h1  class="heading"> <span> Products </span>   
        </h1>
     

<div class="box-container">
<?php

$host = 'localhost';
$user = 'root';
$pass = '';
$dbname = 'cbd_bakery';

//create connection 
$conn = mysqli_connect($host, $user, $pass, $dbname);

    if(isset($_POST['search']))

    // Array containing product information
    $products = [
        ["party order.jpg", "Party Orders", "partyorder.php"],
        ["Pies", "pies.html", "pie.jpg"],
        ["Hot Breakfast", "breakfast.html", "breakfast.jpg"],
        ["Donuts", "donuts.html", "donuts.jfif"],
        ["Cakes and Slices", "cake.html", "cakes.jpg"]
    ];

    
    
    
    ?>

    <div class="box" >
    <img src="photos/party order.jpg" height="100" width="150" alt=" order.jpg ">
        <h3>Party Orders</h3>
        <a href="partyorder.php" class="btn">Read more</a>
    </div>
    <div class="box">
    <img src="photos/pie.jpg" height="100" width="150" alt=" pie.jpg ">
    <h3>Pie</h3>
        <a href="pie.php" class="btn">Read more</a>
    </div>

    <div class="box">
    <img src="photos/breakfast.jpg" height="100" width="150" alt=" breakfast.jpg ">
        <h3>Hot Breakfast</h3>
        <a href="breakfast.php" class="btn">Read more</a>
    </div>

    <div class="box">
    <img src="photos/donuts.jfif" height="100" width="150" alt=" donuts.jfif ">
        <h3>Donuts</h3>
        <a href="donuts.php" class="btn">Read more</a>
    </div>

    <div class="box">
    <img src="photos/cakes.jpg" height="100" width="150" alt=" cakes.jpg ">
        <h3>Cakes and Slices</h3>
        <a href="cake.php" class="btn">Read more</a> 
    </div>
</div>
     </section>
    <!-- our products section -->
    

</body>
</html>

    