<?php 
	
	$file = fopen("arquivo.txt","r");
	while (!feof($file)) {
		$linha = fgets($file);

	echo $linha . "<br/>";
	}

	fclose($file);
	
 ?>