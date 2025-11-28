<?php
namespace ScreenMatch\Modelo;

use ScreenMatch\Exception\NotaInvalidaException;

/*O que é trait?
  Trait é uma forma de reutilizar código em várias classes.
  Elas são como mini classes que podem ser usadas em outras classes.
*/
trait ComAvaliacao
{
  private array $notas;

  public function avalia(float $nota): void
  {
    if ($nota < 0 || $nota > 10) {
      throw new NotaInvalidaException();
    }
    $this->notas[] = $nota;
  }

  public function media(): float
  {
    return array_sum($this->notas) / count($this->notas);
  }
}