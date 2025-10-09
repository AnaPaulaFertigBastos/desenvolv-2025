<?php 
  session_start();
  
  if (!isset($_SESSION['usuario'])) {
    $_SESSION['usuario'] = $_POST['usuario'];
    $_SESSION['senha'] = $_POST['senha'];
    $_SESSION['inicio_sessao'] = date("d/m/Y H:i:s");
    echo "Sessão inciada e usuário registrado!";
  }
  else {
    $_SESSION['ultimo_acesso'] = date("d/m/Y H:i:s");
    echo "Usuário: " . $_SESSION['usuario'] . " já está logado<br>";
    echo "Senha: " . $_SESSION['senha'] . " já está logado<br>";
    echo "Início da Sessão: " . $_SESSION['inicio_sessao'] . "<br>";
    echo "Último acesso: " . $_SESSION['ultimo_acesso'] . "<br>";

    echo "Tempo de sessão " . (strtotime($_SESSION['ultimo_acesso']) - strtotime($_SESSION['inicio_sessao'])) . " s";
  }

?>