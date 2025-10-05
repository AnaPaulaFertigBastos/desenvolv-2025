<?php 
  //passar via QueryString

  $valor = $_REQUEST['valor'];
  $desconto = $_REQUEST['desconto'];

  function calcularDesconto($valor, $desconto) {
    $valorComDesconto = 0;
    try {
      if (!is_numeric($valor)) {
        throw new Exception("Valor não é número");
      }

      if (!is_numeric($desconto)) {
        throw new Exception("Desconto não é número");
      }

      if ($desconto < 0 || $desconto > 100) {
        throw new Exception("Desconto inválido");
      }
      

      if ($valor < 0) {
        throw new Exception("Valor inválido");
      }
      $valorComDesconto = $valor - ($valor * $desconto / 100);
    }
    catch (Exception $e) {
      echo "Erro: " . $e->getMessage() . "<br>";
    }
    
    return $valorComDesconto;
  }

  echo "Valor: $valor <br>";
  echo "Desconto: $desconto <br>";
  echo "Valor com desconto: " . calcularDesconto($valor, $desconto) . "<br>";
?>