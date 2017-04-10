<?php
/*
 **************************************
 *									  *
 * Config here                        *
 *									  *
 **************************************
 */

$to = 'info@caulongppt.net';
$siteName = "UGV BADMINTON";

/*
 *************************************************************
 *									                         *
 *      Don't Change below code, if you don't know php.      *
 *									                         *
 *************************************************************
 */

$name = $_POST['name2'];
$mail = $_POST['email2'];
$message = $_POST['message2'];

if (isset($name) && isset($mail) && isset($message)) {
	

	$mailSub = '[Contact] [' . $siteName . '] '. 'contact on website';

	$body = 'Sender Name: ' . $name . "\n\n";
	$body .= 'Sender Mail: ' . $mail . "\n\n";
	$body .= 'Message: ' . $message;

	$header = 'From: ' . $mail . "\r\n";
	$header .= 'Reply-To:  ' . $mail . "\r\n";
	$header .= 'X-Mailer: PHP/' . phpversion();

	echo mail($to, $mailSub, $body, $header);
}else{
	echo '0';
}
?>