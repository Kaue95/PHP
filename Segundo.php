<?php 

	print "Usando print para exibir na tela <br/>";
$data = "20 de agosto de 2021";
$salario = 850.00;
$cargo = "Estagiário";
$idade = 18;
$resultado = "Verdadeira";

echo "Arquivo criado em $data <br/>";
printf("Seu cargo atual é %s<br/>", $cargo); 
printf("Salário mínimo: R$ %.2f <br>", $salario);

$texto = sprintf("%s recebe R$ %.2f por mês<br/><br/><br/>", $cargo, $salario*2);

echo "$texto";

printf("Sua idade é de %s e ela está %s", $idade, $resultado);





 ?>