<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Cart</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: rgb(238, 231, 255);
        }

        h1 {
            text-align: center;
            font-size: 2rem;
            color: rgb(236, 72, 153);
            font-weight: bold;
            padding: 10px;
        }

        .cart-container {
            width: 80%;
            margin: auto;
            padding: 20px;
            background: white;
            box-shadow: 0px 0px 10px gray;
            border-radius: 10px;
        }

        .cart-item {
            display: flex;
            align-items: center;
            justify-content: space-between;
            border-bottom: 1px solid #ddd;
            padding: 10px;
        }

        .cart-item img {
            width: 100px;
            height: 100px;
            border-radius: 10px;
        }

        .cart-buttons {
            display: flex;
            justify-content: space-between;
            padding: 10px;
        }

        .button {
            padding: 10px 20px;
            background-color: lightblue;
            text-decoration: none;
            color: black;
            font-weight: bold;
            border-radius: 10px;
            font-size: 16px;
        }

        .button:hover {
            background-color: lightcoral;
            color: white;
        }
    </style>
</head>
<body>

    <h1>Your Shopping Cart</h1>

    <div class="cart-container" id="cart-items">
        <p style="text-align:center; font-size: 18px;">Your cart is empty.</p>
    </div>

    <div class="cart-buttons">
        <a href="productspage.php" class="button">Back</a>
        <button onclick="clearCart()" class="button">Clear Cart</button>
    </div>

    <script>
        // Load Cart Items from Local Storage
        function loadCart() {
            let cart = localStorage.getItem('cart') ? JSON.parse(localStorage.getItem('cart')) : [];
            let cartContainer = document.getElementById('cart-items');

            if (cart.length === 0) {
                cartContainer.innerHTML = '<p style="text-align:center; font-size: 18px;">Your cart is empty.</p>';
                return;
            }

            cartContainer.innerHTML = ''; // Clear previous content
            cart.forEach((item, index) => {
                let cartItem = document.createElement('div');
                cartItem.classList.add('cart-item');

                cartItem.innerHTML = `
                    <img src="photos/${item.image}" alt="${item.name}">
                    <p><strong>${item.name}</strong></p>
                    <p>Price: $${item.price}</p>
                    <button onclick="removeItem(${index})" class="button">Remove</button>
                `;

                cartContainer.appendChild(cartItem);
            });
        }

        // Remove Specific Item
        function removeItem(index) {
            let cart = JSON.parse(localStorage.getItem('cart'));
            cart.splice(index, 1);
            localStorage.setItem('cart', JSON.stringify(cart));
            loadCart();
        }

        // Clear Cart
        function clearCart() {
            localStorage.removeItem('cart');
            loadCart();
        }

        // Load Cart on Page Load
        window.onload = loadCart;
    </script>

</body>
</html>
