<?php
// Start the session
session_start();

// Unset all of the session variables
$_SESSION = array();

// Destroy the session.
session_destroy();

// Redirect to the login page or homepage
header("Location: ./home pg.php");
exit;
?>
