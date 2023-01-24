<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name = "viewport" content = "width=device-width, initial-scale=1">
    <title>INCENDIO</title>
    <link rel = "stylesheet" type = "text/css" href = "estilos1.css">
</head>

<body class = fundo>
	<h1 class = titulo>INCENDIO</h1>
	
	<div class="tabeladetalhes">
		
		<h2>SPRINKLER (LIGADO/DESLIGADO): </h2>
		<p>	
		<h3>SPRINKLER 1: </h3>
			<?php 
				echo $valorIncendio = file_get_contents("files/incendio/sprinkler01.txt");
			?>			
		<?php
  			$file   = "files/incendio/sprinkler01.txt";
  			$status = file_get_contents($file);
  			if ($status == 0) {
   					 echo "Livre";
  			} else {
   					 echo "Ocupado";
 					 }
			?>
		<h3>SPRINKLER 2: </h3>
		<p>	
			<?php 
				echo $valorIncendio = file_get_contents("files/incendio/sprinkler02.txt");
			?>			
			<?php
			$file1  = "files/incendio/sprinkler02.txt";
			$status = file_get_contents($file1);
  			if ($status == 0) {
   					 echo "Livre";
  			} else {
   					 echo "Ocupado";
 					 }
			?>

		<p>
		</div>
	<a href = "index.html">Página inicial</a>
	
</body>

</html>