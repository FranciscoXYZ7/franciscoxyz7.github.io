<?php
$nombre = $_POST['name'];
$apellido = $_POST['apellido'];
$correo = $_POST['email'];
$phone = $_POST['tel'];
$mensaje = $_POST['comentarios'];

$comentarios = "Este mensaje fue enviado por: $nombre $apellido\n";
$comentarios .= "Su e-mail es: $correo\n";
$comentarios .= "Telefono de contacto: $phone \n";
$comentarios .= "Mensaje: . $_POST[$mensaje]r\n";


$para = 'franciscoxyz7@gmail.com';
$asunto = 'prueba php';

mail($para, $asunto ,utf8_decode($mensaje), $header);
header('location:exito.html');
?>