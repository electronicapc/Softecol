<?php
// Function to get the client ip address
function get_client_ip_server() {
    $ipaddress = '';
    if($_SERVER['HTTP_X_FORWARDED_FOR'])
        $ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
    else if($_SERVER['HTTP_X_FORWARDED'])
        $ipaddress = $_SERVER['HTTP_X_FORWARDED'];
    else if($_SERVER['HTTP_FORWARDED_FOR'])
        $ipaddress = $_SERVER['HTTP_FORWARDED_FOR'];
    else if($_SERVER['HTTP_FORWARDED'])
        $ipaddress = $_SERVER['HTTP_FORWARDED'];
    else if($_SERVER['REMOTE_ADDR'])
        $ipaddress = $_SERVER['REMOTE_ADDR'];
    else
        $ipaddress = 'UNKNOWN';
 
    return $ipaddress;
}
$ip     = get_client_ip_server();
//End
$email	= $_POST['email'];

$to = "electronicapcolombia@gmail.com";
$subject = "Solictud de informacion de servicios";
$message = "
<html>
	<head>
		<title>Solicitud</title>
	</head>
	<body>
		<p>La empresa con correo $email solicit&oacute; informaci&oacute;n de servicios con ip $ip </p>
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