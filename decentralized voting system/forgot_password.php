<?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $govt_id = $_POST['govt_id'];

    $current_password_result = $conn->query("SELECT `password` FROM users WHERE govt_id = '$govt_id'");

    // Check if the query returned any rows
    if ($current_password_result->num_rows > 0) {
        // Fetch the result as an associative array
        while ($row = $current_password_result->fetch_assoc()) {
            // Access the 'password' column value
            $current_password = $row['password'];
            echo "<script>alert('Your Current password is $current_password')</script>";
        }
    } else {
        echo "<script>alert('No user found with the given Government ID.')</script>";
    }
    
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Decentralized Voting System - Forgot Password</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Decentralized Voting System</h1>
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="login.php">Login</a></li>
                <li><a href="register.php">Register</a></li>
                <li><a href="about.php">About Us</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <h2>Forgot Password</h2>
        <?php
        if (isset($success)) {
            echo "<p class='success'>$success</p>";
        }
        ?>
        <form method="post" action="">
            <label for="govt_id">Government I'd:</label>
            <input type="number" id="govt_id" name="govt_id" required>

            <input type="submit" value="Reset Password">
        </form>
    </main>
    <footer>
        <p>&copy; 2024 Decentralized Voting System</p>
    </footer>
</body>
</html>