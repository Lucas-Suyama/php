<?php

echo "Bem vindo(a) ao screen match\n";

$nomeFilme = "Top Gun - Maverik";
$anoLancamento = 2022;
$somaDeNotas = 9 + 6 + 8 + 7.5 + 5;
$notaFilme =  $somaDeNotas / 5;

$isPlanoPrime = true;
$incluidoNoPlano = $isPlanoPrime && $anoLancamento < 2020;
echo "Nome do Filme: " . $nomeFilme . "\n";

echo "Nome do Filme: $nomeFilme \n";
