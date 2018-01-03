<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Formularios</title>
</head>
<body>
	<form action="recibe.php" method="post"> <!--action especifica hacia donde enviar los datos -->
		<!--Post no envia los datos por la URL, lo hace get-->
		<input type="text" placeholder="Nombre:" name="nombre">
		<br>
		<label for = "masculino"> Masculino</label>
		<input type="radio" name="sexo" value="masculino" id="masculino">
		<br>
		<label for = "femenino"> Femenino</label>
		<input type="radio" name="sexo" value="femenino" id="femenino">
		<br>

		<select name="year" id="year">
			<option value="2000">2000</option>
			<option value="2001">2001</option>
			<option value="2002">2002</option>
			<option value="2003">2003</option>
			<option value="2004">2004</option>
		</select>
		<br>

		<label for = "terminos">Acepta los terminos?</label>
		<input type="checkbox" name="terminos" id="terminos" value="ok">
		<br>

		<input type="submit" value="Enviar">
	</form>
</body>
</html>