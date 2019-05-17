<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

$name = trim(filter_input(INPUT_POST,"name",FILTER_SANITIZE_STRING));
$email = trim(filter_input(INPUT_POST,"email",FILTER_SANITIZE_EMAIL));
$address = trim(filter_input(INPUT_POST,"address",FILTER_SANITIZE_STRING));
}

foreach ($_POST as $key => $value) {
	echo $key . ": " . $value . "<br>";
	}

echo "<br> Thanks for your message!";

$message = "Test message";

mail('contact@cascadia-digital.com', 'This is the subject', $message);

?>

