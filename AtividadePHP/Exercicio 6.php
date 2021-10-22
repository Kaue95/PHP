<!DOCTYPE html>
<html>
<head>
	<title>Exercicio 6</title>
	<style type="text/css">
		text{
			font-size: 30px;
		}
	</style>
</head>
<body>
	<h1 style="text-align: center;">Calculo de volume de uma lata de óleo!<hr/></h1>
	<?php
	/*6. Calcular e apresentar o valor do volume de uma lata de óleo, utilizando a fórmula:
	volume: 3.14159*r2*altura*/
	$volume = 3.14159;
	$raio = 8;
	$altura=20;
	$lata;
	$lata = $volume* ($raio * $raio) * $altura;

		echo "<text> Volume: ". $volume ." * <br/>Raio²: ".$raio." * <br/>altura: ".$altura."cm"." = <hr/>";
		printf("<text>O volume de uma lata de óleo é: %.2f ",$lata);

	 ?>
</body>
</html>