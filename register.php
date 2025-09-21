<?php
// Database connection
$servername = "localhost";
$username = "root";       // Default for XAMPP/WAMP
$password = "";           // Default for XAMPP/WAMP
$dbname = "mywebsite";    // Your existing database name

$conn = new mysqli($servername, $username, $password, $dbname,3307);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_POST['register'])) {
    $user = $_POST['username'];
    $email = $_POST['email'];
    $pass = $_POST['password'];

    // Encrypt password
    $hashed_password = password_hash($pass, PASSWORD_DEFAULT);

    // Insert into table
    $sql = "INSERT INTO users (username, email, password) VALUES ('$user', '$email', '$hashed_password')";

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Registration Successful! Please Login.'); window.location='login.html';</script>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>