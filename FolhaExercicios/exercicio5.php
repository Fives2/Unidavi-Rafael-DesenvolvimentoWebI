<?php

$base = $_POST['base'];
$altura = $_POST['altura'];


function area($base, $altura) {

    $area = ($base * $altura) / 2;

    echo "A área do triângulo retângulo de base $base metros e altura $altura metros é $area metros quadrados.";
}

area($base, $altura);



echo '<a href="index.php"><br>Voltar</a>';