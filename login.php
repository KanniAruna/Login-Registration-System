<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mywebsite";
$port = 3307;

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname, $port);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if login form is submitted
if (isset($_POST['login'])) {
    $user = trim($_POST['username']);
    $pass = trim($_POST['password']);

    // Fetch user from database
    $sql = "SELECT * FROM users WHERE username='$user'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();

        // Verify hashed password
        if (password_verify($pass, $row['password'])) {
            echo "<script>alert('Login Successful!'); window.location='welcome.html';</script>";
        } else {
            echo "<script>alert('Wrong Password!'); window.location='login.html';</script>";
        }
    } else {
        echo "<script>alert('User not found! Please register.'); window.location='register.html';</script>";
    }
}
?>
