<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>DETALHE - weather API</title>
    <link rel="stylesheet" type="text/css" href="estilos.css">	
	<link rel = "stylesheet" type = "text/css" href = "estilos1.css">
</head>

<body class = fundo>
	<h1>DRENADOR AGUA (LIGADO/DESLIGADO)</h1>
	
	<div class=tabeladetalhes>
		
		<h2>AGUA (LIGADO/DESLIGADO):</h2>
		<p>	
		<h3>DRENADOR:</h3>
			<?php 
				echo $valorIncendio = file_get_contents("files/drenador/agua.txt"); 
			?>			
		<p>

	<a href="index.html">Página inicial</a>	
</div>
</body>

</html>