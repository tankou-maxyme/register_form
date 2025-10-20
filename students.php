<?php
require_once __DIR__ . "/database.php";

// Guard against failed connection
if (!$connection) {
    die("Database connection failed.");
}

$query = "SELECT * FROM students";
$result = mysqli_query($connection, $query);
$students = [];

if (mysqli_num_rows($result) > 0) {
    $students = mysqli_fetch_all($result, MYSQLI_ASSOC);
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Students</title>
    <style>
        h1 {
            text-align: center;
        }
        table {
            width: 80%;
            margin: 0 auto;
            border: 1px solid #333;
            border-collapse: collapse;
        }
        td, th {
            border: 1px solid #333;
            padding: 8px;
            text-align: center;
        }
    </style>
</head>
<body>
    <h1>Students</h1>
    <table>
        <tr>
            <th>FIRST NAME</th>
            <th>LAST NAME</th>
            <th>MATRICULE</th>
            <th>EMAIL</th>
        </tr>

        <?php if (!empty($students)): ?>
            <?php foreach ($students as $student): ?>
                <tr>
                    <td><?= $student['firstname'] ?></td>
                    <td><?= $student['lastname'] ?></td>
                    <td><?= $student['matricule'] ?></td>
                    <td><?= $student['email'] ?></td>
                </tr>
            <?php endforeach; ?>
        <?php else: ?>
            <tr>
                <td colspan="4">No students found.</td>
            </tr>
        <?php endif; ?>
    </table>
</body>
</html>
