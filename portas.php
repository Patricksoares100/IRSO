<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>PORTAS </title>
	<meta http-equiv="refresh" content="5"> 
	<link rel="stylesheet" type="text/css" href="estilos.css">			
</head>	<!-- Refresh automático -->

<body>
	<h1>PORTA</h1>
	
	<div>
		
		<h3>PORTA ENTRADA: </h3>
		<p>	
		<?php
			$file   = "files/portas/portao/portao_entrada.txt";
			$status = file_get_contents($file);
  			if ($status == 0) {
   					 echo "Livre";
  			} else {
   					 echo "Ocupado";
 					 }
			?>
			<?php 
			
			<?php 
				echo $valorportas = file_get_contents("files/portas/portas/porta_entrada.txt");
			?>			

		<h3>PORTA SAIDA: </h3>
		<p>	
			<?php
		$file1  = "files/portas/portao/porta_saida.txt";
		$status = file_get_contents($file1);
		  if ($status == 0) {
					echo "Livre";
		  } else {
					echo "Ocupado";
				  }
		?>
		<?php 

			<?php 
				echo $valorportas = file_get_contents("files/portas/portas/porta_saida.txt");
			?>						
		<p>


			<?php
  			$file   = "files/estacionamento/P01.txt";
  			$status = file_get_contents($file);
  			if ($status == 0) {
   					 echo "Livre";
  			} else {
   					 echo "Ocupado";
 					 }
			?>

		<p>

	<a href="index.html">Página inicial</a>	
	
</body>

</html>