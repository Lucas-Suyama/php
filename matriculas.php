<?php

$alunos = [
  'João',
  'Maria',
  'Lucas',
  'Pedro',
  'Ana',
  'Paulo',
];

$novosAlunos = [
  'Carla',
  'Rafael',
];

//array_merge
// combina dois arrays mas não preserva as chaves
var_dump(array_merge($alunos, $novosAlunos));

//spread operator
// combina dois arrays preservando as chaves
//spread operator vs array_merge 
// o spread operator permite adicionar valores, sendo mais flexível
// o array_merge é mais antigo e mais simples
var_dump([...$alunos, ...$novosAlunos]);
var_dump([...$novosAlunos,'Lais', ...$alunos]);

//array_push
// adiciona um valor ao final de um array
array_push($alunos, 'Lais', 'Josué', 'Fábio');
var_dump($alunos);

$alunos[] = 'Gustavo';
var_dump($alunos);

//array_shift
// remove o primeiro valor de um array
array_shift($alunos);
var_dump($alunos);

//array_unshift
// adiciona um valor ao início de um array
array_unshift($alunos, 'Eduardo');
var_dump($alunos);

//array_pop
// remove o último valor de um array
array_pop($alunos);
var_dump($alunos);