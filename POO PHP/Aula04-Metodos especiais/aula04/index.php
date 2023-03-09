<!DOCTYPE html>
<html>
	<head>
		<title></title>
	</head>
	<body>
		<pre>
		<?php
			require_once 'Caneta.php';
			$c1 = new Caneta("Nic",0.6,"verde");
			

			//$c1->setModelo("Bic");
			$c1->getModelo(); 

			//$c1->setPonta(0.5);
			$c1->getPonta();


			print "Eu tenho uma caneta {$c1->getModelo()} de ponta {$c1->getPonta()}";

			$c2 = new Caneta("Passo", 0.3 ,"Azul");
			

			print_r($c1);
			print_r($c2);
		?>
		</pre>
	</body>
</html>