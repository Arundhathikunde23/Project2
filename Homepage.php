<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CBD Bakery</title>
    <style>
        /* General styles */
        body, html {
            margin: 0;
            padding: 0;
            font-family: 'Arial', sans-serif;
            box-sizing: border-box;
            color: #333;
            height: 100%;
        }

        /* Hero Section with background slideshow */
        .hero {
            height: 100vh; /* Full viewport height */
            background-size: cover; /* Ensures image covers the full screen */
            background-position: center; /* Centers the image */
            background-repeat: no-repeat; /* Prevent the image from repeating */
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
            color: white;
            position: relative;
            animation: bgSlide 13s infinite; /* Total 16 seconds, 4 seconds for each image */
        }

        /* Keyframes for the background image slideshow */
        @keyframes bgSlide {
            0% {
                background-image: url('photos/bgimg2.jpg');
            }
            25% {
                background-image: url('photos/bgimg3.jpg');
            }
            50% {
                background-image: url('photos/bgimg4.jpg');
            }
            75% {
                background-image: url('photos/bgimg5.jpg');
            }
            100% {
                background-image: url('photos/bgimg2.jpg'); /* Return to first image */
            }
        }

        .hero h1 {
            font-size: 4em;
            letter-spacing: 5px;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
        }

        /* Logo & Location Section */
        .logo-location-section {
            padding: 10px 0px;
            background-color: #ffffff;
            text-align: center;
        }

        .logo-location-section img {
            width: 300px; /* Adjust the width as needed */
            height: auto;
            margin-bottom: 0px;
        }

        .logo-location-section h2 {
            font-size: 28px;
            font-weight: 600;
            margin-bottom: 10px;
        }

        .logo-location-section p {
            font-size: 16px;
            color: #777;
            margin-bottom: 30px;
        }

        /* Location Section Styling */
        .location-details {
            display: flex;
            justify-content: center;
            gap: 50px;
            flex-wrap: wrap;
        }

        .location-details div {
            max-width: 300px;
            text-align: left;
        }

        .location-details div h3 {
            font-size: 20px;
            margin-bottom: 10px;
            color: #c59d5f; /* Gold accent color */
        }

        .location-details div p {
            font-size: 16px;
            color: #333;
            line-height: 1.5;
        }

        .location-details div p a {
            color: #c59d5f;
            text-decoration: none;
            font-weight: 600;
        }

        /* Responsive layout for smaller screens */
        @media (max-width: 768px) {
            .location-details {
                flex-direction: column;
                align-items: center;
            }

            .location-details div {
                max-width: 100%;
            }
        }

        /* Gallery Section */
        #product-gallery {
            padding: 40px 20px;
            background-color: #f9f9f9;
        }

        .gallery-container {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(150px, 1fr));
            gap: 10px;
            max-width: 1200px;
            margin: 0 auto;
        }

        .gallery-item {
            overflow: hidden;
            position: relative;
        }

        .gallery-item img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.3s ease;
        }

        .gallery-item img:hover {
            transform: scale(1.05);
        }

        /* Define various sizes for the grid items */
        .gallery-item.large {
            grid-column: span 2;
            grid-row: span 2;
        }

        .gallery-item.medium {
            grid-column: span 2;
        }

        /* Footer Styling */
        footer {
            background-color: #f8f8f8;
            padding: 40px 20px;
            text-align: center;
        }

        .footer-container {
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap;
            max-width: 1200px;
            margin: 0 auto;
            padding-bottom: 20px;
            border-bottom: 1px solid #ddd;
        }

        .footer-section {
            flex: 1;
            margin: 0 15px;
            min-width: 200px;
        }

        .footer-section h3 {
            font-size: 16px;
            margin-bottom: 10px;
            color: #333;
        }

        .footer-section ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .footer-section ul li {
            margin-bottom: 8px;
        }

        .footer-section ul li a {
            color: #333;
            text-decoration: none;
            font-size: 14px;
        }

        .footer-section ul li a:hover {
            color: #c59d5f; /* Gold accent color */
        }

        .footer-section p {
            margin: 0;
            font-size: 14px;
        }

        .footer-section a {
            color: #333;
            text-decoration: none;
            font-size: 14px;
        }

        .footer-section a:hover {
            color: #c59d5f; /* Gold accent color */
        }

        .footer-logo {
            width: 190px;
            height: auto;
        }

        footer p {
            font-size: 14px;
            color: #666;
            margin-top: 20px;
        }
        .social-logo {
    width: 30px; /* Adjust the size of the Instagram logo */
    height: auto;
    margin-top: 10px;
}

