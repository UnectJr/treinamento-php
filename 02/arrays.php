<?php
	
	/*
		Arrays: 
		- Indexados
		- Associativo
		- Multi-dimensional
	*/

	// Indexados
	$pessoas = array('Maria', 'Pedro', 'Sara');
	$ids = array(23, 55, 12);

	$carros = ['Honda', 'Toyota', 'Ford'];
	$carros[3] = 'Fiat';
	$carros[] = 'BMW';

	print_r($carros);
	
	echo "</br>";


	// Associative arrays
	// Equivalente ao JSON
	$pessoas = array('Maria' => 35, 'Pedro' => 32, 'Sara' => 37);
	$ids = [22 => 'Maria', 44 => 'Jose', 63 => 'Sara'];

	
	//Multi-Dimensional
	$cars = array(
		array('Honda', 20, 10),
		array('Toyota', 30, 20),
		array('Ford', 23, 12)
	);

	echo $cars[1][2];
?>