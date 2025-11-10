<?php 
  namespace Model;
  class Session {
    private $sessionId;
    private $status;
    private $usuario;
    private $dataHoraInicio;
    private $dataHoraUltimoAcesso;

    public function __construct() {
      $this->status = 0;
      $this->dataHoraInicio = new \DateTime();;
      $this->dataHoraUltimoAcesso = new \DateTime();
    }

    public function iniciaSessao($usuario) {
      // inicia sessão PHP se necessário e guarda usuário localmente
      if (session_status() !== PHP_SESSION_ACTIVE) session_start();
      $_SESSION['user'] = $usuario;
      $this->usuario = $usuario;
      $this->status = 1;
      $this->dataHoraInicio = new \DateTime();
      $this->dataHoraUltimoAcesso = new \DateTime();
    }

    public function finalizaSessao() {
      // finaliza a sessão PHP e limpa dados vinculados
      if (session_status() === PHP_SESSION_ACTIVE) {
        // remove apenas a chave que usamos
        unset($_SESSION['user']);
        session_destroy();
      }
      $this->status = 0;
      $this->dataHoraUltimoAcesso = new \DateTime();
    }

    // Salva os dados principais da sessão em $_SESSION (método simples)
    public function salvarSessao() {
      if (session_status() !== PHP_SESSION_ACTIVE) session_start();
      $_SESSION['user'] = $this->usuario;
      $_SESSION['status'] = $this->status;
      $_SESSION['dataHoraInicio'] = $this->dataHoraInicio instanceof \DateTime ? $this->dataHoraInicio->format(DATE_ATOM) : null;
      $_SESSION['dataHoraUltimoAcesso'] = $this->dataHoraUltimoAcesso instanceof \DateTime ? $this->dataHoraUltimoAcesso->format(DATE_ATOM) : null;
    }

    public function getUsuarioSessao() {
      return $this->sessionId;
    }

    public function getSessionId() {
      return $this->sessionId;
    }
    public function setSessionId($sessionId) {
      $this->sessionId = $sessionId;
    }
    public function getStatus() {
      return $this->status;
    }
    public function setStatus($status) {
      $this->status = $status;
    }

    public function getUsuario() {
      return $this->usuario;
    }
    public function setUsuario($usuario) {
      $this->usuario = $usuario;
    }

    public function getDataHoraInicio() {
      return $this->dataHoraInicio;
    }
    public function setDataHoraInicio($dataHoraInicio) {
      $this->dataHoraInicio = $dataHoraInicio;
    }
    public function getDataHoraUltimoAcesso() {
      return $this->dataHoraUltimoAcesso;
    }
    public function setDataHoraUltimoAcesso($dataHoraUltimoAcesso) {
      $this->dataHoraUltimoAcesso = $dataHoraUltimoAcesso;
    }
    
  }

?>