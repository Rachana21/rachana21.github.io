<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $name = trim($_POST["name"]);
    $email = trim($_POST["email"]);
    $message = trim($_POST["message"]);

    // Email parameters
    $to = "rachana.thanneeru@gmail.com"; // Change this to your email address
    $subject = "Contact Form Submission";
    $body = "Name: $name\nEmail: $email\nMessage:\n$message";

    // Send email
    if (mail($to, $subject, $body)) {
        echo "Your message has been sent successfully.";
    } else {
        echo "Error: Unable to send message.";
    }
} else {
    echo "Error: Invalid request.";
}
?>