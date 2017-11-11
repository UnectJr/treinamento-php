<?php
	// Comentários de uma linha
	# Comentários de uma linha
	/*
		Comentários de 
		muitas linhas
	*/

	/*
		Variaveis:
		- Prefixo $
		- Começa com letras ou underscore
		- Somente letras, numeros e underscores
		- Case sensitive
	*/

	/* 
		Tipo de dados:
		String
		Integers
		floats
		Booleans
		Arrays
		Objects
		NULL
	*/

	$txt = 'Olá Mundo!';
	$float1 = 4.4;
	$bool1 = true;
	$num1 = 4;
	$num2 = 10;
	$sum = $num1 + $num2;

	echo $sum;

	// Pula linha
	echo "</br>";

	$string1 = 'Unect';
	$string2 = 'Jr';
	$full = $string1 .' '. $string2.'!';
	echo $full;

	// Pula linha
	echo "</br>";

	// Define um constante
	define('PI', 3.14);

	echo PI;
?>