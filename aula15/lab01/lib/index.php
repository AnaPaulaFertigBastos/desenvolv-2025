<?php 

  require_once 'conexaobd.php';
  require_once 'query.php';
  
  DEFINE('BD_IP', 'localhost');
  DEFINE('BD_PORTA', '5432');
  DEFINE('BD_NOME', 'local');
  DEFINE('BD_USUARIO', 'postgres');
  DEFINE('BD_SENHA', 'admin');
  
  $conexaoBd = new conexaoBd(BD_IP, BD_PORTA, BD_NOME, BD_USUARIO, BD_SENHA);

  if ($conexaoBd->conecta()) {
    $query = new query($conexaoBd);
    $query->setSql("SELECT * FROM usuario");
    if ($query->open()) {
      while ($linha = $query->getNextRow()) {
        echo "ID: " . $linha['id'] . " - Nome: " . $linha['nome'] . "<br>";
      }
    }
  } else {
    echo "Falha na conexão com o banco de dados: " . $conexaoBd->getStatus() . "<br>";
  }

?>