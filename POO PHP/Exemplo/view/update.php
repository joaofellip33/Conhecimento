<?php
    
    ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
    $id = $_GET['id'];
    $nome = $_GET['nome'];
    $email = $_GET['email'];
    $contato = $_GET['contato'];
    $conn = mysqli_connect("localhost","root","123456789","crud");
    $stmt = mysqli_stmt_init($conn) ;
    mysqli_stmt_prepare($stmt, "update agenda set nome = ?, email = ?, contato = ? where id = ?");
    mysqli_stmt_bind_param($stmt, "sssi", $nome, $email, $contato, $id);
    mysqli_stmt_execute($stmt);
    header("Location: listar.php");


?>