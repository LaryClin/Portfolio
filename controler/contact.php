<?php
if (isset($_POST['contact_name']) && isset($_POST['contact_mail']) && isset($_POST['contact_message'])){
	$name = $_POST['contact_name'];
	$mail = $_POST['contact_mail'];
	$mess = nl2br($_POST['contact_message']);
	$to = "cocod.tv@gmail.com";
	$from = $mail;
	$subject = 'Contact Portfolio de '.$name;
	$message = '<b>Nom :</b> '.$name.' <br><b>Son Email :</b> '.$mail.' <p>'.$mess.'</p>';
	$headers = "De : $from\n";
	$headers .= "MIME-Version: 1.0\n";
	$headers .= "Content-type: text/html; charset=iso-8859-1\n";
	if( mail($to, $subject, $message, $headers) ){
		echo "Success";
	} else {
		echo "Sorry, the server failed to send the message :(";
	}
}
?>