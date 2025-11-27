<?php

class CalculadoraDeMaratona{
    private int $duracaoTotal = 0;
    public function calcula(Titulo $titulo): void{
        $this->duracaoTotal += $titulo->duracaoEmMinutos();
    }
    
    public function getDuracaoTotal(): int{
      return $this->duracaoTotal;
    }
}
