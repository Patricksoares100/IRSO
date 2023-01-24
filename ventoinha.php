<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>VENTOINHA </title>
	<meta http-equiv="refresh" content="5">
	<link rel = "stylesheet" type = "text/css" href = "estilos1.css">
 	<!-- Refresh automático -->
</head>

<body class = fundo>
	
	<h1 class = titulo >VENTOINHA (LIGADA/DESLIGADA)</h1>
	<div class=tabeladetalhes>
		<p>	
		<h3>VENTOINHA: </h3>
			<?php 
				echo $valorIncendio = file_get_contents("files/ventoinha/ventoinha.txt");
			?>			
		<p>

	<a href = "index.html">Página inicial</a>
</div>
</body>

</html>