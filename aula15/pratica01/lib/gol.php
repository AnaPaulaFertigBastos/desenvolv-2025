<?php 

  class Gol {
    private $tempo;
    private $jogador;
    private $time;

    public function __construct($tempo, $jogador, $time)
    {
        $this->tempo = $tempo;
        $this->jogador = $jogador;
        $this->time = $time;
    }


    public function getTempo() {
      return $this->tempo;
    }
    public function setTempo($tempo) {
      $this->tempo = $tempo;
    }

    public function getJogador() {
      return $this->jogador;
    }
    public function setJogador($jogador) {
      $this->jogador = $jogador;
    }

    public function getTime() {
      return $this->time;
    }
    public function setTime($time) {
      $this->time = $time;
    }
  }

?>