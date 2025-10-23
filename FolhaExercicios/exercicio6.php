<?php
const dinheiro = 50.00;

const maca_preco      = 5.00;
const melancia_preco  = 3.50;
const laranja_preco   = 4.00;
const repolho_preco   = 2.50;
const cenoura_preco   = 3.00;
const batatinha_preco = 4.50;

$maca_qtd      = $_POST['maca_qtd'];
$melancia_qtd  = $_POST['melancia_qtd'];
$laranja_qtd   = $_POST['laranja_qtd'];
$repolho_qtd   = $_POST['repolho_qtd'];
$cenoura_qtd   = $_POST['cenoura_qtd'];
$batatinha_qtd = $_POST['batatinha_qtd'];


function total_Compras($maca_qtd, $melancia_qtd, $laranja_qtd, $repolho_qtd, $cenoura_qtd, $batatinha_qtd) {
    $total_maca      = maca_preco      * $maca_qtd;
    $total_melancia  = melancia_preco  * $melancia_qtd;
    $total_laranja   = laranja_preco   * $laranja_qtd;
    $total_repolho   = repolho_preco   * $repolho_qtd;
    $total_cenoura   = cenoura_preco   * $cenoura_qtd;
    $total_batatinha = batatinha_preco * $batatinha_qtd;

    $total_compra = $total_maca + $total_melancia + $total_laranja + $total_repolho + $total_cenoura + $total_batatinha;

    return $total_compra;
}

$total_compra = total_Compras($maca_qtd, $melancia_qtd, $laranja_qtd, $repolho_qtd, $cenoura_qtd, $batatinha_qtd);


function resultado($total_compra)  {
    echo "<p>O valor total da compra foi de R$ " . number_format($total_compra, 2, ',', '.') . ".</p>";
    
    if ($total_compra > dinheiro) {
    $falta = $total_compra - dinheiro;
    echo "<p style='color:red;'>Joãozinho não tem dinheiro suficiente! Faltam R$ " . number_format($falta, 2, ',', '.') . ".</p>";
    } elseif ($total_compra < dinheiro) {
        $sobra = dinheiro - $total_compra;
        echo "<p style='color:blue;'>Joãozinho ainda pode gastar R$ " . number_format($sobra, 2, ',', '.') . ".</p>";
    } else {
        echo "<p style='color:green;'>O saldo de R$ 50,00 foi totalmente utilizado. Joãozinho gastou tudo!</p>";
    }
}

resultado($total_compra);

echo '<a href="index.php"><br>Voltar</a>';
