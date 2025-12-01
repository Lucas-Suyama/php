<?php

$email = ' lucas.suyama@alura.com.br';

//strlen retorna a quantdade de bytes de uma string e não o número de caracteres
//Exemplo, se tiver um acento, o strlen conta como 2 bytes.
echo 'O email tem ' . strlen($email) . ' caracteres' . PHP_EOL;

$usuario = substr($email, 0, strpos($email, '@'));

echo strtoupper($usuario) . PHP_EOL;
echo substr($email, strpos($email, '@') + 1) . PHP_EOL;

var_dump(explode('.', $email));

//trim remove os espaços em branco no início e no fim da string
echo trim($email) . PHP_EOL;