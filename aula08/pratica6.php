<?php

$matriz = array(
    ['Disciplina', 'Faltas', 'Média'],
    ['Matemática',      '5',   '8.5'],
    ['Português',       '2',     '9'],
    ['Geografia',      '10',     '6'],
    ['Educação Física', '2',     '8']

);

$tabela = '<table>';
for ($i=0; $i <5 ; $i++) { 
    $tabela .= '<tr>';
    if ($i == 0) {
       foreach ($matriz[$i] as $dados) {
            $tabela .= "<th> $dados </th>";
       } 
    } else {
        foreach ($matriz[$i] as $dados) {
            $tabela .= "<td> $dados </td>";
       } 
    }
    $tabela .= '</tr>';
}
$tabela .= '</table>';

echo $tabela;