<?php
$posts = [
    [
        "title" => "PHP Basics",
        "author" => "Alice",
        "content" => "Introduction to PHP and basic syntax."
    ],
    [
        "title" => "Arrays in PHP",
        "author" => "Bob",
        "content" => "Working with indexed and associative arrays."
    ],
    [
        "title" => "Loops in PHP",
        "author" => "Charlie",
        "content" => "Using for, foreach, while, and do-while loops."
    ],
    [
        "title" => "Conditional Statements",
        "author" => "Alice",
        "content" => "if, else, elseif, and switch statements in PHP."
    ],
    [
        "title" => "Functions in PHP",
        "author" => "Bob",
        "content" => "Creating reusable functions in PHP."
    ],
    [
        "title" => "Working with Forms",
        "author" => "Charlie",
        "content" => "Handling HTML form input using PHP."
    ],
    [
        "title" => "Sessions and Cookies",
        "author" => "Alice",
        "content" => "Managing user sessions and cookies."
    ],
    [
        "title" => "File Handling",
        "author" => "Bob",
        "content" => "Reading from and writing to files in PHP."
    ],
    [
        "title" => "PHP OOP Basics",
        "author" => "Charlie",
        "content" => "Classes, objects, inheritance, and methods in PHP."
    ],
    [
        "title" => "Working with MySQL",
        "author" => "Alice",
        "content" => "Connecting to a database and executing queries."
    ],
    [
        "title" => "Error Handling",
        "author" => "Bob",
        "content" => "Using try-catch blocks and custom error handling."
    ],
    [
        "title" => "PHP Strings",
        "author" => "Charlie",
        "content" => "String manipulation and functions in PHP."
    ],
    [
        "title" => "PHP Date & Time",
        "author" => "Alice",
        "content" => "Working with dates and times in PHP."
    ],
    [
        "title" => "PHP Arrays Advanced",
        "author" => "Bob",
        "content" => "Multidimensional arrays, array functions, and sorting."
    ],
    [
        "title" => "PHP and JSON",
        "author" => "Charlie",
        "content" => "Encoding and decoding JSON in PHP."
    ],
    [
        "title" => "PHP Filters",
        "author" => "Alice",
        "content" => "Validating and sanitizing user input."
    ],
    [
        "title" => "PHP Include & Require",
        "author" => "Bob",
        "content" => "Reusing PHP code with include, include_once, require."
    ],
    [
        "title" => "PHP Email",
        "author" => "Alice",
        "content" => "Sending emails using PHP's mail() function."
    ],
    [
        "title" => "PHP Security Basics",
        "author" => "Bob",
        "content" => "Preventing SQL injection, XSS, and CSRF."
    ]
];
?>

<!DOCTYPE html>
<html>
<head>
    <title>PHP Posts Table</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }
        th, td {
            border: 1px solid #aaa;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #ddd;
        }
    </style>
</head>
<body>

<h2>Blog Posts</h2>

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
        <?php endforeach; ?>
    </tbody>
</table>

</body>
</html>
