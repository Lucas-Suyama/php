<?php

$notas = [
  ['nome' => 'João', 'nota' => 8],
  ['nome' => 'Maria', 'nota' => 9],
  ['nome' => 'Lucas', 'nota' => 7],
];

function ordenaNota( array $nota1, array $nota2): int{
  // if($nota1['nota'] > $nota2['nota']) return -1;
  // if($nota1['nota'] < $nota2['nota']) return 1;
  // return 0;

  return $nota2['nota'] <=> $nota1['nota'];
}

usort($notas, 'ordenaNota');

var_dump($notas);
