<?php

    require_once("funcoes.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
    echo 'Média das Notas: ' . calculaMediaNotas($aNotas) . '<br>';
    echo 'Situação por média nota: ' . aprovacaoNota(calculaMediaNotas($aNotas)) . '<br>';
    echo 'Média das Faltas: ' . calculaMediaFaltas($aFaltas) . '0% <br>';
    echo 'Situação por média Faltas: ' . aprovacaoFaltas(calculaMediaFaltas($aFaltas)) . '<br>';
?>

</body>
</html>