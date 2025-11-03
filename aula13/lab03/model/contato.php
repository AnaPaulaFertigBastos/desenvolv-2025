<?php 
  namespace Model;
  class Contato {
    private $nome;
    private $valor;
    private $tipo;

    public function getNome() {
      return $this->nome;
    }

    public function setNome($nome) {
      $this->nome = $nome;
    }
    public function getValor() {
      return $this->valor;
    }
    public function setValor($valor) {
      $this->valor = $valor;
    }
    public function getTipo() {
      return $this->tipo;
    }
    public function setTipo($tipo) {
      $this->tipo = $tipo;
    }

  }
?>