<?php

$email	= $_POST['email'];

$to = "electronicapcolombia@hotmail.com,$email";
$subject = "Solictud de informacion de servicios";
$message = "
<html>
	<head>
		<title>Solicitud</title>
	</head>
	<body>
		<p>La empresa con correo $email solicit&oacute; informaci&oacute;n de servicios</p>
	</body>
</html>
";

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
	
// More headers
$headers .= 'From: <webmaster@softecol.com>' . "\r\n";
$headers .= 'Cc: gunsnjrc@gmail.com' . "\r\n";
	
mail($to,$subject,$message,$headers);

header("Location: index.php?info=true");