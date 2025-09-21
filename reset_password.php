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

if (isset($_GET['token'])) {
    $token = $_GET['token'];

    // Check if token exists
    $result = mysqli_query($conn, "SELECT * FROM users WHERE reset_token='$token'");
    if (mysqli_num_rows($result) > 0) {
        if (isset($_POST['reset_password'])) {
            $new_password = password_hash($_POST['new_password'], PASSWORD_DEFAULT);

            // Update password & clear token
            mysqli_query($conn, "UPDATE users SET password='$new_password', reset_token=NULL WHERE reset_token='$token'");

            // Instead of redirect, set message
            $message = "Password reset successful! <a href='login.html'>Login Now</a>";
        }
    } else {
        $message = "Invalid or expired token!";
    }
} else {
    $message = "No token provided!";
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Reset Password</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background-color: #ff7043; /* orange background */
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            background: #fff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.2);
            width: 350px;
            text-align: center;
        }

        h2 {
            margin-bottom: 20px;
            color: #333;
        }

        input[type="password"] {
            width: 93%;
            padding: 12px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        button {
            width: 100%;
            padding: 12px;
            background-color: #28a745; /* green button */
            border: none;
            color: #fff;
            font-size: 16px;
            border-radius: 5px;
            cursor: pointer;
        }

        button:hover {
            background-color: #218838;
        }

        p {
            margin-top: 15px;
            font-size: 14px;
        }

        a {
            color: #007bff;
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Reset Password</h2>
        <?php if (!empty($message)) { ?>
            <p style="color:<?php echo (strpos($message, 'successful') !== false) ? 'green' : 'red'; ?>">
                <?php echo $message; ?>
            </p>
        <?php } ?>

        <?php if (empty($message)) { ?>
            <form method="POST">
                <input type="password" name="new_password" placeholder="Enter new password" required>
                <button type="submit" name="reset_password">Reset Password</button>
            </form>
        <?php } ?>
    </div>
</body>
</html>

