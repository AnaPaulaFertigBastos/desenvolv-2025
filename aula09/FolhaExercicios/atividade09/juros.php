<?php 

function compras($valor_moto) : void {
  try {

    if ($valor_moto == null) {
      throw new Exception("Valor nulo!");
    }

    if (!is_numeric($valor_moto)) {
        throw new Exception("Os valores devem ser numéricos!");
    }

    $taxa_juros = 0.02;
    $parcelas = [24,36,48,60];

    $valor_moto = (float) $valor_moto;

    echo "Valor da moto: R$ " . $valor_moto . "<br>";

    for ($i = 0; $i < count($parcelas); $i++) {
      $montante = $valor_moto * (1 + $taxa_juros) ** $parcelas[$i];
      $valor_parcela = $montante / $parcelas[$i];

      $taxa_juros += 0.003;
      echo "Meses: " . $parcelas[$i] . " - Valor da parcela: R$ " . round($valor_parcela, 2) . " - Montante: R$ " . round($montante, 2) . "<br>";
    }

    echo "<br><a href='index.html'>Voltar</a>";
  }
  catch (Exception $e) {
    echo "Erro: " . $e->getMessage();
  }
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
  compras(
    $_POST['valor_moto'] ?? null,
  );
};
?>