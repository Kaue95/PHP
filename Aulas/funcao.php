<?php 
	
	$ano = 2021;
	function exibir($parametro){
		$parametro = $parametro + 4;
		return $parametro;
	}

		echo "Estamos em " .$ano. " e daqui a 4 anos estaremos em " .exibir($ano);





 ?>
 
 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 </head>
 <style type="text/css">
 	
 	.ano{
 		display: inline-block;
 	}
 </style>
 <body>
 		<div class="ano" >
	 	<?php 
		$i;
		$ano = 2021;
		function exibir(){
			GLOBAL $ano;
			$ano++;
			return $ano;
		}
			for ($i=0; $i < 20; $i++){ 
			 
			echo "<br/> Ano ".exibir();
			
	}
	 ?>

 		</div>
 </body>
 </html>