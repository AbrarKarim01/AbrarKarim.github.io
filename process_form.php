<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    
    // You can perform additional validation or sanitization here
    
    // For example, sending an email
    $to = "your_email@example.com"; // Replace with your email address
    $subject = "New message from website";
    $body = "Name: $name\nEmail: $email\nMessage:\n$message";
    
    // Send the email
    mail($to, $subject, $body);
    
    // Redirect the user to a thank you page or display a success message
    header("Location: thank_you.html"); // Replace with the URL of your thank you page
    exit;
}
?>
