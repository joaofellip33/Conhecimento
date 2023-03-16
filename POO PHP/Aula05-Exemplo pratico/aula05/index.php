<!DOCTYPE html>
<html>
	<head>
		<title></title>
	</head>
	<body>
		<pre>	
		<?php
			require_once 'classe.php';
			$c1 = new Banco("1023","cc","serbestiao",1.0);
			$c1->abrirConta();

			//$c1->fecharConta();

			$c1-> depositar(110.0);
			
			$c1->sacar(50.0);

			$c1->pagarMensal();
			//$c1-> depositar(1000);

			print_r($c1);
		?>
		</pre>
	</body>
</html>