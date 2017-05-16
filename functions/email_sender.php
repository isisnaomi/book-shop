<?php

$name = $_POST['name'];
$suggestion = $_POST['suggestion'];

$message = "Name: $name \n Suggestion: $suggestion";

$to     = 'davidhernandeze@gmail.com';
$subject    = 'Suggestion';
$headers = 'From: contact@bookshoop.com';

$headers = 'From: webmaster@example.com' . "\r\n" .
    'Cc:  mdoming@uady.mx' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers);

session_start();
$_SESSION["status_message"] = "Suggestion send";

header("location: /book-store/index.php");

