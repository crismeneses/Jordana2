<?php
	
/* Email Address */	
$to      = 'support@companyname.com';

/* Subject */
$subject = 'Formulario Jordana';

/* Headers */
$headers = 'From: webmaster@example.com' . "\r\n" .
    'Reply-To: webmaster@example.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();
	

if(isset($_POST['newsletter-email']) && !empty($_POST['newsletter-email'])){
	
	$email = $_POST['newsletter-email'];
	
	if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
		
		$message = 'Email: '.$email;
		
		mail($to, $subject, $message, $headers);
		echo "Gracias por suscribirse a nuestras noticias.";
		
	}else{
	
		echo 'La dirección de correo no es válida';
		
	}
	
}else{

	echo 'Por favor, llene los campos';
	
}




?>