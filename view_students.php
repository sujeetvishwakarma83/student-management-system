<?php
include "config.php";

// Fetch data
$sql = "SELECT * FROM students";
$result = mysqli_query($conn, $sql);
?>lt = mysqli_query($conn, $sql);
?>
<!DOCTYPE html>
<html>
<head>
    <title>View Students</title>
    <style>
        table {
            width: 80%;
            border-collapse: collapse;
            margin: 20px auto;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 10px;
            text-align: left;
        }
        th {
            background-color: lightgray;
        }
        a {
            text-decoration: none;
            color: blue;
        }
    </style>
</head>
<body>

<h2 style="text-align:center;">Student Records</h2>
<table>
    <tr>
        <th>ID</th>
        <th>Student Name</th>
        <th>Father Name</th>
        <th>Address</th>
        <th>Email</th>
        <th>Category</th>
        <th>Enrollment</th>
        <th>Actions</th>
    </tr>

    <?php
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "<tr>
                <td>".$row['id']."</td>
                <td>".$row['name']."</td>
                <td>".$row['father_name']."</td>
                <td>".$row['address']."</td>
                <td>".$row['email']."</td>
                <td>".$row['category']."</td>
                <td>".$row['enrollment']."</td>
                <td><a href='edit_student.php?id=".$row['id']."'>Edit</a> | 
                    <a href='delete_student.php?id=".$row['id']."' onclick=\"return confirm('Are you sure?');\">Delete</a></td>
            </tr>";
        }
    } else {
        echo "<tr><td colspan='8' style='text-align:center;'>No Records Found</td></tr>";
    }
    ?>

</table>

</body>
</html>

