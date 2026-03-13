<?php
$host = "localhost";  // Server name
$user = "root";       // MySQL username (XAMPP default)
$pass = "";           // MySQL password (by default empty hota hai)
$dbname = "student_management";  // Database name

$conn = mysqli_connect($host, $user, $pass, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
// echo "Connected Successfully";
?>
