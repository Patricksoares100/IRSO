<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>TEMPERATURA (DIZER TEMPERATURA)</title>
	<meta http-equiv="refresh" content="5"> 	<!-- Refresh automático -->
	<link rel = "stylesheet" type = "text/css" href = "estilos1.css">
</head>

<body class=fundo>
	<!--<img src="https://www.sanfil.pt/wp-content/uploads/2018/03/Parque-Nazar%C3%A9.jpg">-->

	<h1 class=titulo>ESTACIONAMENTO </h1>
	
	<div class="tabeladetalhes">
		<h3>ESTACIONAMENTO 1:</h3>
		<a><img src="" alt="">
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
			<?php 
				echo $valorEstacionamento = file_get_contents("files/estacionamento/P01.txt"); 
			?>				

		<h3>ESTACIONAMENTO 2: </h3>
		<p>	
		<?php
  			$file2  = "files/estacionamento/P02.txt";
  			$status = file_get_contents($file2);
  			if ($status == 0) {
   					 echo "Livre";
  			} else {
   					 echo "Ocupado";
 					 }
			?>
			<?php 
				echo $valorEstacionamento = file_get_contents("files/estacionamento/P02.txt"); 
			?>				

		<h3>ESTACIONAMENTO 3: </h3>
		<p>	
		<?php
  			$file3  = "files/estacionamento/P03.txt";
  			$status = file_get_contents($file3);
  			if ($status == 0) {
   					 echo "Livre";
  			} else {
   					 echo "Ocupado";
 					 }
			?>
			
			<?php 
				echo $valorEstacionamento = file_get_contents("files/estacionamento/P03.txt"); 
			?>				

		<h3>ESTACIONAMENTO 4:</h3>
		<p>	
		<?php
  			$file4 = "files/estacionamento/P04.txt";
  			$status = file_get_contents($file);
  			if ($status == 0) {
   					 echo "Livre";
  			} else {
   					 echo "Ocupado";
 					 }
			?>
			
			<?php 
				echo $valorEstacionamento = file_get_contents("files/estacionamento/P04.txt"); 
			?>				

		<h3>ESTACIONAMENTO 5: </h3>
		<p>	
		<?php
  			$file5  = "files/estacionamento/P05.txt";
  			$status = file_get_contents($file5);
  			if ($status == 0) {
   					 echo "Livre";
  			} else {
   					 echo "Ocupado";
 					 }
			?>
			<?php 
				echo $valorEstacionamento = file_get_contents("files/estacionamento/P05.txt");
			?>				

		<h3>ESTACIONAMENTO 6: </h3>
		<p>	
			<?php
  			$file6  = "files/estacionamento/P06.txt";
  			$status = file_get_contents($file6);
  			if ($status == 0) {
   					 echo "Livre";
  			} else {
   					 echo "Ocupado";
 					 }
			?>
			<?php 
				echo $valorEstacionamento = file_get_contents("files/estacionamento/P06.txt");
			?>				

		<h3>ESTACIONAMENTO 7: </h3>
		<p>	
		<?php
  			$file7  = "files/estacionamento/P07.txt";
  			$status = file_get_contents($file7);
  			if ($status == 0) {
   					 echo "Livre";
  			} else {
   					 echo "Ocupado";
 					 }
			?>
			<?php 
				echo $valorEstacionamento = file_get_contents("files/estacionamento/P07.txt");
			?>				

		<h3>ESTACIONAMENTO 8: </h3>
		<p>	
		<?php
  			$file8  = "files/estacionamento/P08.txt";
  			$status = file_get_contents($file8);
  			if ($status == 0) {
   					 echo "Livre";
  			} else {
   					 echo "Ocupado";
 					 }
			?>
			<?php 
				echo $valorEstacionamento = file_get_contents("files/estacionamento/P08.txt");
			?>				

		<h3>ESTACIONAMENTO 9: </h3>
		<p>	
		<?php
  			$file9  = "files/estacionamento/P09.txt";
  			$status = file_get_contents($file9);
  			if ($status == 0) {
   					 echo "Livre";
  			} else {
   					 echo "Ocupado";
 					 }
			?>
			<?php 
				echo $valorEstacionamento = file_get_contents("files/estacionamento/P09.txt");
			?>				

		<h3>ESTACIONAMENTO 10: </h3>
		<p>	
		<?php
  			$file10 = "files/estacionamento/P10.txt";
  			$status = file_get_contents($file10);
  			if ($status == 0) {
   					 echo "Livre";
  			} else {
   					 echo "Ocupado";
 					 }
			?>
			<?php 
				echo $valorEstacionamento = file_get_contents("files/estacionamento/P10.txt");
			?>				
		<p>
		<p>

	<a href="index.html">Página inicial</a>	
	</div>
</body>

</html>