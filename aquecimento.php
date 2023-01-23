<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>TEMPERATURA (DIZER TEMPERATURA)</title>
	<meta http-equiv="refresh" content="5"> 	<!-- Refresh automático -->
</head>

<body>
	<h1>TEMPERATURA (DIZER TEMPERATURA)</h1>
	
	<div>
<h3>AQUECIMENTO:</h3>
		<p>	
			<?php 
				echo $valorTemperatura = file_get_contents("files/temperatura/aquec.txt"); 
			?>				

		<p>
	<a href="index.html">Página inicial</a>	
	
</body>

</html>