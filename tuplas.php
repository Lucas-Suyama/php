<?php
$dados = [
  'nome' => 'João',
  'nota' => 8.5,
  'idade' => 20,
];
//list($nome, $nota, $idade) = ['João', 8.5, 20];

//extract
// extrai as chaves de um array em variáveis
extract($dados);

var_dump($nome);
var_dump($nota);
var_dump($idade);

//compact
// cria um array a partir de variáveis
var_dump(compact('nome', 'nota', 'idade'));