<?php 
  require_once 'conectabd.php';
  require_once 'pessoas.php';
  require_once 'tabela.php';

  try {

    if ($_SERVER["REQUEST_METHOD"] === "POST") {
      inserirPessoa(
        $_POST['nome'] ?? null,
        $_POST['sobrenome'] ?? null,
        $_POST['email'] ?? null,
        $_POST['senha'] ?? null,
        $_POST['cidade'] ?? null,
        $_POST['estado'] ?? null
      );
      exibirTabela();
    };  

  } catch (Exception $e) {
    echo "Erro: " . $e->getMessage();;
  }

?>