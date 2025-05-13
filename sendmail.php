<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = "bookings@vishucargopackersandmovers.in";  // <- change to your email
    $subject = "New Booking Inquiry from Website";

    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $message = $_POST["message"];

    $fullMessage = "Name: $fname $lname\n";
    $fullMessage .= "Email: $email\n";
    $fullMessage .= "Phone: $phone\n";
    $fullMessage .= "Message:\n$message";

    $headers = "From: $email";

    if (mail($to, $subject, $fullMessage, $headers)) {
        echo "<script>alert('Booking sent successfully!'); window.history.back();</script>";
    } else {
        echo "<script>alert('Failed to send booking. Try again later.'); window.history.back();</script>";
    }
}
?>
