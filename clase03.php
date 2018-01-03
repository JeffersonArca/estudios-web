<!--Conversiones entre distintos tipos de datos-->
<?php
	$edad_string ="25 años"; //String, por que el valor está entre comillas
	$edad_int = (integer) $edad_string; //$edad_int vale 25 
	var_dump($edad_string);
	var_dump($edad_int);
	
	//Ejemplo
	//Sumar 5 al valor de $edad_int
	$respuesta = 5 + $edad_int;
	var_dump($respuesta);
	
	//Sumar 5 en $respuesta
	$respuesta = 5 + (integer) $edad_string;
	var_dump($respuesta);
	
	$pelicula = "Viernes 13"; //Tipo string
	$pelicula_integer = (int) $pelicula;
	var_dump($pelicula_integer);
	
	$movie = "12 monos";
	$movie_integer = (int) $movie;
	var_dump($movie_integer);
?>