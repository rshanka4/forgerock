<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
	$subject = $_POST['subject'];
    $message = $_POST['message'];

    $to = "contact@secflair.com"; // Replace with your email address
    $subject = "New Message from $name";
    $email_body = "From: $name\nEmail: $email\nMessage:\n$message";

    $headers = "From: $email\r\nReply-To: $email\r\n";

    if (mail($to, $subject, $email_body, $headers)) {
        echo '<p>Your message has been sent successfully. We will get back to you soon!</p>';
    } else {
        echo '<p>Sorry, something went wrong. Please try again later.</p>';
    }
}
?>