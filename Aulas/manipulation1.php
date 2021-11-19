<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="manipulacao.css">
</head>

<body>
<?php 

	$file = fopen("arquivo.txt","r") or exit("Não foi possivel abrir o arquivo!");

	while (!feof($file)) {
		$linha = fgets($file);

	echo "<p>".$linha."</p>" . "<br/>"; 
	}

	fclose($file);

	
 ?>

</body>
</html>
