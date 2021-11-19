<?php 
	echo "FOPEN()<br/> Abrir um arquivo na maquina ou em uma remota<br/>A função retorna FALSE  se abertura do arquivo falhar.";

	//resorce fopen(string $nome_arquivo, string $modo[bool $usar_path[, resource $contexto]])

	echo "<br/><br/>Mode do Fopen();";
	echo "<br/>--> Aula 17 <-- <br/>";

	echo "__________________________________________________
	<br/>";

	echo "<br/>FCLOSE()<br/> Fecha um ponteiro para um arquivo aberto --.retorna True ou false <br/>";

	//bool fclose(resource $file)

	echo "__________________________________________________
	<br/>";

	echo "<br/>Feof()<br/> Verifica se o fim do arquivo foi atingido, retorna true se estiver no fim do arquivo, caso um erro ocorra ela retorna false <br/>";

	//bool feof(resource $file)
	echo "__________________________________________________
	<br/>";

	echo "<br/>FGETS()<br/> Lê uma linha de um ponteiro de arquivo, retorna string com o tamanho de até -1 length <br/>";

	//string fgets (resource $file[,int $length])

	echo "__________________________________________________
	<br/>";

	echo "<br/>FGETC()<br/> Lê um caractere do ponteiro do arquivo e retorna a string contendo o caractere lido do ponteiro passado por handle <br/>";

	//string fgets (resource $file)

	echo "__________________________________________________
	<br/>";

	echo "<br/>FWRITE()<br/> A função escreve o contéudo para o stream de arquivo apontado por file, fwrite retorna o numero de bytes escritos ou false em caso de erro <br/>";

	//int fwrite(resource $file, string $conteudo[,int $lenght])
	echo "__________________________________________________
	<br/>";

	
 ?>