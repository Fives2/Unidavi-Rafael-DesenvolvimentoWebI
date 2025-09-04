<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["nome"];
    $sobrenome = $_POST["sobrenome"];
    $email = $_POST["email"];
    $datanascimento = $_POST["datanascimento"];
    $sexo = $_POST["sexo"];
    $endereco = $_POST["endereco"];
    $cep = $_POST["cep"];
    $corfavorita = $_POST["corfavorita"];
    $estado = $_POST["estado"];

    

    echo "Cadastro realizado com sucesso!";
}
?>