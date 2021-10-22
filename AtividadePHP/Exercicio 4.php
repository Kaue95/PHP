<!DOCTYPE html>
<html>
<head>
	<title>Exercicio 4</title>
	
</head>
<body>
	<h2 style="text-align: center;">Olá, Esse algoritmo fornece um desconto de 9% ao valor digitado!!<hr/></h2>
	<div>
		<?php 
	/*4. Em épocas de pouco dinheiro, os comerciantes estão procurando aumentar suas
vendas oferecendo desconto. Desenvolver um aplicativo que possa entrar com o
valor de um produto e imprima o novo valor tendo em vista que o desconto foi
de 9%.*/ 
	
	$valor=500;
	$total;
	$desct;
	//echo "&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Olá, Esse algoritmo fornece um desconto de 9% ao valor digitado!!<hr/>";

	echo  "Digite o valor do produto: R$ ".$valor."<hr/>";
	$desct = $valor * 0.09;
	$total = $desct + $valor;

	echo "O valor do desconto foi: ".$desct."<hr/>";
	echo "O valor total com desconto é de: R$ ". $total."<hr/>";

 ?>
	</div>

</body>
</html>