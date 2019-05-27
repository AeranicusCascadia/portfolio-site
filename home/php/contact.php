<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

$name = trim(filter_input(INPUT_POST,"name",FILTER_SANITIZE_STRING));
$email = trim(filter_input(INPUT_POST,"email",FILTER_SANITIZE_EMAIL));
$details = trim(filter_input(INPUT_POST,"contact_message",FILTER_SANITIZE_SPECIAL_CHARS));

}

$subject = "Email from Cascadia Digital Workshop contact form";
$message = "Message from $name \n";
$message .= $email . "\r\r";
$message .= $details;

mail('contact@cascadia-digital.com', $subject, $message);

header('Location: ../thanks.php');
 
?>

