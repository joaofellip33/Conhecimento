<!DOCTYPE html>
<html>
    <head>
        <meta charset='utf-8'>
        <meta http-equiv='X-UA-Compatible' content='IE=edge'>
        <title>Page Title</title>
        <meta name='viewport' content='width=device-width, initial-scale=1'>
        <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
        <script src='main.js'></script>
    </head>
    <body>
        <form action = "cadastrobanco.php" method="get">
            <table border= 1>
                <tr>
                    <td><label >Nome</label></td>
                    <td><label >Email</label></td>
                    <td><label >Celular</label></td>
                </tr>    
                <tr>
                    <td><input type = "text" name = "nome"></td>
                    <td><input type = "email" name = "email"></td>
                    <td><input type = "contato" name = "contato"></td>
                </tr> 
                <tr>
                    <td><input type = "submit" value = "Cadastrar"></td>
                </tr>
            </table>
        </form>
    </body>
</html>