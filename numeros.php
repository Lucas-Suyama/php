<?php

$anoNascimento = "2001";

$idade = 2025 - $anoNascimento;

echo $idade . PHP_EOL;

if($anoNascimento > 2000){
    echo 'Você é maior de idade' . PHP_EOL;
} else {
    echo 'Você é menor de idade' . PHP_EOL;
}