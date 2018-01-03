<?php 
	//print_r($_POST);

	if ($_POST) {
		# code...
		$nombre = $_POST['nombre'];
		$sexo = $_POST['sexo'];
		$year = $_POST['year'];
		$terminos = $_POST['terminos'];
		echo 'Hola ' . $nombre . ' eres ' . $sexo;
	}
	else {
		header('location: http://localhost:8888/estudios/septimo/formulario1.php'); //Para redirigir a otra web
	}
 ?>