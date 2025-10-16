<?php 
  try {
    $connectionString = "host=localhost port=5432 dbname=local user=postgres password=admin";
    $connection = pg_connect($connectionString);
    if ($connection) {  
      echo "Conexão estabelecida com sucesso!<br>";

      $result = pg_query($connection, "SELECT COUNT(*) AS QTDTABS FROM PG_TABLES");
      $resultTablePessoas = pg_query($connection, "SELECT COUNT(*) AS registros FROM tbpessoa");

      if ($result) {
        $row = pg_fetch_assoc($result); //FAZ UM fetch da linha que ele parou, carrega em um array associativo
        echo "Quantidade de tabelas: " . $row['qtdtabs'];
      } else {
        throw new Exception("Falha na consulta ao banco de dados.");
      }

      if($resultTablePessoas) {
        $rowPessoas = pg_fetch_assoc($resultTablePessoas);
        echo "<br>Quantidade de registros na tabela tbpessoa: " . $rowPessoas['registros'];
      } else {
        throw new Exception("Falha na consulta à tabela tbpessoa.");
      }

    }
    else {
      throw new Exception("Falha na conexão com o banco de dados.");  
    }

  }
  catch (Exception $e) {
    echo "Erro: " . $e->getMessage();
  }
?>

