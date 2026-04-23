<?php
session_start(); // Start the session to store the message

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect and sanitize form data
    $name = htmlspecialchars(trim($_POST['name']));
    $email = htmlspecialchars(trim($_POST['email']));
    $subject = htmlspecialchars(trim($_POST['subject']));
    $comments = htmlspecialchars(trim($_POST['comments']));

    // Email recipient
    $to = "adidaevents@gmail.com"; // Change this to your desired email address
    $email_subject = "New Enquiry from Website: $subject";

    // Email content (HTML)
    $message = "
    <html>
    <head>
        <title>New Enquiry</title>
    </head>
    <body>
        <h2>New Enquiry Details:</h2>
        <p><strong>Name:</strong> $name</p>
        <p><strong>Email:</strong> $email</p>
        <p><strong>Subject:</strong> $subject</p>
        <p><strong>Message:</strong><br>$comments</p>
    </body>
    </html>
    ";

    // Headers
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-Type: text/html; charset=UTF-8" . "\r\n";
    $headers .= "From: $email" . "\r\n";
    $headers .= "Reply-To: $email" . "\r\n";

    // Send the email
    if (mail($to, $email_subject, $message, $headers)) {
        // Set session message for success
        $_SESSION['message'] = 'Your enquiry has been sent successfully!';
    } else {
        // Set session message for error
        $_SESSION['message'] = 'There was an error sending your enquiry. Please try again.';
    }

    // Redirect back to the enquiry page
    header("Location: enq.php");
    exit();
} else {
    // If the form wasn't submitted properly, redirect back to the enquiry page
    header("Location: enq.php");
    exit();
}
?>
