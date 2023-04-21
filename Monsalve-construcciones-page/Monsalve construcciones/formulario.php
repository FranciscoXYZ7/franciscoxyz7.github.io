<?php
$name = $_POST['name'];
$lname = $_POST['apellido'];
$mail = $_POST['email'];
$tel = $_POST['tel'];
$comentarios = $_POST['comentarios'];

$para = 'franciscoxyz7@gmail.com';
$asunto = 'prueba php';

$comentarios = "Este mensaje fue enviado por: $name \n",
$comentarios .= "Su e-mail es: $mail \n";
$comentarios .= "Telefono de contacto: $phone \n";
$comentarios .= "Mensaje: $comentarios";



mail($para, $asunto ,$comentarios);

header('Location:')

?>