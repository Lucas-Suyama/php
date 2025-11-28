<?php

namespace ScreenMatch\Modelo;

abstract class Titulo implements Avaliavel
{
  /* Quando eu defino um modificador de acesso a um parâmetro no construtor,
    ele automaticamente se torna uma propriedade da classe. Evitando que 
    eu precise definir manualmente cada propriedade.
    private string $nome;
    private int $anoLancamento;
    private string $genero;
     */
  use ComAvaliacao;

  public function __construct(
    public readonly string $nome,
    public readonly int $anoLancamento,
    public readonly Genero $genero,

  ) {
    /*$this->nome = $nome;
      $this->anoLancamento = $anoLancamento;
      $this->genero = $genero;*/

  }

  abstract public function duracaoEmMinutos(): int;
}
