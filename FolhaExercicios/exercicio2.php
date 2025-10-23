<?php

// Crie um programa para testar se um número é divisível por 2.
// Caso for verdade escrever a frase “Valor divisível por 2”
// Caso for falso escrever a frase “O valor não é divisível por 2”




$numero = $_POST['numero'];




function divisivel($numero) {
    if ($numero % 2 == 0) {
        echo "O valor <b>$numero</b> é divisível por 2";
    } else {
        echo "O valor <b>$numero</b> não é divisível por 2";
    }
}

divisivel($numero);




echo '<a href="index.php"><br>Voltar</a>';