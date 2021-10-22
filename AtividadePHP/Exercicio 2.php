<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<style type="text/css">
    text{
      font-size: 20px;
    }
</style>
<body>

<h1>Cálculo de salário liquido!<hr/></h1>
<h2>Digite aqui suas informações:<hr/></h2>
<?php 
/*2. Criar um programa para cálculo do salário líquido em que três valores devem ser
informados: a quantidade de horas trabalhadas, o salário hora e o número de
dependentes. O programa deve mostrar os valores conforme tabela seguinte:
Informações para os Cálculos:
Salário bruto Horas trabalhadas * salário hora + (50 * número de dependentes)
Desconto INSS Se salário bruto <= 1000 INSS=salário bruto * 8.5/100
Se salário bruto > 1000 INSS=salário bruto * 9/100
Desconto IR Se salário bruto <= 500 IR=0
Se salário bruto > 500 e <= 1000 IR=salário bruto*5/100
Se salário bruto > 1000 IR=salário bruto*7/100
Salário líquido Salário bruto – INSS – IR*/

  $salbruto;
  $qtdhora = 45;
  $salhora = 25;
  $num = 2;
  $inss;
  $ir=0;
  $saliq;

  
  $salbruto = ($qtdhora * $salhora) + (50 * $num);
  if ($salbruto <= 1000) {
    $inss = $salbruto * (8.5/100);
  }
  if ($salbruto > 1000) {
     $inss = $salbruto * (9/100);
  }
  if ($salbruto <= 500) {
      $IR = 0;
  }
  if ($salbruto > 500 && $salbruto <= 1000) {
    $ir = $salbruto * 5/100;  
  }else{
    $ir = $salbruto * 7/100;  
    $saliq = $salbruto - $inss - $ir;
  }

  echo "<text>O salario bruto é de: R$ ".$salbruto."<br/>";
  echo "<text>O desconto do INSS é de: R$ ".$inss."<br/>";
  echo "<text>O desconto de Imposto de Renda: R$".$ir."<hr/>";

 ?>
  
 </body>
</html>