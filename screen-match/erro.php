<?php
namespace ScreenMatch\Exception;

use ScreenMatch\Modelo\{
  Serie,
  Genero,
  Episodio
};
use ScreenMatch\Services\ConversorNotaEstrela;

require 'autoload.php';

$serie = new Serie(
  "Game of Thrones",
  2011,
  Genero::Drama,
  8,
  10,
  60
);

$episodio = new Episodio(
  $serie,
  "A Luta dos Tronos",
  1,
);

try {
  $episodio->avalia(45);
  $episodio->avalia(-35);

  $conversor = new ConversorNotaEstrela();
  echo $conversor->converte($episodio);
} catch (NotaInvalidaException $e) {
  echo $e->getMessage();
}

