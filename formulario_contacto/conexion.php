<?php 
	try {
		//codig
		$conexion = new PDO('mysql:host=localhost:8889;dbname=sakila', 'root', 'root');
		//echo "Conexión OK" . '<br />';

		$resultados = $conexion->query('select * from actor');
		//echo $resultados;
		 foreach ($resultados as $fila) {
			# code...
			
			echo $fila['actor_id'] . ' - ' . $fila['first_name'] . '<br />';
		}

	}
	catch(PDOException $e) {
		//Mostrar error
		echo "Error: " . $e->getMessage();
	}
 ?>