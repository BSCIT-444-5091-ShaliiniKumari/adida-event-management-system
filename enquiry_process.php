<?php
session_start();
include("config/db.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $subject = trim($_POST['subject']);
    $message = trim($_POST['comments']);

    if (empty($name) || empty($email) || empty($subject) || empty($message)) {
        $_SESSION['message'] = "All fields are required.";
        header("Location: enq.php");
        exit();
    }

    $stmt = $conn->prepare("INSERT INTO enquiries (name, email, subject, message, source) VALUES (?, ?, ?, ?, 'enquiry')");
    $stmt->bind_param("ssss", $name, $email, $subject, $message);

    if ($stmt->execute()) {
        $_SESSION['message'] = "Your enquiry has been submitted successfully.";
    } else {
        $_SESSION['message'] = "Database error: " . $conn->error;
    }

    $stmt->close();
    $conn->close();

    header("Location: enq.php");
    exit();
}
?>