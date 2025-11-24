<?php 

  class Time {
    private $nome;
    private $anoFundacao;
    private $jogadores = array();

    public function __construct($nome, $anoFundacao)
    {
        $this->nome = $nome;
        $this->anoFundacao = $anoFundacao;
    }

    public function addJogador($jogador) {
        //Adicionar um jogador na lista de jogadores
        array_push($this->jogadores, $jogador);
    }

    public function getJogadores() {
        //Retornar a lista de jogadores
        return $this->jogadores;
    }

    public function getNome() {
      return $this->nome;
    }

    public function setNome($nome) {
      $this->nome = $nome;
    }

    public function getAnoFundacao() {
      return $this->anoFundacao;
    }
    public function setAnoFundacao($anoFundacao) {
      $this->anoFundacao = $anoFundacao;
    }

  }

?>