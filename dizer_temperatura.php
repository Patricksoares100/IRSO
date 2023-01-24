<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>TEMPERATURA (DIZER TEMPERATURA)</title>
	<meta http-equiv="refresh" content="5"> 	<!-- Refresh automático -->
	<link rel = "stylesheet" type = "text/css" href = "estilos1.css">
</head>

<body class = fundo>
	<h1 class=tabeladetalhes>TEMPERATURA (DIZER TEMPERATURA)</h1>
	
	<div class=tabeladetalhes>
		<h3>VALOR TEMPERATURA:</h3>
		<p>	
			<?php 
				echo $valorTemperatura = file_get_contents("files/temperatura/valorTemp.txt"); 
			?>				

		<h3>AC:</h3>
		<p>	
			<?php 
				echo $valorTemperatura = file_get_contents("files/temperatura/AC.txt"); 
			?>				

		<h3>HORA:</h3>
		<p>	
			<?php 
				echo $valorTemperatura = file_get_contents("files/temperatura/hora.txt"); 
			?>				

		<h3>AQUECIMENTO:</h3>
		<p>	
			<?php 
				echo $valorTemperatura = file_get_contents("files/temperatura/aquec.txt"); 
			?>				

		<p>
	<a href="index.html">Página inicial</a>	
	</div>
</body>

</html>