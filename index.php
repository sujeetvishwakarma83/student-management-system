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
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Admin Login</title>

<!-- Google Font -->
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">

<style>
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
}

body {
    height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
    background: linear-gradient(135deg, #667eea, #764ba2);
}

.login-container {
    background: rgba(255, 255, 255, 0.1);
    backdrop-filter: blur(15px);
    padding: 40px;
    border-radius: 15px;
    width: 350px;
    text-align: center;
    box-shadow: 0 8px 32px rgba(0,0,0,0.2);
    color: white;
}

.login-container h2 {
    margin-bottom: 20px;
    font-weight: 600;
}

.input-box {
    margin-bottom: 15px;
    position: relative;
}

.input-box input {
    width: 100%;
    padding: 12px;
    border-radius: 8px;
    border: none;
    outline: none;
    font-size: 14px;
}

.input-box input:focus {
    box-shadow: 0 0 5px #fff;
}

button {
    width: 100%;
    padding: 12px;
    border: none;
    border-radius: 8px;
    background: #ffffff;
    color: #333;
    font-weight: bold;
    cursor: pointer;
    transition: 0.3s;
}

button:hover {
    background: #ddd;
    transform: scale(1.05);
}

.error {
    margin-top: 10px;
    color: #ff6b6b;
    font-size: 14px;
}
</style>
</head>

<body>

<div class="login-container">
    <h2>Admin Login</h2>

    <form method="POST">
        <div class="input-box">
            <input type="text" name="username" placeholder="Enter Username" required>
        </div>

        <div class="input-box">
            <input type="password" name="password" placeholder="Enter Password" required>
        </div>

        <button type="submit">Login</button>

        <p class="error"><?php echo $message; ?></p>
    </form>
</div>

</body>
</html>
