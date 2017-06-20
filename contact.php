<?php
//Importamos las variables del formulario de contacto
@$nombre = addslashes($_POST['name']);
@$email = addslashes($_POST['email']);
@$subject = addslashes($_POST['subject']);
@$mensaje = addslashes($_POST['message']);
 
//Preparamos el mensaje de contacto
$cabeceras = "From: $email\n" //La persona que envia el correo
 . "Reply-To: $email\n";
$asunto = "Mensaje desde la pagina Web"; //asunto aparecera en la bandeja del servidor de correo
$email_to = "guitarjosegatica@gmail.com"; //cambiar por tu email
$contenido = "$nombre ha enviado un mensaje desde la web www.josegatica.cl\n"
. "\n"
. "Nombre: $nombre\n"
. "Email: $email\n"
. "Asunto: $subject\n"
. "Mensaje: $mensaje\n"
. "\n";
 
//Enviamos el mensaje y comprobamos el resultado
if (@mail($email_to, $asunto ,$contenido ,$cabeceras )) {
 
//Si el mensaje se envía muestra una confirmación
die("Gracias, tu mensaje se envio correctamente.");
}else{
 
//Si el mensaje no se envía muestra el mensaje de error
die("Error: Tu información no pudo ser enviada, intenta más tarde");
}
?>