<?php
session_start();
include "config.php";

$message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = "SELECT * FROM admin WHERE username='$username' AND password='$password'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) == 1) {
        $_SESSION['admin'] = $username;
        header("Location: dashboard.php");
        exit();
    } else {
        $message = "Invalid Username or Password!";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Admin Login</title>
    <style>
        body { font-family: Arial; background: #f2f2f2; }
        .login-box {
            width: 350px; margin: 120px auto; padding: 20px;
            border: 1px solid #ddd; background: white; text-align: center;
        }
        input { width: 90%; padding: 10px; margin: 5px 0; }
        button { padding: 10px 20px; cursor: pointer; }
        .error { color: red; font-size: 14px; }
    </style>
</head>
<body>
<div class="login-box">
    <h2>Admin Login</h2>
    <form method="POST">
        <input type="text" name="username" placeholder="Enter Username" required><br>
        <input type="password" name="password" placeholder="Enter Password" required><br>
        <button type="submit">Login</button>
        <p class="error"><?php echo $message; ?></p>
    </form>
</div>
</body>
</html>
