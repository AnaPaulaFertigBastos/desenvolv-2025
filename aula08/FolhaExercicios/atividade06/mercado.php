<?php 

function compras($valores, $quantidades) : void {
  try {

    $dinheiro = 50;

    $total = 0;

    for ($i = 0; $i < count($valores); $i++) {

      $valor = $valores[$i];
      $qtde = $quantidades[$i];

      if (!is_numeric($valor) || !is_numeric($qtde)) {
        throw new Exception("Os valores devem ser numéricos!");
      }

      if ($valor == null || $qtde == null ) {
        throw new Exception("Valor nulo!");
      }

      $valor = (float) $valor;

      $qtde = (float) $qtde;

      $total += $valor * $qtde;

      $produto = $i + 1;
      echo "Produto $produto: Valor = $valor, Quantidade = $qtde<br>";
    }

    echo "Valor da compra: $total<br>";
    
    if ($total > $dinheiro) {
      $falta = $total - $dinheiro;
      echo "<span style='color: red; font-weight:400'>O valor ficou acima do disponível para Joãozinho! Faltam $falta reais.</span>";
    }
    elseif ($total < $dinheiro) {
      $sobra = $dinheiro - $total;
      echo "<span style='color: blue; font-weight:400'>Sobrou dinheiro! Ele poderá gastar $sobra reais.</span>";
    }
    else {
      echo "<span style='color: green; font-weight:400'>Saldo esgotado!";
    };

    echo "<br><a href='index.html'>Voltar</a>";
  }
  catch (Exception $e) {
    echo "Erro: " . $e->getMessage();;
  }
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
  compras(
    $_POST['valor'] ?? null,
    $_POST['qtde'] ?? null,
  );
};
?>