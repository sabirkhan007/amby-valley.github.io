<?php
if(isset($_POST['submit'])) {
    // Get form data safely
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $checkin = $_POST['checkin'];
    $checkout = $_POST['checkout'];
    $room = $_POST['room'];
    $requests = htmlspecialchars($_POST['requests']);

    // Email settings
    $to = "info@yourcompany.com"; // Change to your email
    $subject = "New Room Reservation Request";
    $message = "
        Name: $name\n
        Email: $email\n
        Phone: $phone\n
        Check-in Date: $checkin\n
        Check-out Date: $checkout\n
        Room: $room\n
        Special Requests: $requests
    ";

    $headers = "From: $email";

    // Send email
    if(mail($to, $subject, $message, $headers)) {
        echo "<script>alert('Reservation submitted successfully!');window.location.href='index.html';</script>";
    } else {
        echo "<script>alert('Failed to submit reservation. Please try again.');window.location.href='index.html';</script>";
    }
}
?>
