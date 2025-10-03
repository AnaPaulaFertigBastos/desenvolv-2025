<?php 

  require_once "funcoes.php";

  $notasPorAluno = [
        "Maria" => [10, 8, 7, 9, 7],
        "João"  => [7, 5, 4, 9, 5]
  ];

  $faltasPorAluno = [
      "Maria" => [0, 1, 0, 0, 0],
      "João"  => [1, 1, 1, 0, 0]
  ];

  try {
    mediaPorAluno($notasPorAluno);
    frequenciaAluno($faltasPorAluno);
  } catch(Exception $e) {
    exibirMensagem("Erro: " . $e->getMessage());
  } finally {
    exibirMensagem("Processamento finalizado!");
  }
  

?>