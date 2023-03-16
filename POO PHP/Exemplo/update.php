<?php
	
	$nome = $_GET['nome']; 
	$email = $_GET['email']; 
	$senha = $_GET['senha']; 
	$id = $_GET['id'];

	session_start();

	include "conexao.php";

	$stmt = mysqli_stmt_init($conn);

	mysqli_stmt_prepare($stmt, "update usuario set nome = ?, email=?, senha=? where id_usuario = ?;");

	mysqli_stmt_bind_param($stmt, "sssi", $nome, $email, $senha, $id);

	mysqli_stmt_execute($stmt);

	header('location: inicio.php')

?>