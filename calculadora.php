<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="estilos.css">
	<title>Document</title>
</head>
<body>
		<form class="caja" action="calculadora.php" method="get">
			<h1>Calculadora PHP</h1>
			<input type="text" name="numero1" value="" placeholder="Ingrese un número" autocomplete="off">
			<input type="text" name="numero2" value="" placeholder="Ingrese otro número" autocomplete="off">
			<input type="submit" name="" value="Respuesta">
			<output type= "number" name="">


		</form>



</body>
</html>


<?php 
	
//isset se usa para usar variables del form de html
	if (isset($_GET['numero1']) && isset($_GET['numero2']) && is_numeric($_GET['numero1']) && 
		is_numeric($_GET['numero2']));
		{
			$numero1 = $_GET['numero1'];
			$numero2 = $_GET['numero2'];
			echo $numero1 + $numero2;

		}


 ?>