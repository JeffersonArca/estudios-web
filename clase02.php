<?php 
	$nombre_producto = " Polo de Css";
	$nombre_deseo = "Yo quiero un ";
	var_dump($nombre_deseo . $nombre_producto);	//Concatenar
	echo("El valor de la variable es" . $nombre_producto);
	
	$nombre_curso = 'Septimo';
	$nombre_modalidad = 'semipresencial';
	
	$resultado1 = 'Estudio en el $nombre_curso nivel'; //utilizar apostrofe hace que el navegador no detecte la variable
	var_dump($resultado1);
	
	$resultado2 = "de la sección $nombre_modalidad"; //Utilizar comillas el navegador detecta la variable
	var_dump($resultado2);

	$buena_practica = "Estudio en el {$nombre_curso} nivel";
	var_dump($buena_practica);

	$modelo_pc = "Acer";
	$ram_pc = "2gb";
	$procesador_pc = "core i5";
	$valor = 752.25;
	var_dump($valor);
	
	$pc = array(
		'modelo' => 'Acer',
		'ram_pc' => '2gb',
		'procesador_pc' => 'core i5',
		'valor' => $725.25
	);
	var_dump($pc);
 ?>