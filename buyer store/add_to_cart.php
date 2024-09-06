<?php
session_start();

// Check if the product_id is set in the POST request
if (isset($_POST['product_id'])) {
    $productId = $_POST['product_id'];

    // Fetch the product details from the database
    include 'connection.php';
    $con = OpenCon();

    $sql = "SELECT * FROM products WHERE id = ?";
    $stmt = $con->prepare($sql);
    $stmt->bind_param("i", $productId);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $product = $result->fetch_assoc();

        // Add the product to the session-based cart
        if (!isset($_SESSION['cart'])) {
            $_SESSION['cart'] = array();
        }

        // Check if the product is already in the cart
        if (isset($_SESSION['cart'][$productId])) {
            $_SESSION['cart'][$productId]['quantity']++;
        } else {
            $_SESSION['cart'][$productId] = array(
                'id' => $product['id'],
                'name' => $product['nom'],
                'price' => $product['prix'],
                'quantity' => 1
            );
        }

        echo "Product added to cart.";
    } else {
        echo "Product not found.";
    }

    $stmt->close();
    $con->close();
} else {
    echo "No product ID provided.";
}
?>
