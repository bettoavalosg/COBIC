<?php  

// Llamando a los campos
$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$telefono = $_POST['telefono'];
$mensaje = $_POST['mensaje'];

// Datos para el correo

$destinatario = "Ingresa Tu direccion de correo 1";
$asunto = "Contacto desde nuestra web";
$carta = "De: $nombre \n";
$carta .= "Correo: $correo \n";
$carta .= "Telefono: $telefono \n";
$carta .= "Mensaje: $mensaje";

// Enviando Mensaje
mail($destinatario, $asunto, $carta);
$destinatario1 = "Ingresa Tu direccion de correo 2";
$asunto1 = "Contacto desde nuestra web";
$carta1 = "De: $nombre \n";
$carta1 .= "Correo: $correo \n";
$carta1 .= "Telefono: $telefono \n";
$carta1 .= "Mensaje: $mensaje";

// Enviando Mensaje
mail($destinatario1, $asunto1, $carta1);
header('Location:index.html');

?>