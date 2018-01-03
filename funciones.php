<?php 
	/*
		Para saber la version de php
			phpversion();
		
		$variable = nombre_funcion($parametro1, $aprametro2);
		
		Componentes de una función:
			Nombre de la función
			Tipo de dato que genera
			Lista de parámetros que recibe
			Ejemplo:
				Nombre: suma
				Tipo de dato: numérico
				Parámetros: $numero, $numero2, ambos integer
	
	*/
	//$valor = suma(15,202);
	function suma($n1,$n2){
		$resultado = $n1 + $n2;
		echo "El resultado es: $resultado";
	}
	suma(15,202);
	//echo (suma);
		
 ?>