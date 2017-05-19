<?php

$email = $_POST['email'];
$suggestion = $_POST['suggestion'];


$to = "davidhernandeze@gmail.com"; // this is your Email address
$from = $_POST['email']; // this is the sender's Email address
$subject = "Atención al cliente";

$message = $from . " escribio lo siguiente en la sección de contacto de la página bookshop:" . "\n\n" . $suggestion;

$headers = $headers = "From: ".$from . "\r\n" .
    "CC:  mdoming@uady.mx";

mail($to, $subject, $message, $headers);



echo '<script type="text/javascript">
           window.location = "http://148.209.67.69/~equipo2/functions/email_sent.php"
      </script>';

