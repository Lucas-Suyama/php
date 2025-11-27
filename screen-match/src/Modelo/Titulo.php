<?php

class Titulo{
    /* Quando eu defino um modificador de acesso a um parâmetro no construtor,
    ele automaticamente se torna uma propriedade da classe. Evitando que 
    eu precise definir manualmente cada propriedade.
    private string $nome;
    private int $anoLancamento;
    private string $genero;
     */
    private array $notas;
 
    public function __construct(
      public readonly string $nome, 
      public readonly int $anoLancamento, 
      public readonly Genero $genero,

      ){
      /*$this->nome = $nome;
      $this->anoLancamento = $anoLancamento;
      $this->genero = $genero;*/
      $this->notas = [];
    }

    public function avalia(float $nota): void{
      $this->notas[] = $nota;
    }

    public function media(): float{
      return array_sum($this->notas) / count($this->notas);
    }

    public function duracaoEmMinutos(): int{
      return 0;
    }
}