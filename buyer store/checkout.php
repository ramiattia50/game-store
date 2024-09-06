<?php
session_start();

// Simulate payment processing
if (isset($_SESSION['cart']) && count($_SESSION['cart']) > 0) {
    // Process the payment (this would be replaced by actual payment integration)
    $paymentSuccess = true; // This is a simulation; assume the payment is successful

    if ($paymentSuccess) {
        // Clear the cart
        unset($_SESSION['cart']);
    }
} else {
    // No items in the cart, redirect back to the cart page
    header('Location: cart.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Success</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        /* Simple styling for checkout confirmation page */
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 800px;
            margin: 100px auto;
            padding: 20px;
            background-color: white;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            text-align: center;
        }

        h1 {
            color: #4CAF50;
            font-size: 2.5em;
            margin-bottom: 20px;
        }

        p {
            font-size: 1.2em;
            color: #333;
        }

        a {
            display: inline-block;
            margin-top: 20px;
            padding: 12px 20px;
            background-color: #007bff;
            color: #fff;
            text-decoration: none;
            font-size: 1.2em;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        a:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Payment Successful!</h1>
        <p>Thank you for your purchase. Your payment has been processed successfully.</p>
        <p>Your cart has been cleared.</p>

        <!-- Link to continue shopping -->
        <a href="../buyer store/test store.php">Continue Shopping</a>
    </div>
</body>
</html>
