<?php 
	/*5. Criar um sistema que efetue o cálculo do salário líquido de um professor. Os
dados fornecidos serão: valor da hora aula, número de aulas dadas no mês e
percentual de desconto do INSS. 
->Kaue Vinicius da Silva Sousa*/
/*Percentual do INSS
até R$1.100,00 = 7,5%
de 1.100,01 até 2.203,48 = 9%	
de 2.203,49 até 3.305,22 = 12%
de 3.305,23 até 6.433,57 = 14%*/ 

	echo "&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Esse programa efetua o cálculo do salário líquido de um professor!<br/><hr/>";
$salario;
	$saliquido;                                                     
	$valorhora= 17.95;                                             
	$numaulas = 64; /*Digite os valores aqui para o cálculo*/
	$INSS;                                                              
	$desct;
	$sw=1;                               

	echo "Digite o valor da hora aula: ".$valorhora."<br/>";
	echo "Digite o número de aulas: ".$numaulas."<br/>";
	echo "Digite um valor de 1 a 4 para o  percentual de desconto do INSS:<br/>";
	echo " 1- R$1.100,00<br/> 2- R$1.100,00 até R$2.203,49<br/> 3- R$2.203,49 até R$3.305,22<br/> 4- R$3.305,23 até 6.433,57<br/>";
	switch ($sw) {
		case 1:
			$INSS=0.075; 
		break;
		case 2:
			$INSS=0.09; 
		break;
		case 3:
			$INSS=0.12; 
		break;
		case 4:
			$INSS=0.14; 
		break;

		default:
			echo "Número inválido";
		break;
	}

	 $salario = $numaulas * $valorhora;
	 $desct = $salario * $INSS;
	 $saliquido = $salario - $desct;

	 echo "<hr/>O salário deste professor é de: R$".$saliquido;
	 if ($saliquido < 1100.01) {
	  	echo "<br/>O percentual de INSS é de 7,5%";
	  }else if ($saliquido > 1100.01 || $saliquido < 2203.48) {
	  	echo "<br/>O percentual de INSS é de 9%";
	  }else if ($saliquido > 2203.48 || $saliquido < 3305.22) {
	  	echo "<br/>O percentual de INSS é de 12%";
	  }else if ($saliquido > 3305.22 || $saliquido < 6433.57) {
	  	echo "<br/>O percentual de INSS é de 14%";
	  }
		
	
 ?>