<?php
const valor_a_vista = 8654.00;

$parcelas = [24, 36, 48, 60];

$taxa_inicial = 2.0;

echo "<h2>Financiamento de Juquinha - Juros Compostos</h2>";

function financiamento($parcelas, $taxa_inicial){
    foreach ($parcelas as $i => $qtd_parcelas) {
        $taxa = ($taxa_inicial + ($i * 0.3)) / 100;

        $montante = valor_a_vista * pow((1 + $taxa), $qtd_parcelas);

        $valor_parcela = $montante / $qtd_parcelas;

        echo "<p><strong>$qtd_parcelas vezes:</strong> ";
        echo "Taxa: " . number_format($taxa * 100, 1, ',', '.') . "% — ";
        echo "Parcela: R$ " . number_format($valor_parcela, 2, ',', '.') . " — ";
        echo "Total: R$ " . number_format($montante, 2, ',', '.') . "</p>";
    }
}

echo '<a href="index.php"><br>Voltar</a>';