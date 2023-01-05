<?php
$subject = 'VB ModularPlus Got Message'; // Subject of your email
$to = 'adi@saisrinidhiinteriors.com,saisrinidhiinteriors@gmail.com';  //Recipient's E-mail
$emailTo = $_REQUEST['email'];

$name = $_REQUEST['name'];
$email = $_REQUEST['email'];
$phone = $_REQUEST['phone'];
$msg = $_REQUEST['message'];

$email_from = $name.'<'.$email.'>';



$message .= 'Name : ' . $name . "\n";
$message .= 'Email : ' . $email . "\n";
$message .= 'Phone : ' . $phone . "\n";
$message .= 'Message : ' . $msg;

if (@mail($to, $subject, $message, $email_from))
{
	// Transfer the value 'sent' to ajax function for showing success message.
	echo 'sent';
}
else
{
	// Transfer the value 'failed' to ajax function for showing error message.
	echo 'failed';
}
?>