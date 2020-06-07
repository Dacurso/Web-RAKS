<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">

	<link rel="shortcut icon" type="image/x-icon" href="img/m-logo.ico">
	<title>Contacto</title>

	<link href="https://fonts.googleapis.com/css?family=Dancing+Script|Roboto+Condensed&display=swap" rel="stylesheet"> 

	<link rel="stylesheet" type="text/css" href="css/estilos-contacto.css">

</head>

<body>
	<header>
		<?php include "php/header.php" ?>
	</header>

	<main>

	<section id="mapa">
		<h2>¿Dónde estamos?
		<iframe id="maps" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3284.5835509821227!2d-58.58953278492008!3d-34.589402580463066!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bcb9b1ca23dacd%3A0x7fcb71c6a5b67187!2sLeandro%20N.%20Alem%206565%2C%20B1683AUM%20Mart%C3%ADn%20Coronado%2C%20Buenos%20Aires!5e0!3m2!1ses!2sar!4v1568850416051!5m2!1ses!2sar"  frameborder="0" style="border:0;" allowfullscreen=""></iframe></h2>
		
	</section>

		<form action="enviar_consulta.php" method="post" name="form" id="formulario">

		<section id="datos_consulta">
			<h3>¡Dejanos tu consulta!</h3>
			<br>
			<span class="etiquetas">Nombre y apellido:</span>
			<br>            
            <input  class="input_form" type="text" id="nombre" name="nombre" autofocus>

			<br><br>
			<span class="etiquetas">Teléfono/Celular:</span>
			<br>
			<input class="input_form" type="text" id="tel" name="tel">

			<br><br>
			<span class="etiquetas">E-mail:</span>
			<br>
            <input class="input_form" type="text" id="email" name="email" required>

			<br><br>
            <span class="etiquetas">Mensaje:</span>
            <br>
            <textarea class="mensaje" name="mensaje" id="mensaje" rows="10"></textarea>
			
			<br><br>
            <input type="submit" id="enviar" name="enviar" value="Enviar" class="btn">
            <br><br>
          
        </section>

		<section id="datos">
			<p><b>Teléfono:</b>&nbsp 011 15-5922-6163 <br>
				<br><b>E-mail:</b>&nbsp  raksestudio@hotmail.com <br>
				<br><b>Dirección:</b>&nbsp Leandro N. Alem 6565, Martín Coronado, Buenos Aires <br></p>
		</section>
		<br>

		<h4>RAKS</h4>

		</form>

	</main>

	<footer>
		<?php include "php/footer.php" ?>
	</footer>

</body>
</html>