<?php
$nombre = $_POST["name"];
$mail = $_POST["email"];
$asunto = $_POST["subject"];
$mensaje = $_POST["textarea"];

$mensaje = "Este mensaje fue enviado por " . $nombre . "\r\n";
$mensaje .= "Su E-mail es: " . $mail . "\r\n";
$mensaje .= "El asunto es:  " . $asunto . "\r\n";
$mensaje .= "Mensaje: " . $_POST["mensaje"] . "\r\n";
$mensaje .= "Enviado el: " . date("d/m/y", time());

$para = "webnancy105@gmail.com";
$asunto = "Este mail fue enviado desde NanWeb agencia";

//funcion mail
// a quien le mando el mail
email($para, $asunto, utf8_decode($mensaje), $header);

//redirección al haber enviado el form 
header("Location:exito.html");
?>
