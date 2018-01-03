<!--PHP incorpora un gran numero de variables predefinidas
	(creadas automáticamente). En la siguiente lista se muestran las principales (de tipo array, contienen muchos valores):
	
	$_SERVER - Variables del entorno de ejecución (ejemplo: ver la IP del servidor que se está utilizando, o saber ls IP del cliente que ha consultado la página)
	$_GET - Variables recibidas por HTTP GET 
	$_POST - Variables recibidas por HTTP POST
	$_FILES - Variables con ficheros cargados por HTTP
	$_REQUEST - Combina $_GET, $_POST, y $_FILES
	$_COOKIE - Variables de las cookies HTTP
	$_SESSION - Variables de sesión PHP
	$_ENV - Variables de entorno
	
	Ejemplos:
		Muestra información sobre el navegador que realizó la petición
		echo $_SERVER ['HTTP_USER_AGENT'];
		
		Muestra la IP del cliente
		echo $_SERVER['REMOTE_ADDR'];
-->
<?php 
	echo $_SERVER['HTTP_USER_AGENT'];
	echo $_SERVER['REMOTE_ADDR']; //La dirección IP del servidor donde se está ejecutando actualmente el script.
 ?>