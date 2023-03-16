<?php
	
	$nome = $_GET["nome"];
	$email = $_GET["email"];
	$senha = $_GET["senha"];


	include "conexao.php";

   	//inicia totalmente o statment
	$stmt = mysqli_stmt_init($conn);

	//faz o preparo do statment
	mysqli_stmt_prepare($stmt, "select email from usuario where email = ?;");

	//passa o aparamentros do preparo
	mysqli_stmt_bind_param($stmt, "s", $email);

	//executa o statment
	mysqli_stmt_execute($stmt);

	//guarda o resultado em uma variavel
	mysqli_stmt_bind_result($stmt, $emailb);

	mysqli_stmt_fetch($stmt);

   	
   	if($emailb == $email){
   		echo "esse email ja e existente";
   	}else{
   		//inicia totalmente o statment
		$stmt = mysqli_stmt_init($conn);

		//faz o preparo do statment
		mysqli_stmt_prepare($stmt, "insert into usuario(id_usuario, nome, email, senha, tipo_usuario) values (null, ?,?,?,1)");

		//passa o aparamentros do preparo
		mysqli_stmt_bind_param($stmt, "sss", $nome, $email,$senha);

		//executa o statment
		mysqli_stmt_execute($stmt);   		
   	
   		header("location: log.php");
   	}	


?>