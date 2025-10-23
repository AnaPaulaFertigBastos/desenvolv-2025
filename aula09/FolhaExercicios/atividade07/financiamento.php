<?php 

function compras($valor_carro, $qtde_parcelas, $valor_parcela) : void {
  try {

    if (!is_numeric($valor_carro) || !is_numeric($qtde_parcelas) || !is_numeric($valor_parcela)) {
        throw new Exception("Os valores devem ser numéricos!");
      }

    if ($valor_carro == null || $qtde_parcelas == null || $valor_parcela == null) {
      throw new Exception("Valor nulo!");
    }

    $valor_carro = (float) $valor_carro;

    $valor_parcela = (float) $valor_parcela;

    $n_parcelas = (int) $qtde_parcelas;

    if ($n_parcelas != $qtde_parcelas) {
      throw new Exception("O valor da quantidade de parcelas deve ser inteiro!");
    }

    $valor_gasto = $n_parcelas * $valor_parcela;

    $valor_juros_a_pagar = $valor_gasto - $valor_carro;

    $porcentagem = $valor_juros_a_pagar / $valor_carro * 100;

    echo "Valor de juros a pagar: $valor_juros_a_pagar<br>";
    echo "Porcentagem de juros: " . round($porcentagem, 2) . "%<br>";

    echo "<br><a href='index.html'>Voltar</a>";
  }
  catch (Exception $e) {
    echo "Erro: " . $e->getMessage();
  }
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
  compras(
    $_POST['valor_carro'] ?? null,
    $_POST['qtde_parcelas'] ?? null,
    $_POST['valor_parcela'] ?? null
  );
};
?>