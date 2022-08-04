<?php
	
	echo "<h2>Inscrição Concluida</h2><br>";
	foreach ($_POST as $key => $value) {
		echo $key.": ".$value."<br>";
	}

?>