<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    // Define the recipient email (change this to your email)
    $to = "your-email@example.com";  
    $headers = "From: " . $email;

    // Send the email
    if (mail($to, $subject, $message, $headers)) {
        echo "Thank you for your message. We will get back to you soon!";
    } else {
        echo "Sorry, there was an issue sending your message. Please try again later.";
    }
}
?>
