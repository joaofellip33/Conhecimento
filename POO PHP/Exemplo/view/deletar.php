<?php
    $id = $_GET['id'];

    include "conexao.php";
    $stmt = mysqli_stmt_init($conn) ;
    mysqli_stmt_prepare($stmt, "delete from agenda where id = ?");
    mysqli_stmt_bind_param($stmt, "i", $id);
    mysqli_stmt_execute($stmt);

    header("Location: listar.php");
    //echo $nome;


?>