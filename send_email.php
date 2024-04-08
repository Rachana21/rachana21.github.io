<?php
if(isset($_POST['submit'])) {
    $to = "rachana.thanneeru@gmail.com";
    $subject = "Contact Form Submission";
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $headers = "From: $name <$email>";

    if(mail($to, $subject, $message, $headers)) {
        echo "Email sent successfully.";
    } else {
        echo "Error sending email.";
    }
}
?>