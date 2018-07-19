<?php

if (isset($_POST)) {

	$name  = $_POST['user_name'];
	$email = $_POST['user_email'];
	$phone = $_POST['user_phone'];

	$to      = 'talanov.o@gmail.com';
	$subject = 'Форма заявки с лендинга семинара';

	$message = "
    <html>
        <head>
        <title>{$subject}</title>
        <style>body{font: normal 1rem/1.5 sans-serif;}</style>
        </head>
        <body>
        <h2>Заявка от {$name}</h2>
        <p>Email: {$email}</p>
        <p>Телефон: {$phone}</p>";

	if (isset($_POST['format'])) {
		$message .= "<br><p>Формат: {$_POST['format']}</p>";
	}

	$message .= "</body>
        </html>
    ";
	$headers = 'From: info@bgcenter.kz' . "\r\n" .
	           'Reply-To: ' . $email . "\r\n" .
	           'X-Mailer: PHP/' . phpversion();
	$headers = 'MIME-Version: 1.0' . "\r\n";
	$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

	mail($to, $subject, $message, $headers);

	header('Location: ' . $path . '/thank-you.php');

}