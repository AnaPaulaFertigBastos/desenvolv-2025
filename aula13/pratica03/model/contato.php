<?php 
  namespace Model;
  class Contato {
    private $nome;
    private $valor;
    private $tipo;

    // Retorna representação em array (útil para JSON)
    public function toArray() {
      return get_object_vars($this);
    }

    // Retorna JSON da instância
    public function toJson() {
      return json_encode($this->toArray(), JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
    }

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