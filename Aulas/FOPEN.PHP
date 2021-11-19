<?php 
	$file = fopen("arquivo.txt","r") or exit("Não foi possivel abrir o arquivo!");

	while (!feof($file)) {
		$linha = fgets($file);

	echo $linha . "<br/>"; // LER O ARQUIVO 
	}

	fclose($file);

	
 ?>