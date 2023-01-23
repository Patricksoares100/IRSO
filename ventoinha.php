<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>VENTOINHA </title>
	<meta http-equiv="refresh" content="5">
	<link rel="stylesheet" type="text/css" href="estilos.css">	
 	<!-- Refresh automático -->
</head>

<body>
	<h1>VENTOINHA (LIGADA/DESLIGADA)</h1>
		
		<p>	
		<h3>VENTOINHA: </h3>
			<?php 
				echo $valorIncendio = file_get_contents("files/ventoinha/ventoinha.txt");
			?>			
		<p>

	<a href="index.html">Página inicial</a>	
	
</body>

</html>