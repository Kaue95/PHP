<?php 
		
	$n = 25;
	echo "While Negativo<br/>";
	while ($n >= 0) {

		echo "&nbsp;&nbsp;". $n;
		$n--;
	}
?>

<?php 
		
	$n = 0;
	echo "<br/><br/>";
	echo "While Positivo<br/>";
	while ($n <= 25) {

		echo "&nbsp;&nbsp;". $n;
		$n++;

	}
?>

<?php 
		
	$n = 0;
	echo "<br/><br/>";
	echo "Do While<br/>";
	do{
		echo "&nbsp;&nbsp;". $n;
		$n++;
	}while($n <= 25);
?>

<?php 
		
	$n = 500;
	echo "<br/><br/>";
	echo "Do While +2<br/>";
	do{

		echo "&nbsp;&nbsp;".$n;
		$n+=2;

	}while($n <= 550);
?>

<?php 
		
	$n = 0;
	echo "<br/><br/>";
	echo "For<br/>";
	for($n=0;$n<=25;$n++){

		echo "&nbsp;&nbsp;".$n;

	}
?>

<?php 
	$nomes = array('João','José','Paulo','Pedro');
	echo "<br/><br/>";	
	echo "Foreach<br/>";
	foreach ($nomes as $item) {

		echo "&nbsp;&nbsp;".$item;
	}
?>

<?php 
	$x=0;
	echo "<br/><br/>";
	echo "For com estrutura de decisão<br/>"; 
		
			echo "&nbsp;&nbsp;".$x;
			
			if ($x == 10)
				
				break;
				$x++;
		}
?>

<?php 
	echo "<br/><br/>";
	echo "Goto<br/>";
 	for ($x=1; $x < 100; $x++) { 

 		if($x == 10)
 			goto desvio;

 		echo "&nbsp;&nbsp;".$x;
 	}
 	desvio:
 	echo "&nbsp; -> Pronto, aqui está o desvio!";
?>

<?php 
  	echo "<br/><br/>";
	echo "2º Goto (Impar) <br/>";
	for ($x=1; $x <=100 ; $x++) { 
		if ($x % 2 == 0) {
			continue;
		}
		echo "&nbsp;".$x;
	}
?>