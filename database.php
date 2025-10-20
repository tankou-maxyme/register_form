<?php

$hostname = "localhost";
$username = "root";
$password = "";
$database = "eschosys";

// Optional for debugging during development
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

$connection = mysqli_connect($hostname, $username, $password, $database);

if (!$connection) {
    die("Connection not successful: " . mysqli_connect_error());
} 