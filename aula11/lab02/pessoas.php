<?php 
  function inserirPessoa($nome, $sobrenome, $email, $senha, $cidade, $estado) : void {
    try {
      $connectionString = "host=localhost port=5432 dbname=local user=postgres password=admin";
      $connection = pg_connect($connectionString);
      if ($connection) {

        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            throw new Exception("E-mail inválido");
        }

        $nome = filter_var($nome, FILTER_SANITIZE_STRING);
        $sobrenome = filter_var($sobrenome, FILTER_SANITIZE_STRING);
        $estado = filter_var($estado, FILTER_SANITIZE_STRING);
        $estado = strtoupper($estado);
        if (strlen($estado) != 2) {
            throw new Exception("O estado deve conter 2 caracteres.");
        }
        if (!preg_match("/^[A-Z]{2}$/", $estado)) {
            throw new Exception("O estado deve conter exatamente 2 letras.");
        }
        $cidade = filter_var($cidade, FILTER_SANITIZE_STRING);

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

