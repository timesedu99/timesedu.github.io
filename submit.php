<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $dob = trim($_POST['dob']);
    $course = trim($_POST['course']);

    if (empty($name) || empty($email) || empty($dob) || empty($course)) {
        echo "All fields are required.";
        exit;
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Invalid email format.";
        exit;
    }

    // Email configuration
    $to = 'timesedu99@gmail.com';
    $subject = 'New Admission Form Submission';
    $message = "Name: $name\nEmail: $email\nDate of Birth: $dob\nCourse: $course";
    $headers = "From: no-reply@yourdomain.com\r\n";

    if (mail($to, $subject, $message, $headers)) {
        echo "Form submitted successfully!";
    } else {
        echo "Failed to send email.";
    }
} else {
    echo "Invalid request method.";
}
?>
