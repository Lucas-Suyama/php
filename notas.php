<?php

$notas = [
  'João' => 8,
  'Maria' => 9,
  'Lucas' => 7,
  'Pedro' => 10,
  'Ana' => 8,
  'Paulo' => null,
];

// asort e arsort
// asort ordena o array pelo valor, mantendo a chave
// arsort ordena o array pelo valor, invertendo a chave
asort($notas);
var_dump($notas);

arsort($notas);
var_dump($notas);

// ksort e krsort
// ksort ordena o array pela chave, mantendo o valor
// krsort ordena o array pela chave, invertendo o valor
ksort($notas);
var_dump($notas);

krsort($notas);
var_dump($notas);

//is_array
// verifica se uma variável é um array
var_dump(is_array($notas) ? 'é um array' : 'não é um array');

//array_is_list
// verifica se um array é uma lista
var_dump(array_is_list($notas) ? 'é uma lista' : 'não é uma lista');

//array_key_exists
// verifica se uma chave existe em um array
var_dump(array_key_exists('Lucas', $notas));

//isset
// verifica se uma variável está definida
var_dump(isset($notas['João']));
var_dump(isset($notas['Maria']));
var_dump(isset($notas['Lucas']));

//in_array
// verifica se um valor existe em um array
var_dump(in_array(8, $notas) ? 'existe' : 'não existe');
var_dump(in_array(9, $notas) ? 'existe' : 'não existe');
var_dump(in_array(7, $notas) ? 'existe' : 'não existe');

echo 'Quem tirou 10?' . PHP_EOL;
var_dump(array_search(10, $notas, strict: true));

echo 'Quem tirou 8?' . PHP_EOL;
var_dump(array_search(8, $notas, strict: true));