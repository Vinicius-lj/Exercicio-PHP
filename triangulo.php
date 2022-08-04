<?php 

	$lado1 = $_POST['lado1'];
	$lado2 = $_POST['lado2'];
	$lado3 = $_POST['lado3'];

	if (abs($lado2 - $lado3) < $lado1 && $lado1 < ($lado2 + $lado3)) {
		if (abs($lado1 - $lado3) < $lado2 && $lado2 < ($lado1 + $lado3)){
			if (abs($lado1 - $lado2) < $lado3 && $lado3 < ($lado1 + $lado2)){
				echo "Triângulo válido. <br><br>";
				if($lado1 == $lado2 && $lado1 == $lado3){
					echo "Este triângulo é EQUILÁTERO.";
				}elseif($lado1 !== $lado2 && $lado1 !== $lado3 && $lado2 !== $lado3){
					echo "Este triângulo é ESCALENO.";
				}else{
					echo "Este triângulo é ISÓSCELES.";
				}
			}else{
				echo "Estes valores não são de um triângulo.";
			}
		}else{
			echo "Estes valores não são de um triângulo.";
		}
	}else{
		echo "Estes valores não são de um triângulo.";
	}	
 	
?>