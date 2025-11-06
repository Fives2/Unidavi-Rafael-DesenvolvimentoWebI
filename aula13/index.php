<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aulas</title>
</head>
<body>
    

<?php
    require_once 'model/classPessoa.php';

    use model\Pessoa;

    // $pessoa = new Pessoa("João", "Silva", "1990-01-01", "123.456.789-00", "Física", "Rua A, 123");

    // echo "Nome: " . $pessoa->getNome() . "<br>";
    // echo "Sobrenome: " . $pessoa->getSobrenome() . "<br>";
    // echo "Data de Nascimento: " . $pessoa->getDataNascimento() . "<br>";
    // echo "CPF: " . $pessoa->getCpf() . "<br>";
    // echo "Tipo: " . $pessoa->getTipo() . "<br>";
    // echo "Endereço: " . $pessoa->getEndereco() . "<br>";
    // echo "Nome Completo: " . $pessoa->getNomeCompleto() . "<br>";
    // echo "Idade: " . $pessoa->getIdade() . " anos<br>";



    $eu = new Pessoa();
    $eu->setNome("Rafael");
    $eu->setSobrenome("Almeida");
    $eu->setDataNascimento("1995-05-15");
    $eu->setCpf("987.654.321-00");
    $eu->setTipo("Física");

    $pai = new Pessoa();
    $pai->setNome("Carlos");
    $pai->setSobrenome("Silva");
    $pai->setDataNascimento("1965-08-20");
    $pai->setCpf("123.456.789-00");
    $pai->setTipo("Física");

    $mae = new Pessoa();
    $mae->setNome("Mariana");
    $mae->setSobrenome("Oliveira");
    $mae->setDataNascimento("1970-02-10");
    $mae->setCpf("987.123.456-00");
    $mae->setTipo("Física");

    $familia = [$eu, $pai, $mae]; 




    file_put_contents('arquivo.txt', serialize($familia));

    
    file_put_contents('json.json', json_encode($familia));
    
    foreach ($familia as $membro) {
        file_put_contents('arquivo.txt', $membro->toJSON(), FILE_APPEND);
    }
?>

</body>
</html>