footer p {
    font-size: 14px;
    color: #666;
    margin-top: 20px;
}

body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            padding-top: 60px; /* Ensure content isn't hidden under the fixed header */
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
            <a href="#locations">Locations</a>
            <a href="contact.php">Contact</a>
            <a href="#about">About Us</a>
        </div>
        <div class="search-cart">
            <input type="text" class="search-bar" placeholder="Search...">
            <div class="cart-icon">&#128722;</div>
        </div>
    </header>

    <script>
        window.addEventListener('scroll', function() {
            const header = document.querySelector('.header');
            const scrollPosition = window.scrollY;

            if (scrollPosition > 100) { // Change 100 to the scroll position at which you want to trigger the effect
                header.classList.add('scrolled');
            } else {
                header.classList.remove('scrolled');
            }
        });
    </script>



<!-- Hero Section with Slideshow -->
<div class="hero">
    <h1>Welcome to CBD Bakery</h1>
</div>

<!-- Logo & Location Section -->
<div class="logo-location-section">
    <img src="photos/homelogo.jpg" alt="CBD Bakery Logo"> <!-- Replace with actual logo -->
    <p class="p1">We offer fresh and delicious bakery items at multiple locations.</p>
    <div class="location-details">
        <div>
            <h3>CBD Bakery - Main Street</h3>
            <p>480 Bourke Street,<br> Melbourne Vic 3000</p>
            <p><a href=https://www.google.com/maps/place/480+Bourke+St,+Melbourne+VIC+3000/@-37.8150957,144.9568927,17z/data=!3m1!4b1!4m6!3m5!1s0x6ad65d4b6b8a80ab:0x45b08aad0a01b7c9!8m2!3d-37.8151!4d144.959473!16s%2Fg%2F11c5p_8vlb?entry=ttu&g_ep=EgoyMDI0MTAwOS4wIKXMDSoASAFQAw%3D%3D>Get Directions</a></p>
        </div>
        <div>
            <h3>CBD Bakery - Second Ave</h3>
            <p>Shop 4, 118-126 Queens St,<br> Melbourne Vic 3000</p>
            <p><a href="https://maps.google.com">Get Directions</a></p>
        </div>
    </div>
</div>

<!-- Product Gallery Section -->
<div id="product-gallery">
    <div class="gallery-container">
        <div class="gallery-item large">
            <img src="photos/homecakes.jpg" alt="Product 1"> <!-- Replace with actual product images -->
        </div>
        <div class="gallery-item medium">
            <img src="photos/homecherry.jpg" alt="Product 2">
        </div>
        <div class="gallery-item">
            <img src="photos/homecupcake.jpg" alt="Product 3">
        </div>
        <div class="gallery-item">
            <img src="photos/homedonuts.jpg" alt="Product 4">
        </div>
        <div class="gallery-item medium">
            <img src="photos/homebrownie.jpg" alt="Product 5">
        </div>
        <div class="gallery-item large">
            <img src="photos/homecaramel.jpg" alt="Product 6">
        </div>
    </div>
</div>

<!-- Footer -->
<!-- Footer -->
<footer>
    <div class="footer-container">
        <div class="footer-section">
            <img src="photos/homelogo.jpg" alt="CBD Bakery Logo" class="footer-logo"> <!-- Replace with actual logo -->
        </div>
        <div class="footer-section">
            <h3>Links</h3>
            <ul>
                <li><a href="#">Homepage</a></li>
                <li><a href="productspage.php">Menu</a></li>
                <li><a href="#">Locations</a></li>
                <li><a href="contact.php">Contact</a></li>
            </ul>
        </div>
        <div class="footer-section">
            <h3>Contacts</h3>
            <p><a href="mailto:hello@cbdbakery.com">hello@cbdbakery.com</a></p>
        </div>
        <div class="footer-section">
            <h3>Socials</h3>
            <a href="https://www.instagram.com/cbdbakery" target="_blank">
                <img src="photos/insta.jpg" alt="Instagram Logo" class="social-logo"> <!-- Replace with Instagram logo -->
            </a>
            <a href="https://www.facebook.com/cbdbakery" target="_blank">
                <img src="photos/fb.jpg" alt="Facebook Logo" class="social-logo"> <!-- Replace with Facebook logo -->
            </a>
        </div>
    </div>
    <p>&copy; 2024 CBD Bakery | All rights reserved</p>
</footer>




