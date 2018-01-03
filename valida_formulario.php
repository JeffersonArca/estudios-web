<?php 
	if (isset($_POST['submit'])) {
		//isset verifica si la variable $_POST está seteada con la información del submit
		$nombre = $_POST['nombre']; //la variable $nombre es igual al valor de la caja de texto "nombre" del html

		if (!empty($nombre)) { //Pregunta si la variable nombre NO esta vacía
			//$nombre = trim($nombre); //Elimina los espacios en blanco del inicio y fin de una cadena de texto

			//EXPLICAR Y LUEGO ACTIVAR ESTA LÍNEA
			//$nombre = htmlspecialchars($nombre); //htmlspecialchars convierte o escapa caracteres en código HTML
			//$nombre = stripcslashes($nombre); //remueve simbolos como las diagonales para que el usuario no pueda inyectar código
			$nombre = filter_var($nombre, FILTER_SANITIZE_STRING); //funcion que filtra o elimina los caracteres (en este caso las etiquetas html). Desactivar las lineas anteriores

			echo "El nombre es: $nombre <br />";
		}

		$correo = $_POST['correo'];
		
		echo "El correo es: $correo";
	}
 ?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Valida Formulario</title>
</head>
<body>
	<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" accept-charset="utf-8"> <!--Proceso para enviar los datos a esta misma pagina, el echo en este caso almacena la ruta de direccion, esta vez no va a imprimir nada-->
		<label><input type="text" name="nombre" placeholder="Nombre"></label>
		<label><input type="email" name="correo" placeholder="Correo" value=""></label>
		<input type="submit" name="submit">
	</form>
</body>
</html>