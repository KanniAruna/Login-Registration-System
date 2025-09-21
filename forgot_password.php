<?php
$servername = "localhost";   // Your server name
$username = "root";           // Default XAMPP username
$password = "";               // Default XAMPP password is empty
$dbname = "mywebsite";  // Replace with your actual database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname,3307);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Your database connection file

if (isset($_POST['reset_request'])) {
    $email = $_POST['email'];

    // Check if email exists
    $result = mysqli_query($conn, "SELECT * FROM users WHERE email='$email'");
    if (mysqli_num_rows($result) > 0) {
        // Create a unique reset token
        $token = bin2hex(random_bytes(50));
        mysqli_query($conn, "UPDATE users SET reset_token='$token' WHERE email='$email'");

        // Send reset link (for now, just display it)
        $reset_link = "http://localhost/login/reset_password.php?token=$token";

        echo "Password reset link: <a href='$reset_link'>$reset_link</a>";
    } else {
        echo "No account found with this email.";
    }
}
?>
