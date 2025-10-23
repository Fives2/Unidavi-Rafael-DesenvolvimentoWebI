<?php

// $a = 3;
// $b = 2;



// $area = $a * $b;

// $mensagem = "A área do retângulo de lados $a e $b metros é $area metros quadrados.";

// if ($area > 10) {
//     echo "<h1>$mensagem</h1>";
// } else {
//     echo "<h3>$mensagem</h3>";
// }



$a = $_POST['a'];
$b = $_POST['b'];




function area($a, $b) {
    $area = $a * $b;

    $mensagem = "A área do retângulo de lados $a e $b metros é $area metros quadrados.";

    if ($area > 10) {
        echo "<h1>$mensagem</h1>";
    } else {
        echo "<h3>$mensagem</h3>";
}
}

area($a, $b);


echo '<a href="index.php"><br>Voltar</a>';