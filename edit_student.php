<?php
session_start();
include "config.php";

// login check
if (!isset($_SESSION['admin'])) {
    header("Location: login.php");
    exit();
}

// id check
if (!isset($_GET['id'])) {
    header("Location: view_students.php");
    exit();
}

$id = $_GET['id'];

// update logic
if (isset($_POST['update'])) {
    $name = $_POST['name'];
    $father = $_POST['father'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $address = $_POST['address'];
    $category = $_POST['category'];
    $enrollment = $_POST['enrollment'];

    $update = "UPDATE students SET
        name='$name',
        father_name='$father',
        email='$email',
        mobile='$mobile',
        address='$address',
        category='$category',
        enrollment='$enrollment'
        WHERE id=$id";

    if (mysqli_query($conn, $update)) {
        header("Location: view_students.php");
        exit();
    } else {
        echo "Update Error: " . mysqli_error($conn);
    }
}

// fetch old data
$result = mysqli_query($conn, "SELECT * FROM students WHERE id=$id");
$row = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Student</title>
    <style>
        body { font-family: Arial; background: #f2f2f2; }
        .box {
            width: 500px; margin: 30px auto; background: white;
            padding: 20px; border-radius: 5px;
        }
        input, textarea, select {
            width: 100%; padding: 8px; margin-bottom: 10px;
        }
        button {
            padding: 8px 20px; background: green; color: white; border: none;
        }
    </style>
</head>
<body>

<div class="box">
    <h2>Edit Student</h2>

    <form method="POST">
        <label>Name</label>
        <input type="text" name="name" value="<?php echo $row['name']; ?>" required>

        <label>Father Name</label>
        <input type="text" name="father" value="<?php echo $row['father_name']; ?>" required>

        <label>Email</label>
        <input type="email" name="email" value="<?php echo $row['email']; ?>" required>

        <label>Mobile</label>
        <input type="text" name="mobile" value="<?php echo $row['mobile']; ?>">

        <label>Address</label>
        <textarea name="address" required><?php echo $row['address']; ?></textarea>

        <label>Category</label>
        <select name="category" required>
            <option value="General" <?php if($row['category']=="General") echo "selected"; ?>>General</option>
            <option value="OBC" <?php if($row['category']=="OBC") echo "selected"; ?>>OBC</option>
            <option value="SC" <?php if($row['category']=="SC") echo "selected"; ?>>SC</option>
            <option value="ST" <?php if($row['category']=="ST") echo "selected"; ?>>ST</option>
        </select>

        <label>Enrollment</label>
        <input type="text" name="enrollment" value="<?php echo $row['enrollment']; ?>" required>

        <button type="submit" name="update">Update Student</button>
    </form>
</div>

</body>
</html>
