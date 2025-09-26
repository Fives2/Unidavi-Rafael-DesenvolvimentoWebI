<?php

$SALARIO1 = 1000;
$SALARIO2 = 2000;
$i = 1;

while($i <= 100) {
    $SALARIO1++;
    if ($i == 50) break;
    $i++;
}


if ($SALARIO1 > $SALARIO2) {
    echo "O Valor da variável 1 é maior que o valor da variável 2";
} else if ($SALARIO2 > $SALARIO1) {
    echo "O Valor da variável 2 é maior que o valor da variável 1";
} else {
    echo "Os valores são iguais";
}

echo "<br><br>Valor Salário 1: $SALARIO1 e Valor Salário: $SALARIO2";