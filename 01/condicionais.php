<?php
	/*
		Operadores:
		==
		===
		<
		>
		<=
		>=
		!=
		!==

		Operadore Lógicos:

		and  &&
		or   ||
		xor
	*/

	
	$num = 4;

	if($num == 5){
		echo 'valor: 5';
	} elseif($num == 6){
		echo 'valor:  6 ';
	} else {
		echo 'valor: erro';;
	}
	
	echo "</br>";

	// Exemplo switch

	$cor = 'amarelo';

	switch($cor){
		case 'vermelho':
			echo 'Você escolheu Vermelho';
			break;
		case 'azul':
			echo 'Você escolheu Azul';
			break;
		case 'verde':
			echo 'Você escolheu Verde';
			break;
		default:
			echo 'Cor não identificada';
	}
?>