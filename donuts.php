<?php

$host = 'localhost';
$user = 'root';
$pass = '';
$dbname = 'cbd_bakery';

//create connection 
$conn = mysqli_connect($host, $user, $pass, $dbname);

    if(isset($_POST['search']))
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    </head>
        <style>

body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: rgb(238 231 255 );
    margin: 0;
   padding: 0;
   font-family: Arial, sans-serif;
}

h1 {
    
    
            font-size: 2rem;
            color: rgb(236 72 153);
            font-weight: bold;
            
            padding: 10px;
            border-radius: 5px;
    
    

}

.orders{
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(10rem, 1fr));
  gap: 1.5rem; 
}

.orders .partyorder{
    background-color: var(--card-color);
    padding: 3rem 2rem;
    text-align: center; 
}

.orders .partyorder h3{
    color: black;
    font-size: 1.6rem;

}
.orders .partyorder .price{
    color: black;
    font-size: 1.3rem;

}
.orders .partyorder .dozenprice{
    color: black;
    font-size: 1.3rem;

}

img {
    border-radius: 5px;
}   
        

.navbar ul{
   list-style-type: none;
   background-color:hsl(0, 0%, 25%) ;
   padding: 10px;
   margin: 0px;
   text-align: right;

}
/* Navbar styling */
.navbar ul {
   display: flex;
   gap: 30px; /* Space between navbar links */
}
.navbar a{
   color: white;
   text-decoration: none;
   padding: 15px;
   display: block;
   
   font-size:20px;
}
.navbar a:hover{
   background-color: lightcoral;
}

.active{

background-color: purple; 
}

.button {
            line-height: 1;
            display: inline-block;
            font-size: 1.3rem;
            text-decoration: none;
            border-radius: 10px;
            color: black;
            padding: 8px;
            background-color: lightpink;
            font-size: 15px;
            font-weight: bold;
        }
        .button:hover {
            color: black;
        }

        .header {
            position: fixed;
            top: 0;
            width: 150%;
            height: 60px;;
            background-color: white; /* Default color */
            padding: 5px 0; /* Default padding */
            display: flex;
            justify-content: space-between;
            align-items: center;
            z-index: 1000;
            transition: background-color 0.3s ease, padding 0.3s ease; /* Smooth transitions */
        }

        .header.scrolled {
            background-color: #f0f0f0; /* Color when scrolled */
            padding: 0px 0; /* Smaller padding when scrolled */
        }

        .logo {
            display: flex;
        }

        .logo img {
            height: 50px; /* Smaller logo size when scrolled */
            width: auto;
            transition: height 0.3s ease; /* Smooth transition for logo size */
        }

        .header.scrolled .logo img {
            height: 40px; /* Smaller logo size when scrolled */
        }

        .nav-menu {
            display: flex;
            align-items: center;
        }

        .nav-menu a {
            text-decoration: none;
            font-family: italic bold;
            margin: 0 15px; /* Adjusted margin */
            color: #333; /* Text color */
            position: relative;
            font-size: 20px;
            transition: color 0.3s ease; /* Smooth transition for hover effect */
        }

        .nav-menu a:hover {
            color: #555; /* Hover color */
        }
        .header.scrolled.nav-menu a {
            
            font-size: 15px;
        }
        .dropdown {
            position: relative;
            display: inline-block;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            top: 35px;
            background-color: #fff;
            box-shadow: 0px 8px 16px rgba(0, 0, 0, 0.2);
            padding: 10px;
            z-index: 1;
        }

        .dropdown:hover .dropdown-content {
            display: block;
        }

        .search-cart {
            display: flex;
            align-items: center;
        }

        .search-bar {
            padding: 5px;
            border: 1px solid #ddd;
            border-radius: 4px;
        }

        .cart-icon {
            margin-left: 20px;
            font-size: 20px;
            cursor: pointer;
        }

        .header {
            position: fixed;
            top: 0;
            width: 100%;
            height: 60px;;
            background-color: white; /* Default color */
            padding: 5px 0; /* Default padding */
            display: flex;
            justify-content: space-between;
            align-items: center;
            z-index: 1000;
            transition: background-color 0.3s ease, padding 0.3s ease; /* Smooth transitions */
        }

        .header.scrolled {
            background-color: #f0f0f0; /* Color when scrolled */
            padding: 0px 0; /* Smaller padding when scrolled */
        }

        .logo {
            display: flex;
        }

        .logo img {
            height: 50px; /* Smaller logo size when scrolled */
            width: auto;
            transition: height 0.3s ease; /* Smooth transition for logo size */
        }

        .header.scrolled .logo img {
            height: 40px; /* Smaller logo size when scrolled */
        }

        .nav-menu {
            display: flex;
            align-items: center;
        }

        .nav-menu a {
            text-decoration: none;
            font-family: italic bold;
            margin: 0 15px; /* Adjusted margin */
            color: #333; /* Text color */
            position: relative;
            font-size: 20px;
            transition: color 0.3s ease; /* Smooth transition for hover effect */
        }

        .nav-menu a:hover {
            color: #555; /* Hover color */
        }
        .header.scrolled.nav-menu a {
            
            font-size: 15px;
        }
        .dropdown {
            position: relative;
            display: inline-block;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            top: 35px;
            background-color: #fff;
            box-shadow: 0px 8px 16px rgba(0, 0, 0, 0.2);
            padding: 10px;
            z-index: 1;
        }

        .dropdown:hover .dropdown-content {
            display: block;
        }

        .search-cart {
            display: flex;
            align-items: center;
        }

        .search-bar {
            padding: 5px;
            border: 1px solid #ddd;
            border-radius: 4px;
        }

        .cart-icon {
            margin-left: 20px;
            font-size: 20px;
            cursor: pointer;
        }
        
    </style>

