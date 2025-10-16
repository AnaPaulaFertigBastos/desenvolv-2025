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

      $aDadosPessoa = array('Ana', 'Silva', 'ana@gmail.com', '12345', 'São Paulo', 'SP');

      $resultInsert = pg_query_params($connection,
        "INSERT INTO tbpessoa (pesnome, pessobrenome, pesemail, pespassword, pescidade, pesestado) VALUES ($1, $2, $3, $4, $5, $6)", 
        $aDadosPessoa);

      if ($resultInsert) {
        echo "<br>Registro inserido com sucesso!";
      } else {
        throw new Exception("Falha ao inserir registro na tabela tbpessoa.");
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

