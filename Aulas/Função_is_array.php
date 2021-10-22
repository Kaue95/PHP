<?php 
		
	$variavel = "Ana";

	$nomes = array("MA" => "Maria","ZE" => "José","PE" => "Pedro");
		echo "is_array: verifica se é um vetor ou não<br/>";
	if (is_array($variavel)) {
		echo "<br/>Variável é um array";
	}else{
			echo "<br/>Variável não é um array";
	}
	if (is_array($nomes)) {
		echo "<br/><br/>Nomes é um array";
	}else{
			echo "<br/>Nomes não é um array";
	}
	echo "<br/>____________________________________________________________";
 ?>

 <?php 
 	echo "<br/><br/>array_unshift: adiciona um item no começo do array ";
 	$nomes = array("Maria","José","Pedro");
 	array_unshift($nomes, "Ana");
 	foreach ($nomes as $item) {
 		echo "<br/><br/>".$item;
 	}
 	echo "<br/>____________________________________________________________";
  ?>

  <?php 
 	echo "<br/><br/>array_push: adiciona um item no final do array ";
 	$nomes = array("Maria","José","Pedro");
 	array_push($nomes, "Ana");
 	foreach ($nomes as $item) {
 		echo "<br/><br/>".$item;
 	}
 	echo "<br/>____________________________________________________________";
  ?>

  <?php 
 	echo "<br/><br/>array_shift: remove um item do começo do array ";
 	$nomes = array("Maria","José","Pedro");
 	$excluido = array_shift($nomes);
 	foreach ($nomes as $item) {
 		echo "<br/><br/>".$item;
 	}
 	echo "<br/><br/> Nome removido ".excluido;

 	echo "<br/>____________________________________________________________";
  ?>

  <?php 
 	echo "<br/><br/>array_pop: remove o item no final do array ";
 	$nomes = array("Maria","José","Pedro");
 	$excluido = array_pop($nomes);
 	foreach ($nomes as $item) {
 		echo "<br/><br/>".$item;
 	}
 	echo "<br/><br/> Nome removido ".excluido;

 	echo "<br/>____________________________________________________________";
  ?>

  <?php 
 	echo "<br/><br/>array_key_exists: Encontra um valor de acordo com a chave dele.";

 	$nomes = array("MA" => "Maria","ZE" => "José","PE" => "Pedro","AN" => "Ana");
 	if (array_key_exists("ZE", $nomes)) {
 		echo "<br/><br/> Nome encontrado no vetor, através da chave.";
 	}

 	echo "<br/>____________________________________________________________";
  ?>

  <?php 
 	echo "<br/><br/> array_search: Busca a chave no array de acordo com o valor<br/>";

 	$nomes = array("MA" => "Maria","ZE" => "José","PE" => "Pedro","AN" => "Ana");
 	$chave = array_search("Ana", $nomes);
 	echo "<br/>Chave de busca realizada: ".$chave;

 	echo "<br/>____________________________________________________________";
  ?>

   <?php 
 	echo "<br/><br/> array_keys: Retorna um array formado por todas as chaves localizadas de outro array<br/>";

 	$nomes = array("MA" => "Maria","ZE" => "José","PE" => "Pedro","AN" => "Ana");
 	$chaves = array_keys($nomes);
 	foreach ($chaves as $item){
 		echo "<br/>".$item;
 	}
 	echo "<br/>";
 	echo "Função para exibir dados de um vetor: ";
 	print_r($chaves);

 	echo "<br/>____________________________________________________________";
  ?>

 <?php 
 	echo "<br/><br/> array_values: Retorna os valores localizados de outro array sem chaves associadas. <br/>";

 	$nomes = array("MA" => "Maria","ZE" => "José","PE" => "Pedro","AN" => "Ana");
 	$valores = array_values($nomes);
 	echo "<br/>";
 	echo "Função para exibir os valores de um vetor: ";
 	print_r($valores);

 	echo "<br/>____________________________________________________________";
  ?>

 <?php 
 	echo "<br/><br/> funções: se locomovem dentro do array <br/>";

 	$nomes = array("MA" => "Maria","ZE" => "José","PE" => "Pedro","AN" => "Ana");

 	echo "<br/> Next: ".next($nomes);
 	echo "<br/> End: ".end($nomes);
 	echo "<br/> Prev: ".prev($nomes);
 	echo "<br/> Reset: ".reset($nomes);

 	echo "<br/>____________________________________________________________";
  ?>

  <?php 
 	echo "<br/><br/> key: Retorna a chave a posição atual do ponteiro <br/>";

 	$nomes = array("MA" => "Maria","ZE" => "José","PE" => "Pedro","AN" => "Ana");

 	while ($chave = key($nomes)){
 		echo "<br/>".$chave;
 		next($nomes);
 	}
 	
 	echo "<br/>____________________________________________________________";
  ?>

<?php 
 	echo "<br/><br/> array_reverse: reverte as ordens dos elementos do vetor. <br/>";

 	$nomes = array("MA" => "Maria","ZE" => "José","PE" => "Pedro","AN" => "Ana");
 	$reverso = array_reverse($nomes);
 	echo "<br/>Valores iniciais:<br/>";
 		print_r($nomes);
 	echo "<br/><br/>Reverso:<br/>";
 	print_r($reverso);
 	
 	echo "<br/>____________________________________________________________";
  ?>

   <?php 
 	echo "<br/><br/> sort: classifica um array ordenando de menor para maior <br/>";

 	$nomes = array("MA","ZE","PE","AN");
	print_r($nomes);
 	sort($nomes);
 	echo "<br/>Ordenado:<br/>";
 	print_r($nomes);

 	echo "<br/>____________________________________________________________";
  ?>