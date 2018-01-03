<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Formulario Contacto</title>
	<link href="https://fonts.googleapis.com/css?family=Dosis" rel="stylesheet"> <!--En la fuente, seleccionar el signo mas, luego de la lsita inferior copiar el codigo-->
	<link rel="stylesheet" type="text/css" href="estilo_form.css">
	<!--Fuentes de google fonts-->

</head>
<body>
	<div class="wrap">
		<!--El contenedor del formulario-->
		<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" accept-charset="utf-8">
			<label><input type="text" class="form-control" name="nombre" placeholder="Nombre" value="<?php  if (!$enviado && isset($nombre)) echo $nombre ?>"></label>
			
			<label>
			<input type="text" class="form-control" name="correo" placeholder="Correo" value="<?php  if (!$enviado && isset($correo)) echo $correo ?>"> </label>

			<textarea name="mensaje" class="form-control" id="mensaje" placeholder="Mensaje"> <?php  if (!$enviado && isset($mensaje)) echo $mensaje ?></textarea>

			<!-- Explicar despues de crear el else de la condicion para validar el nombre -->
			<?php if (!empty ($errores)): ?>
					<div class="alert error">
						<?php echo $errores; ?>
					</div>
				<?php elseif ($enviado): ?>
					<div class="alert success">
						<p>Enviado correctamente</p>
					</div>
			<?php endif ?>

			<!-- Los div con clases alert error y alert success se muestran esta vez para ver como queda
			diseñado el formulario, pero se debe usar con php, luego de comprobar el diseño proceder a borrar o desactivar-->
			<!--<div class="alert error">
				Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua.
			</div>
			
			<div class="alert success">
				Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua.
			</div>-->
			<input type="submit" name="submit" class="btn btn-primary" value="Enviar correo">
		</form>
	</div>
</body>
</html>