<body>

<!-- header section -->
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
   <br><br><br><br>

    <h1 style="text-align:center; color:rgb(236 72 153);"> Donutss</h1>


        <?php
                  // Array of products
                        $products = [
            ["cinnamon.jfif", "cinnamon", 2.20],
            ["filleddonut.jfif", "mini filled", 3.80],
            ["icedjam.jfif", "iced jam ball ", 4.80],
            ["iced.jfif","iced",  2.60],
            ["jam.jpg","jam ball",  4.60],
            ["jhon.jpg", "long john",  5.00],
            
            


               ];

              // Loop through each product and generate a table row
                  foreach ($products as $product) 
?>


<div class="orders">

<div class="partyorder">
        <img src="photos/cinnamon.jfif" height="150" width="150" alt="">
        <h3>Cinnamon</h3>
        <div class="price">$2.20</div>
        <a href="add_to_cart.php" class="button">Add to cart</a>
    </div>

    <div class="partyorder">
        <img src="photos/filleddonut.jfif " height="150" width="150" alt="">
        <h3>Mini Filled</h3>
        <div class="price">$3.80</div>
        <a href="add_to_cart.php" class="button">Add to cart</a>
    </div>

    <div class="partyorder">
        <img src="photos/icedjam.jfif " height="150" width="150" alt="">
        <h3>Iced Jam Ball</h3>
        <div class="price">$4.80</div>
        <a href="add_to_cart.php" class="button">Add to cart</a>
    </div>

    <div class="partyorder">
        <img src="photos/iced.jfif " height="150" width="150" alt="">
        <h3>Iced</h3>
        <div class="price">$2.60</div>
        <a href="add_to_cart.php" class="button">Add to cart</a>
    </div>

    <div class="partyorder">
        <img src="photos/jam.jpg " height="150" width="150" alt="">
        <h3> Jam Ball</h3>
        <div class="price">$4.60</div>
        <a href="add_to_cart.php" class="button">Add to cart</a>
    </div>

    <div class="partyorder">
        <img src="photos/jhon.jpg " height="150" width="150" alt="">
        <h3>Long john</h3>
        <div class="price">$5.00</div>
        <a href="add_to_cart.php" class="button">Add to cart</a>
    </div>



</div>
                 
</body>
</html>
