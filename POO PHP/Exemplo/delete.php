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

			$stmt = mysqli_stmt_init($conn);

			mysqli_stmt_prepare($stmt, "DELETE FROM venda WHERE id_usuario_venda = ?;");

			mysqli_stmt_bind_param($stmt, "i", $id );

			mysqli_stmt_execute($stmt);

			// ----------------------

			$stmt = mysqli_stmt_init($conn);

			mysqli_stmt_prepare($stmt, "DELETE FROM usuario WHERE id_usuario = ?;");

			mysqli_stmt_bind_param($stmt, "i", $id );

			mysqli_stmt_execute($stmt);
			echo $nome . " ". $email. " ". $senha . " " . $id ;

			header("location: inicio.php");

		?>
	</body>
</html>