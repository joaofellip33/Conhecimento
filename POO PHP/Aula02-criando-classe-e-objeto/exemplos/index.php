<!DOCTYPE html>
<html>
	<head>
		<title></title>
	</head>
	<body>
		<?php  
			require_once'classes.php';

			$celular = new Celular;
			$celular->modelo = "x10";
			$celular->polegadas = 7.0;
			$celular->camera = "48mp";
			
			$celular->bateria = 48;
			$celular->modo = true;

			$celular->ligar();

			$celular->desligar();

			$celular->desligar();

			$celular-> ligar();

			$celular-> bateria();

			print_r($celular);






		?>
	</body>
</html>