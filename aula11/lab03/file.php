<?php 
  define("arquivo", "./arquivo/dados.txt");
  define("arquivo2", "./arquivo/dados2.txt");
  if (file_exists(arquivo)) {
    echo "Arquivo encontrado.";
    $conteudo = file_get_contents(arquivo);
    echo "Conteúdo do arquivo: <br>";
    echo nl2br($conteudo);
    file_put_contents(arquivo2, "Novo conteúdo adicionado.\n", FILE_APPEND);
    echo "Conteúdo adicionado.";
  }
  else {
    echo "Arquivo não encontrado.";
  }

  //jsonencode

  //filter_santixr_email()
?>