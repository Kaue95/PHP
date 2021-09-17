<?php 
/* Desenvolver programa que peça ao usuário para cadastrar uma senha; na
sequência, deve pedir ao usuário que digite duas variáveis reais, e irá calcular a
divisão da primeira pela segunda. O programa irá pedir ao usuário que digite sua
senha e se estiver correta ela mostra o resultado da divisão. Senão mostra uma
mensagem de erro e encerra o aplicativo.
->Kaue Vinicius da Silva Sousa*/
$digitada=153456; 
$senha= 123456;	/*Aqui pode ser feito a alteração dos valores*/
$num1= 50;
$num2 = 5;
$res = $num1 / $num2;

	echo "&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Olá, Digite uma senha para efetuar o cadastramento!<br/><hr/>";
	echo "A senha digitada foi: ".$senha. "<br/>";

	echo "Digite dois números reais!<hr/>";
	echo "Digite o primeiro número: ".$num1."<br/>";
	echo "Digite o segundo número: ".$num2."<br/>";

	echo "Digite sua senha!<br/>";

	if ($digitada == $senha) {
		echo "<hr/>Como a senha digitada é a mesma que está cadastrada, o valor da divisão dos valores é ".$res."<hr/>";
	}else{
		echo "<hr/>A senha digitada não corresponde a senha cadastrada, <br/>Porfavor tente novamente<hr/>";
	}
 ?>