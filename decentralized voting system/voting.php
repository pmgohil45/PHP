<?php
include 'config.php';
session_start();

// Check if user is logged in
if (!isset($_SESSION['govt_id'])) {
    header("Location: login.php");
    exit();
}

// Handle vote submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $users_voting_id = $_POST['users'];
    $govt_id = $_SESSION['govt_id'];
    $currentTime = time();

    // Check if user has already voted
    $check_vote = $conn->query("SELECT * FROM votes WHERE govt_id = $govt_id");
    if ($check_vote->num_rows > 0) {
        $error = "You have already voted.";
    } elseif($govt_id == $users_voting_id){
        // Insert vote into database
        $insert_vote = $conn->query("INSERT INTO `votes` (`govt_id`, `users_voting_id`, `current_time`) VALUES ($govt_id, $users_voting_id, $currentTime)");
        if ($insert_vote) {
            $success = "Your vote has been recorded.";
        } else {
            $error = "Error recording your vote. Please try again.";
        }
    }else{
        $error = "Error Pleas select your name.";
    }
}

// Fetch candidates
$users = $conn->query("SELECT * FROM users");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Decentralized Voting System - Vote</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Decentralized Voting System</h1>
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="voting.php">Vote</a></li>
                <li><a href="logout.php">Logout</a></li>
                <li><a href="about.php">About Us</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <h2>Cast Your Vote</h2>
        <?php
        if (isset($error)) {
            echo "<p class='error'>$error</p>";
        }
        if (isset($success)) {
            echo "<p class='success'>$success</p>";
        }
        ?>
        <form method="post" action="">
            <label>Select a candidate:</label>
            <select name="users" required>
                <?php while ($row = $users->fetch_assoc()) { ?>
                    <option value="<?php echo $row['govt_id']; ?>"><?php echo $row['fullname']; ?></option>
                <?php } ?>
            </select><br>
            <input type="submit" value="Submit Vote">
        </form>
    </main>
    <footer>
        <p>&copy; 2024 Decentralized Voting System</p>
    </footer>
</body>
</html>