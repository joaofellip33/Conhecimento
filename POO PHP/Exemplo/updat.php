<!DOCTYPE html>
<html>
	<head>
		<title></title>
	</head>
	<body>
		<?php
			$nome = $_GET['nome'];
			$email = $_GET['email'];
			$senha = $_GET['senha'];
			$id = $_GET['id'];

			include "conexao.php";
			
			echo "<form action='update.php' method='GET'>
				
				<table border = 1>
					<tr>
						<td>Nome</td>
						<td>Email</td>
						<td>Senha</td>
					</tr>
					<tr>
						<td>$nome</td>
						<td>$email</td>
						<td>$senha</td>
					</tr>
					<tr>
						<td><input type='text' name='nome'></td>
						<td><input type='text' name='email'></td>
						<td><input type='text' name='senha'></td>
						<td><input type='hidden' name='id' value = '$id'></td>
					</tr>
					<tr>
						<td><input type = 'submit'></td>
					</tr>
				</table>
			</form>";


			//header("location: inicio.php");

		?>
	</body>
</html>