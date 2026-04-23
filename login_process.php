<?php
session_start();
include("../config/db.php");

if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    header("Location: login.php");
    exit();
}

$email = trim($_POST['email'] ?? '');
$password = trim($_POST['password'] ?? '');

if (empty($email) || empty($password)) {
    $_SESSION['error'] = "Email and password are required.";
    header("Location: login.php");
    exit();
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $_SESSION['error'] = "Please enter a valid email address.";
    header("Location: login.php");
    exit();
}

$stmt = $conn->prepare("SELECT id, full_name, email, password FROM admins WHERE email = ? LIMIT 1");

if (!$stmt) {
    $_SESSION['error'] = "Database error: Unable to prepare login query.";
    header("Location: login.php");
    exit();
}

$stmt->bind_param("s", $email);
$stmt->execute();
$result = $stmt->get_result();

if ($result && $result->num_rows === 1) {
    $admin = $result->fetch_assoc();

    if (password_verify($password, $admin['password'])) {
        session_regenerate_id(true);

        $_SESSION['admin_id'] = $admin['id'];
        $_SESSION['admin_name'] = $admin['full_name'];
        $_SESSION['admin_email'] = $admin['email'];
        $_SESSION['success'] = "Login successful. Welcome back, " . $admin['full_name'] . "!";

        $stmt->close();
        $conn->close();

        header("Location: dashboard.php");
        exit();
    } else {
        $_SESSION['error'] = "Invalid email or password.";
    }
} else {
    $_SESSION['error'] = "Invalid email or password.";
}

$stmt->close();
$conn->close();

header("Location: login.php");
exit();
?>