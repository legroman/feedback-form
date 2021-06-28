<?php

$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$text = $_POST['text'];
$message = "
        Name: $name \n
        Phone: $phone \n
        Email: $email \n
        Message: $text";

$to = "nick@ukieweb.com";
$subject = "Application from the site";
$headers = "From: $email" . "\r\n" .
    "Reply-To: $email" . "\r\n" .
    "X-Mailer: PHP/" . phpversion();

if (mail($to, $subject, $message, $headers)) {
    $status = 'ok';
    $title = 'Awesome';
    $text = 'Your message sent successfully';
} else {
    $title = 'Oops, something went wrong!';
    $text = 'There was an error sending the message';
}

header("Location: index.php?title=" . urlencode($title) . "&text=" . urlencode($text) . "&popup=" . urlencode('show') . "&status=" . urlencode($status));
