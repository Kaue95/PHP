<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Vetores</title>
</head>
<body>
	<p>Exemplo de declaração de variavel sem array</p>
		<?php 
			$nome1 = "Maria";
			$nome2 = "João";
			$nome3 = "Pedro";
			$nome4 = "Paulo";
			$nome5 = "Lucas";
			echo "$nome1<br/>$nome2<br/>$nome3<br/>$nome4<br/>$nome5<br/>";

		 ?>

	<p>Exemplo de declaração de variavel com array</p>

	<?php 

		$nome = array("Maria","João","Pedro","Paulo","Lucas");

		echo "Os nomes no array<br/>";

		foreach($nome as $nomes){
			echo "<br/>".$nomes;
		}

	 ?>


	 <?php 	
	 		echo "<br/><br/>";
	 		$num = array(1,2,3,4,5);

	 		foreach( $num as $valor){
	 			echo "Valor é $valor <br/>";
	 		}

	 		echo "<br/><br/>";
	 		$num[0] = "um";
	 		$num[1] = "dois";
	 		$num[2] = "três";
	 		$num[3] = "quatro";
	 		$num[4] = "cinco";

	 		foreach( $num as $valor){
	 			echo "Valor é $valor <br/>";
	 		}
	  ?>

	  <?php 
			echo "<br/><br/>";

			$salarios = array("João" = 2000,"Pedro" = 1000, "Maria" => 500);

			echo "Salário de João é ".$salario['João']."<br/>";
			echo "Salário de João é ".$salario['Pedro']."<br/>";
			echo "Salário de João é ".$salario['Maria']."<br/>";

			$salario['João'] = "Alto";
			$salario['Pedro'] = "Medio";
			$salario['Maria'] = "Baixo";

			echo "Salário de João é ".$salario['João']."<br/>";
			echo "Salário de João é ".$salario['Pedro']."<br/>";
			echo "Salário de João é ".$salario['Maria']."<br/>";
	   ?>


</body>
</html>