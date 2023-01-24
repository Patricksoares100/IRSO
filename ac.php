<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>TEMPERATURA (DIZER TEMPERATURA)</title>
	<meta http-equiv="refresh" content="5"> 	<!-- Refresh automático -->
	<link rel = "stylesheet" type = "text/css" href = "estilos1.css">
</head>

<body class = fundo>
	
	<h1 class = titulo >AC (LIGADO/DESLIGADO)</h1>
	<div class=tabeladetalhes>
	<div>
		<h3>AC:</h3>
		<p>	
			<?php 
				echo $valorTemperatura = file_get_contents("files/temperatura/AC.txt"); 
			?>				
		<p>
	<a href="index.html">Página inicial</a>	
</div>
</body>

</html>