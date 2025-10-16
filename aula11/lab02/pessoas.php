<?php 
  function inserirPessoa($nome, $sobrenome, $email, $senha, $cidade, $estado) : void {
    try {
      $connectionString = "host=localhost port=5432 dbname=local user=postgres password=admin";
      $connection = pg_connect($connectionString);
      if ($connection) {
        $query = "INSERT INTO tbpessoa (pesnome, pessobrenome, pesemail, pespassword, pescidade, pesestado) VALUES ($1, $2, $3, $4, $5, $6)";
        $result = pg_query_params($connection, $query, array($nome, $sobrenome, $email, $senha, $cidade, $estado));
        if ($result) {
          echo "Registro inserido com sucesso!";
        } else {
          throw new Exception("Falha ao inserir registro na tabela tbpessoa.");
        }
      } else {
        throw new Exception("Falha na conexão com o banco de dados.");
      }
    }
    catch (Exception $e) {
      echo "Erro: " . $e->getMessage();;
    }
  }

  if ($_SERVER["REQUEST_METHOD"] === "POST") {
    inserirPessoa(
      $_POST['nome'] ?? null,
      $_POST['sobrenome'] ?? null,
      $_POST['email'] ?? null,
      $_POST['senha'] ?? null,
      $_POST['cidade'] ?? null,
      $_POST['estado'] ?? null
    );
  };
?>

