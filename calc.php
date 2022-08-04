<?php

	if($_POST['operador'] == '+'){
		$soma = $_POST['valor01'] + $_POST['valor02'];
		echo "o valor da soma é: $soma.";
	}elseif ($_POST['operador'] == '-') {
		$sub = $_POST['valor01'] - $_POST['valor02'];
		echo "o valor da subtração é: $sub.";	
	}elseif($_POST['operador'] == '*') {
		$multi = $_POST['valor01'] * $_POST['valor02'];
		echo "o valor da multiplicação é: $multi.";	
	}else{
		$div = $_POST['valor01'] / $_POST['valor02'];
		echo "o valor da divisão é: $div.";
	}

	
	//if($_POST['dividir'])
?>