<?php
session_start();

// Clear the cart by unsetting the session variable
unset($_SESSION['cart']);

// Redirect back to the cart page
header("Location: cart.php");
exit;
?>
