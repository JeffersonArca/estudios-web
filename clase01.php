<?php 
	//Tipos de datos
	$cadena = "Tipo de datos string";
	$entero = 25; //variable de tipo integer
	$flotante = 3.14; //varialbe de tipo float
		//ejemplo
		$pi = 3.1415; //valor de PI, (Float)
		$radio = 15; //Radio de un circulo (Integer)
			//Se pueden hacer operaciones matemáticas combinando Integer y Float
			$area = $pi * $radio * $radio; //área de un círculo
			var_dump($area);
			var_dump($pi);
	$ayer_fue_viernes = TRUE; //variables booleanas
	$mañana_es_lunes = FALSE;

	//Variables tipo array
	/*
		Sintaxis 
		$variable = array(
			'clave1' => 'valor1',
			'clave2' => 'valor2',
			...
		);
		
		Se puede omitir la clave:
		$variable = array('valor1, valor2,...);
		
		Que equivale a :
		$variable = array(
			0 => 'valor1',
			1 => 'valor2',
			...
		);
		
	*/
	
	//Ejemplo
	/*
		Se necesita almacenar la población de 5 ciudades
			Nueva York	París		Tokio		Sidney		Buenos Aires
			8,333,697	2,243,833	13,157,428	4,627,345	2,890,151
	*/
		//Sin array:
		$poblacion_ny = 8333697;
		$poblacion_paris = 2243833;
		$poblacion_tokio = 13157428;
		$poblacion_sidney = 4627345;
		$poblacion_buenos_aires = 2890151;
		
		//Con array:
		$poblacion = array(
			'ny' => 8333697,
			'paris' => 2243833,
			'tokio' => 13157428,
			'sidney' => 4627345,
			'buenos_aires' => 2890151
		);
		var_dump($poblacion);
		
		//Imprimir un array
		echo $poblacion['paris'];
		
		$dias_semana = array(0 =>'lunes', 1 => 'martes');
		echo $dias_semana[1];
		$horario = array(
			0 => 'lunes - 08:10 -10:00 = Matemáticas. 10:30 - 12:00 = Física',
			1 => 'martes - 08:10 -10:00 = Programación. 10:30 - 12:00 = Redes'
			);
		var_dump($horario);
		echo $horario[0];
 ?>