<?php 

  class Jogo {
    private $timeA;
    private $timeB;
    private $gols = array();

    public function __construct($timeA, $timeB)
    {
        $this->timeA = $timeA;
        $this->timeB = $timeB;
    }

    private function golTime($time) {
        $golsTime = array();
        foreach ($this->gols as $gol) {
            if ($gol->getTime() === $time) {
                $golsTime[] = $gol;
            }
        }
        return $golsTime;
    }
    public function getNomeTimeVencedor() {
        if(count($this->golTime($this->timeA)) > count($this->golTime($this->timeB))) {
            return $this->timeA->getNome();
        } else if(count($this->golTime($this->timeB)) > count($this->golTime($this->timeA))) {
            return $this->timeB->getNome();
        } else {
            return "Empate";
        }
    }
    public function getTimeA() {
      return $this->timeA;
    }
    public function setTimeA($timeA) {
      $this->timeA = $timeA;
    }

    public function getTimeB() {
      return $this->timeB;
    }
    public function setTimeB($timeB) {
      $this->timeB = $timeB;
    }

    public function addGol($time, $jogador) {
        $gol = new Gol(count($this->gols) + 1, $jogador, $time);

        $this->gols[] = $gol;
    }

    public function getGols() {
        return $this->gols;
    }
  }

?>