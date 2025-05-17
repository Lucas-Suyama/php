<?php

function exibeMensagemLancamento(int $anoLancamento): void {
    if ($anoLancamento > 2022) {
            echo "Esse filme é um lançamento\n";
    } elseif ($anoLancamento > 2020 && $anoLancamento <= 2022) {
            echo "Esse filme ainda é novo\n";
    } else {
            echo "Esse filme não é um lançamento\n";
    }
}

function incluidoNoPlano( bool $planoPrime, int $anoLancamento): bool {
    return $planoPrime || $anoLancamento < 2020;  
}
