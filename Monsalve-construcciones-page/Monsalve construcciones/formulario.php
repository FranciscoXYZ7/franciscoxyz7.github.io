<?php
// llamando a los campos

$nombre = $_POST['name'];
$numero = $_POST['tel'];
$correo = $_POST['mail'];
$msg = $_POST['msg'];

//datos correo

$destinatario = "franciscopadillaxyz7@gmail.com";
$asunto = "Contacto desde nuestra web";

//
$carta = "De: $nombre\n";
$carta .=  "Correo: $correo \n";
$carta .= "Telefono: $telefono\n";
$carta .= "mensaje: $mensaje";

//enviando

mail($destinatario, $asunto, $carta);
// header("location:exito.html");

?>