<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>TEMPERATURA (DIZER TEMPERATURA)</title>
	<meta http-equiv="refresh" content="5"> 	<!-- Refresh automático -->
</head>

<body>
	<h1>AC (LIGADO/DESLIGADO)</h1>
	
	<div>
		<h3>AC:</h3>
		<p>	
			<?php 
				echo $valorTemperatura = file_get_contents("files/temperatura/AC.txt"); 
			?>				
		<p>
	<a href="index.html">Página inicial</a>	
	
</body>

</html>