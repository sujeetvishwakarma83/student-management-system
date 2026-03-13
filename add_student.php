<?php
session_start();
include "config.php";

if (!isset($_SESSION['admin'])) {
    header("Location: login.php");
    exit();
}

$message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $father = $_POST['father'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $address = $_POST['address'];
    $category = $_POST['category'];
    $enrollment = $_POST['enrollment'];

    $query = "INSERT INTO students (name, father_name, email, mobile, address, category, enrollment) 
              VALUES ('$name', '$father', '$email', '$mobile', '$address', '$category', '$enrollment')";

    if (mysqli_query($conn, $query)) {
        $message = "✅ Student Added Successfully!";
    } else {
        $message = "❌ Error: " . mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Add Student</title>
    <style>
        body { font-family: Arial; background: #f2f2f2; }
        .box { width: 500px; margin: 30px auto; background: white; padding: 20px; border-radius: 5px; }
        input, textarea, select {
            width: 100%; padding: 8px; margin-top: 5px; margin-bottom: 10px;
        }
        button { padding: 8px 20px; background: green; color: white; border: none; cursor: pointer; }
        .back { background: blue; text-decoration: none; padding: 6px 12px; color: white; }
        p { color: green; }
    </style>
</head>
<body>

<div class="box">
    <h2>Add Student</h2>
    <a class="back" href="dashboard.php">⬅ Back to Dashboard</a><br><br>

    <form method="POST">
        <label>Student Name:</label>
        <input type="text" name="name" required>

        <label>Father Name:</label>
        <input type="text" name="father" required>

        <label>Email:</label>
        <input type="email" name="email" required>

        <label>Mobile:</label>
        <input type="text" name="mobile" required>

        <label>Address:</label>
        <textarea name="address" required></textarea>

        <label>Category:</label>
        <select name="category" required>
            <option value="">--Select--</option>
            <option>General</option>
            <option>OBC</option>
            <option>SC</option>
            <option>ST</option>
        </select>

        <label>Enrollment No.:</label>
        <input type="text" name="enrollment" required>

        <button type="submit">Add Student</button>
        <p><?php echo $message; ?></p>
    </form>
</div>

</body>
</html>
