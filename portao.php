<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>PORTAS / PORTOES</title>
	<meta http-equiv="refresh" content="5"> 	<!-- Refresh automático -->
	<link rel = "stylesheet" type = "text/css" href = "estilos1.css">
</head>

<body class = fundo>
	<h1 class = titulo>PORTAO</h1>
	
	<div class="tabeladetalhes">
		
		<h3>PORTAO ENTRADA:</h3>
		<p>	
		<?php
			$file = "files/portas/portao/portao_entrada.txt";
  			$status = file_get_contents($file);
  			if ($status == 0) {
   					 echo "Livre";
  			} else {
   					 echo "Ocupado";
 					 }
			?>
			<?php 
				echo $valorportas = file_get_contents("files/portas/portao/portao_entrada.txt"); 
			?>			

		<h3>PORTAO SAIDA:</h3>
		<p>	
			<?php
			$file1 = "files/portas/portao/portao_saida.txtt";
  			$status = file_get_contents($file1);
  			if ($status == 0) {
   					 echo "Livre";
  			} else {
   					 echo "Ocupado";
 					 }
			?>
			<?php 
				echo $valorportas = file_get_contents("files/portas/portao/portao_saida.txt"); 
			?>						

		<p>

	<a href="index.html">Página inicial</a>	
	</div>
</body>

</html>