<?php 
	echo "<br/> Olá Seja Bem vindo!".$_SERVER['REMOTE_ADDR']."<br/>";
	echo "Você está utilizando o navegador: ".$_SERVER['HTTP_USER_AGENT']. "<br/>"; 

	define("PI", 3.14);
	define("DISC", "Matemática");

	echo "O valor de PI é: " .PI. "<br/>";
	echo "O nome do curso é: " .DISC;

	$CURSO = 7;
	$CURSO +=2; 

	echo "<br/> O id do curso é: " .$CURSO. "<br/><br/><br/>";

	$op=2;
	switch ($op) {
		case 1:
			echo "A opção 1 foi selecionada";
		break;

		case 2:
			echo "A opção 2 foi selecionada";
		break;

		case 3:
			echo "A opção 3 foi selecionada";
		break;

		default:
			echo "Opção Incorreta!";
		break;
	}
		
	
 ?>
