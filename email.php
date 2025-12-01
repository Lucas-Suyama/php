<?php
//heredoc é uma forma de criar strings com várias linhas
//é delimitada por <<<Fim e Fim
//o conteúdo da string é interpretado como código PHP

//nowdoc é uma forma de criar strings com várias linhas
//é delimitada por <<<'Fim' e Fim
//o conteúdo da string é interpretado como texto puro

function geraEmail(string $nome): void{
  $conteudoEmail = <<<Fim
  Olá, $nome!
  Seja bem-vindo(a) à nossa comunidade!
  Fim;
  echo $conteudoEmail . PHP_EOL;
}

geraEmail('Lucas');