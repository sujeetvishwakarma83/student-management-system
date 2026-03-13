<?php
session_start();
include "config.php";

// login check
if (!isset($_SESSION['admin'])) {
    header("Location: login.php");
    exit();
}

// id check
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $query = "DELETE FROM students WHERE id = $id";

    if (mysqli_query($conn, $query)) {
        header("Location: view_students.php");
        exit();
    } else {
        echo "Delete Error: " . mysqli_error($conn);
    }
} else {
    echo "Invalid Request";
}
?>
