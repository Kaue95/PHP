<?php 
/*7. Efetuar o cálculo da quantidade de litros de combustível gastos em uma viagem,
sabendo-se que o carro faz 12 km com um litro. Deverão ser fornecidos o tempo
gasto na viagem e a velocidade média. Utilizar as seguintes fórmulas: distância =
tempo * velocidade litros usados = distancia /12
->Kaue Vinicius da Silva Sousa*/

$tempogasto=2;
$velocidademédia=50;
$distancia;
$litrosusados;

echo "&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Esse programa efetua o cálculo da quantidade de litros de combustível gastos em uma viagem!<br/><hr/>";

	echo "Digite o tempo gasto de viagem: ".$tempogasto."<br/>";
	echo "Digite a velocidade média de viagem: ".$velocidademédia."<br/><hr/>";

	$distancia = $tempogasto * $velocidademédia;
	$litrosusados = $distancia/12;

	echo "A quantidade de litros usados nesta viagem é de: ". $litrosusados. " litros.<hr/>";

	echo "A distancia percorrida nesta viagem é de: ". $distancia."km.<hr/>";
	


 ?>