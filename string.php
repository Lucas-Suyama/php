<?php

$nome = 'Lucas Suyama';

str_contains($nome, 'Suyama');

if(str_contains($nome, 'Suyama')){
    echo "$nome É da minha família" . PHP_EOL;
} else {
    echo "$nome Não é da minha fmília" . PHP_EOL;
}
