<?php 
	if ($_SERVER['REQUEST_METHOD']== GET) {
	//acceder al metodo de envio, esta condicion pregunta si el metodo de envio = GET, entonces ejecuta el proceso
	echo "Se enviaron por GET";
}
else {
	echo "Se enviaron por POST";
	//Desactivar luego el código
}

//Activar este codigo despues.

if (isset($_POST['submit-formulario2'])) {
	echo "Los datos se han enviado correctamente";
	print_r($_POST['submit-formulario2']);
}

 ?>
