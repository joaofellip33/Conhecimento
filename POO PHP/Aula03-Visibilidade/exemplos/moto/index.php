<!DOCTYPE html>
<html>
	<head>
		<title></title>
	</head>
	<body>
		<?php
			require_once "classe_moto.php";
			$moto = new Moto;
			$moto->cilindradas= 300;
			$moto->modelo = "xre 300";
			$moto->marca = "yamarra";
			$moto->km = 18000;
			$moto->ligada=true;
			$moto->km_l = 27;
			$moto->desligar();
			$moto->ligar();
			print_r($moto);

		?>
	</body>
</html>