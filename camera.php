<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>CAMERA (LIGADA/DESLIGADA)</title>
	<meta http-equiv="refresh" content="5"> 	<!-- Refresh automático -->
	<link rel = "stylesheet" type = "text/css" href = "estilos1.css">
</head>

<body class = fundo>
	<h1 class=tabeladetalhes>CAMERA (LIGADA/DESLIGADA)</h1>
	
	<div class=tabeladetalhes>
<h3>CAMERA: </h3>
		<p>	
			<?php 
				echo $valorTemperatura = file_get_contents("files/camera/camera.txt");
			?>				

		<p>
	<a href="index.html">Página inicial</a>	
	</div>
</body>

</html>