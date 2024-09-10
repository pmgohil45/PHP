<?php
session_start();

// Destroy all session data
session_unset(); // Unset all session variables
session_destroy(); // Destroy the session

// Redirect to the login page or another page
header("Location: login.php"); // Change 'login.php' to your login page or homepage
exit();
?>
