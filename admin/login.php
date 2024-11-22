<?php
session_start(); // Start the session to track user login

// Replace with your own database connection details
$servername = "localhost";
$username = "iark_user";
$password = "9xpH3B9D.pM2";
$dbname = "iark_enquiery";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Prevent SQL injection by using prepared statements
    $stmt = $conn->prepare("SELECT admin_id, password FROM admin WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        $stmt->bind_result($user_id, $hashed_password);
        $stmt->fetch();

        // Verify the password
        if (strcmp($password, $hashed_password) === 0) {
        // Login success
        $_SESSION['user_id'] = $user_id;
        header("Location: dashboard.php");
        exit;
        } else {
            echo "Invalid password.";
        }
    } else {
        echo "No user found with that email.";
    }

    $stmt->close();
}
$conn->close();
?>
