<?php 

    $to = "jaime_rogue@yahoo.es"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $name = $_POST['name'];
    $subject = "Nuestro Proyecto Diez: " . $_POST['subject'];
    $message = $name . " " . "ha enviado este mensaje: " . "\n\n" . $_POST['message'];
    $headers = "From:" . $from . "\r\n";
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) { // this line checks that we have a valid email address
		mail($to, $subject, $message, $headers) or die('Error al enviar el mensaje.'); //This method sends the mail.
		echo "Gracias por contactar con nosotros, " . $name . ". ¡Te responderemos lo antes posible!."; // success message
		}
	else {
		echo "Dirección de correo inválida. Por favor, revísalo."
	}
    
?>