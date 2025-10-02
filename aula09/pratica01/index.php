<?php 
  $notasPorAluno = [
      "Maria" => [10, 8, 7, 9, 7],
      "João"  => [7, 5, 4, 9, 5]
  ];

  $faltasPorAluno = [
      "Maria" => [0, 1, 0, 0, 0],
      "João"  => [1, 1, 1, 0, 0]
  ];

  function mediaPorAluno($notasPorAluno) {
    foreach ($notasPorAluno as $aluno => $notas) {
      $soma = 0;
      foreach($notas as $nota) {
        $soma += $nota;
      }
      $media = $soma / count($notas);
      exibirMensagem("Média: " . $aluno . ": " . $media . " ");
      aprovacaoNotaStatus($media);
      exibirMensagem("<br>");
    };
  };

  function aprovacaoNotaStatus($media) {
    if ($media >= 7) {
      exibirMensagem("Aprovado por nota.");
    }
    else {
      exibirMensagem("Reprovado por nota.");
    }
  };

  function frequenciaAluno($faltasPorAluno) {
    foreach ($faltasPorAluno as $aluno => $aulas) {
      $somaFaltas = 0;
      foreach($aulas as $aula) {
        $somaFaltas += $aula;
      }
      $frequencia = 100 - (($somaFaltas / count($aulas)) * 100);
      exibirMensagem("Frequência: " . $aluno . ": " . $frequencia . "% ");
      aprovacaoFreqStatus($frequencia);
      exibirMensagem("<br>");
    };
  };

  function aprovacaoFreqStatus($frequencia) {
    if ($frequencia >= 70) {
      exibirMensagem("Aprovado por frequência.");
    }
    else {
      exibirMensagem("Reprovado por frequência.");
    }
  };

  function exibirMensagem($mensagem) {
    echo $mensagem;
  };

  mediaPorAluno($notasPorAluno);
  frequenciaAluno($faltasPorAluno);
?>