<?php 
  class query {
    private $sql;
    private $registros;
    private $conexaoBd;
    private $queryResource;

    public function __construct($conexaoBd) {
      $this->registros = 0;
      $this->conexaoBd = $conexaoBd;
    }

    public function setSql($sSql) {
      $this->sql = $sSql;
    }

    public function open() {
      $retorno = pg_query($this->conexaoBd->getInternalConnection(), $this->sql);
      if ($retorno) {
        $this->registros = pg_num_rows($query);
        $this->queryResource = queryResource;
        return true;
      }
    }

    public function getNextRow() {
      $linha = pg_fetch_assoc($this->queryResource);
      return $linha;
    }
  }

?>