<?php 
  //passar via QueryString

  // $valor = $_REQUEST['valor'];
  // $desconto = $_REQUEST['desconto'];

  $valor = isset($_REQUEST['valor']) ? $_REQUEST['valor'] : null;
  $desconto = isset($_REQUEST['desconto']) ? $_REQUEST['desconto'] : null;

  function calcularDesconto($valor, $desconto) {
    $valorComDesconto = 0;
    try {
      

      if (!is_numeric($valor) || !isset($valor)) {
        throw new Exception("Valor não é número");
      }

      if (!is_numeric($desconto) || !isset($desconto)) {
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