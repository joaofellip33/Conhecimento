<?php
    $nome = $_GET['nome'];
    $email = $_GET['email'];
    $contato = $_GET['contato'];
    $conn = mysqli_connect("localhost","root","123456789","crud");

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
    $stmt = mysqli_stmt_init($conn) or die("Erro ao conectar");
    $a = mysqli_stmt_prepare($stmt, "insert into agenda ( nome, email, contato) values (?,?,?);");
    
    mysqli_stmt_bind_param($stmt, "sss", $nome, $email, $contato);
    mysqli_stmt_execute($stmt);

    header("Location: listar.php");
   

?>