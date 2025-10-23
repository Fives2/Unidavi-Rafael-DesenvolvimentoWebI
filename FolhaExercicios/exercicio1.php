<?php


$var1 = $_POST['var1'];
$var2 = $_POST['var2'];
$var3 = $_POST['var3'];


function soma($var1, $var2, $var3) {
    $soma = $var1 + $var2 + $var3;
    if ($var1 > 10) {
        echo '<p style="color:blue;">Resultado: ' . $soma . '</p>';
    } elseif ($var2 < $var3) {
        echo '<p style="color:green;">Resultado: ' . $soma . '</p>';
    } elseif ($var3 < $var1 && $var3 < $var2) {
        echo '<p style="color:red;">Resultado: ' . $soma . '</p>';
    } else {
        echo '<p>Condições não atendidas. Resultado: ' . $soma . '</p>';
    }
}

soma($var1, $var2, $var3);

echo '<a href="index.php"><br>Voltar</a>';