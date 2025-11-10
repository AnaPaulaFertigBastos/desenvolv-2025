<?php 
  namespace Model;
  class Endereco {
    private $logradouro;
    private $bairro;
    private $cidade;
    private $estado;
    private $cep;

    // Retorna representação em array (útil para JSON)
    public function toArray() {
      return get_object_vars($this);
    }

    // Retorna JSON da instância
    public function toJson() {
      return json_encode($this->toArray(), JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
    }
    
    public function getLogradouro() {
      return $this->logradouro;
    }
    public function setLogradouro($logradouro) {
      $this->logradouro = $logradouro;
    }

    public function getBairro() {
      return $this->bairro;
    }
    public function setBairro($bairro) {
      $this->bairro = $bairro;
    }

    public function getCidade() {
      return $this->cidade;
    }
    public function setCidade($cidade) {
      $this->cidade = $cidade;
    }

    public function getEstado() {
      return $this->estado;
    }
    public function setEstado($estado) {
      $this->estado = $estado;
    }

    public function getCep() {
      return $this->cep;
    }
    public function setCep($cep) {
      $this->cep = $cep;
    }
  }

?>