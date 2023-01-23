<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>CAMERA (LIGADA/DESLIGADA)</title>
	<meta http-equiv="refresh" content="5"> 	<!-- Refresh automático -->
</head>

<body>
	<h1>CAMERA (LIGADA/DESLIGADA)</h1>
	
	<div>
<h3>CAMERA: </h3>
		<p>	
			<?php 
				echo $valorTemperatura = file_get_contents("files/camera/camera.txt");
			?>				

		<p>
	<a href="index.html">Página inicial</a>	
	
</body>

</html>