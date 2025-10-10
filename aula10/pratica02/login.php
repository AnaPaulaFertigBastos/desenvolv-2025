<?php 
  
  if (!isset($_COOKIE['usuario']) || !isset($_COOKIE['inicio_sessao'])) {
    $_COOKIE['usuario'] = $_POST['usuario'];
    $_COOKIE['senha'] = $_POST['senha'];
    $_COOKIE['inicio_sessao'] = date("d/m/Y H:i:s");


    setcookie("usuario", $_COOKIE['usuario'], time() + (60*5), "/");
    setcookie("senha", $_COOKIE['senha'], time() + (60*5), "/");

    setcookie("inicio_sessao", $_COOKIE['inicio_sessao'], time() + (60*5), "/");

    echo'<script>window.alert("dados perdidos")</script>';
    echo "Cookie inciado e usuário registrado!";
  }
  else {
    $_COOKIE['ultimo_acesso'] = date("d/m/Y H:i:s");
    echo "Usuário: " . $_COOKIE['usuario'] . " já está logado<br>";
    echo "Senha: " . $_COOKIE['senha'] . " já está logado<br>";
    echo "Início da Sessão: " . $_COOKIE['inicio_sessao'] . "<br>";
    echo "Último acesso: " . $_COOKIE['ultimo_acesso'] . "<br>";

    setcookie("usuario", $_COOKIE['usuario'], time() + (60*5), "/");
    setcookie("inicio_sessao", $_COOKIE['inicio_sessao'], time() + (60*5), "/");

    $cookieTime = (strtotime($_COOKIE['ultimo_acesso']) - strtotime($_COOKIE['inicio_sessao']));
    echo "Tempo de sessão " . $cookieTime  . " s <br>";

    if ($cookieTime > 10) {
      echo "Sessão expirada. Faça login novamente. <br>";
      echo '<a href="login.html">Login</a>';
    }
    else {
      echo'<script>window.alert("dados perdidos")</script>';
    }
  }

?>