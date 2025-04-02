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
    <meta name="viewport" content= "width=device-width, intial-scale=1.0">
    <title>Contact Us</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.6.0/css/fontawesome.min.css" integrity="sha384-NvKbDTEnL+A8F/AA5Tc5kmMLSJHUO868P+lDtTpJIeQdGYaUIuLr4lVGOEA1OcMy" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="style2.css">    
</head>
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
   <br><br><br><br>

    <section class="contact">
        <div class="content">
            <h2>Contact Us</h2>
            <p>" Your voice matters. Get in touch!" </p>

        </div>
        <div class="container">
            <div class="contactInfo">
                <div class="box">
                    <div class="icon"><i class="fa fa-map-marker" aria-hidden="true"></i></div>
                    
                    <div class="text">
                        <h3>Address : 480 Bourke St, <br> Melbourne, <br>VIC 3000</h3>
                        
                    </div>
                    </div>
                    <div class="box">
                    <div class="icon"><i class="fa-solid fa-phone"></i></div>
                    <div class="text">
                        <h3>Phone : (03)96702640</h3>
                        
                    </div>
</div>
                    <div class="box">
                    <div class="icon"><i class="fa fa-envelope-o" aria-hidden="true"></i></div>
                    <div class="text">
                        <h3>Email : cbdbakery@gmail.com</h3>
                    </div>

                    <div class="box">
    
                    <div class="text">
                        <h2>  Directions</h2>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m19!1m8!1m3!1d100861.7594088936!2d144.8771214!3d-37.815109!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m0!4m5!1s0x6ad65d4b6951eac5%3A0x6a787fb45bd74aa4!2s480%20Bourke%20St%2C%20Melbourne%20VIC%203000!3m2!1d-37.8151377!2d144.9595224!5e0!3m2!1sen!2sau!4v1743088030643!5m2!1sen!2sau" width="250" height="150" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

                    </div>
                    
                </div>
            </div>
<div class="contactForm">
    <form action="">
        <h2>Send Message</h2>
        <div class= "inputBox">
        <input type="text" name="" required="required">
        <span>Full Name</span>
        </div>
        <div class= "inputBox">
        <input type="text" name="" required="required">
        <span>Email</span>
        <div class= "inputBox">
        <textarea required="required"></textarea>
        <span>Type your Message</span>
        </div>
        <div class= "inputBox">
        <input type="submit" name="" value="send">
        
        </div>
        </div>
    </form>
</div>

        

    

</body>
</html> 
























    
</body>
</html> 