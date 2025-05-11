<?php

echo "Bem vindo(a) ao screen match\n";

$nomeFilme = "Top Gun - Maverik";
$nomeFilme = "Thor: Ragnarok";
$nomeFilme = "Se beber não case";

//$anoLancamento = $argv[1] ?? 2022;
$anoLancamento = 2022;

//$somaDeNotas = 9 + 6 + 8 + 7.5 + 5;
$qtdNotas = $argc - 1;

$notas = [];

for($contador = 1; $contador < $argc; $contador++){
    $notas[] = (float) $argv[$contador];
}
$somaDeNotas = 0;
//foreach($notas as $nota){
//   $somaDeNotas += $nota;
//}

$notaFilme =  array_sum($notas) / $qtdNotas;
$isPlanoPrime = true;
$incluidoNoPlano = $isPlanoPrime && $anoLancamento < 2020;

echo "Nome do Filme: " . $nomeFilme . "\n";
echo "Nota do Filme: $notaFilme \n";
echo "Ano de lançamento: $anoLancamento\n";

if ($anoLancamento >= 2022){
    echo "Esse filme é lançamento \n";
} elseif($anoLancamento > 2020 && $anoLancamento <= 2022){
    echo "Esse filme ainda é novo \n";
}else{
    echo "Esse filme não é um lançamento \n";
}

$genero = match($nomeFilme){
    "Top Gun - Maverik" => "Ação",
    "Thor: Ragnarok" => "Super-herói",
    "Se beber não case" => "Comédia",
    default => "Gênero desconhecido"
};

echo "O gênero do filme é: $genero \n";

$notasParaFilme = [10, 8, 9, 7.5, 5, 8];

//var_dump($notasParaFilme);