<?php 
  function conexaoBanco() {
    $connectionString = "host=localhost port=5432 dbname=local user=postgres password=admin";
    $connection = pg_connect($connectionString);
    if (!$connection) {
      throw new Exception("Falha na conexão com o banco de dados.");
    }
    return $connection;
  }

?>