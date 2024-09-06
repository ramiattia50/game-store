<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Cart</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        /* Updated styling */
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 1200px;
            margin: 50px auto;
            padding: 20px;
            background-color: white;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }

        h1 {
            text-align: center;
            font-size: 2.5em;
            color: #333;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 12px;
            text-align: center;
        }

        th {
            background-color: #4CAF50;
            color: white;
            font-size: 1.2em;
        }

        td {
            font-size: 1.1em;
        }

        .product-name {
            text-align: left;
            padding-left: 10px;
        }

        .cart-summary {
            text-align: right;
            font-size: 1.4em;
            font-weight: bold;
            margin-top: 20px;
        }

        .cart-actions {
            text-align: right;
            margin-top: 20px;
        }

        .cart-actions a {
            padding: 12px 18px;
            text-decoration: none;
            background-color: #007bff;
            color: #fff;
            border-radius: 5px;
            font-size: 1.1em;
            margin-left: 10px;
        }

        .cart-actions a.btn-secondary {
            background-color: #6c757d;
        }

        .cart-empty {
            text-align: center;
            color: #888;
            font-size: 1.5em;
        }

    </style>
</head>
<body>
    <div class="container">
        <h1>Your Cart</h1>
        <?php if (isset($_SESSION['cart']) && count($_SESSION['cart']) > 0): ?>
            <table>
                <thead>
                    <tr>
                        <th>Product</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Total</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    $totalAmount = 0;
                    foreach ($_SESSION['cart'] as $product): 
                        $productTotal = $product['price'] * $product['quantity'];
                        $totalAmount += $productTotal;
                    ?>
                        <tr>
                            <td class="product-name"><?php echo htmlspecialchars($product['name']); ?></td>
                            <td><?php echo htmlspecialchars($product['price']); ?> DT</td>
                            <td><?php echo htmlspecialchars($product['quantity']); ?></td>
                            <td><?php echo htmlspecialchars($productTotal); ?> DT</td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>

            <!-- Total Cart Summary -->
            <div class="cart-summary">
                <h3>Total Amount: <?php echo htmlspecialchars($totalAmount); ?> DT</h3>
            </div>

            <!-- Cart Actions -->
            <div class="cart-actions">
                <a href="payment.php" class="btn btn-primary">Proceed to Checkout</a>
                <a href="clear_cart.php" class="btn btn-secondary">Clear Cart</a>
            </div>
        <?php else: ?>
            <p class="cart-empty">Your cart is empty.</p>
        <?php endif; ?>
    </div>
</body>
</html>
