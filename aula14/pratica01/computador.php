<?php 
  namespace Computador;
  class Computador {
    private $estado;
    
    public function __construct() {
      // Estado inicial
      $this->estado = 'Desligado';
    }

    // Liga o computador: escreve e armazena o estado
    public function ligar() {
      $this->estado = 'Ligado';
      echo "Ligado";
    }

    // Desliga o computador: escreve e armazena o estado
    public function desligar() {
      $this->estado = 'Desligado';
      echo "Desligado";
    }

    // Retorna o estado atual (string)
    public function status() {
      return $this->estado;
    }


  }

?>