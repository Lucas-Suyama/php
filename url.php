<?php

$url = 'https://www.alura.com.br';

if(str_starts_with($url, 'https')){
    echo 'A url é segura' . PHP_EOL;
} else {
    echo 'A url não é segura' . PHP_EOL;
}

if(str_ends_with($url, '.br')){
    echo 'A url é brasileira' . PHP_EOL;
} else {
    echo 'A url não é brasileira' . PHP_EOL;
}