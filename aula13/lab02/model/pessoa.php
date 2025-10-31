<?php 
  class pessoa {
    private string $nome;
    private string $sobrenome;
    private DateTime $dataNascimento;
    private string $cpfcnpj;
    private int $tipo;
    private $telefone;
    private $endereco;

    public function __construct(){
      $this->tipo = 1;
      $this->dataNascimento = new DateTime();
    }

    public function getNome() {
      return $this->nome;
    }

    public function setNome($nome) {
      $this->nome = $nome;
    }

    public function getSobrenome() {
      return $this->sobrenome;
    }

    public function setSobrenome($sobrenome) {
      $this->sobrenome = $sobrenome;
    }
    
    public function getDataNascimento() {
      return $this->dataNascimento;
    }

    public function setDataNascimento($dataNascimento) {
      $this->dataNascimento = $dataNascimento;
    }

    public function getCpfCnpj() {
      return $this->cpfcnpj;
    }

    public function setCpfCnpj($cpfcnpj) {
      $this->cpfcnpj = $cpfcnpj;
    }

    public function getTipo() {
      return $this->tipo;
    }

    public function setTipo($tipo) {
      $this->tipo = $tipo;
    }

    public function getTelefone() {
      return $this->telefone;
    }

    public function setTelefone($telefone) {
      $this->telefone = $telefone;
    }

    public function getEndereco() {
      return $this->endereco;
    }

    public function setEndereco($endereco) {
      $this->endereco = $endereco;
    }

    public function inicializaClasse() : void {
      $pessoa = new Pessoa();
    }

    public function getNomeCompleto() {
      return $this->nome . " " . $this->sobrenome;
    }

    public function getIdade() : int {
      $dataAtual = new DateTime();
      $diferenca = $dataAtual->diff($this->dataNascimento)->y;
      return $diferenca;
    }
  }

?>