<!DOCTYPE html>
<html>
	<head>
		<title></title>
	</head>
	<body>
		<pre>	
		<?php
			require_once 'classe.php';
			$c1 = new Banco("1023","cc","serbestiao",0);
			$c1->abrirConta();

			$c1->fecharConta();

			print_r($c1);
		?>
		</pre>
	</body>
</html>