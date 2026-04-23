<?php
$host = "localhost";
$port = 3307;
$dbname = "event_management";
$username = "root";
$password = "";

$conn = new mysqli($host, $username, $password, $dbname, $port);

if ($conn->connect_error) {
    die("Database connection failed: " . $conn->connect_error);
}
?>