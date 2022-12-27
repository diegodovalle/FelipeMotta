<?php
    header('charset=iso-8859-1');
	session_start();
	// Set email to send messages to
	$emailTo = 'contato@felipemotta.com.br';
	$nameTo = 'Contato pelo Site';
	// Do not edit anything from here unless you know what you are doing
	$contactErrors = array();
		$name = $_SESSION['name'];
		$email = $_SESSION['email'];
		$website = $_SESSION['website'];
		$message = $_SESSION['comment'];
	
		if (empty($contactErrors) && trim($emailTo) !== '')
		{			
			$subject = 'Contato pelo Site';
			$subjectConf = 'Felipe Motta - Envio Confirmado';
			$body = "\nNome: $name \nE-mail: $email \nWebsite: $website \nMensagem: $message";
			$headers = 'From: ' . $name . ' <' . $emailTo . '>' . "\r\n" . 'Reply-To: ' . $email;
			$headersResponse = 'From: ' . $nameTo . ' <' . $emailTo . '>' . "\r\n" . 'Reply-To: ' . $emailTo;
			$response = "$name, \n\nObrigado pela mensagem. Entrarei em contato em breve.\n\nAtenciosamente,\nFelipe Motta";
			mail($emailTo, $subject, utf8_decode($body), $headers);

			mail($email, $subjectConf, $response, $headersResponse);
			$emailSent = true;
		}
		
		header( 'Location: success.html' ) ;
?>