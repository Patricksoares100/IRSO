<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>DETALHE - weather API</title>
    <link rel="stylesheet" type="text/css" href="estilos.css">	
</head>

<body>
	<h1>INCENDIO</h1>
	
	<div>
		
		<h2>SPRINKLER (LIGADO/DESLIGADO):</h2>
		<p>	
		<h3>SPRINKLER 1:</h3>
			<?php 
				echo $valorIncendio = file_get_contents("files/incendio/sprinkler01.txt"); 
			?>			
		<?php
  			$file = "files/incendio/sprinkler01.txt";
  			$status = file_get_contents($file);
  			if ($status == 0) {
   					 echo "Livre";
  			} else {
   					 echo "Ocupado";
 					 }
			?>
		<h3>SPRINKLER 2:</h3>
		<p>	
			<?php 
				echo $valorIncendio = file_get_contents("files/incendio/sprinkler02.txt"); 
			?>			
			<?php
			$file1 = "files/incendio/sprinkler02.txt";
  			$status = file_get_contents($file1);
  			if ($status == 0) {
   					 echo "Livre";
  			} else {
   					 echo "Ocupado";
 					 }
			?>

		<p>

	
<?php
  require_once 'Expect.php';
  $spawn = new \Expect\Spawn("packettracer");
  $spawn->expect("*>")->send("open sprinkler01.txt\r");
  $spawn->expect("*>")->send("edit\r");
  $spawn->expect("*>")->send("change data\r");
  $spawn->expect("*>")->send("save\r");
  $spawn->expect("*>")->send("exit\r");
?>

			<?php
  			$file = 'sprinkler01.txt';
  			$newData = "Nova informação para adicionar";

  	// Abrir o arquivo para escrita
  			 $handle = fopen($file, 'a') or die('Não foi possível abrir o arquivo:  '.$file);

  	// Escrever novos dados no arquivo
  		fwrite($handle, $newData);

  // Fechar o arquivo
  		fclose($handle);
?>


	<a href="index.html">Página inicial</a>	
	
</body>

</html>