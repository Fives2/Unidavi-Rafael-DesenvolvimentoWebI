<?php

$pastas =
    array("bsn" =>
        array("3a Fase" =>
            array("desenvWeb",
            "bancoDados 1", "engSoft 1"),

        "4a Fase" =>
            array("Intro Web",
            "bancoDados 2", "engSoft 2"))
    );

function listarPastas($pastas, $traco = '- ') {
    $texto = '';
    foreach ($pastas as $pasta => $subpastas) {
        if (is_array($subpastas)) {
            $texto .= $traco . $pasta . '<br>';
            $texto .= listarPastas($subpastas, $traco.'- ');
        } else {
            $texto .= $traco . $subpastas . '<br>';
        }
    }
    return $texto;
}

echo listarPastas($pastas);