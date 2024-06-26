<?php
// Retrieve the form data
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

// Set the recipient email address
$to = 'info@waterbillservice.com'; // Replace with the desired email address

// Set the email subject and message
$subject = 'New Message from Water Bill Service Contact Form';
$body = "Name: $name\nEmail: $email\nMessage: $message";

// Send the email
if (mail($to, $subject, $body)) {
    echo 'Message sent successfully!';
} else {
    echo 'Error sending the message. Please try again later.';
}
?>