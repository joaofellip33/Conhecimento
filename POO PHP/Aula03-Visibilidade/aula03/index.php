<!DOCTYPE html>
<html>
	<head>
		<title></title>
	</head>
	<body>
		<?php  
			require_once 'Caneta.php'; //esse comando carrega a pagina da classe
			$c1 = new Caneta; //instancia a variavel em uma classe
			$c1->modelo = "Bic cristal";
			$c1->cor = "Azul";
			//$c1->ponta = 0.5; comando invalido pois e um atributo privado que so pode ser modificado nesse estado dentro da classe
			
			//$c1->carga = 99; comando invalido pois e um atributo protegido
			$c1->rabiscar();
			
		?>
		<pre><?php var_dump($c1); ?></pre>

		<?php
			$c1->tampar(); //metodo pode modificar a variavel protegida
			$c1->rabiscar();
		?>

		<pre><?php var_dump($c1); ?></pre>

	</body>
</html>