<?php

	$email = $_GET['email'];
	$senha = $_GET['senha'];

	include "conexao.php";

	$stmt = mysqli_stmt_init($conn);

	mysqli_stmt_prepare($stmt, "SELECT email, senha  FROM usuario WHERE email = ? and senha = ?;");

	mysqli_stmt_bind_param($stmt,"ss",$email, $senha);

	mysqli_stmt_execute($stmt);

	mysqli_stmt_bind_result($stmt, $emailb , $senhab);

	mysqli_stmt_fetch($stmt);

	if (($email == $emailb) and ($senha == $senhab)){
		header("location: inicio.php");
		
	}



?>