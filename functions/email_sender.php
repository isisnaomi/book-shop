<?php

$email = $_POST['email'];
$suggestion = $_POST['suggestion'];

$message = $suggestion;
$to     = 'davidhernandeze@gmail.com';
$subject    = 'Suggestion';
$headers = "From: $email";

$headers = 'From: davidhernandeze@gmail.com' . "\r\n" .
    'Cc:  mdoming@uady.mx' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers);

session_start();
$_SESSION["status_message"] = "Suggestion send";

header("location: /~equipo2/index.php");

