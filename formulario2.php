<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Validar PHP</title>
</head>
<body>
	<form action="valida_envio.php" method="get" accept-charset="utf-8">
		<label><input type="text" name="nombre" value=""></label>
		<label><input type="email" name="correo" value=""></label>
		<input type="submit" name="">
	</form>

	 <form action="valida_envio.php" method="post" accept-charset="utf-8">
		<label><input type="text" name="nombre" value=""></label>
		<label><input type="email" name="correo" value=""></label>
		<input type="submit" name="submit-formulario2"> Explicar la diferencia con el nombre del boton
	</form> 

</body>
</html>