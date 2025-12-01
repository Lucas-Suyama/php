<?php

$texto = 'Olá, Lucas! Seja bem-vindo(a) à nossa comunidade!';

$texto = str_replace('Lucas', 'João', $texto);

echo $texto . PHP_EOL;

//strtr é uma função que substitui caracteres por outros
echo strtr($texto, ['João' => 'Maria', 'nossa' => 'sua']) . PHP_EOL;