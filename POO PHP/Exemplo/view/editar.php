<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>

        <?php
            include "conexao.php";
            $id = $_GET['id'];
            $stmt = mysqli_stmt_init($conn) ;
            mysqli_stmt_prepare($stmt, "select * from agenda where id = ?");
            mysqli_stmt_bind_param($stmt, "i", $id);
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_bind_result($stmt, $id, $nome, $email, $contato);
            mysqli_stmt_fetch($stmt);
        ?>
        <form action="update.php" method="get">
            <table>
                <tr>
                    <td><label for="nome">Nome</label></td>
                    <td><input type="text" name="nome" value="<?= $nome?>"></td>
                </tr>
                <tr>
                    <td><label for="email">Email</label></td>
                    <td><input type="email" name="email" value="<?= $email?>"></td>
                </tr>
                <tr>
                    <td><label for="contato">Contato</label></td>
                    <td><input type="text" name="contato" value="<?= $contato?>"></td>
                    <td><input type="hidden" name="id" value="<?= $id?>"></td>

                </tr>
                <tr>
                    <td><input type="submit" value="Editar"></td>
                </tr>
            </table>
        </form>
    </body>
</html>