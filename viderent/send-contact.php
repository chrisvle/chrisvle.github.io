<?php

	$name = @trim(stripslashes($_POST['name']));
	$email = @trim(stripslashes($_POST['email']));
	$message = @trim(stripslashes($_POST['message']));

	$email_from = $email;
	$email_to = 'chrisvle@berkeley.edu';

	$body = 'Name: ' . $name . "\n\n" . 'Email: ' . $email . "\n\n" . 'Message: ' . $message;

	$success = @mail($email_to, $body, 'Name: ' . $name . "\n\n" . 'Email: ' . $email . "\n\n" . 'Message: ' . $message);

?>

<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<script>alert("Thank you for contacting us. We will be in touch soon!");</script>
	<meta HTTP-EQUIV="REFRESH" content="0; url=../index.html">
</head>
