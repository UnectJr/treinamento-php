<?php
	/*
		Funções
		Camel Case - myFunction() (OO)
		Lower Case - my_function() (Procedural)
		Pascal Case - MyFunction()
	*/

	// Declara uma função
	function myFunc(){
		echo 'Isto é uma função !!!';
	}

	// Executa a função
	myFunc();

	echo "<br>";

	// Passando parametros
	// Define valor padrao
	function myParamFunc($name = 'Pedro'){
		echo "Ola, $name <br>";
	}

	myParamFunc();
	myParamFunc('Higor');

	//  Retornando Valor
	function addNumbers($num1, $num2){
		return $num1 + $num2;
	}

	echo addNumbers(2,3);

	echo "<br>";

	// Por referencia

	$myNum = 10;

	function addFive($num){
		$num += 5;
	}

	function addTen(&$num){
		$num += 10;
	}

	addFive($myNum);

	echo "Value: $myNum<br>";

	addTen($myNum);

	echo "Value: $myNum<br>";
?>