<?php
session_start();
if (!isset($_SESSION['admin'])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard - Student Management</title>
    <style>
        body { font-family: Arial; background-color: #f2f2f2; }
        .container {
            width: 80%; margin: 50px auto; background: white;
            padding: 20px; border-radius: 5px; box-shadow: 0 0 10px #ccc;
        }
        h2 { text-align: center; }
        a {
            display: inline-block; margin: 10px; padding: 10px 20px;
            background: green; color: white; text-decoration: none;
            border-radius: 5px;
        }
        a.logout {
            background: red;
        }
    </style>
</head>
<body>
<div class="container">
    <h2>Welcome to Student Management System</h2>
    <h3>Hello, <?php echo $_SESSION['admin']; ?> 👋</h3>

    <a href="add_student.php">Add Student</a>
    <a href="view_students.php">View Students</a>
    <a href="logout.php" class="logout">Logout</a>
</div>
</body>
</html>
