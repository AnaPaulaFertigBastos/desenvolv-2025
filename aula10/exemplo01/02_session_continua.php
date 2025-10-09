<?php 
  session_start();

  if(isset($_SESSION['usuario'])) {
    echo "Sessão iniciada. Usuário logado: " . $_SESSION['usuario'] . "<br";
    echo "O seu identificador da sessão é " . session_id() . "<br>";
  }
  else {
    echo "Não foi identificada uma sessão de usuário.";
    echo '<a href="02_session_init.php">Acessar</a>';

  }

?>