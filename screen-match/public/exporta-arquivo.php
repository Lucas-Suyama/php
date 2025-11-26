<?php

$filme = [
    "nome" => $_POST["nome"],
    "anoLancamento" => (int) $_POST["ano"],
    "nota" => (float) $_POST["nota"],
    "genero" => $_POST["genero"],
];

file_put_contents('filme.json', json_encode($filme));

header('Location: /sucesso.php?filme=' . $filme["nome"]);
