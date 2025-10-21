<?php
$posts = [
    ["title" => "PHP Basics", "author" => "Alice", "content" => "Introduction to PHP and basic syntax."],
    ["title" => "Arrays in PHP", "author" => "Bob", "content" => "Working with indexed and associative arrays."],
    ["title" => "Loops in PHP", "author" => "Charlie", "content" => "Using for, foreach, while, and do-while loops."],
    ["title" => "Conditional Statements", "author" => "Alice", "content" => "if, else, elseif, and switch statements in PHP."],
    ["title" => "Functions in PHP", "author" => "Bob", "content" => "Creating reusable functions in PHP."],
    ["title" => "Working with Forms", "author" => "Charlie", "content" => "Handling HTML form input using PHP."],
    ["title" => "Sessions and Cookies", "author" => "Alice", "content" => "Managing user sessions and cookies."],
    ["title" => "File Handling", "author" => "Bob", "content" => "Reading from and writing to files in PHP."],
    ["title" => "PHP OOP Basics", "author" => "Charlie", "content" => "Classes, objects, inheritance, and methods in PHP."],
    ["title" => "Working with MySQL", "author" => "Alice", "content" => "Connecting to a database and executing queries."],
    ["title" => "Error Handling", "author" => "Bob", "content" => "Using try-catch blocks and custom error handling."],
    ["title" => "PHP Strings", "author" => "Charlie", "content" => "String manipulation and functions in PHP."],
    ["title" => "PHP Date & Time", "author" => "Alice", "content" => "Working with dates and times in PHP."],
    ["title" => "PHP Arrays Advanced", "author" => "Bob", "content" => "Multidimensional arrays, array functions, and sorting."],
    ["title" => "PHP and JSON", "author" => "Charlie", "content" => "Encoding and decoding JSON in PHP."],
    ["title" => "PHP Filters", "author" => "Alice", "content" => "Validating and sanitizing user input."],
    ["title" => "PHP Include & Require", "author" => "Bob", "content" => "Reusing PHP code with include, include_once, require."],
    ["title" => "PHP Email", "author" => "Alice", "content" => "Sending emails using PHP's mail() function."],
    ["title" => "PHP Security Basics", "author" => "Bob", "content" => "Preventing SQL injection, XSS, and CSRF."]
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Blog Posts Table</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f9f9f9;
            margin: 40px;
        }

        h2 {
            text-align: center;
            color: #333;
        }

        table {
            border-collapse: collapse;
            width: 90%;
            margin: 0 auto;
            background-color: #fff;
            box-shadow: 0 4px 12px rgba(0,0,0,0.1);
            border-radius: 10px;
            overflow: hidden;
        }

        th, td {
            padding: 14px 18px;
            text-align: left;
        }

        th {
            background-color: #2c3e50;
            color: #fff;
            font-weight: 600;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        tr:hover {
            background-color: #e0f7fa;
            transition: background-color 0.3s;
        }

        td {
            color: #333;
        }

        @media screen and (max-width: 768px) {
            table, thead, tbody, th, td, tr {
                display: block;
            }

            thead tr {
                display: none;
            }

            tr {
                margin-bottom: 20px;
                border: 1px solid #ccc;
                border-radius: 8px;
                padding: 10px;
            }

            td {
                padding: 10px;
                position: relative;
                padding-left: 50%;
            }

            td::before {
                position: absolute;
                left: 15px;
                top: 10px;
                font-weight: bold;
                color: #555;
                white-space: nowrap;
            }

            td:nth-child(1)::before { content: "Title"; }
            td:nth-child(2)::before { content: "Author"; }
            td:nth-child(3)::before { content: "Content"; }
        }
    </style>
</head>
<body>

<h2>PHP Blog Posts</h2>

<table>
    <thead>
        <tr>
            <th>Title</th>
            <th>Author</th>
            <th>Content</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($posts as $post): ?>
            <tr>
                <td><?php echo htmlspecialchars($post['title']); ?></td>
                <td><?php echo htmlspecialchars($post['author']); ?></td>
                <td><?php echo htmlspecialchars($post['content']); ?></td>
            </tr>
        <?php endforeach; ?>r
    </tbody>
</table>

</body>
</html>
