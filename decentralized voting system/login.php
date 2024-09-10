<?php
include 'config.php';
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $govt_id = $_POST['govt_id'];
    $password = $_POST['password'];
    
    $result = $conn->query("SELECT * FROM users WHERE govt_id = '$govt_id'");
    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();
        if ($password == $user['password']) {
            $_SESSION['govt_id'] = $user['govt_id'];
            header("Location: voting.php");
            exit();
        } else {
            $error = "Invalid password.";
        }
    } else {
        $error = "User not found.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Decentralized Voting System - Login</title>
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
        <h2>Login</h2>
        <?php
        if (isset($error)) {
            echo "<p class='error'>$error</p>";
        }
        ?>
        <form method="post" action="">
            <label for="govt_id">Government I'd:</label>
            <input type="number" id="govt_id" name="govt_id" required>
            
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
            
            <input type="submit" value="Login">
        </form>
        <p><a href="forgot_password.php">Forgot Password?</a></p>
    </main>
    <footer>
        <p>&copy; 2024 Decentralized Voting System</p>
    </footer>
</body>
</html>