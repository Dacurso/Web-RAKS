<?php  

$cuerpo=' ';
$nombre=$_POST['nombre'];
$telefono=$_POST['tel'];
$email=$_POST['email'];
$msj=$_POST['mensaje'];

// configuramos datos de email

$para="raksestudio@hotmail.com";//raksestudio@hotmail.com
$asunto= "Consulta RAKS";

// cuerpo de email

$cuerpo.="Nombre: ".$nombre."\n";
$cuerpo.="Contacto: ".$telefono."\n";
$cuerpo.="E-mail: ".$email."\n";
$cuerpo.="Mensaje: ".$msj."\n";

mail($para, $asunto, $cuerpo);

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h3>Gracias por su consulta!</h3>
	<a href="index.php">Volver al Inicio</a>
</body>
</html>