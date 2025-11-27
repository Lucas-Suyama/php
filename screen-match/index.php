<?php

require __DIR__ . "/src/Modelo/Genero.php";
require __DIR__ . "/src/Modelo/Titulo.php";  
require __DIR__ . "/src/Modelo/Serie.php"; 
require __DIR__ . "/src/Modelo/Filme.php";
require __DIR__ . "/src/Services/CalculadoraDeMaratona.php";

echo "Bem-vindo(a) ao screen match!\n";

$filme = new Filme("Top Gun - Maverick", 2022, Genero::SuperHeroi, 90);

$filme->avalia(7.8);
$filme->avalia(8.5);
$filme->avalia(9.0);

var_dump($filme);

echo "A média do filme é: " . $filme->media() . "\n";

$serie = new Serie("Stranger Things", 2016, Genero::Terror, 5, 24, 45);
$serie->avalia(8.0);
$serie->avalia(8.5);
$serie->avalia(9.0);

var_dump($serie);

echo "A média da série é: " . $serie->media() . "\n";

$calculadora = new CalculadoraDeMaratona();
$calculadora->calcula($filme);
$calculadora->calcula($serie);

echo "A duração total da maratona é: " . $calculadora->getDuracaoTotal() . " minutos\n";