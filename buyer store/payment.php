<?php
session_start();

// Redirect to cart if no items are in the cart
if (!isset($_SESSION['cart']) || count($_SESSION['cart']) == 0) {
    header('Location: cart.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 800px;
            margin: 50px auto;
            padding: 20px;
            background-color: white;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }

        h1 {
            font-size: 2.5em;
            color: #333;
            margin-bottom: 20px;
            text-align: center;
        }

        .form-group {
            margin-bottom: 15px;
        }

        .form-group label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }

        .form-group input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 1em;
        }

        .btn {
            display: inline-block;
            padding: 10px 20px;
            color: white;
            background-color: #007bff;
            border: none;
            border-radius: 5px;
            font-size: 1.2em;
            cursor: pointer;
            text-align: center;
            text-decoration: none;
        }

        .btn-secondary {
            background-color: #6c757d;
        }

        .btn:hover {
            background-color: #0056b3;
        }

        .error {
            color: red;
            margin-top: 10px;
        }

    </style>
</head>
<body>
    <div class="container">
        <h1>Checkout</h1>
        <form action="checkout.php" method="post">
            <div class="form-group">
                <label for="card-number">Card Number</label>
                <input type="text" id="card-number" name="card_number" required>
            </div>
            <div class="form-group">
                <label for="card-expiry">Expiry Date (MM/YY)</label>
                <input type="text" id="card-expiry" name="card_expiry" required>
            </div>
            <div class="form-group">
                <label for="card-cvc">CVC</label>
                <input type="text" id="card-cvc" name="card_cvc" required>
            </div>
            <div class="form-group">
                <label for="billing-address">Billing Address</label>
                <input type="text" id="billing-address" name="billing_address" required>
            </div>
            <button type="submit" class="btn">Pay Now</button>
        </form>
    </div>
</body>
</html>
