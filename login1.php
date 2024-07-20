<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hackaverse";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get input values from form
$user_input = $_POST['username']; // or $_POST['email']
$input_password = $_POST['password']; // or whichever input you are using

// Prepare statement to prevent SQL injection
$sql = "SELECT * FROM signup_users WHERE username=?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $user_input);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    // User exists, check password
    $user = $result->fetch_assoc();
    if (password_verify($input_password, $user['password'])) {
        // Password is correct
        session_start();
        $_SESSION['user_id'] = $user['id']; // Store user ID or any identifier
        $_SESSION['username'] = $user['username']; // Store username for display

        // Redirect to the home page
        header("Location: index.php");
        exit();
    } else {
        // Incorrect password
        echo "Invalid password.";
    }
} else {
    // User does not exist
    echo "User does not exist.";
}

$stmt->close();
$conn->close();
?>
