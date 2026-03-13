<?php

$to = "mateusz.suszko2003@gmail.com";

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

$subject = "Nowa wiadomość ze strony architekta";

$body = "Imię: $name\n";
$body .= "Email: $email\n\n";
$body .= "Wiadomość:\n$message";

$headers = "From: $email";

mail($to, $subject, $body, $headers);

echo "Wiadomość została wysłana.";

?>
