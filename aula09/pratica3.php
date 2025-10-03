<?php

function calcularDesconto() {
    try {
        $valor = $_REQUEST['valor'];
        $desconto = $_REQUEST['desconto'];
        $valorComDesconto = $valor - $desconto;
        return $valorComDesconto;
    } catch (\Throwable $th) {
        echo $th->getMessage();
    }
}

echo calcularDesconto();