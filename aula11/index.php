<?php
    include "connection.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<fieldset>
    <legend>Cadastro</legend>

    <table>
        <tr>
            <th>Nome</th>
            <th>Sobrenome</th>
            <th>Email</th>
            <th>Senha</th>
            <th>Cidade</th>
            <th>Estado</th>
        </tr>
        <tr>
            <form action="insert.php" method="POST">
                <td><input type="text" name="nome" required></td>
                <td><input type="text" name="sobrenome" required></td>
                <td><input type="email" name="email" required></td>
                <td><input type="password" name="password" required></td>
                <td><input type="text" name="cidade" required></td>
                <td><input type="text" name="estado" required></td>
                <td><input type="submit" value="Cadastrar"></td>
            </form>
        </tr>
    </table>
</fieldset>

<?php include "consulta.php"; ?>

</body>
</html>