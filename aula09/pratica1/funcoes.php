<?php

    $aNotas = array(10, 8, 5, 7, 9, 6, 4, 3, 2, 1);

    $aFaltas = array(0, 1, 1, 1, 0, 1, 1, 1, 1, 0);

    function calculaMediaNotas($aNotas) {
        $iSoma = 0;
        foreach ($aNotas as $iNota) {
            $iSoma += $iNota;
        }

        return $iSoma / count($aNotas);
    }

    function aprovacaoNota($iMedia) {
        if ($iMedia >= 7) {
            return 'Aprovado';
        } else {
            return 'Reprovado';
        }
    }

    function calculaMediaFaltas($aFaltas){
        $iSoma = 0;
        
        foreach ($aFaltas as $iFalta) $iSoma += $iFalta;
            
        return $iSoma*10 / count($aFaltas);
    }

    function aprovacaoFaltas($iMedia) {
        if ($iMedia >= 7) {
            return 'Aprovado';
        } else {
            return 'Reprovado';
        }
    }