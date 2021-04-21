<?php
$Name = $_POST['Name'];
$Email = $_POST['Email'];
$Telefono = $_POST['Telefono'];
$empresa = $_POST['message'];

$header = 'From: ' . $Email . " \r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

$mensaje = "Este mensaje fue enviado por " . $Name . ",\r\n";
$mensaje .= "Su e-mail es: " . $Email . " \r\n";
$mensaje .= "Mensaje: " . $_POST['message'] . " \r\n";
$mensaje .= "Enviado el " . date('d/m/Y', time());

$para = 'andres14bermejo2002@gmail.com';
$asunto = 'Mensaje de mi proyecto';

mail($para, $asunto, utf8_decode($message), $header);

header("Location:index.html");
?>