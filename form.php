<?php
// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = $_POST["name"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];

    // You can add additional validation here if needed

    // Example of sending an email (you need to configure your server to send emails)
    $to = "prabodaharshani95@gmail.com"; // Change this to your email address
    $subject = "Contact Form Submission: $subject";
    $body = "Name: $name\nEmail: $email\nSubject: $subject\nMessage: $message";
    $headers = "From: $email";

    // Send email
    if (mail($to, $subject, $body, $headers)) {
        echo "Your message has been sent successfully.";
    } else {
        echo "Sorry, there was an error sending your message.";
    }
} else {
    // Redirect back to the form if accessed directly without submission
    header("Location: contact.html");
    exit;
}
?>
