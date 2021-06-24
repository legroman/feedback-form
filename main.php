<?php

$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$text = $_POST['text'];
$message = "
        Ім'я: $name \n
        Телефон: $phone \n
        Пошта: $email \n
        Текст: $text";

$to = "nick@ukieweb.com";
$subject = "Заявка з сайту";
$headers = "From: $email" . "\r\n" .
    "Reply-To: $email" . "\r\n" .
    "X-Mailer: PHP/" . phpversion();

if(mail($to, $subject, $message, $headers)) echo "message send";
else echo "message not send";
