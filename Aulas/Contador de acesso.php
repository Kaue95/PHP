<?php 

	$arquivo = "contador.txt";
	if (file_exists($arquivo)) {
		$file = fopen($arquivo, "r");
		//função chop remove os espaços e quebra de linha existentes no fim de uma string 

		$cont = chop(fgets($file));
		fclone($file);
		$count++;
	}else{
		$count = 1;
	}


$file2 = fopen($arquivo, "w");
fwrite($file2, $count);
fclose($file);


 ?>