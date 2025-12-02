<?php

$notasBimestre1 = [
  'Vinicius' => 6,
  'João' => 8,
  'Ana' => 10,
  'Roberto' => 7,
  'Maria' => 9,
];


$notasBimestre2 = [
  'João' => 8,
  'Ana' => 9,
  'Roberto' => 7,
];

//array_diff
// retorna os valores que estão em um array, mas não estão em outro
//obs: só leva em consideração os valores(no caso, as notas)
var_dump(array_diff($notasBimestre1, $notasBimestre2));

//array_diff_key
// retorna os valores que estão em um array, mas não estão em outro
//obs: leva em consideração as chaves(no caso, os nomes)
var_dump(array_diff_key($notasBimestre2, $notasBimestre1));


//array_diff_assoc
// retorna os valores que estão em um array, mas não estão em outro
//obs: leva em consideração tanto os valores quanto as chaves
var_dump(array_diff_assoc($notasBimestre1, $notasBimestre2));

var_dump(array_values($notasBimestre1));

$alunosFaltantes = array_diff_key($notasBimestre1, $notasBimestre2);
$nomesAlunos = array_keys($alunosFaltantes);
$notasAlunos = array_values($alunosFaltantes);

//array_combine
// combina dois arrays, um com as chaves e outro com os valores
var_dump(array_combine($nomesAlunos, $notasAlunos));

//array_flip
// inverte as chaves com os valores
var_dump(array_flip($notasBimestre1));

