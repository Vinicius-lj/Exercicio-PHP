<?php

	$sum = 0;
	$count = 0;

	#Considering a null number
	foreach ($_POST as $value) {
		if($value != null){
			$sum = $sum + $value; //Alternative: $sun += $value
			$count++;
		}
	}

	$avg = $sum / $count;
	echo "A soma dos valores é $sum e sua média aritimérica é $avg.<br><br>";



	#Considering a full array
	echo "A soma dos valores é " .array_sum($_POST). " e sua média aritimérica é ".array_sum($_POST)/count($_POST). ". ";


?>