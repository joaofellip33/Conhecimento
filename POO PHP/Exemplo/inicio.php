<!DOCTYPE html>
<html>
	<head>
		<title></title>
	</head>
	<body>
		<?php
			include "conexao.php";

			$stmt = mysqli_stmt_init($conn);
			
			mysqli_stmt_prepare($stmt, "SELECT nome, email, senha, id_usuario FROM usuario;");

			mysqli_stmt_execute($stmt);

			mysqli_stmt_bind_result($stmt, $nome, $email, $senha, $id);

			session_start();

			echo "<table border=1>";
			while(mysqli_stmt_fetch($stmt)){
				echo "<tr>";
				echo "<td>$nome</td>";
				echo "<td>$email</td>";
				echo "<td>$senha</td>";
				$_SESSION['ID'] = $id;
				echo "<td><a href='http://localhost/Conhecimento/POO%20PHP/Exemplo/delete.php?nome=$nome&email=$email&senha=$senha&id=$id'>DELETE</a></td>";
				echo "<td><a href='http://localhost/Conhecimento/POO%20PHP/Exemplo/updat.php?nome=$nome&email=$email&senha=$senha&id=$id'>UPDATE</a></td>";
				echo "</tr>";
			}
			echo "</table>";







		?>
	</body>
</html>