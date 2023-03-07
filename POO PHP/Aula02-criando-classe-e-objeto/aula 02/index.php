<!DOCTYPE html>
<html>
	<head>
		<title></title>
	</head>
	<body>
		<?php  
			require_once 'Aula-02-criando-classe-e-objeto.php'; //esse comando carrega a pagina da classe
			$c1 = new Caneta; //instancia a variavel em uma classe
			$c1->cor = "Azul";
			$c1->ponta = 0.5;
			$c1->tampada = false;

			//print_r($c1); // Mostra a propriedades do objeto ou var_dump($c1);
			

			$c1->tampar();
			$c1->rabiscar(); // utiliza um metodo da classe


			
			$c2 = new Caneta; //instancia a variavel em uma classe outro objeto 
			$c2->cor = "vermelha";
			$c2->ponta = 0.5;
			$c2->tampada = true;
			
			$c2->destampar();
			$c2->rabiscar(); // utiliza um metodo da classe

		?>
	</body>
</html>