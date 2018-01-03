<?php 
	$errores = '';
	$enviado = '';

	if (isset($_POST['submit'])) {
		$nombre = $_POST['nombre'];
		$correo = $_POST['correo'];
		$mensaje = $_POST['mensaje'];

		if (!empty($nombre)) {
			$nombre = trim($nombre);
			$nombre = filter_var($nombre, FILTER_SANITIZE_STRING);//elimina caracteres que no sirven
		}
		else {
			$errores .= 'Por favor, ingresar un nombre <br />';
		}

		if (!empty($correo)) {
			$correo = filter_var($correo, FILTER_SANITIZE_EMAIL);
			
			if (!filter_var($correo, FILTER_VALIDATE_EMAIL)) { //comprueba si es un correo real, caso contrario envia FALSE
				$errores .= 'Por favor ingresar un correo válido <br />';
			}
		} else {
			$errores .= 'Por favor ingresar un correo <br />';
		}

		if (!empty($mensaje)) {
			$mensaje = htmlspecialchars($mensaje);
			$mensaje = trim($mensaje);
			$mensaje = stripcslashes($mensaje);
		} else {
			$errores .= 'Por favor ingresar el mensaje';
		}

		if (!$errores) { //si no hay errores, entonces está correcto
			$enviar_a = 'uncorreo@empresa.com'; //a este correo llegan los formularios
			$asunto = 'Correo enviado desde miPagina.com';
			$mensaje_preparado = "De: $nombre \n"; //  \n = salto de linea
			$mensaje_preparado .= 'Correo: $correo \n';
			$mensaje_preparado .= "Mensaje: " . $mensaje;

			mail($enviar_a, $asunto, $mensaje_preparado); //esta funcion sirve para enviar el correo. Si no funciona, es por XAMPP, pero se soluciona al subir al hosting.
			$enviado = true;
		}


	}

	require 'index.view.php';
 ?>