<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect the form data
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['textarea']);
    
    // Email settings
    $to = 'your_personal_email@example.com'; // Replace with your personal email address
    $subject = 'New message from ' . $name;
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";
    
    // Email body
    $email_body = "Name: $name\n";
    $email_body .= "Email: $email\n";
    $email_body .= "Message:\n$message\n";
    
    // Send email
    if (mail($to, $subject, $email_body, $headers)) {
        echo "<div class='alert alert-success'>Thank you for your message. It has been sent.</div>";
    } else {
        echo "<div class='alert alert-danger'>Oops...! There was a problem sending your message.</div>";
        error_log("Failed to send email: " . error_get_last()['message']);
    }
}
?>
