<?php
session_start();
include("config/db.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $full_name = trim($_POST['full_name']);
    $email = trim($_POST['email']);
    $phone = trim($_POST['phone']);
    $address = trim($_POST['address']);
    $city = trim($_POST['city']);
    $service_id = (int)$_POST['service_id'];
    $event_date = $_POST['event_date'];
    $event_time = trim($_POST['event_time']);
    $event_location = trim($_POST['event_location']);
    $guest_count = (int)$_POST['guest_count'];
    $budget = (float)$_POST['budget'];
    $special_request = trim($_POST['special_request']);

    if (empty($full_name) || empty($email) || empty($phone) || empty($service_id) || empty($event_date) || empty($event_location)) {
        $_SESSION['message'] = "Please fill all required fields.";
        header("Location: booking.php");
        exit();
    }

    $stmt = $conn->prepare("INSERT INTO customers (full_name, email, phone, address, city) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("sssss", $full_name, $email, $phone, $address, $city);
    $stmt->execute();
    $customer_id = $stmt->insert_id;
    $stmt->close();

    $stmt2 = $conn->prepare("INSERT INTO bookings (customer_id, service_id, event_date, event_time, event_location, guest_count, budget, special_request) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt2->bind_param("iisssids", $customer_id, $service_id, $event_date, $event_time, $event_location, $guest_count, $budget, $special_request);

    if ($stmt2->execute()) {
        $_SESSION['message'] = "Booking submitted successfully.";
    } else {
        $_SESSION['message'] = "Booking failed: " . $conn->error;
    }

    $stmt2->close();
    $conn->close();

    header("Location: booking.php");
    exit();
}
?>