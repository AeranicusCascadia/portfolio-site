<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

$name = trim(filter_input(INPUT_POST,"name",FILTER_SANITIZE_STRING));
$email = trim(filter_input(INPUT_POST,"email",FILTER_SANITIZE_EMAIL));
$details = trim(filter_input(INPUT_POST,"details",FILTER_SANITIZE_SPECIAL_CHARS));

}

foreach ($_POST as $key => $value) {
	if ($key == 'address') {
		continue;
		} else {
			echo $key . ": " . $value . "<br>";
		}
	}


$message = "Just a test message";

mail('contact@cascadia-digital.com', 'This is the subject', $message);

header('Location: '.$_SERVER['HTTP_REFERER'] . '#contact-section-anchor');
 


?>

