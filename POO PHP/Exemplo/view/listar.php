<?php
    include "conexao.php";
    $stmt = mysqli_stmt_init($conn) ;
    mysqli_stmt_prepare($stmt, "select * from agenda");
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_bind_result($stmt, $id, $nome, $email, $contato);
    echo "<table border = '1'>";
    while(mysqli_stmt_fetch($stmt)){

        echo "<tr>";
        echo "<td> $id </td>";
        echo "<td> $nome </td>";
        echo "<td> $email </td>";
        echo "<td> $contato </td>";
        echo "<td> <a href = 'deletar.php?id={$id}'>Deletar</a> </td>";
        echo "<td><a href = 'editar.php?id={$id}'>Editar</a></td>";
        echo "</tr>";
    }
    echo "</table>";
?>