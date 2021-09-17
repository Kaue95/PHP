<?php 
	/*1. Criar um programa que receba o valor de um produto e um código de aumento,
segundo a tabela:
Código Porcentagem
do aumento
1 10
3 25
4 30
8 50
Utilizando a estrutura switch-case, mostrar a saída o novo valor do produto depois
de acrescida a porcentagem correspondente.
->Kaue Vinicius da Silva Sousa
*/ 



	echo "&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Esse programa recebe um valor de um produto e um código de aumento para o mesmo.<br/><hr/>";
	echo "&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Código&nbsp;| Porcentagem<br/><hr/>";

echo "&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;1 &emsp;&nbsp;&nbsp;|&emsp;&emsp;10<br/>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;3 &emsp;&nbsp;&nbsp;|&emsp;&emsp;25<br/>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;4 &emsp;&nbsp;&nbsp;|&emsp;&emsp;30<br/>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;8 &emsp;&nbsp;&nbsp;|&emsp;&emsp;50<hr/>";

	$x=0;
	$pct=0;
	$op=4;
	$case;
	$total;
	switch ($op) {
		case 1:
			$x=1;
			$pct=0.1;
			$case = $x * $pct;
			$total = $case + $x;
			echo "O Codigo ".$x. " teve como o valor alterado para: ".$total."<br/>";
		break;

		case 2:
			$x=3;
			$pct=0.25;
			$case = $x * $pct;
			$total = $case + $x;
			echo "O Codigo ".$x. " teve como o valor alterado para: ".$total."<br/>";
		break;

		case 3:
			$x=4;
			$pct=0.3;
			$case = $x * $pct;
			$total = $case + $x;
			echo "O Codigo ".$x. " teve como o valor alterado para: ".$total."<br/>";
		break;
		case 4:
			$x=8;
			$pct=0.5;
			$case = $x * $pct;
			$total = $case + $x;
			echo "O Codigo ".$x. " teve como o valor alterado para: ".$total."<br/>";
			break;
		default:
			echo "Nenhum valor armazenado no banco de dados";
		break;
	}

 ?>