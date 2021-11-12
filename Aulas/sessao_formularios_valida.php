<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Sessão - Implementando os formulários</title>
	<?php 
		session_start();
		if ($_SESSION["nome"] != "master") {
			session_destroy();
			header("location:sessao_implementando_formularios.php")
			
		}
	 ?>
</head>
<body>
	<b>Página autorizada.</b>
</body>
</html>