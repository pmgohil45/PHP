<?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    //$password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $password = $_POST['password'];
    $govt_id = $_POST['govt_id'];

    // Check if email already exists
    $check_govt_id = $conn->query("SELECT * FROM users WHERE email = '$govt_id'");
    if ($check_govt_id->num_rows > 0) {
        $error = "This goverment id already exists. Please use a different goverment id.";
    } else {
        // Insert new user
        $insert_user = $conn->query("INSERT INTO users (fullname, email, password, govt_id) VALUES ('$fullname', '$email', '$password', '$govt_id')");
        if ($insert_user) {
            echo ("<script LANGUAGE='JavaScript'>
			window.alert('Registration successful. Click ok login.');
			window.location.href='login.php';
			</script>");
        } else {
            $error = "Registration failed. Please try again.";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Decentralized Voting System - Register</title>
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
        <h2>Register</h2>
        <?php
        if (isset($error)) {
            echo "<p class='error'>$error</p>";
        }
        if (isset($success)) {
            echo "<p class='success'>$success</p>";
        }
        ?>
        <form method="post" action="">
            <label for="fullname">Full Name:</label>
            <input type="text" id="fullname" name="fullname" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>

            <label for="govt_id">Government ID:</label>
            <input type="number" id="govt_id" name="govt_id" required>

            <input type="submit" value="Register">
        </form>
    </main>
    <footer>
        <p>&copy; 2024 Decentralized Voting System</p>
    </footer>
</body>
</html>