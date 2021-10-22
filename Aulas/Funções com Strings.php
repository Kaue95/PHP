<?php 

	$texto = "micro Computador";

	$tamanho = strlen($texto); //tamanho da string

	echo "<br/>". $texto." possui ". $tamanho." caracteres";
	echo "<br/>".strtoupper($texto);
	echo "<br/>".strtolower($texto);
	echo "<br/>".ucfirst($texto);
	echo "<br/>".ucwords($texto);

	// 3 caracteres a partir da posição 13

	echo "<br/>".substr($texto,13, 3);

	echo "<br/>".str_replace("micro", "Nano",$texto);
	echo "<br/>";

 ?>

 <?php 

 	//Data e hora
 	$dataAtual = date("d/m/y");

 	echo "<br/>Hoje é: ".$dataAtual."<br/>";

 	$hora = date("h:i:s");

 	echo "<br/>Agora são:" .$hora."<br/>";
 	$dataHora = date("d/m/y h:i:s");
 	echo "<br/>Data e hora: ".$dataHora."<br/>";

  ?>