<?php
session_start(); // Start the session

if (!isset($_SESSION['username'])) {
    header('Location: login.html'); 
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style11.css">
    <title>User Profile</title>
</head>
<body>
    <div class="profile-page">
        <h1>Welcome, <?php echo htmlspecialchars($_SESSION['username']); ?>!</h1>
        <p>This is your profile page.</p>
        <a href="logout.php">Logout</a>
    </div>
</body>
</html>
