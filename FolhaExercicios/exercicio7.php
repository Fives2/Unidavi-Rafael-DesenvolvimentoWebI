<?php
$valor_a_vista = 22500.00;

$parcelas = 60;
$valor_parcela = 489.65;



function calculo($valor_a_vista, $parcelas, $valor_parcela) {
    $total_financiado = $parcelas * $valor_parcela;

    $juros_pagos = $total_financiado - $valor_a_vista;

    return array($total_financiado, $juros_pagos);
}


list($total_financiado, $juros_pagos) = calculo($valor_a_vista, $parcelas, $valor_parcela);

function resultado($valor_a_vista, $total_financiado, $juros_pagos) {
    echo "<h2>Financiamento de Mariazinha</h2>";
    echo "<p>Valor à vista: R$ " . number_format($valor_a_vista, 2, ',', '.') . "</p>";
    echo "<p>Total pago no financiamento: R$ " . number_format($total_financiado, 2, ',', '.') . "</p>";
    echo "<p style='color:red;'>Valor gasto apenas com juros: R$ " . number_format($juros_pagos, 2, ',', '.') . "</p>";
}

resultado($valor_a_vista, $total_financiado, $juros_pagos);

echo '<a href="index.php"><br>Voltar</a>';