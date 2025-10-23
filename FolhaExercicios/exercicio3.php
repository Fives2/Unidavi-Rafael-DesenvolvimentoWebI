<?php

// $lado = 3;

// $area = $lado * $lado;

// echo "A área do quadrado de lado $lado metros é $area metros quadrados.";



$lado = $_POST['lado'];




function area($lado) {
    $area = $lado * $lado;
    echo "A área do quadrado de lado $lado metros é $area metros quadrados.";
}

area($lado);


echo '<a href="index.php"><br>Voltar</a>';